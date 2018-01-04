<h4 class="divider"><?php echo $tit2; ?></h4>
<div class="container">
  <div class="row">
    <div class="col-xs-6">
        <div class="box_servicio" id="serv1xsbox">
          <a href="javascript:void(0);" class="borde_azul"  data-toggle="collapse" data-target="#serv1xs">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/bancos.svg"  class="center-block">
             <p>Bancos</p>
          </a>
        </div>
        <div class="box_more_info">
          <a href="javascript:void(0);" data-toggle="collapse" data-target="#serv1xs"><?php echo $btn1; ?></a>
        </div>
    </div> <!-- serv1 -->

    <div class="col-xs-6">
        <div class="box_servicio" id="serv2xsbox">
          <a href="javascript:void(0);" class="borde_amarillo" data-toggle="collapse" data-target="#serv2xs">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/afex.svg"  class="center-block">
              <p>Casas de cambio</p>
          </a>
        </div>
        <div class="box_more_info">
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#serv2xs"><?php echo $btn1; ?></a>
        </div>
    </div> <!-- serv 2 -->

    <div class="col-xs-6">
        <div class="box_servicio" id="serv3xsbox">
          <a href="javascript:void(0);" class="borde_rojo" data-toggle="collapse" data-target="#serv3xs">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/salud.svg"  class="center-block">
              <p>Salud</p>
          </a>
        </div>
        <div class="box_more_info">
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#serv3xs"><?php echo $btn1; ?></a>
        </div>
    </div> <!-- serv 3 -->

    <div class="col-xs-6">
        <div class="box_servicio" id="serv4xsbox">
          <a href="javascript:void(0);" class="borde_verde" data-toggle="collapse" data-target="#serv4xs">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/servipag.svg"  class="center-block">
              <p>Centros de pago y envío</p>
          </a>
        </div>
        <div class="box_more_info">
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#serv4xs"><?php echo $btn1; ?></a>
        </div>
    </div> <!-- serv 4 -->

	<div class="col-xs-6">
		<div class="box_servicio" id="serv5xsbox">
			<a href="javascript:void(0);" class="borde_verde" data-toggle="collapse" data-target="#serv5xs">
			  	<img src="<?php bloginfo('template_url'); ?>/assets/img/hotel.svg"  class="center-block">
			  	<p>Farmacias</p>
			</a>
		</div>
		<div class="box_more_info">
			<a href="javascript:void(0);" data-toggle="collapse" data-target="#serv5xs"><?php echo $btn1; ?></a>
		</div>
	</div> <!-- serv 5 -->
	<div class="col-xs-6">
		<div class="box_servicio" id="serv6xsbox">
			<a href="javascript:void(0);" class="borde_verde" data-toggle="collapse" data-target="#serv6xs">
			  	<img src="<?php bloginfo('template_url'); ?>/assets/img/hotel.svg"  class="center-block">
			  	<p>Custodia</p>
			</a>
		</div>
		<div class="box_more_info">
			<a href="javascript:void(0);" data-toggle="collapse" data-target="#serv6xs"><?php echo $btn1; ?></a>
		</div>
	</div> <!-- serv 6 -->
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

      <div id="serv1xs" class="content_servicio collapse">
          <div id="serv1xsancla" class="anclita"></div>
          <div class="container">
              <h4 class="divider azul"><?php the_title(); ?></h4>
          <div class="close_servicio" data-target="#serv1xs"></div>
          <div class="row">
                  <div class="col-md-6 col-md-push-6">

                  <div class="desc_servicio">
                  <!-- 	<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/img/logo-afex.jpg" alt=""> -->
                    <?php the_content(); ?>
                   </div>
                </div>
                 <!-- row -->
        </div> <!-- container -->
      </div> <!-- content casas de cambio -->
      </div>
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
		<div id="serv2xs" class="content_servicio collapse">
	        <div id="serv2xsancla" class="anclita"></div>
	        <div class="container">
	        	<h4 class="divider amarillo"><?php the_title(); ?></h4>
	            <div class="close_servicio" data-target="#serv2xs"> </div>
	            <div class="row">
	            	<div class="col-md-6 col-md-push-6">
	                	<div class="img_servicio"  style="background: url(<?php echo get_the_post_thumbnail_url(); ?>);"></div>
	                </div>
	                <div class="col-md-6 col-md-pull-6 ">
	                	<div class="desc_servicio">
