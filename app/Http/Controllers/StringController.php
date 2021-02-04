<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class StringController extends Controller
{
    public function index(){

        $slice = Str::of('hello world')->after('hello');
        echo $slice . '<br>';

        $slice2 = Str::of('App\Http\Controllers\Controller')->afterLast('\\');
        echo $slice2 . '<br>';

        $append = Str::of('Hello')->append('World');
        echo $append . '<br>';
        
        $lower = Str::of('LARAVEL 8')->lower();
        echo $lower . '<br>';

        $replace = Str::of('Laravel 5.0')->replace('5.0', '8.0');
        echo $replace . '<br>';

        $title = Str::title('welcome to my world');
        echo $title . '<br>';

        $slug = Str::slug('I must endure', '-');
        echo $slug . '<br>';

        $substr = Str::of('Keep it together')->substr(4);
        echo $substr . '<br>';

        $trim = Str::of('I am everywhere')->trim('e');
        echo $trim . '<br>';

        $upper = Str::of('Laravel is good')->upper();
        echo $upper . '<br>';
    }
}
