<?= require 'header.php'; require 'required/functions.php'; require 'required/lang.php'; iConnected();?>
<div class="container">
        <form class="form-horizontal" role="form" method="POST" action="normal-login">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <h2 style="color: white!important"><?php echo $login[$_SESSION['lang']]['title']; ?></h2>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <!-- <div class="form-group has-danger"> -->
                        <label class="sr-only" for="email"><?php echo $login[$_SESSION['lang']]['username']; ?></label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user"></i></div>
                            <input type="text" name="username" class="form-control" id="username" placeholder="wnoth" required autofocus>
                        </div>
                    <!-- </div> -->
                </div>
                <!-- <div class="col-md-3">
                    <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <i class="fa fa-close"></i> Example error message
                        </span>
                    </div>
                </div> -->
            </div>
            <br>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="sr-only" for="password"><?php echo $login[$_SESSION['lang']]['password']; ?></label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>
                            <input type="password" name="password" class="form-control" id="password" placeholder="<?php echo $login[$_SESSION['lang']]['password']; ?>" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                        <!-- Put password error message here -->    
                        </span>
                    </div>
                </div>
            </div>
            <div class="row" style="padding-top: 1rem">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <center><div class="g-recaptcha" data-sitekey="6LdhCkgUAAAAAL-knu5sk6Yy11IHX5iqlBelBk24" name="g-recaptcha-response"></div></center><br>
                    <button type="submit" class="btn btn-success"><i class="fa fa-sign-in-alt"></i> <?php echo $login[$_SESSION['lang']]['login']; ?></button>
                    <a class="btn btn-link" href="reset"><?php echo $login[$_SESSION['lang']]['forgot']; ?></a>
                </div>
            </div>
        </form>
        <br>
        <hr width="40%" style="background-color: white">
        <br>
        <a href="fb-register" class="fb_btn"><i class="fab fa-facebook-f"></i></a>
        <a href="42-register" class="ft_btn"></a>

    </div>