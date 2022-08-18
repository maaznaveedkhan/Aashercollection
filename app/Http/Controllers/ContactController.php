<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function contact_us()
    {
        return view('frontend.contactus');
    }

    public function new_message(Request $request){
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->status = 'pending';
        // dd($contact);
        $contact->save();

        return redirect()->back()->with('success','Your message has been received. We will respond you in a while!');
    }

    public function new_messages(){
        $messages = Contact::where('status','pending')->get();
        return view('admin.new_messages',compact('messages'));
    }

    public function old_messages(){
        $messages = Contact::where('status','responded')->get();
        return view('admin.old_messages',compact('messages'));
    }

    public function message_detail($id){
        $message = Contact::find($id);
        // $messages = Contact::where('status','responded')->get();
        return view('admin.message_detail',compact('message'));
    }
}
