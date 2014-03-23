<div id="main-body">
	<div class="products">
		
		<div>
			<center><?php // Selcuk ?>
                                <h5><b><?php echo $maleHeadline['p_title']; ?></b></h5><?php // Selcuk ?>
				<a href="detay/id/<?php echo $maleHeadline['p_id']; ?>">
					<div class="left-hover">
						<button type="button" class="btn btn-primary btn-incele">İncele</button>
					</div>
				</a>
				<img src="view/deal_images/<?php echo $maleHeadline['p_i_image']; ?>" alt=""width="345px" />
<!--				<h4>&nbsp;210.00 TL&nbsp;</h4>&nbsp;-->
                                <h2><?php echo $oldPriceMPointLeft; ?><span style="font-size:0.7em;">.<?php echo $oldPriceMPointRight; ?> TL</span></h2>
<!--				<h2><?php// echo $maleHeadline['p_old_price']; ?> TL</h2>-->
			</center>
		</div>
		
		<div class="right">
			<center><?php // Selcuk ?>
                                <h5><b><?php echo $femaleHeadline['p_title']; ?></b></h5><?php // Selcuk ?>
				<a href="detay/id/<?php echo $femaleHeadline['p_id']; ?>">
					<div class="right-hover">
						<button type="button" class="btn btn-danger btn-incele">İncele</button>
					</div>
				</a>
				<img src="view/deal_images/<?php echo $femaleHeadline['p_i_image']; ?>" alt=""width="345px" />
<!--				<h4>&nbsp;350.00 TL&nbsp;</h4>&nbsp;-->
                                <h2><?php echo $oldPriceFPointLeft; ?><span style="font-size:0.7em;">.<?php echo $oldPriceFPointRight; ?> TL</span></h2>
<!--				<h2><?php// echo $femaleHeadline['p_old_price']; ?> TL</h2>-->
			</center>
		</div>

	</div>
</div>
<div id="preload" style="display:none;">
    <?php foreach($HeadlineAllImages AS $HeadlineAllImage){ ?>
    <img src="view/deal_images/<?php echo $HeadlineAllImage['image']; ?>" width="1" height="1">
    <?php } ?>
</div>
