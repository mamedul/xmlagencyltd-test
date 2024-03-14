<?php

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) { exit; }

if( !isset($random_id) ){ $random_id = str_replace( '.', '', uniqid('', true) ); }


?>
<style>
	.st-banner-search-form{ display: none; }
	.simple-flight-search,
	.simple-flight-search::before,
	.simple-flight-search::after,
	.simple-flight-search *,
	.simple-flight-search *::before,
	.simple-flight-search *::after{
		font-family: system-ui,-apple-system,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans","Liberation Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
	}
	.simple-flight-search {
		padding: 0;
		position: relative;
		margin: 16px 4px 16px 4px;
		background: #ffffff;
    	padding: 8px;
    	border-radius: 12px;
		box-shadow: 0 0 8px #4a90e2;
	}

	.h-form-line-wrapper {
		border: none;
		margin: 0 auto;
		padding: 0;
		display: -ms-flexbox;
		display: flex;
		-ms-flex-direction: column;
		flex-direction: column;
	}

	.h-form-line {
		margin: 0;
		padding: 0;
	}

	.h-form-line1,
	.h-form-line2,
	.h-form-line3 {
		position: relative;
		display: -ms-flexbox;
		display: flex;
	}

	.h-form-line1,
	.h-form-line3{
		-ms-flex-direction: column;
		flex-direction: column;
	}

	.h-form-line2{
		-ms-flex-direction: row;
		flex-direction: row;
	}

	.h-form-when,
	.h-form-when-back{
		flex: 0 0 50%;
		width: 50%;
		max-width: 50%;
	}

	.h-form-item{
		flex: 0 0 100%;
		width: 100%;
		max-width: 100%;
		margin: 0px 0px 16px 0px;
	}

	.h-form-line3{
		margin-bottom: 0px;
	}

	.h-form-from,
	.h-form-to{
		position: static;
		padding: 0px 48px 0px 0px;
	}

	.h-form-from .field-block,
	.h-form-to .field-block{
		padding-right: 40px;
	}
	.h-form-passenger .field-block{
		padding-right: 76px;
	}

	.h-form-submit{
		margin: 12px 0px 0px 0px;
	}

	.icon {
		display: inline-block;
		width: 24px;
		height: 24px;
		background-color: transparent;
		background-image: url('<?php echo XMLAGENCYLTD_PLUGIN_URL; ?>/assets/icons/plane-icons.png');
		background-repeat: no-repeat;
		background-size: 96px 96px;
		position: absolute;
		left: 8px;
		top: -4px;
		-webkit-opacity: 0.4;
		opacity: 0.4;
	}

	.icon.icon-plane-up {
		background-position: -24px 0px;
	}

	.icon.icon-plane-down {
		background-position: -48px 0px;
	}

	.icon.icon-calendar-up {
		background-position: -24px -24px;
	}

	.icon.icon-calendar-down {
		background-position: -48px -24px;
	}

	.icon.icon-passenger {
		background-position: 0px -48px;
	}

	.icon.icon-search {
		position: static;
		vertical-align: middle;
		margin-right: 4px;
		background-position: -72px -72px;
		-webkit-filter: invert(1);
		filter: invert(1);
    	-webkit-opacity: 1;
    	opacity: 1;
	}

	.icon.icon-reverse {
		background-position: -48px -72px;
		left: 50%;
		top: 50%;
		-webkit-transform: translate(-50%, -50%);
		-moz-transform: translate(-50%, -50%);
		-ms-transform: translate(-50%, -50%);
		transform: translate(-50%, -50%);
		cursor: pointer;
	}

	.icon.icon-reverse:hover{
		-webkit-opacity: 1;
		opacity: 1;
	}

	.info-right-text {
		margin: 0;
		padding: 0;
		opacity: .5;
		color: #000;
		font-size: .81rem;
		font-weight: 400;
		position: absolute;
		right: 8px;
		top: 50%;
		-webkit-transform: translateY(-50%);
		-ms-transform: translateY(-50%);
		-moz-transform: translateY(-50%);
		transform: translateY(-50%);
	}

	.reverce {
		margin: 0;
		padding: 0;
		flex: 0 auto;
		width: 48px;
		position: relative;
		position: absolute;
		top: 0px;
		right: 0px;
		height: 100%;
	}

	.btn-submit {
		margin: 0;
		cursor: pointer;
		display: inline-block;
		text-align: center;
		color: #ffffff;
		background: #4a90e2;
		border: 1px solid #4a90e2;
		border-radius: 8px;
		padding: 4px 24px;
		-webkit-transition: all 0.25s ease-in 0s;
		-moz-transition: all 0.25s ease-in 0s;
		transition: all 0.25s ease-in 0s;
		font-size: 16px;
		line-height: 48px;
		-webkit-appearance: none;
		-moz-appearance: none;
		appearance: none;
		width: 100%;
	}
	
	div.field-block{
		position: relative;
		padding: 0px 0px 0px 40px;
		margin: 0px;
		width: 98%;
	}

	label.field-label{
		display: block;
		font-size: 16px;
		font-weight: 600;
		padding: 0px 0px 2px 40px;
		margin: 0px;
		background-color: transparent;
		color: #111111;
		-webkit-opacity: 0.8;
		opacity: 0.8;
	}

	.h-form-line-wrapper input[type="text"],
	.h-form-line-wrapper input[type="date"]{
		display: block;
		width: 100%;
		font-size: 14px;
		font-weight: 400;
		line-height: 32px;
		padding: 0px;
		margin: 0px;
		background-color: transparent;
		color: #666666;
		-webkit-opacity: 1;
		opacity: 1;
	}

	.h-form-line-wrapper input[type="text"]::-webkit-input-placeholder,
	.h-form-line-wrapper input[type="date"]::-webkit-input-placeholder{
		-webkit-opacity: 0.4;
		opacity: 0.4;
	}
	.h-form-line-wrapper input[type="text"]::-moz-placeholder,
	.h-form-line-wrapper input[type="date"]::-moz-placeholder{
		-webkit-opacity: 0.4;
		opacity: 0.4;
	}

	.h-form-line-wrapper input[type="text"]::placeholder,
	.h-form-line-wrapper input[type="date"]::placeholder{
		-webkit-opacity: 0.4;
		opacity: 0.4;
	}
	.h-form-line-wrapper input{
		border: none;
		border-bottom: 2px solid #dfdfdf;
		outline: none;
		box-shadow: none;
		-webkit-transition: all 0.25s ease-in 0s;
		-moz-transition: all 0.25s ease-in 0s;
		transition: all 0.25s ease-in 0s;
	}

	.h-form-line-wrapper input:hover,
	.h-form-line-wrapper input:focus,
	.h-form-line-wrapper input:active{
		border-bottom: 2px solid #666666;
	}

	@media screen and (min-width: 1024px) {

		.simple-flight-search {
			min-width: 1000px;
			padding: 8px 12px;
			border-radius: 64px;
		}

		.h-form-line-wrapper{
			-ms-flex-direction: row;
			flex-direction: row;
		}

		.h-form-line1 {
			margin: 0;
			padding: 0;
			display: -ms-flexbox;
			display: flex;
			-ms-flex-direction: row;
			flex-direction: row;
			flex: 0 0 41.6666%;
			width: 41.6666%;
			max-width: 41.6666%;
		}

		.h-form-line2 {
			margin: 0;
			padding: 0;
			display: -ms-flexbox;
			display: flex;
			-ms-flex-direction: row;
			flex-direction: row;
			flex: 0 0 25%;
			width: 25%;
			max-width: 25%;
		}

		.h-form-line3 {
			margin: 0;
			padding: 0;
			display: -ms-flexbox;
			display: flex;
			-ms-flex-direction: row;
			flex-direction: row;
			-ms-flex-line-pack: justify;
			justify-content: space-between;
			flex: 0 0 33.3333%;
			width: 33.3333%;
			max-width: 33.3333%;
		}

		.h-form-from{
			flex: 0 0 50%;
			width: 50%;
			max-width: 50%;
			flex: 0 0 calc(50% + 24px);
			width: calc(50% + 24px);
			max-width: calc(50% + 24px);
			padding: 0px 48px 0px 0px;
		}

		.h-form-item{
			margin: 0px;
		}

		.h-form-to{
			flex: 0 0 50%;
			width: 50%;
			max-width: 50%;
			flex: 0 0 calc(50% - 24px);
			width: calc(50% - 24px);
			max-width: calc(50% - 24px);
		}

		.reverce{
			border-left: 2px solid #dfdfdf;
		}

		.h-form-passenger{
			-ms-flex: 1 1 auto;
			flex: 1 1 auto;
			width: auto;
			max-width: 100%;
			max-width: calc(100% - 128px);
		}

		.h-form-submit{
			-ms-flex: 0 0 auto;
			flex: 0 0 auto;
			width: auto;
			max-width: 128px;
			border-radius: 32px;
		}
		
		.h-form-from,
		.h-form-to,
		.h-form-when,
		.h-form-when-back,
		.h-form-passenger,
		.h-form-submit{
			position: relative;
			border-right: 1px solid #dfdfdf;
			border-left: 1px solid #dfdfdf;
		}

		.h-form-from{
			position: relative;
			border-left: none;
		}

		.h-form-passenger{
			border-right: none;
		}

		.h-form-submit{
			border-left: none;
			border-right: none;
		}

		.btn-submit{
			width: auto;
			border-radius: 32px;
		}

		.h-form-line-wrapper input:hover,
		.h-form-line-wrapper input:focus,
		.h-form-line-wrapper input:active,
		.h-form-line-wrapper input{
			border: none;
			outline: none;
			box-shadow: none;
		}

	}

