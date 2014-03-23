<?php
#Kapory - Config File
#http://www.kapory.com/


include(dirname(__FILE__)."/../helper/basic_function.php");

error_reporting(1);

$_SUB_ROOT= "/test/";
$_WEB_ROOT= "http://www.birayakkabi.com";


#Genel Ayarlar      DİKKAT DİKKAT DİKKAT $ProjectURL production da aşağıdaki gibi v1 de ise sonunda v1/ şeklinde

$ProjectURL = 'http://www.birayakkabi.com/test/';
$ProjectCSSURL = 'css/';
$ProjectJSURL = 'js/';
$ProjectJquery = 'google';
$ProjectImages = 'media/images/';
$DealImages = 'media/deal_images/';



#Administrator E-Posta
$adminmail = 'info@birayakkabi.com';

//Veritabanı Bağlantı Bilgileri
$db_type = 'mysql';
$db_server = 'localhost';
$db_name = '';
$db_user = '';
//$db_passwd = 'root';
$db_passwd = '';

$baglanti = mysql_connect($db_server,$db_user,$db_passwd) or die("Veritabanına bağlanılamadı.");
$sec = mysql_select_db($db_name);
mysql_query("SET NAMES 'UTF8'");
mysql_query("SET character_set_connection = 'UTF8'");
mysql_query("SET character_set_client = 'UTF8'");
mysql_query("SET character_set_results = 'UTF8'"); 

?>
