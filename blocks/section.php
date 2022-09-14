<?php
/**
 * Section Block Template.
 *
 */

?>
<div class="container-fluid text-section">
    <div class="container section">
        <?php
            $allowed_blocks = array( 'core/heading', 'core/paragraph' );
            echo '<InnerBlocks allowedBlocks="' . esc_attr( wp_json_encode( $allowed_blocks ) ) . '" />';
        ?>
    </div>
</div>