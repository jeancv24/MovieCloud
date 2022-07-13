<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Movies website, where you can find all the useful information to make a choice about watching a movie">
    <?php wp_head(); ?>
    <title>Movie Cloud</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="shortcut icon" href="https://dev-peliresenas.pantheonsite.io/wp-content/uploads/2022/07/6.png">

</head>

<body>
   <!-- container -->
    <div class="">
        <!-- header -->
        <header>
            <!-- nav -->
            <!--  
            <nav class="">
                <ul class="d-flex mb-3">
                    <a class="me-auto p-2 bd-highlight" href="<?php bloginfo('url'); ?>"><img class="main-logo" src="https://dev-peliresenas.pantheonsite.io/wp-content/uploads/2022/04/2-e1650994672260.png" alt="simple logo"></a>
                    <div id="myTopnav" class="">
                        <a href="javascript:void(0);" class="icon" onclick="hamburguer()">
                            <i class=""><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="40px" height="40px" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1536 1280"><path fill="currentColor" d="M1536 1088v128q0 26-19 45t-45 19H64q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45zm0-512v128q0 26-19 45t-45 19H64q-26 0-45-19T0 704V576q0-26 19-45t45-19h1408q26 0 45 19t19 45zm0-512v128q0 26-19 45t-45 19H64q-26 0-45-19T0 192V64q0-26 19-45T64 0h1408q26 0 45 19t19 45z"/></svg></i>
                        </a>
                    </div>
                </ul>
            </nav>
            -->
            <nav class="navbar navbar-expand-lg" role="navigation">
                <div class="container text-dark">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'theme-slug' ); ?>">
                    <span class="navbar-toggler-icon"><svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="40px" height="40px" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1536 1280"><path fill="currentColor" d="M1536 1088v128q0 26-19 45t-45 19H64q-26 0-45-19t-19-45v-128q0-26 19-45t45-19h1408q26 0 45 19t19 45zm0-512v128q0 26-19 45t-45 19H64q-26 0-45-19T0 704V576q0-26 19-45t45-19h1408q26 0 45 19t19 45zm0-512v128q0 26-19 45t-45 19H64q-26 0-45-19T0 192V64q0-26 19-45T64 0h1408q26 0 45 19t19 45z"/></svg></span>
                    </button>
                    <a class="me-auto p-2 bd-highlight" href="<?php bloginfo('url'); ?>"><img class="main-logo" src="https://dev-peliresenas.pantheonsite.io/wp-content/uploads/2022/04/2-e1650994672260.png" alt="simple logo"></a>
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
            <!-- nav -->
        </header>
        <!-- header -->