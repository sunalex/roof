$(document).ready(function () {

    $('.alert').hide();

    $(function () {
        $('.close-alert').click(function () {
            $('.alert').hide();
        });
    });

    $(".form").each(function (formIndex, formElement) {
        $(formElement).validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                phone: {
                    required: true,
                    minlength: 7
                },
                email: {
                    required: true,
                    email: true
                }
            },
            messages: {
                name: {
                    required: "Пожалуйста, заполните поле.",
                    minlength: "Введите больше 2 символов."
                },
                phone: {
                    required: "Пожалуйста, заполните поле.",
                    minlength: "Введите больше 7 символов."
                },
                email: {
                    required: "Пожалуйста, заполните поле.",
                    email: "Введите корректный адрес."
                }
            },
            submitHandler: function (form) {
                var $form = $(form);
                $.post('send.php', $form.serialize(), function (data) {
                    $('.form-control').removeClass('valid');
                    $(document).ready(function () {
                        $('input').val('');
                        $('.modal').modal('hide');

                        $('.alert').show();

                        $(function () {
                            $("html, body").animate({ scrollTop: 0 }, "slow");
                            return false;
                        });


                    });
                });
            }
        });
    });

});