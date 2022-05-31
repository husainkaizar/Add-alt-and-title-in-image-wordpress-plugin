<?php if ( ! defined( 'ABSPATH' ) ) exit;
$this->save(); 
$settings = get_option('auto_image_alt');
 ?>
<div class="wrap auto_image_alt">
<h2><?php _e('Auto Image Alt', 'auto-image-alt');?></h2>
<div id="setting-error-settings_updated" class="updated settings-error notice is-dismissible"> 
<p><strong><?php _e('Support: Auto Image Alt is a new plugin on wordpress, please spend less than a minute to rate us to appreciate our work to make it more stable. :) <a href="https://wordpress.org/support/plugin/auto-image-alt/reviews/?filter=5" class="button button-primary" target="_blank" title="Click Here To Rate Us">Rate Us</a>','file-manager-advanced');?></strong></p><button type="button" class="notice-dismiss"><span class="screen-reader-text">Dismiss this notice.</span></button></div>
<form action="" method="post" id="auto_image_alt_form">
<?php wp_nonce_field( 'auto_image_alt_action', 'auto_image_alt_nonce' ); //common ?>
<table class="form-table">

<tbody><tr>
<th scope="row"><label for="enable"><?php _e('Enable', 'equation-editor');?></label></th>
<td>
<input name="enable_auto_image_alt" id="enable_auto_image_alt" value="1" type="checkbox" <?php echo (isset($settings['enable_auto_image_alt']) && $settings['enable_auto_image_alt'] == '1') ? 'checked="checked"' : '';?>><?php _e('Check to enable Auto Image Alt', 'equation-editor');?>
</td>
</tr>
</tbody>
</table>
<p class="submit"><input name="submit" id="submit" class="button button-primary" value="Save Changes" type="submit"></p>
</form>
</div>