<?php
    error_reporting(0);
    session_start();

    include "dbh.php";

?>
<!DOCTYPE html>
<html>

  <head>

    <!--Metadata-->
    <meta charset="utf-8"/>
    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <!--External Stylesheets-->
    <link rel="stylesheet" href="../CSS/style.css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.3/css/mdb.min.css" rel="stylesheet">

    <!--Favicon-->
    <link rel="icon" href="logo.ico"/>

    <!--Font Awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">

    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Condensed|Pacifico" rel="stylesheet">

    <title>Effortless Apparel</title>
  </head>

  <body>

    <header class="blue-gradient">
      <nav>
        <img id="site-logo" src="https://images.pexels.com/photos/1111371/pexels-photo-1111371.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="Website Logo" onclick="gotoHomepage()"/>
        <h2 class="vertical-divider">|</h2>
        <div class="torso-container">
          <a class="torso-dropdown" href="#">Torso-></a>
            <div class="t-drop-elem">
              <a href="#">Shirts</a>
              <a href="#">Sweatshirts</a>
              <a href="#">Hoodies</a>
            </div>
        </div>
        <h4 class="vertical-divider">|</h4>
        <div class="bottoms-container">
          <a class="bottom-dropdown" href="#">Bottoms-></a>
            <div class="b-drop-elem">
              <a href="#">Shorts</a>
              <a href="#">Pants</a>
              <a href="#">Sweatpants</a>
            </div>
        </div>
        <h4 class="vertical-divider">|</h4>
        <div class="shoes-container">
          <a class="shoes-dropdown" href="#">Shoes-></a>
            <div class="s-drop-elem">
              <a href="#">Athletic</a>
              <a href="#">Casual</a>
            </div>
        </div>
        <form action="searchResults.php" method='post'>
          <input class="search-box" type="text" name="search-bar" placeholder="Search..." value="<?php echo $query ?>"/><i class="fas fa-search text-light" onclick="gotoSearchResults()"></i>
        </form>
        <?php echo $output ?>
        <h1 class="site-title purple-gradient text-light">Effortless Apparel</h1>

        <?php
            if(isset($_SESSION["userId"]))
            {
                if(!isset($_SESSION['profilePic']))
                {
                  echo "<br>";
                  echo "<img class='profilePic profilePic-header' src='https://images.pexels.com/photos/1639143/pexels-photo-1639143.jpeg?auto=compress&cs=tinysrgb&h=650&w=940' alt='Profile Picture' onclick='gotoProfilePage()'/>";
                }
                else
                {
                  echo "<img class='profilePic profilePic-header' src='uploads/fly_large.gif' alt='Default Profile Picture' onclick='gotoProfilePage()'/>";
                }
              echo "<p class='username'>".$_SESSION['userName']."</p>";
              echo "<form action='logoutUser.php' method='post'> <button id='logout-button' class='btn purple-gradient text-light'>Logout</button> </form>";
            }
            else
            {
                echo "<button id='login-button' class='btn purple-gradient' onclick='gotoLogin()'>Login</button>";
                echo "<button id='signup-button' class='btn purple-gradient' onclick='gotoSignUp()'>Sign Up</button>";
            }
        ?>

      </nav>
    </header>

    <!--jQuery-->
    <script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>

    <script type="text/javascript" src="../JS/navbarHandler.js"></script>

    <!--javascript-->
    <script type="text/javascript" src="../JS/navigationHandler.js"></script>

  </body>

  <br><br>
  <hr>

</html>
