$(document).ready(function(){
    feature.run();
});

var feature = {
    loadDataNextPrev: function(next, prev) {
        next.on('click', function() {
            $('.slider li').css('display', 'none').removeClass('current');
            $('.slider li').next().css('display', 'block').addClass('current');
        });

        prev.on('click', function() {
            $('.slider li').css('display', 'none').removeClass('current');
            $('.slider li').prev().css('display', 'block').addClass('current');
        });
    },

    loadSearchForm: function() {
        $('#toggle-search').on('click', function() {
            if($('.header-search').css('display') == 'none') {
                $('.header-search').show();
            } else {
                $('.header-search').hide();
            }
        });
    },

	setup: function() {
        var next = $('.next');
        var prev = $('.prev');

        this.loadDataNextPrev(next, prev);
        this.loadSearchForm();
    },
    run: function() {
        // Need to setup view first
        this.setup();
        // Other initialization 
    }

}