<?php 
if (file_exists("required/database.php"))
{
	require 'required/database.php';
	require 'required/functions.php';
	require 'required/lang.php';
}
else
{
	require '../required/database.php';
	require '../required/functions.php';
	require '../required/lang.php';
}
iNotConnected();

	if (isset($_POST['p1']))
	{
		$username = $_POST['username'];
		$email = $_POST['email'];
		$fname = $_POST['fname'];
		$picture = $_POST['picture'];

		if (empty($username) || empty($email) || empty($fname) || empty($picture))
			put_flash('danger', $errors[$_SESSION['lang']]['empty_fields'], "account");

		if (strlen($username) < 4 || strlen($username) > 254 || strlen($email) > 254 || strlen($fname) < 5 || strlen($fname) > 254 || strlen($picture) > 254)
			put_flash('danger', $errors[$_SESSION['lang']]['invalid_size'], "account");

		if (!preg_match('/^[a-zA-Z0-9]+$/', $username))
			put_flash('danger', $errors[$_SESSION['lang']]['invalid_char_alpha_num'], "account");

		if (!preg_match('/^[a-zA-Z0-9 -]+$/', $fname))
			put_flash('danger', $errors[$_SESSION['lang']]['invalid_char_alphadash'], "account");

		if ($username !== $_SESSION['auth']->username)
		{
			$req = $pdo->prepare('SELECT username FROM users WHERE username = ?');
			$req->execute([$username]);
			$entry = $req->fetch();

			if ($entry)
			{
				put_flash('danger', $errors[$_SESSION['lang']]['taken_username'], "account");
			}
			else
			{
				$req = $pdo->prepare('UPDATE users SET username = ? WHERE id = ?');
				$req->execute([$username, $_SESSION['auth']->id]);
				$_SESSION['auth']->username = $username;
			}
		}

		if ($picture !== $_SESSION['auth']->profile_pic)
		{
			$req = $pdo->prepare('UPDATE users SET profile_pic = ? WHERE id = ?');
			$req->execute([$picture, $_SESSION['auth']->id]);
			$_SESSION['auth']->profile_pic = $picture;
		}

		if ($email !== $_SESSION['auth']->mail)
		{
			$req = $pdo->prepare('SELECT mail FROM users WHERE mail = ?');
			$req->execute([$email]);
			$entry = $req->fetch();

			if ($entry)
			{
				put_flash('danger', $errors[$_SESSION['lang']]['taken_email'], "account");
			}
			else
			{
				$req = $pdo->prepare('UPDATE users SET mail = ? WHERE id = ?');
				$req->execute([$email, $_SESSION['auth']->id]);
				$_SESSION['auth']->mail = $email;
			}
		}

		if ($fname !== $_SESSION['auth']->fname)
		{
			$req = $pdo->prepare('UPDATE users SET fname = ? WHERE id = ?');
			$req->execute([$fname, $_SESSION['auth']->id]);
			$_SESSION['auth']->fname = $fname;
		}

		put_flash('info', $errors[$_SESSION['lang']]['success_modified'], "account");


	}

	if (isset($_POST['password']))
	{
		//die(var_dump($_POST));	
		$psw = $_POST['password'];
		$pswr = $_POST['passwordr'];

		if (empty($psw) || empty($pswr))
			put_flash('danger', $errors[$_SESSION['lang']]['empty_fields'], "account");

		if (strlen($psw) < 5 || strlen($psw) > 20)
			put_flash('danger', $errors[$_SESSION['lang']]['size_password'], "account");

		if (!preg_match('/^[a-zA-Z0-9]+$/', $psw))
			put_flash('danger', $errors[$_SESSION['lang']]['invalid_char_alpha_num'], "account");

		if ($psw !== $pswr)
			put_flash('danger', $errors[$_SESSION['lang']]['same_password'], "account");

		$password = password_hash($psw, PASSWORD_BCRYPT);

		$req = $pdo->prepare('UPDATE users SET password = ? WHERE id = ?');
		$req->execute([$password, $_SESSION['auth']->id]);

		put_flash('info', $errors[$_SESSION['lang']]['modified_password'], "account");

	}


