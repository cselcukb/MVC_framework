function form_kontrol_buy3(){
	var cardname= document.getElementById('kart-uzerindeki-isim').value;
	var cardno= document.getElementById('kart-no').value;
	var SKM= document.getElementById('SKM').value;
	var SKT= document.getElementById('SKT').value;
	var cv2Code= document.getElementById('cv2-kodu').value;


	if(cardname != "" && cardno != "" && SKM != "" && SKT != "" && cv2Code != ""){
            return true;
        }else{
            if(!cardname){
                alert('Kart ismi alanı doldurulmalıdır!');
                return false;
            }
            if(!cardno){
                alert('Kart No alanı doldurulmalıdır!');
                return false;
            }
            if(!SKM){
                alert('Son Kullanma Ayı alanı doldurulmalıdır!');
                return false;
            }
            if(!SKT){
                alert('Son Kullanma Yılı alanı doldurulmalıdır!');
                return false;
            }
            if(!cv2Code){
                alert('cv2 alanı doldurulmalıdır!');
                return false;
            }
        }
	
}