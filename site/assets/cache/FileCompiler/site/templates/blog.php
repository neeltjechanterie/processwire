<?php
 include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/_head.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); // include header markup

/**
 * Blog Home template
 * Demo template file populated with MarkupBlog output and additional custom code for the Blog Home Page
 *
 */

?>

<?php   	//CALL THE MODULE - MarkupBlog
  $blog = $modules->get("MarkupBlog");

  $limit = $page->blog_quantity;

  $posts = $pages->find("template=blog-post, sort=-blog_date, start=0, limit=$limit");

  $parent = null;
  $out = '';
  $oddLoop = false;
?>

<!-- NEWS BLOCKS -->
<div class="uk-section">
  <div class="uk-container uk-container-medium uk-margin">

    <?php foreach($posts as $item) { ?>
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

    <?php } ?>
  </div>
</div>
<!-- END NEWS BLOCKS -->

<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/_foot.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); // include footer markup
