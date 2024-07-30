<?php
$tdatatempbsicit = array();
$tdatatempbsicit[".searchableFields"] = array();
$tdatatempbsicit[".ShortName"] = "tempbsicit";
$tdatatempbsicit[".OwnerID"] = "";
$tdatatempbsicit[".OriginalTable"] = "TEMPBSICIT";


$tdatatempbsicit[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatempbsicit[".originalPagesByType"] = $tdatatempbsicit[".pagesByType"];
$tdatatempbsicit[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatempbsicit[".originalPages"] = $tdatatempbsicit[".pages"];
$tdatatempbsicit[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatempbsicit[".originalDefaultPages"] = $tdatatempbsicit[".defaultPages"];

//	field labels
$fieldLabelstempbsicit = array();
$fieldToolTipstempbsicit = array();
$pageTitlestempbsicit = array();
$placeHolderstempbsicit = array();

if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelstempbsicit["Indonesian"] = array();
	$fieldToolTipstempbsicit["Indonesian"] = array();
	$placeHolderstempbsicit["Indonesian"] = array();
	$pageTitlestempbsicit["Indonesian"] = array();
	$fieldLabelstempbsicit["Indonesian"]["IDCIT"] = "IDCIT";
	$fieldToolTipstempbsicit["Indonesian"]["IDCIT"] = "";
	$placeHolderstempbsicit["Indonesian"]["IDCIT"] = "";
	$fieldLabelstempbsicit["Indonesian"]["CIT_REGDATE"] = "Tanggal Registrasi";
	$fieldToolTipstempbsicit["Indonesian"]["CIT_REGDATE"] = "";
	$placeHolderstempbsicit["Indonesian"]["CIT_REGDATE"] = "";
	$fieldLabelstempbsicit["Indonesian"]["CIT_IDCBG"] = "Kantor Cabang";
	$fieldToolTipstempbsicit["Indonesian"]["CIT_IDCBG"] = "";
	$placeHolderstempbsicit["Indonesian"]["CIT_IDCBG"] = "";
	$fieldLabelstempbsicit["Indonesian"]["CIT_MTU"] = "MTU";
	$fieldToolTipstempbsicit["Indonesian"]["CIT_MTU"] = "";
	$placeHolderstempbsicit["Indonesian"]["CIT_MTU"] = "";
	$fieldLabelstempbsicit["Indonesian"]["CIT_TTG"] = "Tertanggung";
	$fieldToolTipstempbsicit["Indonesian"]["CIT_TTG"] = "";
	$placeHolderstempbsicit["Indonesian"]["CIT_TTG"] = "";
	$fieldLabelstempbsicit["Indonesian"]["CIT_DATE_DEPART"] = "Tanggal Keberangkatan";
	$fieldToolTipstempbsicit["Indonesian"]["CIT_DATE_DEPART"] = "";
	$placeHolderstempbsicit["Indonesian"]["CIT_DATE_DEPART"] = "";
	$fieldLabelstempbsicit["Indonesian"]["CIT_DATE_ARRIV"] = "Tanggal Kedatangan";
	$fieldToolTipstempbsicit["Indonesian"]["CIT_DATE_ARRIV"] = "";
	$placeHolderstempbsicit["Indonesian"]["CIT_DATE_ARRIV"] = "";
	$fieldLabelstempbsicit["Indonesian"]["CIT_EMP_NAMA"] = "Nama Karyawan";
	$fieldToolTipstempbsicit["Indonesian"]["CIT_EMP_NAMA"] = "";
	$placeHolderstempbsicit["Indonesian"]["CIT_EMP_NAMA"] = "";
	$fieldLabelstempbsicit["Indonesian"]["CIT_SEC_NAMA"] = "Nama Security";
	$fieldToolTipstempbsicit["Indonesian"]["CIT_SEC_NAMA"] = "";
	$placeHolderstempbsicit["Indonesian"]["CIT_SEC_NAMA"] = "";
	$fieldLabelstempbsicit["Indonesian"]["CIT_VECH"] = "Nama Transportasi";
	$fieldToolTipstempbsicit["Indonesian"]["CIT_VECH"] = "";
	$placeHolderstempbsicit["Indonesian"]["CIT_VECH"] = "";
	$fieldLabelstempbsicit["Indonesian"]["CIT_NUMBER"] = "Nomor Kendaraan";
	$fieldToolTipstempbsicit["Indonesian"]["CIT_NUMBER"] = "";
	$placeHolderstempbsicit["Indonesian"]["CIT_NUMBER"] = "";
	$fieldLabelstempbsicit["Indonesian"]["CIT_ADD_USER"] = "Add User";
	$fieldToolTipstempbsicit["Indonesian"]["CIT_ADD_USER"] = "";
	$placeHolderstempbsicit["Indonesian"]["CIT_ADD_USER"] = "";
	$fieldLabelstempbsicit["Indonesian"]["CIT_ADD_DATE"] = "Add Date";
	$fieldToolTipstempbsicit["Indonesian"]["CIT_ADD_DATE"] = "";
	$placeHolderstempbsicit["Indonesian"]["CIT_ADD_DATE"] = "";
	$fieldLabelstempbsicit["Indonesian"]["CIT_EDIT_USER"] = "Edit User";
	$fieldToolTipstempbsicit["Indonesian"]["CIT_EDIT_USER"] = "";
	$placeHolderstempbsicit["Indonesian"]["CIT_EDIT_USER"] = "";
	$fieldLabelstempbsicit["Indonesian"]["CIT_EDIT_DATE"] = "Edit Date";
	$fieldToolTipstempbsicit["Indonesian"]["CIT_EDIT_DATE"] = "";
	$placeHolderstempbsicit["Indonesian"]["CIT_EDIT_DATE"] = "";
	$fieldLabelstempbsicit["Indonesian"]["CIT_TSI"] = "Jumlah Pertanggungan";
	$fieldToolTipstempbsicit["Indonesian"]["CIT_TSI"] = "";
	$placeHolderstempbsicit["Indonesian"]["CIT_TSI"] = "";
	$fieldLabelstempbsicit["Indonesian"]["CIT_FL"] = "CIT FL";
	$fieldToolTipstempbsicit["Indonesian"]["CIT_FL"] = "";
	$placeHolderstempbsicit["Indonesian"]["CIT_FL"] = "";
	$fieldLabelstempbsicit["Indonesian"]["CIT_ASAL"] = "Asal";
	$fieldToolTipstempbsicit["Indonesian"]["CIT_ASAL"] = "";
	$placeHolderstempbsicit["Indonesian"]["CIT_ASAL"] = "";
	$fieldLabelstempbsicit["Indonesian"]["CIT_TUJUAN"] = "Tujuan";
	$fieldToolTipstempbsicit["Indonesian"]["CIT_TUJUAN"] = "";
	$placeHolderstempbsicit["Indonesian"]["CIT_TUJUAN"] = "";
	$fieldLabelstempbsicit["Indonesian"]["CIT_TOKEN"] = "CIT TOKEN";
	$fieldToolTipstempbsicit["Indonesian"]["CIT_TOKEN"] = "";
	$placeHolderstempbsicit["Indonesian"]["CIT_TOKEN"] = "";
	$fieldLabelstempbsicit["Indonesian"]["CIT_BSMID"] = "CIT BSMID";
	$fieldToolTipstempbsicit["Indonesian"]["CIT_BSMID"] = "";
	$placeHolderstempbsicit["Indonesian"]["CIT_BSMID"] = "";
	$fieldLabelstempbsicit["Indonesian"]["CIT_PROPOSAL"] = "CIT PROPOSAL";
	$fieldToolTipstempbsicit["Indonesian"]["CIT_PROPOSAL"] = "";
	$placeHolderstempbsicit["Indonesian"]["CIT_PROPOSAL"] = "";
	$fieldLabelstempbsicit["Indonesian"]["CIT_PREMI"] = "CIT PREMI";
	$fieldToolTipstempbsicit["Indonesian"]["CIT_PREMI"] = "";
	$placeHolderstempbsicit["Indonesian"]["CIT_PREMI"] = "";
	$fieldLabelstempbsicit["Indonesian"]["CIT_PERIODE_END"] = "CIT PERIODE END";
	$fieldToolTipstempbsicit["Indonesian"]["CIT_PERIODE_END"] = "";
	$placeHolderstempbsicit["Indonesian"]["CIT_PERIODE_END"] = "";
	$fieldLabelstempbsicit["Indonesian"]["CIT_APP_USER"] = "CIT APP USER";
	$fieldToolTipstempbsicit["Indonesian"]["CIT_APP_USER"] = "";
	$placeHolderstempbsicit["Indonesian"]["CIT_APP_USER"] = "";
	$fieldLabelstempbsicit["Indonesian"]["CIT_APP_DATE"] = "CIT APP DATE";
	$fieldToolTipstempbsicit["Indonesian"]["CIT_APP_DATE"] = "";
	$placeHolderstempbsicit["Indonesian"]["CIT_APP_DATE"] = "";
	$fieldLabelstempbsicit["Indonesian"]["CIT_APP_NOTE"] = "CIT APP NOTE";
	$fieldToolTipstempbsicit["Indonesian"]["CIT_APP_NOTE"] = "";
	$placeHolderstempbsicit["Indonesian"]["CIT_APP_NOTE"] = "";
	$fieldLabelstempbsicit["Indonesian"]["CIT_APP_FL"] = "CIT APP FL";
	$fieldToolTipstempbsicit["Indonesian"]["CIT_APP_FL"] = "";
	$placeHolderstempbsicit["Indonesian"]["CIT_APP_FL"] = "";
	$fieldLabelstempbsicit["Indonesian"]["CIT_TO_USER"] = "CIT TO USER";
	$fieldToolTipstempbsicit["Indonesian"]["CIT_TO_USER"] = "";
	$placeHolderstempbsicit["Indonesian"]["CIT_TO_USER"] = "";
	$fieldLabelstempbsicit["Indonesian"]["CIT_TO_DATE"] = "CIT TO DATE";
	$fieldToolTipstempbsicit["Indonesian"]["CIT_TO_DATE"] = "";
	$placeHolderstempbsicit["Indonesian"]["CIT_TO_DATE"] = "";
	if (count($fieldToolTipstempbsicit["Indonesian"]))
		$tdatatempbsicit[".isUseToolTips"] = true;
}


	$tdatatempbsicit[".NCSearch"] = true;



$tdatatempbsicit[".shortTableName"] = "tempbsicit";
$tdatatempbsicit[".nSecOptions"] = 0;

$tdatatempbsicit[".mainTableOwnerID"] = "";
$tdatatempbsicit[".entityType"] = 0;
$tdatatempbsicit[".connId"] = "u736239518_btn_at_154_41_241_2";


$tdatatempbsicit[".strOriginalTableName"] = "TEMPBSICIT";

	



$tdatatempbsicit[".showAddInPopup"] = false;

$tdatatempbsicit[".showEditInPopup"] = false;

$tdatatempbsicit[".showViewInPopup"] = false;

$tdatatempbsicit[".listAjax"] = false;
//	temporary
//$tdatatempbsicit[".listAjax"] = false;

	$tdatatempbsicit[".audit"] = true;

	$tdatatempbsicit[".locking"] = false;


$pages = $tdatatempbsicit[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatempbsicit[".edit"] = true;
	$tdatatempbsicit[".afterEditAction"] = 0;
	$tdatatempbsicit[".closePopupAfterEdit"] = 1;
	$tdatatempbsicit[".afterEditActionDetTable"] = "TEMBSICITASAL";
}

if( $pages[PAGE_ADD] ) {
$tdatatempbsicit[".add"] = true;
$tdatatempbsicit[".afterAddAction"] = 3;
$tdatatempbsicit[".closePopupAfterAdd"] = 1;
$tdatatempbsicit[".afterAddActionDetTable"] = "TEMBSICITASAL";
}

if( $pages[PAGE_LIST] ) {
	$tdatatempbsicit[".list"] = true;
}



$tdatatempbsicit[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatempbsicit[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatempbsicit[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatempbsicit[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatempbsicit[".printFriendly"] = true;
}



$tdatatempbsicit[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatempbsicit[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatempbsicit[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatempbsicit[".isUseAjaxSuggest"] = true;



																											

$tdatatempbsicit[".ajaxCodeSnippetAdded"] = false;

$tdatatempbsicit[".buttonsAdded"] = false;

$tdatatempbsicit[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatempbsicit[".isUseTimeForSearch"] = false;


$tdatatempbsicit[".badgeColor"] = "5F9EA0";


$tdatatempbsicit[".allSearchFields"] = array();
$tdatatempbsicit[".filterFields"] = array();
$tdatatempbsicit[".requiredSearchFields"] = array();

$tdatatempbsicit[".googleLikeFields"] = array();
$tdatatempbsicit[".googleLikeFields"][] = "IDCIT";
$tdatatempbsicit[".googleLikeFields"][] = "CIT_REGDATE";
$tdatatempbsicit[".googleLikeFields"][] = "CIT_IDCBG";
$tdatatempbsicit[".googleLikeFields"][] = "CIT_MTU";
$tdatatempbsicit[".googleLikeFields"][] = "CIT_TTG";
$tdatatempbsicit[".googleLikeFields"][] = "CIT_DATE_DEPART";
$tdatatempbsicit[".googleLikeFields"][] = "CIT_DATE_ARRIV";
$tdatatempbsicit[".googleLikeFields"][] = "CIT_EMP_NAMA";
$tdatatempbsicit[".googleLikeFields"][] = "CIT_SEC_NAMA";
$tdatatempbsicit[".googleLikeFields"][] = "CIT_VECH";
$tdatatempbsicit[".googleLikeFields"][] = "CIT_NUMBER";
$tdatatempbsicit[".googleLikeFields"][] = "CIT_ADD_USER";
$tdatatempbsicit[".googleLikeFields"][] = "CIT_ADD_DATE";
$tdatatempbsicit[".googleLikeFields"][] = "CIT_EDIT_USER";
$tdatatempbsicit[".googleLikeFields"][] = "CIT_EDIT_DATE";
$tdatatempbsicit[".googleLikeFields"][] = "CIT_TSI";
$tdatatempbsicit[".googleLikeFields"][] = "CIT_FL";
$tdatatempbsicit[".googleLikeFields"][] = "CIT_ASAL";
$tdatatempbsicit[".googleLikeFields"][] = "CIT_TUJUAN";
$tdatatempbsicit[".googleLikeFields"][] = "CIT_TOKEN";
$tdatatempbsicit[".googleLikeFields"][] = "CIT_BSMID";
$tdatatempbsicit[".googleLikeFields"][] = "CIT_PROPOSAL";
$tdatatempbsicit[".googleLikeFields"][] = "CIT_PREMI";
$tdatatempbsicit[".googleLikeFields"][] = "CIT_PERIODE_END";
$tdatatempbsicit[".googleLikeFields"][] = "CIT_APP_USER";
$tdatatempbsicit[".googleLikeFields"][] = "CIT_APP_DATE";
$tdatatempbsicit[".googleLikeFields"][] = "CIT_APP_NOTE";
$tdatatempbsicit[".googleLikeFields"][] = "CIT_APP_FL";
$tdatatempbsicit[".googleLikeFields"][] = "CIT_TO_USER";
$tdatatempbsicit[".googleLikeFields"][] = "CIT_TO_DATE";



$tdatatempbsicit[".tableType"] = "list";

$tdatatempbsicit[".printerPageOrientation"] = 0;
$tdatatempbsicit[".nPrinterPageScale"] = 100;

$tdatatempbsicit[".nPrinterSplitRecords"] = 40;

$tdatatempbsicit[".geocodingEnabled"] = false;




$tdatatempbsicit[".isDisplayLoading"] = true;






$tdatatempbsicit[".pageSize"] = 20;

$tdatatempbsicit[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatempbsicit[".strOrderBy"] = $tstrOrderBy;

$tdatatempbsicit[".orderindexes"] = array();


$tdatatempbsicit[".sqlHead"] = "SELECT IDCIT,  CIT_REGDATE,  CIT_IDCBG,  CIT_MTU,  CIT_TTG,  CIT_DATE_DEPART,  CIT_DATE_ARRIV,  CIT_EMP_NAMA,  CIT_SEC_NAMA,  CIT_VECH,  CIT_NUMBER,  CIT_ADD_USER,  CIT_ADD_DATE,  CIT_EDIT_USER,  CIT_EDIT_DATE,  CIT_TSI,  CIT_FL,  CIT_ASAL,  CIT_TUJUAN,  CIT_TOKEN,  CIT_BSMID,  CIT_PROPOSAL,  CIT_PREMI,  CIT_PERIODE_END,  CIT_APP_USER,  CIT_APP_DATE,  CIT_APP_NOTE,  CIT_APP_FL,  CIT_TO_USER,  CIT_TO_DATE";
$tdatatempbsicit[".sqlFrom"] = "FROM TEMPBSICIT";
$tdatatempbsicit[".sqlWhereExpr"] = "(CIT_TO_USER = ':session.UserID')";
$tdatatempbsicit[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatempbsicit[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatempbsicit[".arrGroupsPerPage"] = $arrGPP;

$tdatatempbsicit[".highlightSearchResults"] = true;

$tableKeystempbsicit = array();
$tableKeystempbsicit[] = "IDCIT";
$tableKeystempbsicit[] = "CIT_TOKEN";
$tdatatempbsicit[".Keys"] = $tableKeystempbsicit;


$tdatatempbsicit[".hideMobileList"] = array();




//	IDCIT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IDCIT";
	$fdata["GoodName"] = "IDCIT";
	$fdata["ownerTable"] = "TEMPBSICIT";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIT","IDCIT");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "IDCIT";

		$fdata["sourceSingle"] = "IDCIT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IDCIT";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatempbsicit["IDCIT"] = $fdata;
		$tdatatempbsicit[".searchableFields"][] = "IDCIT";
//	CIT_REGDATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CIT_REGDATE";
	$fdata["GoodName"] = "CIT_REGDATE";
	$fdata["ownerTable"] = "TEMPBSICIT";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIT","CIT_REGDATE");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "CIT_REGDATE";

		$fdata["sourceSingle"] = "CIT_REGDATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CIT_REGDATE";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatempbsicit["CIT_REGDATE"] = $fdata;
		$tdatatempbsicit[".searchableFields"][] = "CIT_REGDATE";
//	CIT_IDCBG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CIT_IDCBG";
	$fdata["GoodName"] = "CIT_IDCBG";
	$fdata["ownerTable"] = "TEMPBSICIT";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIT","CIT_IDCBG");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CIT_IDCBG";

		$fdata["sourceSingle"] = "CIT_IDCBG";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CIT_IDCBG";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatempbsicit["CIT_IDCBG"] = $fdata;
		$tdatatempbsicit[".searchableFields"][] = "CIT_IDCBG";
//	CIT_MTU
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "CIT_MTU";
	$fdata["GoodName"] = "CIT_MTU";
	$fdata["ownerTable"] = "TEMPBSICIT";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIT","CIT_MTU");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CIT_MTU";

		$fdata["sourceSingle"] = "CIT_MTU";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CIT_MTU";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatempbsicit["CIT_MTU"] = $fdata;
		$tdatatempbsicit[".searchableFields"][] = "CIT_MTU";
//	CIT_TTG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "CIT_TTG";
	$fdata["GoodName"] = "CIT_TTG";
	$fdata["ownerTable"] = "TEMPBSICIT";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIT","CIT_TTG");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CIT_TTG";

		$fdata["sourceSingle"] = "CIT_TTG";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CIT_TTG";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatempbsicit["CIT_TTG"] = $fdata;
		$tdatatempbsicit[".searchableFields"][] = "CIT_TTG";
//	CIT_DATE_DEPART
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "CIT_DATE_DEPART";
	$fdata["GoodName"] = "CIT_DATE_DEPART";
	$fdata["ownerTable"] = "TEMPBSICIT";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIT","CIT_DATE_DEPART");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "CIT_DATE_DEPART";

		$fdata["sourceSingle"] = "CIT_DATE_DEPART";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CIT_DATE_DEPART";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatempbsicit["CIT_DATE_DEPART"] = $fdata;
		$tdatatempbsicit[".searchableFields"][] = "CIT_DATE_DEPART";
//	CIT_DATE_ARRIV
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "CIT_DATE_ARRIV";
	$fdata["GoodName"] = "CIT_DATE_ARRIV";
	$fdata["ownerTable"] = "TEMPBSICIT";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIT","CIT_DATE_ARRIV");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "CIT_DATE_ARRIV";

		$fdata["sourceSingle"] = "CIT_DATE_ARRIV";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CIT_DATE_ARRIV";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatempbsicit["CIT_DATE_ARRIV"] = $fdata;
		$tdatatempbsicit[".searchableFields"][] = "CIT_DATE_ARRIV";
//	CIT_EMP_NAMA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "CIT_EMP_NAMA";
	$fdata["GoodName"] = "CIT_EMP_NAMA";
	$fdata["ownerTable"] = "TEMPBSICIT";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIT","CIT_EMP_NAMA");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CIT_EMP_NAMA";

		$fdata["sourceSingle"] = "CIT_EMP_NAMA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CIT_EMP_NAMA";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatempbsicit["CIT_EMP_NAMA"] = $fdata;
		$tdatatempbsicit[".searchableFields"][] = "CIT_EMP_NAMA";
//	CIT_SEC_NAMA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "CIT_SEC_NAMA";
	$fdata["GoodName"] = "CIT_SEC_NAMA";
	$fdata["ownerTable"] = "TEMPBSICIT";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIT","CIT_SEC_NAMA");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CIT_SEC_NAMA";

		$fdata["sourceSingle"] = "CIT_SEC_NAMA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CIT_SEC_NAMA";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatempbsicit["CIT_SEC_NAMA"] = $fdata;
		$tdatatempbsicit[".searchableFields"][] = "CIT_SEC_NAMA";
//	CIT_VECH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "CIT_VECH";
	$fdata["GoodName"] = "CIT_VECH";
	$fdata["ownerTable"] = "TEMPBSICIT";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIT","CIT_VECH");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CIT_VECH";

		$fdata["sourceSingle"] = "CIT_VECH";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CIT_VECH";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Mobil";
	$edata["LookupValues"][] = "Motor";
	$edata["LookupValues"][] = "Kereta Api";
	$edata["LookupValues"][] = "Pesawat";
	$edata["LookupValues"][] = "Truk";
	$edata["LookupValues"][] = "Pick Up";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatempbsicit["CIT_VECH"] = $fdata;
		$tdatatempbsicit[".searchableFields"][] = "CIT_VECH";
//	CIT_NUMBER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "CIT_NUMBER";
	$fdata["GoodName"] = "CIT_NUMBER";
	$fdata["ownerTable"] = "TEMPBSICIT";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIT","CIT_NUMBER");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CIT_NUMBER";

		$fdata["sourceSingle"] = "CIT_NUMBER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CIT_NUMBER";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=8";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatempbsicit["CIT_NUMBER"] = $fdata;
		$tdatatempbsicit[".searchableFields"][] = "CIT_NUMBER";
//	CIT_ADD_USER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "CIT_ADD_USER";
	$fdata["GoodName"] = "CIT_ADD_USER";
	$fdata["ownerTable"] = "TEMPBSICIT";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIT","CIT_ADD_USER");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CIT_ADD_USER";

		$fdata["sourceSingle"] = "CIT_ADD_USER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CIT_ADD_USER";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatempbsicit["CIT_ADD_USER"] = $fdata;
		$tdatatempbsicit[".searchableFields"][] = "CIT_ADD_USER";
//	CIT_ADD_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "CIT_ADD_DATE";
	$fdata["GoodName"] = "CIT_ADD_DATE";
	$fdata["ownerTable"] = "TEMPBSICIT";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIT","CIT_ADD_DATE");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "CIT_ADD_DATE";

		$fdata["sourceSingle"] = "CIT_ADD_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CIT_ADD_DATE";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatempbsicit["CIT_ADD_DATE"] = $fdata;
		$tdatatempbsicit[".searchableFields"][] = "CIT_ADD_DATE";
//	CIT_EDIT_USER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "CIT_EDIT_USER";
	$fdata["GoodName"] = "CIT_EDIT_USER";
	$fdata["ownerTable"] = "TEMPBSICIT";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIT","CIT_EDIT_USER");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CIT_EDIT_USER";

		$fdata["sourceSingle"] = "CIT_EDIT_USER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CIT_EDIT_USER";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatempbsicit["CIT_EDIT_USER"] = $fdata;
		$tdatatempbsicit[".searchableFields"][] = "CIT_EDIT_USER";
//	CIT_EDIT_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "CIT_EDIT_DATE";
	$fdata["GoodName"] = "CIT_EDIT_DATE";
	$fdata["ownerTable"] = "TEMPBSICIT";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIT","CIT_EDIT_DATE");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "CIT_EDIT_DATE";

		$fdata["sourceSingle"] = "CIT_EDIT_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CIT_EDIT_DATE";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatempbsicit["CIT_EDIT_DATE"] = $fdata;
		$tdatatempbsicit[".searchableFields"][] = "CIT_EDIT_DATE";
//	CIT_TSI
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "CIT_TSI";
	$fdata["GoodName"] = "CIT_TSI";
	$fdata["ownerTable"] = "TEMPBSICIT";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIT","CIT_TSI");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "CIT_TSI";

		$fdata["sourceSingle"] = "CIT_TSI";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CIT_TSI";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatempbsicit["CIT_TSI"] = $fdata;
		$tdatatempbsicit[".searchableFields"][] = "CIT_TSI";
//	CIT_FL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "CIT_FL";
	$fdata["GoodName"] = "CIT_FL";
	$fdata["ownerTable"] = "TEMPBSICIT";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIT","CIT_FL");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CIT_FL";

		$fdata["sourceSingle"] = "CIT_FL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CIT_FL";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatempbsicit["CIT_FL"] = $fdata;
		$tdatatempbsicit[".searchableFields"][] = "CIT_FL";
//	CIT_ASAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "CIT_ASAL";
	$fdata["GoodName"] = "CIT_ASAL";
	$fdata["ownerTable"] = "TEMPBSICIT";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIT","CIT_ASAL");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CIT_ASAL";

		$fdata["sourceSingle"] = "CIT_ASAL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CIT_ASAL";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=500";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatempbsicit["CIT_ASAL"] = $fdata;
		$tdatatempbsicit[".searchableFields"][] = "CIT_ASAL";
//	CIT_TUJUAN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "CIT_TUJUAN";
	$fdata["GoodName"] = "CIT_TUJUAN";
	$fdata["ownerTable"] = "TEMPBSICIT";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIT","CIT_TUJUAN");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CIT_TUJUAN";

		$fdata["sourceSingle"] = "CIT_TUJUAN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CIT_TUJUAN";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=500";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatempbsicit["CIT_TUJUAN"] = $fdata;
		$tdatatempbsicit[".searchableFields"][] = "CIT_TUJUAN";
//	CIT_TOKEN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "CIT_TOKEN";
	$fdata["GoodName"] = "CIT_TOKEN";
	$fdata["ownerTable"] = "TEMPBSICIT";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIT","CIT_TOKEN");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CIT_TOKEN";

		$fdata["sourceSingle"] = "CIT_TOKEN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CIT_TOKEN";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatempbsicit["CIT_TOKEN"] = $fdata;
		$tdatatempbsicit[".searchableFields"][] = "CIT_TOKEN";
//	CIT_BSMID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "CIT_BSMID";
	$fdata["GoodName"] = "CIT_BSMID";
	$fdata["ownerTable"] = "TEMPBSICIT";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIT","CIT_BSMID");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CIT_BSMID";

		$fdata["sourceSingle"] = "CIT_BSMID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CIT_BSMID";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=45";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatempbsicit["CIT_BSMID"] = $fdata;
		$tdatatempbsicit[".searchableFields"][] = "CIT_BSMID";
//	CIT_PROPOSAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "CIT_PROPOSAL";
	$fdata["GoodName"] = "CIT_PROPOSAL";
	$fdata["ownerTable"] = "TEMPBSICIT";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIT","CIT_PROPOSAL");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CIT_PROPOSAL";

		$fdata["sourceSingle"] = "CIT_PROPOSAL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CIT_PROPOSAL";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=45";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatempbsicit["CIT_PROPOSAL"] = $fdata;
		$tdatatempbsicit[".searchableFields"][] = "CIT_PROPOSAL";
//	CIT_PREMI
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "CIT_PREMI";
	$fdata["GoodName"] = "CIT_PREMI";
	$fdata["ownerTable"] = "TEMPBSICIT";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIT","CIT_PREMI");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "CIT_PREMI";

		$fdata["sourceSingle"] = "CIT_PREMI";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CIT_PREMI";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatempbsicit["CIT_PREMI"] = $fdata;
		$tdatatempbsicit[".searchableFields"][] = "CIT_PREMI";
//	CIT_PERIODE_END
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "CIT_PERIODE_END";
	$fdata["GoodName"] = "CIT_PERIODE_END";
	$fdata["ownerTable"] = "TEMPBSICIT";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIT","CIT_PERIODE_END");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "CIT_PERIODE_END";

		$fdata["sourceSingle"] = "CIT_PERIODE_END";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CIT_PERIODE_END";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatempbsicit["CIT_PERIODE_END"] = $fdata;
		$tdatatempbsicit[".searchableFields"][] = "CIT_PERIODE_END";
//	CIT_APP_USER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "CIT_APP_USER";
	$fdata["GoodName"] = "CIT_APP_USER";
	$fdata["ownerTable"] = "TEMPBSICIT";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIT","CIT_APP_USER");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CIT_APP_USER";

		$fdata["sourceSingle"] = "CIT_APP_USER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CIT_APP_USER";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=45";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatempbsicit["CIT_APP_USER"] = $fdata;
		$tdatatempbsicit[".searchableFields"][] = "CIT_APP_USER";
//	CIT_APP_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "CIT_APP_DATE";
	$fdata["GoodName"] = "CIT_APP_DATE";
	$fdata["ownerTable"] = "TEMPBSICIT";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIT","CIT_APP_DATE");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "CIT_APP_DATE";

		$fdata["sourceSingle"] = "CIT_APP_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CIT_APP_DATE";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatempbsicit["CIT_APP_DATE"] = $fdata;
		$tdatatempbsicit[".searchableFields"][] = "CIT_APP_DATE";
//	CIT_APP_NOTE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "CIT_APP_NOTE";
	$fdata["GoodName"] = "CIT_APP_NOTE";
	$fdata["ownerTable"] = "TEMPBSICIT";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIT","CIT_APP_NOTE");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CIT_APP_NOTE";

		$fdata["sourceSingle"] = "CIT_APP_NOTE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CIT_APP_NOTE";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=45";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatempbsicit["CIT_APP_NOTE"] = $fdata;
		$tdatatempbsicit[".searchableFields"][] = "CIT_APP_NOTE";
//	CIT_APP_FL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "CIT_APP_FL";
	$fdata["GoodName"] = "CIT_APP_FL";
	$fdata["ownerTable"] = "TEMPBSICIT";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIT","CIT_APP_FL");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CIT_APP_FL";

		$fdata["sourceSingle"] = "CIT_APP_FL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CIT_APP_FL";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatempbsicit["CIT_APP_FL"] = $fdata;
		$tdatatempbsicit[".searchableFields"][] = "CIT_APP_FL";
//	CIT_TO_USER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "CIT_TO_USER";
	$fdata["GoodName"] = "CIT_TO_USER";
	$fdata["ownerTable"] = "TEMPBSICIT";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIT","CIT_TO_USER");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CIT_TO_USER";

		$fdata["sourceSingle"] = "CIT_TO_USER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CIT_TO_USER";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=45";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatempbsicit["CIT_TO_USER"] = $fdata;
		$tdatatempbsicit[".searchableFields"][] = "CIT_TO_USER";
//	CIT_TO_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "CIT_TO_DATE";
	$fdata["GoodName"] = "CIT_TO_DATE";
	$fdata["ownerTable"] = "TEMPBSICIT";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIT","CIT_TO_DATE");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "CIT_TO_DATE";

		$fdata["sourceSingle"] = "CIT_TO_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CIT_TO_DATE";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatempbsicit["CIT_TO_DATE"] = $fdata;
		$tdatatempbsicit[".searchableFields"][] = "CIT_TO_DATE";


$tables_data["TEMPBSICIT"]=&$tdatatempbsicit;
$field_labels["TEMPBSICIT"] = &$fieldLabelstempbsicit;
$fieldToolTips["TEMPBSICIT"] = &$fieldToolTipstempbsicit;
$placeHolders["TEMPBSICIT"] = &$placeHolderstempbsicit;
$page_titles["TEMPBSICIT"] = &$pageTitlestempbsicit;


changeTextControlsToDate( "TEMPBSICIT" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["TEMPBSICIT"] = array();
//	TEMBSICITASAL
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="TEMBSICITASAL";
		$detailsParam["dOriginalTable"] = "TEMBSICITASAL";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tembsicitasal";
	$detailsParam["dCaptionTable"] = GetTableCaption("TEMBSICITASAL");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["TEMPBSICIT"][$dIndex] = $detailsParam;

	
		$detailsTablesData["TEMPBSICIT"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["TEMPBSICIT"][$dIndex]["masterKeys"][]="IDCIT";

				$detailsTablesData["TEMPBSICIT"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["TEMPBSICIT"][$dIndex]["detailKeys"][]="ID_CIT";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["TEMPBSICIT"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tempbsicit()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "IDCIT,  CIT_REGDATE,  CIT_IDCBG,  CIT_MTU,  CIT_TTG,  CIT_DATE_DEPART,  CIT_DATE_ARRIV,  CIT_EMP_NAMA,  CIT_SEC_NAMA,  CIT_VECH,  CIT_NUMBER,  CIT_ADD_USER,  CIT_ADD_DATE,  CIT_EDIT_USER,  CIT_EDIT_DATE,  CIT_TSI,  CIT_FL,  CIT_ASAL,  CIT_TUJUAN,  CIT_TOKEN,  CIT_BSMID,  CIT_PROPOSAL,  CIT_PREMI,  CIT_PERIODE_END,  CIT_APP_USER,  CIT_APP_DATE,  CIT_APP_NOTE,  CIT_APP_FL,  CIT_TO_USER,  CIT_TO_DATE";
$proto0["m_strFrom"] = "FROM TEMPBSICIT";
$proto0["m_strWhere"] = "(CIT_TO_USER = ':session.UserID')";
$proto0["m_strOrderBy"] = "";
	
																												;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "CIT_TO_USER = ':session.UserID'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CIT_TO_USER",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "TEMPBSICIT"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= ':session.UserID'";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "IDCIT",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "TEMPBSICIT"
));

$proto6["m_sql"] = "IDCIT";
$proto6["m_srcTableName"] = "TEMPBSICIT";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_REGDATE",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "TEMPBSICIT"
));

$proto8["m_sql"] = "CIT_REGDATE";
$proto8["m_srcTableName"] = "TEMPBSICIT";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_IDCBG",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "TEMPBSICIT"
));

$proto10["m_sql"] = "CIT_IDCBG";
$proto10["m_srcTableName"] = "TEMPBSICIT";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_MTU",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "TEMPBSICIT"
));

$proto12["m_sql"] = "CIT_MTU";
$proto12["m_srcTableName"] = "TEMPBSICIT";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_TTG",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "TEMPBSICIT"
));

$proto14["m_sql"] = "CIT_TTG";
$proto14["m_srcTableName"] = "TEMPBSICIT";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_DATE_DEPART",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "TEMPBSICIT"
));

$proto16["m_sql"] = "CIT_DATE_DEPART";
$proto16["m_srcTableName"] = "TEMPBSICIT";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_DATE_ARRIV",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "TEMPBSICIT"
));

$proto18["m_sql"] = "CIT_DATE_ARRIV";
$proto18["m_srcTableName"] = "TEMPBSICIT";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_EMP_NAMA",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "TEMPBSICIT"
));

