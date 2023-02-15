<?php
    $msg = "";

	if(isset($_POST['login']))
	{

			  $bmail = $_POST["bmail"];
		    $pass = $_POST["psw"];
        $pwd = md5($pass);
		    $bank = $_POST["banks"];

		    $sql0 =  "SELECT * FROM admins WHERE bmail='".$bmail."' AND pass='".$pwd."' AND name='".$bank."'";
			     $result = $conn->query($sql0);
		       $row = $result->fetch_assoc();

			if (($result->num_rows) > 0) {
                session_start();
		    	$_SESSION['loggedIn_id'] = $row["aid"];
	        	$_SESSION['isValid'] = true;
                $_SESSION['user_type'] = 'bank';
                $_SESSION['name'] = $bank;
		        header("location:./bank-page.php");
		    }
		    else {
			    $msg = "Incorrect Informations. Try again!";
        }
    }
?>