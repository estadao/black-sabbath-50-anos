///////////////////////////////////
//// Device-related functions ////
/////////////////////////////////

function isSafari() {
    /* Checks if user uses Safari
    to handle the non supported
    audio fade-in / fade-out */

  let userNavigator = navigator.userAgent;
  // console.log(userNavigator);
  let isSafari = userNavigator.includes("Safari") && !userNavigator.includes("Chrome");
  return isSafari;
}

function isMobile() {
    return (screen.width <= 420 ? true : false);
}

//////////////////////////////////
//// Audio-related functions ////
////////////////////////////////

function playAudio(element) {

    /* Fade out addaptem from
    https://stackoverflow.com/questions/7451508/html5-audio-playback-with-fade-in-and-fade-out
    and https://gist.github.com/loudnarrative/2396206 */

    if (!allowAudio) {
        nowPlaying = { };
        return;
    }

    // Saves the current slide so we know when it changed
    let thisSlide = mySwiper.activeIndex;
    
    // Selects the audio information from this slide
    let trackHolder = element.querySelector(".track-info-holder");
    if (trackHolder && trackHolder.classList.contains("active")) {

        let trackId = trackHolder.dataset["track_id"];

        if (trackId != "nowPlaying") {

            // Pause all audios but the one we want to play
            let audios = document.querySelectorAll(".audio-hidden");

            for (let audio of audios) {

                if (audio.dataset.track_id != trackId) {

                    audio.pause();
                    audio.currentTime = 0;
    
                }

            }

            // Play the new one
            let audio = document.querySelector(`#${trackId}`);
            audio.play()
            
            // Update what is now playing
            nowPlaying = trackId;

        }

    }

    // If there's no active trackHolder, stop all audios
    else {

        let audios = document.querySelectorAll(".audio-hidden");
        for (let audio of audios) {

                audio.pause();
                audio.currentTime = 0;

            }

    }

}

function handleMuteButton() {

    // If this is the first slide change, load all audios
    if (!audiosLoaded) {

        let audios = document.querySelectorAll(".audio-hidden");

        for (let item of audios) {
                item.load();
                item.pause();
            }

    // Now we don't ever need to load again
    audiosLoaded = true;

    }

    // Allow/disallow audio and update button text
    if (!allowAudio) {
        allowAudio = true;

    }
    else if (allowAudio) {
        allowAudio = false;
    }


    // Update slide button text
    let buttonTexts = document.querySelectorAll(".sound-button-content");
    
    for (let text of buttonTexts) {

        if (text.classList.contains("displayed")) {
            text.classList.remove("displayed");
            text.classList.add("not-displayed");

        }
        else if (text.classList.contains("not-displayed")) {
            text.classList.remove("not-displayed");
            text.classList.add("displayed");
        }

    }

    // Displays and hides icons accordingly
    let icons = document.querySelectorAll(".sound-icon");
    
    for (let icon of icons) {

        if (icon.classList.contains("displayed")) {
            icon.classList.remove("displayed");
            icon.classList.add("not-displayed");
        }

        else if (icon.classList.contains("not-displayed")) {
            icon.classList.remove("not-displayed");
            icon.classList.add("displayed");
        }

    }

    // Stop all audios and set them back to start
    let audios = document.querySelectorAll(".audio-hidden");

    for (let audio of audios) {

        audio.pause();

    }

    // Play the current slide track. It will only play if allowAudio is true
    nowPlaying = null; // No song is currently playing when we click the button. This is necessary to trigger audio play in the function.
    let currentSlide = document.querySelectorAll(".swiper-slide")[mySwiper.activeIndex];
    playAudio(currentSlide);


    console.log(allowAudio);

}

function fade() {
    /* To do:
    Implement a fade-in/fade-out so
    the transition before tracks is smoother
    */
}

/////////////////////////////////////////
//// Functions that run on pageload ////
///////////////////////////////////////

if (isMobile()) {

    var mySwiper = new Swiper ('.swiper-container', {

        // Optional parameters
        direction: 'vertical',
        runCallbacksOnInit: false, // So it fires the slideChange event on first swipe
        updateOnWindowResize: true,
        mousewheel: {
            releaseOnEdges: true,
         }
    
    });
    
}
    
else {
    
    var mySwiper = new Swiper ('.swiper-container', {
        
        // Optional parameters
        direction: 'horizontal',
        runCallbacksOnInit: false, // So it fires the slideChange event on first swipe
        updateOnWindowResize: true,
        mousewheel: {
            releaseOnEdges: true,
            },
        centeredSlides: true,
        // centerInsufficientSlides: true,
        spaceBetween: 20,
        slidesPerView: 'auto',
        longSwipe: false,
        keyboard: true,
        slideToClickedSlide: true

    });
    
}

mySwiper.on("slideChange", function(){

        let currentSlide = document.querySelectorAll(".swiper-slide")[this.activeIndex];
        playAudio(currentSlide);
    
});

/* Add mute/unmute listeners to  the allower button
and to all the audio icons */
let soundButton = document.querySelector("#sound-button");
let soundIcons = document.querySelectorAll(".sound-icon");

/* The page initializes with no audios loaded
and without play authorization */
let audiosLoaded = false;
let allowAudio = false;
let nowPlaying = null;

soundButton.addEventListener("click", handleMuteButton);
for (let icon of soundIcons) {
    icon.addEventListener("click", handleMuteButton);
}

/* Swipes next when we click the custom arrow */
let arrows = document.querySelectorAll(".arrow-down-holder");
for (let arrow of arrows) {
    arrow.addEventListener("click", function(){
        mySwiper.slideNext();
    })
}