<h4 class="divider"><?php echo $tit2; ?></h4>
<div class="container">
  <div class="row">


    <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="box_servicio" id="serv1box">
          <a href="javascript:void(0);" class="borde_azul" data-toggle="collapse" data-target="#content_banco">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/bancos.svg"   class="center-block">
              <p>Bancos</p>
          </a>
        </div>
         <div class="box_more_info">
            <a href="javascript:void(0);" data-toggle="collapse" data-target="#content_banco" ><?php echo $btn1; ?></a>
          </div>
    </div> <!-- serv 1 -->

    <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="box_servicio" id="serv2box">
          <a href="javascript:void(0); " class="borde_amarillo" data-toggle="collapse" data-target="#content_casas_de_cambio">
          		<img src="<?php bloginfo('template_url'); ?>/assets/img/afex.svg"   class="center-block">
            <!--   <img src="<?php bloginfo('template_url'); ?>/assets/img/supermercado.svg"  class="center-block"> -->
                <p> Casas de cambio</p>
          </a>
        </div>
        <div class="box_more_info">
          <a href="javascript:void(0);" data-toggle="collapse" data-target="#content_casas_de_cambio" ><?php echo $btn1; ?></a>
        </div>
    </div> <!-- serv 2 -->

    <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="box_servicio" id="serv3box">
          <a href="javascript:void(0); " class="borde_rojo" data-toggle="collapse" data-target="#content_salud">
              <img src="<?php bloginfo('template_url'); ?>/assets/img/salud.svg"  class="center-block">
                <p> Salud </p>
          </a>
        </div>
        <div class="box_more_info">
          <a href="javascript:void(0);" data-toggle="collapse" data-target="#content_salud" ><?php echo $btn1; ?></a>
        </div>
    </div> <!-- serv 3 -->

    <div class="col-xs-6 col-sm-3 col-md-3">
        <div class="box_servicio" id="serv4box">
          <a href="javascript:void(0); " class="borde_verde" data-toggle="collapse" data-target="#content_centros_pago">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/servipag.svg"  class="center-block">
                <p> Centros de pago y envío </p>
          </a>
        </div>
        <div class="box_more_info">
          <a href="javascript:void(0);" data-toggle="collapse" data-target="#content_centros_pago" ><?php echo $btn1; ?></a>
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
    <div id="content_banco" class="content_servicio collapse">
            <div id="content_bancoancla" class="anclita"></div>
              <div class="container">
              <h4 class="divider azul"><?php the_title(); ?></h4>
               <div class="close_servicio" data-target="#serv2"> </div>
					<div class="row">
						<div class="col-md-6 col-md-push-6">
							<div class="img_servicio" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>);"></div>
						</div>
						<div class="col-md-6 col-md-pull-6 ">
							<div class="desc_servicio">
								<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/img/logo-servi-estado.jpg" alt="">
								<?php the_content(); ?>
							</div>
						</div>
					</div>
              </div>
    </div><!-- banco -->
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
    <div id="content_casas_de_cambio" class="content_servicio collapse">
        <div id="content_casas_de_cambioancla" class="anclita"></div>
        <div class="container">
        <h4 class="divider amarillo"><?php the_title(); ?></h4>
        <div class="close_servicio" data-target="#serv4"> </div>
            <div class="row">
                <div class="col-md-6 col-md-push-6">
                    <div class="img_servicio"  style="background: url(<?php echo get_the_post_thumbnail_url(); ?>);"></div>
                </div>
				<div class="col-md-6 col-md-pull-6 ">
					<div class="desc_servicio">
						<!-- <img src="https://api.fnkr.net/testimg/350x200/00CED1/FFF/?text=img+placeholder">
						<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/img/logo-santaisabel.jpg" alt=""> -->
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
				'p' 		=> 2395
		    );
			$the_query = new WP_Query ($args);
		    $i = 0;
		    if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
		    	$i++;
		?>
	    <div id="content_salud" class="content_servicio collapse">
	        <div id="content_saludancla" class="anclita"></div>
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
		    <div id="content_centros_pago" class="content_servicio collapse">
		        <div id="content_centros_pagoancla" class="anclita"></div>
		        <div class="container">
		        <h4 class="divider verde"><?php the_title(); ?></h4>
		        <div class="close_servicio" data-target="#serv4"> </div>
		            <div class="row">
		                <div class="col-md-6 col-md-push-6">
		                    <div class="img_servicio"  style="background: url(<?php echo get_the_post_thumbnail_url(); ?>);"></div>
		                </div>
						<div class="col-md-6 col-md-pull-6 ">
							<div class="desc_servicio">
							<!-- 	<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/img/logo-hotel.jpg" alt=""> -->
								<?php the_content(); ?>
							</div>
						</div>
		            </div>
		        </div>
		    </div> <!-- content taxis -->
			<?php endwhile; else: ?>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>

			<div class="col-xs-6 col-sm-3 col-md-3">
			    <div class="box_servicio" id="serv5box">
			      <a href="javascript:void(0); " class="borde_verde" data-toggle="collapse" data-target="#content_farmacias">
			          <img src="<?php bloginfo('template_url'); ?>/assets/img/hotel.svg"  class="center-block">
			            <p>Farmacias </p>
			      </a>
			    </div>
			    <div class="box_more_info">
			      <a href="javascript:void(0);" data-toggle="collapse" data-target="#content_farmacias" ><?php echo $btn1; ?></a>
			    </div>
			</div> <!-- serv 5-->

			 <div class="col-xs-6 col-sm-3 col-md-3">
			    <div class="box_servicio" id="serv6box">
			      <a href="javascript:void(0); " class="borde_verde" data-toggle="collapse" data-target="#content_custodia">
			          <img src="<?php bloginfo('template_url'); ?>/assets/img/hotel.svg"  class="center-block">
			            <p> Custodia </p>
			      </a>
			    </div>
			    <div class="box_more_info">
			      <a href="javascript:void(0);" data-toggle="collapse" data-target="#content_custodia" ><?php echo $btn1; ?></a>
			    </div>
			</div> <!-- serv 6-->

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
			    <div id="content_farmacias" class="content_servicio collapse">
			        <div id="content_farmaciasancla" class="anclita"></div>
			        <div class="container">
			        <h4 class="divider verde"><?php the_title(); ?></h4>
			        <div class="close_servicio" data-target="#serv5"> </div>
			            <div class="row">
			                <div class="col-md-6 col-md-push-6">
			                    <div class="img_servicio"  style="background: url(<?php echo get_the_post_thumbnail_url(); ?>);"></div>
			                </div>
							<div class="col-md-6 col-md-pull-6 ">
								<div class="desc_servicio">
<!-- 									<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/img/logo-hotel.jpg" alt="">
 -->									<?php the_content(); ?>
								</div>
							</div>
			            </div>
			        </div>
			    </div> <!-- content farmacia -->
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
				    <div id="content_custodia" class="content_servicio collapse">
				        <div id="content_custodiaancla" class="anclita"></div>
				        <div class="container">
				        <h4 class="divider verde"><?php the_title(); ?></h4>
				        <div class="close_servicio" data-target="#serv6"> </div>
				            <div class="row">
				                <div class="col-md-6 col-md-push-6">
				                    <div class="img_servicio"  style="background: url(<?php echo get_the_post_thumbnail_url(); ?>);"></div>
				                </div>
								<div class="col-md-6 col-md-pull-6 ">
									<div class="desc_servicio">
<!-- 										<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/img/logo-hotel.jpg" alt="">
 -->										<?php the_content(); ?>
									</div>
								</div>
				            </div>
				        </div>
				    </div> <!-- content custodia -->
					<?php endwhile; else: ?>
					<?php endif; ?>
					<?php wp_reset_postdata(); ?>

	</div>
</div>








