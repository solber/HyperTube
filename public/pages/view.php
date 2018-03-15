<?= require 'header.php'; require 'required/functions.php'; iNotConnected();?>

	<div class="container">
	<?php if (isset($_GET) && isset($_GET['m'])) { ?>
		<div class="col-sm-12 card_border">
			<div class="col-sm-11" style="margin: 0 auto; padding: 5px">
				<?php 
					require "required/database.php";
					$req = $pdo->prepare("SELECT * FROM anim WHERE file_title = ?");
					$req->execute([$_GET['m']]);
					if (!$res = $req->fetch())
					{
						if ($_SESSION['lang'] === "en_EN")
							put_flash('danger', "Error : Invalid movie !", "biblio");
						else
							put_flash('danger', "Erreur : Mauvais film !", "biblio");
					}

					$m_id = $res->id;
					if (file_exists("files/" .$res->file_title))
					{
						$req = $pdo->query("UPDATE anim SET downloaded = 1, downloading = 0, stored_date = NOW() WHERE id =" .intval($res->id));
						$res->downloded = 1;
						$res->downloading = 0;
					}

					if (empty($_POST) && !$res->downloading)
					{
						if (file_exists("files/" .$res->file_title))
						{
							$req = $pdo->prepare('INSERT INTO view SET user_id = ?, anim_id = ?');
							$req->execute([$_SESSION['auth']->id, $res->id]);
							$req = $pdo->prepare('UPDATE users SET last_viewed = ? WHERE id = ?');
							$req->execute([$res->id, $_SESSION['auth']->id]);
							echo '<video type="video/mp4" src="' ."files/" .$res->file_title .'" controls width="100%" autoplay style="border: 1px solid grey; box-shadow: 0px 0px 8px 4px rgb(53, 53, 53)"></video>';
							echo "<h3>" .$res->title .'<a class="twitter-share-button"
							  href="https://twitter.com/intent/tweet?text=http://localhost/view?m='.urlencode($_GET['m']) .'">
							 <i class="fab fa-twitter"></i></a>' 
							 .'<a href="mailto:?subject=Hypertube Video&body=http://localhost/view?m='.urlencode($_GET['m']) .'"> <i class="fas fa-envelope" style="color: white"></i></a>' ."</h3>";

							require_once '../vendor/autoload.php';
							$getID3 = new getID3;
							$file = $getID3->analyze("files/" .$res->file_title);

							$v_score = 0;
							$req = $pdo->prepare('SELECT id FROM anim_note WHERE anim_id = ?');
							$req->execute([$res->id]);
							$v_score = $req->rowCount();
														
							$my_like = 0;
							$req = $pdo->prepare('SELECT id FROM anim_note WHERE emitter = ? AND anim_id = ?');
							$req->execute([$_SESSION['auth']->id, $res->id]);
							$entry_note = $req->fetch();

							if ($entry_note)
								$my_like = 1;
							
							if ($my_like)
								$likeicon = '<i class="fas fa-thumbs-up" style="color: green"></i>';
							else
								$likeicon = '<i class="far fa-thumbs-up" style="color: white"></i>';

							if ($_SESSION['lang'] === "en_EN")
							{
								echo("Duration: <code>".$file['playtime_string'].
								"</code> / Dimensions: <code>".$file['video']['resolution_x']."x".$file['video']['resolution_y'].
								"</code> / Filesize: <code>".$file['filesize']." bytes</code><br><br>");
								echo '<paragraph>Score : '.$v_score .' </paragraph>';
								echo '<a class="note" href="#" data="' .$res->id .'" style="color: green">' .$likeicon .'</a><br>'; 
								echo '<br><p style="color: green"><i class="fas fa-check"></i> Downloaded</p>';
							}
							else
							{
								echo("Durée: <code>".$file['playtime_string'].
								"</code> / Dimensions: <code>".$file['video']['resolution_x']."x".$file['video']['resolution_y'].
								"</code> / Taille: <code>".$file['filesize']." bytes</code><br><br>");
								echo '<paragraph>Score : '.$v_score .' </paragraph>';
								echo '<a class="note" href="#" data="' .$res->id .'" style="color: green">' .$likeicon .'</a><br>'; 
								echo '<br><p style="color: green"><i class="fas fa-check"></i> Téléchargé</p>';
							}
						}
						else
						{
							echo "<h3>" .$res->title ."</h3>";
							if ($_SESSION['lang'] === "en_EN")
							{
								echo '<form method="POST"><button class="btn btn-primary" name="download" style="position: relative; left: 50%; transform: translateX(-50%)">Download it !</button></form>';
							}
							else
							{
								echo '<form method="POST"><button class="btn btn-primary" name="download" style="position: relative; left: 50%; transform: translateX(-50%)">Télécharger !</button></form>';	
							}
						}
					}
					else
					{
						if (!$res->downloading)
						{
							downloadFile($res->magnet, "files/" .$res->id .".torrent");
							$req = $pdo->query("UPDATE anim SET downloading = 1 WHERE id =" .intval($res->id));
						}	
						if ($_SESSION['lang'] === "en_EN")
							echo '<center><h3>Torrent added and will be download, come back later.</h3></center>';
						else
							echo '<center><h3>Le torrent est ajouté et sera bientot téléchargé</h3></center>';
					}
				?>	

			</div>
		</div>
		<br>
		<?php 
		if (empty($_POST) && !$res->downloading)
		{
			if (file_exists("files/" .$res->file_title))
			{ ?>
				<div class="col-sm-12 card_border" style="margin-bottom: 10px">
					<div class="col-sm-11" style="margin: 0 auto; padding: 5px;">
						<?php if ($_SESSION['lang'] === "en_EN")
								echo '<h3>Comments</h3>';
							else
								echo '<h3>Commentaires</h3>'
						?>
						<br>
						<?php require 'action/load_comments.php'; ?>
						<form action="post-comm" method="POST" class="form-control commentaire">
							<input type="text" name="m_id" value="<?php echo $m_id; ?>" hidden>
							<textarea class="form-control" name="textcomment" placeholder="5 - 150.." minlength="5" maxlength="150" required></textarea>
							<?php if ($_SESSION['lang'] === "en_EN")
									echo '<button class="form-control btn btn-primary" name="btncomment">Send</button>';
								else
									echo '<button class="form-control btn btn-primary" name="btncomment">Envoyer</button>'; ?>
						</form>
					</div>
				</div>
				<?php } } ?>
	<?php } ?>
	</div>

<script type="text/javascript">
    $(function(){
    	 $('.note').click(function(){
            var elem = $(this);
            $.ajax({
                type: "GET",
                url: "action/note.php",
                data: "m_id="+elem.attr('data'),  
                success: function(data) {
                    location.reload();
                }
            });
            return false;
        });

        $('.like').click(function(){
            var elem = $(this);
            $.ajax({
                type: "GET",
                url: "action/like.php",
                data: "m_id="+elem.attr('data'),  
                success: function(data) {
                    location.reload();
                }
            });
            return false;
        });

        $('.dislike').click(function(){
            var elem = $(this);
            $.ajax({
                type: "GET",
                url: "action/dislike.php",
                data: "m_id="+elem.attr('data'),  
                success: function(data) {
                    location.reload();
                }
            });
            return false;
        });
    });
</script>