<!-- F O O T E R - N A V M E N U -->
<div class="footer-navbar">
</div>
<!-- # F O O T E R - N A V M E N U -->

<!-- C O P Y R I G H T -->
<div class="copyright">
	<center>
		<p>Copyright 2013 © </p>
	</center>
</div>
<!-- # C O P Y R I G H T -->
           

<?php $file=fopen(dirname(__FILE__)."/../../controller/".$module_name."/includes/js", "r");
            while(($jsname = fgets($file, 4096)) !== false){ ?>
           <script src="<?php echo $_SUB_ROOT;?>view/js/<?php echo $jsname;?>"></script>     
<?php             }
            fclose($file);
?>
            