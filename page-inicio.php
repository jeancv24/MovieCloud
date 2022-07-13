<?php get_header(); ?>

<!-- search section -->
<div class="background">
    <h2 class="subtitle">Explora nuestro amplio catalogo de peliculas</h2>
</div>
<!-- search section -->

<!-- content -->
<h1>CATÁLOGO DE PELÍCULAS</h1>

<div class="img-container d-flex justify-content-center row">
    <?php 
            
        $args = array(
            'post_type'      => 'page',
            'posts_per_page' => -1,
            'post_parent'    => $post->ID,
            'orderby'          => 'rand'
        );
        $parent = new WP_Query( $args );

        if ( $parent->have_posts() ) : ?>

            <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>
                
                <tr class="movie-info" data-href="<?php the_permalink(); ?>">
                    <td data-label="Photo"> <a class="col-sm-2 img-main-page-container" href="<?php the_permalink(); ?>"><img class="img" src="<?php the_field('imagen'); ?>"  alt="post img"/></a></td>
                </tr>
            <?php endwhile; ?>
        <?php endif; wp_reset_postdata(); ?>
    </div>
<!-- content -->  

<?php get_footer(); ?>