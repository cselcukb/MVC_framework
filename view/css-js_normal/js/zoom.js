$(document).ready(function(){
	var gercek_uzunluk = 0;
	var gercek_genislik = 0;
	$(".mercek").css("background","url('" + $(".kucuk").attr("src") + "') no-repeat");
	$(".buyutec").mousemove(function(e){
		if(!gercek_uzunluk && !gercek_genislik){
			var image_object = new Image();
			image_object.src = $(".kucuk").attr("src");
			gercek_uzunluk = image_object.width;
			gercek_genislik = image_object.height;
		}
		else{
			var image_object = new Image();
			image_object.src = $(".kucuk").attr("src");
			var buyutec_offset = $(this).offset();
			var mx = e.pageX - buyutec_offset.left;
			var my = e.pageY - buyutec_offset.top;
			if(mx < $(this).width() && my < $(this).height() && mx > 0 && my > 0)
			{$(".mercek").fadeIn(100);}
			else{$(".mercek").fadeOut(100);}
			if($(".mercek").is(":visible")){
				var rx = Math.round(mx/$(".kucuk").width()*gercek_uzunluk - $(".mercek").width()/2)*-1;
				var ry = Math.round(my/$(".kucuk").height()*gercek_genislik - $(".mercek").height()/2)*-1;
				var bgp = rx + "px " + ry + "px";
				var px = mx - $(".mercek").width()/2;
				var py = my - $(".mercek").height()/2;
				$(".mercek").css({left: px, top: py, backgroundPosition: bgp});
			}
		}
	})
})
