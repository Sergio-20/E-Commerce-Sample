  $(document).ready( () => {

    //Torso Dropdown
    $(".torso-container").on("mouseover", () => {
      $(".t-drop-elem").css("display", "inline");
    });
    $(".torso-container").on("mouseleave", () => {
      $(".t-drop-elem").css("display", "none");
    });

    //Bottoms Dropdown
    $(".bottoms-container").on("mouseover", () => {
      $(".b-drop-elem").css("display", "inline");
    });
    $(".bottoms-container").on("mouseleave", () => {
      $(".b-drop-elem").css("display", "none");
    });

    //Shoes Dropdown
    $(".shoes-container").on("mouseover", () => {
      $(".s-drop-elem").css("display", "inline");
    });
    $(".shoes-container").on("mouseleave", () => {
      $(".s-drop-elem").css("display", "none");
    });

  });
