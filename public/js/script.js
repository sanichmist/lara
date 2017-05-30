$(document).ready(function () {
    /* Switch language by ajax */
    $('#b2c-language-menu a').click(function (e) {
        e.preventDefault();
        var lang = $(this).attr('data-lang');
        $.ajax({
            method: "GET",
            url: "lang/" + lang,
        }).done(function () {
            location.reload();
        });
    });

});