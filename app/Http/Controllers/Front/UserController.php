<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
class UserController extends Controller
{
 public function ShowUserName(){

    return 'Muhammed.Manfy';
 }

 public function index(){
   // $data=[];
   // $data['id']=1;
   // $data['name']='Muhammed';

   // return view('welcome',$data);
   // $obj=new\stdClass();
   // $obj->id=5;
   // $obj->name='muhammed';
   $data=['Muhammed','Firas'];
   return view('welcome',compact('data'));
}
}