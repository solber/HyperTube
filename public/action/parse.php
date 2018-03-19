<head><meta charset="utf-8"></head>
<?php
	date_default_timezone_set( 'Europe/Paris' ); 
	/* debug*/
	/*require 'required/functions.php';
	require 'required/database.php';
	$logpath = "log/log.log";
	*/
	//if ($_SERVER['HTTP_USER_AGENT'] !== "Wget/1.19.4 (darwin16.7.0)")
	//	header('Location: http://localhost:8080');
	require '../required/functions.php';
	require '../required/database.php';
	$logpath = "../log/log.log";

	/* FIRST FEED - LEOPARD-RAWS */
	$xml=simplexml_load_file("http://leopard-raws.org/rss.php") or die("Error: Cannot create object");

	$log = "";
	//$req = $pdo->query('DELETE FROM anim');
	$i = 0;
	foreach ($xml->channel as $key) {
		foreach ($key as $elem) {
			if ($i>1)
			{
				$t = time();
				$t = date("d-m-Y H:i:s", $t);
				$pubDate = $elem->pubDate;
				$pubDate = strftime("%Y-%m-%d %H:%M:%S", strtotime($pubDate));
				preg_match_all("|\].*?\ RAW|", $elem->title, $matches);
				$elem_title = $elem->title;
				if (preg_match('/720/', $elem->title))
					$source = "720p";
				else if (preg_match('/1080/', $elem->title))
					$source = "1080p";
				else if (preg_match('/480/', $elem->title))
					$source = "480p";
				
				if (!isset($matches[0][0]))
				{
					continue;
				}
				$cleanname = trim(str_replace(']', '', $matches[0][0]));
				$cleanname = trim(str_replace('-', '', $cleanname));
				$cleanname = trim(str_replace('RAW', '', $cleanname));
				$cleanname = trim(preg_replace('#\s+#', ' ', $cleanname));
				$cleanname = trim($cleanname);

				$title = $cleanname;

				$req = $pdo->prepare('SELECT file_title FROM anim WHERE file_title = ?');
				$req->execute([$elem_title]);
				$entry = $req->fetch();

				if ($entry)
				{
					$log .= $t ." - [WARNING] " .$title ." Exists and was not added." .PHP_EOL;
					continue;
				}

				$title_plus = preg_replace('/\s/', '+', $cleanname);
				$link = $elem->link;

				if(preg_match('/^[a-zA-Z0-9 !-?:]+$/', $title) && strpos($elem_title, '[Leopard-Raws]') !== false)
				{
					$gurl = "https://www.google.fr/search?q=" .$title_plus ."+cover&tbm=isch";

					$ch = curl_init();
					curl_setopt($ch, CURLOPT_URL, $gurl);
					curl_setopt($ch,CURLOPT_USERAGENT,"Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13");
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
					$html = curl_exec($ch);
					curl_close($ch);
					preg_match_all( '|<img.*?src=[\'"](.*?)[\'"].*?>|i',$html, $matches ); 
					if ($matches[ 1 ][ 0 ]) {
						$img = $matches[1][0];
						$req = $pdo->prepare("INSERT INTO anim SET cover = ?,title = ?, magnet = ?, source = ?, file_title = ?, pub_date = ?");
						$req->execute([$img, $title, $link, $source, $elem_title, $pubDate]);
						$log .= $t ." - [INFO] "  .$title ." Added !" .PHP_EOL;
					}
				}
				else
				{
					$log .= $t ." - [WARNING] "  .$title ." Don't match syntax, file not added !" .PHP_EOL;
					continue;
				}
			}
			$i++;
		}
	}

	/* SECOND FEED - NYAA.SI */
	/*
	$xml=simplexml_load_file("https://nyaa.si/?page=rss&q=%5Bleopard-raws%5D&c=0_0&f=0") or die("Error: Cannot create object");

	$log = "";
	//$req = $pdo->query('DELETE FROM anim');
	$i = 0;

	foreach ($xml->channel as $key) {
		foreach ($key as $elem) {
			if ($i>1)
			{
				$t = time();
				$t = date("d-m-Y H:i:s", $t);
				$pubDate = $elem->pubDate;
				$pubDate = strftime("%Y-%m-%d %H:%M:%S", strtotime($pubDate));
				preg_match_all("|\].*?\ RAW|", $elem->title, $matches);
				$elem_title = $elem->title;
				if (preg_match('/720/', $elem->title))
					$source = "720p";
				else if (preg_match('/1080/', $elem->title))
					$source = "1080p";
				else if (preg_match('/480/', $elem->title))
					$source = "480p";
				
				if (!isset($matches[0][0]))
				{
					continue;
				}
				$cleanname = trim(str_replace(']', '', $matches[0][0]));
				$cleanname = trim(str_replace('-', '', $cleanname));
				$cleanname = trim(str_replace('RAW', '', $cleanname));
				$cleanname = trim(preg_replace('#\s+#', ' ', $cleanname));
				$cleanname = trim($cleanname);

				$title = $cleanname;

				$req = $pdo->prepare('SELECT file_title FROM anim WHERE file_title = ?');
				$req->execute([$elem_title]);
				$entry = $req->fetch();

				if ($entry)
				{
					$log .= $t ." - [WARNING] " .$title ." Exists and was not added." .PHP_EOL;
					continue;
				}

				$title_plus = preg_replace('/\s/', '+', $cleanname);
				$link = $elem->link;

				if(preg_match('/^[a-zA-Z0-9 !-?:]+$/', $title) && strpos($elem_title, '[Leopard-Raws]') !== false)
				{
					$gurl = "https://www.google.fr/search?q=" .$title_plus ."+cover&tbm=isch";

					$ch = curl_init();
					curl_setopt($ch, CURLOPT_URL, $gurl);
					curl_setopt($ch,CURLOPT_USERAGENT,"Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13");
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
					$html = curl_exec($ch);
					curl_close($ch);
					preg_match_all( '|<img.*?src=[\'"](.*?)[\'"].*?>|i',$html, $matches ); 
					if ($matches[ 1 ][ 0 ]) {
						$img = $matches[1][0];
						$req = $pdo->prepare("INSERT INTO anim SET cover = ?,title = ?, magnet = ?, source = ?, file_title = ?, pub_date = ?");
						$req->execute([$img, $title, $link, $source, $elem_title, $pubDate]);
						$log .= $t ." - [INFO] "  .$title ." Added !" .PHP_EOL;
					}
				}
				else
				{
					$log .= $t ." - [WARNING] "  .$title ." Don't match syntax, file not added !" .PHP_EOL;
					continue;
				}
			}
			$i++;
		}
	}
	*/
	file_put_contents($logpath, $log);

	function get_http_response_code($url) {
		$headers = get_headers($url);
		return substr($headers[0], 9, 3);
	}

	function file_get_contents_curl($url) {
	    $ch = curl_init();

	    curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
	    curl_setopt($ch, CURLOPT_HEADER, 0);
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	    curl_setopt($ch, CURLOPT_URL, $url);
	    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);       

	    $data = curl_exec($ch);
	    curl_close($ch);

	    return $data;
	}
?>