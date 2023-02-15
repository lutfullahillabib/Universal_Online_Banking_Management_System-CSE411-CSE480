<?php
include_once("../connection.php");
    $bid = $_GET['bank'];
    $par = $_GET['par'];
    echo $par;
    if($par == 'active')
    {
      $sql2 =  "UPDATE admins SET active = '1' WHERE bid = '$bid'";
      echo $bid;
      $query2 = $conn -> query($sql2);
      echo $par;
      header("Location: pending-banks.php");
    }
    else if($par == 'inactive')
    {
      $sql2 =  "UPDATE admins SET active = '0' WHERE bid = '$bid'";
      echo $bid;
      $query2 = $conn -> query($sql2);
      echo $par;
      header("Location: active-banks.php");
    }
?>