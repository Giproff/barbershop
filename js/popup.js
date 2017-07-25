    var link = document.querySelector(".login");
    var popup = document.querySelector(".modal-content");
    var form = popup.querySelector("form");
    var close = document.querySelector(".modal-content-close");
    var login = popup.querySelector("[name = login]");
    var password = popup.querySelector("[name = password]");
    var lgnval = localStorage.getItem("login", login.value);

    var mapOpen = document.querySelector(".js-open-map");
    var mapPopup = document.querySelector(".modal-content-map");
    var mapClose = mapPopup.querySelector(".modal-content-close");

    mapOpen.addEventListener("click", function(event) {
          event.preventDefault();
          mapPopup.classList.add("modal-content-show");
          console.log("Покажи карту");
    });
    mapClose.addEventListener("click", function(event) {
          event.preventDefault();
          mapPopup.classList.remove("modal-content-show");
    });

    window.addEventListener("keydown", function(event) {
      if (event.keyCode === 27) {
      if (mapPopup.classList.contains("modal-content-show")) {
          mapPopup.classList.remove("modal-content-show");
      }
      }
    });

    link.addEventListener("click", function(event){
          event.preventDefault();
          popup.classList.add("modal-content-show");


          if (lgnval) {
              login.value = lgnval;
              password.focus();
          } else {
                  login.focus();
            }
        });
        close.addEventListener("click", function(event) {
          event.preventDefault();
          popup.classList.remove("modal-content-show");
        });
        form.addEventListener("submit", function(event) {
          if (!login.value || !password.value) {
                event.preventDefault();

              } else {
                localStorage.setItem("login", login.value);
                localStorage.setItem("password", password.value);
              }
        });

        window.addEventListener("keydown", function(event) {
            if (event.keyCode === 27) {
                if (popup.classList.contains("modal-content-show")) {
                       popup.classList.remove("modal-content-show");
                }
             }
        });
