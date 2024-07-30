<?php
$topssp_summary_details_report = array();
		$topssp_summary_details_report["selectList"] = array(
		"subtype" => "sql",
		"sql" => "call sp_report_summary_details"
	);
		$tables_data["sp_summary_details_report"][".operations"] = &$topssp_summary_details_report;
?>