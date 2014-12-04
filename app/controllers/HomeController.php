<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	//logeo de sesión
	public function showLogin(){
		//show the form
		if (Auth::check()) {//proteccion de recursos si esta logeado mostrara los recursos
			return Redirect::to('students.index');
		}else{
			$this->layout->content = View::make('home.login');
		}
	}

	//cierre de sesión..
	public function doLogout()
	{
		Auth::logout(); // log the user out of our application
		return Redirect::to('login'); // redirect the user to the login screen
	}
	
	public function doLogin(){
		// validate the info, create rules for the inputs
		$rules = array(
			'num_control'    => 'required|num_control', // make sure the email is an actual email
			'password' => 'required|alphaNum|min:8' // password can only be alphanumeric and has to be greater than 3 characters
		);

		// run the validation rules on the inputs from the form
		$validator = Validator::make(Input::all(), $rules);

		// if the validator fails, redirect back to the form
		if ($validator->fails()) {
			return Redirect::to('home.login')
				->withErrors($validator) // send back all errors to the login form
				->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
	}else {

			// create our user data for the authentication
			$userdata = array(
				'num_control' 	=> Input::get('num_control'),
				'password' 	=> Input::get('password')
			);

			// attempt to do the login
			if (Auth::attempt($userdata, Input::get('rememberme',0))) {

				// validation successful!
				// redirect them to the secure section or whatever
				// return Redirect::to('secure');
				// for now we'll just echo success (even though echoing in a controller is bad)
				echo 'BIENVENIDO!';
				return Redirect::to('students.index');

			} else {	 	

				// validation not successful, send back to form	
				return Redirect::to('home.login');

			}

		}
	}
}
