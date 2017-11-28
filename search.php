<?php
/**
 * The template for displaying search results pages
 */

get_header(); ?>


		<?php if ( have_posts() ) : ?>

			<?php //while ( have_posts() ) : the_post(); ?>
                
                <div class="row quote">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2>Your search results.</h2>
                    </div>
                </div>

                <div class="row postsList">
                   <?php echo wpb_mainpage_posts(); ?>
                </div>
                
                <?php

			// End the loop.
			//endwhile;
		else :
			echo '<div class="noSearch quote"><h2>No search results. <h2></div></div>';

		endif;
		?>
		
<?php get_footer(); ?>
