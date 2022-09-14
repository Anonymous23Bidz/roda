<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-4NXP0FY47H"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-4NXP0FY47H');
  </script>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;600;700&display=swap" rel="stylesheet">

  <title>
    <?php
    if (function_exists('is_tag') && is_tag()) {
      single_tag_title("Tag Archive for &quot;");
      echo '&quot; - ';
    } elseif (is_archive()) {
      wp_title('');
      echo ' Archive - ';
    } elseif (is_search()) {
      echo 'Search for &quot;' . wp_specialchars($s) . '&quot; - ';
    } elseif (is_404()) {
      echo 'Not Found - ';
    } elseif (is_page() !== is_front_page()) {
      echo wp_title('');
      echo (' - ');
    }
    if (is_front_page()) {
      bloginfo('name');
    } else {
      bloginfo('name');
    }
    if ($paged > 1) {
      echo ' page ' . $paged;
    }
    ?>
  </title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <!-- HEADER  -->
  <header class="container-fluid">
    <div class="container">

      <div class="navbar">


      </div>

      <div class="header_nav bg-light">


        <nav class="navbar navbar-expand-lg navbar-light py-0">

          <div class="container px-0">
            <a class="navbar-brand" href="<?php echo home_url(); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/image/new-logo.png" alt="RODA Renewing our Democratic Alliance">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

              <div class="navbar-top d-none d-lg-block">
                <div class="navbar-top-search d-flex justify-content-end align-items-center">
                  <?php do_action('icl_language_selector'); ?>
                  <form class="searchbar">
                    <div class="form-field">
                      <i class="fa fa-search searchicon" aria-hidden="true"></i>
                      <input type="text" name="search" class="extand" value="<?php the_search_query(); ?>">
                    </div>
                  </form>
                </div>
              </div>
              <ul class="navbar-nav ml-auto mb-2 mb-lg-0 fs-6 d-flex align-items-center">

                <?php
                wp_nav_menu(array(
                  'theme_location'  => 'primary',
                  'container'       => '',
                  'items_wrap'      => '%3$s',
                  'fallback_cb'     => '__return_false',
                  'depth'           => 2,
                  'walker'          => new WP_bootstrap_4_walker_nav_menu()
                ));
                ?>
              </ul>
            </div>

          </div>

        </nav>

      </div>
    </div>
  </header>


  <?php /* if (!is_front_page()) : ?>
    <!-- BLOCK 1  -->
    <?php
    $featured_image = get_the_post_thumbnail_url();
    if (has_post_thumbnail()) : ?>
      <div class="container-fluid inner-banner" style="background-image: url('<?php echo $featured_image; ?>')">
      <?php else : ?>
        <div class="container-fluid inner-banner">
        <?php endif; ?>

        <div class="container-fluid bg_container">
          <div class="container">
            <h1 class="py-3">
              <?php if (!is_search()) : ?>
                <?php the_title(); ?>
              <?php else : ?>
                Search results
              <?php endif; ?>
            </h1>


          </div>
        </div>
        </div>
      <?php endif; */ ?>