

	</main>

	<!-- FOOTER -->
	<footer>
			<div class="uk-container uk-container-medium uk-padding-small">
				<p>
					Designed &amp; developed by <a class="uk-button uk-button-text" href="https://www.neeltjechanterie.be/" target="_blank">Neeltje Chanterie</a>
					<?php
					if($user->isLoggedin()) {
						// if user is logged in, show a logout link
						echo " | <a class='uk-button uk-button-text' href='{$config->urls->admin}login/logout/'>Logout ($user->name)</a>";
					} else {
						// if user not logged in, show a login link
						echo " | <a class='uk-button uk-button-text' href='{$config->urls->admin}'>Admin Login</a>";
					}
					?>
				</p>
			</div>
	</footer>
	<!-- END FOOTER -->

	<!-- MOBILE MENU -->
<div id="tm-mobile" class="uk-modal-full uk-modal" uk-modal="" style="">
	<div class="uk-modal-dialog uk-modal-body uk-text-center uk-flex" uk-height-viewport="" style="box-sizing: border-box; min-height: 100vh; height: 100vh;">
		<button class="uk-modal-close-full uk-close uk-icon" type="button" uk-close=""></button>
		<div class="uk-margin-auto-vertical uk-width-1-1">
			<div class="uk-child-width-1-1 uk-grid uk-grid-stack" uk-grid="">
				<div class="uk-first-column">
					<div class="uk-panel">
					<ul class="uk-nav uk-nav-primary uk-nav-center">

						<!--<li class=" menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children uk-parent"><a href="about.html">About</a>
							<ul class="uk-nav-sub">
								<li class=" menu-item menu-item-type-post_type menu-item-object-page"><a href="#">Suculents</a></li>
								<li class=" menu-item menu-item-type-post_type menu-item-object-page"><a href="#">Cactus</a></li>
							</ul>
						</li>
						<li class=" menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children uk-parent"><a href="about.html">About</a>
							<ul class="uk-nav-sub">
								<li class=" menu-item menu-item-type-post_type menu-item-object-page"><a href="#">Suculents</a></li>
								<li class=" menu-item menu-item-type-post_type menu-item-object-page"><a href="#">Cactus</a></li>
							</ul>
						</li>
						<li class=" menu-item menu-item-type-post_type menu-item-object-page"><a href="contact.html">Contact</a></li>
						-->
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
									echo '<li class="uk-active menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children uk-parent"><a href="' . $child->url . '">' . $child->title . '</a>
									<ul class="uk-nav-sub">';

									foreach($sub_children as $sub_child) {
										echo '<li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="' . $sub_child->url . '">' . $sub_child->title . '</a></li>';
									}
									echo '</ul>
									</li>';
								}
								else{
									echo '<li class="uk-active  menu-item menu-item-type-custom menu-item-object-custom"><a href="' . $child->url . '">' . $child->title . '</a></li>';
								}
							}
							else {
								if ($sub_children->count() > 0 && $child->id != $homepage->id) {
									echo '<li class=" menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children uk-parent"><a href="' . $child->url . '">' . $child->title . '</a>
									<ul class="uk-nav-sub">';

									foreach($sub_children as $sub_child) {
										echo '<li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="' . $sub_child->url . '">' . $sub_child->title . '</a></li>';
									}
									echo '</ul>
									</li>';
								}
								else{
									echo '<li class=" menu-item menu-item-type-post_type menu-item-object-page"><a href="' . $child->url . '">' . $child->title . '</a></li>';
								}
							}
						} ?>




					</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- jQuery is required -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- UIkit JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.30/js/uikit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.30/js/uikit-icons.min.js"></script>

</body>
</html>
