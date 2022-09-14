<?php

/**
 * Blue Box Block Template.
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute
$id = 'logo-' . $block['id'];

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'logo';
if (!empty($block['className'])) {
  $class_name .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
  $class_name .= ' align' . $block['align'];
}

// Load values and assign defaults.
$content = get_field('logo_content');

?>
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 row-cols-lg-5">
  <?php if (have_rows('logo_content')) :
    while (have_rows('logo_content')) : the_row();
      $image = get_sub_field('image');
      $link = get_sub_field('link');
  ?>
      <div class="col d-flex justify-content-center">
        <a href="<?php echo $link ?>" target="_blank">
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
        </a>
      </div>
    <?php endwhile; ?>
  <?php endif ?>
</div>