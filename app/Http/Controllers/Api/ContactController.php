<?php

namespace App\Http\Controllers\api;

use App\Contact;
use App\Http\Controllers\Controller;
use App\Mail\NewSiteContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request) {

    $data = $request->validate([

        "name" => "nullable|string",
        "email" => "email|required",
        "content" => "nullable|string|min:3"
    ]);

    $newContact = new Contact();
    $newContact->fill($data);
    $newContact->save();

    Mail::to('admin@sito.com')->send(new NewSiteContactMail($newContact));

    return response()->json($newContact);
}   
}
