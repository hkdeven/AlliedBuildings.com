<?php
$grve_sticky_footer = blade_grve_visibility( 'sticky_footer' ) ? 'yes' : 'no';
/*
The primary footer alliedbuildings.com
*/
?>

<footer id="grve-footer" data-sticky-footer="yes">

		<div class="grve-footer-wrapper">

			<!-- Footer -->
			<div class="grve-widget-area grve-fullwidth">
				<div class="grve-container">
					<div class="grve-row">

            <!-- Column One -->
						<div class="grve-column-1-4 grve-tablet-column-1-2 main-footer-links" style="text-align: center;">
							<ul>
								<li><a href="http://www.bbb.org/south-east-florida/business-reviews/buildings-pre-cut-prefab-and-modular-dealers/allied-steel-buildings-in-fort-lauderdale-fl-31001687" target="blank_" ><img src="http://ec2-52-40-174-59.us-west-2.compute.amazonaws.com/footer-logo.png" alt="Better Business Bureau" width="72px" /></a></li>
							</ul>
						</div>

            <!-- Column Two -->
            <div class="grve-column-1-4 grve-tablet-column-1-2 main-footer-links">
							<ul>
								<li><a href="#">Contact</a></li>
								<li><a href="#">FAQ</a></li>
								<li><a href="#">Blog</a></li>
								<li><a href="#">Map</a></li>
							</ul>
						</div>

            <!-- Column Three -->
            <div class="grve-column-1-4 grve-tablet-column-1-2 main-footer-links">
							<ul>
								<li><a href="#">Specials</a></li>
								<li><a href="#">Videos</a></a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Allied Cares</a></a></li>
							</ul>
						</div>

            <!-- Column Four -->
            <div class="grve-column-1-4 grve-tablet-column-1-2">
							<div id="grve-widget-social-2" class="grve-widget widget grve-element grve-social">
								<ul>
									<li><a href="#" class="grve-extrasmall grve-no-shape" target="_blank"><i class="grve-text-white fa fa-facebook"></i></a></li>
									<li><a href="#" class="grve-extrasmall grve-no-shape" target="_blank"><i class="grve-text-white fa fa-twitter"></i></a></li>
									<li><a href="#" class="grve-extrasmall grve-no-shape" target="_blank"><i class="grve-text-white fa fa-pinterest"></i></a></li>
								</ul>
								<br />
								<ul>
									<li><a href="#" class="grve-extrasmall grve-no-shape" target="_blank"><i class="grve-text-white fa fa-google-plus"></i></a></li>
									<li><a href="#" class="grve-extrasmall grve-no-shape" target="_blank"><i class="grve-text-white fa fa-linkedin"></i></a></li>
									<li><a href="#" class="grve-extrasmall grve-no-shape" target="_blank"><i class="grve-text-white fa fa-youtube"></i></a></li>
								</ul>
							</div>
						</div>

          </div>
				</div>
			</div>

      <!-- Sub Footer -->
      <div class="grve-footer-bar grve-fullwidth" data-align-center="no">
        <div class="grve-container">
          <div class="grve-row">

            <div class="grve-bar-content grve-left-side">
              <div class="grve-copyright grve-small-text">
                © 2016  |  <span style="color: #ffffff; font-family: arial, sans-serif;"></span>Allied Steel Buildings</span>
              </div>
            </div>
            <div class="grve-bar-content grve-right-side">
              <nav class="grve-footer-menu grve-small-text grve-list-divider">
                <ul id="menu-footer-menu" class="menu">
                  <li id="menu-item-9600" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-9600">
										<a href="http://blog.alliedbuildings.com/terms-conditions/">Terms &#038; Conditions</a>  |
										<a href="http://blog.alliedbuildings.com/privacy/">Privacy</a>  |
										<a href="http://blog.alliedbuildings.com/site-map/">Site Map</a>
									</li>
                </ul>
              </nav>
            </div>

          </div>
        </div>
      </div>

    </div><!-- end wrapper -->

  </footer>

<!-- SIDE AREA -->
	<?php
			$grve_sidearea_data = blade_grve_get_sidearea_data();
			blade_grve_print_side_area( $grve_sidearea_data );
	?>
<!-- END SIDE AREA -->

	<?php blade_grve_print_search_modal(); ?>
	<?php blade_grve_print_form_modals(); ?>
	<?php blade_grve_print_language_modal(); ?>
	<?php blade_grve_print_social_modal(); ?>

	<?php do_action( 'blade_grve_footer_modal_container' ); ?>

	<?php blade_grve_print_back_top(); ?>

</div> <!-- end #grve-theme-wrapper -->

	<?php wp_footer(); // js scripts are inserted using this function ?>

	</body>

</html>
