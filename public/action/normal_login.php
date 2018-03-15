<?php
	if (!file_exists("required/database.php"))
		header("Location: index");
	if (session_status() == PHP_SESSION_NONE) { session_start(); }
	require 'required/functions.php';
	require 'required/lang.php';
	iConnected();

	if (empty($_POST))
		put_flash('danger', $errors[$_SESSION['lang']]['empty_post'], "/");

	$username = $_POST['username'];
	$psw = $_POST['password'];

	if (empty($username) || empty($psw))
		put_flash('danger', $errors[$_SESSION['lang']]['empty_fields'], "login");

	if (strlen($username) < 4 || strlen($psw) < 5 || strlen($psw) > 20)
		put_flash('danger', $errors[$_SESSION['lang']]['invalid_size'], "login");

	if (!preg_match('/^[a-zA-Z0-9]+$/', $username) || !preg_match('/^[a-zA-Z0-9]+$/', $psw))
		put_flash('danger', $errors[$_SESSION['lang']]['invalid_char_alpha_num'], "login");

	require 'required/database.php';

	$req = $pdo->prepare("SELECT * FROM users WHERE username = ?");
	$req->execute([$username]);
	$entry = $req->fetch();

	if (!$entry){ put_flash("danger", $errors[$_SESSION['lang']]['taken_username'], "login"); }

	//co
	$req = $pdo->prepare("SELECT * FROM users WHERE username = ?");
        
    if (!$req->execute([$username]))
        put_flash('danger', $errors[$_SESSION['lang']]['impossible_dbrequest'], "login");

    $user = $req->fetch();

    if(password_verify($psw, $user->password))
    {
    	require '../vendor/autoload.php';
    	$secret = "6LdhCkgUAAAAANgZfq_1pM5g3k6FVUqTiOZyD5dw";

    	if (empty($_POST['g-recaptcha-response']))
    		put_flash('danger', $errors[$_SESSION['lang']]['empty_captcha'], "login");

		$recaptcha = new \ReCaptcha\ReCaptcha($secret);
		$resp = $recaptcha->verify($_POST['g-recaptcha-response']);
		if ($resp->isSuccess()) {
			$_SESSION['auth'] = $user;
        	put_flash('info', "hey " .$user->username ." !", "index");
		} else {
		    $errors = $resp->getErrorCodes();
		}

    }else{
    	put_flash("danger", $errors[$_SESSION['lang']]['invalid_password'], "login");
    }