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

		$password = password_hash($this->request->getVar('password'), PASSWORD_DEFAULT);

		if ($model->save([
			'username' => $this->request->getVar('username'),
			'password' => $password,
			'password_confirm' => $password,
		]) === false) {
			$this->errors = $model->errors();
			return print_r($model->errors(), true);
			return redirect()->back()->withInput();
		}

		return redirect('auth/login');

	}
}