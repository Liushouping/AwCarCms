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
        $this->validate($request, [
            'title' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'name'=>'required',
            'body' => 'required',
            'captcha' => ['required', 'captcha']
        ],
            [
            'captcha.required' => '驗證碼不能為空',
            'captcha.captcha' => '請輸入正確的驗證碼',
            ]
         );

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

        // Mail::send($view, $data, function ($message) use ($data) {
        //     $message->to($data['email'])->subject($data['title']);
        // });
        
        return redirect()->back()->with('success','您已經成功提交。');
    }
}