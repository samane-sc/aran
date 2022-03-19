//go up
const scrollToTopButton = document.querySelector(".go-up");
//scroll
window.addEventListener('scroll', () => {
    scrollFunc();
})
const scrollFunc = () => {
    let y = window.scrollY;

    if (scrollToTopButton) {
        if (y > 0) {
            scrollToTopButton.style.visibility = 'visible';
            scrollToTopButton.style.opacity = '1';
        } else {
            scrollToTopButton.style.visibility = 'hidden';
            scrollToTopButton.style.opacity = '0';
        }
    }
}

const darkBackground = document.querySelector('.dark-background');
const menuSmall = document.querySelector('.nav-menu__items-sm i');
const menuSmallContent = document.querySelector('.nav-menu__items-sm__content');
if (menuSmall) {
    menuSmall.addEventListener('click', () => {
        menuSmallContent.classList.toggle('active');
        darkBackground.classList.toggle('active');
    });
    darkBackground.addEventListener('click', () => {
        menuSmallContent.classList.remove('active');
        darkBackground.classList.remove('active');
    })

}

const img = document.querySelectorAll('#services-detailed figure img');
if (img){
    for (let i=0;i<img.length;i++){
        document.querySelectorAll('#services-detailed figure img')[i].parentElement.classList.add('img-style');
    }
}

const video = document.querySelectorAll('#services-detailed figure video');
if (video){
    for (let i=0;i<video.length;i++){
        document.querySelectorAll('#services-detailed figure video')[i].parentElement.classList.add('video-style');
        const videoIcon = document.createElement('div');
        document.querySelectorAll('#services-detailed figure video')[i].parentElement.appendChild(videoIcon);
    }
}

const imgAbout = document.querySelectorAll('#about figure img');
if (imgAbout){
    for (let i=0;i<imgAbout.length;i++){
        document.querySelectorAll('#about figure img')[i].parentElement.classList.add('img-style');
    }
}

const videoAbout = document.querySelectorAll('#about figure video');
if (videoAbout){
    for (let i=0;i<videoAbout.length;i++){
        document.querySelectorAll('#about figure video')[i].parentElement.classList.add('video-style');
        const videoIcon = document.createElement('div');
        document.querySelectorAll('#about figure video')[i].parentElement.appendChild(videoIcon);
    }
}

const iframeVideo = document.querySelectorAll('.iframe-link');
const iframeLink = document.querySelectorAll('.iframe');
const pageIframeLink = document.querySelector('#iframe');
if (iframeVideo) {
    for (let i=0;i<iframeLink.length;i++){
        if (iframeVideo[i]){
            iframeVideo[i].addEventListener('click', () => {
                iframeLink[i].classList.add('active');
                darkBackground.classList.add('active');
                iframeLink[i].setAttribute("src", iframeLink[i].getAttribute("data-src"));
                darkBackground.addEventListener('click', () => {
                    iframeLink[i].classList.remove('active');
                    darkBackground.classList.remove('active');
                    iframeLink[i].setAttribute("src", "about:blank");
                })
            })
        }
    }
}