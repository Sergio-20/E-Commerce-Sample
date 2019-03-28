<?php
  include "../PHP/header.php";
 ?>

  <main>
    <?php
      echo
      "<h1 style='text-align:center;'>".$_SESSION['userName']."'s Profile"."</h1>
      <img style='right:-45%;' class='profilePic' src='https://images.pexels.com/photos/1639143/pexels-photo-1639143.jpeg?auto=compress&cs=tinysrgb&h=650&w=940'/>

      <!--Change Image-->
      <div class='change-image'>Change Image</div>
      <br><br>
      <div class='profile-option' onclick='changeBorderColor()'>Change Border Color</div>
      <br>
      <div class='border-color'>
        <input class='center-block' type='text' placeholder='Type A Color'/>
        <br>
        <input class='center-block' type='submit' value='Go'/>
      </div>
      <br>

      <!--Change Profile Picture-->
      <div class='profile-option' onclick='changeProfilePic()'>Change Profile Picture</div>
      <br>
      <form action='upload.php' enctype='multipart/form-data' method='post'>
        <input id='browse-profilePic' class='center-block' type='file' name='profilePic'/>
        <br>
        <button id='upload-btn' class='purple-gradient text-light center-block' type='submit' name='submit'>Upload</button>
      </form>

      <!--Change Username-->
      <div class='profile-option' onclick='changeDesiredElements()'>Change Username</div>
      <form>
        <br>
        <input id='desired-username' class='center-block' type='text' placeholder='Enter Desired Username...'/>
        <br>
        <button id='username-submit' Class='purple-gradient text-light center-block' type='submit'>Submit</button>
      </form>
      <br><br><br><br>";
     ?>

     <!--Javascript-->
     <script type="text/javascript" src="../JS/profilePage.js"></script>

  </main>

 <?php
  include "../PHP/footer.php";
  ?>
