

gsap.registerPlugin(ScrollTrigger);
gsap.config({ nullTargetWarn: false, trialWarn: false, });
// gsap.timeline()

var tl = gsap.timeline({ defaults: {duration: 0.8, ease:"back"  } } );
tl.from('.tip', { opacity:0, x: -300})
    .from('.visit', { opacity:0, x: -300})
    .from('.tagline', { opacity:0, y: 10})
    .from('.tip-button', { opacity:0, x: -20})
    .from(".section-title", { opacity: 0, x:-50, stagger: .2,})
    .from(".img-left", { opacity: 0, x:-50})
    .from(".img-right", { opacity: 0, x:50})
    .from(".up_coming_events .title", { opacity: 0, x:-50})
    .fromTo(".past_events img", {
        y: 100,
        opacity: 0,
        // scale: .1
      }, {
        y: 0,
        opacity: 1,
        // scale: 1,
        stagger: .2,
        ease: "back"
      });
var tl3 = gsap.timeline({ defaults: {duration: 0.8, ease:"back"  } } );
tl3.fromTo(".line_up .wrap", {
        y: 100,
        opacity: 0,
      }, {
        y: 0,
        opacity: 1,
        stagger: .5,
    });


var tl2 = gsap.timeline({ defaults: {duration: 1,  ease:"back"}} );
tl2.from(".section-heading", { opacity: 0, x: -50})
    .from(".section-sub-heading", { opacity: 0, x: -50})
