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
		$data = [
			'page_title' => 'Profile - ' . session()->username
		];

		return view('auth/account', $data);
	}

	public function update() {
		//
	}

	public function delete() {
		//
	}

	public function logout() {
		//
	}
}
