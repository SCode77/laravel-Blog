<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $name = "ali";
        $family = "marmooulak";
        $age = 20;
        $user = [
            'name' => 'saed',
            'family' => 'fayaz',
            'age' => 17
        ];
//        return  view('index',compact('user'));
        return redirect('article');
    }

    public function about()
    {
        return "About us";
    }

    public function welcome()
    {
        return view('welcome');
    }
}
