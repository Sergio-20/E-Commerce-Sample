<?php
    session_start();
?>
<!DOCTYPE html>
<html>

  <head>

    <!--Metadata-->
    <meta charset="utf-8"/>
    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <!--External Stylesheets-->
    <link rel="stylesheet" href="style.css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.3/css/mdb.min.css" rel="stylesheet">

    <title>E-Commerce Site</title>
  </head>

  <body>

    <header>
      <nav>
        <img id="site-logo" src="#" alt="Website Logo" onclick="gotoHomepage()"/>
        <a href="#">Torso</a>
        <a href="#">Bottoms</a>
        <a href="#">Shoes</a>

        <?php
            if(isset($_SESSION["userId"]))
            {
                echo "<form action='logoutUser.php' method='post'> <button class='headerButton'>Logout</button> </form>";
            }
            else
            {
                echo "<button class='headerButton' onclick='gotoSignUp()'>Sign Up</button>";
                echo "<button class='headerButton' onclick='gotoLogin()'>Login</button>";
            }
        ?>

      </nav>
    </header>

        <?php
            if(isset($_SESSION["userId"]))
            {
                echo "<h1>You are logged in!</h1>";
            }
            else
            {
                echo "<h1>You are logged out!</h1>";
            }
        ?>

    <script type="text/javascript" src="navigationHandler.js"></script>

  </body>

  <hr>

</html>
