<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMessage;
use Alert;

class ContactsController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function store(Request $request)
    {
        $contacts = Contact::create([
            'title' => $request->title,
            'body' => $request->body,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone
        ]);

        $view = 'mails.contact';
        $data = [
            'title' => $request->title,
            'body' => $request->body,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone
        ];

        Mail::send($view, $data, function ($message) use ($data) {
            $message->to($data['email'])->subject($data['title']);
        });
        
        alert()->success('您做得很棒！','您已經成功提交。');
        return redirect()->back();
    }
}