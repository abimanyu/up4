<?php
/*
+-------------------------------------------------------------------+
|	INDOBIT-TECHNOLOGIES
|	based 		: 02-04-2005
|	continue 	: December 2011
|
|	Released under the terms and conditions of the
|	GNU General Public License (http://gnu.org).
|
|	Rosi Abimanyu Yusuf	(bima@abimanyu.net) | Pontianak, INDONESIA
|	(c)2005 INDOBIT.COM | http://www.indobit.com
+-------------------------------------------------------------------+
*/

$module_conf['name'] = "D O T";
$module_conf['path'] = "dot/";
$module_conf['level'] = "dot";

$MENU_ATAS = "<div class=\"other ui-corner-all bg-hijau-1 bor-hijau-1\">
	<ul id=\"dashboard-buttons\">
		<li><a href=\"search.php\" class=\"Glass tooltip\" title=\"Pencarian Pasien\">Cari</a></li>
		<!--<li><a href=\"#\" class=\"Box_recycle tooltip\" title=\"Checkin Pasien Lama\">Checkin</a></li>
		<li><a href=\"#\" class=\"Chart_5 tooltip\" title=\"Statistik\">Statistik</a></li>
		<li><a href=\"#\" class=\"Book_phones tooltip\" title=\"Daftar Antrian Seluruh Unit\">Antrian</a></li>//-->
	</ul>
	<div class=\"clear\"></div>
</div>";

if($kanan == TRUE) {
	$width['white'] = "maxw990";
}else{
	$width['white'] = "maxw747";
}
$width['section'] = "w720";
$width['kanan'] = "w223";
?>