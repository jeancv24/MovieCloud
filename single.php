<?php get_header(); ?>

    <?php
        // Start the loop.
        while ( have_posts() ) : the_post();
            
            $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'medium');
            //thumbnail, medium, large, full
    ?>

        <section class="artist-section py-4">
            <div class="container text-center">
                <div class="row">

                <img class="img-fluid" src="<?php echo $featured_img_url; ?>" alt="">
                    <div class="col-12 px-2 px-lg-5">
                        <h2 class="pb-1"><?php the_title(); ?></h2>
                        <p><?php the_content(); ?></p>
                    </div>
                </div>
            </div>
        </section>

    <?php
        // End the loop.
        endwhile;
    ?>

<?php get_footer(); ?>