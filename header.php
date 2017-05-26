<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <title>Test Site</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Roboto:300,500,700" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <?php wp_head(); ?>

    </head>

<!-- Creates arrays of classes depending on whether or not you are on the front page -->
    <?php

        if( is_front_page() ):
            $test_classes = array( 'awesome-class', 'my-class' );
        else:
            $test_classes = array( 'not-awesome-class' );
        endif;
    ?>

<!-- Body class accesses the $test_classes variable created above to add a class to the body. -->
    <body <?php body_class( $test_classes ) ?>>

<!-- Navbar Container -->
<div id="logo-container" class="container">
    <div class="col-sm-6">
        <a id="navbar-logo" href="index.php">LOGO</a>
    </div>
    <div class="col-sm-6 text-right">
        <span id="contact-us">Contact Us | About Us<?php get_search_form(); ?></span>
    </div>
</div>
<div class="container-fluid">

    <div class="row">
        <nav class="navbar navbar-inverse">
            <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>
              <div id="navbar" class="navbar-collapse collapse">

                    <?php
                        wp_nav_menu( array(
                            'theme_location' => 'primary',
                            'container' => false,
                            'menu_class' => 'nav navbar-nav navbar-center'
                            )
                        );
                    ?>

              </div><!--/.nav-collapse -->
            </div><!--/.container-fluid -->
         </nav>
    </div>
</div>
