jQuery(document).ready(function ($) {

    // back to top smooth scrolling
    $('a[href^="#"]').on('click', function(e) {
        e.preventDefault();

        var target = this.hash;
        var $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': 0 + $target.offset().top
        }, 900, 'swing', function() {});
    });

	// hero slider
	$('.hero-slider').slick({
		dots: true,
		arrows: true,
		touchThreshold: 50
	});

	// thank you image slider
	$('.thank-you-img-slider').slick({
		arrows: true,
		touchThreshold: 50,
		asNavFor: '.thank-you-text-slider'
	});

	// thank you text slider
	$('.thank-you-text-slider').slick({
		arrows: false,
		draggable: false,
		swipe: false,
		touchMove: false,
		fade: true,
		adaptiveHeight: true
	});

	// move homepage modules
    function homepageModules(width) {
        if (width <= 785) {
            $('.our-mission__modules__thank-you').insertAfter('.our-mission__modules__events');
			$('.our-mission__modules__volunteer').insertBefore('.our-mission__modules__newsletters');
			$('.our-mission__modules__mailing-list').insertAfter('.our-mission__modules__supplies');
        } else {
            $('.our-mission__modules__thank-you').prependTo('.homepage-col:nth-child(3)');
			$('.our-mission__modules__volunteer').insertAfter('.our-mission__modules__events');
			$('.our-mission__modules__mailing-list').insertBefore('.our-mission__modules__wishlist');
        }
    }
    homepageModules( $(window).width() );
    $(window).on('resize', function() {
        homepageModules( $(this).width() );
    });

	// move the social icons in the footer
    function moveFooterSocial(width) {
        if (width <= 1185) {
            $('.footer-social').insertAfter('.footer-text nav');
        } else {
            $('.footer-social').insertAfter('.footer-text');
        }
    }
    moveFooterSocial( $(window).width() );
    $(window).on('resize', function() {
        moveFooterSocial( $(this).width() );
    });

	// move header navigation into the mobile nav
    function mobileNav(width) {
        if (width <= 1185) {
            $('.navigation').prependTo('.mobile-nav');
        } else {
            $('.navigation').insertAfter('.circle');
        }
    }
    mobileNav( $(window).width() );
    $(window).on('resize', function() {
        mobileNav( $(this).width() );
    });

	// toggle the mobile nav
	$('.mobile-nav-toggle').on('click', function(e) {
		e.preventDefault();
		$('.mobile-nav').addClass('open');
	});
	$('.mobile-nav-close').on('click', function(e) {
		e.preventDefault();
		$('.mobile-nav').removeClass('open');
	});

	// toggle the donate callout
	$('.donate-callout').addClass('open');
	$('.donate-callout .close-callout').on('click', function(e) {
		e.preventDefault();
		$('.donate-callout').toggleClass('open').removeClass('no-transition');
		
		if (!$('.donate-callout').hasClass('open')) {
			localStorage.setItem('donateCallout', 'closed');
		} else {
			localStorage.setItem('donateCallout', 'open');
		}
	});
	var state=localStorage.getItem('donateCallout');

	if (state=='closed') {
		$('.donate-callout').removeClass('open');
	}
	if (state=='open') {
		$('.donate-callout').addClass('open');
	}

	// thank you notes masonry grid
	if ($('.thank-you-notes').length) {
		$('.container').imagesLoaded( function() {
			var elem = document.querySelector('.grid');
			var msnry = new Masonry( elem, {
				itemSelector: '.grid-item',
				gutter: 40,
				horizontalOrder: true
			});
		});
	}

	// move news search
    function moveNewsSearch(width) {
        if (width <= 1185) {
            $('.searchbar').prependTo('.news-articles');
        } else {
            $('.searchbar').prependTo('.news-search-sidebar');
        }
    }
    moveNewsSearch( $(window).width() );
    $(window).on('resize', function() {
        moveNewsSearch( $(this).width() );
    });

	// about page show more/less
	$('.about-caitlins-smiles__text-expanded').hide();
	$('.about .read-more').on('click', function() {
		$('.about-caitlins-smiles__text-expanded').slideToggle();
		$(this).fadeOut();
	});
	$('.about .show-less').on('click', function() {
		$('.about-caitlins-smiles__text-expanded').slideToggle();
		$('.about .read-more').fadeIn();
	});

	// deliveries slider
	$('.deliveries-slider').slick({
		arrows: true,
		touchThreshold: 50,
		adaptiveHeight: true
	});
	
	// toggle the current year stats
	$('.toggle-stats').on('click', function() {
		$('.stats-container').slideToggle('slow');
		$('.toggle-stats').toggleClass('arrow-up');
	});

	// animate user to the top of the delivery totals section when the close button is clicked
	$('.close-stats').on('click', function() {
		var $target = $('#delivery-totals');

        $('html, body').stop().animate({
            'scrollTop': 0 + $target.offset().top
        }, 1200, 'swing', function() {});
	});

	// init selectric
	$('select').selectric();

	// lightbox options
	lightbox.option({
		'resizeDuration': 500,
		'wrapAround': true,
		'disableScrolling': true
	});

});