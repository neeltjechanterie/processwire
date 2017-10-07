<?php

include('./_head.php'); // include header markup ?>

<!-- DEFAULT CONTENT -->
<div class="uk-section">
	<div class="uk-container uk-container-medium uk-margin">
		<h1><?php echo $page->get('headline|title'); ?></h1>
		<?php echo $page->body; ?>
	</div>
</div>

<?php include('./_foot.php'); // include footer markup ?>
