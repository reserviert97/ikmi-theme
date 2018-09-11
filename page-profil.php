<?php 
/**
* ==================================    
* Template Name: Profil
* ==================================
**/
?>

<?php get_header(); ?>
    <div class="container">
        <div class="row">

            <div id="sidebar" class="col-sm-3 widget-area">
                <?php dynamic_sidebar( 'sidebar-4' ); ?>
            </div>
            
            <div class="col-sm-9 artikel pl-5 pt-3 pb-5">
            <?php 
            if(have_posts()) :
                while(have_posts()) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php the_title( '<h3 class="entry-title text-left">', '</h3>' ); ?>
                    <hr>
                

                    
                    <?php the_content(); ?>
                    
                </article>
            
                <?php
                endwhile;
            endif;
            ?>
                
            </div>
    
            
        
        </div>
    </div> <!-- akhir artikel-->
<?php get_footer(); ?>