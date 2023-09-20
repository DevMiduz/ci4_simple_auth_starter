<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Models\UserModel;

/**
 *   Handles functions for login.
 **/
class LoginController extends BaseController {
	public function index() {
		return view('auth/login');
	}

	public function login() {
		$model = new UserModel();

		$data = $this->request->getPost(['username', 'password']);

		if (!$this->validate($model->validationRules)) {
			return redirect()->back()->withInput();
		}

		//$model->save($this->validator->getValidated();

		return redirect('auth/login');
	}
}
