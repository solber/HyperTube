<?php
	if (session_status() == PHP_SESSION_NONE) { session_start(); }
	if (file_exists("required/functions.php"))
		require 'required/functions.php';
	else
    	header('Location: index');
	iConnected();

require_once '../vendor/autoload.php';
$fb = new Facebook\Facebook([
  'app_id' => '1592512514131396',
  'app_secret' => 'dbc136a5425fc5ba96b626c441ce8f7e',
  'default_graph_version' => 'v2.2',
]);
 
$helper = $fb->getRedirectLoginHelper();
 
$permissions = ['email']; // Optional information that your app can access, such as 'email'
$loginUrl = $helper->getReRequestUrl('http://localhost/fb-callback', $permissions);
 
header('Location: ' .$loginUrl);
?>