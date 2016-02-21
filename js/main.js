(function($) {

    var conf = {
        rel: 'box',
        maxWidth: '85%',
        maxHeight: '85%',
        title: function() {
            return $(this).parent().find('.wp-caption-text').text();
        }
    };

    $('a[href$=".jpg"], a[href$=".jpeg"], a[href$=".png"], a[href$=".gif"]').colorbox(conf);


})(jQuery);