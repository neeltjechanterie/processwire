<?php

 include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/_head.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); // include header markup ?>

<!-- DEFAULT CONTENT -->
<div class="uk-section">
	<div class="uk-container uk-container-medium uk-margin">
		<h1><?php echo $page->get('headline|title'); ?></h1>
		<?php echo $page->body; ?>
	</div>
</div>

<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/_foot.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); // include footer markup ?>
