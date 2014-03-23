<?php

class indexModelClass{
    
    public function fetchHeadlineFemaleP(){
        $queryToSelect= 'SELECT p.id AS p_id,p.title AS p_title,p.price AS p_price,p.old_price AS p_old_price, p_i.image AS p_i_image FROM product p INNER JOIN product_images p_i ON p.id=p_i.product_id WHERE p.caption=1 AND p.genre="B" AND p_i.headline=1 LIMIT 1 ';
        $queryToSelect= mysql_query($queryToSelect) or die(mysql_error());
        
        $rows= mysql_fetch_assoc($queryToSelect);
        
        return $rows;
    }
    
    public function fetchHeadlineMaleP(){
        $queryToSelect= 'SELECT p.id AS p_id,p.title AS p_title,p.price AS p_price,p.old_price AS p_old_price, p_i.image AS p_i_image FROM product p INNER JOIN product_images p_i ON p.id=p_i.product_id WHERE p.caption=1 AND p.genre="E" AND p_i.headline=1 LIMIT 1 ';
        $queryToSelect= mysql_query($queryToSelect) or die(mysql_error());
        
        $rows= mysql_fetch_assoc($queryToSelect);
        
        return $rows;
    }
    public function fetchHeadlineAllImage($f_p_id, $m_p_id){
        
        $queryToSelect= 'SELECT * FROM product_images WHERE product_id='.$f_p_id.' OR product_id='.$m_p_id;
        $queryToSelect= mysql_query($queryToSelect) or die(mysql_error());

        $images= array();

        $images= "";

        while($row= mysql_fetch_array($queryToSelect)){
            $images[]= $row;
        }
        return $images;
    }
    
}
?>