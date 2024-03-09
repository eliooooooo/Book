import { info } from 'autoprefixer';
import './../css/style.css';
import './slider.js';

import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

import Swiper from 'swiper';
import 'swiper/css';
import { Navigation, Pagination } from 'swiper/modules';


gsap.registerPlugin(ScrollTrigger);

document.addEventListener('DOMContentLoaded', () => {
  // animation bg
  document.addEventListener('mousemove', function(event) {
    // Obtenez tous les cercles
    let circles = document.querySelectorAll('.circle');
    let closestCircle = null;
    let closestDistance = Infinity;

    // Trouvez le cercle le plus proche du curseur
    circles.forEach(function(circle) {
      // Calculez la distance entre le cercle et le curseur
      var dx = event.clientX - (circle.offsetLeft + circle.offsetWidth / 2);
      var dy = event.clientY - (circle.offsetTop + circle.offsetHeight / 2);
      var distance = Math.sqrt(dx * dx + dy * dy);

      // Si cette distance est la plus petite, mettez à jour le cercle le plus proche
      if (distance < closestDistance) {
        closestDistance = distance;
        closestCircle = circle;
      }
    });

    // Réduisez la taille de tous les cercles
    gsap.to('.circle', {
      duration: 0.3,
      scale: 1,
      ease: "power1.inOut",
    });

    // Augmentez la taille du cercle le plus proche
    if (closestCircle) {
      gsap.to(closestCircle, {
        duration: 0.3,
        scale: 1.8,
        ease: "ease-in-out",
      });
    }
  });

  // animation scale in bg
  gsap.from(".circle", {
    duration: 1,
    scale: 0,
    ease: "ease",
  })

  // animation slide in global
  gsap.from(".global", {
    duration: 1,
    y: -100,
    opacity: 0,
    ease: "elastic",
    stagger: 0.2,
  })

  // animation rotate i letter
  gsap.to(".rotateLetter", {
    duration: 2,
    delay: 1,
    repeatDelay: 4,
    rotationY: 360,
    ease: "power4.Out",
    repeat: -1,
  })

  let shake = gsap.timeline({repeat: -1, repeatDelay: 5});

  shake.to("#projets", {
    duration: 0.3,
    x: "+=10",
    ease: "ease",
  })
  .to("#projets", {
    duration: 0.3,
    x: "0",
    ease: "elastic",
  })

  // theme switcher
  let html = document.querySelector("html");
  let sun = document.querySelector("#sun");
  let moon = document.querySelector("#moon");
  let themeSwitcher = document.querySelector(".themeSwitcher");

  themeSwitcher.style.display = "block";
  gsap.to(".themeSwitcher", {opacity:0});
  gsap.to(".themeSwitcher", {
    duration: 1,
    opacity: 1,
    ease: "ease-in-out",
  })

  if (html.classList.contains("dark")) {
    moon.style.display = "none";
  }

  themeSwitcher.addEventListener('click', () => {
    if (html.classList.contains("dark")) {
      html.classList.remove("dark");
      sun.style.display = "none";
      moon.style.display = "block";
    } else {
      html.classList.add("dark");
      moon.style.display = "none";
      sun.style.display = "block";
    }
  })

  // Swiper projets
  Swiper.use([Navigation, Pagination]);
  const swiper = new Swiper(".swiperProjet", {
      loop: false,
      slidesPerView: 'auto',
      centeredSlides: false,
      simulateTouch: true, 
      spaceBetween: 40,
      navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
      },
      pagination: {
          el: '.swiper-pagination',
          type: 'progressbar',
      },
  });

  // nav active state
  let navLinks = document.querySelectorAll(".nav li");
  navLinks.forEach(element => {
    element.addEventListener('click', function(){
      element.classList.add("active");
      navLinks.forEach(link => {
        if (link !== element) {
          link.classList.remove("active");
        }
      })
    });
  });

  // nav des différents pages
  let infos = document.querySelector("#infos");
  let projets = document.querySelector("#projets");
  let contact = document.querySelector("#contact");

  // Différents blocs
  let infosBlock = document.querySelector(".infosContainer");
  let projetsBlock = document.querySelector(".projetsContainer");
  let contactBlock = document.querySelector(".contactContainer");

  gsap.to( projetsBlock, { opacity: 0 });
  gsap.to( contactBlock, { opacity: 0 });

  infos.addEventListener('click', function() {
    let tl = gsap.timeline();
      gsap.to( ".projetsContainer", {
        opacity: 0, // Animer l'opacité de 1 à 0
        duration: 0.3,
        ease: "ease-in-out",
      });
      gsap.to( ".contactContainer", {
        opacity: 0, // Animer l'opacité de 1 à 0
        duration: 0.3,
        ease: "ease-in-out",
      });
      tl.to( ".infosContainer", {
        opacity: 1, // Animer l'opacité de 0 à 1
        duration: 0.3,
        ease: "ease-in-out",
      });
  });

  projets.addEventListener('click', function() {
    let tl = gsap.timeline();
      tl.to( ".infosContainer", {
        opacity: 0, // Animer l'opacité de 1 à 0
        duration: 0.3,
        ease: "ease-in-out",
      });
      tl.to( ".contactContainer", {
        opacity: 0, // Animer l'opacité de 1 à 0
        duration: 0.3,
        ease: "ease-in-out",
      });
      projetsBlock.style.display = "block";
      tl.to( ".projetsContainer", {
        opacity: 1, // Animer l'opacité de 0 à 1
        duration: 0.3,
        ease: "ease-in-out",
      });
  });

  contact.addEventListener('click', function() {
    let tl = gsap.timeline();
      tl.to( ".infosContainer", {
        opacity: 0, // Animer l'opacité de 1 à 0
        duration: 0.3,
        ease: "ease-in-out",
      });
      tl.to( ".projetsContainer", {
        opacity: 0, // Animer l'opacité de 1 à 0
        duration: 0.3,
        ease: "ease-in-out",
      });
      contactBlock.style.display = "block";
      tl.to( ".contactContainer", {
        opacity: 1, // Animer l'opacité de 0 à 1
        duration: 0.3,
        ease: "ease-in-out",
      });
  });
});