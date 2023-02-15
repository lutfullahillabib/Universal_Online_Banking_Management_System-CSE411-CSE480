<?php
	include_once("connection.php");
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Universal Bank - Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body class="body">
    <?php
        include("header.php");
        include("navbar.php");
    ?>

    <h1 style="text-align: center; text-shadow: 2px 2px #000000"><b>Welcome to Universal Bank of Bangladesh Ltd.<b> </h1>
    <br> <br>
    <h2 style="text-align: center;color:black"> <b> <u>OUR BANKS</u> </b> </h2>
    <?php
				$sql0 =  "SELECT * FROM admins";
				$query = $conn -> query($sql0);
				$cnt=1;
				while($row = $query->fetch_assoc())
				{
		?>
    <div style="margin: auto">
        <div class="row index">
            <div class="profileMenu index">
                <h2><?php echo $row['name']; ?></h2>
                <p style="color: white">
                    Address: <?php echo $row['address']; ?><br>
                    Contact: <?php echo $row['contact']; ?><br>
                    Email: <?php echo $row['email']; ?>
                </p>
            </div>

        </div>
    </div>
    <?php
					$cnt++;
				}
		 ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>