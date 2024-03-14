<?php

namespace XMLAGENCYLTD;

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) { exit; }

class ClassLayouts{
	/// HELPER FUNCTIONS .................................... ///
	public static function include( $file, $args=array() )
	{
		\extract( $args);
		include ABSPATH.DIRECTORY_SEPARATOR.'layouts'.DIRECTORY_SEPARATOR.$file;
	}
	public static function includeParts( $file, $args=array() )
	{
		\extract( $args);
		include ABSPATH.DIRECTORY_SEPARATOR.'layouts'.DIRECTORY_SEPARATOR.'parts'.DIRECTORY_SEPARATOR.$file;
	}
}


class ClassFlightApi{
	
	
	/// HELPER FUNCTIONS .................................... ///

	/**
	 * Get air company info by iata code
	 *
	 * @param string $iata_name
	 * @return object|null
	 */
	public static function getAirCompanyInfoByCode( $airCompanyCodes, $code )
	{
		$result = null;
		foreach($airCompanyCodes as $obj){
			if( $obj->Iata == $code ){
				$result = $obj; break;
			}
			continue;
		};
		return $result;
	}


	/**
	 * Get airport info by iata code
	 *
	 * @param string $iata_name
	 * @return object|null
	 */
	public static function getAirportInfoByCode( $airPortInfo, $iata_name )
	{
		$result = null;
		foreach($airPortInfo as $obj){
			if( $obj->Iata == $iata_name ){
				$result = $obj; break;
			}
			continue;
		};
		return $result;
	}


	/**
	 * Difference between two times
	 *
	 * @param string $to  - time string
	 * @param string $from - time string
	 * @return string
	 */
	public static function timeDiff( $from, $to ){

		// Convert date strings to DateTime objects
		$datetime1 = \DateTime::createFromFormat('d.m.Y H:i', $from);
		$datetime2 = \DateTime::createFromFormat('d.m.Y H:i', $to);

		// Calculate the difference
		$interval = $datetime1->diff($datetime2);

		// Format the difference
		$difference = '';
		if ($interval->d > 0) {
			$difference .= $interval->format('%ad ');
		}
		if ($interval->h > 0) {
			$difference .= $interval->format('%hh');
		}
		if ($interval->i > 0) {
			$difference .= ' ' . $interval->format('%imin');
		}

		return $difference;
	}


	/**
	 * Minutes to time string
	 *
	 * @param int $mins -
	 * @return string
	 */
	public static function minsToTimeString($mins)
	{
		$string = '';
		if($mins> 60*24){
			$string .= floor($mins/(60*24)).'d ';
		}
		if($mins> 60){
			$string .= floor($mins%60).'h ';
		}else{
			$string .= $mins.'m ';
		}

		return substr($string, 0, -1);
	}

}
 


?>