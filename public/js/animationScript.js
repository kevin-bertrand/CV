let ids = ["#office-pb", 
            "#project-manager-pb",
            "#auto-pb",
            "#elec-pb",
            "#maintenance-pb",
            "#dao-pb",
            "#electrotech-pb",
            "#comm-indu-pb",
            "#html-pb",
            "#swift-pb",
            "#javascript-pb",
            "#dart-pb",
            "#python-pb",
            "#php-pb"]

function isOnScreen(elem) {
    // if the element doesn't exist, abort
    if( elem.length == 0 ) {
        return;
    }
    var $window = jQuery(window)
    var viewport_top = $window.scrollTop()
    var viewport_height = $window.height()
    var viewport_bottom = viewport_top + viewport_height
    var $elem = jQuery(elem)
    var top = $elem.offset().top
    var height = $elem.height()
    var bottom = top + height

    return (top >= viewport_top && top < viewport_bottom) ||
    (bottom > viewport_top && bottom <= viewport_bottom) ||
    (height > viewport_height && top <= viewport_top && bottom >= viewport_bottom)
}

function resetWidth(element) {
    $(element).css({"width": "0"});
}

function animateProgressBar(element) {
    var percent = $(element).data("value") + "%"

    $(element)
        .delay(300)
        .queue(function (next) { 
            $(this).css('width', percent); 
            next(); 
        });
}

function checkIfMustAnimate() {
    ids.forEach(function(id) {
        if(isOnScreen(jQuery(id))) {
            animateProgressBar(id)
        }
    })
}

$(function() {
    ids.forEach(function(id) {
        resetWidth(id)
    })

    checkIfMustAnimate()

    window.addEventListener('scroll', function(e) {
        checkIfMustAnimate()
    });
})
