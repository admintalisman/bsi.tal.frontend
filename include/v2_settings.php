<?php
require_once(getabspath("classes/cipherer.php"));



$tdatav2 = array();
$tdatav2[".ShortName"] = "v2";

$tdatav2[".pagesByType"] = my_json_decode( "{\"dashboard\":[\"dashboard\"]}" );
$tdatav2[".originalPagesByType"] = $tdatav2[".pagesByType"];
$tdatav2[".pages"] = types2pages( my_json_decode( "{\"dashboard\":[\"dashboard\"]}" ) );
$tdatav2[".originalPages"] = $tdatav2[".pages"];
$tdatav2[".defaultPages"] = my_json_decode( "{\"dashboard\":\"dashboard\"}" );
$tdatav2[".originalDefaultPages"] = $tdatav2[".defaultPages"];


//	field labels
$fieldLabelsv2 = array();
$pageTitlesv2 = array();

if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelsv2["Indonesian"] = array();
	$fieldLabelsv2["Indonesian"]["LOGIN_id_m_login"] = "Id M Login";
	$fieldLabelsv2["Indonesian"]["LOGIN_username"] = "Username";
	$fieldLabelsv2["Indonesian"]["LOGIN_password"] = "Password";
	$fieldLabelsv2["Indonesian"]["LOGIN_fullname"] = "Fullname";
	$fieldLabelsv2["Indonesian"]["LOGIN_email"] = "Email";
	$fieldLabelsv2["Indonesian"]["LOGIN_api_keys"] = "Api Keys";
	$fieldLabelsv2["Indonesian"]["LOGIN_id_ext"] = "Id Ext";
	$fieldLabelsv2["Indonesian"]["LOGIN_two_factor"] = "Two Factor";
	$fieldLabelsv2["Indonesian"]["LOGIN_totp"] = "Totp";
	$fieldLabelsv2["Indonesian"]["TEMPBSICIS_view1_CIS_AREA"] = "CIS AREA";
	$fieldLabelsv2["Indonesian"]["TEMPBSICIS_view1_Cabang"] = "Cabang";
	$fieldLabelsv2["Indonesian"]["TEMPBSICIS_view1_Periode"] = "Periode";
	$fieldLabelsv2["Indonesian"]["TEMPBSICIS_view1_SUMINSURED"] = "SUMINSURED";
	$fieldLabelsv2["Indonesian"]["TEMPBSICIS_view1_CIS_UPL_USER"] = "CIS UPL USER";
	$fieldLabelsv2["Indonesian"]["TEMPBSICIS_view1_CIS_UPL_DATE"] = "CIS UPL DATE";
	$fieldLabelsv2["Indonesian"]["TEMPBSICIS_view1_CIS_FL"] = "CIS FL";
	$fieldLabelsv2["Indonesian"]["TEMPBSICIS_view1_IDCIS"] = "IDCIS";
	$fieldLabelsv2["Indonesian"]["TEMPBSICIS_view1_CIS_TOKEN"] = "CIS TOKEN";
	$fieldLabelsv2["Indonesian"]["TEMPBSICIS_view1_CIS_REGION"] = "CIS REGION";
	$fieldLabelsv2["Indonesian"]["TEMPBSICIS_view2_KODECABANG"] = "KODECABANG";
	$fieldLabelsv2["Indonesian"]["TEMPBSICIS_view2_SUMINSURED"] = "SUMINSURED";
	$fieldLabelsv2["Indonesian"]["TEMPBSICIS_view3_CIS_PROPOSAL"] = "No Proposal";
	$fieldLabelsv2["Indonesian"]["TEMPBSICIS_view3_CIS_PREMI"] = "Nilai Premi";
	$fieldLabelsv2["Indonesian"]["TEMPBSICIS_view3_CIS_PERIODE_END"] = "CIS PERIODE END";
	$fieldLabelsv2["Indonesian"]["TEMPBSICIS_view3_KODECABANG"] = "Cabang";
}

