<?php 
/* Template Name: Movie Template */

get_header(); ?>

<!-- content -->

<div class="detalle-container d-flex justify-content-center row">
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="row">
            <div class="col-sm">  
                <div class="row">  
                    <img src="<?php the_field('imagen'); ?>" class="img detalle-img" alt="img de la pelicula">
                </div>
                <div class="row">
                    <td data-label="Photo"> <button type="button" class="btn btn-primary detalle-btn" data-bs-toggle="modal" data-bs-target="#modal">Trailer</button></td>
                    <!-- modal -->
                    <td data-label="Name">
                        <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Trailer</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <iframe width="1280" height="720" src="<?php the_field('trailer'); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </div>
            </div>
            <div class="texto-detalle col-sm">                
                <p class="detalle-titulo"><?php the_field('title'); ?></p>
                <p><?php the_field('description'); ?></p>
                <p class="datos-detalle"><?php the_field('director'); ?></p>
                <p class="datos-detalle"><?php the_field('reparto'); ?></p>
                <p class="datos-detalle"><?php the_field('genero'); ?></p>
                <p class="datos-detalle"><?php the_field('ano'); ?></p>
                <p class="datos-detalle"><?php the_field('duracion'); ?></p>
                <p class="rate-style"><?php the_field('rate'); ?></p>
            </div>
        </div>
    <?php endwhile; ?>
    </div>
<!-- content -->
<?php get_footer(); ?>