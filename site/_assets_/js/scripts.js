/*-----------------------------------------------------------------------------------

	Theme Name: Site Name
	Front-end developer: Richard Opiniano | Hayk Galoyan | Abdallah | Abir | Little | Raju | Suman
	Author Design: Samir Alley @samiralley | Alex Parent | Jessie Eskildsen | Toshe Vladevski | Colleen Moore | Ying Liu | Matt Hicks | Jacob Nagy | Mary Charara | Jade Wang
	Author URI: https://www.revize.com/
	Date: mm/dd/yyyy

-----------------------------------------------------------------------------------*/





(function($) {

	'use strict';

	var $window = $(window),
	$body = $('body'),
	$html = $('html'),
	$rzBarWrap = $('#rz-bar-wrap'),
	$rzBtnsContainer = $('.rz-btns-container');

	// RZ Class + remove revize bar
	if(typeof RZ !== "undefined"){
		if(RZ.login){
			$body.addClass("user-logged-in");
		} else{
			$body.addClass("user-not-logged-in");
		}
	}
	
	// needed for revize bar
	$('[data-toggle="tooltip"]').tooltip({trigger:"hover"})
	
	// Font resizer
	function textResizer() {
        var  $dec, $inc;
        $inc = $('#increase-font');
        $dec = $('#decrease-font');
        $inc.on('click', function(e) {
            return $('body').css({
                'font-size': '+=1.5'
            });
        });
        $dec.on('click', function(e) {
            return $('body').css({
                'font-size': '-=1.5'
            });
        });
        return $('#font-resizer a').on('click', function(e) {
            return e.preventDefault();
        });
    };
    textResizer();

	// Keyboard Navigation: Nav, flyout
	var isClick = false;
	$("#nav li a, #flyout  li a, a, button, .toggle, .toggle2").on('focusin', function(e) {
		if( isClick === false ) {
			$(".focused").removeClass("focused");
			$(e.currentTarget).parents("#nav li, #flyout li").addClass("focused");
			$(".opened:not(.focused) ul:visible,.opened2:not(.focused) ul:visible").slideUp().parent().removeClass("opened opened2");
		} else {
			$(".focused").removeClass("focused");
			isClick = false;
		}
	});

	// for revize buttons container
	$rzBtnsContainer.each(function(){
		var $container = $(this);
		if($container.html().trim()!=""){
			$container.closest(".has-edit-buttons").addClass('yes-has-edit-buttons');
		}
	});
	$(".has-edit-buttons").not(".yes-has-edit-buttons").removeClass("has-edit-buttons");

	// responsive views from revize bar 
	var urlParams = new URLSearchParams(window.location.search); //get all parameters
	var hidebar = urlParams.get('hidebar'); //extract the hidebar parameter - this will return NULL if hidebar isn't a parameter
	
	if(hidebar) { //check if hidebar parameter is set to anything
		$body.removeClass("user-logged-in").addClass("hide-edit-btns");
	}
		
	// prevent focused class changes on click - This way arrows wont pop when clicking nav links
	$("#nav a,#flyout a").on('mousedown',function(){
		isClick = true;
	});

	

	

	// Navigation Toggle
	var navToggle = $("#nav-toggle");
	var headerNav = $("#header-in nav");

	navToggle.on("click", function() {
		headerNav.stop().slideToggle();
		$(this).toggleClass("fa-bars fa-times");
	});






	// Menu Arrows and Toggles
	$("#nav >li>ul,#flyout >li>ul").addClass('first-level');
	$("#nav  li ul ul").addClass('second-level');
	$("#nav>li:has(ul)").each(function(){
		$('<a href="#" class="fa fa-angle-down toggle" tabindex="0" aria-haspopup="true" aria-expanded="false" id="dropdown-toggle-'+$(this).index()+'" aria-label="Show Dropdown for '+ $(this).find('a:first').text() +'"></a>').insertAfter($(this).find('a:first'));
		$(this).find('ul:first').attr('aria-labelledby', 'dropdown-toggle-'+$(this).index());
	});
	$('#nav li ul>li:has(ul)').each(function(index) {
		$('<a href="#" class="fa fa-angle-down toggle2" tabindex="0" aria-haspopup="true" aria-expanded="false" id="sub-dropdown-toggle-'+index+'" aria-label="Show Dropdown for '+ $(this).find('a:first').text() +'"></a>').insertAfter($(this).find('a:first'));
		$(this).find('ul:first').attr('aria-labelledby', 'sub-dropdown-toggle-'+index);
	});
	$('#flyout >li:has(ul)').each(function() {
		$('<a href="#" class="fa fa-angle-down toggle" tabindex="0" aria-haspopup="true" aria-expanded="false" id="flyout-dropdown-toggle-'+$(this).index()+'" aria-label="Show Flyout for '+ $(this).find('a:first').text() +'"></a>').insertAfter($(this).find('a:first'));
		$(this).find('ul:first').attr('aria-labelledby', 'flyout-dropdown-toggle-'+$(this).index());
	});

	function addNavClass() {
		if ($window.width() < 992) {
			// Insert needed for mobile
		} else{
			// Insert needed for desktop
			$('#nav ul, #flyout ul').css('display', '');
		}
	}
	addNavClass();
	$window.resize(addNavClass);

	$(".toggle").on("click keydown",function(e) {
		if (e.keyCode === 13 || e.type === 'click') {
			e.preventDefault();
			var $parent = $(this).parent();
			var $parentLi = $parent.parent();
			$parent.toggleClass('opened');
			if($parent.addClass('active') && $(this).next('.first-level').is(":visible")){
				$(this).next('.first-level').slideUp();
				$parent.removeClass('active');
				$(this).attr({'aria-expanded': 'false'});
			} else {
				$(this).attr({'aria-expanded': 'true'});
				$(".first-level").slideUp("slow");
				$parent.addClass('active');
				$(this).next('.first-level').slideToggle();
			}
		}
	});
	$(".toggle2").on("click keydown",function(e) {
		if (e.keyCode === 13 || e.type === 'click') {
			e.preventDefault();
			var $parent = $(this).parent();
			var $parentLi = $parent.parent();
			$parent.toggleClass('opened2');
			if($parent.addClass('active') && $(this).next('.second-level').is(":visible")){
				$(this).next('.second-level').slideUp();
				$parent.removeClass('active');
				$(this).attr({'aria-expanded': 'false'});
			} else {
				$(this).attr({'aria-expanded': 'true'});
				$(".second-level").slideUp("slow");
				$parent.addClass('active');
				$(this).next('.second-level').slideToggle();
			}
		}
	});

	// close nav if left
	$(".desktop *").focus(function(e){
		var $opened = $(".opened");
		var $opened2 = $(".opened2");
		if( $opened.length > 0 || $opened2.length > 0 ) {
			if( $(".opened :focus").length < 1 ){
				$opened.children("ul").slideUp();
				$opened.removeClass("opened");
				$(".opened2").removeClass("opened2");
			}
			if( $(".opened2 :focus").length < 1 ){
				$opened2.children("ul").slideUp();
				$opened2.removeClass("opened2");
			}
		}
	});

	// Flyout
	var flyout = $('#flyout'),
		flyoutwrap = $('#flyout-wrap');

	if (flyout.text().length){
		flyoutwrap.prepend('<div id="flyout-toggle" class="hidden-lg hidden-md"><i class="fa fa-bars"></i> Sub Menu</div>');
	}

	$("#flyout-toggle").on("click", function(){
		flyout.slideToggle();
		$(this).toggleClass("active");
	});


	function fillSide(){
		var whiteSpace = parseFloat($('.container').css('margin-right')) + 15;
		$('.fillLeft').css('margin-left',-whiteSpace);
		$('.fillLeft.withPadding').css('padding-left',whiteSpace);
		$('.fillRight').css('margin-right',-whiteSpace);
		$('.fillRight.withPadding').css('padding-right',whiteSpace);
	}
	fillSide();
	$window.resize(fillSide);

	/*
	* E-Notify Auto submit
	*/
	$.urlParam=function(n){var e=new RegExp("[?&]"+n+"=([^]*)").exec(window.location.href);return null==e?null:e[1]||0};
	var $enotify = $('iframe[src*="/revize/plugins/notify/notify.jsp"]');
	if( $enotify.length > 0 ){
		var emailStr = $.urlParam("email");
		if( emailStr != null ){
			$enotify.attr("src", $enotify.attr("src") + "&email=" + emailStr);
		}
	}

	// Make sure all calendars have unique ids
	$('iframe[name="calendar"]').each(function (index, calendar) {
		calendar.id = 'calendar-' + index;
	});

	// Start Frame Resizer
	function resizeIframe(height, frameElement) {
		if ( frameElement ) {
			frameElement.height = "";
			frameElement.height = height;
		}
	}

	var eventMethod = window.addEventListener ? "addEventListener" : "attachEvent";
	var eventHandler = window[eventMethod];
	var messageEvent = eventMethod === "attachEvent" ? "onmessage" : "message";
	eventHandler(messageEvent, function (e) {
		if ( Array.isArray(e.data) ) {
			if( e.data[0] === "setCalHeight" || e.data[0] === "setNotifyHeight") {
				var frames = document.querySelectorAll('iframe');
				for( var i = 0; i < frames.length; i++ ) {
					if( frames[i].contentWindow === e.source ){
						resizeIframe(e.data[1], frames[i]);
					}
				}
			}
		}
	});
	// End Frame Resizer

	// Alert Close Caching
	if ($("div.alert").length) {
		var hide = window.sessionStorage && parseInt(window.sessionStorage.getItem("alertClosed")) > 1;
		if (!hide || $(".user-logged-in").length != 0) {
			$("div.alert").addClass('show');
		}
		$("div.alert .close-alert").on('click', function(e) {
			if (window.sessionStorage) {
				window.sessionStorage.setItem("alertClosed",parseInt(window.sessionStorage.getItem("alertClosed")||0)+1);
			}
		});
	}

	// revizeWeather
	if( typeof $.fn.revizeWeather !== "undefined" ){
		$.fn.revizeWeather({
			zip: '48326',
			city_name: '',
			unit: 'f',
			success: function(weather) {
				var date = new Date();
				date = (date.getMonth() + 1) + "/" + date.getDate() + "/" + date.getFullYear();
				var html = '<span>'+date+'</span> <span class="forecast">'+weather.temp+'&deg; '+weather.forecast+'</span>';
				html += '<i class="'+weather.icon+'"></i>';

				$("#weather").html(html);
			},
			error: function(error) {
				// better to just hide the secion if there is an error
				$('.weather').hide();
				console.log(error);
			}
		});
	}

	// Tabs
	$('#tabs li a').on('click keypress', function(e) {
		if (e.keyCode === 13 || e.type === 'click') {
			$('#tabs li, #tabs-content .current').removeClass('current').removeClass('fadeInLeft');
			$(this).parent().addClass('current');

			var currentTab = $(this).attr('href');

			e.preventDefault();
			$(currentTab).addClass('current animated fadeInLeft');
			$(currentTab).find('h2').focus();
		}
	});

	
	var $translateButton = $('#translate-button');
	$translateButton.on('keydown click', function(e){
		if (e.keyCode === 13 || e.type === 'click') {
			$('#translation-links ul').stop().fadeToggle();
			$translateButton.attr('aria-expanded', !('true' === $translateButton.attr('aria-expanded')));
		}
	});

	$('#translation-links ul').on('mouseleave',function(){
		$(this).fadeOut();
		$translateButton.attr('aria-expanded', false);
	});

	function removeCookieString(value, domain) {
		domain = domain ? 'domain='+domain+'; ' : '';
		return value+'; expires=Thu, 01 Jan 1970 00:00:01 GMT; '+domain+'path=/';
	}

	function unsetGoogtransCookie() {
		for (var domains = window.location.hostname.split('.'); domains.length >= 2; domains.shift()) {
			var cookieString = removeCookieString('googtrans=unset', domains.join('.'));
			document.cookie=cookieString;
			if	(domains.length === 2) {
				cookieString = removeCookieString('googtrans=unset', '.'+domains.join('.'));
				document.cookie=cookieString;
			}
		}
		document.cookie=removeCookieString('googtrans=unset');
	}

	if (!String.prototype.startsWith) {
		String.prototype.startsWith = function(searchString, position) {
			position = position || 0;
			return this.indexOf(searchString, position) === position;
		};
	}

	if (document.cookie.split(';').some(function(item) { return item.trim().startsWith('googtrans=/auto/en'); })) {
		unsetGoogtransCookie();
	}

	// Translate Script
	var translateURL = "//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit";
	$.getScript(translateURL);
	$('#translation-links a, #english-spanish-links a').click(function() {
		var lang = $(this).data('lang');
 		var $frame = $('iframe.skiptranslate');
 		if (!$frame.length) {
 			return false;
 		}
 		var $el = $frame.contents().find('span.text:contains(' + lang + ')').parent().parent().get(0);

 		if (!$el) {
			$frame.contents().find('span.text:contains("English")').parent().parent().get(0);
 		}
 		$el.click();
 		return false;
	});

	$('#header-translate-btn').on('click', function(){
		$('#header-translate-in').stop().slideToggle();
	})


	// Tiny Slider
	if (typeof tns !== "undefined") {
		$('.tiny-slider').each(function(i, el) {
			tns({
				autoplay: true,
				autoplayTimeout: 8000,
				container: el,
				items: 1,
				lazyload: true,
				mouseDrag: true,
				lazyloadSelector: '.tns-lazy-img',
				mode: "gallery",
				controlsText: [
					'<img src="_assets_/images/slider-prev.png" alt="prev">',
					'<img src="_assets_/images/slider-next.png" alt="next">',
				],
			});
		});
	
		
	}

	// Responsive Tables
	$('.post table:not(.layout-table):not(.not-responsive)').wrap('<div class="table-responsive"></div>');
	$('.layout-table').attr('role', 'presentation');

	// Preloader
	$window.on('load', function() {

		setTimeout(function(){
			$body.addClass('loaded');
			 $('#loader-wrapper').fadeOut();
		}, 600);

	});

	$window.ready(function(){

		//#Smooth Scrolling
		$('a[href*="#"]').not('[href="#"]').not('[href*="#collapse"]').click(function(event) {
			if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				if (target.length) {
					event.preventDefault();
					$('html,body').animate({
						scrollTop: target.offset().top
					}, 1000, function() {
						var $target = $(target);
						$target.focus();
						if ($target.is(":focus")) {
							return false;
						} else {
							$target.attr('tabindex','-1');
							$target.focus();
							$target.removeAttr('tabindex');
						};
					});
				}
			}
		});


		

	}); // Ready










	
	


	// Clone icons to each navigation link/span
	var navIcons = $('#navicons .navicon');
	var firstLevelItems = $('#nav .first-level > li > a:first-child, #nav .first-level > li > span');

	navIcons.each(function(index) {
		var navIcon = $(this);
		if (index < firstLevelItems.length && navIcon.attr('src') != "") {
			$(firstLevelItems[index]).prepend(navIcon.clone());
		}
	});



	// Search
	var searchMenu = $('#search-menu');
    $('#header-search-btn').click(function(){
		searchMenu.css('transition', 'transform .5s');
        searchMenu.addClass('toggled');
    });
    $('#search-menu-close').click(function(){
        searchMenu.removeClass('toggled');
		setTimeout(function(){
			searchMenu.css('transition', 'unset');
		}, 600)
    });













	//
	var quickLinks = $('.quick-link');
	quickLinks.hover(
		function() {
			var linkTitle = $(this).find('.quick-link-title');
			linkTitle.stop().animate({ height: '100%' }, 400);
			linkTitle.addClass('hover');
		},
		function() {
			var linkTitle = $(this).find('.quick-link-title');
			linkTitle.stop().animate({ height: '0' }, 400);
			
			var self = $(this);
	
			setTimeout(function(){
				self.find('.quick-link-title').removeClass('hover');
			}, 200);
		}
	);
	
	





})(jQuery);

