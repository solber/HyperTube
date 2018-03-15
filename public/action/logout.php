<?php 
	if (!file_exists("required/database.php"))
		header("Location: index");
	if (session_status() == PHP_SESSION_NONE) { session_start(); }
	require 'required/lang.php';
	if (!isset($_SESSION['auth'])) 
	{
		$_SESSION['flash']['danger'] = $errors[$_SESSION['lang']]['logout'];
	}
	else
	{
		unset($_SESSION['auth']); 
	}
	header('Location: index');
	exit();
?>