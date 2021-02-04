<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Method extends Controller
{
    public function req(Request $req){
    $req->method();
    return 'The requested method is ' . $req;
    }
    public function path(Request $req){
        return $req->path();
        return 'The requested path is ' . $req;
        }
    public function route(Request $req){
        return $req->url();
        return 'The requested method is ' . $req;
    }
    public function fullRoute(Request $req){
        return $req->fullUrl();
        return 'The requested method is ' . $req;
    }
}
