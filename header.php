<!DOCTYPE html>
<html lang="en" class="m-0">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="icon" href="<?php bloginfo('template_url'); ?>/assets/img/blog.png">
    <title>بلاگ درون سازمانی</title>
    <?php wp_head() ?>
</head>

<body>
    <header class="bg-info mb-2 p-1">
        <div class="container">
           <div class="row">
			   <a href="<?php echo home_url(); ?>"><h6 class="pt-2 text-center text-light pull-right">
				   وبلاگ درون سازمانی
				
				   </h6></a>
            <form role="search" method="get" class="search-form pull-left" action="<?php echo home_url( '/' ); ?>">
    <label>
        <input type="search" class="form-control" placeholder="" value="<?php echo get_search_query() ?>" name="s" />
    </label>
    <input type="submit" class="btn btn-outline-light"  value="جستجو" />
</form>
			</div>
        </div>
    </header>
    <div class="container main">
  <div class="row">
      <div class="col-2">
      <div class="list-group users">
		     <?php global $current_user; wp_get_current_user(); if ( is_user_logged_in() ) {  ?>
				   <h6>کاربر جاری: <i class="fa fa-cog"></i> <?php echo $current_user->display_name ?> </h6>
		  <?php }else { ?> <a href="/blog/wp-admin" ><h6>
		  <i class="fa fa-cog"></i>
		  ورود به حساب
		  </h6></a> <?php } ?>
 <?php
  $args = array('hide_empty' => false,'optioncount'   => true) ?>
  <?php
  wp_list_authors($args); 
  ?> 
</div>
		  	
<?php  dynamic_sidebar( 'rightWidget' ); ?>
      </div>
      <div class="col-8">