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
          href="<?php bloginfo('stylesheet_url'); ?>" />
 
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
        
          <div id="blog-title">
            <span>
              <a href="<?php bloginfo( 'url' ) ?>/" 
                 id="blog-title"
                 title="<?php bloginfo( 'name' ) ?>" 
                 rel="home"><?php bloginfo( 'name' ) ?></a>
            </span>
          </div>
          <?php if ( is_home() || is_front_page() ) { ?>
            <h1 id="blog-description">
                <?php bloginfo( 'description' ) ?>
            </h1>
          <?php } else { ?> 
            <div id="blog-description">
                 <?php bloginfo( 'description' ) ?>
            </div>
          <?php } ?>
          <div class="clear"></div>
        </div><!-- #branding -->
        
        <div id="access">

          <div class="skip-link">
            <a href="#content" 
               title="<?php _e( 'Skip to content', 'colorburst' )
                      ?>">
              <?php _e( 'Skip to content', 'colorburst' ) ?>
            </a>
          </div>
          <?php wp_page_menu( 'sort_column=menu_order' ); ?>

        </div><!-- #access -->
        <div id="flourish"></div>
      </div><!-- #masthead -->   
    </div><!-- #header -->

    <div id="main">
