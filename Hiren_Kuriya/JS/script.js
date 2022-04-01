$(function() {
    $(".toggle").on('click', function(e) {
        var x = e.target.id;
        $(`.${x}`).toggleClass("rotate");
    });
});
