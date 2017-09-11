jQuery(function() {
    var showFlug = false;
    var topBtn = jQuery('.tothetop');
    //最初はボタン位置をページ外にする
    topBtn.css('bottom', '-100px');
    var showFlug = false;
    //スクロールが100に達したらボタン表示
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > 100) {
            if (showFlug == false) {
                showFlug = true;
                topBtn.stop().animate({'bottom' : '0px'}, 200);
            }
        } else {
            if (showFlug) {
                showFlug = false;
                topBtn.stop().animate({'bottom' : '-100px'}, 200);
            }
        }
    });
});


$(function() {
scrollToAnchor();
});

function scrollToAnchor() {
	$("a[href*=#]").click(function() {
		var target = this.hash;
		var offset = $(target).offset().top;
		if (offset > $(document).height()-$(window).height()) {
			offset = $(document).height()-$(window).height();
		}
		$("html, body").animate({scrollTop:offset}, {duration:2000, easing:"easeOutQuint"});
		return false;
	});
}