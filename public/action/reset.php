<?php
if (!file_exists("required/database.php"))
	header("Location: index");

	if (session_status() == PHP_SESSION_NONE) { session_start(); }
	require 'required/functions.php';
	require 'required/lang.php';
	iConnected();

	if (empty($_POST['email']))
		put_flash('danger', $errors[$_SESSION['lang']]['empty_fields'], "reset");

	require 'required/database.php';

	$req = $pdo->prepare("SELECT * FROM users WHERE mail = ?");
	$req->execute([$_POST['email']]);
	$entry = $req->fetch();

	if (!$entry) { put_flash('danger', $errors[$_SESSION['lang']]['mail_not_found'], "reset"); }

	$rnd = str_random(10);
	$new_pass = password_hash($rnd, PASSWORD_BCRYPT);

	$req = $pdo->prepare("UPDATE users SET password = ? WHERE mail = ?");

	if (!$req->execute([$new_pass, $entry->mail]))
		put_flash("danger", $errors[$_SESSION['lang']]['impossible_dbrequest'], 'reset');

	if (send_mail($entry->mail, "Account modification", "Hi, there is your new password :\n" .$rnd))
		put_flash('info', $errors[$_SESSION['lang']]['mail_sent'], "login");