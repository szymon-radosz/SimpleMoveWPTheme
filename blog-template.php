<?php 
/*
Template Name: Blog post list
*/

get_header(); ?>
            
            <!-- page displayed blog posts -->

            <div class="row quote">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2>Blog post list.</h2>
                </div>
            </div>

            <div class="row postsList">

               <?php echo wpb_mainpage_posts(); ?>

            </div>
        </div>

<?php get_footer(); ?>
