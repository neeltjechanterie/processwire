<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title><?php echo $page->title; ?></title>
	<meta name="description" content="<?php echo $page->summary; ?>" />
	<!-- UIkit CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.30/css/uikit.min.css" />
	<link href="https://fonts.googleapis.com/css?family=Lora:400,400i|Open+Sans:300,400|Playfair+Display" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo $config->urls->templates?>styles/main.css" />
</head>
<body>
	<!-- MOBILE HEADER (SEE MOBILE MENU FOOTER) -->
	<div class="tm-header-mobile uk-hidden@m">
		<nav class="uk-navbar-container uk-navbar" uk-navbar="">
			<div class="uk-navbar-center">
				<a class="uk-navbar-item uk-logo" href="<?php echo $config->urls->root ?>">Nature</a>
			</div>
			<div class="uk-navbar-right">
				<a class="uk-navbar-toggle" href="#tm-mobile" uk-toggle>
					<div uk-navbar-toggle-icon="" class="uk-navbar-toggle-icon uk-icon"></div>
				</a>
			</div>
		</nav>
	</div>

	<!-- DESKTOP HEADER + MENU -->
	<div class="tm-header uk-visible@m" uk-header="">
		<div uk-sticky cls-active="uk-navbar-sticky" sel-target=".uk-navbar-container" class="uk-sticky uk-sticky-fixed" style="position: fixed; top: 0px; width: 0px;">
			<div class="uk-navbar-container">
				<div class="uk-container">
					<nav class="uk-navbar" uk-navbar="{&quot;align&quot;:&quot;left&quot;}" style="">
						<div class="uk-navbar-center">
							<div class="uk-margin-auto-vertical">
							<ul class="uk-navbar-nav">
								<?php
								// top navigation consists of homepage and its visible children
								$homepage = $pages->get('/');
								$children = $homepage->children();

								// make 'home' the first item in the navigation
								$children->prepend($homepage);

								// render an <li> for each top navigation item
								foreach($children as $child) {
									$sub_children = $child->children();

									if($child->id == $page->rootParent->id) {
										// this $child page is currently being viewed (or one of it's children/descendents)
										// so we highlight it as the current page in the navigation
										if ($sub_children->count() > 0 && $child->id != $homepage->id) {
											echo '<li class="uk-active  menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children uk-parent"><a href="' . $child->url . '" aria-expanded="false">' . $child->title . '</a>'
											.'<div class="uk-navbar-dropdown uk-navbar-dropdown-stack uk-navbar-dropdown-bottom-left">
													<div class="uk-navbar-dropdown-grid uk-child-width-1-1 uk-grid uk-grid-stack" uk-grid="">
														<div class="uk-first-column">
															<ul class="uk-nav uk-navbar-dropdown-nav">';

											foreach($sub_children as $sub_child) {
												echo '<li class=" menu-item menu-item-type-post_type menu-item-object-page"><a href="' . $sub_child->url . '">' . $sub_child->title . '</a></li>';
											}
											echo '</ul>
													</div>
												</div>
											</div>
										</li>';
										}
										else{
											echo '<li class="uk-active  menu-item menu-item-type-custom menu-item-object-custom"><a href="' . $child->url . '">' . $child->title . '</a></li>';
										}
									}
									elseif ($sub_children->count() > 0 && $child->id != $homepage->id) {
											echo '<li class=" menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children uk-parent"><a href="' . $child->url . '" aria-expanded="false">' . $child->title . '</a>'
											.'<div class="uk-navbar-dropdown uk-navbar-dropdown-stack uk-navbar-dropdown-bottom-left">
													<div class="uk-navbar-dropdown-grid uk-child-width-1-1 uk-grid uk-grid-stack" uk-grid="">
														<div class="uk-first-column">
															<ul class="uk-nav uk-navbar-dropdown-nav">';

											foreach($sub_children as $sub_child) {
												echo '<li class=" menu-item menu-item-type-post_type menu-item-object-page"><a href="' . $sub_child->url . '">' . $sub_child->title . '</a></li>';
											}
											echo '</ul>
													</div>
												</div>
											</div>
										</li>';
									}
									else {
										echo '<li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="' . $child->url . '">' . $child->title . '</a></li>';


									}
								} ?>
							</ul>
							</div>
						</div>
					</nav>
				</div>
			</div>
		</div>
		<div class="uk-sticky-placeholder" style="height: 0px; margin: 0px;"></div>
	</div>

	<main id='main'>
