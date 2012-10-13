<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" 
      xmlns:fb="http://ogp.me/ns/fb#" 
      <?php language_attributes(); ?> 
      itemscope itemtype="http://schema.org/Blog">

<head profile="http://gmpg.org/xfn/11">

    <title><?php
       if ( is_single() ) { single_post_title(); }

       elseif ( is_home() || is_front_page() ) 
              { bloginfo('name'); print ' | '; 
                bloginfo('description'); get_page_number(); }

       elseif ( is_page() ) 
              { single_post_title(''); }

       elseif ( is_search() ) 
              { bloginfo('name'); 
                print ' | Search results for ' . wp_specialchars($s); 
                get_page_number(); }

       elseif ( is_404() ) 
              { bloginfo('name');
                print ' | Not Found'; }
       else 
            { bloginfo('name');
              wp_title('|');
              get_page_number(); }

    ?></title>
 	
 	<meta property="og:title" content="<?php
        		
                if ( is_single() ) 
                   { single_post_title(); }
        		elseif ( is_home() || is_front_page() ) 
                       { bloginfo('name'); 
                         print ' | '; 
                         bloginfo('description'); 
                         get_page_number(); }
        		elseif ( is_page() ) 
                       { single_post_title(''); }
        		elseif ( is_search() ) 
                       { bloginfo('name'); 
                         print ' | Search results for ' . 
                         wp_specialchars($s); 
                         get_page_number(); }
        		elseif ( is_404() ) 
                       { bloginfo('name'); 
                         print ' | Not Found'; }
        		else 
                     { bloginfo('name'); 
                       wp_title('|'); 
                       get_page_number(); }
                       
                       ?>" />
	<meta property="og:type" content="blog" />
	<meta property="og:url" content="http://www.sakekasi.com" />
	<meta property="og:image" content="" />
	<meta property="og:site_name" content="sakekasi" />
	<meta property="fb:admins" content="100000697793496" />
 	<meta itemprop="name" content="<?php
        if ( is_single() ) 
           { single_post_title(); }
        elseif ( is_home() || is_front_page() ) 
               { bloginfo('name'); 
                 print ' | '; 
                 bloginfo('description'); 
                 get_page_number(); }
        elseif ( is_page() ) 
               { single_post_title(''); }
        elseif ( is_search() ) 
               { bloginfo('name'); 
                 print ' | Search results for ' . wp_specialchars($s); 
                 get_page_number(); }
        elseif ( is_404() ) 
               { bloginfo('name'); 
                 print ' | Not Found'; }
        else 
             { bloginfo('name'); 
               wp_title('|'); 
               get_page_number(); }

               ?>">       
	<meta itemprop="description" content="">
    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; 
                                    charset=<?php bloginfo('charset'); ?>" />
 
    <link rel="stylesheet" type="text/css"
          href="wp-content/themes/colorburst/resume/style.css" />
 
    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
 
    <?php wp_head(); ?>
    
    <script type="text/javascript" 
            src="<?php bloginfo('url');?>
                 /wp-content/themes/colorburst/js/floating-1.7.js">  
    </script>  
 
    <link rel="alternate" type="application/rss+xml" 
          href="<?php bloginfo('rss2_url'); ?>" 
          title="<?php 
                       printf( __( '%s latest posts', 'colorburst' ), 
                               wp_specialchars( get_bloginfo('name'), 1 ) ); 
                               ?>" />
    <link rel="alternate" 
          type="application/rss+xml" 
          href="<?php bloginfo('comments_rss2_url') ?>" 
          title="<?php printf( __( '%s latest comments', 'colorburst' ), 
                               wp_specialchars( get_bloginfo('name'), 1 ) ); 
                               ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
</head>

<body>

  <div id="wrapper" class="hfeed">
    <div id="header">
      <div id="masthead">
        
        <div id="branding">
          <div class="home" id="home-top">
            <a class="home-link" href="<?php echo site_url() ?>">
              <img class="home-icon" src="<?php echo site_url() ?>/wp-content/themes/colorburst/images/back.png">
            </a>
          </div>
          <div id="blog-title">
            <span>
              <a href="<?php echo $_SERVER['HTTP_HOST'] . 
                                  $_SERVER['REQUEST_URI'] ?>/" 
                 id="blog-title"
                 title="<?php $options = get_option('colorburst');
                           if(!empty($options['name'])){
                                  echo $options['name'];
                           } else {
                                  bloginfo('name');
                           }
                           ?>" 
                 rel="home"><?php                            
                           if(!empty($options['name'])){
                                  echo $options['name'];
                           } else {
                                  bloginfo('name');
                           } ?></a>
            </span>
          </div>
          <div id="save">
            <a class="save-link" href="<?php echo site_url();
                                  ?>/wp-content/themes/colorburst/resume.pdf">
              <img class="save-icon"
                   src="<?php echo site_url() ?>/wp-content/themes/colorburst/images/save.png">
            </a>
          </div>
          <div class="clear"></div>
        </div><!-- #branding -->
        
        <div id="flourish"></div>
      </div><!-- #masthead -->   
    </div><!-- #header -->

    <div id="main">
