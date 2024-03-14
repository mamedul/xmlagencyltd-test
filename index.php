<?php

define( 'ABSPATH', __DIR__ );  // temp
define( 'CURRENT_LANG', 'en' );  // temp

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) { exit; }

include __DIR__.'/__includes/data.php'; // temp search results
include __DIR__.'/__includes/classes.php'; // temp essential classes
include __DIR__.'/__includes/functions.php'; // temp essential functions
$_REQUEST['search'] = 'avira'; // temp show flight result

$random_id = isset($random_id) ? $random_id : str_replace( '.', '', uniqid('', true) );
$result = isset($result) ? $result : null;

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Search Results</title>
	<link rel="stylesheet"  href="./assets/css/search-results-style.min.css">
	<style>
		.wrap{
			margin-left: auto;
			margin-right: auto;
		}
	</style>
</head>
<body>

	<div class="">
		<!-- Before -->	
	</div>

	<div class="wrap">
	<?php

		// Flight search results
		XMLAGENCYLTD\ClassLayouts::include(
			'search-results.php',
			array(
				'random_id' => $random_id,
				'result' => $result,
			)
		);

	?>
	</div>

	<div class="">
		<!-- After -->	
	</div>

</body>
</html>