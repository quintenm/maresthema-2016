/**
 * Created by Quinten on 2/02/16.
 */
;(function ( $, window, document, undefined ) {

    $('body').scrollspy({ target: '#nav' });



    $("#nav ul li a[href^='#'],.scrollToSection").on('click', function(e) {

        // prevent default anchor click behavior
        e.preventDefault();
        // animate
        $('html, body').animate({
            scrollTop: $(this.hash).offset().top()
        },  Math.abs((window.scrollY - $(this.hash).offset().top()) * 0.3));

    });

    $('.carousel-showsixmoveone .item').each(function(){
        var itemToClone = $(this);

        for (var i=1;i<6;i++) {
            itemToClone = itemToClone.next();

            // wrap around if at end of item collection
            if (!itemToClone.length) {
                itemToClone = $(this).siblings(':first');
            }

            // grab item, clone, add marker class, add to collection
            itemToClone.children(':first-child').clone()
                .addClass("cloneditem-"+(i))
                .appendTo($(this));
        }
    });


    /*
    close alerts with cookeis
     */
    $('.close').click(function( e ){
        e.preventDefault();
        var alertPath = $(this).closest('.alert');
        var alert_id_prefix = 'mares-alert-box-';
        var alert_id = alertPath.data("alert-id");
        var alert_duration = alertPath.data("alert-time");
        alert_id =  alert_id_prefix.concat(alert_id);
        // Do not perform default action when button is clicked

        /* If you just want the cookie for a session don't provide an expires
         Set the path as root, so the cookie will be valid across the whole site */
        $.cookie(alert_id, 'closed', {expires : alert_duration, path : '/'});
    });


    /*
    Call dropdown menu on hover
     */

    $('[data-toggle="dropdown"]').bootstrapDropdownHover();

}(jQuery, window, document));