<?php require '../required/database.php'; require '../required/functions.php'; iNotConnected(); require '../required/lang.php'; ?>
<?php    
    if (empty($_POST))
      put_flash('danger', $errors[$_SESSION['lang']]['empty_post'], "index");

    if ($_POST['page'] === "1")
      $a = 0;
    else
      $a = (10 * $_POST['page']) - 10;
      $b = 10;

    if ($_POST['order'] === "ASC")
      $req = $pdo->prepare("SELECT * FROM anim WHERE source = ? AND title LIKE '%" .addslashes($_SESSION['search']) ."%' ORDER BY title ASC LIMIT $a, $b");
    else if ($_POST['order'] === "DESC")
      $req = $pdo->prepare("SELECT * FROM anim WHERE source = ? AND title LIKE '%" .addslashes($_SESSION['search']) ."%' ORDER BY title DESC LIMIT $a, $b");
    else
      $req = $pdo->prepare("SELECT * FROM anim WHERE source = ? AND title LIKE '%" .addslashes($_SESSION['search']) ."%' ORDER BY pub_date DESC LIMIT $a, $b");
    $req->execute([$_POST['res']]);
    $res = $req->fetchall();

    if (!$res)
      echo '<div class="col-sm-4 card_space"><h1 style="color: white">' .$load[$_SESSION['lang']]['elements'] .'</h1></div>';
    foreach ($res as $key) {
      if (!is_null($key->stored_date))
      {
        date_default_timezone_set( 'Europe/Paris' );
        $to_time = strtotime(date("Y-m-d H:i:s"));
        $from_time = strtotime($key->stored_date);
        $elapsed = round(abs($to_time - $from_time) / 60,2);
        
        if ($elapsed >= 43800)
        {
          if (file_exists("../files/" .$key->file_title))
          {
            unlink("../files/" .$key->file_title);
            $req = $pdo->query('UPDATE anim SET stored_date = NULL WHERE id =' .intval($key->id));
          }
          $key->Downloaded = 0;
        }

      }
      echo '<div class="col-sm-4 card_space">';
      echo '<a href="view?m=' .htmlspecialchars($key->file_title) .'"><div class="card card_border" style="min-height: 100%!important">';

      echo '<img class="card-img-top" src="' .$key->cover .'">';
      
      echo '<div class="card-block">';

      $req = $pdo->prepare('SELECT * FROM view WHERE user_id = ? AND anim_id = ?');
      $req->execute([$_SESSION['auth']->id, $key->id]);
      $entry = $req->fetch();
      if ($entry)
          echo '<h4 class="card-title">'.$load[$_SESSION['lang']]['watched'] .' - ' .$key->title .'</h4>';
      else  
          echo '<h4 class="card-title">' .$key->title .'</h4>';

     $v_score = 0;
     $req = $pdo->prepare('SELECT id FROM anim_note WHERE anim_id = ?');
     $req->execute([$key->id]);
     $v_score = $req->rowCount();
     
      echo '<p class="card-text"> Score : ' .$v_score .'</p>';

      if (file_exists("../files/" .$key->file_title))
        echo '<p class="card-text"><small class="text-muted" style="color: green!important"><i class="fas fa-check"></i> ' 
          .$load[$_SESSION['lang']]['downloaded'] .'</small></p>';
      else if ($key->downloading)
        echo '<p class="card-text"><small class="text-muted" style="color: rgb(200, 200, 0)!important"><i class="far fa-clock"></i> ' 
          .$load[$_SESSION['lang']]['being'] .'</small></p>';
      else
        echo '<p class="card-text"><small class="text-muted">' 
        .$load[$_SESSION['lang']]['rdy'] .'</small></p>';

      echo '</div></div></div></a>';
    }