<?php
	if (!file_exists("required/database.php"))
		header("Location: index");
	if (session_status() == PHP_SESSION_NONE) { session_start(); }
	require '/required/functions.php';
	require 'required/lang.php';
	iConnected();

	if (empty($_POST))
		put_flash('danger', "Error : Empty POST", "/");

	$username = $_POST['username'];
	$mail = $_POST['email'];
	$fname = $_POST['fname'];
	$psw = $_POST['password'];
	$pswr = $_POST['passwordr'];

	if (empty($username) || empty($mail) || empty($fname) || empty($psw) || empty($pswr))
		put_flash('danger', $errors[$_SESSION['lang']]['empty_fields'], "register");

	if (strlen($username) < 4 || strlen($username) > 254 || strlen($psw) < 5 || strlen($psw) > 20 || strlen($mail) > 254 || strlen($fname) < 5 || strlen($fname) > 254)
		put_flash('danger', $errors[$_SESSION['lang']]['invalid_size'], "register");

	if (!preg_match('/^[a-zA-Z0-9]+$/', $username) || !preg_match('/^[a-zA-Z0-9]+$/', $psw))
		put_flash('danger', $errors[$_SESSION['lang']]['invalid_char_alpha_num'], "register");

	if (!preg_match('/^[a-zA-Z0-9 -]+$/', $fname))
		put_flash('danger', $errors[$_SESSION['lang']]['invalid_char_alphadash'], "register");

	if ($psw !== $pswr)
		put_flash('danger', $errors[$_SESSION['lang']]['same_password'], "register");

	require '/required/database.php';

	$req = $pdo->prepare("SELECT * FROM users WHERE username = ?");
	$req->execute([$username]);
	$entry = $req->fetch();

	if ($entry){ put_flash("danger", $errors[$_SESSION['lang']]['taken_username'], "register"); }

	$req = $pdo->prepare("SELECT * FROM users WHERE mail = ?");
	$req->execute([$mail]);
	$entry = $req->fetch();

	if ($entry){ put_flash("danger", $errors[$_SESSION['lang']]['taken_email'], "register"); }

	$password = password_hash($psw, PASSWORD_BCRYPT);

	require '../vendor/autoload.php';
    $secret = "6LdhCkgUAAAAANgZfq_1pM5g3k6FVUqTiOZyD5dw";

    if (empty($_POST['g-recaptcha-response']))
    	put_flash('danger', $errors[$_SESSION['lang']]['empty_captcha'], "register");

	$recaptcha = new \ReCaptcha\ReCaptcha($secret);
	$resp = $recaptcha->verify($_POST['g-recaptcha-response']);

	if (!$resp->isSuccess())
		put_flash('danger', $errors[$_SESSION['lang']]['impossible_dbrequest'], "register");

	if (isset($_SESSION['42_id']))
	{
		//die(var_dump($_SESSION['42_id']));
		$req = $pdo->prepare("INSERT INTO users SET username = ?, mail = ?, password = ?, fname = ?, uniq_id = ?, profile_pic = ?");
		if (!$req->execute([$username, $mail, $password, $fname, $_SESSION['42_id']['id'], $_SESSION['42_id']['image_url']]))
			put_flash('danger', $errors[$_SESSION['lang']]['impossible_dbrequest'], "register");
		unset($_SESSION['42_id']);
	}
	else
	{
		$req = $pdo->prepare("INSERT INTO users SET username = ?, mail = ?, password = ?, fname = ?");
		if (!$req->execute([$username, $mail, $password, $fname]))
			put_flash('danger', $errors[$_SESSION['lang']]['impossible_dbrequest'], "register");
	}

	put_flash('success', $errors[$_SESSION['lang']]['account_created'], "login");