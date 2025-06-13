console.log("🏰");

// Animation de la page d'accueil

// Titres révélés au scroll
const blockTitle = document.querySelectorAll(".title-block-wrapper");
console.log(blockTitle);
// Animation de la page d'accueil

// Titres révélés au scroll
document.addEventListener("DOMContentLoaded", () => {
  function openTitleAnimate(element) {
    let txt = element.querySelectorAll("span"); // Sélectionner chaque span dans le titre
    txt.forEach((span,index) => {
      // console.log(span);
      setTimeout(() => {
        span.classList.add('visible');
        span.animate(
          [{ transform: "translateY(300px)" }, { transform: "translateY(0px)" }],
          {
            duration: 2000,
            easing: "ease-in-out",
            fill: "forwards",
          }
        );
      }, index * 100);
    });
  }

  // Créer l'Intersection Observer avec la fonction de rappel et les options
  const observerCallback = (entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting && !entry.target.classList.contains("visible")) {
        entry.target.classList.add("visible");
        openTitleAnimate(entry.target);
      }
    });
  };

  const observerOptions = {
    root: null, // utilise le viewport comme zone de référence
    rootMargin: "0px",
    threshold: 0.1, // déclenche lorsque 10% de l'élément est visible
  };

  const observer = new IntersectionObserver(observerCallback, observerOptions);

  // Commencer à observer chaque élément
  blockTitle.forEach((element) => {
    observer.observe(element);
  });
});

// Effet de parallax sur les images

let parallaxDiv = document.querySelectorAll(".parallax");
window.addEventListener("scroll", function () {
  let mediaQuery = window.matchMedia("(max-width: 600px)");
  if (mediaQuery.matches) {
    // Si la media query correspond (c'est-à-dire si la largeur de la fenêtre est inférieure à 600px), on désactive l'animation
    return;
  }
  parallaxDiv.forEach((element) => {
    let speed = element.getAttribute("data-speed");
    let elH = element.clientHeight / 2;
    let rectY = element.getBoundingClientRect().top - elH;
    // console.log(elH);
    // console.log(rectY);
    let posY = window.scrollY * speed * -1;
    if (speed <= 0.5) {
      posY = rectY * speed - 1;
      posY = posY / 5; // Déplacement plus lent pour les petites valeurs de speed
    } else if (speed > 0.5 && speed <= 1.5) {
      posY = rectY * speed * 1;
      posY = posY / 4; // Déplacement moyen pour les valeurs de speed entre 0.5 et 1
    } else {
      posY = rectY * speed * 1.5; // Déplacement plus rapide pour les grandes valeurs de speed
      posY = posY / 4;
    }
    // console.log(posY);
    let translation = `translateY(${posY}px)`;
    element.style.transform = translation;
  });
});

// Loading Page

  // let loader = document.querySelector(".loading-screen");
  // let progressBar = document.querySelector(".progress-bar");
  // let percent = document.querySelector(".percent");
  // let homeTemplate = document.querySelector(".home-template");


  // console.time("Execution Time");
  // let counter = 0;
  // let intervalId = setInterval(() => {
  //     counter += 10; // Augmente le compteur de 10 à chaque fois
  //     percent.textContent = counter + '%';
  //     progressBar.style.transition = '1s ease-in-out all';
  //     progressBar.style.transform = 'scaleX('+counter / 100+')';

  //     if (counter >= 100) {
  //         // Arrête l'intervalle une fois que le compteur atteint 100
  //         clearInterval(intervalId);
  //         homeTemplate.setAttribute('data-status', 'finished');

  //         setInterval(() => {
  //             loader.animate([
  //                 {opacity: '1'},
  //                 {opacity: '0'}
  //             ], {
  //                 duration: 1000,
  //                 fill: 'forwards'
  //             });

  //             setTimeout(() => {
  //                 homeTemplate.style.overflow = 'auto';
  //                 homeTemplate.style.height = 'auto';
  //                 loader.style.display = 'none';
  //             }, 1000);

  //         }, 1000);

  //         console.timeEnd("Execution Time");

  //     }
  // }, 200);

// Fullwidth forced
function fullwidth(el) {
  let parentDiv = el.parentElement;

  function resize() {
    let windowWidth = window.innerWidth;
    var containerWidth = parentDiv.offsetWidth;
    // Calculate the margins
    var marginLeft = (windowWidth - containerWidth) / 2;
    var marginRight = marginLeft;
    el.style.marginLeft = `-${marginLeft}px`;
    el.style.marginRight = `-${marginRight}px`;
  }

  // Call resize function initially
  resize();

  // Update on window resize
  window.addEventListener("resize", resize);
}
// Gallery
let gallery = document.querySelector(".gallery");
let galleryItem = document.querySelectorAll(".gallery-item");
if (gallery) {
  fullwidth(gallery);
}

function checkImageOrientation() {
  galleryItem.forEach((element) => {
    let galleryItemImg = element.querySelector("img");
    if (galleryItemImg.width > galleryItemImg.height) {
      // console.log(galleryItemImg.width + ' horizontal');
      element.classList.add("horizontal");
    } else if (galleryItemImg.width < galleryItemImg.height) {
      // console.log(galleryItemImg.height + ' vertical');
      element.classList.add("vertical");
    }
  });
}

// Appeler la fonction après un court délai pour s'assurer que les images sont chargées
setTimeout(checkImageOrientation, 1000);

//Menu toggle

var burger = document.querySelector(".burger-container"),
  navigation = document.querySelector(".main-navigation");

burger.onclick = function () {
  navigation.classList.toggle("menu-opened");
};

// Modifier formulaire en fonction du sujet de contact

const selectSubject = document.querySelector(".wpcf7-select");
let fromDate = document.querySelector(".from-date");
let toDate = document.querySelector(".to-date");

let dateRange = document.querySelector(".date-range");
// console.log(fromDate.querySelector("input"));
if(selectSubject) {
  selectSubject.addEventListener("change", function () {
    if (
      selectSubject.value == "Renseignements" ||
      selectSubject.value == "Autre"
    ) {
      fromDate.querySelector("input").setAttribute("aria-required", "false");
      toDate.querySelector("input").setAttribute("aria-required", "false");
      dateRange.style.display = "none";
      
    } else {
      fromDate.querySelector("input").setAttribute("aria-required", "true");
      toDate.querySelector("input").setAttribute("aria-required", "true");
      dateRange.style.display = "block";
    }
  });
}

// Modifier formulaire en fonction du sujet de contact

document.addEventListener("DOMContentLoaded", function() {
  var start = document.querySelector('.from-date input');
  var end = document.querySelector('.to-date input');
  if(start) {
    start.addEventListener('change', function() {
        var startDate = new Date(start.value);
        startDate.setDate(startDate.getDate() + 1);
        
        var minDate = startDate.toISOString().split('T')[0]; // Convertir la date en format YYYY-MM-DD
        end.setAttribute('min', minDate);
    });
  }
});

//Sticky menu on scroll

let mastHead = document.querySelector('#masthead')
// console.log(mastHead);
window.addEventListener('scroll', function() {
  if(window.scrollY > 100) {
    mastHead.classList.add('sticky');
  } else {
    mastHead.classList.remove('sticky');
  }
}
);