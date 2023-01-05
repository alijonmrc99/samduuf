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
// .on("beforeChange", function (event, slick, currentSlide, nextSlide) {
//     $(".slider .slick-slide").eq(nextSlide).addClass("animate-active");
// })
// .on("afterChange", function (event, slick, currentSlide, nextSlide) {
//     //     remove html class
//     $(".slider div").removeClass("animate-active");
//     $(".slider .slick-slide")
//         .eq(currentSlide - 1)
//         .removeClass("animate-active");
// });

window.addEventListener("resize", onResize);
onResize();
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
        responsive: [
            {
                breakpoint: 50000,
                settings: {
                    slidesToShow: 3,
                },
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 768,
                settings: "unslick", // destroys slick
            },
        ],
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
        responsive: [
            {
                breakpoint: 50000,
                settings: {
                    slidesToShow: 3,
                },
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 768,
                settings: "unslick", // destroys slick
            },
        ],
    });
    $(".useful").slick({
        autoplay: true,
        infinite: true,
        autoplaySpeed: 5000,
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
        responsive: [
            {
                breakpoint: 50000,
                settings: {
                    slidesToShow: 4,
                },
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                },
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                }, // destroys slick
            },
        ],
    });
}

const playBtn = document.querySelector(".video");
const ifremeBox = document.querySelector(".ifreme-box");
const ifreme = document.querySelector(".ifreme-box iframe");
const closeBtn = document.querySelector(".close-btn");
let isClose = false;

playBtn.onclick = () => {
    isClose = false;
    ifreme.src = "https://www.youtube.com/embed/Yo8fLZVwmlc";
    ifremeBox.style.visibility = "visible";
    ifremeBox.style.transform = "scale(1)";
    ifremeBox.style.borderRadius = "0";
};

closeBtn.onclick = () => {
    isClose = true;
    ifreme.src = "";
    ifremeBox.style.transform = "scale(0)";
    ifremeBox.style.borderRadius = "50%";
};

ifremeBox.ontransitionend = () => {
    if (isClose) {
        ifremeBox.style.visibility = "hidden";
        ifremeBox.style.visibility = "hidden";
        // console.log($(this.contentWindow.postMessage));
    }
};
