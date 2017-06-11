<?php if ($page == "news"): ?>
	<?php foreach ($news->result_array() as $key => $rnews): ?>
		<div class="col-xs-12 col-md-4 no-padding-mobile info">
			<a href="<?php echo site_url('news/detail/'.$rnews['news_id']) ?>"><img src="<?php echo $rnews['image'] ?>" class="img-responsive" alt=""></a>
			<h2><a href="<?php echo site_url('news/detail/'.$rnews['news_id']) ?>"><?php echo $rnews['title']?></a></h2>
			<div class="detail">
				<?php echo $rnews['short_detail'] ?>
			</div>
			<div class="readmore">
				<a href="<?php echo site_url('news/detail/'.$rnews['news_id']) ?>">
					<img src="<?php echo base_url('assets/imgs/readmore.svg') ?>" class="img-responsive" 
					onMouseOver="this.src='<?php echo base_url('assets/imgs/readmore-hover.svg') ?>'" 
					onMouseOut="this.src='<?php echo base_url('assets/imgs/readmore.svg') ?>'" alt="">
				    <img src="<?php echo base_url('assets/imgs/readmore-hover.svg') ?>" style="display:none">
				</a>
			</div>
			<div class="clear"></div>
		</div>
		<?php if (($key+1)%3 == 0): ?>
			<div class="clear"></div>
		<?php endif ?>
	<?php endforeach ?>
<?php endif ?>