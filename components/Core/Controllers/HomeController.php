<?php namespace Components\Core\Controllers;

use Illuminate\Http\Request;
use Pingpong\Modules\Routing\Controller;

class HomeController extends Controller {

	protected $data;

	function __construct(Request $request) {
		$this->data['page_title'] = 'Home';
	}

	public function index()
	{
		return view('pages.home', $this->data);
	}
}