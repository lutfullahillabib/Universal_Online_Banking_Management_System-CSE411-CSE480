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
        $bank = $_SESSION['name'];
        $sql0 =  "SELECT * FROM users WHERE active = '0' AND bank = '".$bank."'";
        $query = $conn -> query($sql0);
        $cnt=1;
    ?>
    <div class="flex-item-1">
        <div class="flex-item">
            <h2> Bank Name : <?php echo $bank; ?></h2>
        </div>
    </div>

    <div class="flex-item-3" style="padding: 0px">
        <form method="post">
            <div style="padding:20px">
                <h2>All Active Users of <?php echo $bank ?></h2>
                <table border="1" style="padding:10px;color:white;text-align:center;">
                    <tr>
                        <th>SLN</th>
                        <th>Picture</th>
                        <th>Full Name</th>
                        <th>Gender</th>
                        <th>Contact No</th>
                        <th>Email Address</th>
                        <th>National ID No</th>
                        <th>Account No.</th>
                        <th>Balance</th>
                        <th>Action</th>
                    </tr>
                    <?php
          while($row = $query->fetch_assoc())
          {
              $name = $row["fname"];
              $image = $row["image"];
              $sex = $row["gender"];
              $phone = $row["contact"];
              $email = $row["email"];
              $address = $row["address"];
              $nid = $row["nid"];
              $acc = $row["acc"];
              $active = $row["active"];
              $bal = $row["balance"];
    ?>
                    <tr>
                        <td><?php echo $cnt; ?></td>
                        <td><?php echo "<img src='images/".$image."' width='100px' alt='User image'>"; ?></td>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $sex; ?></td>
                        <td><?php echo $phone; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $nid; ?></td>
                        <td><?php echo "UBBL-".$acc; ?></td>
                        <td><?php echo $bal; ?></td>
                        <td>
                            <?php
                    if($active == 0)
                    {
                ?>
                            <button type="button" class="btn btn-success" onclick="location.href='update.php?acc=<?php echo $acc; ?>&par=active';" name="active">Activate</button>
                            <?php
                    }
                ?>
                        </td>
                    </tr>
                    <?php
              $cnt++;
        }
    ?>
                </table>
            </div>
        </form>
    </div>
    <script type="text/javascript" src="JS/update.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>