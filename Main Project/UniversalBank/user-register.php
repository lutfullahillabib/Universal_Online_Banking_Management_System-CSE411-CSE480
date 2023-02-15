<?php
	include_once("connection.php");
    //Regular Expression
    $regex_email = "/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/";
    $regex_name = "/^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/";
    $regex_password = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/';
		$regex_contact = '/^01[3-9][0-9]{8}$/';
		$regex_nid = '/^([0-9]{4})?[0-9]{10}$/';
		$msg = "";
		$flag = 1;

		if(isset($_POST['reg']))
		{
			if (!preg_match($regex_name, $_POST['fname']) || !preg_match($regex_name, $_POST['lname']))
			{
				echo "<i style='color:white;background-color:red;'>Invalid Name! Try a valid name!</i><br>Can't Give Space or special character or especial alphabet<br>";
				$flag = 0;
			}
			if(!preg_match($regex_contact, $_POST['phone']))
			{
				echo "<i style='color:white;background-color:red;'>Invalid Contact Number! Try a valid Contact Number!</i><br>";
				$flag = 0;
			}
			if(!preg_match($regex_email, $_POST['email']))
			{
				echo "<i style='color:white;background-color:red;'>Invalid Email Address! Try a valid Email Address!</i><br>";
				$flag = 0;
			}
			if(!preg_match($regex_nid, $_POST['nid']))
			{
				echo "<i style='color:white;background-color:red;'>Invalid NID Number! Try you valid NID Number!</i><br>";
				$flag = 0;
			}
			if(!preg_match($regex_password, $_POST['psw']))
			{
				echo "<i style='color:white;background-color:red;'>Please select a Strong password for your account!</i><br>Password must contain<br> *At least 8 characters<br> *At least a number<br> *At least a letter <br> * At least one Capital letter<br>";
				$flag = 0;
			}
			if($_POST['psw'] != $_POST['cpass'])
			{
				echo "<i style='color:white;background-color:red;'>Password Did not match</i><br>";
				$flag = 0;
			}

		echo "<i style='color:red'>".$flag."</i>";
		if($flag==1)
		{

				$name = $_POST['fname'].' '.$_POST['lname'];
				$sex = $_POST['sex'];
				$phone = $_POST['phone'];
				$addr = $_POST['addr'];
				$nid = $_POST['nid'];
				$acnt = $_SESSION['random'];
				$bank = $_POST['banks'];
				$email = $_POST['email'];
				$pass = md5($_POST['psw']);
				$image = $_FILES['image']['name'];
				$imageName = $acnt.".jpg";
				$target = "images/".$imageName;
				$tmpname = $_FILES['image']['tmp_name'];
				$sql = "INSERT INTO users(fname,gender,contact,address,nid,bank,acc,balance,email,image,pass,pin) VALUES('$name','$sex', '$phone','$addr','$nid','$bank','$acnt',0,'$email','$imageName','$pass',1234)";
		    //$result = $conn->query($sql);
		    if ($conn->query($sql) === TRUE)
				{
					move_uploaded_file($tmpname, $target);
		    	echo "<i style='color:white;background-color:green;'>You have been registered! Please Go to the Login option for logging in!</i><br>";
					session_destroy();
		    }
				else
				{
		    	echo "<i style='color:white;background-color:red;'>There were some problems in the server! Please try again after some time!</i><br>";
		    }
		}
	}


?>