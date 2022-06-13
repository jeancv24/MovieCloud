<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title>Movie Cloud</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

</head>

<body>
   <!-- container -->
    <div class="">
        <!-- header -->
        <header>
            <!-- nav -->
            <nav class="navbar navbar-expand-lg" role="navigation">
                <div class="container text-dark">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'theme-slug' ); ?>">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand mx-auto" href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/img/main-logo.jpg" alt="ARS"></a>
                    <?php
                        wp_nav_menu( array(
                            'theme_location'    => 'primary',
                            'depth'             => 2,
                            'container'         => 'div',
                            'container_class'   => 'collapse navbar-collapse',
                            'container_id'      => 'bs-example-navbar-collapse-1',
                            'menu_class'        => 'nav navbar-nav',
                            'a_class'           => 'letras',
                            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                            'walker'            => new WP_Bootstrap_Navwalker(),
                        ) );
                    ?>
                </div>
                
            </nav>
            <!-- nav -->
        </header>
        <!-- header -->