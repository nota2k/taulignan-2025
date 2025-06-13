console.log("🏰");

// Animation de la page d'accueil

// Titres révélés au scroll
const blockTitle = document.querySelectorAll(".title-block-wrapper");
// console.log(blockTitle);
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
  else{
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
  }
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
let minigalleryItem = document.querySelectorAll(".minigallery-item");


if (gallery) {
  fullwidth(gallery);
}

function checkImageOrientation(items) {
  // Vérifier que items existe et n'est pas vide
  if (!items || items.length === 0) {
    // console.warn("Aucun élément trouvé pour checkImageOrientation");
    return;
  }

  // Convertir NodeList en Array si nécessaire
  const itemsArray = Array.from(items);
  
  itemsArray.forEach((element, index) => {
    let itemImg = element.querySelector("img");
    
    if (!itemImg) {
      // console.warn(`Pas d'image dans l'élément ${index}`);
      return;
    }
    
    function processImage() {
      const width = itemImg.naturalWidth || itemImg.width;
      const height = itemImg.naturalHeight || itemImg.height;
      
      // console.log(`Image ${index}: ${width}x${height}`);
      
      if (width > height) {
        element.classList.add("horizontal");
      } else if (width < height) {
        element.classList.add("vertical");
      } else {
        element.classList.add("square");
      }
    }
    
    if (itemImg.complete && itemImg.naturalWidth > 0) {
      processImage();
    } else {
      itemImg.addEventListener('load', processImage);
      itemImg.addEventListener('error', () => {
        // console.error('Erreur de chargement:', itemImg.src);
      });
    }
  });
}

// Vérifier avant d'appeler les fonctions
if (galleryItem.length > 0) {
  checkImageOrientation(galleryItem);
}

if (minigalleryItem.length > 0) {
  checkImageOrientation(minigalleryItem);
}


// let minigallery = document.querySelectorAll(".grid-gallery item");
// checkImageOrientation(minigallery)

// Appeler la fonction après un court délai pour s'assurer que les images sont chargées
setTimeout(checkImageOrientation, 1000);


//Animation chargement des images des galeries fullscreen

function isInViewport(element, threshold = 0.2) {
    const rect = element.getBoundingClientRect();
    const viewportHeight = window.innerHeight || document.documentElement.clientHeight;
    
    return (
        rect.top <= viewportHeight * (1 - threshold) && // Corrigé ici
        rect.bottom >= viewportHeight * threshold &&
        rect.left >= 0 &&
        rect.right <= window.innerWidth
    );
}

let animationTriggered = false; // Éviter les animations multiples

function checkAndAnimate() {
    if (animationTriggered) return;
    
    let easingElement = document.querySelector(".easing");
    let images = document.querySelectorAll(".gallery-item");
    
    if (!easingElement || images.length === 0) return;
    
    if (isInViewport(easingElement)) {
        animationTriggered = true;
        let delay = 0;
        
        images.forEach((image, index) => {
            setTimeout(() => {
                image.style.transition = "all 1s cubic-bezier(0.25, 0.46, 0.45, 0.94)";
                image.style.transform = "translateY(0)";
                image.style.opacity = "1";
            }, delay);
            delay += 250; // Réduit à 150ms pour plus de fluidité
        });
        
        console.log(`${images.length} animations déclenchées !`);
    }
}

// Optimisation avec throttling
let ticking = false;
document.addEventListener("scroll", () => {
    if (!ticking) {
        requestAnimationFrame(() => {
            checkAndAnimate();
            ticking = false;
        });
        ticking = true;
    }
});

// Vérification initiale au chargement
document.addEventListener('DOMContentLoaded', checkAndAnimate);
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

