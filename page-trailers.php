<?php get_header(); ?>

<!-- title section -->
<div class="top-container">
    <img class="trailers-main-img" src="https://dev-peliresenas.pantheonsite.io/wp-content/uploads/2022/05/pexels-pixabay-33129-scaled-e1652134618688.jpg" alt="main img">
    <h1 class="trailers-title">Trailers</h1>
    <span class="line"></span>
</div>
<!-- title section -->

<!-- content -->
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
                <!-- imagen de link -->
                <td data-label="Photo"> <button type="button" class="trailer-btn col-sm-2" data-bs-toggle="modal" data-bs-target="#<?php the_field('id'); ?>">
                    <img src="<?php the_field('imagen'); ?>" class="img" alt="">
                </button></td>
                <!-- modal -->
                <td data-label="Name">
                    <div class="modal fade" id="<?php the_field('id'); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Trailer</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <iframe class="trailer-video" width="1280" height="720" src="<?php the_field('link'); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                <div class="modal-footer">
                                    <a class="btn btn-secondary top-linkDetalle" href="<?php the_field('linkdetalle'); ?>">Detalles</a>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        <?php endwhile; ?>

    <?php endif; wp_reset_postdata(); ?>
</div>
<!-- content -->  

<?php get_footer(); ?>