<?php

/**
 * Post template
 * Demo template file populated with MarkupBlog output and additional custom code for a Blog Post
 *
 */
 include('./_head.php'); // include header markup ?>
	<!-- BLOG CONTENT -->
	<div class="uk-section blog">

		<div class="uk-container uk-container-medium uk-margin">
			<h1><?php echo $page->get('headline|title'); ?></h1>
			 <ul class="uk-breadcrumb">
        <?php
        //BREADCRUMBS
        $parent = $page->parent();
        echo " <li><a href={$parent->url}'>{$parent->title}</a></li>
        <li><span href='#'>{$page->title}</span></li>";
        ?>
        </ul>
			<img class="uk-align-center uk-align-left@s uk-margin-remove-adjacent"  src="<?php echo $page->thumb->url; ?>" width="400" height"100%" alt="Example image">
			<h3><?php echo $page->blog_short; ?></h3>
			<?php echo $page->blog_body; ?>
		</div>
	</div>

<?php include('./_foot.php'); // include footer markup ?>
