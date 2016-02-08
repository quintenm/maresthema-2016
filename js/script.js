/**
 * Created by Quinten on 2/02/16.
 */
;(function ( $, window, document, undefined ) {

    $('body').scrollspy({ target: '#nav' });



    $("#nav ul li a[href^='#']").on('click', function(e) {

        // prevent default anchor click behavior
        e.preventDefault();

        // animate
        $('html, body').animate({
            scrollTop: $(this.hash).offset().top
        }, 1000, function(){

            // when done, add hash to url
            // (default click behaviour)
            //window.location.hash = this.hash;
        });

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





}(jQuery, window, document));