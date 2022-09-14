<?php

/**
 * Blue Box Block Template.
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute
$id = 'hero-banner-block-' . $block['id'];

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'hero-banner-block';
if (!empty($block['className'])) {
  $class_name .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
  $class_name .= ' align' . $block['align'];
}

// Load values and assign defaults.
$backgroundImage = get_field('background');
$headline = get_field('headline');
$twitter_widget = get_field('twitter_widget_link');
$button = get_field('button');

?>

<!-- BLOCK 1  -->
<div class="container-fluid hero-banner" style="background: url('<?php echo $backgroundImage['url']; ?>') no-repeat center center/cover;">
  <div class="container-fluid bg_container">
    <div class="container section section__hero hero-container">
      <div class="row align-items-center h-100">
        <div class="col-md-6 mt-0 mt-md-5 headline">
          <h1><?php the_title(); ?></h1>
          <p class="py-3  lh-base paragraph fs-5">
            <?php echo $headline ?>
          </p>
          <?php if ($button) : ?>
            <a class="btn btn-red text-capitalize" href="<?php echo $button['url']; ?>"><?php echo $button['title'] ?></a>
          <?php endif ?>
        </div>
        <div class="col-md-6 mt-5 mt-md-0 mx-auto twitter-container">
          <?php //if( ICL_LANGUAGE_CODE =='en' ): 
          ?>
          <?php if ($twitter_widget) : ?>
            <a class="twitter-timeline" data-height="500" data-chrome="nofooter" data-theme="light" href="https://twitter.com/RODAnetwork">Tweets by GermanyInCanada</a>
            <script async src="<?php echo $twitter_widget ?>" charset="utf-8"></script>
          <?php endif; ?>
          <?php //else : 
          ?>
          <!-- <a class="twitter-timeline" data-height="500" data-chrome="nofooter" data-theme="light" href="https://twitter.com/kas_canada">Tweets by GermanyInCanada</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>  -->
          <?php //endif; 
          ?>
        </div>
      </div>

    </div>
  </div>
</div>
</div>