//
var pointerEvents = $('body').hasClass('user-logged-in') ? 'auto' : 'none';
$('.rz-btns-container').parent().css('pointer-events', pointerEvents);








/* Calendar V2 Placeholder Data --- Delete this chunk after enabling */
window.scriptToPromise = new Proxy(window.scriptToPromise, {
	apply: async function(func, ref, args) {
		args.push("//development.revize.com");
		return await func.apply(ref, args);
	}
});
if (typeof RZ === 'undefined') {
	RZ = { webspace: "localdev" };
} else {
	if (window.location.host.indexOf("development") < 0) {
		var warn = document.createElement("div");
		warn.style = "position:fixed;top:0;left:0;right:0;text-align:center;padding:15px;background:red;color:white;z-index:100000";
		warn.innerText = "Calendar V2 Placeholder data is in effect. Please delete the section and clear your cache!";
		document.body.appendChild(warn);
	}
}
window.revizeCalendar.importData = [{
	parser: function() {
		var randEvs = [];
		var rules = { events: 10, allDay: 2, days: [-2, -1, 0, 1, 2, 3], maxFuture: 12, multipleDays: 2 };
		for (var i = 0; i < rules.events; i++) {
			var start = new Date();
			start.setMinutes( start.getMinutes() + (Math.random() * 60 * 8) );
			if (rules.hasOwnProperty("days") && i < rules.days.length) {
				start.setMinutes( start.getMinutes() + (rules.days[i] * 60 * 24) );
			} else if (rules.hasOwnProperty("maxFuture")) {
				start.setMinutes( start.getMinutes() + (Math.random() * rules.maxFuture * 60 * 24) );
			}
			
			var end = new Date(start);
			if (rules.hasOwnProperty("days") && i < rules.multipleDays) {
				end.setMinutes( end.getMinutes() + (Math.random() * 60 * 24 * 3) );
			} else {
				end.setMinutes( end.getMinutes() + (Math.random() * 60 * 4) );
			}
			
			var title = "";
			for (var p = 0; p < 5 + (Math.floor(Math.random() * 8)); p++) {
				var piece = Math.random().toString(36).slice(2);
				piece = piece.slice(Math.floor(Math.random() * (piece.length - 4)));
				title += piece;
				if (Math.random() * 2 > 1) {
					title += " ";
				}
			}
			
			var ev = {
				title: title,
				start: start.toISOString(),
				end: end.toISOString(),
				calendar_displays: [1],
				image: "",
			}
			ev.color = window.revizeCalendar.fns.getEventColor(ev);
			
			randEvs.push(ev);
		}
		return randEvs;
	}
}];
/* End Calendar V2 Placeholder Data --- Delete this chunk after enabling */
