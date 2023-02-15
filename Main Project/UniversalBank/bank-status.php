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
    <script src="https://use.fontawesome.com/9a69407135.js"></script>
</head>

<body style="background-image: linear-gradient(#0A707D,white)">
    <?php
        include_once("connection.php");
        include("header.php");
        include("navbar.php");
        $aid = $_SESSION['loggedIn_id'];
        $sql0 =  "SELECT * FROM admins WHERE aid = '".$aid."'";
        $result = $conn->query($sql0);
        $row = $result->fetch_assoc();
        $bank = $row['name'];
        $active = $row['active'];

    ?>
    <div class="flex-item-1">
        <div class="flex-item">
            <h2> Bank Name : <?php echo $bank; ?></h2>
        </div>
    </div>

    <div class="flex-item-1" style="padding: 20px; width: 50%">
        <h2>Bank Summary</h2>
        <table>
            <tr>
                <td>
                    <h3>Bank Authorization No.</h3>
                </td>
                <td>
                    <h3>: <?php echo $row['bid']; ?></h3>
                </td>
            <tr>
                <td>
                    <h3>Physical Address</h3>
                </td>
                <td>
                    <h3>: <?php echo $row['address']; ?></h3>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Contact</h3>
                </td>
                <td>
                    <h3>: <?php echo $row['contact']; ?></h3>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Email Address</h3>
                </td>
                <td>
                    <h3>: <?php echo $row['email']; ?></h3>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Active Status</h3>
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
                    <h3>: <?php
                    $sql0 =  "SELECT * FROM users WHERE active = '1' AND bank = '".$bank."'";
                    $query = $conn -> query($sql0);
                    $bal = 0;
                    while($row = $query->fetch_assoc())
                    {
                      $bal = $bal + $row['balance'];
                    }
                    echo $bal;
                     ?> BDT</h3>
                </td>
            </tr>

        </table>
    </div>

    <script type="text/javascript" src="JS/ShowPass.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>