$proto20["m_sql"] = "CIT_EMP_NAMA";
$proto20["m_srcTableName"] = "TEMPBSICIT";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_SEC_NAMA",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "TEMPBSICIT"
));

$proto22["m_sql"] = "CIT_SEC_NAMA";
$proto22["m_srcTableName"] = "TEMPBSICIT";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_VECH",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "TEMPBSICIT"
));

$proto24["m_sql"] = "CIT_VECH";
$proto24["m_srcTableName"] = "TEMPBSICIT";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_NUMBER",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "TEMPBSICIT"
));

$proto26["m_sql"] = "CIT_NUMBER";
$proto26["m_srcTableName"] = "TEMPBSICIT";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_ADD_USER",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "TEMPBSICIT"
));

$proto28["m_sql"] = "CIT_ADD_USER";
$proto28["m_srcTableName"] = "TEMPBSICIT";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_ADD_DATE",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "TEMPBSICIT"
));

$proto30["m_sql"] = "CIT_ADD_DATE";
$proto30["m_srcTableName"] = "TEMPBSICIT";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_EDIT_USER",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "TEMPBSICIT"
));

$proto32["m_sql"] = "CIT_EDIT_USER";
$proto32["m_srcTableName"] = "TEMPBSICIT";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_EDIT_DATE",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "TEMPBSICIT"
));

