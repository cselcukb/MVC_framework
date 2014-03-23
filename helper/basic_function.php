<?php


function db_security($value){
    
    return htmlspecialchars(strip_tags(mysql_real_escape_string($value)));
}
 

// Selcuk - Son
// Session Kontrol - Güncelleme Gerekiyor !!!
function panelSessionKontrol(){		
	$IDn = $_SESSION['ID'];
	$IDnCookie= $_COOKIE['ID'];
	if(empty($IDn) AND empty($IDnCookie)){
		header ("Location: giris.php");
	}
}

function fetchCategories(){
    
        global $ProjectURL, $ProjectImages;

        $SQL = mysql_query("select ID, kategori_adi, kategori_imaj from kategori");

        $categoryRow= array();

        while ( $rows = mysql_fetch_array($SQL)) {

            $categoryRow[]= $rows;
//            print_r($rows);

                }

        return $categoryRow;
}


function fetchCities(){
    
        global $ProjectURL, $ProjectImages;

	$SQL = mysql_query("select ID, il_adi, il_seo from il order by ID asc");

        $cityRow= array();

        while ( $rows = mysql_fetch_array($SQL)) {

            $cityRow[]= $rows;

                }

        return $cityRow;
}

function CategoryList(){
	
		global $ProjectURL, $ProjectImages;

		$SQL = mysql_query("select ID, kategori_adi, kategori_imaj from kategori");
		
		while ( $rows = mysql_fetch_array($SQL)) {
			
		$ID = $rows[ID];
		$kategori_adi = $rows[kategori_adi];
		$kategori_imaj = $rows[kategori_imaj];	
		
		echo '<li class="kategori-dropdown"><a href="'.$ProjectURL.'kategori-icerik.php?ID='.$ID.'"><span>'.$kategori_adi.'</span></a></li>';
			
			
			}
		
		}
                
function checkAuthentication(){
	global $ProjectURL, $ProjectImages;
    
        
	if($_SESSION["ID"]){
		$eposta = $_SESSION['eposta'];
        	$ad = $_SESSION['ad'];
       		$soyad = $_SESSION['soyad'];
	}else{
		$eposta = $_COOKIE['eposta'];
        	$ad = $_COOKIE['ad'];
       		$soyad = $_COOKIE['soyad'];
	}
        
	if(!empty($ad) && !empty($soyad)){
		$kullanici = $ad.' '.$soyad;
	}else{
		$kullanici = $eposta;
	}
        
        if(empty($eposta)){
            return 0;
        }else{
            return $kullanici;
        }
        
}

function valid_email( $str )
{
return ( ! preg_match ( "/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str ) ) ? FALSE : TRUE;
}


function insertLogtoDB($table_name, $related_object_id, $action_name, $operator_id){
	$queryToInsert= 'INSERT INTO log(table_name, related_object_id,action_name,operator_id,operation_time) VALUES("'.$table_name.'",'.$related_object_id.',"'.$action_name.'",'.$operator_id.',"'.date('Y-m-d H:i:s', time()).'")';
	
	if(mysql_query($queryToInsert)){
	}else{
		echo mysql_error(); die();
	}
}
	
	


?>
