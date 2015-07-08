<?php
    session_start();
    include("connection.php");
    $query = "SELECT diary FROM users WHERE id='".$_SESSION['id']."'LIMIT 1;";
    $result=mysqli_query($link,$query);
    $row = mysqli_fetch_array($result);
    $diary= $row['diary'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Your Personal Journal Page</title>
    <link rel="stylesheet" href="jquery-ui-1.11.4/jquery-ui.min.css">
    <link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header pull-left">
            <a href="#" class="navbar-brand">Your Personal Journal</a>
            <ul class="navbar-nav nav">
                <li>
                    <a href="">Hello <?php echo $_SESSION['username'];?></a>
                </li>
            </ul>
        </div>
        <div class="pull-right">
            <ul class="navbar-nav nav pull-right">
                <li>
                    <a href="index.php?logout=1">Log out</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <textarea class="form-control" name="diary" id="jinput" cols="40" rows="25"><?php echo $diary; ?></textarea>
        </div>
    </div>
</div>
<script src="jquery-2.1.4.min.js"></script>
<script src="jquery-ui-1.11.4/jquery-ui.min.js"></script>
<script src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
<script>
    $("#jinput").keyup(function() {
        $.post("updatediary.php", {diary:$("#jinput").val()} );
    });
</script>
</body>
</html>