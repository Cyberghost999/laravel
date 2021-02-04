<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FruitController extends Controller
{
    public function index(){
        $fruits = array('mango', 'apple', 'banana');
        return view('name',compact('fruits'));
    }
}
