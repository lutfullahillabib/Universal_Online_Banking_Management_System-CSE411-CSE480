<?php
    $msg = "";

	if(isset($_POST['login']))
	{

			  $admin = $_POST["admin"];
		    $pass = md5($_POST["psw"]);

		    $sql0 =  "SELECT * FROM superadmin WHERE admin='".$admin."' AND pass='".$pass."'";
			$result = $conn->query($sql0);
		    $row = $result->fetch_assoc();

			if (($result->num_rows) > 0) {
                session_start();
		    	$_SESSION['sadmin'] = "admin";
                //$uid = $_SESSION['loggedIn_id'];
		        header("location: index.php");
		    }
		    else {
			    $msg = "Incorrect Informations. Try again!";
                }
    }
?>