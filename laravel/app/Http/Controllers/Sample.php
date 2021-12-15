<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class Sample extends Controller
{
    public function index() 
    {
        Redis::set("foo", "L");
        $s = Redis::get("foo");
        var_dump($s);
        return view("welcome");
    }
}
