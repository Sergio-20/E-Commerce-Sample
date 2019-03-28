<?php

    $servername = "localhost";
    $dBUsername = "root";
    $dBPassword = "vhYXu7O1Me90eLge";
    $dBName = "E-Commerce Accounts";

    $connection = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

    if (!$connection)
    {
        die("Connection failed: ".mysqli_connect_error());
    }
