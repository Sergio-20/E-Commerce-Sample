<?php

  if(isset($_POST['submit']))
  {

    $file = $_FILES['profilePic'];

    $fileName = $_FILES['profilePic']['name'];
    $fileTmpName = $_FILES['profilePic']['tmp_name'];
    $fileSize = $_FILES['profilePic']['size'];
    $fileError = $_FILES['profilePic']['error'];
    $fileType = $_FILES['profilePic']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'gif');

    if(in_array($fileActualExt, $allowed))
    {
      if($fileError === 0)
      {
        $fileNewName = uniqid('', true).".".$fileActualExt;
        $fileDestination = 'uploads/'.$fileNewName;
        move_uploaded_file($fileTmpName, $fileDestination);
        echo "header(Location: profilePage.php)";
      }
      else
      {
        echo "<script>alert('An error occurred.');</script>";
      }
    }
    else
    {
      echo
      "<script type='text/javascript'>
      alert('That file type is not allowed.');
      </script>";
    }

  }
