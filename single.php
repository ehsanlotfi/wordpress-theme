<?php get_header(); ?>
<?php if( have_posts() ): while( have_posts() ): the_post(); ?>
  <div class="single">
	    <h5><?php the_title(); ?></h5>
    <hr>
    <div><?php the_content(); ?></div>
</div>
    <?php endwhile; endif ?>
    <?php comment_form(); ?>
    <div class="comments">
    <?php
$args = array(
    "post_id"=> get_the_ID()
);

$comments_query = new WP_Comment_Query;
$comments = $comments_query->query( $args );
if ( $comments ) {
	foreach ( $comments as $comment ) {
        echo '<h5>'.$comment->comment_author.'</h5>';
        echo '<p>'.$comment->comment_content.'</p>';
	}
}
?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
