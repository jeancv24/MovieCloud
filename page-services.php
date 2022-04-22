<?php get_header(); ?>

    <?php
        //loop
        while(have_posts() ) : the_post();
    ?>
        <h1><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>

        <?php //echo get_the_post_thumbnail(); ?>
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">

    <?php endwhile; ?>

    <?php get_template_part('includes/contact'); ?>

<?php get_footer(); ?>