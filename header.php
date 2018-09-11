<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo( 'name' ); wp_title( ' | '); ?></title>
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <?php wp_head(); ?>
</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
            <img src="<?php echo get_home_url().'/wp-content/uploads/2018/08/icon.png'; ?>" width="40" height="40" class="d-inline-block align-top mr-2 logo-kecil" alt="">
        </a>
        <a href="<?php echo get_home_url(); ?>" class="text-dark">STMIK IKMI CIREBON</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php 
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => 'navbar-nav ml-auto',
                    'walker' => new Walker_Nav_Primary()
                    )
                );
            ?>
        </div>
    </div>
</nav>
<!-- akhir navbar -->
<?php if(is_front_page() ) : ?>
    
<?php else: ?>
    <!-- Jumbotron -->
    <div class="jumbotron  text-center">
        <h1 class="">HUT Ke-73 Republik Indonesia</h1>
        <p>Kami mewakili seluruh civitas Akademika STMIK IKMI CIREBON mengucapkan</p>
        <p>Dirgahayu Kemerdekaan Republik Indonesia ke-73</p>
    </div> <!-- akhir jumbotron-->
       
<?php endif; ?>
