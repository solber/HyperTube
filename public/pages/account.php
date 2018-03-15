<?= require 'header.php'; require 'required/functions.php'; require 'required/lang.php'; iNotConnected();?>
<div class="container">
        <form class="form-horizontal" role="form" method="POST" action="account-mod">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <h2 style="color: white!important"><?php echo $account[$_SESSION['lang']]['title']; ?></h2>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <!-- <div class="form-group has-danger"> -->
                        <label class="sr-only" for="username"><?php echo $account[$_SESSION['lang']]['username']; ?></label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user"></i></div>
                            <input type="text" name="username" class="form-control" id="username" placeholder="wnoth" 
                            value="<?php echo $_SESSION['auth']->username; ?>" required autofocus>
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
                            <input type="email" name="email" class="form-control" id="email" placeholder="wnoth@student.42.fr" 
                            value="<?php echo $_SESSION['auth']->mail; ?>" required autofocus>
                        </div>
                    <!-- </div> -->
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <!-- <div class="form-group has-danger"> -->
                        <label class="sr-only" for="picture"><?php echo $account[$_SESSION['lang']]['profile_pic']; ?></label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="far fa-image"></i></div>
                            <input type="picture" name="picture" class="form-control" id="picture" placeholder="exemple.fr/truc.jpg" 
                            value="<?php echo $_SESSION['auth']->profile_pic; ?>" required autofocus>
                            <img src="<?php echo $_SESSION['auth']->profile_pic; ?>" width="8%" height="8%" style="min-height: 8%; min-width: 8%; max-width: 8%; max-height: 8%">
                        </div>
                    <!-- </div> -->
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <!-- <div class="form-group has-danger"> -->
                        <label class="sr-only" for="fname"><?php echo $account[$_SESSION['lang']]['fullname']; ?></label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-book"></i></div>
                            <input type="text" name="fname" class="form-control" id="fname" placeholder="Warren Noth" 
                            value="<?php echo $_SESSION['auth']->fname; ?>" required autofocus>
                        </div>
                    <!-- </div> -->
                    <div class="col-md-3"></div>
                    <br>
		            <button type="submit" name="p1" class="btn btn-success"><i class="fas fa-sign-in-alt"></i> <?php echo $account[$_SESSION['lang']]['change']; ?></button>
                </div>
            </div>
            <br>
        </form>
        <form class="form-horizontal" role="form" method="POST" action="account-mod">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="sr-only" for="password"><?php echo $account[$_SESSION['lang']]['password']; ?></label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>
                            <input type="password" name="password" class="form-control" id="password" placeholder="<?php echo $account[$_SESSION['lang']]['password']; ?>" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="sr-only" for="passwordr"><?php echo $account[$_SESSION['lang']]['passwordr']; ?></label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>
                            <input type="password" name="passwordr" class="form-control" id="passwordr" placeholder="<?php echo $account[$_SESSION['lang']]['passwordr']; ?>" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="padding-top: 1rem">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <button type="submit" name="psw" class="btn btn-success"><i class="fas fa-sign-in-alt"></i> <?php echo $account[$_SESSION['lang']]['change']; ?></button>
                </div>
            </div>
        </form>
    </div>