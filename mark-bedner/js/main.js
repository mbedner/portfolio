gsap.registerPlugin(ScrollTrigger);


var viewportWidth = window.innerWidth || document.documentElement.clientWidth;

// get viewport height
const getVh = () => {
    const vh = Math.max(document.documentElement.clientHeight || 0, window.innerHeight || 0);
    return vh;
}
 
// get viewport width
const getVw = () => {
    const vw = Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0);
    return vw;
}

function pinProcess() {
    ScrollTrigger.create({
        trigger: '#process',
        start: 'top top',
        end: 'center top',
        pin: "#process .content-grid-half.copy-content",
        // pinSpacing: false,
        markers: false,
    })

}

function initPinNav() {
    ScrollTrigger.create({
        trigger: '.skills-menu',
        start: 'top top',
        endTrigger: '#stage3',
        end: 'bottom 200',
        pin: true,
        pinSpacing: false,
        markers: false,
    })

    gsap.utils.toArray('.stage').forEach((stage, index) => {

        const navLinks = gsap.utils.toArray('.skills-menu li');

        ScrollTrigger.create({
            trigger: stage,
            start: '200 center',
            end: () => `+=${stage.clientHeight+getVh()/20}`,
            // end: 'bottom center',
            toggleClass: {
                targets: navLinks[index],
                className: 'is-active'
            }
        });
    });
}

function homeHeroFade() {
    let tl = gsap.timeline({
        defaults: {
            duration: 1,
            ease: 'power2.inOut',
        }
    });

    tl.from('video', {css:{scale:1.5}})
      .from('.hero--home .gsap-fade-in', {
          opacity: 0,
          y: 50,
          stagger:.125,
          ease: 'back'
      }, "-=0.85")
}

function HeroDefaultFade() {
    let tl = gsap.timeline({
        defaults: {
            duration: 1,
            ease: 'power2.inOut',
        }
    });

    tl.from('.hero--default img', {css:{scale:1.5}})
      .from('.hero--default .gsap-fade-in', {
          opacity: 0,
          y: 50,
          stagger:.125,
          ease: 'back'
      }, "-=0.85")
}

// Loading Screen

function initLoader(){
  
    const select    = (e) => document.querySelector(e);
    const selectAll = (e) => document.querySelectorAll(e);
    
    const tlLoaderIn = gsap.timeline({
      defaults: {
          duration: .75,
          ease: 'expo.inOut'
      },
      onComplete: () => select('body').classList.remove('is-loading'),
      delay: .5,
    });
  
    
    const loaderStripes = selectAll('.stripe');
    const loaderLogo = select('.preloader img');
    const preloader = select('.preloader');
   
    tlLoaderIn
  .to(loaderLogo, {
      scale: 1,
      opacity: 1,
      ease: 'back'
  }, 0.2)
  .addLabel('reveal')
    
    
  const tlLoaderOut = gsap.timeline({
      defaults: {
          duration: .85,
          ease: 'expo.inOut'
      },
    delay: 1.5
  });
  
  tlLoaderOut.to(loaderLogo, {opacity: 0, scale:.75, ease: 'back', onComplete: homeHeroFade}).to(loaderStripes, {yPercent: -100, stagger: 0.1}, 0.5).to(preloader, {yPercent: -150})
  
  const tlLoader = gsap.timeline();
    
  tlLoader.add(tlLoaderIn).add(tlLoaderOut)
  
  
  };

  // Looped Fade Up
  
  function loopFadeUp() {

    if (viewportWidth > 640) {

        // Scroll Trigger Animations 

        gsap.utils.toArray('.gsap-trigger').forEach(section => {
            const elems = section.querySelectorAll('.gsap-fade');

                gsap.set(elems, {
                y: 30,
                opacity: 0,
                duration: .65,
                ease: 'back',
                });

                
                ScrollTrigger.create({
                trigger: section,
                start: 'top 60%',
                // markers: true,
                onEnter: () => gsap.to(elems, {
                    y: 0,
                    opacity: 1,
                    stagger: 0.25,
                    ease: 'back',
                }),
            });
        })

    } 
}


// Background Parallax

function parallaxBg() {
    gsap.utils.toArray(".section-parallax .parallax-content").forEach((section, i) => {
        const heightDiff = section.offsetHeight - section.parentElement.offsetHeight;

    gsap.fromTo(section,{ 
    y: -heightDiff * 1.5
    }, {
    scrollTrigger: {
        trigger: section.parentElement,
        scrub: true
    },
    y: 0,
    ease: "none"
    });
    });

}


function init(){
        // initPinNav();
        
        if ( ! sessionStorage.getItem( 'doNotShow' ) ) {
            sessionStorage.setItem( 'doNotShow', true );
            initLoader();
        } else {
           document.querySelector('.preloader').style.display = "none";
        }
        
        if (viewportWidth > 1024) {
            pinProcess();
        }
        parallaxBg();
        loopFadeUp();
        HeroDefaultFade();
};


window.addEventListener('load', function(){
    init();
})



//Slide

new Splide( '.splide', {
    classes: {
		arrows: 'splide__arrows your-class-arrows',
		arrow : 'splide__arrow your-class-arrow',
		prev  : 'splide__arrow--prev your-class-prev',
		next  : 'splide__arrow--next your-class-next',
    },
    perPage: 3,
    pagination: false,
    breakpoints: {
        1024: {
            perPage: 2,
        },
		768: {
            perPage: 1,
		},
	}

}).mount();