<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;

/**
 *   Handles functions for Accounts which:
 *   - already exist.
 *   - are logged in.
 *
 *   View Account Details (profile).
 *   Change Password.
 *   Logout.
 **/
class AccountController extends BaseController {
	public function index() {
		return view('auth/account');
	}

	public function update() {
		//
	}

	public function logout() {
		//
	}
}
