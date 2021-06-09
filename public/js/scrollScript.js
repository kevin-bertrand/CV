$(function() {
    $(window).scroll(function (event) {
        checkPosition();
        checkPosition();
    });

    function checkPosition() {
        var scroll = $(window).scrollTop();

        console.log(scroll)

        if(scroll<10 || scroll == 0) {
            $("#first-link").addClass("active")
        }
    }

    $("#go-top-button").click(function() {
        $(document).scrollTop(0);
    })
})

