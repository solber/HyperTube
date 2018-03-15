<?php
if (!file_exists("../required/database.php"))
		header("Location: index");
	require '../required/database.php';
	if (isset($_GET['term']))
	{
		$req = $pdo->query("SELECT title FROM anim WHERE title LIKE '%" .addslashes($_GET['term']) ."%' LIMIT 10");
		$res = $req->fetchall();
		
		foreach ($res as $key) {
			$tab[] = $key->title;
		}
		print json_encode($tab);
	}
?>