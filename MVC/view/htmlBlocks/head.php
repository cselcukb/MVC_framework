<head>
	<meta name="" http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<meta name="description" content="">
    <meta name="author" content="">
    <?php $file=fopen(dirname(__FILE__)."/../../controller/".$module_name."/includes/title", "r");
            $title= fgets($file);
            fclose($file); ?>
	<title><?php echo $title; ?></title>
	
	<!-- CSS -->
	<style type="text/css">
		@import url ("<?php echo $_SUB_ROOT;?>view/css/reset.css");
	</style>
    <link rel="shortcut icon" href="view/img/favicon.png">
	<link media="screen" type="text/css" rel="stylesheet" href="<?php echo $_SUB_ROOT;?>view/css/bootstrap.css"/>
	<link media="screen" type="text/css" rel="stylesheet" href="<?php echo $_SUB_ROOT;?>view/css/bootstrap-theme.css"/>
        <link media="screen" type="text/css" rel="stylesheet/less" href="<?php echo $_SUB_ROOT;?>view/css/style.less"/>	 <!-- CSS --> 
                
<?php $file=fopen(dirname(__FILE__)."/../../controller/".$module_name."/includes/less", "r");
            while(($cssname = fgets($file, 4096)) !== false){ ?>
                <link media="screen" type="text/css" rel="stylesheet/less" href="<?php echo $_SUB_ROOT;?>view/css/<?php echo $cssname; ?>"/>   
<?php             }
            fclose($file);
?>
	
	<!-- FONT -->
	<link href='https://fonts.googleapis.com/css?family=Poller+One|Great+Vibes&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<!-- #FONT -->
	
	<!-- JS -->
	<script src="<?php echo $_SUB_ROOT;?>view/js/less-1.5.0.min.js"></script>
	

<?php $file=fopen(dirname(__FILE__)."/../../controller/".$module_name."/includes/css", "r");
            while(($cssname = fgets($file, 4096)) !== false){ ?>
                <link type="text/css" href="<?php echo $_SUB_ROOT;?>view/css/<?php echo $cssname; ?>" rel="stylesheet"/>   
<?php             }
            fclose($file);
?>
</head>