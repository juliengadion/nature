<?php wp_footer(); 
		$current_options = wp_parse_args(  get_option( 'spa_theme_options', array() ), default_data() );
        ?>
        <!-- aside -->
        <aside>
<!-- Navbar -->	
<nav class="navbar navbar-default">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
						
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only"><?php echo 'Toggle navigation'; ?></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<?php 
					
						wp_nav_menu( array(
						
						'theme_location' => 'primary',
						
						'container'  => 'nav-collapse collapse navbar-inverse-collapse',
						
						'menu_class' => 'nav navbar-nav navbar-right',
						
						'fallback_cb' => 'webriti_fallback_page_menu',
						
						'walker' => new webriti_nav_walker()) 
						
						);  // primary support menu
						
					?>
				</div>
			</div>
        </nav>	
    </aside>