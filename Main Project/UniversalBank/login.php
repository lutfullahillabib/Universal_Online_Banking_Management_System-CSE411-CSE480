<?php
    $msg = "";

	if(isset($_POST['login']))
	{

			  $email = mysqli_real_escape_string($conn, $_POST["email"]);
		    $pass = mysqli_real_escape_string($conn, $_POST["psw"]);
        $pwd = md5($pass);
		    $bank = mysqli_real_escape_string($conn, $_POST["banks"]);

        //echo $email."<br>".$pwd."<br>".$bank;

		    $sql0 =  "SELECT * FROM users WHERE email='".$email."' AND pass='".$pwd."' AND bank='".$bank."'";
			$result = $conn->query($sql0);
		    $row = $result->fetch_assoc();

			if (($result->num_rows) > 0) {
                session_start();
		    	$_SESSION['loggedIn_id'] = $row["uid"];
	        	$_SESSION['isValid'] = true;
                $_SESSION['user_type'] = 'user';
                $_SESSION['name'] = $row["fname"];
                //$uid = $_SESSION['loggedIn_id'];
		        header("location: profile.php");
		    }
		    else {
			    $msg = "Incorrect Informations. Try again!";
                }
    }
?>