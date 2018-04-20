<?php
if (session_status() == PHP_SESSION_NONE) { session_start(); }
if (file_exists('required/functions.php'))
    require 'required/functions.php';
else
    header('Location: index');

iConnected();

require_once '../vendor/autoload.php';

require('../OAuth2/Client.php');
require('../OAuth2/GrantType/IGrantType.php');
require('../OAuth2/GrantType/AuthorizationCode.php');

const CLIENT_ID     = '902304860ae5382831b47ac471ad9b6640e7ce3a209d59c60b0622674957910e';
const CLIENT_SECRET = 'ed9c896d76be1b5ad6a3abcaaf3dbafc5503c03eebe0fa36423150b59506243c';

const REDIRECT_URI           = 'http://localhost:8080/42-register';
const AUTHORIZATION_ENDPOINT = 'https://api.intra.42.fr/oauth/authorize';
const TOKEN_ENDPOINT         = 'https://api.intra.42.fr/oauth/token';

$client = new OAuth2\Client(CLIENT_ID, CLIENT_SECRET);
if (!isset($_GET['code']))
{
    $auth_url = $client->getAuthenticationUrl(AUTHORIZATION_ENDPOINT, REDIRECT_URI);
    header('Location: ' . $auth_url);
    die('Redirect');
}
else
{
    $params = array('code' => $_GET['code'], 'redirect_uri' => REDIRECT_URI);
    $response = $client->getAccessToken(TOKEN_ENDPOINT, 'authorization_code', $params);

    if (isset($response['result']['access_token']))
    {
    	$client->setAccessToken($response['result']['access_token']);
    	$response = $client->fetch('https://api.intra.42.fr/v2/me');

    	$user = $response['result'];

    	//echo $user['id'] .PHP_EOL;
    	//echo $user['image_url'] .PHP_EOL;

    	  require 'required/database.php';
		  $req = $pdo->prepare("SELECT * FROM users WHERE uniq_id = ?");
		  $req->execute([$user['id']]);
		  $entry = $req->fetch();

		  if ($entry)
		  {
		    $_SESSION['auth'] = $entry;
            if ($_SESSION['lang'] === "en_EN")
                put_flash('info', "Welcome " .$entry->username ." !", "index");
            else
                put_flash('info', "Bienvenue " .$entry->username ." !", "index");

		  }
		  
		  if (isset($entry->uniq_id) && !is_null($entry->uniq_id))
          {
            if ($_SESSION['lang'] === "en_EN")
                put_flash('danger', "Error : Account already linked with something else.", "login");
            else
                put_flash('danger', "Erreur : Compte déja lié.", "login");
        }

		  $req = $pdo->prepare("SELECT * FROM users WHERE mail = ?");
		  $req->execute([$user['email']]);
		  $entrye = $req->fetch();

		  if ($entrye)
          {
            if ($_SESSION['lang'] === "en_EN")
		      put_flash('danger', "Error : Email already taken !", "register");
            else
                put_flash('danger', "Erreur : Email deja pris !", "register");
        }
    	
    	$_SESSION['42_id'] = $user;
    	require 'pages/header.php'; require 'required/lang.php'; ?>
		<div class="container">
        <form class="form-horizontal" role="form" method="POST" action="normal-regitser">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <h2 style="color: white!important"><?php echo $register[$_SESSION['lang']]['title']; ?></h2>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <!-- <div class="form-group has-danger"> -->
                        <label class="sr-only" for="username"><?php echo $register[$_SESSION['lang']]['username']; ?></label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user"></i></div>
                            <input type="text" name="username" class="form-control" id="username" placeholder="wnoth" required autofocus value="<?php echo $user['login']; ?>">
                        </div>
                    <!-- </div> -->
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <!-- <div class="form-group has-danger"> -->
                        <label class="sr-only" for="email">Email</label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
                            <input type="email" name="email" class="form-control" id="email" placeholder="wnoth@student.42.fr" required autofocus value="<?php echo $user['email']; ?>">
                        </div>
                    <!-- </div> -->
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <!-- <div class="form-group has-danger"> -->
                        <label class="sr-only" for="fname"><?php echo $register[$_SESSION['lang']]['fullname']; ?></label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-book"></i></div>
                            <input type="text" name="fname" class="form-control" id="fname" placeholder="Warren Noth" required autofocus value="<?php echo $user['displayname']; ?>">
                        </div>
                    <!-- </div> -->
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="sr-only" for="password"><?php echo $register[$_SESSION['lang']]['password']; ?></label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>
                            <input type="password" name="password" class="form-control" id="password" placeholder="<?php echo $register[$_SESSION['lang']]['password']; ?>" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="sr-only" for="passwordr"><?php echo $register[$_SESSION['lang']]['passwordr']; ?></label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>
                            <input type="password" name="passwordr" class="form-control" id="passwordr" placeholder="<?php echo $register[$_SESSION['lang']]['passwordr']; ?>" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="padding-top: 1rem">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <center><div class="g-recaptcha" data-sitekey="6LdhCkgUAAAAAL-knu5sk6Yy11IHX5iqlBelBk24" name="g-recaptcha-response"></div></center><br>
                    <button type="submit" class="btn btn-success"><i class="fas fa-sign-in-alt"></i> <?php echo $register[$_SESSION['lang']]['register']; ?></button>
                    <a class="btn btn-link" href="login"><?php echo $register[$_SESSION['lang']]['already']; ?></a>
                </div>
            </div>
        </form>

    </div>
    <?php
    }
    else
    {
        if ($_SESSION['lang'] === "en_EN")
    	   put_flash("danger", "Error : Wrong token.", "login");
        else
            put_flash("danger", "Erreur : Token invalide.", "login");
    }
}