<?php 
if (session_status() == PHP_SESSION_NONE) { session_start(); }
if (!isset($_SESSION['auth']) || $_SESSION['auth']->username !== "admin")
	header('Location: index');

if (file_exists("log/log.log"))
{
	 $fh = fopen("log/log.log", 'r');

    $pageText = fread($fh, 25000);

    echo nl2br($pageText);
}
?>