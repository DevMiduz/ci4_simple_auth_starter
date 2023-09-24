<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Models\UserModel;

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
		$session = session();

		$data = [
			'page_title' => 'Profile - ' . $session->username,
			'username' => $session->username
		];

		return view('auth/account', $data);
	}

	public function update() {

		//Check the old_password matches the current password.
		//Check the new password matches the requirements.
		//Check the confirm password matches the new password.
		//Update the session.

		$data = $this->request->getPost(['old_password', 'new_password', 'confirm_password']);

		if (!$this->validate([
			'old_password' => 'required|max_length[255]|min_length[8]|alpha_numeric_punct',
			'new_password' => 'required|max_length[255]|min_length[8]|alpha_numeric_punct',
			'confirm_password' => 'required|max_length[255]|min_length[8]|alpha_numeric_punct|matches[new_password]',
		])) {
			return redirect()->back()->withInput();
		}

		$session = session();
		$model = new UserModel();
		$user = $model->where('username', $session->username)->first();

		if (!$user || !password_verify($data['old_password'], $user['password'])) {
			session()->setFlashdata('error', 'Old Password Incorrect.');
			return redirect()->back()->withInput();
		}

		$password = password_hash($data['new_password'], PASSWORD_DEFAULT);

		if ($model->update($user['id'], [
			'password' => $password,
			'password_confirm' => $password,
		]) === false) {
			session()->setFlashdata('error', implode('<br/>', $model->errors()));
			return redirect()->back()->withInput();
		}

		session()->setFlashdata("message", "User successfully updated.");

		return redirect('auth/account');
	}

	public function delete() {
		//
	}

	public function logout() {
		//
	}
}
