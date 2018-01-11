<?php include('header.php') ?>
<?php include('include-top.php') ?>
<?php include('include-slider-home.php') ?>
<?php include('include-search-home.php') ?>
    <section class="main_content">
       <div class="titulo_seccion">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-10">
            	<?php
            	    $args = array(
            			'post_type' 		=> 'destacado',
            			'posts_per_page' => 1
            	    );
            		$the_query = new WP_Query ($args);
            	    if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
            	?>
                <h4 class="divider"><?php the_title(); ?></h4>
            </div>
            <div class="col-sm-12 col-md-2">
              <a href="<?php bloginfo('url'); ?>" class="back">< <?php echo $back; ?></a>
            </div>
          </div>
        </div>
    </div> <!-- titulo seccion -->

      <div class="container">
      <div class="row">
        <section class="cartelera clearfix">
        <div id="cartelera" class="anchor_seccion"></div>
            <div class="container">

	              <div class="row">
	                <div class="col-sm-12">
	                   <img class="img-responsive visible-md visible-lg center-block" src="<?php echo get('img_lg'); ?>" alt="" >
	                   <img class="img-responsive visible-xs visible-sm center-block" src="<?php echo get('img_xs'); ?>" alt="" >
	                </div>
	              </div>
	              <div class="row">
	                <div class="col-sm-12">
	                   <?php the_content(); ?>
	                </div>
	              </div>
					<?php endwhile; ?>
					<?php endif; ?>
	            <div class="row">
					<?php //include('include-mejores-sabores.php') ?>
	            </div><!-- row -->
            </div><!-- container -->
      </section><!-- cartelera -->
    </div><!-- row -->
<?php include('footer.php') ?>

