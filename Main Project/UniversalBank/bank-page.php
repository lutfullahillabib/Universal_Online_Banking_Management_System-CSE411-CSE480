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
        $aid = $_SESSION['loggedIn_id'];
        $sql0 =  "SELECT * FROM admins WHERE aid = '".$aid."'";
        $result = $conn->query($sql0);
        $row = $result->fetch_assoc();
        $bank = $row['name'];

    ?>
    <div class="flex-item-1">
        <div class="flex-item">
            <h1 style="padding:10px 10px"> Welcome Manager </h1>
            <h2> Bank Name : <?php echo $bank; ?></h2>

        </div>
    </div>
    <div class="container text-center">
        <div class="row" style="padding: 20px;">

            <div class="col-lg-2" style="padding: 0px,10px">
            </div>

            <div class="col-lg-3">
                <a href="users-list.php">
                    <div class="profileMenu">
                        <h2>Active<br>Users List</h2>
                    </div>

                </a>
            </div>
            <div class="col-lg-1" style="padding: 0px,10px">
            </div>
            <div class="col-lg-3">
                <a href="inactive-users.php">
                    <div class="profileMenu">
                        <h2>Pending User<br>Aprovals</h2>
                    </div>
                </a>
            </div>

            <div class="col-lg-1" style="padding: 0px,10px">
            </div>
            <!--
            <div class="col-lg-3">
                <a href="loan-aproval.php">
                    <div class="profileMenu">
                        <h2>Pending Loan<br>Applications</h2>
                    </div>
                </a>
            </div>
-->
            <div class="col-lg-1" style="padding: 0px,10px">
            </div>
        </div>
        <div class="row" style="padding: 20px;">
            <div class="col-lg-3">
                <a href="bank-status.php">
                    <div class="profileMenu">
                        <h2>Bank<br>Summary</h2>
                    </div>
                </a>
            </div>
            <div class="col-lg-1" style="padding: 0px,10px">
            </div>
            <div class="col-lg-3">
                <a href="history-bank.php">
                    <div class="profileMenu">
                        <h2>Transaction<br>History</h2>
                    </div>
                </a>
            </div>
            <div class="col-lg-1" style="padding: 0px,10px">
            </div>
            <div class="col-lg-3">
                <a href="ch-pass-bank.php">
                    <div class="profileMenu">
                        <h2>Change<br>Password</h2>
                    </div>
                </a>
            </div>
            <div class="col-lg-1" style="padding: 0px,10px">
            </div>
        </div>
    </div>
</body>