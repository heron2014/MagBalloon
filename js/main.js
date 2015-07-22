(function() {

    $(function() {
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