$proto34["m_sql"] = "CIT_EDIT_DATE";
$proto34["m_srcTableName"] = "TEMPBSICIT";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_TSI",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "TEMPBSICIT"
));

$proto36["m_sql"] = "CIT_TSI";
$proto36["m_srcTableName"] = "TEMPBSICIT";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_FL",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "TEMPBSICIT"
));

$proto38["m_sql"] = "CIT_FL";
$proto38["m_srcTableName"] = "TEMPBSICIT";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_ASAL",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "TEMPBSICIT"
));

$proto40["m_sql"] = "CIT_ASAL";
$proto40["m_srcTableName"] = "TEMPBSICIT";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_TUJUAN",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "TEMPBSICIT"
));

$proto42["m_sql"] = "CIT_TUJUAN";
$proto42["m_srcTableName"] = "TEMPBSICIT";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_TOKEN",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "TEMPBSICIT"
));

$proto44["m_sql"] = "CIT_TOKEN";
$proto44["m_srcTableName"] = "TEMPBSICIT";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_BSMID",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "TEMPBSICIT"
));

$proto46["m_sql"] = "CIT_BSMID";
$proto46["m_srcTableName"] = "TEMPBSICIT";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_PROPOSAL",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "TEMPBSICIT"
));

$proto48["m_sql"] = "CIT_PROPOSAL";
$proto48["m_srcTableName"] = "TEMPBSICIT";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_PREMI",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "TEMPBSICIT"
));

