<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getHome() {
		return view('pages.welcome');
	}
    public function getServices() {
		return view('pages.services');
	}	
}
