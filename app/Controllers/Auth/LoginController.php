<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;

/**
 *   Handles functions for login.
 **/
class LoginController extends BaseController {
	public function index() {
		return view('auth/login');
	}

	public function login() {
		//
	}
}
