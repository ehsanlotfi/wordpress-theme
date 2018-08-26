</div>
<div class="col-2" style="padding: 0;">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active"> دسته بندی </a>
                    <?php
$categories = get_categories( array(
    'orderby' => 'name',
    'order'   => 'ASC'
) );
 
foreach( $categories as $category ) {
    $category_link = sprintf( 
        '<a href="%1$s" alt="%2$s" class="list-group-item list-group-item-action">%3$s</a>',
        esc_url( get_category_link( $category->term_id ) ),
        esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
        esc_html( $category->name )
    ); 
    echo $category_link;
} 
?>
                </div>


	
<?php  dynamic_sidebar( 'leftWidget' ); ?>
            </div>

