function fetchOrders(orders_type){

    if(orders_type){

	var xmlHttp;
	if(window.XMLHttpRequest){
		xmlHttp= new XMLHttpRequest();
	}else{
		xmlHttp= new ActiveXObject('Microsoft.XMLHTTP');
	}
	xmlHttp.onreadystatechange= function(){
	if(xmlHttp.readyState==4 && xmlHttp.status==200 ){
		var ordersTable= document.getElementById('ordersPanelTable');
		ordersTable.innerHTML= xmlHttp.responseText;
	}
}

    xmlHttp.open("POST", "/ajax/fetchOrders", true);
    xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlHttp.send("type="+ orders_type);

}

}
