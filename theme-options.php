<?php
        add_action('admin_init', 'colorburst_init');
        add_action( 'admin_menu', 'colorburst_options_add_page' );
        function colorburst_init(){
                 register_setting( 'colorburst_options', 'colorburst');
        }
        
        function colorburst_options_add_page() {
                 add_theme_page('Colorburst Options', 'Colorburst Options', 'edit_theme_options', 'colorburst_options', 'colorburst_do_page');
        }

        function colorburst_do_page() {
        ?>
        <div class="wrap">
             <h2>Color Burst Options</h2>
             <p/> urls for the following values</p>
             <form method="post" action="options.php">
                   <?php settings_fields('colorburst_options'); ?>
                   <?php $options = get_option('colorburst'); ?>
                   <table class="form-table">
                         <tr valign="top"><th scope="row">Facebook</th>
                             <td><input name="colorburst[facebook]"
                                        type="text"
                                        value="<?php echo $options['facebook']; ?>" >
                             </td>
                         </tr>
                         <tr valign="top"><th scope="row">Twitter</th>
                             <td><input name="colorburst[twitter]"
                                        type="text"
                                        value="<?php echo $options['twitter']; ?>" >
                             </td>
                         </tr>
                         <tr valign="top"><th scope="row">Google+</th>
                             <td><input name="colorburst[gplus]"
                                        type="text"
                                        value="<?php echo $options['gplus']; ?>" >
                             </td>
                         </tr>
                         <tr valign="top"><th scope="row">Github</th>
                             <td><input name="colorburst[github]"
                                        type="text"
                                        value="<?php echo $options['github']; ?>" >
                             </td>
                         </tr>                         
                         <tr valign="top"><th scope="row">YouTube</th>
                             <td><input name="colorburst[youtube]"
                                        type="text"
                                        value="<?php echo $options['youtube']; ?>" >
                             </td>
                         </tr>
                         <tr valign="top"><th scope="row">Email</th>
                             <td><input name="colorburst[email]"
                                        type="text"
                                        value="<?php echo $options['email']; ?>" >
                             </td>
                         </tr>
                         <tr valign="top"><th scope="row">Rss</th>
                             <td><input name="colorburst[rss]"
                                        type="text"
                                        value="<?php echo $options['rss']; ?>" >
                             </td>
                         </tr>                         
                   </table>
                   <p class="submit">
                      <input type="submit" class="button-primary"
                             value="<?php _e('save') ?>" />
                   </p>
             </form>
       </div>
       <?php
       }
?>