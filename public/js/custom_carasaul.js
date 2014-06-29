$(function() {
    $('#carousel').carouFredSel({
        direction: 'right',
        items: {
            visible: 1,
            start: -1
        },
scroll: {
    duration: 1000,
    timeoutDuration: 3000
    },
pagination: '#pager'
});
    $('.text_before').show();
    $('.personal_p').hide();
    $('.family_law_p').hide();
    $('.criminal_law_p').hide();
    $('.personal_injury').mouseenter(function(){
        $('.text_before').hide();
         $('.personal_p').show();
        $('.css-shapes-preview').css('border', '2px solid blue');
    }).mouseleave(function(){
        $('.personal_p').hide();
        $('.text_before').show();
        $('.css-shapes-preview').css('border', '');
    });

$('.family_law').mouseenter(function(){
        $('.text_before').hide();
        $('.family_law_p').show();
    $('.css-shapes-preview').css('border', '2px solid green');
    }).mouseleave(function(){
        $('.text_before').show();
        $('.family_law_p').hide();
        $('.css-shapes-preview').css('border', '');
    });
$('.criminal_law').mouseenter(function(){
         $('.text_before').hide();
         $('.criminal_law_p').show();
        $('.css-shapes-preview').css('border', '2px solid green');
    }).mouseleave(function(){
        $('.criminal_law_p').hide();
        $('.text_before').show();
         $('.css-shapes-preview').css('border', '');
    });
        $('#slider').carouFredSel({
            width: '100%',
            align: false,
            items: 3,
            items: {
                width: $('#wrapper').width() * 0.15,
                height: 500,
                visible: 1,
                minimum: 1
            },
    scroll: {
        items: 1,
        timeoutDuration : 3000,
        onBefore: function(data) {

        //	find current and next slide
        var currentSlide = $('.slide.active', this),
        nextSlide = data.items.visible,
        _width = $('#wrapper').width();

        //	resize currentslide to small version
        currentSlide.stop().animate({
        width: _width * 0.15
        });
    currentSlide.removeClass( 'active' );

    //	hide current block
    data.items.old.add( data.items.visible ).find( '.slide-block' ).stop().fadeOut();

    //	animate clicked slide to large size
    nextSlide.addClass( 'active' );
    nextSlide.stop().animate({
        width: _width * 0.7
        });
    },
    onAfter: function(data) {
        //	show active slide block
        data.items.visible.last().find( '.slide-block' ).stop().fadeIn();
        }
    },
    onCreate: function(data){

        //	clone images for better sliding and insert them dynamacly in slider
        var newitems = $('.slide',this).clone( true ),
        _width = $('#wrapper').width();

        $(this).trigger( 'insertItem', [newitems, newitems.length, false] );

        //	show images
        $('.slide', this).fadeIn();
        $('.slide:first-child', this).addClass( 'active' );
        $('.slide', this).width( _width * 0.15 );

        //	enlarge first slide
        $('.slide:first-child', this).animate({
        width: _width * 0.7
        });

    //	show first title block and hide the rest
    $(this).find( '.slide-block' ).hide();
    $(this).find( '.slide.active .slide-block' ).stop().fadeIn();
    }
    });

    //	Handle click events
    $('#slider').children().click(function() {
        $('#slider').trigger( 'slideTo', [this] );
        });

    //	Enable code below if you want to support browser resizing
    $(window).resize(function(){

        var slider = $('#slider'),
        _width = $('#wrapper').width();

        //	show images
        slider.find( '.slide' ).width( _width * 0.15 );

        //	enlarge first slide
        slider.find( '.slide.active' ).width( _width * 0.7 );

        //	update item width config
        slider.trigger( 'configuration', ['items.width', _width * 0.15] );
        });
    $('.vic_section h4').equalHeight();
    $('.vic_section p').equalHeight();
});
