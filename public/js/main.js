// show footer on mobile as Accordion
const acc = document.getElementsByClassName("accordion");
let i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
        this.classList.toggle("active");
        const panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}

// show navigation search input when search banner is not visible and not on mobile and switch navigation to mobile view

const searchAppear = document.querySelector('.header-search-wrapper');

const navigationToMobile = document.querySelector('.nav-wrapper');

const mobileView = function () {

    let searchHeight = document.querySelector('.search-bubble').getBoundingClientRect().top;

    if ((searchHeight < 0) && (window.innerWidth >= 768)) {
        searchAppear.classList.add('active');
    }
    else {
        searchAppear.classList.remove('active');
    }

    if (window.innerWidth <= 768) {
        navigationToMobile.classList.remove('grid');
    }
    else {
        navigationToMobile.classList.add('grid');
    }
};

window.addEventListener('scroll', mobileView)
window.addEventListener('resize', mobileView);
document.addEventListener("DOMContentLoaded", mobileView);

// toggle mobile side navigation triggered by button "burger icon", close by "x" button

const mobileNavOpen = document.querySelector('.burger');
const mobileMenu = document.querySelector('.aside-nav-wrapper');
const mobileNavClose = document.querySelector('.aside-close');
const siteOverlay = document.querySelector('.overlay');

const toggleMobileNav = function () {
    mobileMenu.classList.toggle('active');
    siteOverlay.classList.toggle('active');
    document.body.classList.toggle('no-scroll');
};

mobileNavOpen.addEventListener('click', toggleMobileNav);
mobileNavClose.addEventListener('click', toggleMobileNav);