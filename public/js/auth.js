$(document).ready(function () {
    /* Set Ukraine selected in register form */
    $('.b2c-auth-form-country').find('option[value=0]').attr('selected');

    /* Masked input for phone field on auth form */
    $(".b2c-auth-form-phone").prop({disabled: false});
    $(".b2c-auth-form-phone").mask($(".b2c-auth-form-country").val() + " (99) 999-9999");
    $('.b2c-auth-form-country').bind('change', function () {
        $(".b2c-auth-form-phone").mask($(".b2c-auth-form-country").val() + " (99) 999-9999");
    });
});