<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SayHelloController extends Controller
{
    public function index(){
        $name = 'Hello Jasmeet';
        return view('greet',[
            'Name' => $name,
        ]);
    }
    public function about(){
        return view('about');
    }

    public function service(){
        $collection = ['service1','service2','service3','service4','service5'];
        return view('service', [
            'collection' => $collection,
        ]);
    }
}
