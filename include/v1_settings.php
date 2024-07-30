<?php
require_once(getabspath("classes/cipherer.php"));



$tdatav1 = array();
$tdatav1[".ShortName"] = "v1";

$tdatav1[".pagesByType"] = my_json_decode( "{\"dashboard\":[\"dashboard\"]}" );
$tdatav1[".originalPagesByType"] = $tdatav1[".pagesByType"];
$tdatav1[".pages"] = types2pages( my_json_decode( "{\"dashboard\":[\"dashboard\"]}" ) );
$tdatav1[".originalPages"] = $tdatav1[".pages"];
$tdatav1[".defaultPages"] = my_json_decode( "{\"dashboard\":\"dashboard\"}" );
$tdatav1[".originalDefaultPages"] = $tdatav1[".defaultPages"];


//	field labels
$fieldLabelsv1 = array();
$pageTitlesv1 = array();

if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelsv1["Indonesian"] = array();
	$fieldLabelsv1["Indonesian"]["LOGIN_id_m_login"] = "Id M Login";
	$fieldLabelsv1["Indonesian"]["LOGIN_username"] = "Username";
	$fieldLabelsv1["Indonesian"]["LOGIN_password"] = "Password";
	$fieldLabelsv1["Indonesian"]["LOGIN_fullname"] = "Fullname";
	$fieldLabelsv1["Indonesian"]["LOGIN_email"] = "Email";
	$fieldLabelsv1["Indonesian"]["LOGIN_api_keys"] = "Api Keys";
	$fieldLabelsv1["Indonesian"]["TEMPBSICILE_view_Total"] = "Total";
	$fieldLabelsv1["Indonesian"]["TEMPBSICILE_view_NMCBGBANK"] = "NMCBGBANK";
	$fieldLabelsv1["Indonesian"]["TOTAL_PREMI_SI_ID"] = "ID";
	$fieldLabelsv1["Indonesian"]["TOTAL_PREMI_SI_TAHUN"] = "TAHUN";
	$fieldLabelsv1["Indonesian"]["TOTAL_PREMI_SI_BULAN"] = "BULAN";
	$fieldLabelsv1["Indonesian"]["TOTAL_PREMI_SI_PERTANGGUNGAN"] = "NILAI PERTANGGUNGAN";
	$fieldLabelsv1["Indonesian"]["TOTAL_PREMI_SI_PREMI"] = "NILAI PREMI";
	$fieldLabelsv1["Indonesian"]["TEMPBSICILE_view1_Kode_Cabang"] = "Kode Cabang";
	$fieldLabelsv1["Indonesian"]["TEMPBSICILE_view1_Kantor_Cabang"] = "Kantor Cabang";
	$fieldLabelsv1["Indonesian"]["TEMPBSICILE_view1_Total_pertanggungan"] = "Total Pertanggungan";
	$fieldLabelsv1["Indonesian"]["TEMPBSICILE_view1_TAHUN_PERIODE"] = "Periode Akad";
}

