<?php

namespace App\Modulos\Home\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller {

	public function __construct(){}

	public function inicio()
	{
		$user = Auth::user();

	    return view('material.sample');
	}
}