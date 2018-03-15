<?php 
if (!file_exists("../required/database.php"))
		header("Location: index");
require '../required/database.php'; require '../required/functions.php'; iNotConnected(); require '../required/lang.php'; ?>
<?php

	if (!isset($_GET) || !isset($_GET['m_id']) || !is_numeric($_GET['m_id']))
		put_flash('danger', $errors[$_SESSION['lang']]['invalid_arguments'], "biblio.php");

	$c_id = $_GET['m_id'];

	$req = $pdo->prepare('SELECT id FROM anim_note WHERE emitter = ? AND anim_id = ?');
	$req->execute([$_SESSION['auth']->id, $c_id]);
	$entry = $req->fetch();

	if ($entry)
	{
		$req = $pdo->prepare('DELETE FROM anim_note WHERE emitter = ? AND anim_id = ?');
		$req->execute([$_SESSION['auth']->id, $c_id]);
	}
	else
	{
		$req = $pdo->prepare('INSERT INTO anim_note SET emitter = ?, anim_id = ?');
		$req->execute([$_SESSION['auth']->id, $c_id]);	
	}

	
