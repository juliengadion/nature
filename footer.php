<!DOCTYPE html>
<html id="base">

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<script src="https://kit.fontawesome.com/d0098d2db7.js"></script>
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>


	<?php wp_footer(); 
		$current_options = wp_parse_args(  get_option( 'spa_theme_options', array() ), default_data() );
		?>


	<!-- Navbar -->
	<div class="row">
		<div class="col-lg-2" id="navf">
			<nav class="navbar navbar-default">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">

						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
							data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only"><?php echo 'Toggle navigation'; ?></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<?php 
					
					wp_nav_menu( 
						array(  
							'menu'           => 'footer-menu',
							'theme_location' => ( has_nav_menu( 'footer' ) ? 'footer' : 'primary' ),
							'depth'          => -1,
							'container'      => false,
							'menu_class'     => '',
							'menu_id'        =>'FooterMenu',
						   'fallback_cb'     => 'webriti_fallback_page_menu',
							'walker'         => new webriti_nav_walker()
						)
					);
					?>

					</div>
			</nav>



		</div>

		<div class="col-lg-10" id="rgpd">

			<p>Copyright &#169; 2019, Web 15 Academy</p>
			<a href="">Mentions légales</a>
			<a href="https://ec.europa.eu/info/law/law-topic/data-protection/reform_fr?pk_source=google_ads&pk_medium=paid&pk_campaign=gdpr2019">RGPD</a>


			<div class="fin">
				<a href=".container">
					<i class="fas fa-arrow-circle-up"></i>
				</a>

			</div>
		</div>

		




	</div>