<?php 
/**
* ==================================    
* Template Name: Pengumunan Template
* ==================================
**/
?>
<?php get_header(); ?>


<main>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h4>Anda Mencari : </h4>
            <hr>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-sm-7">
            <div class="row">
                <?php
                    
                    if(have_posts()) : 
                        while(have_posts()) : the_post(); ?>
            
                        <div class="col-sm-12 mb-4">
                        
                            <div class="card shadow">
                                <div class="card-body">
                                <h5 class="card-title"><?php the_title(); ?></h5>
                                <p class="card-text"><p> <?php echo get_the_excerpt(); ?></p>
                                </div>
                                <div class="d-flex card-footer justify-content-between align-items-center">
                                    <small class="text-muted"><?php the_time('j F Y'); ?></small>
                                    <div class="btn-group">
                                        <a href="<?php the_permalink(); ?>"><button type="button" class="btn btn-sm btn-outline-secondary">Read More</button></a> 
                                    </div>
                                </div>
                            </div>
                    
                        </div>

                        <?php endwhile; ?>

                        <div class="col-6 text-left mb-4">
                            <?php previous_posts_link( '« Newer Posts'); ?>
                        </div>

                        <div class="col-6 text-right mb-4">
                            <?php next_posts_link( 'Older Posts »' ); ?>
                        </div>
                    <?php endif; wp_reset_query(); ?>

            </div>
        </div>

        <div id="sidebar" class="col-sm-3 widget-area">
            <?php dynamic_sidebar( 'sidebar-2' ); ?>
        </div>
    </div>

</div>



</main>





<?php get_footer(); ?>