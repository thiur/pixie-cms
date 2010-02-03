<?php
if (defined('DIRECT_ACCESS')) { require_once '../../lib/lib_misc.php'; nukeProofSuit(); exit(); }
define('DIRECT_ACCESS', 1);
require_once '../../lib/lib_misc.php';										/* perform basic sanity checks */
	bombShelter();                  									/* check URL size */
//*****************************************************************//
// Pixie: The Small, Simple, Site Maker.                           //
// ----------------------------------------------------------------//
// Licence: GNU General Public License v3                   	   //
// Title: Ajax page order system.                                  //
//*****************************************************************//

error_reporting(0);

if ($_POST['pages']) {

	include_once '../../config.php';
	include_once '../../lib/lib_db.php';
	include_once '../../lib/lib_auth.php';

	$count = count($_POST['pages']);

	if ($GLOBALS['pixie_user'] && $GLOBALS['pixie_user_privs'] >= 2) {
		$i = 0;
		while ($i < $count){
			$page_name = $_POST['pages'][$i];
			safe_update('pixie_core', "page_order  = $i + 1", "page_name = '$page_name'");
		$i++;
		}
	}
}
?>
