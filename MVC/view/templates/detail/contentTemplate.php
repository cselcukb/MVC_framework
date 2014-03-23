<?php if($errormessage){ ?>
<div class="alert alert-danger"><?php echo $errormessage; ?></div>
<?php } ?>
<?php if($allstockrownum <1 ){ ?>
<div class="alert alert-danger"><?php echo 'Stok tükendi'; ?></div>
<?php } ?>
<div id="detail-body">
	<!-- D E T A Y   S A Y F A S I   S O L   B Ö L Ü M -->
	<div class="left-info">
		<div style="position:absolute; margin:374px 0 0 415px;">
			<img src="<?php echo $_SUB_ROOT; ?>view/img/ucretsiz-kargo.png" alt="Ücretsiz Kargo"/>
		</div>
		<div class="product-info">
			<center>
				<h4 style="margin:0;"><?php echo $product['title']; ?></h4>
				<!--  P H O T O   &   T H U M B N A I L S -->
				<div class="buyutec">
					<div class="mercek"></div>
					<div id="imageview"> <?php foreach($product_images AS $product_image){ ?><?php if($product_image['headline']){ $active_image=$product_image['image']; } ?><?php } ?> 
						<img id="small" class="kucuk" src="<?php echo $_SUB_ROOT; ?>view/deal_images/<?php echo $active_image; ?>" alt="product" /> 
					</div> 
				</div>
				<div id="thumbnails" class="thumbnails"> 
					<?php foreach($product_images AS $product_image){ ?>
					<a href="<?php echo $_SUB_ROOT; ?>view/deal_images/<?php echo $product_image['image']; ?>" <?php if($product_image['headline']){ ?>  class="active" <?php } ?> onClick="changeZoomImage(this.href);"><img src="<?php echo $_SUB_ROOT; ?>view/deal_images/<?php echo $product_image['image']; ?>" alt="thumbnail01" /></a> 
					<?php } ?>
				</div>
				<!--  # P H O T O   &   T H U M B N A I L S -->
			</center>

			<a href="#information">
				<h4>Ürün Bilgileri <span class="glyphicon glyphicon-hand-down"></span></h4>
			</a>
			<a name="information"></a>
			<div style="width:400px;">
				<?php echo $product['content']; ?>
			</div>
		</div>
	</div>
	<!-- #D E T A Y   S A Y F A S I   S O L   B Ö L Ü M -->
	
	<!-- D E T A Y   S A Y F A S I   S A Ğ   B Ö L Ü M -->
	<div class="right-info">
		<div class="buying-info">
			<form action="#" method="POST"  onSubmit="return form_kontrol_detail()">
				<?php if($product['photo']){ ?><img src="<?php echo $_SUB_ROOT; ?>view/deal_images/<?php echo $product['photo']; ?>" alt="brand logo" style="width:160px; height:86px;" /><?php } ?>
				<div style="margin:10px 0 20px;">
					<?php if($product['deal_id'] != "" && $product['deal_id'] != "0"){ ?>
					<!-- Aşağıdaki CENTER tagları arasında checkboxlara bağlı olarak gözükmesi gereken alanlar mevcut. Detaylar için benle iletişime geç!!! -->
					<center class="" id="KaporyUsageCheckbox">
						<hr/>
						<h2 style="margin-top:-10px;"><?php echo $oldPricePointLeft; ?><span style="font-size:0.7em;">.<?php echo $oldPricePointRight; ?> TL</span></h2>
						<input type="checkbox" id="noInputCheckbox" onClick="flashKaporyCodeInput()" <?php if($allstockrownum <1 ){ ?> disabled <?php } ?> />
						<span style="font-size:.85em;">Kapory kodu kullan</span>
						<!--a href="https://www.kapory.com/kampanya-detay.php?ID=<//?php echo $product['deal_id'];?>" target="_blank" title="Kapory'den alacağınız kupon ile bu ürüne indirimli sahip olabilirsiniz."-->
						<a class="kapory-bilgi" href="#" rel="popover" data-content="Kapory'den alacağınız kupon ile bu ürüne indirimli sahip olabilirsiniz." title="" data-placement="top" >
							<span class="glyphicon glyphicon-question-sign"></span>
						</a>
						<hr/>
					</center>
					<center class="hidden" id="KaporyUsageInputText">
						<h4> <?php echo $oldPricePointLeft; ?><span style="font-size:0.7em;">.<?php echo $oldPricePointRight; ?> TL </span></h4>
						<h2 style="margin-top:-10px;"><?php echo $pricePointLeft; ?><span style="font-size:0.7em;">.<?php echo $pricePointRight; ?> TL</span></h2>
						<input type="checkbox" id="inputCheckbox" checked onClick="hideKaporyCodeInput()" /> <span style="font-size:.85em;">Kapory kodu kullan </span>
						<a class="kapory-bilgi" href="#" rel="popover" data-content="Kapory'den alacağınız kupon ile bu ürüne indirimli sahip olabilirsiniz." title="" data-placement="top" >
							<span class="glyphicon glyphicon-question-sign"></span>
						</a>
						<input name="kaporycode" id="kaporyCodeInput" class="form-control" type="text" placeholder="Kapory Kodu"/>
					</center>
					<!-- # Yukarıdaki CENTER tagları arasında checkboxlara bağlı olarak gözükmesi gereken alanlar mevcut. Detaylar için benle iletişime geç!!! -->
					<?php }else{ ?>
					<center class="">
						<hr/>
						<h2 style="margin-top:-10px;"><?php echo $oldPricePointLeft; ?><span style="font-size:0.7em;">.<?php echo $oldPricePointRight; ?> TL</span></h2>
						<!--input type="checkbox"  /> <span style="font-size:.85em;">Kapory kodu kullan </span><a href="https://www.kapory.com/" target="_blank" title="Kapory'den alacağınız kupon ile bu ürüne indirimli sahip olabilirsiniz."><span class="glyphicon glyphicon-question-sign"></span></a-->
						<hr/>
					</center>
					<?php } ?>
				</div>
				<select class="form-control" id="colorControl" name="renk" onChange="simulateFormByColor(<?php echo $product_id ?>)" <?php if($allstockrownum <1 ){ ?> disabled <?php } ?> >
					<option value="0">Renk</option>
					<?php foreach($colors AS $color){ ?>
					<option value="<?php echo $color['color_id']; ?>" <?php if($color_val == $color['color_id']){ ?> selected <?php } ?>><?php echo $color['color_name']; ?></option>
					<?php } ?>
				</select>
				<select class="form-control"  id="sizeControl" name="boyut" onChange="getStockCount(<?php echo $product_id ?>)" <?php if($allstockrownum <1 ){ ?> disabled <?php } ?> >
					<option value="0">Numara</option>
					<?php foreach($sizes AS $size){ ?>
					<option value="<?php echo $size['size']; ?>" <?php if($size_val == $size['size']){ ?> selected <?php } ?>><?php echo $size['size']; ?></option>
					<?php } ?>
				</select>
				<select class="form-control" name="adet" id="quantityControl"  <?php if($allstockrownum <1 ){ ?> disabled <?php } ?> >
					<option>Adet</option>
					<?php if($quantity >=5){ ?>
					<?php for($i=1; $i<=5; $i++){ ?>
					<option value="<?php echo $i; ?>" <?php if($quantity_val == $i){ ?> selected <?php } ?>><?php echo $i; ?></option>
					<?php } ?>
					<?php }else{ ?>
					<?php for($i=1; $i<=$quantity; $i++){ ?>
					<option value="<?php echo $i; ?>" <?php if($quantity_val == $i){ ?> selected <?php } ?>><?php echo $i; ?></option>
					<?php } ?>
					<?php } ?>
				</select>
				<input type="hidden" name="urun_id" value="<?php echo $product_id; ?>">
				<input type="submit" class="btn btn-warning btn-lg" style="width:160px;" value="SATIN AL" <?php if($allstockrownum <1 ){ ?> disabled <?php } ?> >
			</form>
			<div class="share">
				<p>Paylaş
                                    <a href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=https://www.birayakkabi.com/detay/id/<?php echo $product_id; ?>', 'facebook-share-dialog', 'width=626,height=436'); return false;"><img src="<?php echo $_SUB_ROOT; ?>view/img/facebook-icon.png" alt="facebook"/></a>
					<script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>
					<a href="https://twitter.com/intent/tweet?text=Hergün%20bir%20bay,%20bir%20bayan%20ayakkabısı.&url=https://www.birayakkabi.com/&related=onlineisler"><img src="<?php echo $_SUB_ROOT; ?>view/img/twitter-icon.png" alt="twitter"/></a>
				</p>
			</div>
		</div>
	</div>
	<!-- #D E T A Y   S A Y F A S I   S A Ğ   B Ö L Ü M -->

</div>
