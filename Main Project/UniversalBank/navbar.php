<div class="nav-wrapper">
    <div class="topnav" id="theTopNav">
        <a href="index.php">HOME</a>
        <a href="contact.php">CONTACT</a>
        <a href="about.php">ABOUT US</a>
        <?php
            if(isset($_SESSION['isValid']))
            {
                echo "<div style='float:right'>";
                if($_SESSION['user_type']=='user')
                {
                    echo "<a href='profile.php'>".strtoupper($_SESSION['name'])."</a>";
                }
                else if($_SESSION['user_type']=='bank')
                {
                    echo "<a href='bank-page.php'>".strtoupper($_SESSION['name'])."</a>";
                }
                echo "<a href='logout.php'>LOGOUT</a></div>";
            }
            else
            {
        ?>
        <div style="float:right">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">LOGIN</a>
            <div class="dropdown-menu" style="background-color: #263238" aria-labelledby="navbarDropdown">
                <a class="dropdown-item navdropbtn" href='login-page.php'>USER LOGIN</a>
                <a class="dropdown-item navdropbtn" href='login-bank-page.php'>BANK LOGIN</a>
            </div>
        </div>
        <div style="float:right">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">REGISTER</a>
            <div class="dropdown-menu" style="background-color: #263238" aria-labelledby="navbarDropdown">
                <a class="dropdown-item navdropbtn" href='user-register-page.php'>REGISTER NEW USER</a>
                <a class="dropdown-item navdropbtn" href='bank-register-page.php'>REGISTER NEW BANK</a>
            </div>
        </div>


        <?php
            }
        ?>
        <a href="javascript:void(0);" class="icon" onclick="respFunc()">&#9776;</a>
    </div>
</div>

<script>
    function respFunc() {
        var x = document.getElementById("theTopNav");
        console.log(x);

        if (x.className === "topnav") {
            x.className += " responsive";
            return 0;
        }

        if (x.className === "topnav navbar-fixed") {
            x.className += " responsive";
            return 0;
        }

        if (x.className === "topnav responsive") {
            x.className = "topnav";
            return 0;
        }

        if (x.className === "topnav navbar-fixed responsive" || x.className === "topnav responsive navbar-fixed") {
            x.className = "topnav navbar-fixed";
            return 0;
        }
    }

    $(document).ready(function() {
        $(window).scroll(function() {
            if ($(window).scrollTop() > 120) {
                $("#theTopNav").addClass('navbar-fixed');
            }
            if ($(window).scrollTop() < 121) {
                $("#theTopNav").removeClass('navbar-fixed');
            }
        });
    });
</script>