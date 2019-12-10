<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;
class SendEmailController extends Controller
{
    public function send(Request $request) 
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'title' => 'required',
            'message' => 'required'
            ]);
        
        $data = array (
            'name' => $request->name,
            'title' => $request->title,
            'message' => $request->message
        );
        Alert::success('Vaša poruka je poslata', 'Hvala vam što ste nas kontaktirali!')->showConfirmButton('OK', '#EC1C24')->autoClose(5000)->width('35%')->padding('100px');
        Mail::to('it@qqriq.me')->send(new SendMail($data));
        return back()->with('success', 'Hvala vam što ste nas kontaktirali!');
    }
}
