<?php

get_header();

the_content();
?>


<?php
if (have_rows('meet_the_participants')) :
  while (have_rows('meet_the_participants')) : the_row();
    $headline = get_sub_field('headline');
    $sub_heading = get_sub_field('sub_heading');
?>
    <section class="block2 lh-lg px-0 section__participant">
      <div class="container">
        <p class="h1 fw-bold"><?php echo $headline ?></p>
        <div class="cp-0 pt-4 block2_content">
          <div class="row">
            <div class="col col-12 col-md-8 col-lg-5 block2_content-col1">
              <p><?php echo $sub_heading ?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid px-0">
        <div class="container">
          <div class="js-slider slider-nav mt-5">
            <?php
            $args = array(
              'post_type' => 'speakers',
              'post_status' => 'publish',
              // 'posts_per_page' => 6, 
              'orderby' => 'date',
              'order'   => 'ASC',
            );
            $loop = new WP_Query($args);
            while ($loop->have_posts()) : $loop->the_post(); ?>

              <div class="block2_content-col1 team-avatar">
                <?php if (has_post_thumbnail()) : ?>
                  <?php echo the_post_thumbnail('medium_large', ['class' => 'img-fluid rounded', 'title' => 'Roda Renewing our Democratic Alliance - ' . get_the_title() . '']); ?>
                <?php else : ?>
                  <div class="no-image"></div>
                <?php endif; ?>

                <?php
                $member = preg_split("/\,/", get_the_title());
                $name = $member[0];
                $title = $member[1];
                ?>
                <p class="text-center mt-4 mb-0 name"> <?php echo $name; ?> </p>
                <p class="text-center title"> <?php echo $title; ?> </p>
              </div>

            <?php endwhile;
            wp_reset_postdata(); ?>
          </div>
        </div>
      </div>
      </div>
    </section>
  <?php endwhile;
  wp_reset_postdata(); ?>
<?php endif; ?>


<!-- BLOCK 3  -->
<?php if (have_rows('third_description')) :
  while (have_rows('third_description')) : the_row();
    $card_content = get_sub_field('card_content');
    $description = get_sub_field('description');
?>
    <div class="container-fluid block3 lh-lg">
      <div class="bg_container">
        <div class="container section section__about">
          <div class="block3_content">
            <div class="row">
              <div class="col col-12 col-lg-5 block3_content-col0 card">
                <?php if (have_rows('card_content')) :
                  while (have_rows('card_content')) : the_row();
                    $title = get_sub_field('card_title');
                    $content = get_sub_field('content');
                    $members = get_sub_field('team_members');
                    $button = get_sub_field('button_invitation');
                    // echo "<pre>";
                    // print_r($members);
                    // echo "</pre>";
                ?>

                    <h2 class="font-weight-600 mb-4"><?php echo $title ?></h2>

                    <p><?php echo $content ?></p>

                    <div class="row">

                      <?php foreach ($members as $member) :
                        $permalink = get_permalink($member->ID);
                        $title = get_the_title($member->ID);
                        $custom_field = get_field('field_name', $member->ID);
                      ?>

                        <div class="col team text-center my-4">
                          <img class="team-avatar" src="<?php echo get_the_post_thumbnail_url($member->ID); ?>" alt="team image">

                          <?php
                          $member = preg_split("/\,/", $title);
                          $name = $member[0];
                          $title = $member[1];
                          ?>
                          <p class="text-center mt-4 mb-0 name"> <?php echo $name; ?> </p>
                          <p class="text-center title"> <?php echo $title; ?> </p>

                        </div>
                      <?php endforeach; ?>
                    </div>

                    <a class="btn btn-blue text-capitalize" href="<?php echo $button['url']; ?>"><?php echo $button['title'] ?></a>
                  <?php endwhile;
                  wp_reset_postdata() ?>
                <?php endif; ?>
              </div>

              <div class="col col-12 col-lg-5 offset-0 offset-lg-1 mt-3 mt-md-0 block3_content-col1">
                <?php if (have_rows('description')) :
                  while (have_rows('description')) : the_row();
                    $about = get_sub_field('about');
                    $whatsNext = get_sub_field('whats_next');
                    $button = get_sub_field('button');
                ?>
                    <h1 class="mt-5">About</h1>
                    <p class="my-4"><?php echo $about ?></p>

                    <h1 class="mt-5">What’s Next?</h1>
                    <p class="my-4"><?php echo $whatsNext ?></p>

                    <a class="btn btn-red text-capitalize" href="<?php echo $button['url']; ?>"><?php echo $button['title'] ?></a>

                  <?php endwhile;
                  wp_reset_postdata() ?>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  <?php endwhile;
  wp_reset_postdata(); ?>
<?php endif; ?>


<!-- BLOCK 4 SCHEDULE  -->
<?php if (have_rows('fourth_description')) :
  while (have_rows('fourth_description')) : the_row();
    $firstColumn = get_sub_field('join_effort');
    $secondColumn = get_sub_field('image_slider');
?>
    <div class="container-flued block4">
      <div class="container section section__join-effort">
        <div class="row">

          <?php if (have_rows('join_effort')) :
            while (have_rows('join_effort')) : the_row();
              $details = get_sub_field('details');
          ?>
              <!-- left block  -->
              <div class="col col-12 col-lg-6 first-column">

                <h2 class="mb-5">Join Effort by</h2>

                <div class="company-details">

                  <?php if (have_rows('details')) :
                    while (have_rows('details')) : the_row();
                      $logo = get_sub_field('logo');
                      $title = get_sub_field('title');
                      $description = get_sub_field('description');
                  ?>

                      <div class="col d-block d-md-flex my-4">
                        <div class="logo">
                          <img src="<?php echo esc_url($logo['url']); ?>" alt="">
                        </div>
                        <div class="details">
                          <h4><?php echo $title ?></h4>
                          <p class="mb-0"><?php echo $description ?></p>
                        </div>
                      </div>
                      <hr>
                    <?php endwhile; ?>
                  <?php endif; ?>
                </div>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
          <!-- right block  -->

          <div class="col col-12 col-lg-6 mt-4 mt-lg-0 second-column d-block justify-content-center slider-effort">
            <?php if (have_rows('image_slider')) :
              while (have_rows('image_slider')) : the_row();
                $image = get_sub_field('image');
                $title = get_sub_field('title');
            ?>
                <div class="image-slides">
                  <img src="<?php echo esc_url($image['url']); ?>" alt="">
                </div>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  <?php endwhile;
  wp_reset_postdata(); ?>
<?php endif; ?>

<?php
get_footer();
