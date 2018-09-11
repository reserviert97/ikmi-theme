<?php get_header(); ?>


<main>
<div class="container">
    <div class="row">
        <div class="col-sm-9">
            <div class="row">
                <?php if(have_posts()) : 
                    while(have_posts()) : the_post(); ?>

                    <?php if( has_post_thumbnail() ): 
                            $urlImg = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );    
                        endif;
                    ?>
                <div class="col-sm-5 mb-2">
                    <img src="<?= $urlImg; ?>" class="img-fluid shadow" alt="..." style="background-size:cover;">
                </div>
                <div class="col-sm-7 mb-4">
                
                    <div class="card shadow">
                        <div class="card-body">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <p class="card-text"><p> <?php echo get_the_excerpt(); ?></p>
                        </div>
                        <div class="d-flex card-footer justify-content-between align-items-center">
                            <small class="text-muted"><?php the_time('j F Y'); ?></small>
                            <div class="btn-group">
                                <a href="<?php the_permalink(); ?>"><button type="button" class="btn btn-sm btn-outline-primary">Read More</button></a> 
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

        <div class="col-sm-3">
            <?php get_sidebar(); ?>
        </div>
    </div>

</div>



</main>





<?php get_footer(); ?>