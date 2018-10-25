<?php get_header(); ?>
<div class="section">
    <div class="container">
      <div class="row">
        <div class="title-area">
        <h2>Specialità della casa</h2>
        <div class="separator separator-danger">✻</div>
        <p class="description"> Nuestros platos </p>
        </div>
      </div>
<!--galeria-->
    <ul class="galeria">
        <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/platos/marinara.jpg" alt=""><h2>Marinara</h2><p>$5.900</p></a></li>
        <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/platos/mediterranea.jpg" alt=""><h2>Mediterrane</h2><p>$5.300</p></a></li>
        <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/platos/moccaccino.jpg" alt=""><h2>Moccaccino</h2><p>$2.000</p></a></li>
        <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/platos/peperonata.jpg" alt=""><h2>Peperonata</h2><p>$4.600</p></a></li>
        <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/platos/putannesca.jpg" alt=""><h2>Putannesca</h2><p>$6.500</p></a></li>
        <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/platos/griega.jpg" alt=""><h2>Griega</h2><p>$5.300</p></a></li>
        <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/platos/torino.jpg" alt=""><h2>Torino</h2><p>$5.300</p></a></li>
        <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/platos/polenta_frita.jpg" alt=""><h2>Polenta Frita</h2>
            <p>$5.600</p></a></li>
        <li><a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/platos/infusiones.jpg" alt=""><h2>Infusiones</h2><p>$1.100</p>
        </a></li>
    </ul>

      <div class="modal">
        <h3>Platos</h3>
        <div class="imagenga">
            <a href="">&#60;</a>
            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/platos/marinara.jpg" alt=""></a>
            <a href="">></a>
        </div>
            <a href="">x</a>
      </div>
          
      </div>
    </div>
</div>

<div class="section section-our-team-freebie">
    <div class="parallax filter filter-color-black">
        <div class="image" style="background-image:url('assets/img/header-2.jpg')">
        </div>
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="title-area">
                    <h2>Menú</h2>
                    <div class="separator separator-danger">✻</div>
                    <p class="description">Conoce la mejor cocina Italiana</p>
                    </div>
                </div>

            <div class="team">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card card-member">
                                    <div class="content">
                                    <div>
                                     <img alt="carta1" src="<?php echo get_template_directory_uri(); ?>/assets/img/carta/carta1.jpg"/>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-member">
                                    <div class="content">
                                         <div>
                                         <img alt="carta2" src="<?php echo get_template_directory_uri(); ?>/assets/img/carta/carta2.jpg"/>
                                         </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-member">
                                    <div class="content">
                                          <div>
                                          <img alt="carta3" src="<?php echo get_template_directory_uri(); ?>/assets/img/carta/carta3.jpg"/>
                                          </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--formulario de contacto-->
<div class="section section-our-clients-freebie">
    <div class="container">
        <div class="title-area">
            <h5 class="subtitle text-gray">haz tus reservaciones online!</h5>
            <h2>Reservas</h2>
            <div class="separator separator-danger">∎</div>
            </div>
            <ul class="nav nav-text" role="tablist">
              <li class="active">
              <a href="#testimonial1" role="tab" data-toggle="tab">
            <div class="image-clients">
                <img alt="..." class="img-circle" src="<?php echo get_template_directory_uri(); ?>/assets/img/1.jpg"/>
            </div>
              </a>
              </li>
              <li>
              <a href="#testimonial2" role="tab" data-toggle="tab">
            <div class="image-clients">
                 <img alt="..." class="img-circle" src="<?php echo get_template_directory_uri(); ?>/assets/img/2.jpg"/>
            </div>
              </a>
              </li>
              <li>
              <a href="#testimonial3" role="tab" data-toggle="tab">
              <div class="image-clients">
              <img alt="..." class="img-circle" src="<?php echo get_template_directory_uri(); ?>/assets/img/3.jpg"/>
            </div>
              </a>
              </li>
              </ul>
        <div class="tab-content">
        </div>
       <div class="title-area"> <?php echo do_shortcode('[contact-form-7 id="5" title="Formulario de contacto 1"]') ?></div>
    </div>
</div>

<div class="section section-small section-get-started">
    <div class="parallax filter">
        <div class="image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/pizza.jpg')">
        </div>
        <div class="container">
            <div class="title-area">
                <h2 class="text-white">Ven a conocernos</h2>
                <div class="separator line-separator">♦</div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>