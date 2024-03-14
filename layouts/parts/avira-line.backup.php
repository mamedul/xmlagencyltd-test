
				
					<div class="avia-line avia-line-0">
						<div class="avia-line-top">
							<div class="avia-line-company">
								<a href="javascript:void(0);" class="avia-line-company-item has-tooltip tooltipstered">
									<img src="https://static.city.travel/aclogo/small/UK.png" alt="UK">
								</a>
								<div class="avia-line-company-item alci-flightnum has-tooltip tooltipstered">UK‑184 UK‑271</div>
							</div>
							<div class="avia-line-info">
								<div class="avia-pos">
									<div class="avia-time"><?php echo esc_attr(date('H:i', strtotime($offerSegment->Departure->Date . ' +00:00'))); ?></div>
									<div class="avia-city" title="<?php echo esc_attr($departureAirPortInfo->City); ?>"><?php echo esc_attr($departureAirPortInfo->City); ?></div>
								</div>
								<div class="results-date"><?php echo esc_attr(date('d M', strtotime($offerSegment->Departure->Date . ' +00:00'))); ?></div>
								<div class="results-points">
									<div class="rel">
										<div class="results-points-text"><?php echo esc_attr(ClassFlightApi::timeDiff($offerSegment->Departure->Date, $offerSegment->Arrival->Date)); ?></div>
										<div class="results-points-line">
											<?php
												$departureDate = $offerSegment->Departure->Date;
												$departureIata = $offerSegment->Departure->Iata;
												$arrivalDate = $offerSegment->Arrival->Date;
												$arrivalIata = $offerSegment->Arrival->Iata;
												$airCraft = $offerSegment->AirCraft;
												$flightClass = $offerSegment->FlightClass;
												$flightMinutes = $offerSegment->FlightMinutes;
												$flightTime = $offerSegment->FlightTime;
												$flightNum = $offerSegment->FlightNum;
												$marketingAirline = $offerSegment->MarketingAirline;
												$operatingAirline = $offerSegment->OperatingAirline;
												$resBookDesigQuantity = $offerSegment->ResBookDesigQuantity;
												$rph = $offerSegment->Rph;
												$baggageType = $offerSegment->Baggage->Type;
												$baggageCount = $offerSegment->Baggage->Count;
												$cabinBaggageType = $offerSegment->CabinBaggage->Type;
												$cabinBaggageCount = $offerSegment->CabinBaggage->Count;
												$segmentDeptAirPortInfo = ClassFlightApi::getAirportInfoByCode($airPortInfo, $departureIata);
												$segmentArrAirPortInfo = ClassFlightApi::getAirportInfoByCode($airPortInfo, $arrivalIata);
											?>
											<span class="results-point full">
												<span class="result-abbr"><?php echo esc_html($departureIata); ?></span>
												<span class="result-tooltip"><?php
													printf(
														'Departure from airport %1$s to %2$s. Local time',
														$segmentDeptAirPortInfo->Name == $segmentDeptAirPortInfo->Name ?
															$segmentDeptAirPortInfo->Name :
															$segmentDeptAirPortInfo->Name . ', ' . $segmentDeptAirPortInfo->City,
														date('H:i',  strtotime($departureDate . ' +00:00'))
													);
												?></span>
												<span class="result-abbr"><?php echo esc_html($departureIata); ?></span>
												<span class="result-tooltip"><?php
													printf(
														'Arrival to airport %1$s at %2$s. Local time',
														$segmentArrAirPortInfo->Name == $segmentArrAirPortInfo->Name ?
															$segmentArrAirPortInfo->Name :
															$segmentArrAirPortInfo->Name . ', ' . $segmentArrAirPortInfo->City,
														date('H:i',  strtotime($arrivalDate . ' +00:00'))
													);
												?></span>
											</span>
										</div>
									</div>
								</div>
								<div class="results-date"><?php echo esc_attr(date('d M', strtotime($offerSegment[count($offerSegment) - 1]->Arrival->Date . ' +00:00'))); ?></div>
								<div class="avia-pos">
									<div class="avia-time"><?php echo esc_attr(date('H:i', strtotime($offerSegment[count($offerSegment) - 1]->Arrival->Date . ' +00:00'))); ?></div>
									<div class="avia-city" title="<?php echo esc_attr($arrivalAirPortInfo->City); ?>"><?php echo esc_attr($arrivalAirPortInfo->City); ?></div>
								</div>
							</div>
						</div>
						<div class="avia-line-full">
						</div>
					</div>
					<div class="avia-line avia-line-1">
						<div class="avia-line-top">
							<div class="avia-line-company">
								<a href="javascript:void(0);" class="avia-line-company-item has-tooltip tooltipstered">
									<img src="https://static.city.travel/aclogo/small/UK.png" alt="UK">
								</a>
								<div class="avia-line-company-item alci-flightnum has-tooltip tooltipstered">
									UK‑272 UK‑183
								</div>
							</div>
							<div class="avia-line-info">
								<div class="avia-pos">
									<div class="avia-time">12:50</div>
									<div class="avia-city" title="Male">Male</div>
								</div>
								<div class="results-date">31&nbsp;Dec</div>
								<div class="results-points">
									<div class="rel">
										<div class="results-points-text">21&nbsp;h&nbsp;40&nbsp;min duration</div>
										<div class="results-points-line">
											<span class="results-point full has-tooltip tooltipstered">
												<span class="result-abbr">MLE</span>
											</span>
											<span class="results-point full has-tooltip tooltipstered">
												<span class="result-abbr">
													BOM</span>
											</span>
											<span class="results-point full has-tooltip tooltipstered">
												<span class="result-abbr">DAC</span>
											</span>
										</div>
									</div>
								</div>
								<div class="results-date">1&nbsp;Jan</div>
								<div class="avia-pos">
									<div class="avia-time">11:30</div>
									<div class="avia-city" title="Dhaka">Dhaka</div>
								</div>
							</div>
						</div>
						<div class="avia-line-full">
						</div>
					</div>