<!-- 	                		<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/img/logo-santaisabel.jpg" alt="">
 -->	                    	<?php the_content(); ?>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div><!-- content lavado de autos -->
		<?php endwhile; else: ?>
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>

			<?php
			    $args = array(
					'post_type' => array('servicios_generales'),
					'p' 		=> 2395
			    );
				$the_query = new WP_Query ($args);
			    $i = 0;
			    if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
			    	$i++;
			?>
			<div id="serv3xs" class="content_servicio collapse">
		        <div id="serv3xsancla" class="anclita"></div>
		        <div class="container">
		        	<h4 class="divider rojo"><?php the_title(); ?></h4>
		            <div class="close_servicio" data-target="#serv3xs"> </div>
		            <div class="row">
		            	<div class="col-md-6 col-md-push-6">
		                	<div class="img_servicio"  style="background: url(<?php echo get_the_post_thumbnail_url(); ?>);"></div>
		                </div>
		                <div class="col-md-6 col-md-pull-6 ">
		                	<div class="desc_servicio">
<!-- 		                		<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/img/logo-servipag.jpg" alt="">
 -->		                    	<?php the_content(); ?>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div><!-- content lavado de autos -->
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
				<div id="serv4xs" class="content_servicio collapse">
			        <div id="serv4xsancla" class="anclita"></div>
			        <div class="container">
			        	<h4 class="divider verde"><?php the_title(); ?></h4>
			            <div class="close_servicio" data-target="#serv4xs"> </div>
			            <div class="row">
			            	<div class="col-md-6 col-md-push-6">
			                	<div class="img_servicio"  style="background: url(<?php echo get_the_post_thumbnail_url(); ?>);"></div>
			                </div>
			                <div class="col-md-6 col-md-pull-6 ">
			                	<div class="desc_servicio">
<!-- 			                		<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/img/logo-hotel.jpg" alt="">
 -->			                    	<?php the_content(); ?>
			                    </div>
			                </div>
			            </div>
			        </div>
			    </div><!-- content lavado de autos -->
				<?php endwhile; else: ?>
				<?php endif; ?>
				<?php wp_reset_postdata(); ?>

					<?php
					    $args = array(
							'post_type' => array('servicios_generales'),
							'p' 		=> 2396
					    );
						$the_query = new WP_Query ($args);
					    $i = 0;
					    if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
					    	$i++;
					?>
					<div id="serv5xs" class="content_servicio collapse">
				        <div id="serv5xsancla" class="anclita"></div>
				        <div class="container">
				        	<h4 class="divider verde"><?php the_title(); ?></h4>
				            <div class="close_servicio" data-target="#serv5xs"> </div>
				            <div class="row">
				            	<div class="col-md-6 col-md-push-6">
				                	<div class="img_servicio"  style="background: url(<?php echo get_the_post_thumbnail_url(); ?>);"></div>
				                </div>
				                <div class="col-md-6 col-md-pull-6 ">
				                	<div class="desc_servicio">
<!-- 				                		<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/img/logo-hotel.jpg" alt="">
 -->				                    	<?php the_content(); ?>
				                    </div>
				                </div>
				            </div>
				        </div>
				    </div><!-- content lavado de autos -->
					<?php endwhile; else: ?>
					<?php endif; ?>
					<?php wp_reset_postdata(); ?>

						<?php
						    $args = array(
								'post_type' => array('servicios_generales'),
								'p' 		=> 2397
						    );
							$the_query = new WP_Query ($args);
						    $i = 0;
						    if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
						    	$i++;
						?>
						<div id="serv6xs" class="content_servicio collapse">
					        <div id="serv6xsancla" class="anclita"></div>
					        <div class="container">
					        	<h4 class="divider verde"><?php the_title(); ?></h4>
					            <div class="close_servicio" data-target="#serv6xs"> </div>
					            <div class="row">
					            	<div class="col-md-6 col-md-push-6">
					                	<div class="img_servicio"  style="background: url(<?php echo get_the_post_thumbnail_url(); ?>);"></div>
					                </div>
					                <div class="col-md-6 col-md-pull-6 ">
					                	<div class="desc_servicio">
<!-- 					                		<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/img/logo-hotel.jpg" alt="">
 -->					                    	<?php the_content(); ?>
					                    </div>
					                </div>
					            </div>
					        </div>
					    </div><!-- content lavado de autos -->
						<?php endwhile; else: ?>
						<?php endif; ?>
						<?php wp_reset_postdata(); ?>



  </div>
</div>








