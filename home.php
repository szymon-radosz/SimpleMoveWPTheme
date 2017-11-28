<?php get_header(); ?>
            
            <!-- page displayed like front page -->

            <div class="row quote">
                <div class="col-sm-8 col-sm-offset-2">
                    <h2>The simplest things are often the truest.</h2>
                </div>
            </div>

            <div class="row postsList">

               <?php echo wpb_mainpage_posts(); ?>

                <div class="col-sm-12">
                    <a href="http://simple-move.eu/blog"><h3 class="viewMore">View more</h3></a>
                </div>
            </div>
        </div>

<?php get_footer(); ?>