/*
//	search fields
$tdatav2[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"LOGIN", "field"=>"id_m_login" );
$tdatav2[".searchFields"]["LOGIN_id_m_login"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"LOGIN", "field"=>"username" );
$tdatav2[".searchFields"]["LOGIN_username"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"LOGIN", "field"=>"password" );
$tdatav2[".searchFields"]["LOGIN_password"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"LOGIN", "field"=>"fullname" );
$tdatav2[".searchFields"]["LOGIN_fullname"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"LOGIN", "field"=>"email" );
$tdatav2[".searchFields"]["LOGIN_email"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"LOGIN", "field"=>"api_keys" );
$tdatav2[".searchFields"]["LOGIN_api_keys"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"LOGIN", "field"=>"id_ext" );
$tdatav2[".searchFields"]["LOGIN_id_ext"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"LOGIN", "field"=>"two_factor" );
$tdatav2[".searchFields"]["LOGIN_two_factor"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"LOGIN", "field"=>"totp" );
$tdatav2[".searchFields"]["LOGIN_totp"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"TEMPBSICIS_view1", "field"=>"CIS_AREA" );
$tdatav2[".searchFields"]["TEMPBSICIS_view1_CIS_AREA"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"TEMPBSICIS_view1", "field"=>"Cabang" );
$tdatav2[".searchFields"]["TEMPBSICIS_view1_Cabang"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"TEMPBSICIS_view1", "field"=>"Periode" );
$tdatav2[".searchFields"]["TEMPBSICIS_view1_Periode"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"TEMPBSICIS_view1", "field"=>"SUMINSURED" );
$tdatav2[".searchFields"]["TEMPBSICIS_view1_SUMINSURED"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"TEMPBSICIS_view1", "field"=>"CIS_UPL_USER" );
$tdatav2[".searchFields"]["TEMPBSICIS_view1_CIS_UPL_USER"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"TEMPBSICIS_view1", "field"=>"CIS_UPL_DATE" );
$tdatav2[".searchFields"]["TEMPBSICIS_view1_CIS_UPL_DATE"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"TEMPBSICIS_view1", "field"=>"CIS_FL" );
$tdatav2[".searchFields"]["TEMPBSICIS_view1_CIS_FL"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"TEMPBSICIS_view1", "field"=>"IDCIS" );
$tdatav2[".searchFields"]["TEMPBSICIS_view1_IDCIS"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"TEMPBSICIS_view1", "field"=>"CIS_TOKEN" );
$tdatav2[".searchFields"]["TEMPBSICIS_view1_CIS_TOKEN"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"TEMPBSICIS_view1", "field"=>"CIS_REGION" );
$tdatav2[".searchFields"]["TEMPBSICIS_view1_CIS_REGION"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"TEMPBSICIS_view2", "field"=>"KODECABANG" );
$tdatav2[".searchFields"]["TEMPBSICIS_view2_KODECABANG"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"TEMPBSICIS_view2", "field"=>"SUMINSURED" );
$tdatav2[".searchFields"]["TEMPBSICIS_view2_SUMINSURED"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"TEMPBSICIS_view3", "field"=>"CIS_PROPOSAL" );
$tdatav2[".searchFields"]["TEMPBSICIS_view3_CIS_PROPOSAL"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"TEMPBSICIS_view3", "field"=>"CIS_PREMI" );
$tdatav2[".searchFields"]["TEMPBSICIS_view3_CIS_PREMI"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"TEMPBSICIS_view3", "field"=>"CIS_PERIODE_END" );
$tdatav2[".searchFields"]["TEMPBSICIS_view3_CIS_PERIODE_END"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"TEMPBSICIS_view3", "field"=>"KODECABANG" );
$tdatav2[".searchFields"]["TEMPBSICIS_view3_KODECABANG"] = $dashField;

// all search fields
$tdatav2[".allSearchFields"] = array();
$tdatav2[".allSearchFields"][] = "LOGIN_id_m_login";
$tdatav2[".allSearchFields"][] = "LOGIN_username";
$tdatav2[".allSearchFields"][] = "LOGIN_password";
$tdatav2[".allSearchFields"][] = "LOGIN_fullname";
$tdatav2[".allSearchFields"][] = "LOGIN_email";
$tdatav2[".allSearchFields"][] = "LOGIN_api_keys";
$tdatav2[".allSearchFields"][] = "LOGIN_id_ext";
$tdatav2[".allSearchFields"][] = "LOGIN_two_factor";
$tdatav2[".allSearchFields"][] = "LOGIN_totp";
$tdatav2[".allSearchFields"][] = "TEMPBSICIS_view1_CIS_AREA";
$tdatav2[".allSearchFields"][] = "TEMPBSICIS_view1_Cabang";
$tdatav2[".allSearchFields"][] = "TEMPBSICIS_view1_Periode";
$tdatav2[".allSearchFields"][] = "TEMPBSICIS_view1_SUMINSURED";
$tdatav2[".allSearchFields"][] = "TEMPBSICIS_view1_CIS_UPL_USER";
$tdatav2[".allSearchFields"][] = "TEMPBSICIS_view1_CIS_UPL_DATE";
$tdatav2[".allSearchFields"][] = "TEMPBSICIS_view1_CIS_FL";
$tdatav2[".allSearchFields"][] = "TEMPBSICIS_view1_IDCIS";
$tdatav2[".allSearchFields"][] = "TEMPBSICIS_view1_CIS_TOKEN";
$tdatav2[".allSearchFields"][] = "TEMPBSICIS_view1_CIS_REGION";
$tdatav2[".allSearchFields"][] = "TEMPBSICIS_view2_KODECABANG";
$tdatav2[".allSearchFields"][] = "TEMPBSICIS_view2_SUMINSURED";
$tdatav2[".allSearchFields"][] = "TEMPBSICIS_view3_CIS_PROPOSAL";
$tdatav2[".allSearchFields"][] = "TEMPBSICIS_view3_CIS_PREMI";
$tdatav2[".allSearchFields"][] = "TEMPBSICIS_view3_CIS_PERIODE_END";
$tdatav2[".allSearchFields"][] = "TEMPBSICIS_view3_KODECABANG";

// good like search fields
$tdatav2[".googleLikeFields"] = array();
$tdatav2[".googleLikeFields"][] = "LOGIN_id_m_login";
$tdatav2[".googleLikeFields"][] = "LOGIN_username";
$tdatav2[".googleLikeFields"][] = "LOGIN_password";
$tdatav2[".googleLikeFields"][] = "LOGIN_fullname";
$tdatav2[".googleLikeFields"][] = "LOGIN_email";
$tdatav2[".googleLikeFields"][] = "LOGIN_api_keys";
$tdatav2[".googleLikeFields"][] = "LOGIN_id_ext";
$tdatav2[".googleLikeFields"][] = "LOGIN_two_factor";
$tdatav2[".googleLikeFields"][] = "LOGIN_totp";
*/

