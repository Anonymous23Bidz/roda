<?php
function my_acf_init_block_types()
{
  acf_register_block_type([
    'name'              => 'hero',
    'title'             => __('Hero', 'pk'),
    'description'       => __('Hero Block', 'pk'),
    'render_template'   => 'blocks/hero.php',
    'icon'              => 'cover-image',
    'mode'              => 'edit',
    'category'          => 'pk-blocks',
    'keywords'          => ['hero', 'banner'],
    'supports'          => array('anchor' => true)
  ]);

  acf_register_block_type([
    'name'              => 'logo',
    'title'             => __('Logo Block', 'pk'),
    'description'       => __('Logo Block', 'pk'),
    'render_template'   => 'blocks/logo-block.php',
    'icon'              => 'cover-image',
    'mode'              => 'edit',
    'category'          => 'pk-blocks',
    'keywords'          => ['logo' . 'quote'],
    'supports'          => array('anchor' => true)
  ]);

  acf_register_block_type([
    'name'              => 'section',
    'title'             => __('Section', 'pk'),
    'description'       => __('Simple content section', 'pk'),
    'icon'              => 'align-full-width',
    'mode'              => 'preview',
    'category'          => 'pk-blocks',
    'keywords'          => ['row', 'section'],
    'supports'          => array(
        'align' => true,
        'mode' => false,
        'jsx' => true
    ),
    'render_template'   => 'blocks/section.php',
  ]);

  acf_register_block_type([
    'name'              => 'pdf list',
    'title'             => __('PDF list', 'pk'),
    'description'       => __('PDF files list', 'pk'),
    'icon'              => 'document',
    'mode'              => 'preview',
    'category'          => 'pk-blocks',
    'keywords'          => ['pdf', 'files'],
    'supports'          => array('anchor' => true),
    'render_template'   => 'blocks/pdf-list.php',
  ]);
}


add_action('acf/init', 'my_acf_init_block_types');

add_action('init', function () {
  register_block_style('core/image', [
    'name' => 'pushed-image-right',
    'label' => __('Pushed Image Left', 'roda'),
  ]);
});

register_block_style('core/columns', [
  'name' => 'reverse-mobile',
  'label' => __('Reverse Column Mobile', 'protak'),
]);
