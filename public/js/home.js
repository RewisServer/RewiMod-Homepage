/**
 * Created by lukas on 04.08.16.
 */
// Once Document is loaded
$('document').ready(function () {
    // Check if a user hover with his cursor over the download button
    $('#download').hover(function () {
        // If the user is hovering over the download button, we're magically aplying an animate.css class for a single effect.
        $('#download').addClass('animated rubberBand');
    }, function () {
        // If the user moves his cursor from the download button, we're removing the effect from the button.
        $('#download').removeClass('animated rubberBand');
    });
});