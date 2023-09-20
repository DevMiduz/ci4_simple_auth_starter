<?php

function begin_session($data) {
	$session = session();
	$authData = [
		'username' => $data['username'],
		'is_logged_in' => true,
	];

	$session->set($authData);
}

function end_session() {
	$session = session();
	$authData = ['is_logged_in' => false];

	$session->set($authData);
}
