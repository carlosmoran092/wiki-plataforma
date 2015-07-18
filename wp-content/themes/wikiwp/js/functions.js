jQuery(document).ready(function ($) {
	/* NAVIGATION */
    var pull_side = $('.primary-menu-side .nav-menu-button'),
        menu = $('.primary-menu'),
        menu_side = $('.primary-menu-side'),
        menuHeight = menu.height(),
        menu_side_link = $('.primary-menu-side ul li a'),
        pull_aside = $('aside .aside-menu-button'),
        aside = $('aside'),
        menuSmallTop = 120, // small header
        edgeMargin = 20, // margin above the top or margin from the end of the page
        header = $('.header-container'),
        container = $('.container-fluid'),
        $window = $(window);

    // mobile
	$(pull_side).on('click', function () {
        container.removeClass('container-aside-open');
		aside.removeClass('aside-open');
        pull_aside.removeClass('aside-menu-button-active');
        $(this).toggleClass('nav-menu-button-active');
        menu_side.toggleClass('main-menu-active');
		menu.toggleClass('primary-menu-side-open');
        container.toggleClass('container-menu-side-open');
	});
    
    $(pull_aside).on('click', function () {
        container.removeClass('container-menu-side-open');
        menu.removeClass('primary-menu-side-open');
        pull_side.removeClass('nav-menu-button-active');
        $(this).toggleClass('aside-menu-button-active');
		aside.toggleClass('aside-open');
        header.toggleClass('container-aside-open');
        container.toggleClass('container-aside-open');
	});

	$(menu_side_link).on('click', function () {
		pull_side.toggleClass('nav-menu-button-active');
        menu_side.toggleClass('main-menu-active');
		menu.toggleClass('primary-menu-side-open');
        container.toggleClass('container-menu-side-open');
	});

	$(window).resize(function () {
		var w = $(window).width();
		if (w > 320 && menu.is(':hidden')) {
			menu_side.removeAttr('style');
		}
	});
    

    if ($window.width() < 1200) {
        $(menu).addClass('mobile-menu');
    } else {
        menu.removeClass('mobile-menu');
        pull_side.removeClass('nav-menu-button-active');
        pull_aside.removeClass('aside-menu-button-active');
		menu_side.removeAttr('style');
		menu.removeClass('main-menu-active');
        menu.removeClass('primary-menu-side-open');
		container.removeClass('container-menu-side-open');
        container.removeClass('container-menu-side-open');
        aside.removeClass('aside-open');
    }

    $(window).on('resize', function () {
        if ($window.width() < 1200) {
            $(menu).addClass('mobile-menu');
        } else {
            menu.removeClass('mobile-menu');
            pull_side.removeClass('nav-menu-button-active');
            pull_aside.removeClass('aside-menu-button-active');
            menu_side.removeAttr('style');
            menu.removeClass('main-menu-active');
            menu.removeClass('primary-menu-side-open');
            header.removeClass('container-menu-side-open');
            header.removeClass('container-aside-open');
            container.removeClass('container-menu-side-open');
            container.removeClass('container-aside-open');
            aside.removeClass('aside-open');
        }
    });    
});