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
      keyboard: {
          enabled: true,
          onlyInViewport: false,
      },
  });

  
});