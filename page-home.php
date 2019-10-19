<?php
/**
 * Template Name: Home
 */

get_header(); 
?>
<div id="home" class="content-page">
	<section id="banner">
		<?php
		  	echo do_shortcode('[rev_slider alias="home"]');
		?>
	</section>
	<section id="conteudo" style="background-image:url(<?php  echo get_the_post_thumbnail_url(); ?>)">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; // end of the loop. ?>
				</div>
			</div>
		</div>
	</section>
	<section id="destaques">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<?php $titulo  = get_field( 'titulo_profissionais', $post->ID );  ?>
					<h3><?php echo $titulo; ?></h3>
					<div class="row">
						<?php
							if( have_rows('profissionais') ):
								while ( have_rows('profissionais') ) : the_row();
									$foto = get_sub_field('foto');
									$nome = get_sub_field('nome');
									$cro = get_sub_field('cro');
						?>
							<article class="col-lg-6 col-md-6 col-sm-12" >
								<img src="<?php echo $foto; ?>" alt="" title="" />
								<h3><?php echo $nome; ?></h3>
								<h4><?php echo $cro ?></h4>
							</article>
						<?php 
							endwhile; 
						endif; 
						?>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<?php 
						$titulo  = get_field( 'titulo_tecnologia', $post->ID );
						$thumb_video  = get_field( 'thumb_video', $post->ID );  
						$url_video  = get_field( 'url_video', $post->ID );  
						$texto_video  = get_field( 'texto_video', $post->ID );    
					?>
					<h3><?php echo $titulo; ?></h3>
					<img src="<?php echo $thumb_video; ?>" alt="" title="" data-toggle="modal" data-target="#modalVideo"/>
					<?php echo $texto_video ?>
					<!-- Modal -->
					<div class="modal fade" id="modalVideo" tabindex="-1" role="dialog" aria-labelledby="modalVideo" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<iframe width="560" height="315" src="<?php echo $url_video ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="blog">
		<div class="container">
			<div class="row">
				<h2>Últimas do blog</h2>
			</div> 
			<div class="row">
				<?php 
					$args = array(
						'post_type'       => 'post',
						'post_status'      => 'publish',
						'posts_per_page'   => 4,
					);
					$noticias = get_posts( $args );
					foreach ( $noticias as $post ) {
						$title 		= $post->title;
						$thumb 		= get_the_post_thumbnail_url( $post->ID );
						$categoria  = get_the_category( $post->ID );
				?>
					<article  class="col-lg-3 col-md-6 col-sm-12">
						<a href="<?php echo the_permalink( $post->ID ); ?>" >
							<img src="<?php echo $thumb; ?>">
							<h4>
								<?php echo the_title(); ?>
							</h4>
							<span class="categoria"><?php echo $categoria[0]->name ; ?></span>
							<p><?php echo the_excerpt(); ?></p>
							<span>Leia Mais</span>
						</a>
					</article>
				<?php
					}
				?>
			</div>
		</div>
	</section>
	<section id="contato">
		<div class="container">
			<div class="row">
			<?php
				echo do_shortcode('[contact-form-7 id="5" title="Contato Rodapé"]');
			?>
			</div>
		</div>
	</section>
</div>
<?php get_footer(); ?>
