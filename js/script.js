$(document).ready(function() {
    var question = $('.question'),
        reponse = $('reponse');

    //pour chaque question quand on clique sur chaque question la reponse s'affiche

    $(question).each(function() {
        $(this).on('click', function() {
            $(this).next().slideToggle();
            $(reponse).not($(this).next()).hide();
        });
    });

});