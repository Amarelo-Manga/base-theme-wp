<?php
/**
 * The blog page.
 *
 * @package Neat
 */

get_header(); ?>


	<div class="aa_wrap">

		<?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'templates/content' ) ?>

				<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'templates/content', 'none' ); ?>

		<?php endif; ?>

	</div>
	<!-- /.aa_wrap -->

	<div class="container">
		<div class="row">
			<div class="col-sm">
				Teste AB 
				<div style="font-size:3em; font-family: 'FontAwesome'; color:#4300ff">
				  <i class="fa fa-camera-retro fa-10x"></i>
				</div>
			</div>
			<div class="col-sm">
				Teste CD
				<div style="font-size:3em; font-family: 'FontAwesome'; color:#4300ff">
				<span class="fa-stack fa-2x">
				  <i class="fas fa-square fa-stack-2x"></i>
				  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
				</span>
				<span class="fa-stack fa-2x">
				  <i class="fas fa-circle fa-stack-2x"></i>
				  <i class="fas fa-flag fa-stack-1x fa-inverse"></i>
				</span>
				<span class="fa-stack fa-2x">
				  <i class="fas fa-square fa-stack-2x"></i>
				  <i class="fas fa-terminal fa-stack-1x fa-inverse"></i>
				</span>
				<span class="fa-stack fa-2x">
				  <i class="fas fa-camera fa-stack-1x"></i>
				  <i class="fas fa-ban fa-stack-2x" style="color:Tomato"></i>
				</span>
			</div>
			</div>
			<div class="col-sm">
				Teste EF
				<div style="font-size:3em; font-family: 'FontAwesome'; color:#4300ff">
				<div style="font-size:3em;">
					<i class="fas fa-user" />
				</div>
			</div>
			</div>
		</div>
	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
