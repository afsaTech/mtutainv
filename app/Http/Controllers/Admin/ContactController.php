<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
      /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
      */
      function __construct()
      {
         $this->middleware('permission:contact-list|contact-create|contact-edit|contact-delete', ['only' => ['index','show']]);
         $this->middleware('permission:contact-create', ['only' => ['create','store']]);
         $this->middleware('permission:contact-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:contact-delete', ['only' => ['destroy']]);
      }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conts = Contact::select('*')
            ->orderBy('updated_at', 'desc')
            ->paginate(10);
        return view('admin.pages.contact.index', compact('conts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => '',
            'message' => 'required',
        ]);

        $cont = new Contact();
        $cont->name = $request->get('name');
        $cont->email = $request->get('email');
        $cont->subject = $request->get('subject');
        $cont->message = $request->get('message');
        $cont->save();

        return back()->with('success', "Your message sent");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        return view('admin.pages.contact.show')->with('cont', $contact);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        if ($contact->delete()) {
            return back()->with('success', 'Message deleted');
        }
        return back()->with('danger', 'Deletion failed, please check and try again');
    }
}
