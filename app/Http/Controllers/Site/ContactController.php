<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Contact;
use App\Mail\SendCustomMail;
use Mail;

class ContactController extends Controller
{
    /**
     * Display a company about us.
     *
     * @return \Illuminate\Http\Response
     */
      public function create()
      {
          return view('site.pages.contact.contact');
      }

    /**
     * Display a company about us.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $data = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
            'subject' => ''
         ]);

        // SENDING MAIL LOGICS HERE
         $this->sendMail($request);

         if ($data){
             $contact = Contact::create($data);
             return back()->with('success', ' message sent!!');
         }
         return back()->with('danger', 'Message sent failed ' . $data);

    }

    /**
     * Display a company about us.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendMail($request)
    {
          $mail = new Contact();

          $mail->name = $request->get('name');
          $mail->subject = $request->get('subject');
          $mail->message = $request->get('message');

          Mail::send(new SendCustomMail($mail));
    }

}
