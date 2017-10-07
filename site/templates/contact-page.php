<?php

include('./_head.php'); // include header markup ?>

<!-- DEFAULT CONTENT -->
<div class="uk-section">
	<div class="uk-container uk-container-medium uk-margin contact-page">
		<h1><?php echo $page->get('headline|title'); ?></h1>
		<?php echo $page->body; ?>
		<?php echo $modules->get('SimpleContactForm')->render(); ?>
	</div>
</div>

<?php include('./_foot.php'); // include footer markup ?>
