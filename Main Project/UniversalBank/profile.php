<?php
    session_start();
    if(!isset($_SESSION['loggedIn_id']))
    {
        header("location:./index.php");
    }
?>
<!DOCTYPE html>
<html>

<head>
    <title>Univeral Bank</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body style="background-image: linear-gradient(#0A707D,white)">
    <?php
        include_once("connection.php");
        include("header.php");
        include("navbar.php");
        $uid = $_SESSION['loggedIn_id'];
        $sql0 =  "SELECT * FROM users WHERE uid = '".$uid."'";
        $result = $conn->query($sql0);
        $row = $result->fetch_assoc();
        $name = $row['fname'];
        $bank = $row['bank'];

    ?>
    <div class="flex-item-1">
        <div class="flex-item">
            <h1 style="padding:10px 10px"><?php echo $name; ?> </h1>
            <h2> Bank Name : <?php echo $bank; ?></h2>

        </div>
    </div>
    <div class="container text-center">
        <div class="row" style="padding: 20px;">
            <div class="col-lg-3">
                <a href="per-info.php">
                    <div class="profileMenu">
                        <h2>Personal Information</h2>
                    </div>

                </a>
            </div>
            <div class="col-lg-1" style="padding: 0px,10px">
            </div>
            <div class="col-lg-3">
                <a href="acc-info.php">
                    <div class="profileMenu">
                        <h2>Account Summary</h2>
                    </div>
                </a>
            </div>
            <div class="col-lg-1" style="padding: 0px,10px">
            </div>
            <div class="col-lg-3">
                <a href="ch-pass.php">
                    <div class="profileMenu">
                        <h2>Change Password</h2>
                    </div>
                </a>
            </div>
            <div class="col-lg-1" style="padding: 0px,10px">
            </div>
        </div>
        <div class="row" style="padding: 20px;">

            <div class="col-lg-2" style="padding: 0px,10px">
            </div>

            <div class="col-lg-3">
                <a href="transaction-page.php">
                    <div class="profileMenu">
                        <h2>Make a Transaction</h2>
                    </div>
                </a>
            </div>
            <div class="col-lg-1" style="padding: 0px,10px">
            </div>
            <div class="col-lg-3">
                <a href="history-user.php">
                    <div class="profileMenu">
                        <h2>Transaction History</h2>
                    </div>
                </a>
            </div>
            <div class="col-lg-1" style="padding: 0px,10px">
            </div>
            <!--
            <div class="col-lg-3">
                <a href="#">
                    <div class="profileMenu">
                        <h2>Apply for<br>A Loan</h2>
                    </div>
                </a>
            </div>
-->
            <div class="col-lg-1" style="padding: 0px,10px">
            </div>
        </div>
    </div>
</body>