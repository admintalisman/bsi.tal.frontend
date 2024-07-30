<?php
require_once(getabspath("classes/cipherer.php"));



$tdatav4 = array();
$tdatav4[".ShortName"] = "v4";

$tdatav4[".pagesByType"] = my_json_decode( "{\"dashboard\":[\"dashboard\"]}" );
$tdatav4[".originalPagesByType"] = $tdatav4[".pagesByType"];
$tdatav4[".pages"] = types2pages( my_json_decode( "{\"dashboard\":[\"dashboard\"]}" ) );
$tdatav4[".originalPages"] = $tdatav4[".pages"];
$tdatav4[".defaultPages"] = my_json_decode( "{\"dashboard\":\"dashboard\"}" );
$tdatav4[".originalDefaultPages"] = $tdatav4[".defaultPages"];


//	field labels
$fieldLabelsv4 = array();
$pageTitlesv4 = array();

if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelsv4["Indonesian"] = array();
	$fieldLabelsv4["Indonesian"]["LOGIN_id_m_login"] = "Id M Login";
	$fieldLabelsv4["Indonesian"]["LOGIN_username"] = "Username";
	$fieldLabelsv4["Indonesian"]["LOGIN_password"] = "Password";
	$fieldLabelsv4["Indonesian"]["LOGIN_fullname"] = "Fullname";
	$fieldLabelsv4["Indonesian"]["LOGIN_email"] = "Email";
	$fieldLabelsv4["Indonesian"]["LOGIN_api_keys"] = "Api Keys";
	$fieldLabelsv4["Indonesian"]["LOGIN_id_ext"] = "Id Ext";
	$fieldLabelsv4["Indonesian"]["LOGIN_two_factor"] = "Two Factor";
	$fieldLabelsv4["Indonesian"]["LOGIN_totp"] = "Totp";
	$fieldLabelsv4["Indonesian"]["LOGIN_reset_token"] = "Reset Token";
	$fieldLabelsv4["Indonesian"]["LOGIN_reset_date"] = "Reset Date";
	$fieldLabelsv4["Indonesian"]["sp_summary_product_KETERANGAN"] = "KETERANGAN";
	$fieldLabelsv4["Indonesian"]["sp_summary_product_Suminsured"] = "Suminsured";
	$fieldLabelsv4["Indonesian"]["sp_summary_product_Premi"] = "Premi";
	$fieldLabelsv4["Indonesian"]["sp_summary_product_Komisi"] = "Komisi";
	$fieldLabelsv4["Indonesian"]["Chart_summary_report_view_KETERANGAN"] = "KETERANGAN";
	$fieldLabelsv4["Indonesian"]["Chart_summary_report_view_Suminsured"] = "Suminsured";
	$fieldLabelsv4["Indonesian"]["Chart_summary_report_view_Premi"] = "Premi";
	$fieldLabelsv4["Indonesian"]["Chart_summary_report_view_Komisi"] = "Komisi";
	$fieldLabelsv4["Indonesian"]["report_product_Month_YEARS"] = "YEARS";
	$fieldLabelsv4["Indonesian"]["report_product_Month_MONTHS"] = "MONTHS";
	$fieldLabelsv4["Indonesian"]["report_product_Month_SUM_B_SUMINSURED_"] = "SUM(B.SUMINSURED)";
	$fieldLabelsv4["Indonesian"]["report_product_Month_SUM_B_KOMISI_"] = "SUM(B.KOMISI)";
	$fieldLabelsv4["Indonesian"]["report_product_Month_KETERANGAN"] = "KETERANGAN";
}

