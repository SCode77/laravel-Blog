<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function store(Request $request)
    {
        return "Name: ".$request->name . " <br> Email: ". $request->email;
    }
}
