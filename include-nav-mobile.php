    <div id="menu_mobile" class="navmenu navmenu-default navmenu-fixed-left offcanvas">
    <!--   <a class="navmenu-brand" href="#">Project name</a> -->

        <div class="logo text-center">
                <a href="<?php bloginfo('url'); ?>"> arauco Quilicura</a>
        </div> <!-- brand -->

	    <div class="rrss visible-xs visible-sm center-block text-center">
	      <ul>
	        <li><a href="https://www.facebook.com/AraucoSanAntonio/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
	<!--
	        <li><a href="https://www.instagram.com/parquearauco/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
	        <li><a href="https://twitter.com/parquearauco" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
	-->
	       <!--  <li><a href="https://es.pinterest.com/parquearauco/" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li> -->
	       <li><a href="<?php bloginfo('url'); ?>/horarios"><i class="fa fa-clock-o" aria-hidden="true"></i></a></li>
	      </ul>
	     </div><!-- RRSS -->


            <div class="container width">
                <div class="row">
                <ul class="nav navbar-nav lista_menu">
					<li class="active"><a href="<?php bloginfo('url'); ?>">Home</a></li>
					<li><a href="<?php bloginfo('url'); ?>/tiendas#tiendas">tiendas</a></li>
					<li><a href="<?php bloginfo('url'); ?>/moda#tiendas">Moda</a></li>
					<li><a href="<?php bloginfo('url'); ?>/patio-de-comidas#tiendas">patio de comidas</a></li>
					<li><a href="<?php bloginfo('url'); ?>/novedades#entretencion">entretencion</a></li>
					<li><a href="<?php bloginfo('url'); ?>/novedades#novedades">NOVEDADES / ACTIVIDADES (Ajedrez)</a></li>
					<li><a href="<?php bloginfo('url'); ?>/novedades-galeria/#galerias">galería</a></li>
					<li><a href="<?php bloginfo('url'); ?>/estacionamientos">estacionamientos</a></li>
					<li><a href="<?php bloginfo('url'); ?>/servicio-al-cliente">servicio al cliente</a></li>
                </ul>
                    <div class="divisor_h text-center"></div>
	                 <!--    <ul class="nav navbar-nav lista_menu">



	                   	</ul> -->

                   		<div class="divisor_h text-center"></div>
		                    <div class="col-sm-12">
		                      <!-- col derecha -->
		                          <div class="row">
		                            <div class="col-sm-12">
		                                  <!-- <div class="faq">
		                                        <a href="">
		                                          preguntas <i class="fa fa-comments-o" aria-hidden="true"> </i><br>
		                                            <span>frecuentes</span>
		                                        </a>
		                                 </div> -->
		                              <div class="horarios">
		                                    <ul class="clearfix">
		                                      <li>
		                                        <a href="<?php bloginfo('url'); ?>/horarios"><i class="fa fa-clock-o" aria-hidden="true"></i>  <?php echo $tit1; ?> </a>
		                                      </li>
		                                      <li>
		                                        <a href="https://www.google.cl/maps/place/Arauco+San+Antonio/@-33.5819812,-71.6160361,17z/data=!3m1!4b1!4m5!3m4!1s0x966238e6aa6391c9:0x39ebbb26447ed37c!8m2!3d-33.5819812!4d-71.6138421" target="_blank"><i class="fa fa-map-marker" aria-hidden="true"></i><?php echo $tit2; ?> </a>
		                                      </li>
		                                    </ul>
		                              </div>
		                            </div>
		                            <div class="col-sm-12"></div>
		                        </div> <!-- row -->
		                        <div class="row">
		                          <div class="col-sm-12 col_box_news_letter">
		                            <div class="box_newsletter" style="background: url(<?php bloginfo('template_url'); ?>/assets/img/bg_box_newsletter.jpg);">
		                              		<h3><?php echo $tit3; ?></h3>
												<form class="form_neswsletter" role="" id="form_neswsletter">
													<div class="box_input">
														<input  class="form-control" type="email" placeholder="" required name="mail"/>
														<button type="submit">
															<i class="fa fa-envelope" aria-hidden="true"></i>
														</button>
													</div>
													<div class="checkbox">
														<label>
															<input type="checkbox" id="acepto"> <a href=""><?php echo $tit4; ?></a>
														</label>
													</div>
												</form>
		                            </div>
		                          </div>
		                        <div class="clearfix"></div>
		                        <!-- mobile menu -->
		                        <section class="search_home_xs visible-xs visible-sm">
		                            <?php // include('include-search-home-mobile.php'); ?>
		                        </section>
		                        </div>
		                      </div><!-- col -->
                			</div>
            </div>

    </div>

    <div id="nav_mobile" class="navbar navbar-default navbar-fixed-top">
    	<div class="navbar-header">
        	<button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target=".navmenu" data-canvas="body">
				<span class="icon-bar top_bar"></span>
				<span class="icon-bar middle_bar"></span>
				<span class="icon-bar bottom_bar"></span>
			</button>
			<div class="logo">
                <a href="<?php bloginfo('url'); ?>">Mall Arauco Estación </a>
           	</div> <!-- brand -->
<!--
            <div id="lang_switcher" class="visible-xs visible-sm">
            	<select name="language" class="selectpicker show-menu-arrow" id="language">
					<?php icl_post_languages_mobile(); ?>
                </select>
            </div>
-->
            <a class="close_tienda" href="javascript:void(0);" data-id=""></a>
       </div>
    </div>

