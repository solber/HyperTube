<?php require '../required/database.php'; require '../required/functions.php'; require '../required/lang.php'; iNotConnected(); ?>
<?php

	if (!isset($_GET) || !isset($_GET['m_id']) || !is_numeric($_GET['m_id']))
		put_flash('danger', $errors[$_SESSION['lang']]['invalid_arguments'], "biblio.php");

	$c_id = $_GET['m_id'];

	$req = $pdo->prepare('SELECT emitter FROM comments WHERE id = ?');
	$req->execute([$c_id]);
	$entry = $req->fetch();

	if (!$entry)
		put_flash('danger', $errors[$_SESSION['lang']]['comment_id_not_exists'], "biblio");


	$req = $pdo->prepare('SELECT * FROM comments_like WHERE emitter = ? AND comment_id = ?');
	$req->execute([$_SESSION['auth']->id, $c_id]);
	$entry = $req->fetch();

	if (!$entry)
	{
		$req = $pdo->prepare('SELECT * FROM comments_dislike WHERE emitter = ? AND comment_id = ?');
		$req->execute([$_SESSION['auth']->id, $c_id]);
		$entry = $req->fetch();

		if (!$entry)
		{
			$req = $pdo->prepare('INSERT INTO comments_dislike SET emitter = ?, comment_id = ?');
			$req->execute([$_SESSION['auth']->id, $c_id]);
			//put_flash('info', "You liked a comment !", 'biblio');
		}
		else
		{
			$req = $pdo->prepare('DELETE FROM comments_dislike WHERE emitter = ? AND comment_id = ?');
			$req->execute([$_SESSION['auth']->id, $c_id]);
			//put_flash('info', "You've unlicked a comment !", "biblio");
		}
	}
