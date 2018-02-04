function windowOnLoad() {
    $('.loading-page').addClass('disappear-anime');
    setTimeout(function() { $('.loading-page').addClass('disappear'); }, 400);
    setTimeout(afterLoaderDisapper, 300);
    smoothScroolling();
    $(".slider").slider({ height: $(window).innerHeight(), interval: 3000 });
}

function afterLoaderDisapper() {
    $(".n-img").toggleClass("n-hide");
    $(".landing-div-container").toggleClass("n-hide")
    typeWriterEffect($(".ldc-caption"), function() {
        $(".scroll-btn").removeClass("n-hide");
    });
}


















////////////////////////////////////////////////
/////   THIS FUNCTION CREATS A TYPING 
/////   EFFECT.
/////       Input:
/////           -> the element on which the
/////             effect is intended.
/////       html markup:
/////           -> data-text : the text to
/////              be written.
/////           -> data-effect-fire-delay:
/////              after how much time
/////              the effect should fire.
/////              (milliseconds)
/////           -> data-letter-delay: the
/////              time after which each 
/////              letter must be typed
////////////////////////////////////////////////
function typeWriterEffect(theCaptionElement, callback_func) {
    var counter = 1;
    var caption = theCaptionElement.attr("data-text");
    var fireDelay = theCaptionElement.attr("data-effect-fire-delay");
    if (!fireDelay) {
        fireDelay = 0;
    }
    var letter_delay = theCaptionElement.attr("data-letter-delay");
    if (!letter_delay) {
        letter_delay = 0;
    }
    setTimeout(function() {
        var heroDivCaptionParagraphWritingInterval = setInterval(
            function() {
                theCaptionElement.attr("style", "opacity:1");
                counter++;
                if (counter > caption.length) {
                    clearInterval(heroDivCaptionParagraphWritingInterval);
                    callback_func();
                }
                theCaptionElement.html(caption.substr(0, counter));
            }, letter_delay
        );
    }, fireDelay);
}



////////////////////////////////////////////////
/////   The function for smooth scrolling.
/////   BORROWED FROM INTERNET.
////////////////////////////////////////////////
function smoothScroolling() {
    // Select all links with hashes
    $('a[href*="#"]')
        // Remove links that don't actually link to anything
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function(event) {
            // On-page links
            if (
                location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
                location.hostname == this.hostname
            ) {
                // Figure out element to scroll to
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                // Does a scroll target exist?
                if (target.length) {
                    // Only prevent default if animation is actually gonna happen
                    event.preventDefault();
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000, function() {
                        // Callback after animation
                        // Must change focus!
                        var $target = $(target);
                        $target.focus();
                        if ($target.is(":focus")) { // Checking if the target was focused
                            return false;
                        } else {
                            $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                            $target.focus(); // Set focus again
                        };
                    });
                }
            }
        });

}

//////////////////////////////////////////////////////////////
/////   This function is called on scrolling
/////   Input : 
/////       -> element : the refrence element
/////       -> offset : distance from the bottom
/////               of the screen 
/////       -> globalvariable_r : a global variable to
/////           store the state of action.
/////           Formate : GV_r = {flag : false}
/////       -> callback : the function which is called
/////           on crossing the offset.
//////////////////////////////////////////////////////////////
function onScrollAction(element, offset, globalvariable_r, callback) {
    var top = element.offset().top - $(window).scrollTop();
    var trigger_offset = $(window).innerHeight() - offset;
    if (top <= trigger_offset && globalvariable_r.flag == false) {
        callback();
        globalvariable_r.flag = true;
        //console.log( element.attr("class") +" lepos = " + top + " " + trigger_offset + " " + globalvariable_r.flag);
    } else if (top > trigger_offset && globalvariable_r.flag == true) {
        callback();
        globalvariable_r.flag = false;
        //console.log( element.attr("class") +" lepos = " + top + " " + trigger_offset + " " + globalvariable_r.flag);
    }

}