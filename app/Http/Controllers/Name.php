<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Name extends Controller
{
    public function wel($name){
        return 'welcome '. $name;
    }
}