$proto50["m_sql"] = "CIT_PREMI";
$proto50["m_srcTableName"] = "TEMPBSICIT";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_PERIODE_END",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "TEMPBSICIT"
));

$proto52["m_sql"] = "CIT_PERIODE_END";
$proto52["m_srcTableName"] = "TEMPBSICIT";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_APP_USER",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "TEMPBSICIT"
));

$proto54["m_sql"] = "CIT_APP_USER";
$proto54["m_srcTableName"] = "TEMPBSICIT";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_APP_DATE",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "TEMPBSICIT"
));

$proto56["m_sql"] = "CIT_APP_DATE";
$proto56["m_srcTableName"] = "TEMPBSICIT";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_APP_NOTE",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "TEMPBSICIT"
));

$proto58["m_sql"] = "CIT_APP_NOTE";
$proto58["m_srcTableName"] = "TEMPBSICIT";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_APP_FL",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "TEMPBSICIT"
));

$proto60["m_sql"] = "CIT_APP_FL";
$proto60["m_srcTableName"] = "TEMPBSICIT";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_TO_USER",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "TEMPBSICIT"
));

$proto62["m_sql"] = "CIT_TO_USER";
$proto62["m_srcTableName"] = "TEMPBSICIT";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_TO_DATE",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "TEMPBSICIT"
));

