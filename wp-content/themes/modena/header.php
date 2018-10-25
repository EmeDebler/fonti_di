<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initialscale=1">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head() ?>
  </head>
<body>
	<header>
<!-- navbar responsivo"-->
<nav class="navbar navbar-default navbar-transparent navbar-fixed-top" color-on-scroll="200">    
    <div class="container">
    <div class="navbar-header">
        <button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar bar1"></span>
        <span class="icon-bar bar2"></span>
        <span class="icon-bar bar3"></span>
        </button>
            <a href="# class="navbar-brand"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" width="200em" alt="logo">
                </a>
    </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right navbar-uppercase">
            <li class="dropdown">
             <a href="#gaia" class="dropdown-toggle" data-toggle="dropdown">
             <i class="fa fa-share-alt"></i> Compartir
             </a>
        <ul class="dropdown-menu dropdown-danger">
            <li>
             <a href="#"><i class="fa fa-facebook-square"></i> Facebook</a>
            </li>
            <li>
             <a href="#"><i class="fa fa-twitter"></i> Twitter</a>
            </li>
            <li>
             <a href="#"><i class="fa fa-instagram"></i> Instagram</a>
            </li>
        </ul>
            </li>
            <li>
            </li>
        </ul>
      </div>
    </div>
</nav>
<!-- /.navbar-collapse -->
  <div class="section section-header">
    <div class="parallax filter filter-color-red">
        <div class="image"
                style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/header-1.jpg')">
        </div>
    <div class="container">
      <div class="content">
        <div class="title-area">
        <p>Restaurante</p>
        <h1 class="title-modern">IL Fonti di Modena</h1>
        <h3> La mejor comida italiana</h3>
        <div class="separator line-separator">♦</div>
        </div>
      </div>
    </div>
    </div>
  </div>
</header>