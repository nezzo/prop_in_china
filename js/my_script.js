jQuery(document).ready(function(){
    /*Скрипт прокрутки к нужному блоку*/
    jQuery('a.my_butt').click(function() {
        jQuery.scrollTo('.get-in-touch', 1000);
    });
});