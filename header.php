<?php
/**
 * The header for our theme.
 *
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- Header -->
<header class="header">
	<div class="sticky">
	  <div class="container">
		  <div class="row">
			<div id="logo" class="col-lg-4 col-md-4 col-sm-4">
				<?php 
					$custom_logo_id = get_theme_mod( 'custom_logo' );
					$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
				?>	
				<div > <a href="<?php echo home_url(); ?>"><img src="<?php echo $image[0]; ?>" alt=""></a> </div>
				</div>
				<div class="col-lg-8 col-md-8 col-sm-8 menu">
				<nav class="navbar navbar-expand-sm navbar-light bg-faded">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-controls="nav-content" aria-expanded="false" aria-label="Alterna navegação">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="conteudoNavbarSuportado" >
						<?php
							echo str_replace( 'menu-item', 'nav-item menu-item',
								wp_nav_menu( array(
									'theme_location' => 'primary',
									'walker'  => new Child_Wrap()   
								) )
							);
						?>
				 </div>
				</nav>
			</div>
		</div>
	  </div>
	</div>
</header>