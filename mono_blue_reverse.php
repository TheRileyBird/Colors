<?php

$colorscheme = 'Monochromatic Blue - Reverse';

$color_text = '#1B2C43';
$color_etc1 = '#63829A';
$color_etc2 = '#B0C8D5';
$color_bg2 = '#F7F8F9';
$color_bg1 = '#ffffff';

// include theme's colors.php -- define ROOT because this include is nested in a 00-child-presets include
//include(dirname(__FILE__).'.php');

$overrides = '
	#promos .promo-box a {
		color: '.$color_bg1.';
	}
	.off-canvas #headerlinks .textwidget a, .off-canvas #closemenu ul.menu li a i.fa {
		color: '.$color_text.';
	}
	.off-canvas ul li a:after {
	    border-color: '.$color_text.' transparent transparent;
	}
	table.im-services thead tr th {
		color: '.$color_etc1.';
	}
	header.header .top-bar #navigation .textwidget a, header.header .top-bar #menuicon i.fa {
		color: '.$color_bg2.';
	}
	header.header .top-bar #navigation .textwidget a:hover {
		color: '.$color_etc2.';
	}
';