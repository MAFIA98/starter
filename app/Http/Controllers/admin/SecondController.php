<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SecondController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('showString3');
    }

    public function showString(){

        return 'Static String';
    }

    public function showString1(){

        return 'Static String1';
    }

    public function showString2(){

        return 'Static String2';
    }

    public function showString3(){

        return 'Static String3';
    }

    public function showString4(){

        return 'Static String4';
    }
}
