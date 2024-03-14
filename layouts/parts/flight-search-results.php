<?php

// Exit if accessed directly.

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


use XMLAGENCYLTD\ClassFlightApi;
use XMLAGENCYLTD\ClassLayouts;

if ( ! defined( 'ABSPATH' ) ) { exit; }

$random_id = isset($random_id) ? $random_id : str_replace( '.', '', uniqid('', true) );
$flights_results = isset($flights_results) ? $flights_results : null;
//file_put_contents( __DIR__.'/_test_flights_results__lam.txt', print_r($flights_results, true) );
if( $flights_results === null && wp_doing_ajax() ) return;

?>
<?php if( !wp_doing_ajax() ): ?>
<div class="xmlagency-flight-search-results-container">
<div class="xmlagency-flight-search-results">
<?php endif; ?>
   
<?php if( !$flights_results || empty((array) $flights_results) ): ?>
   <?php if( wp_doing_ajax() ): ?>
      <?php ClassLayouts::includeParts('error-search-results.php', array('error' => __('No results found on search!', 'xmlagencyltd') )); ?>
   <?php else: ?>
      <!-- Searching -->
   <?php endif; ?>
<?php else: ?>
<?php

$airCompanies = isset($flights_results->AirCompany->CodeValue) ? $flights_results->AirCompany->CodeValue : array();
$airPorts = isset($flights_results->AirPorts->AirPortInfo) ? $flights_results->AirPorts->AirPortInfo : array();
$currency = $flights_results->Currency;
$searchGuid = $flights_results->SearchGuid;

?>
<div class="container">
   <div class="list-wrapper">
      <div class="left-data">
         <?php ClassLayouts::includeParts('avira-filter.php', array( 'flights_results'=> $flights_results )); ?>
      </div>
      <div class="right-data">
         <div class="results-top results-top-avia">
            <div class="results-top-tabs">
               <ul class="btns-set-sm">
                  <!--<li class="cheap" data-rel="cheap">
                     <button><?php echo sprintf( __('Cheap from %s', 'xmlagencyltd') , 'pricing'/*$flights_results->ResultCount*/); ?></button>
                  </li>-->
                  <li class="fast" data-rel="fast">
                     <button><?php esc_html_e('Fast', 'xmlagencyltd'); ?></button>
                  </li>
                  <li class="active" data-rel="all">
                     <button><?php echo esc_html( sprintf( __('All %d flights', 'xmlagencyltd') , $flights_results->ResultCount) ); ?></button>
                  </li>
               </ul>
            </div>
            <div class="results-filter">
               <a href="javascript:void(0);" class="filter-icon">
                  <span class="icon icon-filter"></span>
                  <?php esc_html_e('Show filter', 'xmlagencyltd'); ?>
               </a>
            </div>
            <div class="results-sort">
               <select class="select-sort select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                  <option value="price" selected="">Sort by price</option>
                  <option value="connect">Number of stops</option>
                  <option value="all">Travel duration</option>
                  <option value="from">Departure time</option>
                  <option value="to">Arrival time</option>
                  <option value="company">Airline name</option>
               </select>
            </div>
         </div>
         <div class="results-list" data-searchguid="<?php echo esc_attr($flights_results->SearchGuid); ?>">
         <?php foreach( $flights_results->FlightData->FlightData as $flightData ): ?>
            <!--<div> <?php echo var_export( $flightData ); ?> <hr> </div>-->
            <?php ClassLayouts::includeParts('avira-item.php', array(
                     'flightData'    => $flightData,
                     'airCompanies'  => $airCompanies,
                     'airPorts'      => $airPorts,
                     'searchGuid'    => $searchGuid,
                     'currency'      => $currency
                  )
               );
            ?>
         <?php endforeach; ?>
            <a href="javascript:void(0);" class="more-line"><span>Show more</span></a>
         </div>
      </div>
   </div>
</div>
<?php endif; ?>

<?php if( !wp_doing_ajax() ): ?>
</div>
<div>Loading...</div>
<div class="xmlagency-flight-search-loading"><span class="loading-icon"></span></div>
</div>
<?php endif; ?>
