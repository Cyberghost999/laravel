<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index(Request $req)
    {
        if ($req->session()->has('name')){
            echo $req->session()->get('name');
        }
        else {
            echo 'No data in the session';
        }
    }
    
    public function store(Request $req)
    {
        $req->session()->put('name','Vansh');
        echo "Data has been added";
    }

    public function delete(Request $req)
    {
        $req->session()->flush();
        echo "Session data removed";
    }
    public function show(Request $req)
    {
        $data = $req->session()->all();
        // json_decode($data);
        return $data;
    }
}
