<h4 class="divider"><?php echo $tit2; ?></h4>
<div class="container">
  <div class="row">


    <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="box_servicio" id="serv2box">
          <a href="javascript:void(0);" class="borde_azul" data-toggle="collapse" data-target="#content_casas_cambio">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/afex.svg"   class="center-block">
                      <p> Casas de cambio</p>
          </a>
        </div>
         <div class="box_more_info">
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#content_casas_cambio" ><?php echo $btn1; ?></a>
          </div>
    </div> <!-- serv 1 -->

    <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="box_servicio" id="serv4box">
          <a href="javascript:void(0); " class="borde_amarillo" data-toggle="collapse" data-target="#content_supermercado">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/supermercado.svg"  class="center-block">
                	<p> Supermercado</p>
          </a>
        </div>
        <div class="box_more_info">
          <a href="javascript:void(0);" data-toggle="collapse" data-target="#content_supermercado" ><?php echo $btn1; ?></a>
        </div>
    </div> <!-- serv 2 -->

    <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="box_servicio" id="serv4box">
          <a href="javascript:void(0); " class="borde_rojo" data-toggle="collapse" data-target="#content_serv_pago">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/servipag.svg"  class="center-block">
                <p> Servicios de pago </p>
          </a>
        </div>
        <div class="box_more_info">
          <a href="javascript:void(0);" data-toggle="collapse" data-target="#content_serv_pago" ><?php echo $btn1; ?></a>
        </div>
    </div> <!-- serv 3 -->

    <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="box_servicio" id="serv4box">
          <a href="javascript:void(0); " class="borde_verde" data-toggle="collapse" data-target="#content_hotel">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/hotel.svg"  class="center-block">
                <p> Hotel Casino del Pacífico </p>
          </a>
        </div>
        <div class="box_more_info">
          <a href="javascript:void(0);" data-toggle="collapse" data-target="#content_hotel" ><?php echo $btn1; ?></a>
        </div>
    </div> <!-- serv 4 -->

	<?php
	    $args = array(
			'post_type' => array('servicios_generales'),
			'p' 		=> 2222
	    );
		$the_query = new WP_Query ($args);
	    $i = 0;
	    if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
	    	$i++;
	?>
    <div id="content_casas_cambio" class="content_servicio collapse">
            <div id="content_casas_cambioancla" class="anclita"></div>
              <div class="container">
              <h4 class="divider azul"><?php the_title(); ?></h4>
               <div class="close_servicio" data-target="#serv2"> </div>
					<div class="row">
						<div class="col-md-6 col-md-push-6">
							<div class="img_servicio"  style="background: url(<?php echo get_the_post_thumbnail_url(); ?>);"></div>
						</div>
						<div class="col-md-6 col-md-pull-6 ">
							<div class="desc_servicio">
								<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/img/logo-afex.jpg" alt="">
								<?php the_content(); ?>
							</div>
						</div>
					</div>
              </div>
    </div><!-- casas de cambio -->
	<?php endwhile; else: ?>
	<?php endif; ?>
	<?php wp_reset_postdata(); ?>

	<?php
	    $args = array(
			'post_type' => array('servicios_generales'),
			'p' 		=> 2298
	    );
		$the_query = new WP_Query ($args);
	    $i = 0;
	    if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
	    	$i++;
	?>
    <div id="content_supermercado" class="content_servicio collapse">
        <div id="content_supermercadoancla" class="anclita"></div>
        <div class="container">
        <h4 class="divider amarillo"><?php the_title(); ?></h4>
        <div class="close_servicio" data-target="#serv4"> </div>
            <div class="row">
                <div class="col-md-6 col-md-push-6">
                    <div class="img_servicio"  style="background: url(<?php echo get_the_post_thumbnail_url(); ?>);"></div>
                </div>
				<div class="col-md-6 col-md-pull-6 ">
					<div class="desc_servicio">
						<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/img/logo-santaisabel.jpg" alt="">
						<?php the_content(); ?>
					</div>
				</div>
            </div>
        </div>
    </div> <!-- content taxis -->
	<?php endwhile; else: ?>
	<?php endif; ?>
	<?php wp_reset_postdata(); ?>

		<?php
		    $args = array(
				'post_type' => array('servicios_generales'),
				'p' 		=> 2299
		    );
			$the_query = new WP_Query ($args);
		    $i = 0;
		    if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
		    	$i++;
		?>
	    <div id="content_serv_pago" class="content_servicio collapse">
	        <div id="content_serv_pagoancla" class="anclita"></div>
	        <div class="container">
	        <h4 class="divider rojo"><?php the_title(); ?></h4>
	        <div class="close_servicio" data-target="#serv4"> </div>
	            <div class="row">
	                <div class="col-md-6 col-md-push-6">
	                    <div class="img_servicio"  style="background: url(<?php echo get_the_post_thumbnail_url(); ?>);"></div>
	                </div>
					<div class="col-md-6 col-md-pull-6 ">
						<div class="desc_servicio">
							<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/img/logo-servipag.jpg" alt="">
							<?php the_content(); ?>
						</div>
					</div>
	            </div>
	        </div>
	    </div> <!-- content taxis -->
		<?php endwhile; else: ?>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>

			<?php
			    $args = array(
					'post_type' => array('servicios_generales'),
					'p' 		=> 2300
			    );
				$the_query = new WP_Query ($args);
			    $i = 0;
			    if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
			    	$i++;
			?>
		    <div id="content_hotel" class="content_servicio collapse">
		        <div id="content_hotelancla" class="anclita"></div>
		        <div class="container">
		        <h4 class="divider verde"><?php the_title(); ?></h4>
		        <div class="close_servicio" data-target="#serv4"> </div>
		            <div class="row">
		                <div class="col-md-6 col-md-push-6">
		                    <div class="img_servicio"  style="background: url(<?php echo get_the_post_thumbnail_url(); ?>);"></div>
		                </div>
						<div class="col-md-6 col-md-pull-6 ">
							<div class="desc_servicio">
								<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/img/logo-hotel.jpg" alt="">
								<?php the_content(); ?>
							</div>
						</div>
		            </div>
		        </div>
		    </div> <!-- content taxis -->
			<?php endwhile; else: ?>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>

	</div>
</div>








