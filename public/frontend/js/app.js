// tillarni almashtirish oynasini ochish uchunn scriptlar

const langBtn = document.querySelector(".lang-active");

langBtn.addEventListener("click", () => {
  langBtn.nextElementSibling.clientHeight
    ? (langBtn.nextElementSibling.style.height = null)
    : (langBtn.nextElementSibling.style.height =
      langBtn.nextElementSibling.scrollHeight + "px");
});



// drop down button

const btnToggle = document.querySelector("#navbarToggle");
const dropDownMenu = document.querySelector(".navbar-nav");

btnToggle.addEventListener("click", () => {
  if (!dropDownMenu.style.height) {
    dropDownMenu.style.height = "100vh";
  } else {
    dropDownMenu.style.height = null;
  }
});


document.body.addEventListener(
  "click",
  () => {
    langBtn.nextElementSibling.style.height = null;
  },
  true
);

// drop down menu uchun scriptlar
const coll = document.querySelectorAll(".nav-link");

coll.forEach((element) => {
  element.onclick = () => {
    if (window.innerWidth <= 992) {
      const item = element.nextElementSibling;
      if (item) {
        coll.forEach((e) => {
          const differentItems = e.nextElementSibling;
          if (e != element && differentItems !== null) {
            differentItems.style.height = null;
            e.previousElementSibling.style.transform = "rotate(0)";
          }
        });
      }

      if (item) {
        if (!item.style.height) {
          item.style.height = item.scrollHeight + "px";
          element.previousElementSibling.style.transform = "rotate(180deg)";
        } else {
          item.style.height = null;
          element.previousElementSibling.style.transform = "rotate(0)";
        }
      }
    }
  };
});

/* slider slick js */

$(".slider").slick({
  autoplay: true,
  infinite: true,
  autoplaySpeed: 5000,
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  dots: true,
  arrows: true,
});


window.addEventListener('resize', onResize);
onResize()
function onResize() {

  $("#news .row").slick({
    autoplay: true,
    infinite: true,
    autoplaySpeed: 5000,
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    dots: false,
    arrows: false,
    responsive: [{
      breakpoint: 50000,
      settings: {
        slidesToShow: 3
      }
    }, {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
      }
    }, {
      breakpoint: 768,
      settings: "unslick" // destroys slick
    }]
  });



  $("#elon .row").slick({
    autoplay: true,
    infinite: true,
    autoplaySpeed: 5000,
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    dots: false,
    arrows: false,
    responsive: [{
      breakpoint: 50000,
      settings: {
        slidesToShow: 3
      }
    }, {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
      }
    }, {
      breakpoint: 768,
      settings: "unslick" // destroys slick
    }]
  });
}


/* breadcampni sozlash */

const breadcrumbItem = document.querySelectorAll('.breadcrumb-item');
breadcrumbItem.forEach((e) => {
  if (e.clientWidth > 300) {
    e.setAttribute("id", "breadcrumb_li");
  }
})

// breadcrumbItem.

// const card = document.querySelectorAll('.card');
// let longHeight = 0;
// card.forEach((item) => {
//   item.cliendHeight > longHeight ? longHeight = item.scrollHeight :
//     console.log(item.clientHeight);
// });

// card.forEach((item) => {
//   item.style.height = longHeight + "px";

//   console.log(longHeight)
// })




