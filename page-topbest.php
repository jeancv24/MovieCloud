<?php get_header(); ?>


<!-- content -->

<div class="">
    <h1>Top Recomended</h1>
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
                    <td data-label="Photo">
                        <button type="button" class="top-btn col-sm-2" data-bs-toggle="modal" data-bs-target="#<?php the_field('id'); ?>">
                            <p class="top-category-movie"><?php the_field('category'); ?></p>
                            <img src="<?php the_field('imagen'); ?>" class="img" alt="imagen">
                        </button>
                    </td>
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
                                        <a class="btn btn-secondary top-linkDetalle" href="<?php the_field('linkdetalle'); ?>">Details</a>
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

</div>
<!-- content -->
<?php get_footer(); ?>