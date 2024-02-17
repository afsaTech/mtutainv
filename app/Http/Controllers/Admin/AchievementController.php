<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Achievement;
use App\Models\Admin\Category;
use Illuminate\Http\Request;

class AchievementController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    function __construct()
    {
       $this->middleware('permission:achievement-list|achievement-create|achievement-edit|achievement-delete', ['only' => ['index','show']]);
       $this->middleware('permission:achievement-create', ['only' => ['create','store']]);
       $this->middleware('permission:achievement-edit', ['only' => ['edit','update']]);
       $this->middleware('permission:achievement-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $achs = Achievement::select('*')
            ->orderBy('updated_at', 'desc')
            ->paginate(10);
        return view('admin.pages.achievement.index', compact('achs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats = Category::select('*')
            ->orderBy('created_at', 'desc')
            ->get();
        return view('admin.pages.achievement.create', compact('cats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $req = $request->validate([
            'title' => 'required',
            'abstract' => 'required',
            'category_id' => 'required',
            'date' => 'required',
            'image' => 'required|image',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $extension = $image->getClientOriginalExtension();

            if ($extension != null) {
                $filename = date("Y_m_d_h_i") . '_' . rand(0, 200) . '.' . $extension;
                $path = $image->storeAs('pmphub-achievement', $filename, 'pmphub-achievement');

                $ach = new Achievement();
                $ach->title = $request->get('title');
                $ach->abstract = $request->get('abstract');
                $ach->category_id = $request->get('category_id');
                $ach->date = $request->get('date');
                $ach->image = $path;
            } else {
                return back()->with('danger', 'File extension not supported');
            }
        } else {
            $ach = new Achievement();
            $ach->title = $request->get('title');
            $ach->abstract = $request->get('abstract');
            $ach->category_id = $request->get('category_id');
            $ach->date = $request->get('date');
        }

        if ($ach->save()) {
            return back()->with('success', "Data added successfully");
        } else {
            return back()->with('danger', "Error: please check and try agian");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\Achievement  $achievement
     * @return \Illuminate\Http\Response
     */
    public function show(Achievement $achievement)
    {
        $ach = $achievement;
        return view('admin.pages.achievement.show', compact('ach'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\Achievement  $achievement
     * @return \Illuminate\Http\Response
     */
    public function edit(Achievement $achievement)
    {
        $ach = $achievement;
        $cats = Category::select('*')
            ->orderBy('created_at', 'desc')
            ->get();
        return view('admin.pages.achievement.edit', compact('ach', 'cats'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\Achievement  $achievement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Achievement $achievement)
    {
        $req = $request->validate([
            'title' => 'required',
            'abstract' => 'required',
            'category_id' => 'required',
            'date' => 'required',
            'image' => '',
            'status' => 'required',
        ]);

        $achievement = Achievement::findOrFail($achievement->id);

        if ($request->hasFile('image')) {
            $newImage = $request->file('image');
            $extension = $newImage->getClientOriginalExtension();

            if ($extension != null) {
                $filename = date("Y_m_d_h_i") . '_' . rand(0, 200) . '.' . $extension;
                $path = $newImage->storeAs('pmphub-achievement', $filename, 'pmphub-achievement');

                $update_ach = $achievement->update([
                    'title' => $request->get('title'),
                    'abstract' => $request->get('abstract'),
                    'category_id' => $request->get('category_id'),
                    'date' => $request->get('date'),
                    'image' => $path,
                    'status' => $request->get('status'),
                ]);
            } else {
                return back()->with('danger', 'File extension not supported');
            }
        } else {
            $upimg = $request->hidden_image;
            $update_ach = $achievement->update([
                'title' => $request->get('title'),
                'abstract' => $request->get('abstract'),
                'category_id' => $request->get('category_id'),
                'date' => $request->get('date'),
                'image' => $upimg,
                'status' => $request->get('status'),
            ]);
        }

        if ($update_ach) {
            return redirect()
                ->route('achievement.index')
                ->with('success', 'Record updated');
        } else {
            return back()->with('danger', 'Error occured, please check and try again');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Achievement  $achievement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Achievement $achievement)
    {
        if ($achievement->delete()) {
            return back()->with('success', 'Record deleted');
        }
        return back()->with('danger', 'Deletion failed, please check and try again');
    }

}
