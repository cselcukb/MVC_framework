function simulateFormBySize(product_id){
	var size= document.getElementById('sizeControl').value;

	var xmlHttp;
	if(window.XMLHttpRequest){
		xmlHttp= new XMLHttpRequest();
	}else{
		xmlHTTP= new ActiveXObject('Microsoft.XMLHTTP');
	}
	xmlHttp.onreadystatechange= function(){
	if(xmlHttp.readyState==4 && xmlHttp.status==200 ){
		var color_input= document.getElementById('colorControl');
		color_input.outerHTML= '<select id="colorControl" class="form-control" onchange="simulateFormByColor('+product_id+')" name="renk">'+'<option value="0">Renk</option>'+
xmlHttp.responseText+'</select>';
	}
}

xmlHttp.open("GET", "/ajax/getStockColor?size_id="+size+"&product_id="+product_id, true);
xmlHttp.send();

getStockCount(product_id);
}

function simulateFormByColor(product_id){
	var color= document.getElementById('colorControl').value;
color= parseInt(color);
    if(color){
                var xmlHttp;
                if(window.XMLHttpRequest){
                        xmlHttp= new XMLHttpRequest();
                }else{
                        xmlHTTP= new ActiveXObject('Microsoft.XMLHTTP');
                }
                xmlHttp.onreadystatechange= function(){
                if(xmlHttp.readyState==4 && xmlHttp.status==200 ){
                        var size_input= document.getElementById('sizeControl');
                        size_input.outerHTML= '<select id="sizeControl" class="form-control" onchange="getStockCount('+product_id+')" name="boyut">'+'<option value="0">Numara</option>'+
xmlHttp.responseText+'</select>';
                }
        }

        xmlHttp.open("GET", "/ajax/getStockSize?color_id="+ color+"&product_id="+product_id, true);
        xmlHttp.send();

        getStockCount(product_id);
        fetchThumbnails(product_id);
        }
}


function fetchThumbnails(product_id){

	var color= document.getElementById('colorControl').value;

	var xmlHttp;
	if(window.XMLHttpRequest){
		xmlHttp= new XMLHttpRequest();
	}else{
		xmlHTTP= new ActiveXObject('Microsoft.XMLHTTP');
	}
	xmlHttp.onreadystatechange= function(){
	if(xmlHttp.readyState==4 && xmlHttp.status==200 ){
		var thumbnails= document.getElementById('thumbnails');
                var response= xmlHttp.responseText;
                var responseArr= response.split("*");
		thumbnails.innerHTML= responseArr[1];
                var image= document.getElementById('small');
                var imageview= document.getElementById('imageview');
                var src= image.src;
                imageview.innerHTML='<img id="small" class="kucuk" alt="product" src="/view/deal_images/'+responseArr[0]+
'" style="position: absolute; top: 0px; left: 0px;"><img src="/view/deal_images/'+responseArr[0]+'" style="position: relative;">';
                image.src= "/view/deal_images/"+ responseArr[0];
                $(".mercek").css("background","url('" + $(".kucuk").attr("src") + "') no-repeat");
                $('#thumbnails').simplethumbs({slideshow: '#imageview'});
	}
}

xmlHttp.open("GET", "/ajax/getStockImagesByColor?color_id="+ color+"&product_id="+product_id, true);
xmlHttp.send();

}


function getStockCount(product_id){
	var color= document.getElementById('colorControl').value;
	var size= document.getElementById('sizeControl').value;

	var xmlHttp;
	if(window.XMLHttpRequest){
		xmlHttp= new XMLHttpRequest();
	}else{
		xmlHTTP= new ActiveXObject('Microsoft.XMLHTTP');
	}
	xmlHttp.onreadystatechange= function(){
	if(xmlHttp.readyState==4 && xmlHttp.status==200 ){
                var quantity= xmlHttp.responseText;
		var quantity_input= document.getElementById('quantityControl');

                quantity= parseInt(quantity);

                var text= "";

                if(quantity >= 5){
                    var i;
                    for(i=1; i<=5; i++){
                        text= text+ '<option value="'+i+'">'+i+'</option>';
                    }
                }else{
                    var i;
                    for(i=1; i<=quantity; i++){
                        text= text+ '<option value="'+i+'">'+i+'</option>';
                    }
                }
                    quantity_input.outerHTML= '<select id="quantityControl" class="form-control" name="adet">'+'<option value="0">Adet</option>'+
text+'</select>';
	}
}

xmlHttp.open("GET", "/ajax/getStockCount?color_id="+ color + "&size_id=" + size + "&product_id=" + product_id, true);
xmlHttp.send();
}

function flashKaporyCodeInput(){
    document.getElementById('KaporyUsageCheckbox').style.display= "none";
    document.getElementById('noInputCheckbox').checked= true;
    document.getElementById('inputCheckbox').checked= true;
    document.getElementById('KaporyUsageInputText').className= "";
    document.getElementById('KaporyUsageInputText').style.display= "block";
}



function hideKaporyCodeInput(){
    document.getElementById('KaporyUsageCheckbox').style.display= "block";
    document.getElementById('noInputCheckbox').checked= false;
    document.getElementById('inputCheckbox').checked= false;
    document.getElementById('KaporyUsageInputText').className= "hidden";
    document.getElementById('KaporyUsageInputText').style.display= "";
}