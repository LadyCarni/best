$(document).ready(function() {

    $('#sidebar-toggle').click(function(){
        $('aside').toggleClass("collapse");
        $('.logo').toggleClass("full");
        $('.logo').toggleClass("avatar");
        $('#sidebar-toggle').toggleClass("expand");
        $('nav').toggleClass("collapse");
        $('.rotate').toggleClass("rotated");
        $('.welcome').toggleClass("hidden");
        $('.body-container').toggleClass("expand-body");
    });

});