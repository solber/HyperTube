<?= require 'header.php'; require 'required/functions.php'; require 'required/lang.php'; iConnected();?>
<div class="container">
        <form class="form-horizontal" role="form" method="POST" action="normal-reset">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <h2 style="color: white!important"><?php echo $reset[$_SESSION['lang']]['title']; ?></h2>
                    <hr>
                </div>
            </div>
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
            <div class="row" style="padding-top: 1rem">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success"><i class="fa fa-sign-in"></i> <?php echo $reset[$_SESSION['lang']]['reset']; ?></button>
                </div>
            </div>
        </form>
    </div>