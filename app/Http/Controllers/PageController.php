<?php

namespace App\Http\Controllers;

use App\Maintest;

class PageController extends Controller
{
    public function getIndex($url=null){
		
		
		$obj=Maintest::where('url', $url)->first();
		return view('page', compact('obj'));
	}
}
