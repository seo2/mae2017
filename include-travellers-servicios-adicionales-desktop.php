<!-- <h4 class="divider"><?php //echo $tit2; ?></h4> -->
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
		                <div class="col-md-4">
		                       <div class="box_agencia">
		                        <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/img/serviestado.jpg">
		                             <div class="desc_servicio text-center">
		                             <p> BancoEstado ya está en Arauco Estación, para poder suplir las necesidades
		                             	de todos los vecinos de la comuna. Te esperamos.</p>
		                                  <p class="tel">+56 2-970 0591 <br>
											Pasillo F
		                                  </p>
		                                   <a href="http://www.bancoestado.cl" target="_blank" class="url_agencia">www.bancoestado.cl</a>
		                              </div>
		                       </div>
		                 </div>
		          <!--        <div class="col-md-4">
		                 <div class="box_agencia">
		                       <div class="head_agencia">
		                         <img src="<?php //bloginfo('template_url'); ?>/assets/img/logo_santander.jpg">
		                       </div>
		                       <div class="desc_servicio text-center">
		                           <p> Lunes a Viernes <br>
		                             de 09:00 a 14:00 hrs  <br>
		                                  </p>
		                                  <p class="tel"> Tel.: +56232054249 </p>
		                                   <a href="http://www.santander.cl/" target="_blank" class="url_agencia">www.santander.cl</a>
		                       </div>
		                     </div>
		                 </div> -->
					</div> <!-- row -->
			</div>  <!-- container -->

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
                <div class="col-md-4">
                       <div class="box_agencia">
                       	<div class="head_agencia">
                       		<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/img/afex.jpg">
                       	</div>
                             <div class="desc_servicio text-center">
                             	<p> AFEX ofrece el servicio de compra y venta de moneda extranjera en efectivo y traveler cheques.</p>
								<p class="tel">+56 2 2636 9138 <br>
									Pasillo B
								</p>
                                <a href="http://www.afex.cl" target="_blank" class="url_agencia">www.afex.cl</a>
                              </div>
                       </div>
                 </div>
                 <div class="col-md-4">
                        <div class="box_agencia">
							<div class="head_agencia">
							   <h2>Casa de Cambio Zesal</h2>
							</div>

                              <div class="desc_servicio text-center">
                              	<p> Casa de cambio moneda nacional e internacional</p>
 								<p class="tel">+56 2 2441 9811 <br>
 								Pasillo B
 								</p>
                                 <a href="mailto:zesalborja@hotmail.com" class="url_agencia">zesalborja@hotmail.com</a>
                               </div>
                        </div>
                  </div>
                  <div class="col-md-4">
                         <div class="box_agencia">
                          		<div class="head_agencia">
                          		   <h2>Guiñazu</h2>
                          		</div>
                               <div class="desc_servicio text-center">
                               	<p> Casa de cambio</p>
  								<p class="tel">+56  232211277<br>
  									Sector Exposición
  								</p>
                                 <!--  <a href="mailto:mdental@terra.cl" target="_blank" class="url_agencia">mdental@terra.cl</a> -->
                                </div>
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
                <div class="col-md-3">
                       <div class="box_agencia">
							<div class="head_agencia">
							   <h2>Centro Odontológico Exposición</h2>
							</div>

                             <div class="desc_servicio text-center">
                             	<p> ODONTOLOGÍA ESTACIÓN te ofrece la ayuda para mantener la salud bucal
                             	que necesitas y al alcance de tu bolsillo.</p>
								<p class="tel">+56 2 2689 5829 <br>
								Sector Exposición
								</p>
                                <a href="mailto:mdental@terra.cl" class="url_agencia">mdental@terra.cl</a>
                              </div>
                       </div>
                 </div>
                 <div class="col-md-3">
                       <div class="box_agencia">
							<div class="head_agencia">
							   <h2>Centro Médico Estación</h2>
							</div>

                             <div class="desc_servicio text-center">
                             	<p> La mejor atención médica lo encuentras en Centro Medico Estación.</p>
								<p class="tel">+56 2 6890 287<br>
								Sector Exposición
								</p>
                                <a href="mailto:adelinadelapaz@hotmail.com" class="url_agencia">adelinadelapaz@hotmail.com</a>
                              </div>
                       </div>
                 </div>
                 <div class="col-md-3">
                       <div class="box_agencia">
							<div class="head_agencia">
							   <h2>Laboratorio Cruz del Sur</h2>
							</div>
                             <div class="desc_servicio text-center">
                             	<p> Laboratorio clínico</p>
								<p class="tel">+56 2 2689 5343<br>
								Sector Exposición
								</p>
                                <a href="mailto:cruzdelsur@tie.cl" class="url_agencia">cruzdelsur@tie.cl</a>
                              </div>
                       </div>
                 </div>
                 <div class="col-md-3">
                       <div class="box_agencia">
							<div class="head_agencia">
							   <h2>Mega Salud</h2>
							</div>
                             <div class="desc_servicio text-center">
                             	<p> Megasalud es la Red de Centros Médicos y Dentales de Chile, que entrega
                             	sus servicios principalmente al segmento medio de la población en 31 centros
                             de atención ambulatoria, ubicados en las principales ciudades de Chile, desde Arica a Punta Arenas. </p>
								<p class="tel">+56 97794 6351<br>
								Sector Exposición
								</p>
                                <a href="https://www.megasalud.cl" target="_blank" class="url_agencia">www.megasalud.cl</a>
                              </div>
                       </div>
                 </div>
                 <div class="col-md-3">
                       <div class="box_agencia">
							<div class="head_agencia">
							   <h2>Sana Salud</h2>
							</div>
                             <div class="desc_servicio text-center">
                             	<p>Laboratorio médico y dental. </p>
								<p class="tel">+56 2 5838 162<br>
								Pasillo B
								</p>
                                <a href="https://www.sanasalud.cl/" target="_blank" class="url_agencia">www.sanasalud.cl</a>
                              </div>
                       </div>
                 </div>
                  <div class="col-md-3">
                       <div class="box_agencia">
							<div class="head_agencia">
							   <h2>Uno Salud</h2>
							</div>
                             <div class="desc_servicio text-center">
                             	<p>Evaluaciones dentales y tratamientos a bajo costo,
                             	es lo que ofrece UNO SALUD a todo su público.
                             	No te pierdas sus evaluaciones gratis. </p>
								<p class="tel">+56 2 2763 8900<br>
								Pasillo F
								</p>
                                <a href="https://www.unosalud.cl/" target="_blank" class="url_agencia">www.unosalud.cl</a>
                              </div>
                       </div>
                 </div>
                 <div class="col-md-3">
                       <div class="box_agencia">
							<div class="head_agencia">
							   <h2>Vida Dent</h2>
							</div>
                             <div class="desc_servicio text-center">
                             	<p>Servicio de salud dental. </p>
								<p class="tel">+56 2 6895 982<br>
									Sector Exposición
								</p>
                                <a href="mailto:vidadent6311@gmail.com" class="url_agencia">vidadent6311@gmail.com</a>
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
						<div class="col-md-3">
						   <div class="box_agencia">
								<div class="head_agencia">
								   	<div class="head_agencia">
			                       		<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/img/chilexpress.jpg">
			                       	</div>
								</div>
						         <div class="desc_servicio text-center">
						         	<p>Chilexpress es la empresa líder en servicios expresos, especializada en el servicio
						         	courrier para el envío de sobres, valijas encomiendas, giros de dinero nacional
						        	 e internacional, telegramas y recaudaciones para diferentes empresas en
						    		 el pago de servicios. ¡Un servicio que no puede faltar! </p>
									<p class="tel">+56 2 2355 2500<br>
										Pasillo F
									</p>
						            <a href="https://www.chilexpress.cl/" target="_blank" class="url_agencia">www.chilexpress.cl</a>
						          </div>
						   </div>
						</div>
						<div class="col-md-3">
						   <div class="box_agencia">
								<div class="head_agencia">
								   	<div class="head_agencia">
			                       		<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/img/fonasa.jpg">
			                       	</div>
								</div>
						         <div class="desc_servicio text-center">
						         	<p>Ven a realizar tus tramites de salud de manera rápida y expedita.</p>
									<p class="tel">+56 9 8232 2179<br>
										Sector Exposición
									</p>
						            <a href="https://www.fonasa.cl/" target="_blank" class="url_agencia">www.fonasa.cl</a>
						          </div>
						   </div>
						</div>
						<div class="col-md-3">
						   <div class="box_agencia">
								<div class="head_agencia">
							   		<h2>Ria</h2>
								</div>
						         <div class="desc_servicio text-center">
						         	<p>Giros de dinero</p>
									<p class="tel">+56 9 8626 5192<br>
									Pasillo E
									</p>
						            <a href="mailto:slescano@riafinancial.com" class="url_agencia">slescano@riafinancial.com</a>
						          </div>
						   </div>
						</div>
						<div class="col-md-3">
						   <div class="box_agencia">
								<div class="head_agencia">
								   	<div class="head_agencia">
			                       		<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/img/sencillito.jpg">
			                       	</div>
								</div>
						         <div class="desc_servicio text-center">
						         	<p>Sencillito es un centro de pago.</p>
									<p class="tel">800 223 017<br>
									Pasillo F
									</p>
						            <a href="https://www.sencillito.com/" target="_blank" class="url_agencia">www.sencillito.com</a>
						          </div>
						   </div>
						</div>
						<div class="clear"></div>
						<div class="col-md-3">
						   <div class="box_agencia">
								<div class="head_agencia">
								   	<div class="head_agencia">
			                       		<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/img/correos.jpg">
			                       	</div>
								</div>
						         <div class="desc_servicio text-center">
						         	<p>	Correos Chile  es la empresa líder del mercado nacional en el envío de correspondencia y valijas.
						         		En el moderno módulo ubicado en la zona de servicios del Mall puedes enviar tus cartas y
						        		 encomiendas al 100% del territorio nacional. ¡Te esperamos!</p>
									<p class="tel">+56 2956 1760<br>
									Sector Exposició
									</p>
						            <a href="http://www.correos.cl/" target="_blank" class="url_agencia">www.correos.cl</a>
						          </div>
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
			                <div class="col-md-4">
							    <div class="box_agencia">
									<div class="head_agencia">
									   	<div class="head_agencia">
				                       		<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/img/cruz-verde.jpg">
				                       	</div>
									</div>
							         <div class="desc_servicio text-center">
							         	<p>	Todos los productos y servicios orientados a cuidar la salud están en Farmacias
							         	 Cruz Verde, una de las más importantes cadenas de farmacias chilenas. Una variada
							         	línea de productos cosméticos completa la oferta. Lo mejor en servicio, con personal
							         	 capacitado y orientado a atender todas tus necesidades.</p>
										<p class="tel">+56 2 2764 3875<br>
											Pasillo C - Pasillo E
										</p>
							            <a href="https://www.cruzverde.cl/" target="_blank" class="url_agencia">www.cruzverde.cl</a>
							          </div>
							    </div>
							</div>
							<div class="col-md-4">
							    <div class="box_agencia">
									<div class="head_agencia">
									   	<div class="head_agencia">
				                       		<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/img/salcobrand.jpg">
				                       	</div>
									</div>
							         <div class="desc_servicio text-center">
							         	<p>	En este amplio local encuentras la más amplia gama en productos de perfumería, belleza,
							         	decoración, hogar, juguetería y librería. Encuentra en esta tienda una oferta mayor a
							         20.000 productos para la belleza integral de la mujer.</p>
										<p class="tel">+56 224 223 300  / anexo 5589<br>
											Plaza Argentina, sector poniente
										</p>
							            <a href="https://salcobrand.cl/" target="_blank" class="url_agencia">www.salcobrand.cl</a>
							          </div>
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
				                <div class="col-md-4">
								    <div class="box_agencia">
										<div class="head_agencia">
										   	<div class="head_agencia">
										   		<h2>Custodia Efe</h2>
					                       	</div>
										</div>
								         <div class="desc_servicio text-center">
								         	<p>	¡Quedate tranquilo! Guarda tus pertenencias en Custodia
								         	 Efe y realiza tus trámites libremente.</p>
											<p class="tel">+56 2 2585 5903<br>
												Sector Exposición
											</p>
								          </div>
								    </div>
								</div>
								<div class="col-md-4">
								    <div class="box_agencia">
										<div class="head_agencia">
										   	<div class="head_agencia">
										   		<h2>Deval Custodia</h2>
					                       	</div>
										</div>
								         <div class="desc_servicio text-center">
								         	<p>	Custodia de equipaje.</p>
											<p class="tel">+56 2 7765 218<br>
												Patio Comida Terminal San Borja.
											</p>
											<a href="mailto:hector.valenzuela@deval.cl" class="url_agencia">hector.valenzuela@deval.cl</a>
								          </div>
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








