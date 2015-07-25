(function() {
    console.log('is it working');
    jQuery(document).ready(function($) {
        $("#home a:contains('Home')").parent().addClass('active');
        $("#products a:contains('Product Range')").parent().addClass('active');
        $("#where a:contains('Where to Buy')").parent().addClass('active');
        $("#retailer a:contains('Become a Retailer')").parent().addClass('active');
        $("#contact a:contains('Contact Us')").parent().addClass('active');

        $('#desktop-navigation').affix({
            offset: {
                top: $('#desktop-navigation').offset().top,
                bottom: function () {
                    return (this.bottom = $('.footer').outerHeight(true))
                }
            }
        });
        var d = new Date();
        $('.js_year').text(d.getFullYear());

        //$('.panel-faq').on('show.bs.collapse', function () {
        //    $(this).addClass('active-acc');
        //});
        //
        //$('.panel-faq').on('hide.bs.collapse', function () {
        //    $(this).removeClass('active-acc');
        //});

        $('#form-contact').validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                email: {
                    required: true,
                    email: true
                },
                phone: {
                    required: true,
                    digits: true,
                    minlength: 7
                },
                message: {
                    required: true,
                    minlength: 20
                }
            },
            messages: {
                name: {
                    required: "Please enter your name",
                    minlength: "Your name seems a bit short"
                },
                email: {
                    required: "Please enter your email address",
                    email: "Please enter a valid email address"
                },
                phone: {
                    required: "Please enter your phone number",
                    digits: "Please enter a valid phone number",
                    minlength: "Your phone number seems a bit short"
                },
                message: {
                    required: "Please enter your message",
                    minlength: "Your message seems a bit short. Please enter at least 20 characters"
                }
            }
        });

    });
})();
