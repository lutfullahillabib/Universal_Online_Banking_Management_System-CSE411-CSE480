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
        $sql0 =  "SELECT * FROM users WHERE uid = '".$uid."'";
        $result = $conn->query($sql0);
        $row = $result->fetch_assoc();
        $name = $row['fname'];
        $acc = $row['acc'];
        $bank = $row['bank'];
        $active = $row['active'];
        $bal = $row['balance'];

    ?>
    <div class="flex-item-1">
        <div class="flex-item">
            <h1 style="padding:10px 10px"><?php echo $name; ?> </h1>
            <h2> Bank Name : <?php echo $bank; ?></h2>

        </div>
    </div>
    <div class="flex-item-1" style="padding: 20px">
        <h2>Account Summary</h2>
        <table>
            <tr>
                <td>
                    <h3>Account No.</h3>
                </td>
                <td>
                    <h3>: <?php echo $acc; ?></h3>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Account Status</h3>
                </td>
                <td>
                    <h3>:
                        <?php
                                if($active)
                                    echo "<i style='color:green'>Active</i>";
                                else
                                    echo "<i style='color:red'>Inactive</i>";
                        ?>
                    </h3>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Current Balance</h3>
                </td>
                <td>
                    <h3>: <?php echo $bal; ?> BDT</h3>
                </td>
            </tr>
        </table>
    </div>
</body>