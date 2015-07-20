<?php namespace Components\Business\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class BusinessController extends Controller {
	
	public function index()
	{
		return view('business::index');
	}
	
}