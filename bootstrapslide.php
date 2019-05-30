<div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
  	<?php 
		$args = array( 'post_type' => 'slide', 'posts_per_page' => -1 );
		$the_query = new WP_Query( $args ); 
		?>
		<?php if ( $the_query->have_posts() ) : ?>
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <div class="carousel-item">
         <?php the_post_thumbnail('carousel-thumb', array('class' => 'bg')); ?>
        <div class="carousel-caption d-none d-md-block">
		    <h5 class="titulo-slide"><?php the_title(); ?></h5>
		    <h2 class="titulo-slide02"><?php echo the_content(); ?> </h2>
	    </div>
    </div>
    <?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
	<?php else:  ?>
	<p><?php _e( 'Desculpa, não foi encontrada a imagem.' ); ?></p>
	<?php endif; ?>
  </div>
</div>