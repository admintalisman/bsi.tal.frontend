<?php
require_once(getabspath("classes/cipherer.php"));



$tdatav3 = array();
$tdatav3[".ShortName"] = "v3";

$tdatav3[".pagesByType"] = my_json_decode( "{\"dashboard\":[\"dashboard\"]}" );
$tdatav3[".originalPagesByType"] = $tdatav3[".pagesByType"];
$tdatav3[".pages"] = types2pages( my_json_decode( "{\"dashboard\":[\"dashboard\"]}" ) );
$tdatav3[".originalPages"] = $tdatav3[".pages"];
$tdatav3[".defaultPages"] = my_json_decode( "{\"dashboard\":\"dashboard\"}" );
$tdatav3[".originalDefaultPages"] = $tdatav3[".defaultPages"];


//	field labels
$fieldLabelsv3 = array();
$pageTitlesv3 = array();

if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelsv3["Indonesian"] = array();
	$fieldLabelsv3["Indonesian"]["LOGIN_id_m_login"] = "Id M Login";
	$fieldLabelsv3["Indonesian"]["LOGIN_username"] = "Username";
	$fieldLabelsv3["Indonesian"]["LOGIN_password"] = "Password";
	$fieldLabelsv3["Indonesian"]["LOGIN_fullname"] = "Fullname";
	$fieldLabelsv3["Indonesian"]["LOGIN_email"] = "Email";
	$fieldLabelsv3["Indonesian"]["LOGIN_api_keys"] = "Api Keys";
	$fieldLabelsv3["Indonesian"]["LOGIN_id_ext"] = "Id Ext";
	$fieldLabelsv3["Indonesian"]["LOGIN_two_factor"] = "Two Factor";
	$fieldLabelsv3["Indonesian"]["LOGIN_totp"] = "Totp";
	$fieldLabelsv3["Indonesian"]["LOGIN_reset_token"] = "Reset Token";
	$fieldLabelsv3["Indonesian"]["LOGIN_reset_date"] = "Reset Date";
	$fieldLabelsv3["Indonesian"]["TEMPBSICIT_view_Periode"] = "Periode";
	$fieldLabelsv3["Indonesian"]["TEMPBSICIT_view_CIT_IDCBG"] = "Cabang";
	$fieldLabelsv3["Indonesian"]["TEMPBSICIT_view_CIT_TSI"] = "Uang Pertanggungan";
	$fieldLabelsv3["Indonesian"]["TEMPBSICIT_view1_CIT_IDCBG"] = "CIT IDCBG";
	$fieldLabelsv3["Indonesian"]["TEMPBSICIT_view1_CIT_TTG"] = "CIT TTG";
	$fieldLabelsv3["Indonesian"]["TEMPBSICIT_view1_CIT_PROPOSAL"] = "CIT PROPOSAL";
	$fieldLabelsv3["Indonesian"]["TEMPBSICIT_view1_CIT_PREMI"] = "CIT PREMI";
	$fieldLabelsv3["Indonesian"]["TEMPBSICIT_view1_CIT_TSI"] = "CIT TSI";
	$fieldLabelsv3["Indonesian"]["TEMPBSICIT_view2_SUMINSURED"] = "Nilai Pertanggungan";
	$fieldLabelsv3["Indonesian"]["TEMPBSICIT_view2_PREMI"] = "Nilai Premi";
}

