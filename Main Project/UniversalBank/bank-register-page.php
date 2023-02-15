<?php
	include_once("connection.php");
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Universal Bank - Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <script src="https://use.fontawesome.com/9a69407135.js"></script>
</head>

<body class="body">
    <?php
        include("header.php");
        include("navbar.php");
        $msg = "";
				$flag = 1;
				$acnt = "";
    ?>

    <div class="flex-container-background">
        <div class="flex-container">
            <div class="flex-item-0">
                <h1 id="form_header">New Bank Registration</h1>
            </div>
        </div>

        <div class="flex-container">
            <div class="flex-item-2">
                <form method="post" enctype="multipart/form-data">
                    <div class="flex-item-login">
                        <h2>Enter Bank Informations Correctly</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="flex-item">
                                <input type="text" name="name" placeholder="Enter Bank Name" required value="<?php if(isset($_POST["name"])) echo $_POST["name"]; ?>">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="flex-item">
                                <input type="text" name="phone" placeholder="Enter Bank's Contact Number" required value="<?php if(isset($_POST['phone'])) echo $_POST['phone']; ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="flex-item">
                                <input type="text" name="bid" placeholder="Enter Bank Authorization ID" maxlength="14" minlength="14" required value="<?php if(isset($_POST['bid'])) echo $_POST['bid']; ?>">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="flex-item">
                                <textarea name="addr" rows="4" cols="50" placeholder="Enter Bank's Physical Address" required value="<?php if(isset($_POST['addr'])) echo $_POST['addr']; ?>"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="flex-item">
                                <input type="text" name="email" placeholder="Enter bank's Email Address" required value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="flex-item">
                                <input type="text" name="bmail" placeholder="Set Bank's Id" style="width: 50%" required value="<?php if(isset($_POST['bmail'])) echo $_POST['bmail']; ?>">
                                <span class="bmail" style="margin-left: 0px">@</span><span class="bmail" style="margin-left: 0px">ubbl.com</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="input-group mb-3 login-form-width-style">
                                <input type="password" name="psw" class="form-control" placeholder="Enter your Password" id="inp-pass" required>
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon" onclick="passShowjs()"><i class="fa fa-eye"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="flex-item">
                                <input type="password" name="cpass" placeholder="Re-enter your password" required>
                            </div>
                        </div>
                    </div>
                    <?php echo "<p style='color: red; padding: 0px 10px;'>".$msg."</p>"; ?>
                    <div class="flex-item">
                        <button type="Submit" name="reg">Register</button>
                    </div>
                    <?php
												include('bank-register.php');
                    ?>

                </form>
            </div>
        </div>
    </div>


    <script src="JS/ShowPass.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>