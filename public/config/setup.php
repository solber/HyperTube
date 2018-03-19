<?php
	require_once 'database.php';
	
	$sql = file_get_contents('hypertube.sql');
	$qr = $pdo->exec($sql);
	if (session_status() == PHP_SESSION_NONE) { session_start(); } 
	if (isset($_SESSION['auth']))
		unset($_SESSION['auth']);
	$_SESSION['flash']['success'] = "Database set.";
	header('Location: http://localhost:8080/');
?>