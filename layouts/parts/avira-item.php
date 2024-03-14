<?php

// Exit if accessed directly.

ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use XMLAGENCYLTD\ClassFlightApi;
use XMLAGENCYLTD\ClassLayouts;

if (!defined('ABSPATH')) { exit; }

$flightData = isset($flightData) ? $flightData : null;
$searchGuid = isset($searchGuid) ? $searchGuid : null;
if ($flightData === null || $searchGuid === null ) return;
$airCompanies = isset($airCompanies) ? $airCompanies : array();
$airPorts = isset($airPorts) ? $airPorts : array();
$currency = isset($currency) ? $currency : 'USD';

$offerCode = $flightData->OfferCode;
$rating = $flightData->Rating;
$tariffInfo = $flightData->TariffInfo;
$tariffInfoAdultBasePrice = isset($tariffInfo->AdultBasePrice) ? $flightData->TariffInfo->AdultBasePrice : null;
$tariffInfoAdultPrice = isset($tariffInfo->AdultBasePrice) ? $flightData->TariffInfo->AdultPrice : null;
$totalPrice = $flightData->TotalPrice;
$offers = is_array($flightData->Offers->OfferInfo) ? $flightData->Offers->OfferInfo : array( $flightData->Offers->OfferInfo );

$offerInfos = array();
foreach ( $offers as $offerInfoIndex => $offerInfo ){
	$offerInfoRph = $offerInfo->Rph;
	$validatingAirline = $offerInfo->ValidatingAirline;
	$segments = is_array($offerInfo->Segments->OfferSegment) ? $offerInfo->Segments->OfferSegment : array( $offerInfo->Segments->OfferSegment );
	$offerSegments = array();
	foreach ( $segments as $segmentsIndex => $segment ){
		$rph = $segment->Rph;
		$offerSegments[$rph] [] = $segment;
	}
	$offerInfo->OfferSegments = $offerSegments;
	$offerInfos[ $offerInfoRph ] [] = $offerInfo;
}

//print_r($offerInfos); exit;
//$segments = $offerInfo->Segments;
//$offerSegment = $segments->OfferSegment;

?>
<!-- Avira Item -->
<div class="results-item results-item-avia" data-offercode="<?php echo esc_attr($offerCode); ?>">

	<!-- left info -->
	<div class="results-item-left">
		<div class="avia-lines">

			<?php
				$oldOfferInfoRph = null;
				$aviraLine = 0;
			?>

			<?php foreach ( $offerInfos as $offerInfoIndex => $offerInfoArray ) : ?>
			<?php foreach ( $offerInfoArray as $offerInfo ) : ?>

				<?php
					
					$offerInfoRph = $offerInfo->Rph;
					$validatingAirline = $offerInfo->ValidatingAirline;
					$offerSegments = $offerInfo->OfferSegments;
					//$segments = is_array($offerInfo->Segments->OfferSegment) ? $offerInfo->Segments->OfferSegment : array( $offerInfo->Segments->OfferSegment );
				?>

				<?php foreach ( $offerSegments as $segmentIndex => $segmentArray ) : ?>
				<?php foreach ( $segmentArray as $segment ) : ?>

					<?php
						$aviraLine++;
						$departureDate          = $segment->Departure->Date;
						$departureIata          = $segment->Departure->Iata;
						$arrivalDate            = $segment->Arrival->Date;
						$arrivalIata            = $segment->Arrival->Iata;
						$airCraft               = $segment->AirCraft;
						$flightClass            = $segment->FlightClass;
						$flightMinutes          = $segment->FlightMinutes;
						$flightTime             = $segment->FlightTime;
						$flightNum              = $segment->FlightNum;
						$marketingAirline       = $segment->MarketingAirline;
						$operatingAirline       = $segment->OperatingAirline;
						$resBookDesigQuantity   = $segment->ResBookDesigQuantity;
						$rph                    = $segment->Rph;
						$baggageType            = $segment->Baggage->BaggageType;
						$baggageCount           = $segment->Baggage->Count;
						$cabinBaggageType       = $segment->CabinBaggage->BaggageType;
						$cabinBaggageCount      = $segment->CabinBaggage->Count;
						$segmentDeptAirPortInfo = ClassFlightApi::getAirportInfoByCode($airPorts, $departureIata);
						$segmentArrAirPortInfo  = ClassFlightApi::getAirportInfoByCode($airPorts, $arrivalIata);
					?>

					<?php
						ClassLayouts::includeParts('avira-line.php', compact(
								'aviraLine',
								'departureDate',
								'departureIata',
								'arrivalDate',
								'arrivalIata',
								'airCraft',
								'flightClass',
								'flightMinutes',
								'flightTime',
								'flightNum',
								'marketingAirline',
								'operatingAirline',
								'resBookDesigQuantity',
								'rph',
								'baggageType',
								'baggageCount',
								'cabinBaggageType',
								'cabinBaggageCount',
								'segmentDeptAirPortInfo',
								'segmentArrAirPortInfo',
							)
						);
					?>
					
				<?php endforeach; ?>
				<?php endforeach; ?>

				<?php
					$oldOfferInfoRph = $offerInfoRph;
				?>

			<?php endforeach; ?>
			<?php endforeach; ?>

		</div>
	</div>

	<!-- right info -->
	<div class="results-item-right">
		<div class="results-item-price">
			<div class="price-wrap">
				<div class="price thou10">
					<span class="currency">$</span> <?php echo $totalPrice ?>
				</div>
				<div class="results-tile-info">
					price per 1 passenger Round trip
				</div>
			</div>
			<a href="javascript:void(0);" class="btn btn-md avia-passengers avia-passengers-xmla">Buy</a>
		</div>
	</div>

	<!-- More details link -->													
	<a href="javascript:%20void(0);" class="more-less">
		<span class="more-link">
			<span class="dashed">More about flights</span>
			<i class="icon icon-chevron-down-sm"></i>
			<img src="/images/autocomplete_indicator.gif" alt="">
		</span>
		<span class="less-link">
			<span class="dashed">hide</span>
			<i class="icon icon-chevron-up-sm"></i>
		</span>
	</a>

</div>

<!-- // Avira Item -->