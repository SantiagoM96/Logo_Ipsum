
document.addEventListener("DOMContentLoaded", function () {
  // VARIABLES

  // Menu responsive
  const burgerMenuBtn = document.querySelector("#burger-menu-toggler");
  //Slider
  const slider = document.querySelector("#slider");
  let sliderSection = document.querySelectorAll(".slider_section");
  let sliderSectionLast = sliderSection[sliderSection.length - 1];
  const btnLeft = document.querySelector("#btn_left");
  const btnRight = document.querySelector("#btn_right");
  // Lista de secciones
  const menuItems = document.querySelectorAll('.menu_item');

  //FUNCIONES


  function navResponsive() {

    burgerMenuBtn.addEventListener('click', function () {
      document.body.classList.toggle('mobile-menu-active');
    });

  }

  menuItems.forEach(function (ubicacion) {
    ubicacion.addEventListener('click', function () {
      document.body.classList.remove('mobile-menu-active');
    })
  });

  for (let i = 0; i < menuItems.length; i++) {
    menuItems[i].addEventListener('click', function () {
      let currentItem = document.querySelector('.active');
      currentItem.classList.toggle('active');
      this.classList.toggle('active');
    });
  }

  navResponsive();

  // BARRA DE NAVEGACIÓN

  window.addEventListener('scroll', function () {
    let scrolledDistance = window.scrollY;

    if (scrolledDistance > 50) {
      document.body.classList.add('scrolled');
    } else {
      document.body.classList.remove('scrolled');
    }
  });

  //BOTON IR ARRIBA
  document.getElementById("buttonUp").addEventListener("click", scrollUp)
  function scrollUp() {
    let currentScroll = document.body.scrollTop;
    if (currentScroll > 0) {
      window.scrollTo(0, 0)
    }
  }

  buttonUp = document.getElementById("buttonUp");
  window.onscroll = function () {
    let scroll = document.body.scrollTop;

    if (scroll > 100) {
      buttonUp.style.transform = "scale(1)";
    } else if (scroll < 100) {
      buttonUp.style.transform = "scale(0)";
    }

  }
  // SLIDER PAGINA DE INICIO

  slider.insertAdjacentElement('afterbegin', sliderSectionLast);

  function Next() {
    let sliderSectionFirst = document.querySelectorAll(".slider_section")[0];
    slider.style.marginLeft = "-200%";
    slider.style.transition = "all 500ms";
    setTimeout(function () {
      slider.style.transition = "none";
      slider.insertAdjacentElement('beforeend', sliderSectionFirst);
      slider.style.marginLeft = "-100%";
    }, 500);
  }
  btnRight.addEventListener('click', function () {
    Next();
  });

  function Prev() {
    let sliderSection = document.querySelectorAll(".slider_section");
    let sliderSectionLast = sliderSection[sliderSection.length - 1];
    slider.style.marginLeft = "0%";
    slider.style.transition = "all 500ms";
    setTimeout(function () {
      slider.style.transition = "none";
      slider.insertAdjacentElement('afterbegin', sliderSectionLast);
      slider.style.marginLeft = "-100%";
    }, 500);
  }
  btnLeft.addEventListener('click', function () {
    Prev();
  });
})


