$(window).on('load', function() {
  $('#status').fadeOut();
  $('#preloader').delay(30).fadeOut('slow');
  $('body').delay(30).css({'overflow':'visible'});
})
$(document).ready(function() {
/*----------------------------------------
  Fancybox Plugins
------------------------------------------*/
$(document).ready(function() {
	$(".fancybox").fancybox({
		openEffect	: 'none',
		closeEffect	: 'none'
	});
});
/*----------------------------------------
  RETURN TO TOP
------------------------------------------*/
$(window).scroll(function() {
if ($(this).scrollTop() >= 50) {
    $('#return-to-top').fadeIn(200);
    } else {
    $('#return-to-top').fadeOut(200);}});
    $('#return-to-top').click(function() {
    $('body,html').animate({
   scrollTop : 0
}, 500);
});	
/*----------------------------------------
  STICKY NAV 
------------------------------------------*/
function init() {
  window.addEventListener("scroll", function(e) {
      var l = window.pageYOffset || document.documentElement.scrollTop,
          n = document.querySelector("header");
      l > 50 ? classie.add(n, "smaller") : classie.has(n, "smaller") && classie.remove(n, "smaller")
  })
}
window.onload = init();
/*----------------------------------------
  READ TEXT LIMIT
------------------------------------------*/
var showChar = 100,
    ellipsestext = "...",
    moretext = "Show more >",
    lesstext = "Show less";
$(".more").each(function() {
    var s = $(this).html();
    if (s.length > showChar) {
        var e = s.substr(0, showChar),
            t = s.substr(showChar, s.length - showChar),
            h = e + '<span class="moreellipses">' + ellipsestext + '&nbsp;</span><span class="morecontent"><span>' + t + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + "</a></span>";
        $(this).html(h)
    }
}), $(".morelink").click(function() {
    return $(this).hasClass("less") ? ($(this).removeClass("less"), $(this).html(moretext)) : ($(this).addClass("less"), $(this).html(lesstext)), $(this).parent().prev().toggle(), $(this).prev().toggle(), !1
});
/*----------------------------------------
  More CXD
------------------------------------------*/
feather.replace();
AOS.init();

/*----------------------------------------
  FLOATING ACTION BUTTON (FAB) INTERACTION
------------------------------------------*/
// Toggle FAB options menu on trigger button click
$(document).on('click', '.floating-fab-trigger', function(e) {
  e.stopPropagation();
  $(this).closest('.floating-fab-container').toggleClass('fab-active');
});

// Close FAB when clicking anywhere else on the page
$(document).on('click', function() {
  $('.floating-fab-container').removeClass('fab-active');
});

// Prevent FAB closing when interacting with options area
$(document).on('click', '.floating-fab-options', function(e) {
  e.stopPropagation();
});

/*========================================
  End All Jquary
==========================================*/	
});


