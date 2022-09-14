<?php
/**
 * Template Name: Topics Page
 * Template Post Type: post, page
 */
get_header(); ?>


<div class="container mt-5">


<div class="row mb-5">

<div class="col-md-12">

<div class="accordion" id="accordionExample">

<?php 
  $args = array(  
    'post_type' => 'mec-events',
    'post_status' => 'publish',
    'posts_per_page' => -1, 
    'orderby' => 'date',
    'order'   => 'ASC',
  
  );
  $loop = new WP_Query( $args ); 
  $count = 0;
  ?>
  <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $count;?>" aria-expanded="true" aria-controls="collapse<?php echo $count;?>">
        <?php $theDate = get_post_meta( get_the_ID(), 'mec_start_date', true ); ?>
       <?php the_title();?> - <strong><?php echo date("l F d, Y", strtotime($theDate)) ?></strong>
      </button>
    </h2>
    <div id="collapse<?php echo $count;?>" class="accordion-collapse collapse <?php echo $count === 0 ? 'show' : ''; ?>" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <h3 class="mb-4"><?php the_title();?></h3>
      <?php the_content(); ?>
      </div>
    </div>
  </div>

  <?php
  $count++;
    endwhile;
    wp_reset_postdata(); 
    ?>


  <!-- <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Accordion Item #2
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Accordion Item #3
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div> -->
</div>
</div>
</div>



 
</div>
<?php
get_footer();

