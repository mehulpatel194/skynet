<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Http;

class ApiController extends Controller
{
    public function fetchdata()
    {
    	$jsondata = Http::get('https://jsonplaceholder.typicode.com/posts')->json();

    	return view('data',['jsondata' => $jsondata]);
    }
}
