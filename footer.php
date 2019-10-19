<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Neat
 */
?>



<footer>
	<div id="footer_infos" class="container">
		<div class="row">
			<div  class="col-lg-4 col-md-6 col-sm-12">
				<?php dynamic_sidebar( 'footer_1' ); ?>
			</div>
			<div  class="col-lg-4 col-md-6 col-sm-12">
				<?php dynamic_sidebar( 'footer_2' ); ?>
			</div>
			<div  class="col-lg-4  col-md-6 col-sm-12">
				<?php dynamic_sidebar( 'footer_3' ); ?>
			</div>
		</div>
	</div>
	<div id="footer_copyright">
		<div class="container">
			<div class="row">
				<div  class="col-lg-6 col-md-6 col-sm-12">
					<?php dynamic_sidebar( 'footer_copyright' ); ?>
				</div>
				<div  class="col-lg-6 col-md-6 col-sm-12">
					<?php dynamic_sidebar( 'footer_planob' ); ?>
				</div>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
