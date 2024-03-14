<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) { exit; }


if( !isset($random_id) ){
	$random_id = str_replace( '.', '', uniqid('', true) );
}


?>
<h3 class="xmlagency-no-search-results-title"><?php _e('No searches!', 'xmlagencyltd'); ?></h3>
<p class="xmlagency-no-search-results-text"><?php _e('Please search flights or hotels', 'xmlagencyltd'); ?></p>
