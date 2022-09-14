<?php
get_header(); ?>


<div class="container my-5">
  
  <div class="row">
    <div class="col-xl-3">

      <?php if(has_post_thumbnail()):?>
      <?php echo the_post_thumbnail( 'medium_large', ['class' => 'img-fluid rounded', 'title' => 'Roda Renewing our Democratic Alliance - '.get_the_title().'']); ?>
      <?php else: ?>
      <div class="no-image"></div>
      <?php endif; ?>

    </div>

    <div class="col-xl-9 ps-4">
      <h2 class="mt-4 mt-lg-0 mb-3"><?php the_title(); ?></h2>
      <?php if(get_field('panel_title')):?>
      <p class="h4 mb-3"><?php the_field('panel_title'); ?></p>
      <?php endif; ?>
      <?php the_content();?>
    </div>
  </div>



</div>
<?php
get_footer();