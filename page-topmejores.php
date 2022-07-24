<?php get_header(); ?>


<!-- content -->

<div class="">
    <h1 class="mb-1 mt-4">Top Recomendadas</h1>
<!-- content -->
<section class="cards-section">
    <div class="container-fluid py-5 px-5 text-center">
    <div class="d-flex justify-content-center">
        <?php
            $categories = get_categories( array(
                'orderby' => 'name',
                'order'   => 'ASC'
            ) );
 
            foreach( $categories as $category ) {
                echo '<div class="col-md-4"><a class="btn btn-primary topbest-btn" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></div>'; 
            } 
            ?>
    </div>

    <?php 
        // the query
        //get all post
        $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1));

        //get # of posts
        //$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>3));

        //get posts from category
        //$wpb_all_query = new WP_Query(array('category_name' => 'educacion', 'posts_per_page' =>-1));

    ?>
        
        
        <?php if ( $wpb_all_query->have_posts() ) : ?>
            
            <section class="cards-section">
                    <div class="container-fluid py-5 px-5 text-center">
                        <div class="row justify-content-center">
                        <!-- the loop -->
                        <?php
                            while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); 
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
            
        <?php wp_reset_postdata(); ?>
        
        <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
        
        

    </div>
</section>
<!-- content -->
<?php get_footer(); ?>