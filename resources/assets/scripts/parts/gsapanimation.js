import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";

export class Gsapanimation {
  init() {
    this.MainTitle();
    this.HeadTitle();
    this.RightContent();
    this.CenterContent();
    this.HeroSection();
    this.CounterSection();
    this.ServiceSection();
    this.CardandClosetSection();
    this.MarqueeAnimation();
  }

  MainTitle() {
    $(document).ready(function () {
      gsap.registerPlugin(ScrollTrigger);

      gsap.utils.toArray(".main-title.title").forEach(title => {
        gsap.from(title, {
          x: -200,
          opacity: 0,
          duration: 1.5,
          ease: "power3.out",
          scrollTrigger: {
            // scrub: 1,                 
            trigger: title,
            start: "top 90%",
            end: "top 10%",
            toggleActions: "play none none none",
          }
        });
      });
    });
  }

  HeadTitle() {
    $(document).ready(function () {
      gsap.registerPlugin(ScrollTrigger);

      gsap.utils.toArray(".head-title").forEach(title => {
        gsap.from(title, {
          x: -250,
          opacity: 0,
          duration: 1.5,
          ease: "power3.out",
          scrollTrigger: {
            // scrub: 1,                 
            trigger: title,
            start: "top 90%",
            end: "top 10%",
            toggleActions: "play none none none",
          }
        });
      });
    });
  }

  RightContent() {
    $(document).ready(function () {
      gsap.registerPlugin(ScrollTrigger);

      gsap.utils.toArray(".right-content").forEach(content => {
        gsap.from(content, {
          x: 250,
          opacity: 0,
          duration: 1.5,
          ease: "power3.out",
          scrollTrigger: {
            trigger: content,
            start: "top 80%",
            toggleActions: "play none none none",
          }
        });
      });
    });
  }

  CenterContent() {
    $(document).ready(function () {
      gsap.registerPlugin(ScrollTrigger);

      gsap.utils.toArray(".center-content").forEach(content => {
        gsap.from(content, {
          y: 100,
          opacity: 0,
          duration: 1,
          scrollTrigger: {
            trigger: content,
            start: 'top 80%',
            toggleActions: 'play none none none',
          },
        });
      });
    });
  }

  HeroSection() {
    $(document).ready(function () {
      gsap.registerPlugin(ScrollTrigger);

      gsap.from(".home-section", {
        opacity: 0,
        duration: 1.5,
        ease: "power3.out",
        scrollTrigger: {
          trigger: ".home-section",
          start: "top 80%",
          toggleActions: "play none none none",
        }
      });
    });
  }

  CounterSection() {
    $(document).ready(function () {
      gsap.registerPlugin(ScrollTrigger);

      gsap.from(".counter-card-container", {
        opacity: 0,
        y: 50,
        duration: 1.2,
        ease: "power3.out",
        stagger: 0.3,
        scrollTrigger: {
          trigger: ".counter-section",
          start: "top 80%",
          end: "top 50%",
          scrub: 1,
          toggleActions: "play none none none",
        }
      });
    });
  }

  ServiceSection() {
    $(document).ready(function () {
      gsap.registerPlugin(ScrollTrigger);

      gsap.from(".service-content", {
        x: -300,
        opacity: 0,
        duration: 1.5,
        ease: "power3.out",
        scrollTrigger: {
          trigger: ".service-section",
          start: "top 80%",
          toggleActions: "play none none none",
        }
      });
    });
  }

  CardandClosetSection() {
    $(document).ready(function () {
      gsap.registerPlugin(ScrollTrigger);

      $('.project-cards,.service-cards,.testimonial-cards,.related-blog-card,.blog-card,.marquee,.closet-item,.location-card,.team-card,.team-container,.animate--text,.portfolio-img,.technology-img').each(function (index, element) {
        gsap.from(element, {
          y: 100,
          opacity: 0,
          duration: 1,
          scrollTrigger: {
            trigger: element,
            start: 'top 80%',
            toggleActions: 'play none none none',
          },
        });
      });
    })
  }

  MarqueeAnimation() {
    $(document).ready(function () {
      const $wrapper = $(".marquee");
      const $boxes = $(".marquee_inner");

      const loop = horizontalLoop($boxes, { paused: false, repeat: -1, speed: 1 });

      function horizontalLoop(items, config) {
        items = gsap.utils.toArray(items);
        config = config || {};
        let tl = gsap.timeline({
          repeat: config.repeat,
          paused: config.paused,
          defaults: { ease: "none" },
          onReverseComplete: () => tl.totalTime(tl.rawTime() + tl.duration() * 100)
        });
        const length = items.length;
        const startX = items[0].offsetLeft;
        const times = [];
        const widths = [];
        const xPercents = [];
        let curIndex = 0;
        const pixelsPerSecond = (config.speed || 1) * 100;
        const snap = config.snap === false ? v => v : gsap.utils.snap(config.snap || 1);
        let totalWidth, curX, distanceToStart, distanceToLoop, item, i;

        gsap.set(items, {
          xPercent: (i, el) => {
            let w = widths[i] = parseFloat(gsap.getProperty(el, "width", "px"));
            xPercents[i] = snap(parseFloat(gsap.getProperty(el, "x", "px")) / w * 100 + gsap.getProperty(el, "xPercent"));
            return xPercents[i];
          }
        });

        gsap.set(items, { x: 0 });
        totalWidth = items[length - 1].offsetLeft + xPercents[length - 1] / 100 * widths[length - 1] - startX + items[length - 1].offsetWidth * gsap.getProperty(items[length - 1], "scaleX") + (parseFloat(config.paddingRight) || 0);

        for (i = 0; i < length; i++) {
          item = items[i];
          curX = xPercents[i] / 100 * widths[i];
          distanceToStart = item.offsetLeft + curX - startX;
          distanceToLoop = distanceToStart + widths[i] * gsap.getProperty(item, "scaleX");

          tl.to(item, {
            xPercent: snap((curX - distanceToLoop) / widths[i] * 100),
            duration: distanceToLoop / pixelsPerSecond
          }, 0)
            .fromTo(item, {
              xPercent: snap((curX - distanceToLoop + totalWidth) / widths[i] * 100)
            }, {
              xPercent: xPercents[i],
              duration: (curX - distanceToLoop + totalWidth - curX) / pixelsPerSecond,
              immediateRender: false
            }, distanceToLoop / pixelsPerSecond)
            .add("label" + i, distanceToStart / pixelsPerSecond);
          times[i] = distanceToStart / pixelsPerSecond;
        }

        function toIndex(index, vars) {
          vars = vars || {};
          // always go in the shortest direction
          if (Math.abs(index - curIndex) > length / 2) {
            index += index > curIndex ? -length : length;
          }
          const newIndex = gsap.utils.wrap(0, length, index);
          let time = times[newIndex];

          if (time > tl.time() !== index > curIndex) { // if we're wrapping the timeline's playhead, make the proper adjustments
            vars.modifiers = { time: gsap.utils.wrap(0, tl.duration()) };
            time += tl.duration() * (index > curIndex ? 1 : -1);
          }
          curIndex = newIndex;
          vars.overwrite = true;
          return tl.tweenTo(time, vars);
        }

        tl.next = vars => toIndex(curIndex + 1, vars);
        tl.previous = vars => toIndex(curIndex - 1, vars);
        tl.current = () => curIndex;
        tl.toIndex = (index, vars) => toIndex(index, vars);
        tl.times = times;

        tl.progress(1, true).progress(0, true); // pre-render for performance
        if (config.reversed) {
          tl.vars.onReverseComplete();
          tl.reverse();
        }

        return tl;
      }
    });
  }
}