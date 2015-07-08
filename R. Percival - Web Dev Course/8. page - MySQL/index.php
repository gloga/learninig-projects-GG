<?php
    include('login.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Your Personal Journal</title>
      <link rel="stylesheet" href="jquery-ui-1.11.4/jquery-ui.min.css">
      <link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap-theme.min.css">
      <link rel="stylesheet" href="style.css"/>
  </head>
  <body>
      <div class="navbar navbar-inverse navbar-fixed-top">
          <div class="container">
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-togle="collapse" data-target="navbar-collapse">
                      <span class="glyphicon glyphicon-chevron-down"></span>
                  </button>
                  <a href="#" class="navbar-brand">Your Personal Journal</a>
              </div>
              <div class="collapse navbar-collapse">
                  <form  class="navbar-form navbar-right" action="" method="post">
                      <div class="form-group form-group-sm">
                          <input type="email" class="form-control" placeholder="Email" name="loginemail" id="loginemail" value="<?php echo addslashes($_POST['email']); ?>"/>
                          <input type="password" class="form-control" placeholder="Password" name="loginpassword" id="loginpassword"/>
                          <input type="submit" class="btn btn-success" name="submit" value="Log in"/>
                      </div>
                  </form>
              </div>
          </div>
      </div>
      <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 center">
                    <h1>Welcome to Your Personal Journal</h1>
                    <br/>
                    <p class="lead">It's a service that let's you store Your own thoughts, dreams etc. in one secure and mobile place</p>
                    <p>Interested? You can sign up below, or if You are already a member sign in</p>
                    <?php
                    if($errors){
                        echo '<div class="alert alert-danger" id="alert" role="alert">'.addslashes($errors).'</div>';
                    }
                    if($sumsg2) echo '<div class="alert alert-success" role="alert">'.addslashes($sumsg2).'</div>';
                    if($message) echo '<div class="alert alert-success" role="alert">'.addslashes($message).'</div>';
                    ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <div class="input-group inpg">
                                <span class="input-group-addon">Username:</span>
                                <input type="text" name="username" class="form-control" id="username" value="<?php echo addslashes($_POST['username']); ?>"/>
                            </div>
                            <div class="input-group inpg">
                                <span class="input-group-addon">Email:</span>
                                <input type="email" name="email" class="form-control" id="email"  value="<?php echo addslashes($_POST['email']); ?>"/>
                            </div>
                            <div class="input-group inpg">
                                <span class="input-group-addon">Password:</span>
                                <input type="password" name="password" class="form-control" id="password"/>
                            </div>
                                <input type="submit" id="btnsubmit" class="btn btn-success" name="submit" value="Sign up"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
       </div>
  <script src="jquery-2.1.4.min.js"></script>
  <script src="jquery-ui-1.11.4/jquery-ui.min.js"></script>
  <script src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
  <script></script>
  </body>
</html>