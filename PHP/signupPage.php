  <?php
    require "../PHP/header.php";
  ?>

    <main>
      <form class="signup-form" action="signupSystem.php" method="post">
        <h2>Create An Account</h2>
        <input name="userID" type="text" placeholder="Username"/><br><br>
        <input name="userMail" type="email" placeholder="Email"/><br><br>
        <input name="userPwd" type="password" placeholder="Enter Password"/><br><br>
        <input name="userPwdConfirm" type="password" placeholder="Re-enter Password" /><br><br>
        <input class="btn blue-gradient" name="signupSubmit" type="submit" value="Sign Up"/><br><br>
      </form>
    </main>

  <?php
    require "../PHP/footer.php";
  ?>
