<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
//        return redirect('article');
        return view('age');
    }

    public function about()
    {
        return "About us";
    }

    public function welcome()
    {
        return view('welcome');
    }

    public function session1()
    {
        Session::put('name','Ali');
        Session::put('family','Saeedi');
        Session::flash('site','hTc.com'); // put for first use; then removes from session
    }

    public function session2()
    {
//        return Session::get('name','no name'); //get name
        return Session::pull('name','no name'); //get name and remove from session
    }

    public function session3()
    {
        $val = Session::all();
        return $val;
    }

    public function session4()
    {
        $val = Session::forget('name');
        return $val;
    }

    public function session5()
    {
        $val = Session::flush();
        return $val;
    }
}
