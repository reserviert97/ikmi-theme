<?php get_header(); ?>
    <div id="primary" class="container">
        <main id="main" class="site-main row text-center" role="main">
        
            <section class="error-404 not-found col-12">
                <header class="page-header mb-3 pb-3 pt-5">
                    <h1 class="page-title">Maaf, Halaman yang anda minta tidak ada</h1>
                </header>

                <div class="page-content mb-5 pb-5">
                    <h3 class="mb-4">Halaman yang anda minta tidak ada, ingin mencoba untuk mencarinya ? </h3>

                    <?php get_search_form(); ?>
                    

                </div>

            </section>
        
        </main>
    </div>
<?php get_footer(); ?>