/*
//	search fields
$tdatav1[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"LOGIN", "field"=>"id_m_login" );
$tdatav1[".searchFields"]["LOGIN_id_m_login"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"LOGIN", "field"=>"username" );
$tdatav1[".searchFields"]["LOGIN_username"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"LOGIN", "field"=>"password" );
$tdatav1[".searchFields"]["LOGIN_password"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"LOGIN", "field"=>"fullname" );
$tdatav1[".searchFields"]["LOGIN_fullname"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"LOGIN", "field"=>"email" );
$tdatav1[".searchFields"]["LOGIN_email"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"LOGIN", "field"=>"api_keys" );
$tdatav1[".searchFields"]["LOGIN_api_keys"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"TEMPBSICILE_view", "field"=>"Total" );
$tdatav1[".searchFields"]["TEMPBSICILE_view_Total"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"TEMPBSICILE_view", "field"=>"NMCBGBANK" );
$tdatav1[".searchFields"]["TEMPBSICILE_view_NMCBGBANK"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"TOTAL_PREMI_SI", "field"=>"ID" );
$tdatav1[".searchFields"]["TOTAL_PREMI_SI_ID"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"TOTAL_PREMI_SI", "field"=>"TAHUN" );
$tdatav1[".searchFields"]["TOTAL_PREMI_SI_TAHUN"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"TOTAL_PREMI_SI", "field"=>"BULAN" );
$tdatav1[".searchFields"]["TOTAL_PREMI_SI_BULAN"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"TOTAL_PREMI_SI", "field"=>"PERTANGGUNGAN" );
$tdatav1[".searchFields"]["TOTAL_PREMI_SI_PERTANGGUNGAN"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"TOTAL_PREMI_SI", "field"=>"PREMI" );
$tdatav1[".searchFields"]["TOTAL_PREMI_SI_PREMI"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"TEMPBSICILE_view1", "field"=>"Kode_Cabang" );
$tdatav1[".searchFields"]["TEMPBSICILE_view1_Kode_Cabang"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"TEMPBSICILE_view1", "field"=>"Kantor_Cabang" );
$tdatav1[".searchFields"]["TEMPBSICILE_view1_Kantor_Cabang"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"TEMPBSICILE_view1", "field"=>"Total_pertanggungan" );
$tdatav1[".searchFields"]["TEMPBSICILE_view1_Total_pertanggungan"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"TEMPBSICILE_view1", "field"=>"TAHUN_PERIODE" );
$tdatav1[".searchFields"]["TEMPBSICILE_view1_TAHUN_PERIODE"] = $dashField;

// all search fields
$tdatav1[".allSearchFields"] = array();
$tdatav1[".allSearchFields"][] = "LOGIN_id_m_login";
$tdatav1[".allSearchFields"][] = "LOGIN_username";
$tdatav1[".allSearchFields"][] = "LOGIN_password";
$tdatav1[".allSearchFields"][] = "LOGIN_fullname";
$tdatav1[".allSearchFields"][] = "LOGIN_email";
$tdatav1[".allSearchFields"][] = "LOGIN_api_keys";
$tdatav1[".allSearchFields"][] = "TEMPBSICILE_view_Total";
$tdatav1[".allSearchFields"][] = "TEMPBSICILE_view_NMCBGBANK";
$tdatav1[".allSearchFields"][] = "TOTAL_PREMI_SI_ID";
$tdatav1[".allSearchFields"][] = "TOTAL_PREMI_SI_TAHUN";
$tdatav1[".allSearchFields"][] = "TOTAL_PREMI_SI_BULAN";
$tdatav1[".allSearchFields"][] = "TOTAL_PREMI_SI_PERTANGGUNGAN";
$tdatav1[".allSearchFields"][] = "TOTAL_PREMI_SI_PREMI";
$tdatav1[".allSearchFields"][] = "TEMPBSICILE_view1_Kode_Cabang";
$tdatav1[".allSearchFields"][] = "TEMPBSICILE_view1_Kantor_Cabang";
$tdatav1[".allSearchFields"][] = "TEMPBSICILE_view1_Total_pertanggungan";
$tdatav1[".allSearchFields"][] = "TEMPBSICILE_view1_TAHUN_PERIODE";

// good like search fields
$tdatav1[".googleLikeFields"] = array();
$tdatav1[".googleLikeFields"][] = "LOGIN_id_m_login";
$tdatav1[".googleLikeFields"][] = "LOGIN_username";
$tdatav1[".googleLikeFields"][] = "LOGIN_password";
$tdatav1[".googleLikeFields"][] = "LOGIN_fullname";
$tdatav1[".googleLikeFields"][] = "LOGIN_email";
$tdatav1[".googleLikeFields"][] = "LOGIN_api_keys";
*/

/*
$tdatav1[".dashElements"] = array();

	$dbelement = array( "elementName" => "LOGIN_snippet", "table" => "LOGIN",
		 "pageName" => "","type" => 7);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	$dbelement["snippetId"] = "v1_snippet3";


	$tdatav1[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "LOGIN_snippet1", "table" => "LOGIN",
		 "pageName" => "","type" => 7);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	$dbelement["snippetId"] = "v1_snippet4";


	$tdatav1[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "LOGIN_snippet2", "table" => "LOGIN",
		 "pageName" => "","type" => 7);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	$dbelement["snippetId"] = "v1_snippet5";


	$tdatav1[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "TEMPBSICILE_view1_grid", "table" => "TEMPBSICILE_view1",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	

	$tdatav1[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "TEMPBSICILE_view_chart", "table" => "TEMPBSICILE_view",
		 "pageName" => "","type" => 1);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;


	$tdatav1[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "TOTAL_PREMI_SI_grid", "table" => "TOTAL_PREMI_SI",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	

	$tdatav1[".dashElements"][] = $dbelement;
*/
$tdatav1[".shortTableName"] = "v1";
$tdatav1[".entityType"] = 4;









include_once(getabspath("include/v1_events.php"));
$tdatav1[".hasEvents"] = true;


$tdatav1[".tableType"] = "dashboard";


									
$tdatav1[".addPageEvents"] = false;

$tdatav1[".isUseAjaxSuggest"] = true;

$tables_data["v1"]=&$tdatav1;
$field_labels["v1"] = &$fieldLabelsv1;
$page_titles["v1"] = &$pageTitlesv1;

?>