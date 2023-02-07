<!DOCTYPE html>
<html <?php language_attributes('html');?> >
<head>
	<meta charset="<?php bloginfo('charset')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Meyawo landing page.">
    <?php wp_head();?>

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- Page Navbar -->
    <nav class="custom-navbar" data-spy="affix" data-offset-top="20">
        <div class="container">
            <?php wp_nav_menu(array(
    'theme_location' => 'header-nav',
    'container' => '',
    'container_class' => '',
    'menu_id' => 'top-menu',
    'menu_class' => 'nav',

));?>
            <!-- <a href="javascript:void(0)" id="nav-toggle" class="hamburger hamburger--elastic">
                <div class="hamburger-box">
                  <div class="hamburger-inner"></div>
                </div>
            </a> -->
        </div>
    </nav><!-- End of Page Navbar -->
