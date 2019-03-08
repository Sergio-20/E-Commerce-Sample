<?php

    /*Beginning Of Login Procedure*/
    if(isset($_POST["loginSubmit"]))
    {
        require "dbh.php";

        $emailUsername = $_POST["emailUsername"];
        $pwd = $_POST["pwd"];

        if( empty($emailUsername) || empty($pwd) )
        {
            header("Location: loginPage.php?error=emptyfields");
            exit();
        }
        else
        {
            $sql = "SELECT * FROM userAccounts WHERE username=? OR userEmail=?;";
            $stmt = mysqli_stmt_init($connection);
            if(!mysqli_stmt_prepare($stmt, $sql))
            {
                header("Location: loginPage.php?error=sqlerror");
                exit();
            }
            else
            {
                mysqli_stmt_bind_param($stmt, "ss", $emailUsername, $emailUsername);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                if($row = mysqli_fetch_assoc($result))
                {
                    $pwdCheck = password_verify($pwd, $row["userPassword"]);
                    if($pwdCheck == false)
                    {
                        header("Location: loginPage.php?error=wrongpassword");
                        exit();
                    }
                    else if($pwdCheck == true)
                    {
                        session_start();
                        $_SESSION["userId"] = $row["userID"];
                        $_SESSION["userName"] = $row["username"];

                        header("Location: index.php?login=success");
                        exit();
                    }
                }
                else
                {
                    header("Location: loginPage.php?error=userdoesnotexist");
                    exit();
                }
            }
        }

    }
    else
    {
        header("Location: loginPage.php?lolRuH4ck3R?");
        exit();
    }
    /*End Of Login Procedure*/
