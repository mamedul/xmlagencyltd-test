<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) { exit; }

$random_id = isset($random_id) ? $random_id : str_replace( '.', '', uniqid('', true) );
$result = isset($result) ? $result : null;

// Flights search results
if( isset($_REQUEST['search']) && $_REQUEST['search'] == 'avira' ):

	// Flight search results
	XMLAGENCYLTD\ClassLayouts::includeParts(
		'flight-search-results.php',
		array(
			'random_id' => $random_id,
			'flights_results' => $result,
		)
	);

elseif( isset($_REQUEST['search']) && $_REQUEST['search'] == 'hotels' ):

	// Hotel search results
	XMLAGENCYLTD\ClassLayouts::includeParts(
		'hotels-search-results.php',
		array(
			'random_id' => $random_id,
			'hotels' => $hotels,
			'hotels_results' => $result,
		)
	);

else: 

	// No search results
	XMLAGENCYLTD\ClassLayouts::includeParts(
		'no-search-results.php',
		array(
			'random_id' => $random_id
		)
	);

endif;

