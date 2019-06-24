// Slow-Opacity!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
function isVisible(elem) {
      var coords = elem.getBoundingClientRect();
      var windowHeight = document.documentElement.clientHeight;
      // верхняя граница elem в пределах видимости ИЛИ нижняя граница видима
      var topVisible = coords.top > 0 && coords.top < windowHeight;
      var bottomVisible = coords.bottom < windowHeight && coords.bottom > 0;
      return topVisible || bottomVisible;
    }
 var special = document.querySelectorAll("p.special");
 var info = document.querySelectorAll(".contacts .info");
 function showVisible() {
      for (var i = 0; i < special.length; i++) {
        var title = special[i];
        if (isVisible(title)) {
                title.style.opacity = 1;
        }
      }
      for (var j=0; j < info.length; j++) {
        var title = info[j];
        if (isVisible(title)) {
                title.style.opacity = 1;
                title.style.transform = "none";
        }
      }
    }           
 window.onscroll = showVisible;
 showVisible();