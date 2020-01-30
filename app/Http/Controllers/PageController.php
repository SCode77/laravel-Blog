<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        Session::put('name', 'Ali');
        Session::put('family', 'Saeedi');
        Session::flash('site', 'hTc.com'); // put for first use; then removes from session
    }

    public function session2()
    {
//        return Session::get('name','no name'); //get name
        return Session::pull('name', 'no name'); //get name and remove from session
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

    public function products()
    {
        $products = DB::table('products')->get();
//        $products = DB::table('products')->where('date','>','2012')->get();
//        $products = DB::table('products')->where('price' ,'>' ,'4000')->get();
//        $products = DB::table('products')->where('price','1700')->get();
//        $products = DB::table('products')->where('price','1700')->where('date','2018')->get();
//        $products = DB::table('products')->where('price','1700')->orWhere('price','1500')->get();
//            DB::table('products')->delete();
//        DB::table('products')->truncate();
//                $products = DB::table('products')->where('date','2017')->get();

        return view('product', compact('products'));
    }

    public function submitProduct(Request $request)
    {
        if ((new Product($request->all()))->save())
            Session::flash('server-message', 'Your Product saved successfully ☺');
        return back();
    }
}