/*
//	search fields
$tdatav3[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"LOGIN", "field"=>"id_m_login" );
$tdatav3[".searchFields"]["LOGIN_id_m_login"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"LOGIN", "field"=>"username" );
$tdatav3[".searchFields"]["LOGIN_username"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"LOGIN", "field"=>"password" );
$tdatav3[".searchFields"]["LOGIN_password"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"LOGIN", "field"=>"fullname" );
$tdatav3[".searchFields"]["LOGIN_fullname"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"LOGIN", "field"=>"email" );
$tdatav3[".searchFields"]["LOGIN_email"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"LOGIN", "field"=>"api_keys" );
$tdatav3[".searchFields"]["LOGIN_api_keys"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"LOGIN", "field"=>"id_ext" );
$tdatav3[".searchFields"]["LOGIN_id_ext"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"LOGIN", "field"=>"two_factor" );
$tdatav3[".searchFields"]["LOGIN_two_factor"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"LOGIN", "field"=>"totp" );
$tdatav3[".searchFields"]["LOGIN_totp"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"LOGIN", "field"=>"reset_token" );
$tdatav3[".searchFields"]["LOGIN_reset_token"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"LOGIN", "field"=>"reset_date" );
$tdatav3[".searchFields"]["LOGIN_reset_date"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"TEMPBSICIT_view", "field"=>"Periode" );
$tdatav3[".searchFields"]["TEMPBSICIT_view_Periode"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"TEMPBSICIT_view", "field"=>"CIT_IDCBG" );
$tdatav3[".searchFields"]["TEMPBSICIT_view_CIT_IDCBG"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"TEMPBSICIT_view", "field"=>"CIT_TSI" );
$tdatav3[".searchFields"]["TEMPBSICIT_view_CIT_TSI"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"TEMPBSICIT_view1", "field"=>"CIT_IDCBG" );
$tdatav3[".searchFields"]["TEMPBSICIT_view1_CIT_IDCBG"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"TEMPBSICIT_view1", "field"=>"CIT_TTG" );
$tdatav3[".searchFields"]["TEMPBSICIT_view1_CIT_TTG"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"TEMPBSICIT_view1", "field"=>"CIT_PROPOSAL" );
$tdatav3[".searchFields"]["TEMPBSICIT_view1_CIT_PROPOSAL"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"TEMPBSICIT_view1", "field"=>"CIT_PREMI" );
$tdatav3[".searchFields"]["TEMPBSICIT_view1_CIT_PREMI"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"TEMPBSICIT_view1", "field"=>"CIT_TSI" );
$tdatav3[".searchFields"]["TEMPBSICIT_view1_CIT_TSI"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"TEMPBSICIT_view2", "field"=>"SUMINSURED" );
$tdatav3[".searchFields"]["TEMPBSICIT_view2_SUMINSURED"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"TEMPBSICIT_view2", "field"=>"PREMI" );
$tdatav3[".searchFields"]["TEMPBSICIT_view2_PREMI"] = $dashField;

// all search fields
$tdatav3[".allSearchFields"] = array();
$tdatav3[".allSearchFields"][] = "LOGIN_id_m_login";
$tdatav3[".allSearchFields"][] = "LOGIN_username";
$tdatav3[".allSearchFields"][] = "LOGIN_password";
$tdatav3[".allSearchFields"][] = "LOGIN_fullname";
$tdatav3[".allSearchFields"][] = "LOGIN_email";
$tdatav3[".allSearchFields"][] = "LOGIN_api_keys";
$tdatav3[".allSearchFields"][] = "LOGIN_id_ext";
$tdatav3[".allSearchFields"][] = "LOGIN_two_factor";
$tdatav3[".allSearchFields"][] = "LOGIN_totp";
$tdatav3[".allSearchFields"][] = "LOGIN_reset_token";
$tdatav3[".allSearchFields"][] = "LOGIN_reset_date";
$tdatav3[".allSearchFields"][] = "TEMPBSICIT_view_Periode";
$tdatav3[".allSearchFields"][] = "TEMPBSICIT_view_CIT_IDCBG";
$tdatav3[".allSearchFields"][] = "TEMPBSICIT_view_CIT_TSI";
$tdatav3[".allSearchFields"][] = "TEMPBSICIT_view1_CIT_IDCBG";
$tdatav3[".allSearchFields"][] = "TEMPBSICIT_view1_CIT_TTG";
$tdatav3[".allSearchFields"][] = "TEMPBSICIT_view1_CIT_PROPOSAL";
$tdatav3[".allSearchFields"][] = "TEMPBSICIT_view1_CIT_PREMI";
$tdatav3[".allSearchFields"][] = "TEMPBSICIT_view1_CIT_TSI";
$tdatav3[".allSearchFields"][] = "TEMPBSICIT_view2_SUMINSURED";
$tdatav3[".allSearchFields"][] = "TEMPBSICIT_view2_PREMI";

// good like search fields
$tdatav3[".googleLikeFields"] = array();
$tdatav3[".googleLikeFields"][] = "LOGIN_id_m_login";
$tdatav3[".googleLikeFields"][] = "LOGIN_username";
$tdatav3[".googleLikeFields"][] = "LOGIN_password";
$tdatav3[".googleLikeFields"][] = "LOGIN_fullname";
$tdatav3[".googleLikeFields"][] = "LOGIN_email";
$tdatav3[".googleLikeFields"][] = "LOGIN_api_keys";
$tdatav3[".googleLikeFields"][] = "LOGIN_id_ext";
$tdatav3[".googleLikeFields"][] = "LOGIN_two_factor";
$tdatav3[".googleLikeFields"][] = "LOGIN_totp";
$tdatav3[".googleLikeFields"][] = "LOGIN_reset_token";
$tdatav3[".googleLikeFields"][] = "LOGIN_reset_date";
*/

/*
$tdatav3[".dashElements"] = array();

	$dbelement = array( "elementName" => "LOGIN_snippet", "table" => "LOGIN",
		 "pageName" => "","type" => 7);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	$dbelement["snippetId"] = "v3_snippet1";


	$tdatav3[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "LOGIN_snippet1", "table" => "LOGIN",
		 "pageName" => "","type" => 7);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	$dbelement["snippetId"] = "v3_snippet2";


	$tdatav3[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "LOGIN_snippet2", "table" => "LOGIN",
		 "pageName" => "","type" => 7);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	$dbelement["snippetId"] = "v3_snippet3";


	$tdatav3[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "LOGIN_snippet3", "table" => "LOGIN",
		 "pageName" => "","type" => 7);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	$dbelement["snippetId"] = "v3_snippet4";


	$tdatav3[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "TEMPBSICIT_view_grid", "table" => "TEMPBSICIT_view",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	

	$tdatav3[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "TEMPBSICIT_view1_grid", "table" => "TEMPBSICIT_view1",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	

	$tdatav3[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "TEMPBSICIT_view2_chart", "table" => "TEMPBSICIT_view2",
		 "pageName" => "","type" => 1);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;


	$tdatav3[".dashElements"][] = $dbelement;
*/
$tdatav3[".shortTableName"] = "v3";
$tdatav3[".entityType"] = 4;









include_once(getabspath("include/v3_events.php"));
$tdatav3[".hasEvents"] = true;


$tdatav3[".tableType"] = "dashboard";


									
$tdatav3[".addPageEvents"] = false;

$tdatav3[".isUseAjaxSuggest"] = true;

$tables_data["v3"]=&$tdatav3;
$field_labels["v3"] = &$fieldLabelsv3;
$page_titles["v3"] = &$pageTitlesv3;

?>