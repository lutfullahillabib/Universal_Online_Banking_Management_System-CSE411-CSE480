<?php
include_once("connection.php");
    $acc = $_GET['acc'];
    $par = $_GET['par'];
    echo $par;
    if($par == 'active')
    {
      $sql2 =  "UPDATE users SET active = '1' WHERE acc = '$acc'";
      echo $acc;
      $query2 = $conn -> query($sql2);
      echo $par;
      header("Location: inactive-users.php");
    }
    else if($par == 'inactive')
    {
      $sql2 =  "UPDATE users SET active = '0' WHERE acc = '$acc'";
      echo $acc;
      $query2 = $conn -> query($sql2);
      echo $par;
      header("Location: users-list.php");
    }
?>