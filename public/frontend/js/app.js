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
    let video_src = playBtn.dataset.src;
    isClose = false;
    ifreme.src = video_src;
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

// Video va rasm galleriya almashinishi;

const videoShowBtn = document.getElementById("show-video");
const galleryShowBtn = document.getElementById("show-gallery");
const gallery = document.getElementById("gallery");
const video = document.getElementById("video");
// console.log(videoShowBtn, gallery, galleryShowBtn, video);
videoShowBtn.onclick = () => {
    if (gallery.classList.contains("show-item"))
        gallery.classList.remove("show-item");

    video.classList.add("show-item");
    gallery.classList.add("hidden-item");

    // if (galleryShowBtn.classList.contains("active-btn"))
    // galleryShowBtn.classList.remove("active-btn");

    videoShowBtn.classList.toggle("active-btn");
    galleryShowBtn.classList.toggle("active-btn");
};

galleryShowBtn.onclick = () => {
    if (video.classList.contains("show-item"))
        video.classList.remove("show-item");

    gallery.classList.add("show-item");
    video.classList.add("hidden-item");

    videoShowBtn.classList.toggle("active-btn");
    galleryShowBtn.classList.toggle("active-btn");
};

window.onscroll = function () {
    scrollFunction();
};

// const navbar = ;

const myCollapsible = document.getElementById("navbarSupportedContent1");
myCollapsible.addEventListener("show.bs.collapse", (event) => {
    document.querySelector("#top-navbar").classList.add("bg-white");
});
myCollapsible.addEventListener("hidden.bs.collapse", (event) => {
    document.querySelector("#top-navbar").classList.remove("bg-white");
});

function scrollFunction() {
    if (
        document.body.scrollTop > 20 ||
        document.documentElement.scrollTop > 20
    ) {
        document.getElementById("navbar").style.top = "0";
        document.getElementById("top-navbar").style.display = "none";
    } else {
        document.getElementById("navbar").style.top = "-150px";
        document.getElementById("top-navbar").style.display = "block";
    }
}
