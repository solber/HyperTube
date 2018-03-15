<?php
	if (session_status() == PHP_SESSION_NONE) { session_start(); }
	if (file_exists("required/functions.php"))
	{
		require 'required/functions.php';
		require 'required/lang.php';	
	}
	else
	{
		require '../required/functions.php';
		require '../required/lang.php';
	}
	
	iConnected();

	if (empty($_POST))
		put_flash('danger', $errors[$_SESSION['lang']]['empty_post'], "/");


	$username = $_POST['username'];
	$mail = $_POST['email'];
	$fname = $_POST['fname'];
	$psw = $_POST['password'];
	$pswr = $_POST['passwordr'];


	if (empty($username) || empty($mail) || empty($fname) || empty($psw) || empty($pswr))
		put_flash('danger', $errors[$_SESSION['lang']]['empty_fields'], "fb-register");

	if (strlen($username) < 4 || strlen($psw) < 5 || strlen($psw) > 20)
		put_flash('danger', $errors[$_SESSION['lang']]['invalid_size'], "fb-register");

	if (!preg_match('/^[a-zA-Z0-9]+$/', $username) || !preg_match('/^[a-zA-Z0-9]+$/', $psw))
		put_flash('danger', $errors[$_SESSION['lang']]['invalid_char_alpha_num'], "fb-register");

	if (!preg_match('/^[a-zA-Z0-9 -]+$/', $fname))
		put_flash('danger', $errors[$_SESSION['lang']]['invalid_char_alphadash'], "fb-register");

	if ($psw !== $pswr)
		put_flash('danger', $errors[$_SESSION['lang']]['same_password'], "fb-register");

	require 'required/database.php';

	$req = $pdo->prepare("SELECT * FROM users WHERE username = ?");
	$req->execute([$username]);
	$entry = $req->fetch();

	if ($entry){ put_flash("danger", $errors[$_SESSION['lang']]['taken_username'], "fb-register"); }

	$req = $pdo->prepare("SELECT * FROM users WHERE mail = ?");
	$req->execute([$mail]);
	$entry = $req->fetch();

	if ($entry){ put_flash("danger", $errors[$_SESSION['lang']]['taken_email'], "fb-register"); }

	$password = password_hash($psw, PASSWORD_BCRYPT);

	$req = $pdo->prepare("INSERT INTO users SET username = ?, mail = ?, password = ?, fname = ?, uniq_id = ?, profile_pic = ?");

	if (!$req->execute([$username, $mail, $password, $fname, $_SESSION['fb_user_id'], $_SESSION['fb_profile_pic']]))
		put_flash('danger', $errors[$_SESSION['lang']]['impossible_dbrequest'], "fb-register");

	put_flash('success', $errors[$_SESSION['lang']]['account_created'], "login");