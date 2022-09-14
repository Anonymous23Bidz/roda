<?php
/**
 * Template Name: Connect Page
 * Template Post Type: post, page
 */
get_header(); ?>


<div class="container mt-5">
  
<?php 


// get all the categories from the database
$cats = get_terms( array(
    'taxonomy' => 'panels',
)); 

// loop through the categories
foreach ($cats as $cat) {
    // setup the category ID
    $cat_id = $cat->term_id;

    $show_ids = array(8,9,10,11,12, 22, 23, 24);
  if(in_array($cat_id, $show_ids)):
?>
  <div class="row py-5">
  <?php 
  $args = array(  
    'post_type' => 'speakers',
    'post_status' => 'publish',
    'posts_per_page' => -1, 
    'orderby' => 'date',
    'order'   => 'ASC',
    'tax_query' => array( 
      array( 
          'taxonomy' => 'panels', //or tag or custom taxonomy
          'field' => 'slug', 
          'terms' => $cat->slug,
      ) 
  ) 
  
  );


  $loop = new WP_Query( $args ); 

  ?>

  <h2 class="h1 text-center mb-5"><?php echo $cat->name; ?></h2>
  <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
  <?php if(get_field('organization_biography') == '' ): ?>
    <div class="col-6 col-md-4 col-lg-3 mb-5">
      <a href="<?php the_permalink();?>">
        <?php if(has_post_thumbnail()):?>
        <?php echo the_post_thumbnail( 'medium_large', ['class' => 'img-fluid rounded', 'title' => 'Roda Renewing our Democratic Alliance - '.get_the_title().'']); ?>
        <?php else: ?>
        <div class="no-image"></div>
        <?php endif; ?>
        <label class="text-center d-block my-4"><?php the_title(); ?></label>
        </a>
    </div>
    <?php endif; ?>
    <?php
    endwhile;
    wp_reset_postdata(); 
    ?>
  </div>

  <?php endif; } ?>


  <div class="row">
  <?php 
  $args2 = array(  
    'post_type' => 'speakers',
    'post_status' => 'publish',
    'posts_per_page' => -1, 
    'orderby' => 'date',
    'order'   => 'ASC',
    'meta_query'=> array(
    array(
      'key' => 'organization_biography',
      'compare' => '=',
      'value' => true,
    )
),
  );
  $loop2 = new WP_Query( $args2 ); 
  ?>
  <h2 class="h1 text-center my-5"><?php echo __( 'Organization Biographies', 'roda' ); ?></h2>
  <?php while ( $loop2->have_posts() ) : $loop2->the_post(); ?>
    <div class="col-6 col-md-4 col-lg-3 mb-5">
      <a href="<?php the_permalink();?>">
        <?php if(has_post_thumbnail()):?>
        <?php echo the_post_thumbnail( 'medium_large', ['class' => 'img-fluid rounded', 'title' => 'Roda Renewing our Democratic Alliance - '.get_the_title().'']); ?>
        <?php else: ?>
        <div class="no-image"></div>
        <?php endif; ?>
        <label class="text-center d-block my-4"><?php the_title(); ?></label>
        </a>
    </div>
    <?php
    endwhile;
    wp_reset_postdata(); 
    ?>
  </div>




</div>
<?php
get_footer();

