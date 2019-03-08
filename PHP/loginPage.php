  <?php
    require "header.php";
  ?>

    <main>
      <form class="signup-form" action="loginSystem.php"method="post">
        <h2>Login To Your Account</h2>
        <input name="emailUsername" type="text" placeholder="Username or Email"/><br><br>
        <input name="pwd" type="password" placeholder="Enter Password"/><br><br>
        <input class="btn blue-gradient" name="loginSubmit" type="submit" value="Login"/><br><br>
        <a href="#">Forgot Your Username?</a>
        <a href="#">Forgot Your Password?</a>
      </form>
    </main>

  <?php
    require "footer.php";
  ?>
