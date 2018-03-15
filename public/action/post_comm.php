<?php
if (!file_exists("required/database.php"))
		header("Location: index");
require 'required/database.php'; require 'required/functions.php'; iNotConnected(); require 'required/lang.php'; ?>
<?php
	
	if (empty($_POST))
		put_flash("danger", $errors[$_SESSION['lang']]['empty_post'], "index");

	if (!isset($_POST['textcomment']) || !isset($_POST['m_id']))
		put_flash('danger', $errors[$_SESSION['lang']]['invalid_mid'], "index");

	$m_id = $_POST['m_id'];
	$text = htmlspecialchars($_POST['textcomment']);

	if (strlen($text) < 5 || strlen($text) > 149)
		put_flash('danger', $errors[$_SESSION['lang']]['invalid_comment'], "index");

	$req = $pdo->prepare('INSERT INTO comments SET m_id = ?, emitter = ?, text = ?');
	if ($req->execute([$m_id, $_SESSION['auth']->id, $text]))
		put_flash('info', "Success !", "biblio");
	else
		put_flash('danger', $errors[$_SESSION['lang']]['impossible_dbrequest'], "index");


