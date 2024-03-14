<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) { exit; }


if( !isset($error) ){
	$error = null;
}

?>
<h3 class="xmlagency-error-search-results-title"><?php _e('Search Error', 'xmlagencyltd'); ?></h3>
<?php if( !empty($error) ): ?><p class="xmlagency-error-search-results-text"><?php echo $error; ?></p><?php endif; ?>