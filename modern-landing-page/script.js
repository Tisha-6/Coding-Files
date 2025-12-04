// GSAP Animations
gsap.from(".navbar", {
  y: -50,
  duration: 1,
  opacity: 0
});

gsap.from(".hero-text", {
  x: -100,
  duration: 1.3,
  opacity: 0
});

gsap.from(".hero-img", {
  x: 100,
  duration: 1.3,
  opacity: 0
});

gsap.from(".card", {
  scrollTrigger: ".features",
  duration: 1,
  opacity: 0,
  y: 50,
  stagger: 0.3
});
