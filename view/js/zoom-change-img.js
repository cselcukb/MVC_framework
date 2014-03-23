function changeZoomImage(img_src){
        var image= document.getElementById('small');
	image.src= img_src;
	$(".mercek").css("background","url('" + $(".kucuk").attr("src") + "') no-repeat");
	$(".mercek").css("z-index","99");

}