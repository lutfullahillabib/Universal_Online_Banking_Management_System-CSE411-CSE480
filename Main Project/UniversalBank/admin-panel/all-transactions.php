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
    <a href="index.php">
        <h4 class="logout"> <b>ADMIN</b> </h4>
    </a>
    <div class="flex-container-background">
        <div class="flex-container">
            <div class="flex-item-0">
                <h1 id="form_header">All Transactions</h1>
            </div>
        </div>
    </div>
    <div class="flex-item-3" style="padding: 20px">
        <h2>All Transactions of all Bank's all Users</h2>
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
					//echo "echo".$_SESSION['loggedIn_id']." ".$bank;
					$sql1 =  "SELECT * FROM transactions";
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

</html>