/*
//	search fields
$tdatav4[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"LOGIN", "field"=>"id_m_login" );
$tdatav4[".searchFields"]["LOGIN_id_m_login"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"LOGIN", "field"=>"username" );
$tdatav4[".searchFields"]["LOGIN_username"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"LOGIN", "field"=>"password" );
$tdatav4[".searchFields"]["LOGIN_password"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"LOGIN", "field"=>"fullname" );
$tdatav4[".searchFields"]["LOGIN_fullname"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"LOGIN", "field"=>"email" );
$tdatav4[".searchFields"]["LOGIN_email"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"LOGIN", "field"=>"api_keys" );
$tdatav4[".searchFields"]["LOGIN_api_keys"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"LOGIN", "field"=>"id_ext" );
$tdatav4[".searchFields"]["LOGIN_id_ext"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"LOGIN", "field"=>"two_factor" );
$tdatav4[".searchFields"]["LOGIN_two_factor"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"LOGIN", "field"=>"totp" );
$tdatav4[".searchFields"]["LOGIN_totp"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"LOGIN", "field"=>"reset_token" );
$tdatav4[".searchFields"]["LOGIN_reset_token"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"LOGIN", "field"=>"reset_date" );
$tdatav4[".searchFields"]["LOGIN_reset_date"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"sp_summary_product", "field"=>"KETERANGAN" );
$tdatav4[".searchFields"]["sp_summary_product_KETERANGAN"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"sp_summary_product", "field"=>"Suminsured" );
$tdatav4[".searchFields"]["sp_summary_product_Suminsured"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"sp_summary_product", "field"=>"Premi" );
$tdatav4[".searchFields"]["sp_summary_product_Premi"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"sp_summary_product", "field"=>"Komisi" );
$tdatav4[".searchFields"]["sp_summary_product_Komisi"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Chart_summary_report_view", "field"=>"KETERANGAN" );
$tdatav4[".searchFields"]["Chart_summary_report_view_KETERANGAN"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Chart_summary_report_view", "field"=>"Suminsured" );
$tdatav4[".searchFields"]["Chart_summary_report_view_Suminsured"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Chart_summary_report_view", "field"=>"Premi" );
$tdatav4[".searchFields"]["Chart_summary_report_view_Premi"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"Chart_summary_report_view", "field"=>"Komisi" );
$tdatav4[".searchFields"]["Chart_summary_report_view_Komisi"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"report_product_Month", "field"=>"YEARS" );
$tdatav4[".searchFields"]["report_product_Month_YEARS"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"report_product_Month", "field"=>"MONTHS" );
$tdatav4[".searchFields"]["report_product_Month_MONTHS"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"report_product_Month", "field"=>"SUM(B.SUMINSURED)" );
$tdatav4[".searchFields"]["report_product_Month_SUM_B_SUMINSURED_"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"report_product_Month", "field"=>"SUM(B.KOMISI)" );
$tdatav4[".searchFields"]["report_product_Month_SUM_B_KOMISI_"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"report_product_Month", "field"=>"KETERANGAN" );
$tdatav4[".searchFields"]["report_product_Month_KETERANGAN"] = $dashField;

// all search fields
$tdatav4[".allSearchFields"] = array();
$tdatav4[".allSearchFields"][] = "LOGIN_id_m_login";
$tdatav4[".allSearchFields"][] = "LOGIN_username";
$tdatav4[".allSearchFields"][] = "LOGIN_password";
$tdatav4[".allSearchFields"][] = "LOGIN_fullname";
$tdatav4[".allSearchFields"][] = "LOGIN_email";
$tdatav4[".allSearchFields"][] = "LOGIN_api_keys";
$tdatav4[".allSearchFields"][] = "LOGIN_id_ext";
$tdatav4[".allSearchFields"][] = "LOGIN_two_factor";
$tdatav4[".allSearchFields"][] = "LOGIN_totp";
$tdatav4[".allSearchFields"][] = "LOGIN_reset_token";
$tdatav4[".allSearchFields"][] = "LOGIN_reset_date";
$tdatav4[".allSearchFields"][] = "sp_summary_product_KETERANGAN";
$tdatav4[".allSearchFields"][] = "sp_summary_product_Suminsured";
$tdatav4[".allSearchFields"][] = "sp_summary_product_Premi";
$tdatav4[".allSearchFields"][] = "sp_summary_product_Komisi";
$tdatav4[".allSearchFields"][] = "Chart_summary_report_view_KETERANGAN";
$tdatav4[".allSearchFields"][] = "Chart_summary_report_view_Suminsured";
$tdatav4[".allSearchFields"][] = "Chart_summary_report_view_Premi";
$tdatav4[".allSearchFields"][] = "Chart_summary_report_view_Komisi";
$tdatav4[".allSearchFields"][] = "report_product_Month_YEARS";
$tdatav4[".allSearchFields"][] = "report_product_Month_MONTHS";
$tdatav4[".allSearchFields"][] = "report_product_Month_SUM_B_SUMINSURED_";
$tdatav4[".allSearchFields"][] = "report_product_Month_SUM_B_KOMISI_";
$tdatav4[".allSearchFields"][] = "report_product_Month_KETERANGAN";

// good like search fields
$tdatav4[".googleLikeFields"] = array();
$tdatav4[".googleLikeFields"][] = "LOGIN_id_m_login";
$tdatav4[".googleLikeFields"][] = "LOGIN_username";
$tdatav4[".googleLikeFields"][] = "LOGIN_password";
$tdatav4[".googleLikeFields"][] = "LOGIN_fullname";
$tdatav4[".googleLikeFields"][] = "LOGIN_email";
$tdatav4[".googleLikeFields"][] = "LOGIN_api_keys";
$tdatav4[".googleLikeFields"][] = "LOGIN_id_ext";
$tdatav4[".googleLikeFields"][] = "LOGIN_two_factor";
$tdatav4[".googleLikeFields"][] = "LOGIN_totp";
$tdatav4[".googleLikeFields"][] = "LOGIN_reset_token";
$tdatav4[".googleLikeFields"][] = "LOGIN_reset_date";
*/

/*
$tdatav4[".dashElements"] = array();

	$dbelement = array( "elementName" => "LOGIN_snippet", "table" => "LOGIN",
		 "pageName" => "","type" => 7);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	$dbelement["snippetId"] = "v4_snippet";


	$tdatav4[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "LOGIN_snippet1", "table" => "LOGIN",
		 "pageName" => "","type" => 7);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	$dbelement["snippetId"] = "v4_snippet1";


	$tdatav4[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "LOGIN_snippet2", "table" => "LOGIN",
		 "pageName" => "","type" => 7);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	$dbelement["snippetId"] = "v4_snippet2";


	$tdatav4[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "LOGIN_snippet3", "table" => "LOGIN",
		 "pageName" => "","type" => 7);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	$dbelement["snippetId"] = "v4_snippet3";


	$tdatav4[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "sp_summary_product_grid", "table" => "sp_summary_product",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	

	$tdatav4[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "Chart_summary_report_view_chart", "table" => "Chart_summary_report_view",
		 "pageName" => "","type" => 1);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;


	$tdatav4[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "report_product_Month_grid", "table" => "report_product_Month",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	

	$tdatav4[".dashElements"][] = $dbelement;
*/
$tdatav4[".shortTableName"] = "v4";
$tdatav4[".entityType"] = 4;








include_once(getabspath("include/v4_events.php"));
$tdatav4[".hasEvents"] = true;


$tdatav4[".tableType"] = "dashboard";


									
$tdatav4[".addPageEvents"] = false;

$tdatav4[".isUseAjaxSuggest"] = true;

$tables_data["v4"]=&$tdatav4;
$field_labels["v4"] = &$fieldLabelsv4;
$page_titles["v4"] = &$pageTitlesv4;

?>