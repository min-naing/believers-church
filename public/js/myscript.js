$(function(){
	var nav = $('#navigation') ;
	var nav_top = $('#navigation').css('top') ;
	var w_nav_ul = $('#navigation > ul').css('width') ;
	window.onscroll = show ;

	function show() {
		if(window.pageYOffset > 200) {
			nav.css({'position':'fixed','top':'0px','left':'0px','width':'100%'}) ;
			$('#navigation > ul').css({'width':'70%','margin':'0px auto'}) ;
			$('#navigation > ul > li').css('width','14%') ;
		} else {
			nav.css({'position':'relative','top':nav_top}) ;
			$('#navigation > ul').css('width',w_nav_ul) ;
		}
	}
}) ;