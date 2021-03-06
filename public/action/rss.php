<?php
	if (file_exists('required/database.php'))
		require 'required/database.php';
	else
		require '../required/database.php';		
	header('Content-Type: text/xml');
?>
<rss version="2.0">
<channel>
  <title>Hypertube Feed</title>
  <link>localhost</link>
  <description>Feed generated by Hypertube from Nyaa.si and Leopard-raws feed</description>
  <?php
  	$req = $pdo->query('SELECT * FROM anim ORDER BY pub_date LIMIT 0, 20');
  	$entry = $req->fetchall();

  	foreach ($entry as $key) { ?>
  		<item>
  			<title><?= $key->file_title ?></title>
  			<link><?= $key->magnet ?></link>
  			<image>
  				<url><?= $key->cover ?></url>
  			</image>
  		</item>
  	<?php }
  ?>
</channel>

</rss>