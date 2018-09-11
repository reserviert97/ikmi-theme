<?php get_header(); ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 pr-5 artikel pb-5">
            <?php 
            if(have_posts()) :
                while(have_posts()) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php the_title( '<h3 class="entry-title text-left">', '</h3>' ); ?>
                    <p class="small text-left"> <?php the_author(); ?> | <?php the_time('D, j F Y'); ?> </p>

                    <?php if ( has_post_thumbnail() ): 
                        $urlImg = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ); ?>
                        <div class="row justify-content-center">
                            <img src="<?= $urlImg ?>" alt="" width="70%" class="my-3 mb-5 img-thumbnail shadow-sm">
                        </div>
                    <?php endif; ?>

                    
                    <?php the_content(); ?>
                    <hr>
                    <small class="text-left" >
                        <p> Kategori : <?php echo awesome_get_terms( $post->ID, 'field' ); ?> </p>
                        <p> Tags : <?php echo awesome_get_terms($post->ID, 'tentang'); ?>  </p>
                    </small>
                    <br>
                    <br>
                    <br>
                    <p><a href="/pengumuman-terkini/"> « Kembali ke Pengumuman</a></p>
                </article>
            
                <?php
                endwhile;
            endif;
            ?>
                
            </div>
    
            <div id="sidebar" class="col-sm-3 widget-area">
                <?php dynamic_sidebar( 'sidebar-3' ); ?>
            </div>
        
        </div>
    </div> <!-- akhir artikel-->
    
<?php get_footer(); ?>