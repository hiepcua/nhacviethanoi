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
	$('.header-cart').on('click', function(){
		$('.backdrop__body-backdrop___1rvky, #cart-sidebars').addClass('active');
	});
	$('.backdrop__body-backdrop___1rvky, .cart_btn-close').on('click', function(){
		$('.backdrop__body-backdrop___1rvky, #cart-sidebars').removeClass('active');
	});

	$('.awe-section-3 .products-view-grid, .evo-owl-product2').slick({
		slidesToShow: 5,
		slidesToScroll: 1,
		arrows: true,
		prevArrow: '<a class="carousel-control-prev" href="javascript:void(0)"></a>',
		nextArrow: '<a class="carousel-control-next" href="javascript:void(0)"></a>',
	});

	$('.evo-owl-product3').slick({
		slidesToShow: 4,
		slidesToScroll: 1,
		arrows: true,
		prevArrow: '<a class="carousel-control-prev" href="javascript:void(0)"></a>',
		nextArrow: '<a class="carousel-control-next" href="javascript:void(0)"></a>',
	});

	$(".not-dqtab").each( function(e){
		var $this1 = $(this);
		var datasection = $this1.closest('.not-dqtab').attr('data-section');
		$this1.find('.tabs-title li:first-child').addClass('current');
		var view = $this1.closest('.not-dqtab').attr('data-view');
		$this1.find('.tab-content').first().addClass('current');

		var _this = $(this).find('.content .button_show_tab');
		var droptab = $(this).find('.tab-desktop');

		$(_this).click(function(){ 
			if ($(droptab).hasClass('evo-open')) {
				$(droptab).addClass('evo-close').removeClass('evo-open');
			}else {
				$(droptab).addClass('evo-open').removeClass('evo-close');
			}
			$(this).toggleClass('active');
		});
		$this1.find('.tabs-title.ajax li').click(function(){
			$(droptab).addClass('evo-close').removeClass('evo-open');
			$('.content .button_show_tab').removeClass('active');
			var $this2 = $(this),
			tab_id = $this2.attr('data-tab'),
			url = $this2.attr('data-url');
			var etabs = $this2.closest('.e-tabs');
			etabs.find('.tab-viewall').attr('href',url);
			etabs.find('.tabs-title li').removeClass('current');
			etabs.find('.tab-content').removeClass('current');
			$this2.addClass('current');
			etabs.find("."+tab_id).addClass('current');
			if(!$this2.hasClass('has-content')){
				$this2.addClass('has-content');		
				getContentTab(url,"."+ datasection+" ."+tab_id,view);
			}
		});
	});
	$('.not-dqtab .next').click(function(e){
		var count = 0
		$(this).parents('.content').find('.tab-content').each(function(e){
			count +=1;
		})
		var str = $(this).parent().find('.tab-titlexs').attr('data-tab'),
		res = str.replace("tab-", ""),
		datasection = $(this).closest('.not-dqtab').attr('data-section');
		res = Number(res);
		if(res < count){
			var current = res + 1;
		}else{
			var current = 1;
		}
		action(current,datasection);
	})
	$('.not-dqtab .prev').click(function(e){
		var count = 0
		$(this).parents('.content').find('.tab-content').each(function(e){
			count +=1;
		})
		var str = $(this).parent().find('.tab-titlexs').attr('data-tab'),
		res = str.replace("tab-", ""),
		datasection = $(this).closest('.not-dqtab').attr('data-section'),
		res = Number(res);	
		if(res > 1){
			var current = res - 1;
		}else{
			var current = count;
		}
		action(current,datasection);
	})

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
			}
		} ]
	});
});