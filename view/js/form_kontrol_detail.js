function form_kontrol_detail(){

	var checkbox= document.getElementById('noInputCheckbox');
	var kaporyCode= document.getElementById('kaporyCodeInput');

	var size= document.getElementById('sizeControl').value;
	var color= document.getElementById('colorControl').value;
	var quantity= document.getElementById('quantityControl').value;

        size= parseInt(size);
//        color= parseInt(color);
        quantity= parseInt(quantity);

        if(checkbox){
            if(checkbox.checked){
            if(kaporyCode.value != "" && size != "" && color != "" && color != 0 && quantity != ""){
                return true;
            }else{
                if(!kaporyCode.value || kaporyCode.value == ""){
                    alert('Kapory Kod alanı doldurulmalıdır!');
                    return false;
                }
                if(!color || color == "" || color == 0){
                    alert('Renk alanı doldurulmalıdır!');
                    return false;
                }
                if(!size || size == ""){
                    alert('Numara alanı doldurulmalıdır!');
                    return false;
                }
                if(!quantity || quantity == ""){
                    alert('Miktar alanı doldurulmalıdır!');
                    return false;
                }
            }
            }else{

            if(size != "" && color != "" && color !=  0 && quantity != ""){
                return true;
            }else{
                if(!color || color == "" || color == 0){
                    alert('Renk alanı doldurulmalıdır!');
                    return false;
                }
                if(!size || size == ""){
                    alert('Numara alanı doldurulmalıdır!');
                    return false;
                }
                if(!quantity || quantity == ""){
                    alert('Miktar alanı doldurulmalıdır!');
                    return false;
                }
            }

        }
        }else{
            if(size != "" && color != "" && color != 0 && quantity != ""){
                return true;
            }else{
                if(!color || color != "" || color == 0){
                    alert('Renk alanı doldurulmalıdır!');
                    return false;
                }
                if(!size){
                    alert('Numara alanı doldurulmalıdır!');
                    return false;
                }
                if(!quantity){
                    alert('Miktar alanı doldurulmalıdır!');
                    return false;
                }
            }
        }
	
}