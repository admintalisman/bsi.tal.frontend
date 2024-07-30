<?php
$topshasil_proses_api = array();
			$topshasil_proses_api["selectList"] = array(
		"subtype" => "rest",
		"method" => "GET",
		"request" => "table=v_bsmcilem&action=list",
		"payload" => "[]"
	);
	$tables_data["hasil_proses_api"][".operations"] = &$topshasil_proses_api;
?>