/*
$tdatav2[".dashElements"] = array();

	$dbelement = array( "elementName" => "LOGIN_snippet", "table" => "LOGIN",
		 "pageName" => "","type" => 7);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	$dbelement["snippetId"] = "v2_snippet1";


	$tdatav2[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "LOGIN_snippet1", "table" => "LOGIN",
		 "pageName" => "","type" => 7);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	$dbelement["snippetId"] = "v2_snippet2";


	$tdatav2[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "LOGIN_snippet2", "table" => "LOGIN",
		 "pageName" => "","type" => 7);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	$dbelement["snippetId"] = "v2_snippet3";


	$tdatav2[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "LOGIN_snippet3", "table" => "LOGIN",
		 "pageName" => "","type" => 7);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	$dbelement["snippetId"] = "v2_snippet4";


	$tdatav2[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "TEMPBSICIS_view1_grid", "table" => "TEMPBSICIS_view1",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	

	$tdatav2[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "TEMPBSICIS_view2_chart", "table" => "TEMPBSICIS_view2",
		 "pageName" => "","type" => 1);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;


	$tdatav2[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "TEMPBSICIS_view3_grid", "table" => "TEMPBSICIS_view3",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	

	$tdatav2[".dashElements"][] = $dbelement;
*/
$tdatav2[".shortTableName"] = "v2";
$tdatav2[".entityType"] = 4;








include_once(getabspath("include/v2_events.php"));
$tdatav2[".hasEvents"] = true;


$tdatav2[".tableType"] = "dashboard";


									
$tdatav2[".addPageEvents"] = false;

$tdatav2[".isUseAjaxSuggest"] = true;

$tables_data["v2"]=&$tdatav2;
$field_labels["v2"] = &$fieldLabelsv2;
$page_titles["v2"] = &$pageTitlesv2;

?>