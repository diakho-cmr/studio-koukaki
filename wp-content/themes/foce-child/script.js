const banner = document.querySelector('.banner');
const titlesH2 = document.querySelectorAll('h2');
const logo = document.querySelector('.parallax-img');
const logoContainer = document.querySelector('.parallax-logo');
const placeSection = document.querySelector('#place');
const clouds = document.querySelectorAll('.cloud');
const siteSections = document.querySelectorAll('.js-slide-up');
const footerUl = document.querySelector('.footer-js-slide-up');

function isInViewport(el) {
    //un objet avec des infos sur la taille et la position relative par rapport à la zone d'affichage
    let rect = el.getBoundingClientRect();
    //si l'élement est dans le viewport, la function retourne true sinon false
    return(
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= window.innerHeight &&
        rect.right <= window.innerWidth
    );
}

function areTopBottomInViewport(el) {
    let rect = el.getBoundingClientRect();
    return(
        rect.top >= 0 && 
        rect.bottom <= window.innerHeight
    );
}

//si le titre contient plusieurs mots le réorganiser en span
function putSpanInTitle() {

    titlesH2.forEach(element => {

        const title = element.innerHTML;
        words = title.split(' ');
        let arrayWords = [];
        let i = 0;
    
        if(words.length > 1) {
    
            const firstWord = words[0];
            words.forEach(element => {
                i++;
                arrayWords.push(`<span>${element}</span>`);
            });
    
            let finalTitle = '';
            arrayWords.forEach(element => {
                finalTitle = finalTitle.concat(' ', element);
            });
            element.innerHTML = finalTitle;

            spanTags = element.querySelectorAll('span');
            spanTags.forEach(element => {
                element.classList.add('invisible');
            });
    
        }
    
    });

}
putSpanInTitle();
//fin si le titre contient plusieurs mots le réorganiser en span

//ajouter la class slide-up-title
function putClassSlideUpTitle(element) {

    if(element.getElementsByTagName('span').length !== 0) {
        const title = element;
        const spanTags = element.querySelectorAll('span');
        i = 0;
        spanTags.forEach(element => {
            if(!element.classList.contains('slide-up-title')) {
                i++
                setTimeout(() => {
                    title.classList.add('visible');
                    element.classList.add('slide-up-title');
                }, i * 500);
            }
        });
    } 
    
    else {
        if(!element.classList.contains('slide-up-title')) {
            element.classList.add('slide-up-title');
        }
    }

}
//fin ajouter la class slide-up-title

//effet slide up H2 au chargement de la page si le titre est visible
window.onload = (event) => {

    titlesH2.forEach(element => {
        let elementRect = element.getBoundingClientRect();
        if(elementRect.top <= window.innerHeight) {
            putClassSlideUpTitle(element);
        }
    });

    //effet apparition logo titre
    let bannerRect = banner.getBoundingClientRect();
    if(bannerRect.top <= window.innerHeight) {
        banner.classList.add('anim-banner');
        logo.classList.add('anim-logo');
        setTimeout(() => {
            logo.classList.remove('anim-logo');
            logo.classList.add('logo-float');
        }, 2000);
    }
    //fin effet apparition logo titre

};
//fin effet slide up H2 au chargement de la page si le titre est visible

// évènements au scroll (parallax et slide up title)
window.addEventListener('scroll', function() {

    //effet parallax banner
    let bannerRec = banner.getBoundingClientRect();
    let logoRec = logo.getBoundingClientRect();
    const distance = -bannerRec.top / 2;

    if(logoRec.top > 0) {
        logoContainer.style.transform = `translateY(${distance}px)`;
    }
    //fin effet parallax banner

    //effet slide up H2 au scroll
    titlesH2.forEach(element => {
        if(isInViewport(element)) {
            putClassSlideUpTitle(element)
        }
    });
    // fin effet slide up H2 au scroll

    // déplacement des nuages au scroll
    if(isInViewport(placeSection)) {
        clouds.forEach(element => {
            if(!element.classList.contains('slide-left-cloud')) {
                element.classList.add('slide-left-cloud');
            }
        });
    }
    //fin déplacement des nuages au scroll

    //animations des sections du site
    siteSections.forEach(element => {
        if(isInViewport(element) || areTopBottomInViewport(element)) {
            if(!element.classList.contains('anim-section')) {
            element.classList.add('anim-section');
            }
        }
    });
    if(areTopBottomInViewport(footerUl)) {
        if(!footerUl.classList.contains('anim-footer')) {
        footerUl.classList.add('anim-footer');
        }
    }
    // fin animations des sections du site

});
// fin évènements au scroll (parallax et slide up title)

//MENU BURGER
const icone = document.querySelector('.navbar-full i');
const modal = document.querySelector('.modal');
const links = document.querySelectorAll('.navbar-full-list a');
const navbar = document.querySelector('.navbar-full-list');

icone.addEventListener('click', function () {
    modal.classList.toggle('change-modal');
    icone.classList.toggle('fa-times');
    navbar.classList.add('slide-up-nav');
});

links.forEach(element => {
    element.addEventListener('click', function() {
        modal.classList.toggle('change-modal');
        icone.classList.toggle('fa-times');
    });
});
//fin MENU BURGER

//SWIPER
let mySwiper = document.getElementById('myswiper');

let swiper = new Swiper('.mySwiper', {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    spaceBetween: 60,
    coverflowEffect: {
      rotate: 30,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: false,
    },
    pagination: {
      el: ".swiper-pagination",
    }
});
//FIN SWIPER