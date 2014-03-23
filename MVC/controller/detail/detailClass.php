<?php

include(dirname(__FILE__).'/../../model/detail/detailModel.php');
include(dirname(__FILE__).'/../../model/buy1/buy1Model.php');

class detailClass {

	public function preparePage(){

		global $ProjectURL, $ProjectImages, $DealImages,$_WEB_ROOT,$_SUB_ROOT,$modules;
                $model= new detailModelClass();
                $model_product= new buy1ModelClass();
                
                
            if($modules['1'] != 'id'){
                header('Location:index');
                die();
                if(!$modules['2']){
                    header('Location:'.$_SUB_ROOT.'index');
                    die();
                }
            }
                
            if($_POST){
                $product_id= db_security($_POST['urun_id']);
                $_SESSION['product_id']= $product_id;
                $color_val= db_security($_POST['renk']);
                $_SESSION['color']= $color_val;
                $size_val= db_security($_POST['boyut']);
                $_SESSION['size']= $size_val;
                $quantity_val= db_security($_POST['adet']);
                $_SESSION['quantity']= $quantity_val;
                $product_id= db_security($_POST['urun_id']);
                $_SESSION['product_id']= $product_id;
                $kaporycode_val= db_security($_POST['kaporycode']);
                if($product_id AND $color_val AND $size_val AND $quantity_val){
                    $product= $model_product->getProduct($product_id);
                    $stockrownum= $model->getStock($product_id, $color_val, $size_val, $quantity_val);
                    $colorrow= $model->fetchColor($color_val);
                    
                    
                    $_SESSION['color_name']= $colorrow['name'];
                    
                    if($stockrownum){
                    
                    $price= $product['price']* $_SESSION['quantity'];
                    $priceArray= explode('.', $price);
                    $pricePointLeft= $priceArray['0'];
                    $pricePointRight= $priceArray['1'];
                    $oldPrice= $product['old_price'] * $_SESSION['quantity'];
                    $oldPriceArray= explode('.', $oldPrice);
                    $oldPricePointLeft= $oldPriceArray['0'];
                    $oldPricePointRight= $oldPriceArray['1'];
                    if($kaporycode_val){
                        
                        $url = 'https://www.kapory.com/web_request/query_kapory_code.php';
                        $ch = curl_init($url);
                        $data= array('kapory_code' => $kaporycode_val,'firsat_id' => $product['deal_id']);

                        curl_setopt($ch, CURLOPT_POST, 1);
                        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                        $response = curl_exec($ch);
                        $responseArr= explode("-", $response);
                        curl_close($ch);
                        if($responseArr['0'] == "Yok"){
                            $errormessage= "Kapory kodu bulunmamaktadır!";
                        }else{
                            $queryToGetKCodeNum= $model->getKaporyCodeNum($kaporycode_val);
                            if($queryToGetKCodeNum){
                                if(($responseArr['1'] - $queryToGetKCodeNum['count']) <= 0){
                                    $errormessage= "Kapory kodu kulanılmıştır!";
                                }else if(($responseArr['1'] - $queryToGetKCodeNum['count']) < $_SESSION['quantity']){
                                    $errormessage= "Kapory kodu yetersizdir!";
                                }else{
                                    $_SESSION['response']= "Var";
                                    $_SESSION['kapory_code']= $kaporycode_val;
                                    header("Location:".$_SUB_ROOT."buy1");
                                }
                            }else{
                                if(($responseArr['1'] - $queryToGetKCodeNum['count']) < $_SESSION['quantity']){
                                    $errormessage= "Kapory kodu yetersizdir!";
                                }else{
                                    $_SESSION['response']= "Var";
                                    $_SESSION['kapory_code']= $kaporycode_val;
                                    header("Location:".$_SUB_ROOT."buy1");
                                }
                            }
                        }
                    }else{
                        $_SESSION['response']= "Yok";
                        header("Location:".$_SUB_ROOT."buy1");
                    }
                }else{
                    $errormessage= "Değerlere ait stok bulunmamaktadır!";
                }
                }else{
                    $errormessage= "Lütfen tüm alanları seçiniz!";
                }
            }
                $product_id= $modules['2'];
                $product_id= db_security($product_id);
                
                
                $color_val= $_SESSION['color'];
                $size_val= $_SESSION['size'];
                $quantity_val= $_SESSION['quantity'];
                
                $colors= $model->fetchColors($product_id);
                $sizes= $model->fetchSizes($product_id);
                $quantity= $model->fetchQuantity($product_id);
                
                $product= $model_product->getProduct($product_id);
                if(!$product){
                    header("Location:".$_SUB_ROOT."index");die();
                }
                $product_images= $model_product->getProductImages($product_id);
//                $product_headline_image= $model_product->getProductHeadlineImage($product_id);
                
                $price= number_format($product['price'], 2);
                $priceArray= explode('.', $price);
                $pricePointLeft= $priceArray['0'];
                $pricePointRight= $priceArray['1'];
                $oldPrice= number_format($product['old_price'], 2);
                $oldPriceArray= explode('.', $oldPrice);
                $oldPricePointLeft= $oldPriceArray['0'];
                $oldPricePointRight= $oldPriceArray['1'];
                
                $allstockrownum= $model->getAllStockNum($product_id);

	include(dirname(__FILE__).'/../../view/templates/detail/detailTemplate.php');

}

}

?>
