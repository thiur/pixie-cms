<?php
header('Content-Type: text/html; charset=utf-8');
//*****************************************************************//
// Pixie: The Small, Simple, Site Maker.                           //
// ----------------------------------------------------------------//
// Licence: GNU General Public License v3                   	   //
// Title: Ajax message system.                                     //
//*****************************************************************//

$refering = NULL;
$refering = parse_url( ($_SERVER['HTTP_REFERER']) );
if( ($refering['host'] == $_SERVER['HTTP_HOST']) ) {
if (defined('DIRECT_ACCESS')) { require_once '../../lib/lib_misc.php'; pixieExit(); exit(); }
define('DIRECT_ACCESS', 1);
require_once '../../lib/lib_misc.php';										/* perform basic sanity checks */
bombShelter();                  										/* check URL size */
error_reporting(0);

if ($_POST['message']) {
	print $message;
	echo "
				<span class=\"message_text_error\">";
				
				if ($_POST['back'] != 'no') {
				echo "<img src=\"admin/theme/images/icons/error.png\" />";
				}
				echo $_POST['message'] . '</span>';
				if ($_POST['back'] != "no") {
				echo "<span class=\"message_back\"> (<a href=\"javascript:history.go(-1);\" title=\"Back (Will reload any submitted form data)\">go back &raquo;</a>)</span>";
				}
} else if ($_POST['messageok']) {
	echo "
				<span class=\"message_text_ok\"><img src=\"admin/theme/images/icons/tick.png\" /> " . $_POST['messageok'] . "</span>
	";
}
/* This file should be merged as an include or merged directly into another file instead of it being directly accessed like this. */
} else { header( 'Location: ../../../' ); exit(); } ?>