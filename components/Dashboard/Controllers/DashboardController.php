<?php namespace Components\Dashboard\Controllers;

use Pingpong\Modules\Routing\Controller;

class DashboardController extends Controller {
	
	public function index()
	{
		return view('dashboard.index');
	}
	
}