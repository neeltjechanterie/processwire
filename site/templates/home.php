<?php include('./_head.php'); // include header markup ?>

	<!-- BANNER IMG -->
	<?php $thumb = $page->thumb;

	// resize it to 400 pixels wide
	$thumb = $thumb->width(2000);

	?>
	<div class="uk-background-fixed uk-background-cover uk-background-bottom-center uk-height-large uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(<?php echo $thumb->url; ?>);">
	    <p class="uk-h4 uk-text-center">Nature is pleased with simplicity.</p>
	    </div>


	<!-- 3 CALL-TO-ACTION BLOCKS -->
	 <div class="uk-section">
		 <div class="uk-container uk-container-medium uk-margin">
			 <div class="uk-child-width-expand@s uk-grid-match uk-grid-small" uk-grid>
			 		<?php foreach($page->cta_block as $item) { ?>
						<a href="<?php echo $item->url; ?>" class="uk-text-center" target="_blank">
	 						 <div class="uk-inline-clip uk-transition-toggle">
	 								 <img src="<?php echo $item->thumb->url; ?>" alt="">
	 								 <div class="uk-transition-fade uk-position-cover uk-position-small uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle">
	 										 <h1 class="uk-h4 uk-margin-remove"><?php echo $item->title; ?></h1>
	 								 </div>
	 						 </div>
	 				 </a>
				 <?php } ?>
			 </div>
		 </div>

	 </div>
	 <!-- END 3 CALL-TO-ACTION BLOCKS -->

	 <!-- RULER -->
	<div class="uk-container uk-container-medium uk-margin">
		<hr class="uk-divider-icon">
	</div>

	<?php   	//CALL THE MODULE - MarkupBlog
		$blog = $modules->get("MarkupBlog");

		$limit = $page->blog_quantity;

		$posts = $pages->find("template=blog-post, sort=-blog_date, start=0, limit=$limit");

		$parent = null;
		$out = '';
		$oddLoop = false;



					//$date = $blog->formatDate($item->blog_date);
					//$out .= "<li><span class='date'>$date</span> <a href='{$item->url}'>{$item->title}</a></li>";
					//$parent = $item->parent; ?>


		<!-- NEWS BLOCKS -->
		<div class="uk-section">
			<div class="uk-container uk-container-medium uk-margin">

				<?php $i = 0; foreach($posts as $item) { ?>
					<?php if($oddLoop=!$oddLoop){ ?>
						<div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin uk-transition-toggle" uk-grid>
								<div class="uk-card-media-left uk-cover-container">
										<img class="uk-transition-scale-up-custom uk-transition-opaque"  src="<?php echo $item->thumb->url; ?>" alt="" uk-cover>
										<canvas width="600" height="400"></canvas>
								</div>
								<div>
										<div class="uk-card-body">
												<h1 class="uk-card-title"><?php echo $item->title; ?></h1>
												<p><?php echo $item->blog_short; ?></p>
												<a href="<?php echo $item->url; ?>" class="uk-button uk-button-default read-more">Read more</a>
										</div>
								</div>
						</div>
					<?php } else { ?>
						<div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin uk-transition-toggle" uk-grid>
								<div class="uk-flex-last@s uk-card-media-right uk-cover-container">
												<img class="uk-transition-scale-up-custom uk-transition-opaque"  src="<?php echo $item->thumb->url; ?>" alt="" uk-cover>
												 <canvas width="600" height="400"></canvas>
								</div>
								<div>
										<div class="uk-card-body">
												<h1 class="uk-card-title"><?php echo $item->title; ?></h1>
												<p><?php echo $item->blog_short; ?></p>
												<a href="<?php echo $item->url; ?>" class="uk-button uk-button-default read-more">Read more</a>
										</div>
								</div>
						</div>
					<?php } ?>

				<?php if (++$i == 2) break; } ?>
			</div>
		</div>
		<!-- END NEWS BLOCKS -->


<?php include('./_foot.php'); // include footer markup ?>
