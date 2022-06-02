const { gsap } = require("gsap/dist/gsap");
const { ScrollTrigger } = require("gsap/dist/ScrollTrigger");

gsap.registerPlugin(ScrollTrigger);


//Letter W on Welcome Block
let animateWordW = gsap.timeline({
  scrollTrigger: {
    trigger: '.welcome',
    start: 'top top',
    end: 'bottom top',
    scrub: true
  },
})

animateWordW.from('.animate-word-w', { scale: 0.65, y: 50});
animateWordW.to('.animate-word-w', { scale: 1, y: 0})

//Letter P on Welcome Block
let animateWordP = gsap.timeline({
  scrollTrigger: {
    trigger: '.welcome',
    start: 'top top',
    end: 'bottom top',
    scrub: true
  },
})

animateWordP.from('.animate-word-p', { rotate: 25, x: 50 });
animateWordP.to('.animate-word-p', { rotate: 0, x: 0 })

//Border WP on Welcome Block
let animateWpCircle = gsap.timeline({
  scrollTrigger: {
    trigger: '.welcome',
    start: 'top top',
    end: 'bottom 100px',
    scrub: true
  },
})

animateWpCircle.from('.animate-wp-cirlce', { strokeDashoffset: '1000' });
animateWpCircle.to('.animate-wp-cirlce', { strokeDashoffset: '920' })

//Project items first
let animateProjectsItemsFirst = gsap.timeline({
  scrollTrigger: {
    trigger: '.project-items-first',
    start: 'top bottom',
    end: 'top 0px',
    scrub: true
  },
})

animateProjectsItemsFirst.from('.project-items-first', { y: 50 });
animateProjectsItemsFirst.to('.project-items-first', { y: 0 })

//Arrow-Down
let animateArrowDown = gsap.timeline({
  scrollTrigger: {
    trigger: '.animate-arrow-down',
    start: 'top bottom',
    end: 'top 0px',
    scrub: true
  },
})

animateArrowDown.from('.animate-arrow-down', { height: 0, y: 50 });
animateArrowDown.to('.animate-arrow-down', { height: 106, y: 0 })

//Project items second
let animateProjectsItemsSecond = gsap.timeline({
  scrollTrigger: {
    trigger: '.project-items-second',
    start: 'top bottom',
    end: 'top 0px',
    scrub: true
  },
})

animateProjectsItemsSecond.from('.project-items-second', { y: 150 });
animateProjectsItemsSecond.to('.project-items-second', { y: 0 })

//Project items third
let animateProjectsItemsThird = gsap.timeline({
  scrollTrigger: {
    trigger: '.project-items-third',
    start: 'top bottom',
    end: 'top 0px',
    scrub: true
  },
})

animateProjectsItemsThird.from('.project-items-third', { y: 50 });
animateProjectsItemsThird.to('.project-items-third', { y: 0 })

//Project items fourth
let animateProjectsItemsFourth = gsap.timeline({
  scrollTrigger: {
    trigger: '.project-items-fourth',
    start: 'top bottom',
    end: 'top 100px',
    scrub: true
  },
})

animateProjectsItemsFourth.from('.project-items-fourth', { y: 150 });
animateProjectsItemsFourth.to('.project-items-fourth', { y: 0 })

//About Quote
let animateAboutQuote = gsap.timeline({
  scrollTrigger: {
    trigger: '.animate-about-quote',
    start: '+=50 bottom',
    end: 'top 0',
    scrub: true
  },
})

animateAboutQuote.from('.animate-about-quote', { y: -55 });
animateAboutQuote.to('.animate-about-quote', { y: 0 })

//About Contact H2
let animateContactH2 = gsap.timeline({
  scrollTrigger: {
    trigger: '.animate-contact-h2',
    start: '+=50 bottom',
    end: 'top 0',
    scrub: true
  },
})

animateContactH2.from('.animate-contact-h2', { y: -65 });
animateContactH2.to('.animate-contact-h2', { y: 0 })

//About Contact BTN
let animateContactBtn = gsap.timeline({
  scrollTrigger: {
    trigger: '.animate-contact-btn',
    start: '+=50 bottom',
    end: 'top 0',
    scrub: true
  },
})

animateContactBtn.from('.animate-contact-btn', { y: 65 });
animateContactBtn.to('.animate-contact-btn', { y: 0 })

//Animate Gutenberg Photos
let animateGutenbergPhotos = gsap.timeline({
  scrollTrigger: {
    trigger: '.animation-gutenberg',
    start: '-=350 bottom',
    end: 'top top',
    scrub: true
  },
})

animateGutenbergPhotos.from('.animation-gutenberg', { y: 0 });
animateGutenbergPhotos.to('.animation-gutenberg', { y: -350 })

//Animate Y axis
let animateY = document.querySelectorAll('.animation-y');
animateY.forEach( (item) => {
  let animateItem = gsap.timeline({
    scrollTrigger: {
      trigger: item,
      start: 'top bottom',
      end: 'top 0px',
      // scrub: true
    },
  })
  animateItem.from(item, { y: 100, duration: 1 });
  animateItem.to(item, { y: 0 })
})