<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustmerController extends Controller
{
   // create a record 
 public function index(){

        return view ('test');

 }

    public function store(){

    //     custmer::create([
    
    //     "fullname" => "aseel",
    //     "email" => "aseel@gmail.com",
    //     "password" => "123456",
    //     "mobile" => "0786419744",
    
    // ]);

return"hi";
    //       return view("test", [
    //        "custmerinfo" => $custmer;
    //    ]); 
    
    
    }

}
