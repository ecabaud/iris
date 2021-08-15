jQuery(document).ready(function($){
    if ( window.location.pathname.includes('mentions-legales') === false ) {
        if(window.outerWidth > 1024) {
            function topBtnDisplay(index) {
                if (index > 2) {
                    $('#top-btn').fadeIn();
                } else {
                    $('#top-btn').fadeOut();
                }
            }
        }
    }

    $('input[name ="your-phone"]').keyup(function (event) {
        var value = $(this).val();
        value = value.replace(/[^0-9+]+/g, '');
        $(this).val(value);
    });
    $('#close-menu').on('click', function () {
        $('#menu-nav').fadeOut();
    });
    $('#menu-burger').on('click', function () {
        $('#menu-nav').fadeIn();
    });
    var height = window.innerHeight;

    $(window).scroll(function() {
        var s = $('html').scrollTop() || $('body').scrollTop();

        if(s > height) {
            $('#top-btn').fadeIn();
        } else {
            $('#top-btn').fadeOut();
        }
    });
    $("#top-btn").on('click', function () {
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });
    AOS.init();
    $(document).on('input', 'textarea', function () {
        $(this).outerHeight(38).outerHeight(this.scrollHeight); // 38 or '1em' -min-height
    });
});

