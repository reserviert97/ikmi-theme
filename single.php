<?php get_header(); ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 artikel pb-5">
            <?php 
            if(have_posts()) :
                while(have_posts()) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php the_title( '<h3 class="entry-title text-left">', '</h3>' ); ?>
                    <p class="small text-left"> <?php the_author(); ?> | <?php the_time('D, j F Y'); ?> </p>

                    <?php if ( has_post_thumbnail() ): 
                        $urlImg = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ); ?>
                        <div class="justify-content-center">
                            <img src="<?= $urlImg ?>" alt="" width="" class="mb-5 img-thumbnail shadow-sm">
                        </div>
                    <?php endif; ?>

                    
                    <?php the_content(); ?>
                    <hr>
                    <small class="text-left" >
                        <p> Kategori : <?php the_category(' '); ?> </p>
                        <p> Tags : <?php the_tags(); ?>  </p>
                    </small>
                    <br>
                    <br>
                    <br>
                    <p><a href="/berita"> « Kembali ke Berita</a></p>
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