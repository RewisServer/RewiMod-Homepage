// Once Document is loaded
$('document').ready(function () {
    // Check if a user hover with his cursor over the logo.
    $('#logo').hover(function () {
        // If the user is hovering over the logo, we're magically aplying an animate.css class for a single effect.
        $('#logo').addClass('animated pulse');
    }, function () {
        // If the user moves his cursor from the logo, we're removing the effect from the button.
        $('#logo').removeClass('animated pulse');
    });
});
