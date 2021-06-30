<?php get_header(); ?>
<div class="container my-4">
    <div class="row">
        <div class="col-12 text-center">
            <?php 'the_archive_title();' ?>
        </div>
        <?php if (have_posts()) {
            while(have_posts()) {
                the_post(); ?>
                <div class="col-4 my-5 text-center-singlearchive">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('large'); ?>
                        <h4 class="my-3"><?php the_title(); ?></h4>
                    </a>
                </div>
           <?php } ?>
       <?php } ?>
    </div>
</div>

<?php get_footer(); ?>