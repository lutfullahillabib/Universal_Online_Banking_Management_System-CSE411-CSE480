<?php
	session_start();
	if(!isset($_SESSION['sadmin']))
	{
	    header("Location: login.php");
	}
	include_once("../connection.php");
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
    <a href="../logout.php">
        <h4 class="logout"> <b>LOGOUT</b> </h4>
    </a>
    <a href="#">
        <h4 class="logout"> <b>ADMIN</b> </h4>
    </a>
    <div class="flex-container-background">
        <div class="flex-container">
            <div class="flex-item-0">
                <br>
                <h1 id="form_header">WELCOME ADMIN</h1>
            </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="row" style="padding: 20px;">
            <div class="col-lg-3">
                <a href="active-users.php">
                    <div class="profileMenu">
                        <h2>Active<br>Users List</h2>
                    </div>

                </a>
            </div>
            <div class="col-lg-1" style="padding: 0px,10px">
            </div>
            <div class="col-lg-3">
                <a href="active-banks.php">
                    <div class="profileMenu">
                        <h2>Active<br>Banks List</h2>
                    </div>
                </a>
            </div>
            <div class="col-lg-1" style="padding: 0px,10px">
            </div>
            <div class="col-lg-3">
                <a href="pending-banks.php">
                    <div class="profileMenu">
                        <h2>Pending Bank<br>Approvals</h2>
                    </div>
                </a>
            </div>
            <div class="col-lg-1" style="padding: 0px,10px">
            </div>
        </div>
        <div class="row" style="padding: 20px;">
            <!--
            <div class="col-lg-3">
                <a href="#">
                    <div class="profileMenu">
                        <h2>"Unnamed<br>Option"</h2>
                    </div>
                </a>
            </div>
            -->
            <div class="col-lg-2" style="padding: 0px,10px">
            </div>

            <div class="col-lg-3">
                <a href="all-transactions.php">
                    <div class="profileMenu">
                        <h2>All<br>Transactions</h2>
                    </div>
                </a>
            </div>

            <div class="col-lg-1" style="padding: 0px,10px">
            </div>

            <div class="col-lg-3">
                <a href="ch-pass.php">
                    <div class="profileMenu">
                        <h2>Change<br>Password</h2>
                    </div>
                </a>
            </div>
            <div class="col-lg-1" style="padding: 0px,10px">
            </div>
        </div>
    </div>
    <script src="../JS/ShowPass.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>