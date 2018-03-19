<?php
	
	if (session_status() == PHP_SESSION_NONE) { session_start(); }
	$url = '';
	if (strpos($_SERVER['REQUEST_URI'], '?'))
		$url[0] = get_string_between($_SERVER['REQUEST_URI'], "/", "?");
	else
		$url[0] = explode("/", $_SERVER['REQUEST_URI'])[1];

	if(strlen($url[0]) == 0)
	{
    	require 'pages/home.php';
	}
	else if ($url[0] === "biblio")
	{
		require 'pages/biblio.php';
	}
	else if ($url[0] === "lang_fr_FR")
	{
		if (isset($_SESSION['auth']))
		{
			require 'required/database.php';
			$req = $pdo->query("UPDATE users SET lang ='fr_FR' WHERE id =" .intval($_SESSION['auth']->id));
			$_SESSION['auth']->lang = "fr_FR";
		}
		$_SESSION['lang'] = "fr_FR";
		require 'pages/home.php';
	}
	else if ($url[0] === "lang_en_EN")
	{
		if (isset($_SESSION['auth']))
		{
			require 'required/database.php';
			$req = $pdo->query("UPDATE users SET lang ='en_EN' WHERE id =" .intval($_SESSION['auth']->id));
			$_SESSION['auth']->lang = "en_EN";
		}
		$_SESSION['lang'] = "en_EN";
		require 'pages/home.php';
	}
	else if ($url[0] === "index")
	{
		require 'pages/home.php';
	}
	else if ($url[0] === "view")
	{
		require 'pages/view.php';
	}
	else if ($url[0] === "logs")
	{
		require 'action/logs.php';
	}
	else if ($url[0] === "rss")
	{
		require 'action/rss.php';
	}
	else if ($url[0] === "account")
	{
		require 'pages/account.php';
	}
	else if ($url[0] === "account-mod")
	{
		require 'action/account_modify.php';
	}
	else if ($url[0] === "parse")
	{
		require 'action/parse.php';	
	}
	else if ($url[0] === "like")
	{
		require 'action/like.php';	
	}
	else if ($url[0] === "dislike")
	{
		require 'action/dislike.php';	
	}
	else if ($url[0] === "post-comm")
	{
		require 'action/post_comm.php';	
	}
	else if ($url[0] === "login")
	{
		require 'pages/login.php';
	}
	else if ($url[0] === "register")
	{
		require 'pages/register.php';
	}
	else if ($url[0] === "reset")
	{
		require 'pages/reset.php';
	}
	else if ($url[0] === "uprofile")
	{
		require 'pages/uprofile.php';
	}
	else if ($url[0] === "normal-regitser")
	{
		require 'action/normal_register.php';
	}
	else if ($url[0] === "normal-login")
	{
		require 'action/normal_login.php';
	}
	else if ($url[0] === "logout")
	{
		require 'action/logout.php';
	}
	else if ($url[0] === "normal-reset")
	{
		require 'action/reset.php';
	}
	else if ($url[0] === "fb-register")
	{
		require 'action/fb_register.php';
	}
	else if ($url[0] === "fb-callback")
	{
		require 'action/fb_callback.php';
	}
	else if ($url[0] === "fb-fregister")
	{
		require 'action/fb_final_register.php';
	}
	else if ($url[0] === "42-register")
	{
		require 'action/42_register.php';
	}
	else
	{
    	require 'pages/404.php';
	}

	function get_string_between($string, $start, $end){
	    $string = ' ' . $string;
	    $ini = strpos($string, $start);
	    if ($ini == 0) return '';
	    $ini += strlen($start);
	    $len = strpos($string, $end, $ini) - $ini;
	    return substr($string, $ini, $len);
	}