$proto64["m_sql"] = "CIT_TO_DATE";
$proto64["m_srcTableName"] = "TEMPBSICIT";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto66=array();
$proto66["m_link"] = "SQLL_MAIN";
			$proto67=array();
$proto67["m_strName"] = "TEMPBSICIT";
$proto67["m_srcTableName"] = "TEMPBSICIT";
$proto67["m_columns"] = array();
$proto67["m_columns"][] = "IDCIT";
$proto67["m_columns"][] = "CIT_REGDATE";
$proto67["m_columns"][] = "CIT_IDCBG";
$proto67["m_columns"][] = "CIT_MTU";
$proto67["m_columns"][] = "CIT_TTG";
$proto67["m_columns"][] = "CIT_DATE_DEPART";
$proto67["m_columns"][] = "CIT_DATE_ARRIV";
$proto67["m_columns"][] = "CIT_EMP_NAMA";
$proto67["m_columns"][] = "CIT_SEC_NAMA";
$proto67["m_columns"][] = "CIT_VECH";
$proto67["m_columns"][] = "CIT_NUMBER";
$proto67["m_columns"][] = "CIT_ADD_USER";
$proto67["m_columns"][] = "CIT_ADD_DATE";
$proto67["m_columns"][] = "CIT_EDIT_USER";
$proto67["m_columns"][] = "CIT_EDIT_DATE";
$proto67["m_columns"][] = "CIT_TSI";
$proto67["m_columns"][] = "CIT_FL";
$proto67["m_columns"][] = "CIT_ASAL";
$proto67["m_columns"][] = "CIT_TUJUAN";
$proto67["m_columns"][] = "CIT_TOKEN";
$proto67["m_columns"][] = "CIT_BSMID";
$proto67["m_columns"][] = "CIT_PROPOSAL";
$proto67["m_columns"][] = "CIT_PREMI";
$proto67["m_columns"][] = "CIT_PERIODE_END";
$proto67["m_columns"][] = "CIT_APP_USER";
$proto67["m_columns"][] = "CIT_APP_DATE";
$proto67["m_columns"][] = "CIT_APP_NOTE";
$proto67["m_columns"][] = "CIT_APP_FL";
$proto67["m_columns"][] = "CIT_TO_USER";
$proto67["m_columns"][] = "CIT_TO_DATE";
$proto67["m_columns"][] = "CIT_RATE";
$proto67["m_columns"][] = "CIT_LIMIT";
$proto67["m_columns"][] = "IS_OL";
$proto67["m_columns"][] = "CIT_MODE";
$obj = new SQLTable($proto67);

$proto66["m_table"] = $obj;
$proto66["m_sql"] = "TEMPBSICIT";
$proto66["m_alias"] = "";
$proto66["m_srcTableName"] = "TEMPBSICIT";
$proto68=array();
$proto68["m_sql"] = "";
$proto68["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto68["m_column"]=$obj;
$proto68["m_contained"] = array();
$proto68["m_strCase"] = "";
$proto68["m_havingmode"] = false;
$proto68["m_inBrackets"] = false;
$proto68["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto68);

$proto66["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto66);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="TEMPBSICIT";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tempbsicit = createSqlQuery_tempbsicit();


	
																												;

																														

$tdatatempbsicit[".sqlquery"] = $queryData_tempbsicit;



include_once(getabspath("include/tempbsicit_events.php"));
$tdatatempbsicit[".hasEvents"] = true;

?>