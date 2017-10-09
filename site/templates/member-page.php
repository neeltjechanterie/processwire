<?php include('./_head.php'); // include header markup ?>

<!-- MEMBER CONTENT -->
<div class="uk-section team">
	<div class="uk-container uk-container-medium uk-margin">
		<h1><?php echo $page->get('headline|title'); ?></h1>
		<div class="uk-text-center uk-align-left">
	    	<img src="<?php echo $page->thumb->url; ?>" alt="" class="uk-border-circle" width="350" height="350">
			<p><?php echo $page->team_member; ?></p>
		</div>
		<?php echo $page->body; ?>
	</div>
</div>



<?php include('./_foot.php'); // include footer markup ?>
