<?php

namespace App\Http\Controllers;

use http\Message;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MessageFromContactForm;

class ContactController extends Controller
{

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
        $content = request()->validate([
            'lastname' => 'required',
            'firstname' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required'
        ]);

        Mail::to('dinovertcda@gmail.com')->send(new MessageFromContactForm($content));
    }

    public function getContact() {

        return view('contact_us');
    }

    public function saveContact(Request $request) {

        $this->validate($request, [
            'lastname' => 'required',
            'firstname' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $contact = new Contact;

        $contact->lastname = $request->lastname;
        $contact->firstname = $request->firstname;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;

        $contact->save();

        Mail::send('emails.contact_email',
            array(
                'lastname' => $request->get('lastname'),
                'firstname' => $request->get('firstname'),
                'email' => $request->get('email'),
                'subject' => $request->get('subject'),
                'user_message' => $request->get('message'),
            ), function($message) use ($request)
            {
                $message->from($request->email);
                $message->to('dinovertcda@gmail.com');
            });

        return back()->with('success', 'Thank you for contact us!');

    }
}
