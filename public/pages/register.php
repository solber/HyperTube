<?= require 'header.php'; require 'required/functions.php'; require 'required/lang.php'; iConnected();?>
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
                            <input type="email" name="email" class="form-control" id="email" placeholder="wnoth@student.42.fr" required autofocus>
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
                            <input type="text" name="fname" class="form-control" id="fname" placeholder="Warren Noth" required autofocus>
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
        <br>
        <hr width="40%" style="background-color: white">
        <br>
        <a href="fb-register" class="fb_btn"><i class="fab fa-facebook-f"></i></a>
        <a href="42-register" class="ft_btn"></a>

    </div>