</style>

<form method="get" class="form simple-flight-search" id="simple-flight-search-<?php echo $random_id; ?>" action="<?php esc_attr($flights_results); ?>?>">

	<div class="h-form-line-wrapper">

		<div class="h-form-line h-form-line1 h-form-item">

			<div class="h-form-from h-form-item">
				<label class="field-label" for="from-plane-<?php echo $random_id; ?>"><?php _e('Origin', 'xmlagencyltd'); ?></label>
				<div class="field-block info-right">
					<input class="from-plane" id="from-plane-<?php echo $random_id; ?>" type="text" name="origin"
						value="" placeholder="From" autocomplete="off" required>
					<input type="hidden" name="from_plane_id" value=""
						placeholder="<?php _e('Enter Origin', 'xmlagencyltd'); ?>" autocomplete="off">
					<label class="icon icon-plane-up" for="from-plane-<?php echo $random_id; ?>"></label>
					<label class="info-right-text" for="from-plane-<?php echo $random_id; ?>"></label>
				</div>
				<div class="reverce">
					<span class="icon icon-reverse"></span>
				</div>
			</div>

			<div class="h-form-to h-form-item">
				<label class="field-label" for="to-plane-<?php echo $random_id; ?>"><?php _e('Destination', 'xmlagencyltd'); ?></label>
				<div class="field-block info-right">
					<input class="to-plane" id="to-plane-<?php echo $random_id; ?>" type="text" name="destination" value=""
						placeholder="<?php _e('Enter Destination', 'xmlagencyltd'); ?>" autocomplete="off" required>
					<input type="hidden"  name="to_plane_id" value="">
					<label class="icon icon-plane-down" for="to-plane-<?php echo $random_id; ?>"></label>
					<label class="info-right-text" for="to-plane-<?php echo $random_id; ?>"></label>
				</div>
			</div>

		</div>

		<div class="h-form-line h-form-line2 h-form-item">

			<div class="h-form-when">
				<label class="field-label" for="datein-plane-<?php echo $random_id; ?>"><?php _e('Depart', 'xmlagencyltd'); ?></label>
				<div class="field-block">
					<input type="text" id="datein-plane-<?php echo $random_id; ?>" class="input-datepicker" value="23 Dec"
						readonly="" placeholder="<?php _e('Depart date', 'xmlagencyltd'); ?>" focusable="true">
					<input type="hidden" name="depart" value="">
					<label class="icon icon-calendar-up" for="datein-plane-<?php echo $random_id; ?>"></label>
				</div>
			</div>

			<div class="h-form-when-back">
				<label class="field-label" for="dateout-plane-<?php echo $random_id; ?>"><?php _e('Return', 'xmlagencyltd'); ?></label>
				<div class="field-block">
					<input type="text" id="dateout-plane-<?php echo $random_id; ?>" class="input-datepicker" value="31 Dec"
						readonly="" placeholder="<?php _e('Return date', 'xmlagencyltd'); ?>" focusable="true">
					<input type="hidden" name="return" value="">
					<label class="icon icon-calendar-down" for="dateout-plane-<?php echo $random_id; ?>"></label>
				</div>
			</div>

		</div>

		<div class="h-form-line h-form-line3 h-form-item">

			<div class="h-form-passenger h-form-item">
				<label class="field-label" for="dummypeople-plane-<?php echo $random_id; ?>"><?php _e('Passengers', 'xmlagencyltd'); ?></label>
				<div class="field-block field-block-sm pic-left info-right">
					<input type="text" id="dummypeople-plane-<?php echo $random_id; ?>" class="dummypeople_plane"
						value="1 pax" readonly="" focusable="true">
					<label class="icon icon-passenger" for="dummypeople-plane-<?php echo $random_id; ?>"></label>
					<label class="info-right-text" for="dummypeople-plane-<?php echo $random_id; ?>"><?php _e('Economy', 'xmlagencyltd'); ?></label>
					<input type="hidden" name="class" value="economy">
					<input type="hidden" name="adults" value="1">
					<input type="hidden" name="children" value="0">
					<input type="hidden" name="infants" value="0">
				</div>
			</div>

			<div class="h-form-submit h-form-item">
				<button type="submit" class="btn-submit" name="search" value="avira">
					<!--<span class="icon icon-search"></span>-->
					<?php esc_html_e('Search', 'xmlagencyltd'); ?>
				</button>
			</div>

		</div>

	</div>
</form>

<script src="<?php echo XMLAGENCYLTD_PLUGIN_URL; ?>/assets/js/search-script.min.js" defer></script>
