function myPlugin({ swiper, extendParams, on }) {
  extendParams({
    debugger: false,
  });

  const logEvent = (eventName, ...args) => {
    if (!swiper.params.debugger) return;
    console.log(eventName, ...args);
  };

  on("init", () => logEvent("init"));
  on("click", (swiper, e) => logEvent("click"));
  on("tap", (swiper, e) => logEvent("tap"));
  on("doubleTap", (swiper, e) => logEvent("doubleTap"));
  on("sliderMove", (swiper, e) => logEvent("sliderMove"));
  on("slideChange", () =>
    logEvent("slideChange", swiper.previousIndex, "->", swiper.activeIndex)
  );
  on("slideChangeTransitionStart", () =>
    logEvent("slideChangeTransitionStart")
  );
  on("slideChangeTransitionEnd", () => logEvent("slideChangeTransitionEnd"));
  on("transitionStart", () => logEvent("transitionStart"));
  on("transitionEnd", () => logEvent("transitionEnd"));
  on("fromEdge", () => logEvent("fromEdge"));
  on("reachBeginning", () => logEvent("reachBeginning"));
  on("reachEnd", () => logEvent("reachEnd"));
}

// var swiper = new Swiper(".swiper-wrapper", {
//   // Install Plugin To Swiper
//   modules: [myPlugin],
//   pagination: {
//     el: ".swiper-pagination",
//     clickable: true,
//   },
//   navigation: {
//     nextEl: ".swiper-button-next",
//     prevEl: ".swiper-button-prev",
//   },
//   // Enable auto-play with 3 seconds interval
//   autoplay: {
//     delay: 3000,
//   },
//   // Enable debugger
//   debugger: true,
// });
