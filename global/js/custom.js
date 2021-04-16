/* When the user scrolls down, hide the navbar. When the user scrolls up, show the navbar */
// var prevScrollpos = window.pageYOffset;
// window.onscroll = function() {
//    var currentScrollPos = window.pageYOffset;
//    if (prevScrollpos > currentScrollPos) {
//     document.getElementById("body").classList.add("layout-navbar-fixed");
// } else {
//    document.getElementById("body").classList.remove("layout-navbar-fixed");
// }
// prevScrollpos = currentScrollPos;
// }
function gotopage(page)
{
	document.getElementById("txtCurnpage").value=page;
	document.frmpaging.submit();
}
;(function(){
	var win = $(window),
	html = $('html'),
	body = $('body'),
	btnMenu = $('.btn--menu'),
	mainMenu = $('#siteNavigation'),
	w_mainheader = $('#main-header').width(),
	w_mainheader_container = $('#main-header-container').width(),
	ul_mainMenu = $('#ul_mainmenu').width();

	$('.btn-mobile-site-search').on('click', function () {
		$('#ip-search-home').focus();
	});

	$('.post-thumb-120, .wrap-thumb-220, .big-post-thumb, .wrap-thumb, .i-wrap-thumb, .wrap-thumb, #banner-slider .carousel-item').each(function(){
		var url = $(this).attr('data-src');
		if(url !== undefined && url.length > 0){
			$(this).css('background-image', 'url('+url+')');
			$(this).find('img').css('display', 'none');
		}
	});

	$('#banner-slider').carousel({
		// interval: 4000
	});

	$('#tab-history li, #tab-cctc li, #tab-bgd li').on('click', function(){
		$('#tab-history li, #tab-cctc li, #tab-bgd li').removeClass('active');
		$(this).addClass('active');
	});

	$('#icon-search').on('click', function(){
		// $('#frm-search-home').css('display', 'block');
	});

	$('.footer-item .item-head').on('click', function(){
		$(this).parent().toggleClass(' show');
	});

	$('.toggle_submenu').on('click', function(){
		$(this).parent().toggleClass(' open');
	});

	window.addEventListener("resize", function(){
		var w_mainheader = $('#main-header').width(),
		w_mainheader_container = $('#main-header-container').width(),
		ul_mainMenu = $('#ul_mainmenu').width();

		var m_l = w_mainheader - (ul_mainMenu + (w_mainheader - w_mainheader_container)/2);
		$('.dropdown-content').css('margin-left', m_l);
	});
})(document, window, jQuery);

function toggle_fix_main_header(e){
	var element = document.getElementById('main-header');
	if (element.classList) {
		element.classList.toggle("fixed");
	} else {
		// For IE9
		var classes = element.className.split(" ");
		var i = classes.indexOf("fixed");

		if (i >= 0)
			classes.splice(i, 1);
		else
			classes.push("fixed");
		element.className = classes.join(" ");
	}
}
$("#back-top").hide();
$(function () {
	$(window).scroll(function () {
		if ($(this).scrollTop() > 400) {
			$('#back-top').fadeIn();
		} else {
			$('#back-top').fadeOut();
		}
	});
	$('#back-top a').click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 800);
		return false;
	});
});

$(document).ready(function(){
	setTimeout(function(){
		var w_mainheader = $('#main-header').width(),
		w_mainheader_container = $('#main-header-container').width(),
		ul_mainMenu = $('#ul_mainmenu').width();

		if(w_mainheader_container >= 768){
			var m_l = w_mainheader - (ul_mainMenu + (w_mainheader - w_mainheader_container)/2);
			$('.dropdown-content').css('margin-left', m_l);
		}
	}, 300);

	$('.slider-for').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		fade: true,
		asNavFor: '.slider-nav',
		prevArrow: '<a class="carousel-control-prev" href="javascript:void(0)"></a>',
		nextArrow: '<a class="carousel-control-next" href="javascript:void(0)"></a>',
	});
	$('.slider-nav').slick({
		slidesToShow: 6,
		slidesToScroll: 1,
		asNavFor: '.slider-for',
		dots: false,
		arrows: false,
		centerMode: true,
		focusOnSelect: true,
		centerPadding : '50px',
		responsive: [
		{
			breakpoint: 768,
			settings: {
				arrows: false,
				centerMode: true,
				centerPadding: '40px',
				slidesToShow: 3
			}
		},
		{
			breakpoint: 480,
			settings: {
				arrows: false,
				centerMode: true,
				centerPadding: '40px',
				slidesToShow: 1
			}} ]
		});
});