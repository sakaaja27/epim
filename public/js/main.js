(function () {
    "use strict";

    /**
     * Easy select element
     */
    const select = (el, all = false) => {
        el = el.trim();
        if (all) {
            return [...document.querySelectorAll(el)];
        } else {
            return document.querySelector(el);
        }
    };

    /**
     * Easy event listener function
     */
    const on = (type, el, listener, all = false) => {
        let selectEl = select(el, all);
        if (selectEl) {
            if (all) {
                selectEl.forEach((e) => e.addEventListener(type, listener));
            } else {
                selectEl.addEventListener(type, listener);
            }
        }
    };

    /**
     * Easy on scroll event listener
     */
    const onscroll = (el, listener) => {
        el.addEventListener("scroll", listener);
    };

    /**
     * Navbar links active state on scroll
     */
    let navbarlinks = select("#navbarNav .scrollto", true);
    const navbarlinksActive = () => {
        let position = window.scrollY + 200;
        navbarlinks.forEach((navbarlink) => {
            if (!navbarlink.hash) return;
            let section = select(navbarlink.hash);
            if (!section) return;
            if (
                position >= section.offsetTop &&
                position <= section.offsetTop + section.offsetHeight
            ) {
                navbarlink.classList.add("active");
            } else {
                navbarlink.classList.remove("active");
            }
        });
    };
    window.addEventListener("load", navbarlinksActive);
    onscroll(document, navbarlinksActive);

    /**
     * scroll offset magic
     */
    const navigationHeight = select(".navbar").offsetHeight;
    document.documentElement.style.setProperty(
        "--scroll-padding",
        navigationHeight - 5 + "px"
    );

    /**
     * Back to top button
     */
    let backtotop = select(".back-to-top");
    if (backtotop) {
        const toggleBacktotop = () => {
            if (window.scrollY > 100) {
                backtotop.classList.add("active");
            } else {
                backtotop.classList.remove("active");
            }
        };
        window.addEventListener("load", toggleBacktotop);
        onscroll(document, toggleBacktotop);
    }

    /**
     * Preloader
     */
    let preloader = select("#preloader");
    if (preloader) {
        window.addEventListener("load", () => {
            preloader.remove();
        });
    }

    /**
     * Lightbox
     */
    const galleryLightbox = GLightbox({
        selector: ".gallery-lightbox",
    });

    /**
     * Animation on scroll
     */
    window.addEventListener("load", () => {
        AOS.init({
            duration: 1000,
            easing: "ease-in-out",
            mirror: false,
        });
    });

    /**
     * Pendaftaran Swiper
     */
    new Swiper(".infoDaftar-swiper", {
        loop: true,
        effect: "fade",
        fadeEffect: {
            crossFade: true,
        },
        autoplay: {
            delay: 5000,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });

    /**
     * Gallery Swiper
     */
    new Swiper(".gallery-swiper", {
        loop: true,
        slidesPerView: 2,
        spaceBetween: 40,
        centeredSlides: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        autoplay: {
            delay: 3000,
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 40,
            },
            641: {
                slidesPerView: 2,
                spaceBetween: 0,
            },
            1366: {
                slidesPerView: 2,
                spaceBetween: 40,
            },
        },
    });

    /**
     * Expo Swiper
     */
    // new Swiper(".expo-swiper", {
    //     loop: true,
    //     slidesPerView: 3,
    //     spaceBetween: 90,
    //     centeredSlides: true,
    //     autoplay: {
    //         delay: 2000,
    //     },
    // });
})();
