<?php include('./_head.php'); // include header markup ?>

<!-- DEFAULT CONTENT -->
<div class="uk-section">
	<div class="uk-container uk-container-medium uk-margin">
		<h1><?php echo $page->get('headline|title'); ?></h1>
		<img class="uk-align-center uk-align-right@s uk-margin-remove-adjacent"  src="<?php echo $page->thumb->url; ?>" width="400" height"100%" alt="Example image">
		<?php echo $page->body; ?>
	</div>
</div>

<!-- RULER -->
<div class="uk-container uk-container-medium uk-margin">
	<hr class="uk-divider-icon">
</div>

<div class="uk-section">
	<div class="uk-container uk-container-medium uk-margin">
		<h1 style="text-align: center;">Team</h1><br>

			<div class="uk-grid-small uk-child-width-expand@s uk-text-center" uk-grid>

					<?php

						$children = $page->children;
						foreach($children as $child) {
					?>
					<a href="<?php echo $child->url; ?>">
						<img src="<?php echo $child->thumb->url; ?>" alt="" class="uk-border-circle" width="250" height="250">
						<h3><?php echo $child->title; ?></h3>
						<p><?php echo $child->team_member; ?></p>
					</a>

					<?php } ?>

			</div>

		</div>
	</div>


<?php
	// render navigation to child pages
	//renderNav($page->children);

	// TIP: Notice that this <div id='content'> section is
	// identical between home.php and basic-page.php. You may
	// want to move this to a separate file, like _content.php
	// and then include('./_content.php'); here instead, on both
	// the home.php and basic-page.php template files. Then when
	// you make yet more templates that need the same thing, you
	// can simply include() it from them.
?>

<?php include('./_foot.php'); // include footer markup ?>
