<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showUser($id)
    {
        return "Hello User num $id";
    }
}
