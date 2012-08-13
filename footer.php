     </div><!-- #main -->
     
     <div id="footer">
        <div id="colophon">
             &copy; 2012 Saketh Kasibatla
        </div><!-- #colophon -->
        
        <div id="contact">
             <span id="contact-title">Contact Me</span>
             <div id="social-links">
                  <?php $option = get_option('colorburst');
                        if(filter_var($option['facebook'], FILTER_VALIDATE_URL) !== false){
                            printf( '<a href="%s" target="_blank" class="social" id="facebook"><img src="%s"></a>', 
                                    $option['facebook'], site_url('wp-content/themes/colorburst/images/social/facebook.png'));
                        } 
                        if(filter_var($option['twitter'], FILTER_VALIDATE_URL) !== false){
                            printf( '<a href="%s" target="_blank" class="social" id="twitter"><img src="%s"></a>', 
                                    $option['twitter'], site_url('wp-content/themes/colorburst/images/social/twitter.png'));
                        } 
                        if(filter_var($option['gplus'], FILTER_VALIDATE_URL) !== false){
                            printf( '<a href="%s" target="_blank" class="social" id="gplus"><img src="%s"></a>', 
                                    $option['gplus'], site_url('wp-content/themes/colorburst/images/social/google.png'));
                        } 
                        if(filter_var($option['github'], FILTER_VALIDATE_URL) !== false){
                            printf( '<a href="%s" target="_blank" class="social" id="github"><img src="%s"></a>', 
                                    $option['github'], site_url('wp-content/themes/colorburst/images/social/github.png'));
                        } 
                        if(filter_var($option['youtube'], FILTER_VALIDATE_URL) !== false){
                            printf( '<a href="%s" target="_blank" class="social" id="youtube"><img src="%s"></a>', 
                                    $option['youtube'], site_url('wp-content/themes/colorburst/images/social/youtube.png'));
                        } 
                        if(filter_var($option['rss'], FILTER_VALIDATE_URL) !== false){
                            printf( '<a href="%s" target="_blank" class="social" id="rss"><img src="%s"></a>', 
                                    $option['rss'], site_url('wp-content/themes/colorburst/images/social/rss.png'));
                        } else {
                            printf( '<a href="%s" target="_blank" class="social" id="rss"><img src="%s"></a>',
                                    get_bloginfo('rss2_url'), site_url('wp-content/themes/colorburst/images/social/rss.png'));
                        }
                            ?>
             </div><!-- social-links -->
             
             <div id="email">
                  <?php
                        $options = get_option('colorburst');
                        if(!empty($options['email'])){
                            printf( 'EMAIL: %s', $options['email']);
                        }
                  ?>
             </div><!-- email -->
        </div><!-- contact -->
        <div class="clear"></div>
     </div><!-- #footer -->
</div><!-- #wrapper -->
</body>
</html>