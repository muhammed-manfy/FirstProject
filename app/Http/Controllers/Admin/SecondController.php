<?php

namespace App\Http\Controllers\Admin;
//use App\Http\Controllers\Admin;
use Illuminate\Routing\Controller;
use Illuminate\Http\Requset;
class SecondController extends Controller
{
    public function secondString(){
        return 'Second String';
    }
}
