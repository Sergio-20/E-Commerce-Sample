<?php

    /*Beginning Of Sign Up Procedure*/
    if(isset($_POST["signupSubmit"])){

        require "dbh.php";

        $username = $_POST["userID"];
        $email = $_POST["userMail"];
        $password = $_POST["userPwd"];
        $passwordConfirm = $_POST["userPwdConfirm"];

        if( empty($username) || empty($email) || empty($password) ||
        empty($passwordConfirm) ){
            header("Location: signupPage.php?error=emptyfields&userID=".$username."&email=".$email);
            exit();
        }
        else if( !filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[]a-zA-Z0-9*$/ ", $username) )
        {
            header("Location: signupPage.php?error=invaliduserID&email");
            exit();
        }
        else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            header("Location: signupPage.php?error=invalidmail&userID=".$username);
            exit();
        }
        else if(!preg_match("/^[a-zA-Z0-9]*$/ ", $username))
        {
            header("Location: signupPage.php?error=invaliduserID&email=".$email);
            exit();
        }
        else if($password !== $passwordConfirm)
        {
            header("Location: signupPage.php?error=passwordcheck&userID=".$username."&email=".$email);
            exit();
        }
        else
        {
            $sql = "SELECT userID FROM userAccounts WHERE userID=?";
            $stmt = mysqli_stmt_init($connection);
            if(!mysqli_stmt_prepare($stmt, $sql))
             {
                header("Location: signupPage.php?error=sqlerror");
                exit();
             }
           else
            {
                mysqli_stmt_bind_param($stmt, "s", $username);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
                $resultCheck = mysqli_stmt_num_rows($stmt);
                if($resultCheck > 0)
                    {
                        header("Location: signupPage.php?error=usernametaken&email=".$email);
                        exit();
                    }
                else
                    {
                        $sql = "INSERT INTO userAccounts (username, userEmail, userPassword) VALUES (?, ?, ?);";
                        $stmt = mysqli_stmt_init($connection);
                        if(!mysqli_stmt_prepare($stmt, $sql))
                        {
                            header("Location: signupPage.php?error=sqlerror");
                            exit();
                        }
                        else
                        {
                            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                            mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPassword);
                            mysqli_stmt_execute($stmt);
                            mysqli_stmt_store_result($stmt);
                            header("Location: signupPage.php?signup=success");
                            exit();
                        }
                    }
            }

        }
        mysqli_stmt_close($stmt);
        mysqli_close($connection);
    }
    else
    {
      header("Location: signupPage.php?lolRuH4ck3R?");
      exit();
    }
    /*End Of Sign Up Procedure*/
