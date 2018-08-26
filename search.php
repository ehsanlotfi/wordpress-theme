<?php get_header(); ?>
    <div class="list-group">
        <?php
            if ( have_posts() ) {while ( have_posts()   ) {  the_post();?>
            <a href="<?php the_permalink(); ?>" class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1"><?php the_author(); ?></h5>
                <small class="text-muted"><?php the_date(); ?></small>
            </div>
            <p class="mb-1"><?php the_title() ?></p>
        </a>
        <?php } } ?>
    </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>