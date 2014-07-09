<script type="text/javascript">
function AttorneyCarousel(){
    // Handle a carousel click.
    this._handleClick = function(e){
        // Check if we've clicked on a link.
        var data = $.getLinkAction(e);
        switch ( data.action ) {
            case 'Left':
                this.prev();
                return false;
            case 'Right':
                this.next();
                return false;
        }
// Check if we've clicked directly on one of the LIs.
var target = $(e.target),
index = target.is('img') ? target.parent().data( 'index' ) : undefined;

if ( index === undefined ) {
    return;
    } else if ( index === this.index ) {
    var a = target.closest( 'li' ).find( '.AttyInfo a' );
    if ( a.length ) {
    a[0].click();
    }
return;
} else {
    this.set( index );
    }
};

// Advance to the next item in the carousel.
this.next = function(){
    this.set( this.index + 1 );
    };

// Advance to the previous item in the carousel.
this.prev = function(){
    this.set( this.index - 1 );
    };

// Set the active position.
this.set = function( pos ) {
    // Validate the position.
    pos = $.toInt( pos );

    // If we're too close to the end, and we need to "wrap" the carousel.
    if ( pos >= this.lis.length-3 || pos < 3 ) {
    // How far ahead are we clicking?
    var	diff = pos - this.index;
    if ( pos < 3 ) {
    pos += this.length - diff;
    } else {
    pos -= this.length + diff;
    }

// Adjust the position and remove the animation class.  This will instantly set the position.
this.element.removeClass( 'animate' );

var fn = function( wz, _diff ){
    return function(){
    // Restart the animation css and advance to the next item.
    wz.element.addClass( 'animate' );
    wz.set( wz.index + _diff );
    wz = null;
    _diff = null;
    };
}(this,diff);
setTimeout(fn,1);
}
// If this is the same position, do nothing.
if ( this.index === pos ) {
    return;
    }

// Set the selected item.
this.lis.filter('.selected').removeClass('selected');
this.lis.eq( pos ).addClass( 'selected' ).removeStyle('width');
this.index = pos;

// Animate the item into position.
this.animate();
};

// Initialize the dimensions.
this.init = function(){
    if ( !this.small || !this.large ) {
    this.large = this.lis.filter('.selected').outerWidth(true);
    this.small = this.lis.filter(':not(.selected):first').outerWidth(true);
    }
};

// Animate the carousel into position.
this.animate = function(){
    this.init();
    var width = this.element.width(),
    left = ( this.index * this.small ) + ( this.large / 2 ),
    margin = ( width / 2 ) - left;

    if ( !Modernizr.csstransitions && this.element.is('.animate') ) {
    this.ul.animate( { marginLeft: margin } );
} else {
    this.ul.css( { marginLeft: margin } );
}
};

// Resize the position on a 0.1 second timeout.
this.resize = function(){
    if ( this._timeout ) {
    clearTimeout( this._timeout );
    }
this._timeout = setTimeout( $.proxy(this._resize,this), 10 );
};

// Reset the position after resizing the browser window.
this._resize = function(){
    if ( this._timeout ) {
    clearTimeout( this._timeout );
    this._timeout = null;
    }
this.animate();
};

// Get the carousel element.
this.element = $('#AttyCarousel');
// And the UL (which will be moved back and forth).
this.ul = this.element.find('ul:first');
// Count the number of lis to start with.
this.length = this.ul.children().length;
// Duplicate the LIs.
var html = $.trim( this.ul.html() );
this.ul.html( html+html );
// Get the set of LIs.
this.lis = this.ul.children().each(function(i){
    $(this).data('index',i);
    });

// Activate the "first" item of the cloned lis.
var active = this.lis.filter('.Info1').eq(1);
var pos = this.lis.index(active);
this.set(pos);

// Activate the animations.
var el = this.element;
setTimeout( function(){
    el.addClass( 'animate' );
    el = null;
    }, 1);

// When clicking on the carousel, activate the selected items.
this.element.on('click',$.proxy(this._handleClick,this));

// Adjust the center when the window resizes.
$(window).on('resize',$.proxy(this.resize,this));
}
new AttorneyCarousel();</script>
<script type="text/javascript">
    $(document).ready(function() {
        function Services() {
            //check to see if hover was on the same link and then show the new one
            this._mouseOver = function(e){

                if ( $(e.target).closest('li').hasClass('active') ) {
                    return;
                }  else {
                    this.elements.listItem.removeClass('active');
                    $(e.target).closest('li').addClass('active');
                }
            };

            // grab elements
            this.elements = {
                listItem: $('.PracticeList').find('li'),
                link: $('.PracticeList').find('li > a').on( 'mouseenter', $.proxy(this._mouseOver, this))
            };
        }

        new Services();
    });</script>
    <script type="text/javascript">
    $( function () {
        if ( !Modernizr.boxsizing ) {
        $( 'form *' ).each( function() {
        if ( this.currentStyle && this.currentStyle.width && this.currentStyle.width != 'auto' ) {
        var el = $( this ),
        full = el.outerWidth(),
        actual = el.width(),
        delta = full - actual;
        if ( delta ) {
        el.css( { width: actual - delta } );
    }
    }
    } );
    }
    } );
    </script>