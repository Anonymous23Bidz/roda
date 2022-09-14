<?php
/**
 * PDF List Block Template.
 *
 */
// Create id attribute
$id = 'pdf-list-block-' . $block['id'];

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'pdf-list-block';
if (!empty($block['className'])) {
  $class_name .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
  $class_name .= ' align' . $block['align'];
}

// Load values and assign defaults.
$pdf_list = get_field('pdfs');
?>
<div class="container-fluid pdf-list-section">
    <div class="container section">
        <div class="row row-cols-md-5">
            <?php
                foreach( $pdf_list as $pdf ) {
                    $title = $pdf['title'];
                    $author = $pdf['author'];
                    $date = $pdf['date'];
                    $file = $pdf['file'];
            ?>
                <div class="col border-dark border-2 pdf-file">
                    <figure>
                        <img src="/wordpress/wp-content/uploads/2022/09/Icon-awesome-file-pdf.png">
                    </figure>
                    <a href="<?php echo $file; ?>"><b><?php echo $title; ?></b></a>
                    <p class="pdf-author"><?php echo $author; ?></p>
                    <p class="pdf-date"><?php echo $date; ?></p>
                </div>
            <?php } ?>
        </div>
    </div>
</div>