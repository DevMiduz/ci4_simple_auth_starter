<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Models\UserModel;

/**
 *   Handles functions for registering accounts.
 **/
class RegisterController extends BaseController {
	public function index() {
		return view('auth/register');
	}

	public function register() {

		/*
			if ($_SERVER['REMOTE_ADDR'] != '127.0.0.1') {
				return $this->response->setStatusCode(403)->setBody("Forbidden.");
			}
		*/

		$model = new UserModel();

		$data = $this->request->getPost(['username', 'password', 'password_confirm']);

		if (!$this->validate($model->validationRules)) {
			return redirect()->back()->withInput();
		}

		$model->save($this->validator->getValidated();

		return redirect('auth/login');

	}
}