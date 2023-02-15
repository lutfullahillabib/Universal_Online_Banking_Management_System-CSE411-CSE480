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
                <h1 id="form_header">Change Admin Password</h1>
            </div>
        </div>
    </div>
    <div class="flex-container">
        <div class="flex-item-1">
            <form method="post">
                <div class="flex-item">
                    <h2>Change Password</h2>
                </div>
                <div class="input-group mb-3 login-form-width-style">
                    <input type="password" class="form-control" name="old_pass" placeholder="Enter Old Password" id="inp-pass" required>
                    <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon" onclick="passShowjs1('old_pass')"><i class="fa fa-eye"></i></span>
                    </div>
                </div>
                <div class="input-group mb-3 login-form-width-style">
                    <input type="password" class="form-control" name="new_pass1" placeholder="Enter New Password" id="inp-pass" required>
                    <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon" onclick="passShowjs1('new_pass1')"><i class="fa fa-eye"></i></span>
                    </div>
                </div>
                <div class="input-group mb-3 login-form-width-style">
                    <input type="password" class="form-control" name="new_pass2" placeholder="Confirm New Password" id="inp-pass" required>
                    <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon" onclick="passShowjs1('new_pass2')"><i class="fa fa-eye"></i></span>
                    </div>
                </div>
                <div class="flex-item">
                    <button type="submit" name="ch_pass">Submit</button>
                </div>
                <div class="flex-item">
                    <?php
            $msg = "";
            if(isset($_POST['ch_pass']))
                    {
                        $sql0 =  "SELECT pass FROM superadmin";
                        $result = $conn->query($sql0);
                        $row = $result->fetch_assoc();
                        $pass = $row['pass'];
                        $old_pass = md5($_POST['old_pass']);
                        $new_pass1 = $_POST['new_pass1'];
                        $new_pass2 = $_POST['new_pass2'];
                        if($old_pass==$pass)
                        {
													$regex = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/"; //Regular Expression
													if(preg_match($regex, $new_pass1))
													{
														$new_pass1 = md5($new_pass1);
														$new_pass2 = md5($new_pass2);
                            if($old_pass != $new_pass1)
                            {
                                  if($new_pass1==$new_pass2)
                                  {
                                    $sql = "UPDATE superadmin SET pass = '$new_pass1'";
                                    $result = mysqli_query($conn,$sql);
                                    $msg = "<p style='color:white;background-color:green; padding: 0px 30px'>Password changed Successfully!!</p>";
                                  }
                                  else
                                  {
                                    $msg = "<p style='color:white;background-color:red; padding: 0px 30px'>Confirm Password did not match!!</p>";
                                  }
                            }
                            else
                            {
                                $msg = "<p style='color:white;background-color:red; padding: 0px 30px'>Old Password cannot be new password</p>";
                            }
                        }
                        else
                        {
													$msg = "<p style='color:white;background-color:red; padding: 0px 30px'>Password must contain<br> *At least 8 characters<br> *At least a number<br> *At least a letter <br> * At least one Capital letter</p>";
                        }
                     }
                 else
                 {
                    $msg = "<p style='color:white;background-color:red; padding: 0px 30px'>Password Incorrect!!</p>";
                  }
              }
            echo $msg;
        ?>
                </div>
            </form>
        </div>
    </div>
    <script src="../JS/ShowPass.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>