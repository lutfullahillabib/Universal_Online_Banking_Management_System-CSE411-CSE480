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
        $active = $row['active'];

    ?>
    <div class="flex-item-1">
        <div class="flex-item">
            <h1 style="padding:10px 10px"><?php echo $name; ?> </h1>
            <h2> Bank Name : <?php echo $bank; ?></h2>

        </div>
    </div>
    <?php
      if($active == 1)
      {
     ?>
    <div class="container text-center">
        <div class="row" style="padding: 20px;">
            <div class="col-lg-3">
                <a href="deposit.php">
                    <div class="transMenu">
                        <h2>Deposit<br>Money</h2>
                    </div>

                </a>
            </div>
            <div class="col-lg-1" style="padding: 0px,10px">
            </div>
            <div class="col-lg-3">
                <a href="withdraw.php">
                    <div class="transMenu">
                        <h2>Withdraw<br>Money</h2>
                    </div>
                </a>
            </div>
            <div class="col-lg-1" style="padding: 0px,10px">
            </div>
            <div class="col-lg-3">
                <a href="transfer.php">
                    <div class="transMenu">
                        <h2>Transfer Money</h2>
                    </div>
                </a>
            </div>
            <div class="col-lg-1" style="padding: 0px,10px">
            </div>
        </div>
    </div>
    <?php
        }
      else {
        echo "<h2 style='color:black'>Wait till your account is activated to Start making Transactions</h2>";
      }
     ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>