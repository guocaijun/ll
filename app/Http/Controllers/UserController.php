<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use A;
class UserController extends Controller
{
    //
    public function index(){
    	// send();
    	$a=new A();
    	$a->sendphone();
    }
}
