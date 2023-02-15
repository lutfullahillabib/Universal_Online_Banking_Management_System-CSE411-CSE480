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
        $bank = $_SESSION['name'];
        $sql0 =  "SELECT * FROM users WHERE uid = '".$uid."'";
        $query = $conn -> query($sql0);
        $row = $query->fetch_assoc();
    ?>
    <div class="flex-item-1">
        <div class="flex-item">
            <h2> Bank Name : <?php echo $bank; ?></h2>
        </div>
    </div>

    <div class="flex-item-3" style="padding: 20px">
        <h2>Your Transactions</h2>
        <table border="1" style="padding:10px;color:white;text-align:center;">
            <tr>
                <th>SLN</th>
                <th>Name</th>
                <th>Account No</th>
                <th>Bank</th>
                <th>Amount</th>
                <th>Transaction Type</th>
                <th>Target Account</th>
                <th>Target Bank</th>
            </tr>
            <?php
              $sql1 =  "SELECT * FROM transactions WHERE acc = '".$row['acc']."'";
              $query1 = $conn -> query($sql1);
              $cnt = 0;

          while($row1 = $query1->fetch_assoc())
          {
            $name = $row1["name"];
            $account = $row1["acc"];
            $bank = $row1["bank"];
            $amount = $row1["amount"];
            $type = $row1["type"];
            $acc2 = $row1["acc2"];
            $bank2 = $row1["bank2"];


    ?>
            <tr>
                <td><?php echo $cnt; ?></td>
                <td><?php echo $name; ?></td>
                <td><?php echo $account; ?></td>
                <td><?php echo $bank; ?></td>
                <td><?php echo $amount; ?></td>
                <td><?php echo $type; ?></td>
                <td><?php echo $acc2; ?></td>
                <td><?php echo $bank2; ?></td>
            </tr>
            <?php
              $cnt++;
        }
    ?>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>