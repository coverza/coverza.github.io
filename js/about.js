  var social = document.querySelectorAll(".artists li");
  function showVisible() {
      for (var i = 0; i < social.length; i++) {
        var icon = social[i];
        if (isVisible(icon)) {
                icon.style.opacity = 1;
                icon.style.transform = "none";
        }
      }
    }         

  window.addEventListener("scroll", showVisible);
  showVisible();
