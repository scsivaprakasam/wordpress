<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>
<div id="backup_warning"><?php _e('Be sure to backup your database before use this plugin!', 'search-replace'); ?></div>
<form action="" method="post" id="search-and-replace-free">
	<?php wp_nonce_field( 'search_replace' ) ?>
	<label for="s"><?php _e('Search:', 'search-replace'); ?></label><input type="text" name="s" id="s" /><br />
	<label for="r"><?php _e('Replace by:', 'search-replace'); ?></label><input type="text" name="r" id="r" /> <?php _e('(replace both title and content)', 'search-replace'); ?><br />
	<div>
		<label for="in"><?php _e('In:', 'search-replace'); ?></label>
		<input type="checkbox" value="post" name="post" /> <?php _e('Posts', 'search-replace'); ?> 
		<input type="checkbox" value="page" name="page" /> <?php _e('Pages', 'search-replace'); ?>
	</div>
	<input type="submit" class="button button-primary" value="<?php _e('Go!', 'search-replace'); ?>" />
</form>

<p>
	<a href="https://www.info-d-74.com/en/produit/search-and-replace-pro-plugin-wordpress-2/" target="_blank">
		<?php _e('Need more options? Look at Search and Replace Pro', 'search-replace'); ?></a><br />
	<a href="https://www.info-d-74.com/en/produit/search-and-replace-pro-plugin-wordpress-2/" target="_blank">
		<img src="<?= plugins_url( 'search-replace/images/search-and-replace-pro.png' ); ?>" class="srp_img" />
	</a>
</p>

<script>

	jQuery(document).ready(function(){

		jQuery('#search-and-replace-free input[type=submit]').click(function(){

			return confirm('<?php _e('Are you sure to do that?', 'search-replace'); ?>');

		});

	});

</script>