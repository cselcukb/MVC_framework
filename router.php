<?php
class Router{

public function initRouting(array $modules){
    
        $class= $modules[0].'Class';
//        $class= str_replace(".php", "", $class);
        $class= str_replace("-", "_", $class);
       //echo $modules[0]; die();
	switch($modules[0]){
		case '':
			include 'MVC/controller/index/indexClass.php';
                        $class= 'indexClass';
			break;
		case 'index':
			include 'MVC/controller/index/indexClass.php';
			break;
		case 'detay':
			include 'MVC/controller/detail/detailClass.php';
			$class= "detailClass";
			break;
		case 'buy1':
			include 'MVC/controller/buy1/buy1Class.php';
			$class= "buy1Class";
			break;
		case 'buy2':
			include 'MVC/controller/buy2/buy2Class.php';
			$class= "buy2Class";
			break;
		case 'buy3':
			include 'MVC/controller/buy3/buy3Class.php';
			$class= "buy3Class";
			break;
		case 'info-tamamlandi':
			include 'MVC/controller/info-tamamlandi/info_tamamlandiClass.php';
			$class= "info_tamamlandiClass";
			break;
		case 'tukendi':
			include 'MVC/controller/tukendi/tukendiClass.php';
			$class= "tukendiClass";
			break;
                case 'ajax':
                    switch($modules[1]){
                        case 'getStockColor':
                            include 'MVC/controller/ajax/getStockColor/getStockColorClass.php';
                            $class= $modules[1]."Class";
                            break;
                        case 'fetchOrders':
                            include 'MVC/controller/ajax/fetchOrders/fetchOrdersClass.php';
                            $class= $modules[1]."Class";
                            break;
                        case 'getStockCount':
                            include 'MVC/controller/ajax/getStockCount/getStockCountClass.php';
                            $class= $modules[1]."Class";
                            break;
                        case 'getStockSize':
                            include 'MVC/controller/ajax/getStockSize/getStockSizeClass.php';
                            $class= $modules[1]."Class";
                            break;
                        case 'getStockImagesByColor':
                            include 'MVC/controller/ajax/getStockImagesByColor/getStockImagesByColorClass.php';
                            $class= $modules[1]."Class";
                            break;
                        case 'getRelatedDistricts':
                            include 'MVC/controller/ajax/getRelatedDistricts/getRelatedDistrictsClass.php';
                            $class= $modules[1]."Class";
                            break;
                    }
		case 'panel':
			switch($modules[1]){
					case '':
						include 'MVC/controller/panel/giris/girisClass.php';
						$class= "girisClass";
						break;
					case 'giris':
						include 'MVC/controller/panel/giris/girisClass.php';
						$class= $modules[1]."Class";
						break;
					case 'cikis':
						include 'MVC/controller/panel/cikis/cikisClass.php';
						$class= $modules[1]."Class";
						break;
					case 'markaliste':
						include 'MVC/controller/panel/markaliste/markalisteClass.php';
						$class= $modules[1]."Class";
						break;
					case 'urunliste':
						include 'MVC/controller/panel/urunliste/urunlisteClass.php';
						$class= $modules[1]."Class";
						break;
					case 'stokliste':
						include 'MVC/controller/panel/stokliste/stoklisteClass.php';
						$class= $modules[1]."Class";
						break;
					case 'markaekle':
						include 'MVC/controller/panel/markaekle/markaekleClass.php';
						$class= $modules[1]."Class";
						break;
					case 'urunekle':
						include 'MVC/controller/panel/urunekle/urunekleClass.php';
						$class= $modules[1]."Class";
						break;
					case 'stokekle':
						include 'MVC/controller/panel/stokekle/stokekleClass.php';
						$class= $modules[1]."Class";
						break;
					case 'markasil':
						include 'MVC/controller/panel/markasil/markasilClass.php';
						$class= $modules[1]."Class";
						break;
					case 'urunsil':
						include 'MVC/controller/panel/urunsil/urunsilClass.php';
						$class= $modules[1]."Class";
						break;
					case 'stoksil':
						include 'MVC/controller/panel/stoksil/stoksilClass.php';
						$class= $modules[1]."Class";
						break;
					case 'markaguncelle':
						include 'MVC/controller/panel/markaguncelle/markaguncelleClass.php';
						$class= $modules[1]."Class";
						break;
					case 'siparisdetay':
						include 'MVC/controller/panel/siparisdetay/siparisdetayClass.php';
						$class= $modules[1]."Class";
						break;
					case 'siparisliste':
						include 'MVC/controller/panel/siparisliste/siparislisteClass.php';
						$class= $modules[1]."Class";
						break;
					case 'siparisguncelle':
						include 'MVC/controller/panel/siparisguncelle/siparisguncelleClass.php';
						$class= $modules[1]."Class";
						break;
					case 'urunguncelle':
						include 'MVC/controller/panel/urunguncelle/urunguncelleClass.php';
						$class= $modules[1]."Class";
						break;
					case 'stokguncelle':
						include 'MVC/controller/panel/stokguncelle/stokguncelleClass.php';
						$class= $modules[1]."Class";
						break;
					case 'resimliste':
						include 'MVC/controller/panel/resimliste/resimlisteClass.php';
						$class= $modules[1]."Class";
						break;
					case 'resimguncelle':
						include 'MVC/controller/panel/resimguncelle/resimguncelleClass.php';
						$class= $modules[1]."Class";
						break;
					case 'resimekle':
						include 'MVC/controller/panel/resimekle/resimekleClass.php';
						$class= $modules[1]."Class";
						break;
					case 'resimsil':
						include 'MVC/controller/panel/resimsil/resimsilClass.php';
						$class= $modules[1]."Class";
						break;
				}
			break;
		case 'Ayagini-yorganina-gore-uzat':
			include 'MVC/controller/Ayagini-yorganina-gore-uzat/Ayagini_yorganina_gore_uzatClass.php';
			break;
		case 'Birak-bu-ayaklari':
			include 'MVC/controller/Birak-bu-ayaklari/Birak_bu_ayaklariClass.php';
			break;
		case 'Eyvah-kacirdiklarim':
			include 'MVC/controller/Eyvah-kacirdiklarim/Eyvah_kacirdiklarimClass.php';
			break;
		case 'Gizlilik-ilkeleri':
			include 'MVC/controller/Gizlilik-ilkeleri/Gizlilik_ilkeleriClass.php';
			break;
		case 'Iade-islemleri':
			include 'MVC/controller/Iade-islemleri/Iade_islemleriClass.php';
			break;
		case 'Iletisim':
			include 'MVC/controller/Iletisim/IletisimClass.php';
			break;
		case 'Kargolama':
			include 'MVC/controller/Kargolama/KargolamaClass.php';
			break;
		case 'Kullanim-kosullari':
			include 'MVC/controller/Kullanim-kosullari/Kullanim_kosullariClass.php';
			break;
		case 'Satinalma-sozlesmesi':
			include 'MVC/controller/Satinalma-sozlesmesi/Satinalma_sozlesmesiClass.php';
			break;
		case 'Siz-ne-ayaksiniz':
			include 'MVC/controller/Siz-ne-ayaksiniz/Siz_ne_ayaksinizClass.php';
			break;
                default:
                        include 'MVC/controller/URLFail/URLFailClass.php';
                        $class= "URLFailClass";
                        break;
	}
        if(!$class){
                        include 'MVC/controller/URLFail/URLFailClass.php';
                        $class= "URLFailClass";
        }
		$page= new $class();
		$page->preparePage();
}

}
?>
