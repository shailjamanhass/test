<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Profile extends Controller
{
    function index()
    {

    	$usersData =  DB::table('users')->get();
    	
    	return view('user')->with("data",$usersData);
    }
}
