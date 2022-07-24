<?php get_header(); ?>

<section class="cards-section">
        <div class="container-fluid py-5 px-5 text-center">
            <div class="row justify-content-center">
            <!-- the loop -->
            <?php
                while ( have_posts() ) : the_post(); 
                $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
            ?>
                
                <div class="col-sm-12 col-md-6 col-lg-4 px-1">
                                <div class="card card-01 mb-4  mx-auto">
                                    <img class="card-img-top" src="<?php echo $featured_img_url; ?>" alt="peliculas">
                                    <div class="card-body">
                                        <p class="top-btn"><?php the_content(); ?></p>
                                    </div>
                                </div>
                            </div>
                
            <?php endwhile; ?>
            <!-- end of the loop -->
            </div>
        </div>
</section>

<?php get_footer(); ?>