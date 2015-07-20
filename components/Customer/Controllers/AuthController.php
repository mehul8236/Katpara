<?php namespace Components\Customer\Controllers;

use Illuminate\Http\Request;
use Pingpong\Modules\Routing\Controller;

class AuthController extends Controller {
	
	/**
	 * username of the user
	 * @var string
	 */
	private $login;

	/**
	 * password of the user
	 * @var string
	 */
	private $password;

	/**
	 * remember me token for the user
	 * @var string
	 */
	private $remember_me;

	/**
	 * The request object
	 * @var [type]
	 */
	private $request;
	/**
	 * Request depedency injection, that stores 
	 * user's username and password
	 * @param Request $request Request object
	 */
	function __construct(Request $request){
		$this->request = $request;
		$this->login = $request->input('username');
		$this->password = $request->input('password');
		$this->remember_me = $request->input('remember_me');
	}

	/**
	 * The function will be executed each time a user
	 * makes login request.
	 * @return Response the response will be sent back
	 */
	public function index()
	{
		$validator = \Validator::make($this->request->all(),$this->_rules());

		if($validator->fails()) {
			return redirect()->route('home')
							 ->withErrors(\Lang::get('core.validation_failed'));
		}

		$field = filter_var($this->login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
		$this->request->merge([$field => $this->login]);

		if(\Auth::attempt($this->request->only($field, 'password'), $this->remember_me))
		{
			$now = \Carbon::now();
			$ip = $this->request->getClientIp();

			if("::1" == $ip)
				$ip = "99.227.205.233";

			$location = \GeoIP::getLocation($ip);
			dd($location);

			$login = \Auth::user()->updateUserLogin($now, $ip);

			if(false == $login) {
				die("can't update user property table!");
			}



			return redirect()->route('home');
		} else {
			return redirect()->route('home')
							 ->withErrors(\Lang::get('core.login_failed'))
							 ->withInput(\Input::except('password'));
		}
	}

	private function _rules()
	{
	    return [
	       'username' => 'required',
	       'password' => 'required'
	    ];
	}

	public function logout() {

	    \Auth::logout();
	    \Session::flush();

	    return redirect()->route('home');
	}
	
}