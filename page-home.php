<?php 
/**
* ==================================    
* Template Name: Homepage
* ==================================
**/

get_header(); ?>

<!-- Slider -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" class="slider">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="<?php echo get_home_url().'/wp-content/uploads/2018/08/73-tahun-kemerdekaan-indonesia.jpg'; ?>" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            <h5 class="display-4">Dirgahayu Kemerdekaan Republik Indonesia</h5>
            <p class="lead">Segenap civitas akademika STMIK IKMI CIREBON mengucapkan HUT ke- 73 Republik Indonesia </p>
          </div>
        </div>

        <div class="carousel-item">
          <img class="d-block w-100" src="<?= get_home_url().'/wp-content/uploads/2018/08/slide2.png'; ?>" alt="Second slide">
          <div class="carousel-caption d-none d-md-block">
            <h5 class="display-4">Joint Degree</h5>
            <p class="lead">STMIK IKMI CIREBON baru saja melakukan joint degree dengan universitas lain</p>
          </div>
        </div>

        <div class="carousel-item">
          <img class="d-block w-100" src="<?= get_home_url().'/wp-content/uploads/2018/08/slide1.png'; ?>" alt="Third slide">
          <div class="carousel-caption d-none d-md-block">
            <h5 class="display-4">Mahasiswa STMIK IKMI tiba di Kamboja</h5>
            <p class="lead">Batch ke-5 Mahasiswa RI Program Double Degree di NPIC Tiba di Kamboja</p>
          </div>
        </div>
      </div>

      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div> <!-- akhir slider -->

    <!-- Jumbotron -->
    <div class="jumbotron  text-center">
        <h1 class="">HUT Ke-73 Republik Indonesia</h1>
        <p>Kami mewakili seluruh civitas Akademika STMIK IKMI CIREBON mengucapkan</p>
        <p>Dirgahayu Kemerdekaan Republik Indonesia ke-73</p>
    </div> <!-- akhir jumbotron-->
    

    <!-- awal berita & Pengumuman-->
    <div class="container">
      <div class="row">
        <!-- Berita -->
        <div class="col-md-9">
          <h2 class="text-center">Berita</h2>
          <hr class="mb-3">

          <div class="row">

          
            <?php 
            $custom_post = new WP_Query('posts_per_page=6');
            if($custom_post -> have_posts()) : ?>
              <?php while( $custom_post -> have_posts()) : $custom_post -> the_post(); ?> 
                <div class="col-md-4 col-sm-6">
                  <div class="card mb-4 shadow-lg">
                    <?php if( has_post_thumbnail() ): 
                            $urlImg = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );    
                          endif;
                    ?>
                    <img class="card-img-top" src="<?php echo $urlImg; ?>" alt="Card image cap">
                    <div class="card-body">
                      <p class="card-text"><?php the_title(); ?></p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a href="<?php the_permalink(); ?>"><button type="button" class="btn btn-sm btn-outline-secondary">View</button></a> 
                        </div>
                        <small class="text-muted"><?php the_time('j F Y'); ?></small>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endwhile; ?>
            <?php endif; wp_reset_query(); ?>

        

          </div>

          <div class="row">
            <div class="col-12 text-right">
              <p><a href="/berita/" class="text-secondary">Semua Berita</a></p>
            </div>
          </div>
            

        </div>

        <div class="col-md-3">
          <h2 class="text-center">Pengumuman</h2>
          <hr class="mb-3">
          
          <div class="row">
            <?php
            $args = array('post_type' => 'pengumuman', 'posts_per_page' => 4);
            $loop = new WP_Query( $args );   
            if($loop->have_posts()) : 
                while($loop->have_posts()) : $loop->the_post(); ?>

                <div class="col-12">
                  <div class="card mb-4 shadow">
                      <div class="card-header"></div>
                      <div class="card-body text-right">
                          <a href="<?php the_permalink(); ?>" class="text-secondary"><?php the_title(); ?></a>
                          <br>
                          <small class="text-muted"><?php the_time('j F Y'); ?></small>
                      </div>
                  </div>
                </div>

              <?php endwhile;  ?>
            <?php endif; ?>

          </div>

          <div class="row">
            <div class="col-12 text-right">
              <p><a href="/pengumuman/" class="text-secondary">Semua Pengumuman</a></p>
            </div>
          </div>


        </div>
      </div>
    </div> <!-- akhir berita dan pengumuman -->

    <section> <!-- partner -->
        <div class="container">
            <div class="row mt-4">
                <div class="col-12 text-center">
                    <h2>Partnership</h2>
                    <hr class="mb-5">
                </div>
                <div class="row justify-content-center mb-4">
                    <div class="col-md-2 col-sm-4 col-4 text-center mb-4">
                        <img src="<?= get_home_url().'/wp-content/uploads/2018/08/2.png'; ?>" width="70%" alt="">
                    </div>
                    <div class="col-md-2 col-sm-4 col-4 pt-3 text-center mb-4">
                        <img src="<?= get_home_url().'/wp-content/uploads/2018/08/3.png'; ?>" width="90%" alt="">
                    </div>
                    <div class="col-md-2 col-sm-4 col-4 text-center mb-4">
                        <img src="<?= get_home_url().'/wp-content/uploads/2018/08/4.png'; ?>" width="65%" alt="">
                    </div>
                    <div class="col-md-2 col-sm-4 col-4 text-center pt-1 mb-4">
                        <img src="<?= get_home_url().'/wp-content/uploads/2018/08/5.png'; ?>" width="90%" alt="">
                    </div>
                    <div class="col-md-2 col-sm-4 col-4 text-center pt-4 mb-4">
                        <img src="<?= get_home_url().'/wp-content/uploads/2018/08/6.png'; ?>" width="95%" alt="">
                    </div>
                
                    <div class="col-md-2 col-sm-4 col-4 text-center pt-4 mb-4">
                        <img src="<?= get_home_url().'/wp-content/uploads/2018/08/7.png'; ?>" width="100%" alt="">
                    </div>
                    <div class="col-md-2 col-sm-4 col-4 text-center pt-2 mb-4">
                        <img src="<?= get_home_url().'/wp-content/uploads/2018/08/8.png'; ?>" width="70%" alt="">
                    </div>
                    <div class="col-md-2 col-sm-4 col-4 text-center pt-4 mb-4">
                        <img src="<?= get_home_url().'/wp-content/uploads/2018/08/9.png'; ?>" width="80%" alt="">
                    </div>
                    <div class="col-md-2 col-sm-4 col-4 text-center pt-2 mb-4">
                        <img src="<?= get_home_url().'/wp-content/uploads/2018/08/10.png'; ?>" width="70%" alt="">
                    </div>
                    <div class="col-md-2 col-sm-4 col-4 text-center mb-4">
                        <img src="<?= get_home_url().'/wp-content/uploads/2018/08/11.png'; ?>" width="50%" alt="">
                    </div>
                </div>
                
            </div>
        </div>
    </section> <!-- akhir partner-->
    
    
    <section class="map-video pb-5 pt-5 bg-light"> <!-- awal map & video -->
        <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2>Aktifitas Kami</h2>
                        <hr class="mb-4">
                    </div>
                </div>
            <div class="row">
                
                <div class="col-sm-6 mb-4">
                    <div class="map-responsive">
                    <iframe class="shadow" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15849.090377448061!2d108.5270995!3d-6.7365628!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3e146375f0046403!2sSekolah+Tinggi+Manajemen+Informatika+dan+Komputer+IKMI!5e0!3m2!1sid!2sid!4v1534584699988" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="video-responsive">
                        <iframe class="shadow" width="560" height="315" src="https://www.youtube.com/embed/gpQzdgP7oQ8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen ></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- akhir map dan video -->

<?php get_footer(); ?>