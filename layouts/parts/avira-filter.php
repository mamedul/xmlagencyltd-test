<?php

// Exit if accessed directly.

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


use XMLAGENCYLTD\ClassFlightApi;
use XMLAGENCYLTD\ClassLayouts;

if ( ! defined( 'ABSPATH' ) ) { exit; }

$flights_results = isset($flights_results) ? $flights_results : null;
if( $flights_results ===null ) return;


?>
<div class="filter-block-wrap">
            <div class="filter-block">
               <form id="filter-form" class="filter-form" onsubmit="return false;" method="post" autocomplete="off">
                  <button type="submit" class="btn btn-md btn-block">Apply</button>
                  <div class="filter-position">
                     <a class="filter-link" href="javascript:%20void(0);">Outbound connections</a>
                     <div class="filter-in">
                        <div class="checkboxes-list" rel="connect">
                           <label class="checkbox">
                              <input type="checkbox" name="connect0_short">
                              <span>Short (up to 3 hours)
                                 <span class="price checkbox-r" >from
                                    <span class="currency">$</span><span class="pricevalue">943.34</span>
                                 </span>
                              </span>
                           </label>
                           <label class="checkbox">
                              <input type="checkbox" name="connect0_nonight">
                              <span>No overnight stops
                                 <span class="price checkbox-r">from
                                    <span class="currency ">$</span> <span class="pricevalue">943.34</span></span>
                                 </span>
                           </label>
                        </div>
						      <div class="expand-link">
                           <a href="javascript:void(0);" class="link-text showme">show all 11</a>
                           <a href="javascript:void(0);" class="link-text hideme">hide</a>
                        </div>
                     </div>
                  </div>
                  <div class="filter-position">
                     <a class="filter-link" href="javascript:%20void(0);">Price, <span class="currency">$</span></a>
                     <div class="filter-in">
                        <div class="filter-slider">
                           <div class="filter-slider">
                              <div class="slider slider-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" rel="price" ref="" data-min="439" data-max="6044">
                                 <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                 <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                 <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                              </div>
                              <div class="costin minCostVal"><span>439</span></div>
                              <div class="costin maxCostVal"><span>6044</span></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!--
                     <div class="filter-position" style="-webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; border-bottom: 2px solid rgba(0,0,0,.12); margin: 0 -17px 15px -17px; padding: 0 17px 1px; font-size: .88rem;">
                        <a class="filter-link" href="javascript:%20void(0);" style="margin: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; border: none; border-width: 0; text-decoration: none; -moz-outline: 0; outline: none; font-weight: 600; font-size: .88rem; text-transform: uppercase; position: relative; color: #4a4a4a; display: block; padding: 0 40px 14px 0;">Departure time</a>
                        <div class="filter-in">
                           <div class="filter-slider" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; position: relative;">
                              <div class="filter-info" style="margin: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; font-size: .75rem; padding: 0 0 1px 0; display: flex; white-space: nowrap; align-items: center;">
                                 <div class="filter-city" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; overflow: hidden; min-width: 40px; text-overflow: ellipsis;">Dhaka</div>
                                 <span class="icon icon-plane-right rotate45" style="padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; -webkit-transform: rotate(45deg); transform: rotate(45deg); speak: none; font-style: normal; font-weight: normal; font-variant: normal; text-transform: none; line-height: 1; -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale; font-size: 8px; margin: 0 6px; color: #4a4a4a; font-family: &quot;citytravel&quot;;"></span>
                                 <div class="filter-city" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; overflow: hidden; min-width: 40px; text-overflow: ellipsis;">Male</div>
                              </div>
                              <div class="filter-slider" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; position: relative;">
                                 <div class="slider slider-time slider-time-dep-0 ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" rel="dep" ref="0" data-min="515" data-max="1435" style="padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; position: relative; text-align: left; font-family: Arial,Helvetica,sans-serif; font-size: 1em; color: #333; border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-left-radius: 3px; border-bottom-right-radius: 3px; border: none; border-radius: 0; margin: 13px 6px 31px; border-top: 1px solid #9b9b9b; background: none; height: 11px; cursor: pointer;">
                                    <div class="ui-slider-range ui-widget-header ui-corner-all" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; color: #333; font-weight: bold; border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-left-radius: 3px; border-bottom-right-radius: 3px; cursor: pointer; background: none; border-radius: 0; position: absolute; z-index: 1; font-size: .7em; display: block; border: 0; background-position: 0 0; top: 0; height: 100%; left: 0%; width: 100%;"></div>
                                    <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-left-radius: 3px; border-bottom-right-radius: 3px; position: absolute; z-index: 2; -ms-touch-action: none; touch-action: none; margin-left: -.6em; font-weight: normal; color: #454545; width: 12px; height: 12px; border: 1px solid #4a90e2; background: #fff; border-radius: 50%; margin: 0 0 0 -6px; top: -6px; cursor: pointer; left: 0%;"></span><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-left-radius: 3px; border-bottom-right-radius: 3px; position: absolute; z-index: 2; -ms-touch-action: none; touch-action: none; margin-left: -.6em; font-weight: normal; color: #454545; width: 12px; height: 12px; border: 1px solid #4a90e2; background: #fff; border-radius: 50%; margin: 0 0 0 -6px; top: -6px; cursor: pointer; left: 100%;"></span>
                                 </div>
                                 <div class="costin minCostVal" style="padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; position: absolute; top: 11px; font-size: .75rem; width: 60px; margin: 0 0 0 -24px; left: 0px; text-align: left; margin-left: 0px;"><span style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; display: inline-block; background: #fff;">08:35</span></div>
                                 <div class="costin maxCostVal" style="padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; position: absolute; top: 11px; font-size: .75rem; width: 60px; margin: 0 0 0 -24px; left: 100%; text-align: right; margin-left: -60px;"><span style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; display: inline-block; background: #fff;">23:55</span></div>
                              </div>
                           </div>
                           <div class="filter-slider" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; position: relative;">
                              <div class="filter-info" style="margin: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; font-size: .75rem; padding: 0 0 1px 0; display: flex; white-space: nowrap; align-items: center;">
                                 <div class="filter-city" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; overflow: hidden; min-width: 40px; text-overflow: ellipsis;">Male</div>
                                 <span class="icon icon-plane-right rotate45" style="padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; -webkit-transform: rotate(45deg); transform: rotate(45deg); speak: none; font-style: normal; font-weight: normal; font-variant: normal; text-transform: none; line-height: 1; -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale; font-size: 8px; margin: 0 6px; color: #4a4a4a; font-family: &quot;citytravel&quot;;"></span>
                                 <div class="filter-city" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; overflow: hidden; min-width: 40px; text-overflow: ellipsis;">Dhaka</div>
                              </div>
                              <div class="filter-slider" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; position: relative;">
                                 <div class="slider slider-time slider-time-dep-1 ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" rel="dep" ref="1" data-min="515" data-max="1435" style="padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; position: relative; text-align: left; font-family: Arial,Helvetica,sans-serif; font-size: 1em; color: #333; border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-left-radius: 3px; border-bottom-right-radius: 3px; border: none; border-radius: 0; margin: 13px 6px 31px; border-top: 1px solid #9b9b9b; background: none; height: 11px; cursor: pointer;">
                                    <div class="ui-slider-range ui-widget-header ui-corner-all" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; color: #333; font-weight: bold; border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-left-radius: 3px; border-bottom-right-radius: 3px; cursor: pointer; background: none; border-radius: 0; position: absolute; z-index: 1; font-size: .7em; display: block; border: 0; background-position: 0 0; top: 0; height: 100%; left: 0%; width: 100%;"></div>
                                    <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-left-radius: 3px; border-bottom-right-radius: 3px; position: absolute; z-index: 2; -ms-touch-action: none; touch-action: none; margin-left: -.6em; font-weight: normal; color: #454545; width: 12px; height: 12px; border: 1px solid #4a90e2; background: #fff; border-radius: 50%; margin: 0 0 0 -6px; top: -6px; cursor: pointer; left: 0%;"></span><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-left-radius: 3px; border-bottom-right-radius: 3px; position: absolute; z-index: 2; -ms-touch-action: none; touch-action: none; margin-left: -.6em; font-weight: normal; color: #454545; width: 12px; height: 12px; border: 1px solid #4a90e2; background: #fff; border-radius: 50%; margin: 0 0 0 -6px; top: -6px; cursor: pointer; left: 100%;"></span>
                                 </div>
                                 <div class="costin minCostVal" style="padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; position: absolute; top: 11px; font-size: .75rem; width: 60px; margin: 0 0 0 -24px; left: 0px; text-align: left; margin-left: 0px;"><span style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; display: inline-block; background: #fff;">08:35</span></div>
                                 <div class="costin maxCostVal" style="padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; position: absolute; top: 11px; font-size: .75rem; width: 60px; margin: 0 0 0 -24px; left: 100%; text-align: right; margin-left: -60px;"><span style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; display: inline-block; background: #fff;">23:55</span></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="filter-position" style="-webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; border-bottom: 2px solid rgba(0,0,0,.12); margin: 0 -17px 15px -17px; padding: 0 17px 1px; font-size: .88rem;">
                        <a class="filter-link" href="javascript:%20void(0);" style="margin: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; border: none; border-width: 0; text-decoration: none; -moz-outline: 0; outline: none; font-weight: 600; font-size: .88rem; text-transform: uppercase; position: relative; color: #4a4a4a; display: block; padding: 0 40px 14px 0;">Arrival time</a>
                        <div class="filter-in">
                           <div class="filter-slider" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; position: relative;">
                              <div class="filter-info" style="margin: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; font-size: .75rem; padding: 0 0 1px 0; display: flex; white-space: nowrap; align-items: center;">
                                 <div class="filter-city" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; overflow: hidden; min-width: 40px; text-overflow: ellipsis;">Dhaka</div>
                                 <span class="icon icon-plane-right rotate45" style="padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; -webkit-transform: rotate(45deg); transform: rotate(45deg); speak: none; font-style: normal; font-weight: normal; font-variant: normal; text-transform: none; line-height: 1; -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale; font-size: 8px; margin: 0 6px; color: #4a4a4a; font-family: &quot;citytravel&quot;;"></span>
                                 <div class="filter-city" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; overflow: hidden; min-width: 40px; text-overflow: ellipsis;">Male</div>
                              </div>
                              <div class="filter-slider" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; position: relative;">
                                 <div class="slider slider-time slider-time-arr-0 ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" rel="arr" ref="0" data-min="50" data-max="1380" style="padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; position: relative; text-align: left; font-family: Arial,Helvetica,sans-serif; font-size: 1em; color: #333; border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-left-radius: 3px; border-bottom-right-radius: 3px; border: none; border-radius: 0; margin: 13px 6px 31px; border-top: 1px solid #9b9b9b; background: none; height: 11px; cursor: pointer;">
                                    <div class="ui-slider-range ui-widget-header ui-corner-all" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; color: #333; font-weight: bold; border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-left-radius: 3px; border-bottom-right-radius: 3px; cursor: pointer; background: none; border-radius: 0; position: absolute; z-index: 1; font-size: .7em; display: block; border: 0; background-position: 0 0; top: 0; height: 100%; left: 0%; width: 100%;"></div>
                                    <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-left-radius: 3px; border-bottom-right-radius: 3px; position: absolute; z-index: 2; -ms-touch-action: none; touch-action: none; margin-left: -.6em; font-weight: normal; color: #454545; width: 12px; height: 12px; border: 1px solid #4a90e2; background: #fff; border-radius: 50%; margin: 0 0 0 -6px; top: -6px; cursor: pointer; left: 0%;"></span><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-left-radius: 3px; border-bottom-right-radius: 3px; position: absolute; z-index: 2; -ms-touch-action: none; touch-action: none; margin-left: -.6em; font-weight: normal; color: #454545; width: 12px; height: 12px; border: 1px solid #4a90e2; background: #fff; border-radius: 50%; margin: 0 0 0 -6px; top: -6px; cursor: pointer; left: 100%;"></span>
                                 </div>
                                 <div class="costin minCostVal" style="padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; position: absolute; top: 11px; font-size: .75rem; width: 60px; margin: 0 0 0 -24px; left: 0px; text-align: left; margin-left: 0px;"><span style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; display: inline-block; background: #fff;">00:50</span></div>
                                 <div class="costin maxCostVal" style="padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; position: absolute; top: 11px; font-size: .75rem; width: 60px; margin: 0 0 0 -24px; left: 100%; text-align: right; margin-left: -60px;"><span style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; display: inline-block; background: #fff;">23:00</span></div>
                              </div>
                           </div>
                           <div class="filter-slider" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; position: relative;">
                              <div class="filter-info" style="margin: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; font-size: .75rem; padding: 0 0 1px 0; display: flex; white-space: nowrap; align-items: center;">
                                 <div class="filter-city" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; overflow: hidden; min-width: 40px; text-overflow: ellipsis;">Male</div>
                                 <span class="icon icon-plane-right rotate45" style="padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; -webkit-transform: rotate(45deg); transform: rotate(45deg); speak: none; font-style: normal; font-weight: normal; font-variant: normal; text-transform: none; line-height: 1; -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale; font-size: 8px; margin: 0 6px; color: #4a4a4a; font-family: &quot;citytravel&quot;;"></span>
                                 <div class="filter-city" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; overflow: hidden; min-width: 40px; text-overflow: ellipsis;">Dhaka</div>
                              </div>
                              <div class="filter-slider" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; position: relative;">
                                 <div class="slider slider-time slider-time-arr-1 ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" rel="arr" ref="1" data-min="50" data-max="1380" style="padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; position: relative; text-align: left; font-family: Arial,Helvetica,sans-serif; font-size: 1em; color: #333; border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-left-radius: 3px; border-bottom-right-radius: 3px; border: none; border-radius: 0; margin: 13px 6px 31px; border-top: 1px solid #9b9b9b; background: none; height: 11px; cursor: pointer;">
                                    <div class="ui-slider-range ui-widget-header ui-corner-all" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; color: #333; font-weight: bold; border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-left-radius: 3px; border-bottom-right-radius: 3px; cursor: pointer; background: none; border-radius: 0; position: absolute; z-index: 1; font-size: .7em; display: block; border: 0; background-position: 0 0; top: 0; height: 100%; left: 0%; width: 100%;"></div>
                                    <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-left-radius: 3px; border-bottom-right-radius: 3px; position: absolute; z-index: 2; -ms-touch-action: none; touch-action: none; margin-left: -.6em; font-weight: normal; color: #454545; width: 12px; height: 12px; border: 1px solid #4a90e2; background: #fff; border-radius: 50%; margin: 0 0 0 -6px; top: -6px; cursor: pointer; left: 0%;"></span><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-left-radius: 3px; border-bottom-right-radius: 3px; position: absolute; z-index: 2; -ms-touch-action: none; touch-action: none; margin-left: -.6em; font-weight: normal; color: #454545; width: 12px; height: 12px; border: 1px solid #4a90e2; background: #fff; border-radius: 50%; margin: 0 0 0 -6px; top: -6px; cursor: pointer; left: 100%;"></span>
                                 </div>
                                 <div class="costin minCostVal" style="padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; position: absolute; top: 11px; font-size: .75rem; width: 60px; margin: 0 0 0 -24px; left: 0px; text-align: left; margin-left: 0px;"><span style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; display: inline-block; background: #fff;">00:50</span></div>
                                 <div class="costin maxCostVal" style="padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; position: absolute; top: 11px; font-size: .75rem; width: 60px; margin: 0 0 0 -24px; left: 100%; text-align: right; margin-left: -60px;"><span style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; display: inline-block; background: #fff;">23:00</span></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="filter-position" style="-webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; border-bottom: 2px solid rgba(0,0,0,.12); margin: 0 -17px 15px -17px; padding: 0 17px 1px; font-size: .88rem;">
                        <a class="filter-link" href="javascript:%20void(0);" style="margin: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; border: none; border-width: 0; text-decoration: none; -moz-outline: 0; outline: none; font-weight: 600; font-size: .88rem; text-transform: uppercase; position: relative; color: #4a4a4a; display: block; padding: 0 40px 14px 0;">Airlines</a>
                        <div class="filter-in">
                           <div class="checkboxes-list" rel="airline">
                              <label class="checkbox" style="margin: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; font-size: .88rem; cursor: pointer; position: relative; overflow: hidden; line-height: 20px; padding: 0 0 17px 0; display: block;">
                              <input type="checkbox" class="checkbox-lowcost" name="airline_nolowcost" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; font-family: &quot;ProximaNovaRegular&quot;,sans-serif; color: #4a4a4a; position: absolute; left: -20px; top: 0;">
                              <span style="margin: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; padding: 0 0 0 25px; position: relative; display: block;">
                              Exclude LowCost carriers                        <span class="price checkbox-r" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; flex: 0 auto; min-width: 76px; white-space: nowrap; float: right; color: #cdcdcd;">from                            <span class="currency ">$</span> <span class="pricevalue">439.13</span>                        </span>
                              </span>
                              </label>
                              <label class="checkbox" style="margin: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; font-size: .88rem; cursor: pointer; position: relative; overflow: hidden; line-height: 20px; padding: 0 0 17px 0; display: block;">
                              <input type="checkbox" class="checkbox-concat" name="airline_concat" checked="" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; font-family: &quot;ProximaNovaRegular&quot;,sans-serif; color: #4a4a4a; position: absolute; left: -20px; top: 0;">
                              <span style="margin: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; padding: 0 0 0 25px; position: relative; display: block;">Several airlines</span>
                              </label>
                              <div class="checkbox" style="margin: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; font-size: .88rem; cursor: pointer; position: relative; overflow: hidden; line-height: 20px; padding: 0 0 17px 0; display: block;">Show tickets with flights operated by several airlines, including the selected</div>
                              <label class="checkbox" style="margin: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; font-size: .88rem; cursor: pointer; position: relative; overflow: hidden; line-height: 20px; padding: 0 0 17px 0; display: block;">
                              <input type="checkbox" class="checkbox-all" name="airline_all" checked="" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; font-family: &quot;ProximaNovaRegular&quot;,sans-serif; color: #4a4a4a; position: absolute; left: -20px; top: 0;">
                              <span style="margin: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; padding: 0 0 0 25px; position: relative; display: block;">All</span>
                              </label>
                              <label class="checkbox" style="margin: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; font-size: .88rem; cursor: pointer; position: relative; overflow: hidden; line-height: 20px; padding: 0 0 17px 0; display: block;">
                              <input type="checkbox" name="airline[76423d8352c9e8fc8d7d65f62c55eae9]" checked="" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; font-family: &quot;ProximaNovaRegular&quot;,sans-serif; color: #4a4a4a; position: absolute; left: -20px; top: 0;">
                              <span class="checkbox-r-onlyable" style="margin: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; padding: 0 0 0 25px; position: relative; display: block;">
                              Vistara                                              (UK)
                              <span class="price checkbox-r checkbox-r-price" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; flex: 0 auto; min-width: 76px; white-space: nowrap; float: right; color: #cdcdcd;">from                            <span class="currency ">$</span> <span class="pricevalue">439.13</span>                        </span>
                              <span class="price checkbox-r checkbox-r-only" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; flex: 0 auto; min-width: 76px; white-space: nowrap; float: right; color: #cdcdcd; display: none;">
                              <a href="javascript:void(0);" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; border: none; border-width: 0; color: #4a90e2; text-decoration: none; -moz-outline: 0; outline: none; display: inline-block; width: 100%;">only</a>
                              </span>
                              </span>
                              </label>
                              <label class="checkbox" style="margin: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; font-size: .88rem; cursor: pointer; position: relative; overflow: hidden; line-height: 20px; padding: 0 0 17px 0; display: block;">
                              <input type="checkbox" name="airline[19e538ec0219b603c4084ff59466eec3]" checked="" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; font-family: &quot;ProximaNovaRegular&quot;,sans-serif; color: #4a4a4a; position: absolute; left: -20px; top: 0;">
                              <span class="checkbox-r-onlyable" style="margin: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; padding: 0 0 0 25px; position: relative; display: block;">
                              Fly Dubai                                              (FZ)
                              <span class="price checkbox-r checkbox-r-price" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; flex: 0 auto; min-width: 76px; white-space: nowrap; float: right; color: #cdcdcd;">from                            <span class="currency ">$</span> <span class="pricevalue">886.36</span>                        </span>
                              <span class="price checkbox-r checkbox-r-only" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; flex: 0 auto; min-width: 76px; white-space: nowrap; float: right; color: #cdcdcd; display: none;">
                              <a href="javascript:void(0);" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; border: none; border-width: 0; color: #4a90e2; text-decoration: none; -moz-outline: 0; outline: none; display: inline-block; width: 100%;">only</a>
                              </span>
                              </span>
                              </label>
                              <label class="checkbox" style="margin: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; font-size: .88rem; cursor: pointer; position: relative; overflow: hidden; line-height: 20px; padding: 0 0 17px 0; display: block;">
                              <input type="checkbox" name="airline[2de960c6ab3cef39a9a2298fb58e503d]" checked="" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; font-family: &quot;ProximaNovaRegular&quot;,sans-serif; color: #4a4a4a; position: absolute; left: -20px; top: 0;">
                              <span class="checkbox-r-onlyable" style="margin: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; padding: 0 0 0 25px; position: relative; display: block;">
                              Thai Airways                                              (TG)
                              <span class="price checkbox-r checkbox-r-price" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; flex: 0 auto; min-width: 76px; white-space: nowrap; float: right; color: #cdcdcd;">from                            <span class="currency ">$</span> <span class="pricevalue">1&nbsp;210.56</span>                        </span>
                              <span class="price checkbox-r checkbox-r-only" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; flex: 0 auto; min-width: 76px; white-space: nowrap; float: right; color: #cdcdcd; display: none;">
                              <a href="javascript:void(0);" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; border: none; border-width: 0; color: #4a90e2; text-decoration: none; -moz-outline: 0; outline: none; display: inline-block; width: 100%;">only</a>
                              </span>
                              </span>
                              </label>
                              <label class="checkbox hideble" style="margin: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; font-size: .88rem; cursor: pointer; position: relative; overflow: hidden; line-height: 20px; padding: 0 0 17px 0; display: none;">
                              <input type="checkbox" name="airline[49f38fe03598e4d63f4a0a8791c9c8b9]" checked="" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; font-family: &quot;ProximaNovaRegular&quot;,sans-serif; color: #4a4a4a; position: absolute; left: -20px; top: 0;">
                              <span class="checkbox-r-onlyable" style="margin: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; padding: 0 0 0 25px; position: relative; display: block;">
                              Bangkok Airways                                              (PG)
                              <span class="price checkbox-r checkbox-r-price" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; flex: 0 auto; min-width: 76px; white-space: nowrap; float: right; color: #cdcdcd;">from                            <span class="currency ">$</span> <span class="pricevalue">1&nbsp;210.56</span>                        </span>
                              <span class="price checkbox-r checkbox-r-only" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; flex: 0 auto; min-width: 76px; white-space: nowrap; float: right; color: #cdcdcd; display: none;">
                              <a href="javascript:void(0);" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; border: none; border-width: 0; color: #4a90e2; text-decoration: none; -moz-outline: 0; outline: none; display: inline-block; width: 100%;">only</a>
                              </span>
                              </span>
                              </label>
                              <label class="checkbox hideble" style="margin: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; font-size: .88rem; cursor: pointer; position: relative; overflow: hidden; line-height: 20px; padding: 0 0 17px 0; display: none;">
                              <input type="checkbox" name="airline[5b26faf932d04f134a2cf70e96c4c548]" checked="" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; font-family: &quot;ProximaNovaRegular&quot;,sans-serif; color: #4a4a4a; position: absolute; left: -20px; top: 0;">
                              <span class="checkbox-r-onlyable" style="margin: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; padding: 0 0 0 25px; position: relative; display: block;">
                              Srilankan Air                                              (UL)
                              <span class="price checkbox-r checkbox-r-price" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; flex: 0 auto; min-width: 76px; white-space: nowrap; float: right; color: #cdcdcd;">from                            <span class="currency ">$</span> <span class="pricevalue">1&nbsp;266.15</span>                        </span>
                              <span class="price checkbox-r checkbox-r-only" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; flex: 0 auto; min-width: 76px; white-space: nowrap; float: right; color: #cdcdcd; display: none;">
                              <a href="javascript:void(0);" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; border: none; border-width: 0; color: #4a90e2; text-decoration: none; -moz-outline: 0; outline: none; display: inline-block; width: 100%;">only</a>
                              </span>
                              </span>
                              </label>
                              <label class="checkbox hideble" style="margin: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; font-size: .88rem; cursor: pointer; position: relative; overflow: hidden; line-height: 20px; padding: 0 0 17px 0; display: none;">
                              <input type="checkbox" name="airline[1249ab51832d31d2c1a0ac36b9ffaa2d]" checked="" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; font-family: &quot;ProximaNovaRegular&quot;,sans-serif; color: #4a4a4a; position: absolute; left: -20px; top: 0;">
                              <span class="checkbox-r-onlyable" style="margin: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; padding: 0 0 0 25px; position: relative; display: block;">
                              Singapore Airlines                                              (SQ)
                              <span class="price checkbox-r checkbox-r-price" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; flex: 0 auto; min-width: 76px; white-space: nowrap; float: right; color: #cdcdcd;">from                            <span class="currency ">$</span> <span class="pricevalue">1&nbsp;306.31</span>                        </span>
                              <span class="price checkbox-r checkbox-r-only" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; flex: 0 auto; min-width: 76px; white-space: nowrap; float: right; color: #cdcdcd; display: none;">
                              <a href="javascript:void(0);" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; border: none; border-width: 0; color: #4a90e2; text-decoration: none; -moz-outline: 0; outline: none; display: inline-block; width: 100%;">only</a>
                              </span>
                              </span>
                              </label>
                              <label class="checkbox hideble" style="margin: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; font-size: .88rem; cursor: pointer; position: relative; overflow: hidden; line-height: 20px; padding: 0 0 17px 0; display: none;">
                              <input type="checkbox" name="airline[6aa451b53d492a8f5a2fa1fa2855be8b]" checked="" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; font-family: &quot;ProximaNovaRegular&quot;,sans-serif; color: #4a4a4a; position: absolute; left: -20px; top: 0;">
                              <span class="checkbox-r-onlyable" style="margin: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; padding: 0 0 0 25px; position: relative; display: block;">
                              Emirates                                              (EK)
                              <span class="price checkbox-r checkbox-r-price" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; flex: 0 auto; min-width: 76px; white-space: nowrap; float: right; color: #cdcdcd;">from                            <span class="currency ">$</span> <span class="pricevalue">1&nbsp;652.78</span>                        </span>
                              <span class="price checkbox-r checkbox-r-only" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; flex: 0 auto; min-width: 76px; white-space: nowrap; float: right; color: #cdcdcd; display: none;">
                              <a href="javascript:void(0);" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; border: none; border-width: 0; color: #4a90e2; text-decoration: none; -moz-outline: 0; outline: none; display: inline-block; width: 100%;">only</a>
                              </span>
                              </span>
                              </label>
                              <label class="checkbox hideble" style="margin: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; font-size: .88rem; cursor: pointer; position: relative; overflow: hidden; line-height: 20px; padding: 0 0 17px 0; display: none;">
                              <input type="checkbox" name="airline[66c35cd8077f7e1db5faefbc048a646a]" checked="" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; font-family: &quot;ProximaNovaRegular&quot;,sans-serif; color: #4a4a4a; position: absolute; left: -20px; top: 0;">
                              <span class="checkbox-r-onlyable" style="margin: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; padding: 0 0 0 25px; position: relative; display: block;">
                              Qatar                                              (QR)
                              <span class="price checkbox-r checkbox-r-price" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; flex: 0 auto; min-width: 76px; white-space: nowrap; float: right; color: #cdcdcd;">from                            <span class="currency ">$</span> <span class="pricevalue">2&nbsp;198.38</span>                        </span>
                              <span class="price checkbox-r checkbox-r-only" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; flex: 0 auto; min-width: 76px; white-space: nowrap; float: right; color: #cdcdcd; display: none;">
                              <a href="javascript:void(0);" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; border: none; border-width: 0; color: #4a90e2; text-decoration: none; -moz-outline: 0; outline: none; display: inline-block; width: 100%;">only</a>
                              </span>
                              </span>
                              </label>
                              <label class="checkbox hideble" style="margin: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; font-size: .88rem; cursor: pointer; position: relative; overflow: hidden; line-height: 20px; padding: 0 0 17px 0; display: none;">
                              <input type="checkbox" name="airline[eb14905b7083730d14f5c0958a71082d]" checked="" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; font-family: &quot;ProximaNovaRegular&quot;,sans-serif; color: #4a4a4a; position: absolute; left: -20px; top: 0;">
                              <span class="checkbox-r-onlyable" style="margin: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; padding: 0 0 0 25px; position: relative; display: block;">
                              Etihad                                              (EY)
                              <span class="price checkbox-r checkbox-r-price" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; flex: 0 auto; min-width: 76px; white-space: nowrap; float: right; color: #cdcdcd;">from                            <span class="currency ">$</span> <span class="pricevalue">3&nbsp;021.82</span>                        </span>
                              <span class="price checkbox-r checkbox-r-only" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; flex: 0 auto; min-width: 76px; white-space: nowrap; float: right; color: #cdcdcd; display: none;">
                              <a href="javascript:void(0);" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; border: none; border-width: 0; color: #4a90e2; text-decoration: none; -moz-outline: 0; outline: none; display: inline-block; width: 100%;">only</a>
                              </span>
                              </span>
                              </label>
                              <label class="checkbox hideble" style="margin: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; font-size: .88rem; cursor: pointer; position: relative; overflow: hidden; line-height: 20px; padding: 0 0 17px 0; display: none;">
                              <input type="checkbox" name="airline[eb56daa50d41428baf0100d40253f481]" checked="" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; font-family: &quot;ProximaNovaRegular&quot;,sans-serif; color: #4a4a4a; position: absolute; left: -20px; top: 0;">
                              <span class="checkbox-r-onlyable" style="margin: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; padding: 0 0 0 25px; position: relative; display: block;">
                              IndiGo                                              (6E)
                              <span class="price checkbox-r checkbox-r-price" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; flex: 0 auto; min-width: 76px; white-space: nowrap; float: right; color: #cdcdcd;">from                            <span class="currency ">$</span> <span class="pricevalue">4&nbsp;681.04</span>                        </span>
                              <span class="price checkbox-r checkbox-r-only" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; flex: 0 auto; min-width: 76px; white-space: nowrap; float: right; color: #cdcdcd; display: none;">
                              <a href="javascript:void(0);" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; border: none; border-width: 0; color: #4a90e2; text-decoration: none; -moz-outline: 0; outline: none; display: inline-block; width: 100%;">only</a>
                              </span>
                              </span>
                              </label>
                              <label class="checkbox hideble" style="margin: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; font-size: .88rem; cursor: pointer; position: relative; overflow: hidden; line-height: 20px; padding: 0 0 17px 0; display: none;">
                              <input type="checkbox" name="airline[05184b2fec44bde3ebe5d5f386d7e1eb]" checked="" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; font-family: &quot;ProximaNovaRegular&quot;,sans-serif; color: #4a4a4a; position: absolute; left: -20px; top: 0;">
                              <span class="checkbox-r-onlyable" style="margin: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; padding: 0 0 0 25px; position: relative; display: block;">
                              Oman Air                                              (WY)
                              <span class="price checkbox-r checkbox-r-price" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; flex: 0 auto; min-width: 76px; white-space: nowrap; float: right; color: #cdcdcd;">from                            <span class="currency ">$</span> <span class="pricevalue">5&nbsp;873.58</span>                        </span>
                              <span class="price checkbox-r checkbox-r-only" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; flex: 0 auto; min-width: 76px; white-space: nowrap; float: right; color: #cdcdcd; display: none;">
                              <a href="javascript:void(0);" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; border: none; border-width: 0; color: #4a90e2; text-decoration: none; -moz-outline: 0; outline: none; display: inline-block; width: 100%;">only</a>
                              </span>
                              </span>
                              </label>
                           </div>
                           <div class="expand-link" style="padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; margin: -4px 0 13px 0;">
                              <a href="javascript:void(0);" class="link-text showme" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; border: none; border-width: 0; text-decoration: none; -moz-outline: 0; outline: none; color: #4a4a4a; display: inline;">show all 11</a>
                              <a href="javascript:void(0);" class="link-text hideme" style="margin: 0; padding: 0; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; border: none; border-width: 0; text-decoration: none; -moz-outline: 0; outline: none; color: #4a4a4a; display: none;">hide</a>
                           </div>
                        </div>
                     </div>
                  -->
                  <button type="submit" class="btn btn-md btn-block filter-apply">Apply</button>
                  <div class="filter-default">
                     <a class="filter-reset" href="javascript:void(0);"><span class="icon icon-x"></span>reset filters</a>
                  </div>
               </form>
            </div>
         </div>