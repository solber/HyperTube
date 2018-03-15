<?php require 'header.php'; require 'required/functions.php'; iNotConnected(); require 'required/lang.php'; ?>

<?php 
	if (!isset($_GET) || !isset($_GET['id']) || !is_numeric($_GET['id']))
		put_flash('danger', $errors[$_SESSION['lang']]['invalid_arguments'], "index");

	require 'required/database.php';
	$req = $pdo->prepare('SELECT * FROM users WHERE id = ?');
	$req->execute([$_GET['id']]);
	$entry = $req->fetch();

	if (!$entry) { put_flash('danger', $errors[$_SESSION['lang']]['wrong_id'], "index"); }

	$fname = $entry->fname;
	$username = $entry->username;
	$pic = $entry->profile_pic;
	if ($entry->lang === "fr_FR")
		$flag = '<img src="img/flag/209-france.png" width="10%">';
	else
		$flag = '<img src="img/flag/026-united-states-of-america.png" width="10%">';

	$lv = $uprofile[$_SESSION['lang']]['lv'];
	$lvl = $uprofile[$_SESSION['lang']]['lvl'];

	if (!is_null($entry->last_viewed))
	{
		$req = $pdo->prepare('SELECT title,file_title FROM anim WHERE id = ?');
		$req->execute([$entry->last_viewed]);
		$anim_entry = $req->fetch();

		if ($anim_entry)
		{
			$lv = $anim_entry->title;
			$lvl = $anim_entry->file_title;
		}
	}
	
?>
<div class="container" style="color: white">
    <div class="card mt-5 profile_card_center" style="width: 20rem;">
	  <img class="card-img-top" src="<?= $pic; ?>" alt="Card image cap">
	  <div class="card-block profile_card_content">
	    <h4 class="card-title"><?= $fname; ?> <small>(<?= $username?>)</small>
	    <small><?= $flag; ?></small></h4>
	    <p class="card-text"><?= $uprofile[$_SESSION['lang']]['last_viewed']; ?> : <a href="<?= 'view?m=' .$lvl; ?>"><?= $lv; ?></a></p>
	  </div>
	</div>
</div>
