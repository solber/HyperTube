<?php 
if (!file_exists("required/database.php"))
	header("Location: index");
require 'required/database.php';
 iNotConnected(); ?>
<?php
	
	$req = $pdo->prepare('SELECT * FROM comments WHERE m_id = ? ORDER BY id DESC');
	$req->execute([$m_id]);
	$res = $req->fetchall();

	foreach ($res as $key) {

		$req = $pdo->prepare('SELECT * FROM comments_like WHERE comment_id = ?');
		$req->execute([$key->id]);
		$nb_likes = $req->rowCount();
		$likeval = $req->fetchall();

		$my_like = 0;
		foreach ($likeval as $lval) {
			if ($_SESSION['auth']->id === $lval->emitter)
				$my_like = 1;
		}

		$req = $pdo->prepare('SELECT * FROM comments_dislike WHERE comment_id = ?');
		$req->execute([$key->id]);
		$nb_dislikes = $req->rowCount();
		$dislikeval = $req->fetchall();

		$my_dislike = 0;
		foreach ($dislikeval as $dlval) {
			if ($_SESSION['auth']->id === $dlval->emitter)
				$my_dislike = 1;
		}

		echo '<div class="commentaire">';

		$req = $pdo->prepare('SELECT fname FROM users WHERE id = ?');
		$req->execute([$key->emitter]);
		$username = $req->fetch();

		echo '<a href="uprofile?id=' .$key->emitter .'" <h4>' .$username->fname .'</h4></a><br>';
		echo '<label><i class="fas fa-quote-right"></i> ' .$key->text .' <i class="fas fa-quote-right"></i></label><br>	';

		if ($my_like)
			$likeicon = '<i class="fas fa-thumbs-up"></i>';
		else
			$likeicon = '<i class="far fa-thumbs-up"></i>';

		if ($my_dislike)
			$dislikeicon = '<i class="fas fa-thumbs-down"></i>';
		else
			$dislikeicon = '<i class="far fa-thumbs-down"></i>';


		if ($nb_likes !== 1)
		{
			echo '<a class="like" href="#" data="' .$key->id .'" style="color: green">' .$likeicon .'</a> 
			<a class="dislike" href="#" data="' .$key->id .'" style="color: red">' .$dislikeicon .'</a>
			 '.$nb_likes .' likes';
		}
		else
		{
			echo '<a class="like" href="#" data="' .$key->id .'" style="color: green">' .$likeicon .'</a> 
			<a class="dislike" href="#" data="' .$key->id .'" style="color: red">' .$dislikeicon .'</a>
			 '.$nb_likes .' like';
		}

		echo '</div>';
	}
?>
