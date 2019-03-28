  let displayingBorderOptions = false;
  let displayingProfilePic = false;
  let displayingUsernameField = false;

  function changeBorderColor()
  {

    let borderColorOptions = document.querySelector(".border-color");


    if(!displayingBorderOptions)
    {
      borderColorOptions.style.display = "block";
      displayingBorderOptions = true;
    }
    else
    {
      borderColorOptions.style.display = "none";
      displayingBorderOptions = false;
    }

  }

  function changeProfilePic()
  {
    let browseImg = document.querySelector('#browse-profilePic');
    let uploadBtn = document.querySelector('#upload-btn');

    if(!displayingProfilePic)
    {
      browseImg.style.display = "block";
      uploadBtn.style.display = "block";
      displayingProfilePic = true;
    }
    else
    {
      browseImg.style.display = "none";
      uploadBtn.style.display = "none";
      displayingProfilePic = false;
    }

  }

  function changeDesiredElements()
  {

    let usernameField = document.querySelector("#desired-username");
    let usernameBtn = document.querySelector("#username-submit");

    if(!displayingUsernameField)
    {
      usernameField.style.display = "block";
      usernameBtn.style.display = "block";
      displayingUsernameField = true;
    }
    else
    {
      usernameField.style.display = "none";
      usernameBtn.style.display = "none";
      displayingUsernameField = false;
    }
  }
