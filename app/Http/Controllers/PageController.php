<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
   	public function home(){

		$people=['Ali', 'Sara' , 'Peyman'];

    	return view('welcome')->with('people', $people);
	}
	public function about(){

	    return view('pages.about');

	}
}
