<head>
	<meta name="" http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<meta name="description" content="">
    <meta name="author" content="">
	<title></title>
	
	<!-- CSS -->
	<style type="text/css">
		@import url ("<?php echo $_SUB_ROOT;?>view/css/reset.css");
	</style>
    <link rel="shortcut icon" href="view/ico/favicon.png">
	<link media="screen" type="text/css" rel="stylesheet" href="<?php echo $_SUB_ROOT;?>view/css/bootstrap.css"/>
	<link media="screen" type="text/css" rel="stylesheet" href="<?php echo $_SUB_ROOT;?>view/css/panel.css"/>
	<!-- #CSS -->
	
	<!-- FONT ->
	<link href='http://fonts.googleapis.com/css?family=Poller+One' rel='stylesheet' type='text/css'>
	<!-- #FONT -->
	
	<!-- JS -->
	<script src="<?php echo $_SUB_ROOT;?>view/js/less-1.5.0.min.js"></script>
	<!-- #JS -->
        
<?php $file=fopen(dirname(__FILE__)."/../../controller/panel/".$module_name."/includes/js", "r");
            while(($jsname = fgets($file, 4096)) !== false){ ?>
           <script src="<?php echo $_SUB_ROOT;?>view/js/<?php echo $jsname;?>"></script>     
<?php             }
            fclose($file);
?>
<!--           <script type="text/javascript">//<![CDATA[
CKEDITOR.replace('editor1', {  "RootPath":"/test/view/"});
//]]></script>-->
        
</head>
