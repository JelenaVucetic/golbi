<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\OrderMail;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;
class OrderEmailController extends Controller
{
    public function send(Request $request) 
    {
        $this->validate($request, [
            'specification' => 'required',
            'number' => 'required',
            ]);
        
        
         $document = $request->file('document');

         if ($document->getError() == 1) {
            $max_size = $document->getMaxFileSize() / 1024 / 1024;  // Get size in Mb
            $error = 'The document size must be less than ' . $max_size . 'Mb.';
            return redirect()->back()->with('flash_danger', $error);
        }

        $order = array (
            'title' => $request->title,
            'specification' => $request->specification,
            'number' => $request->number,
            'info' => $request->info,
            'document' => $document
        );
        Alert::success('Vaša poruka je poslata', 'Hvala vam što ste nas kontaktirali!')->showConfirmButton('OK', '#EC1C24')->autoClose(5000)->width('35%')->padding('100px');
        Mail::to('it@qqriq.me')->send(new OrderMail($order));
        return back()->with('success', 'Hvala vam što ste nas kontaktirali!');
    }
}
