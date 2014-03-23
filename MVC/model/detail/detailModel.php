<?php

class detailModelClass{
    
    
    public function fetchColors($product_id){
        
        $queryToSelect= 'SELECT DISTINCT c.name AS color_name, c.id AS color_id FROM stock s INNER JOIN color c ON c.id=s.color_id WHERE s.product_id='.$product_id;
        $queryToSelect= mysql_query($queryToSelect) or die(mysql_error());

        $colors= array();

        $colors= "";

        while($row= mysql_fetch_array($queryToSelect)){
            $colors[]= $row;
        }
        return $colors;
    }
    
    
    public function fetchQuantity($product_id){
        
        $queryToSelect= 'SELECT SUM(quantity) AS count FROM stock WHERE product_id='.$product_id;
        $queryToSelect= mysql_query($queryToSelect) or die(mysql_error());

        $quantity= array();

        $quantity= "";

        while($row= mysql_fetch_array($queryToSelect)){
            $quantity[]= $row;
        }
        return $quantity;
    }
    
    public function fetchSizes($product_id){
        
        $queryToSelect= 'SELECT DISTINCT size AS size FROM stock WHERE product_id='. $product_id;
        $queryToSelect= mysql_query($queryToSelect) or die(mysql_error());

        $sizes= array();

        $sizes= "";

        while($row= mysql_fetch_array($queryToSelect)){
            $sizes[]= $row;
        }
        return $sizes;
    }
    
    public function getStock($product_id, $color_id, $size, $quantity){
        $queryToSelect= 'SELECT * FROM stock WHERE product_id='.$product_id.' AND color_id='.$color_id.' AND size='.$size.' AND quantity >='.$quantity;
//        echo $queryToSelect;
        $queryToSelect= mysql_query($queryToSelect);
        $rownum= mysql_num_rows($queryToSelect);
        
        return $rownum;
    }
    
    public function getAllStockNum($product_id ){
        $queryToSelect= 'SELECT * FROM stock WHERE product_id='.$product_id;
//        echo $queryToSelect;
        $queryToSelect= mysql_query($queryToSelect);
        $rownum= mysql_num_rows($queryToSelect);
        
        return $rownum;
    }
    
    public function fetchColor($color_id){
        
        $queryToSelect= 'SELECT * FROM color WHERE id='.$color_id;
        $queryToSelect= mysql_query($queryToSelect);
        $colorrow= mysql_fetch_assoc($queryToSelect);
        
        return $colorrow;
    }
    
    public function getKaporyCodeNum($kapory_code){
        
        $queryToSelect= 'SELECT SUM(count) AS count FROM orders WHERE kapory_code="'.$kapory_code.'" AND status=3 ';
        $queryToSelect= mysql_query($queryToSelect);
        
        return mysql_fetch_assoc($queryToSelect);
        
    }
    
}
?>