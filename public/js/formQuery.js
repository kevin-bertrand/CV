$(function() {
    $('#contact-form').submit(function(event) {
        startNewSubmition(event);

        var postdata = $('#contact-form').serialize();

        $.ajax({
            type: 'POST',
            url: '../../server/performFormQuery.php',
            data: postdata,
            dataType: 'json',
            success: function(result) {
                if (result.formIsSuccess) {
                    var successModal = new bootstrap.Modal(document.getElementById('sendSuccessModal'));
                    successModal.show();
                    $("#contact-form")[0].reset();
                } else {
                    $("#firstname + .error-comments").html(result.firstnameError);
                    $("#name + .error-comments").html(result.nameError);
                    $("#email + .error-comments").html(result.emailError);
                    $("#phone + .error-comments").html(result.phoneError);
                    $("#message + .error-comments").html(result.messageError);
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(xhr.responseText);
                console.log(thrownError);
            }
        })
    })

    function startNewSubmition(event) {
        event.preventDefault();
        $('.error-comments').empty();
    }
})