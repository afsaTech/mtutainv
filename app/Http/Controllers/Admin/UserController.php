<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use Illuminate\Support\Arr;

class UserController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    function __construct()
    {
       $this->middleware('permission:user-list|user-create|user-edit|user-delete', ['only' => ['index','show']]);
       $this->middleware('permission:user-create', ['only' => ['create','store']]);
       $this->middleware('permission:user-edit', ['only' => ['edit','update']]);
       $this->middleware('permission:user-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::select('*')
            ->orderBy('updated_at', 'DESC')
            ->paginate(10);
        return view('admin.pages.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::pluck('name','name')->all();
        return view('admin.pages.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request['name'];
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);

        try {
            if (empty($request['name']) || empty($request['email'])) {
                return back()->with('danger', 'field should not be empty');
            }

            $explode = explode(' ', $name);
            $initialPaswd = strtolower($explode[0] . '@' . date('Ymd'));

            $user = User::create([
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'password' => \Hash::make($initialPaswd),
            ]);
            $user->assignRole($request->input('roles'));

            if ($user) {
                return redirect()
                    ->route('users.index')
                    ->with('success', 'User added successfull with default password >> '.$initialPaswd);
            }
            return back()->with('danger', 'Error occured no user added please try again');

        } catch (\Exception $e) {
            $request->session()->flash('danger', 'Error occured that says ' . $e->getMessage());
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('admin.pages.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();
        return view('admin.pages.users.edit', compact('user','roles','userRole'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
        ]);

        try {
            $user = User::findOrFail($id);
            $currentPaswd = $request->hidden_paswd;

            $user->name = $request->get('name');
            $user->email = $request->get('email');
            $user->password = $currentPaswd;

            if ($user->update()) {
              DB::table('model_has_roles')->where('model_id',$id)->delete();
              $user->assignRole($request->input('roles'));

              return back()->with('success', 'Updated successfully');
            }
            return back()->with('danger', 'Error occured please check and try again!');

        } catch (\Exception $e) {
            $request->session()->flash('danger', 'Error occured that says ' . $e->getMessage());
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if ($user->delete()) {
            return back()->with('success', 'User deleted');
        }
        return back()->with('danger', 'Deletion failed, please check and try again');
    }
}
