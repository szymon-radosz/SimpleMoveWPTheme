<?php get_header(); ?>

		<?php
		while ( have_posts() ) : the_post();


            //display content here
            ?>
            
            <div class="row samplePost">
                <h1 class="singleTitle"><?php single_post_title(); ?> </h1>
                <h6 class="singleDate"><?php the_date('d/m/Y'); ?></h6>
                <div class="postContent">
                    <?php the_post_thumbnail('large', array('class' => 'singleImage')); ?>
                    <p class="singlePostContent"><?php the_content(); ?></p>
                </div>
                <div class="readAlso">
                    <h2>Read also</h2>
                     <?php echo wpb_rand_posts() ?>
                </div>
                
                <div class="commentsList">
                    <h2>Comments</h2>
            
                    <?php 
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;
                    ?>
                    
                </div>
                
            </div>
</div>

		<?php endwhile;
		?>


<?php get_footer(); ?>
