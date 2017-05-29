$(document).ready(function () {

    $('.b2c-language li a').on('click', function () {

        var lang_prefix = $(this).data('lang');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            data: {lang: lang_prefix},
            type: 'POST',
            url: '/lang/'+lang_prefix,
            success: function (result) {
                sessionData = result.sessionData
                console.log(sessionData);
            },
            error: function(result) {
                console.log(result);
            }
        });

    });
});