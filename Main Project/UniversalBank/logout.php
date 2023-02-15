<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body class="body">

    <?php
        include("header.php");
    ?>

    <div style="margin:auto;padding-top: 50px">
        <div class="textdiv">

            <?php
                session_start();
                session_destroy();
                echo "<h1>LOGGING OUT...</h1>";
                header("Refresh: 2; URL=index.php");
            ?>

        </div>
    </div>

</body>

</html>