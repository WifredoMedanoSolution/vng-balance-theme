var lastScrollTop = 0;

window.addEventListener(
  "scroll",
  function () {
    var st = window.pageYOffset || document.documentElement.scrollTop;
    let elements = document.getElementsByClassName(
      "balance-background-circle-dots"
    );

    for (var i = 0; i < elements.length; i++) {
      elements[i].style.transform = "rotate(" + window.pageYOffset/3 + "deg)";
    }

    let bal_circle_1 = document.getElementsByClassName("bal_circle_1");
    let screenSize = window.innerHeight;
    for (var j = 0; j < bal_circle_1.length; j++) {
      let imagencolor = bal_circle_1[j];

      if (imagencolor.getBoundingClientRect().top < screenSize / 2) {
        imagencolor.classList.add("bal_circle_1_color");
      } else {
        imagencolor.classList.remove("bal_circle_1_color");
      }
    }

    let bal_circle_2 = document.getElementsByClassName("bal_circle_2");
    for (var j = 0; j < bal_circle_2.length; j++) {
      let imagencolor = bal_circle_2[j];

      if (imagencolor.getBoundingClientRect().top < screenSize / 2) {
        imagencolor.classList.add("bal_circle_2_color");
      } else {
        imagencolor.classList.remove("bal_circle_2_color");
      }
    }

    let bal_circle_3 = document.getElementsByClassName("bal_circle_3");
    for (var j = 0; j < bal_circle_3.length; j++) {
      let imagencolor = bal_circle_3[j];

      if (imagencolor.getBoundingClientRect().top < screenSize / 2) {
        imagencolor.classList.add("bal_circle_3_color");
      } else {
        imagencolor.classList.remove("bal_circle_3_color");
      }
    }

    let bal_circle_4 = document.getElementsByClassName("bal_circle_4");
    for (var j = 0; j < bal_circle_4.length; j++) {
      let imagencolor = bal_circle_4[j];

      if (imagencolor.getBoundingClientRect().top < screenSize / 2) {
        imagencolor.classList.add("bal_circle_4_color");
      } else {
        imagencolor.classList.remove("bal_circle_4_color");
      }
    }

    let bal_circle_5 = document.getElementsByClassName("bal_circle_5");
    for (var j = 0; j < bal_circle_5.length; j++) {
      let imagencolor = bal_circle_5[j];

      if (imagencolor.getBoundingClientRect().top < screenSize / 2) {
        imagencolor.classList.add("bal_circle_5_color");
      } else {
        imagencolor.classList.remove("bal_circle_5_color");
      }
    }

    let bal_circle_6 = document.getElementsByClassName("bal_circle_6");
    for (var j = 0; j < bal_circle_6.length; j++) {
      let imagencolor = bal_circle_6[j];

      if (imagencolor.getBoundingClientRect().top < screenSize / 2) {
        imagencolor.classList.add("bal_circle_6_color");
      } else {
        imagencolor.classList.remove("bal_circle_6_color");
      }
    }

    let bal_circle_7 = document.getElementsByClassName("bal_circle_7");
    for (var j = 0; j < bal_circle_7.length; j++) {
      let imagencolor = bal_circle_7[j];

      if (imagencolor.getBoundingClientRect().top < screenSize / 2) {
        imagencolor.classList.add("bal_circle_7_color");
      } else {
        imagencolor.classList.remove("bal_circle_7_color");
      }
    }

    lastScrollTop = st <= 0 ? 0 : st; // For Mobile or negative scrolling
  },
  false
);