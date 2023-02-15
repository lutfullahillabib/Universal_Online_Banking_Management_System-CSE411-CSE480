<?php
	include_once("connection.php");
    //Regular Expression
    $regex_email = "/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/";
    $regex_name = "/^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/";
    $regex_bmail = "/^[a-z]+(([',. -][a-z ])?[a-z]*)*$/";
    $regex_password = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/'; 
		$regex_contact = '/^01[3-9][0-9]{8}$/';
		$regex_bid = '/^[0-9]{14}$/';
		$msg = "";
		$flag = 1;

		if(isset($_POST['reg']))
		{
			if (!preg_match($regex_name, $_POST['name']))
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
      if (!preg_match($regex_bmail, $_POST['bmail']))
			{
				echo "<i style='color:white;background-color:red;'>Invalid ID! Try a valid ID!</i><br>";
				$flag = 0;
			}
      else {
        $bmail = $_POST['bmail']."@ubbl.com";
        $sql1 =  "SELECT * FROM admins WHERE bmail='".$bmail."'";
        $result = $conn->query($sql1);
        $row = $result->fetch_assoc();
        if(($result->num_rows) > 0)
        {
          echo "<i style='color:white;background-color:red;'>ID Already Taken! Try a valid ID!</i><br>";
  				$flag = 0;
          $bmail = "";
        }
      }
			if(!preg_match($regex_bid, $_POST['bid']))
			{
				echo "<i style='color:white;background-color:red;'>Invalid Authorization ID! Try you valid Bank Authorization ID Number!</i><br>";
				$flag = 0;
			}
			if(!preg_match($regex_password, $_POST['psw']))
			{
				echo "<i style='color:white;background-color:red;'>Please select a Strong password for your account!</i><br>
                Password must contain<br> *At least 8 characters<br> *At least a number<br> *At least a letter <br> * At least one Capital letter<br>";
				$flag = 0;
			}
			if($_POST['psw'] != $_POST['cpass'])
			{
				echo "<i style='color:white;background-color:red;'>Password Did not match</i><br>";
				$flag = 0;
			}

		//echo "<i style='color:red'>".$flag."</i>";
		if($flag==1)
		{

				$name = $_POST['name'];
				$phone = $_POST['phone'];
				$addr = $_POST['addr'];
				$bid = $_POST['bid'];
				$email = $_POST['email'];
				$pass = md5($_POST['psw']);

				$sql = "INSERT INTO admins(name,contact,address,bid,email,bmail,pass) VALUES('$name', '$phone','$addr','$bid','$email','$bmail','$pass')";
		    if ($conn->query($sql) === TRUE)
				{
		    	echo "<i style='color:white;background-color:green;'>".$name." has been registered as a Bank of UBBL!<br> Please Go to the Bank Login option for logging in!</i><br>";
					session_destroy();
		    }
				else
				{
		    	echo "<i style='color:white;background-color:red;'>There were some problems in the server! Please try again after some time!</i><br>";
		    }
		}
	}


?>