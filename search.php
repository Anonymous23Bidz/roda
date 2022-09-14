<?php
/*
Template Name: Search Page
*/
get_header(); ?>

<div class="container mt-5">
	<div class="row">
		<div class="col-md-12">
			
				<?php
				while ( have_posts() ) : the_post();

				?>
				
				<a href="<?php the_permalink();?>" class="d-block mb-3"><h3><?php the_title();?></h3></a>
				<?php the_excerpt();?>
				<hr class="my-5">
				<?php

				endwhile; // End of the loop.
				?>
			
		</div>
	</div>
</div>




<?php
get_footer();