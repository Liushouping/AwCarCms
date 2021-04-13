<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationsController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required', //
            'gender' => 'required',  //
            'age' => 'required',
            'car' => 'required',
            'power' => 'required',
            'date' => 'required',
            'time' => 'required',
            'email' => 'email', //
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',  //
            'captcha' => ['required', 'captcha'] //
        ],
            [
            'captcha.required' => '驗證碼不能為空',
            'captcha.captcha' => '請輸入正確的驗證碼',
            ]
         );

        $reservations = Reservation::create([
            'age' => $request->age,
            'gender' => $request->gender,
            'car' => $request->car,
            'power' => $request->power,
            'body' => $request->body,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'date' => $request->date,
            'time' => $request->time,
        ]);

        // $title = $request->title;
        // $body = $request->body;
        // $name = $request->name;
        // $email = $request->email;
        // $phone = $request->phone;

        // Mail::to($email)->send(new Contactsendmail($title, $body, $name, $email ,$phone));
        return redirect()->back()->with('success','您已經成功提交。');
    }
}
