<?php
if (session_status() == PHP_SESSION_NONE) { session_start(); }

if (file_exists("required/lang.php"))
{
    require 'required/functions.php';
    require 'required/lang.php';  
}
else
{
    header('Location: index');
}

iConnected();
if (file_exists('../vendor/autoload.php'))
  require_once '../vendor/autoload.php';
else
  require_once '../../vendor/autoload.php';

$fb = new Facebook\Facebook([
  'app_id' => '1592512514131396',
  'app_secret' => 'dbc136a5425fc5ba96b626c441ce8f7e',
  'default_graph_version' => 'v2.2',
  ]);
$helper = $fb->getRedirectLoginHelper();

try {
  $accessToken = $helper->getAccessToken();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  put_flash('info', $errors[$_SESSION['lang']]['tryagain'], "fb-register");
  exit;
}

if (! isset($accessToken)) {
  if ($helper->getError()) {
    header('HTTP/1.0 401 Unauthorized');
    echo "Error: " . $helper->getError() . "\n";
    echo "Error Code: " . $helper->getErrorCode() . "\n";
    echo "Error Reason: " . $helper->getErrorReason() . "\n";
    echo "Error Description: " . $helper->getErrorDescription() . "\n";
  } else {
    header('HTTP/1.0 400 Bad Request');
    put_flash('danger', $errors[$_SESSION['lang']]['bad_request'], "register");
  }
  exit;
}

$response = $fb->get('/me?fields=id,name,email,picture', $accessToken->getValue());
$user = $response->getGraphUser();

if(!$user->getEmail())
  put_flash('danger', $errors[$_SESSION['lang']]['email_permission'], "register");

try {
		$requestPicture = $fb->get('/me/picture?redirect=false&height=300', $accessToken->getValue()); //getting user picture
		$picture = $requestPicture->getGraphUser();
	} catch(Facebook\Exceptions\FacebookResponseException $e) {
		// When Graph returns an error
		echo 'Graph returned an error: ' . $e->getMessage();
		exit;
	} catch(Facebook\Exceptions\FacebookSDKException $e) {
		// When validation fails or other local issues
		put_flash('info', $errors[$_SESSION['lang']]['logreagain'], "register");
		exit;
	}
  
  // The OAuth 2.0 client handler helps us manage access tokens
$oAuth2Client = $fb->getOAuth2Client();

// Get the access token metadata from /debug_token
$tokenMetadata = $oAuth2Client->debugToken($accessToken);

// Validation (these will throw FacebookSDKException's when they fail)
$tokenMetadata->validateAppId('1592512514131396'); // Replace {app-id} with your app id
// If you know the user ID this access token belongs to, you can validate it here
//$tokenMetadata->validateUserId('123');
$tokenMetadata->validateExpiration();

if (! $accessToken->isLongLived()) {
  // Exchanges a short-lived access token for a long-lived one
  try {
    $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
  } catch (Facebook\Exceptions\FacebookSDKException $e) {
    echo "<p>Error getting long-lived access token: " . $helper->getMessage() . "</p>\n\n";
    exit;
  }
}

  $_SESSION['fb_access_token'] = (string) $accessToken;
  $_SESSION['fb_user_id'] = $user->getId();
	
	$_SESSION['fb_profile_pic'] =  $picture['url'];

  require 'required/database.php';
  $req = $pdo->prepare("SELECT * FROM users WHERE uniq_id = ?");
  $req->execute([$user->getId()]);
  $entry = $req->fetch();

  if ($entry)
  {
    $_SESSION['auth'] = $entry;
    put_flash('info', "Hey " .$entry->username ." !", "index");
  }
  
  if (isset($entry->uniq_id) && !is_null($entry->uniq_id))
    put_flash('danger', $errors[$_SESSION['lang']]['alreadylinked'], "login");

  $req = $pdo->prepare("SELECT * FROM users WHERE mail = ?");
  $req->execute([$user->getEmail()]);
  $entrye = $req->fetch();

  if ($entrye)
    put_flash('danger', $errors[$_SESSION['lang']]['taken_email'], "register");
  require 'pages/header.php'; ?>
  <div class="container">
        <form class="form-horizontal" role="form" method="POST" action="fb-fregister">
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
                            <input type="text" name="username" class="form-control" id="username" placeholder="wnoth" required autofocus>
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
                            <input type="email" name="email" class="form-control" id="email" placeholder="wnoth@student.42.fr" required value="<?php echo $user->getEmail(); ?>">
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
                            <input type="text" name="fname" class="form-control" id="fname" placeholder="Warren Noth" required value="<?php echo $user->getName(); ?>">
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
                    <button type="submit" class="btn btn-success"><i class="fas fa-sign-in-alt"></i> <?php echo $register[$_SESSION['lang']]['register']; ?></button>
                    <a class="btn btn-link" href="login"><?php echo $register[$_SESSION['lang']]['already']; ?></a>
                </div>
            </div>
        </form>

    </div>