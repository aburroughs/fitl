<?php

namespace App\Http\Controllers;

//gives access to built in controller class
use App\Http\Controllers\Controller;

//create new class which borrows functionality from built in Contoller class
class PageController extends Controller
{
	public function about()
	{
		return view('pages/about');
	}

}
