$(document).ready(function() {
    $('#signupForm').submit(function(e) {
        e.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: 'signup.php',
            data: formData,
            success: function(response) {
                $('#message').html(response);
            }
        });
    });
});