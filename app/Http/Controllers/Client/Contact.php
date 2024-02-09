<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Client\Controller;
use Illuminate\Http\Request;
use App\Mail\Contact as ContactMail;
use Illuminate\Support\Facades\Mail;

class Contact extends Controller
{
  public function index($locale)
  {
    return $this->load('client.contact', 'contact', $locale);
  }

  public function send(Request $request)
  {
    $this->validate($request, [
      'name' => 'required',
      'email' => 'required|email',
      'phone' => 'required',
      'message' => 'required'
    ]);

    $data = $request->all();
    
    Mail::to(env('MAIL_USERNAME'))->send(new ContactMail($data));

    return redirect()->back()->with('success', 'Message-ContactSent');
  }
}
