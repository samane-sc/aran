jQuery(document).ready(function ($) {
    $(".customer-article").owlCarousel({
        items: 1,
        loop: true,
        nav: false,
        dots: true,
        slideSpeed: 1e3,
        stagePadding: 0,
        margin: 0,
        autoplay: true,
        autoplayHoverPause: true,
        navText: ["", ""],
    });
    $(".related-portfolio").owlCarousel({
        items: 3,
        loop: false,
        nav: true,
        dots: false,
        slideSpeed: 1e3,
        stagePadding: 0,
        margin: 0,
        autoplay: true,
        autoplayHoverPause: true,
        navText: ["", ""],
        responsive: {
            0: {items: 1},
            370: {items: 1},
            768: {items: 2},
            991: {items: 2},
            1000: {items: 3},
            1441: {items: 3}
        }
    });
    //logo slide show
    $(".brand").owlCarousel({
        items: 6,
        loop: true,
        nav: false,
        dots: false,
        margin: 0,
        autoplay: true,
        smartSpeed: 2500,
        slideTransition: 'linear',
        // autoplayTimeout: 1000,
        autoplaySpeed: 6000,
        autoplayHoverPause: true,
        navText: ["", ""],
        responsive: {
            0: {items: 1},
            370: {items: 2},
            576: {items: 3},
            769: {items: 3},
            1025: {items: 4},
            1441: {items: 6}
        }
    });
});

const cmName = document.querySelectorAll('#blog-content .blog_comments .comment-form-author input')[0];
const cmEmail = document.querySelectorAll('#blog-content .blog_comments .comment-form-email input')[0];
if (cmName) {
    cmName.setAttribute("placeholder", "name");
}
if (cmEmail) {
    cmEmail.setAttribute("placeholder", "email");
}

const blogSearch = document.querySelectorAll('.wp-block-search__inside-wrapper button.wp-block-search__button');
const blogSearchInput = document.querySelectorAll('.wp-block-search__inside-wrapper .wp-block-search__input');
if (blogSearch){
    for (let i=0;i<blogSearch.length;i++){
        blogSearch[i].innerHTML = "serach";
    }
}
if (blogSearchInput){
    for (let i=0;i<blogSearchInput.length;i++){
        blogSearchInput[i].setAttribute("placeholder","serach");
    }
}
