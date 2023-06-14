<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendMailController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone-number' => 'required',
            'message' => 'required'
        ]);
        $mailData = [
            'name' => $request->name,
            'title' => 'Mail from Nguyen Minh Quang',
            'body' => 'Chúng tôi đã nhận được tin nhắn từ bạn'
        ];
        Mail::to($request->email)->send(new SendMail($mailData));
        return redirect('/')->with('status', 'Gửi email thành công');
    }
}
