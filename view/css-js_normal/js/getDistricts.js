function fetchRelatedDistricts(city_id){var xmlHttp;if(window.XMLHttpRequest){xmlHttp=new XMLHttpRequest()}else{xmlHTTP=new ActiveXObject("Microsoft.XMLHTTP")}xmlHttp.onreadystatechange=function(){if(xmlHttp.readyState==4&&xmlHttp.status==200){var district_input=document.getElementById("districtSelect");district_input.outerHTML='<select id="districtSelect" class="form-control" name="districtControl"><option value="0">İlçe</option>'+xmlHttp.responseText+"<select>"}};xmlHttp.open("GET","/ajax/getRelatedDistricts?city_id="+city_id,true);xmlHttp.send()};