(function() {



    $(function() {

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

    });

})();
