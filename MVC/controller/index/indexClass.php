<?php

include(dirname(__FILE__).'/../../model/index/indexModel.php');

class indexClass {

	public function preparePage(){

		global $ProjectURL, $ProjectImages, $DealImages,$_WEB_ROOT,$_SUB_ROOT;
                  $model= new indexModelClass();
                  
                  $femaleHeadline= $model->fetchHeadlineFemaleP();
                  $maleHeadline= $model->fetchHeadlineMaleP();
                  
                  
                $oldPriceF= number_format($femaleHeadline['p_old_price'], 2);
                $oldPriceFArray= explode('.', $oldPriceF);
                $oldPriceFPointLeft= $oldPriceFArray['0'];
                $oldPriceFPointRight= $oldPriceFArray['1'];
                  
                $oldPriceM=  number_format($maleHeadline['p_old_price'], 2);
                $oldPriceMArray= explode('.', $oldPriceM);
                $oldPriceMPointLeft= $oldPriceMArray['0'];
                $oldPriceMPointRight= $oldPriceMArray['1'];
                  
                  $HeadlineAllImages= $model->fetchHeadlineAllImage($femaleHeadline['p_id'], $maleHeadline['p_id']);

	include(dirname(__FILE__).'/../../view/templates/index/indexTemplate.php');

}

}

?>