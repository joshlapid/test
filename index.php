<?php get_header(); ?>


<div id="content-container" class="container">
    <div class="row">
        <div class="col-sm-2">
            <?php get_sidebar(); ?>
        </div>
        <div class="col-sm-10">

            <?php
            if( have_posts() ):

                while( have_posts() ): the_post(); ?>

                    <!-- 'content' is a placeholder for the file name content.php, it can be changed to anything. -->
                    <?php  get_template_part( 'content', get_post_format() ); ?>

                <?php endwhile;

            endif;

            ?>
        </div>
    </div>

</div>
<section id="register-section">
    <div class="container text-center">
        <h5 id="section-three-heading">ACTION TEXT</h5>
        <a id="register-now-button" href="#">REGISTER NOW</a>
    </div>
</section>

<?php get_footer(); ?>
