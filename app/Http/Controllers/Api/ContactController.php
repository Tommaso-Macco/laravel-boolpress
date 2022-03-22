<?php

namespace App\Http\Controllers\api;

use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

    return response()->json($newContact);
}   
}
