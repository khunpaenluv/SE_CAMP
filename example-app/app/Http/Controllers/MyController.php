<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    private $myvar ="Hello world!";
    function __construct()
    {

    }
    public function index(){
    return view('home');
    }
    public function store(request $req){
        $data['myinput'] = $request->input('myinput');
    return view('myroute', $data);
    }
}
