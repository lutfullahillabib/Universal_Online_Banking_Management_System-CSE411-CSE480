<?php
	include_once("../connection.php");
    if(isset($_SESSION['sadmin']))
    {
        header("Location: index.php");
    }
	include("login-backend.php");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Universal Bank - Super Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <script src="https://use.fontawesome.com/9a69407135.js"></script>
</head>

<body class="body">
    <div class="flex-container-header">
        <div class="flex-item-header">
            <img src="../images/logo.png" width="100" height="100">
        </div>
        <div class="flex-item-header">
            <h1>UNIVERSAL BANK OF BANGLADESH</h1>
        </div>
    </div>
    <div class="flex-container-background">
        <div class="flex-container">
            <div class="flex-item-0">
                <h1 id="form_header">WELCOME ADMIN</h1>
            </div>
        </div>

        <div class="flex-container">
            <div class="flex-item-1">
                <form method="post">
                    <div class="flex-item-login">
                        <h2>SUPER ADMIN LOGIN</h2>
                    </div>

                    <div class="flex-item">
                        <input type="text" name="admin" placeholder="Enter Admin Username" required>
                    </div>

                    <div class="input-group mb-3 login-form-width-style">
                        <input type="password" name="psw" class="form-control" placeholder="Enter Admin Password" id="inp-pass" required>
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon" onclick="passShowjs()"><i class="fa fa-eye"></i></span>
                        </div>
                    </div>
                    <!--
                    <p style="padding: 0px 10px"><a href="" style="color:white">Forgot Password?</a></p>
                    <?php echo "<p style='color: red; padding: 0px 10px;'>".$msg."</p>"; ?>
                    -->
                    <div class="flex-item">
                        <button type="submit" name="login">Login</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <script src="../JS/ShowPass.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>