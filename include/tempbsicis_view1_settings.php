<?php
$tdatatempbsicis_view1 = array();
$tdatatempbsicis_view1[".searchableFields"] = array();
$tdatatempbsicis_view1[".ShortName"] = "tempbsicis_view1";
$tdatatempbsicis_view1[".OwnerID"] = "";
$tdatatempbsicis_view1[".OriginalTable"] = "TEMPBSICIS";


$tdatatempbsicis_view1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatempbsicis_view1[".originalPagesByType"] = $tdatatempbsicis_view1[".pagesByType"];
$tdatatempbsicis_view1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatempbsicis_view1[".originalPages"] = $tdatatempbsicis_view1[".pages"];
$tdatatempbsicis_view1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatempbsicis_view1[".originalDefaultPages"] = $tdatatempbsicis_view1[".defaultPages"];

//	field labels
$fieldLabelstempbsicis_view1 = array();
$fieldToolTipstempbsicis_view1 = array();
$pageTitlestempbsicis_view1 = array();
$placeHolderstempbsicis_view1 = array();

if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelstempbsicis_view1["Indonesian"] = array();
	$fieldToolTipstempbsicis_view1["Indonesian"] = array();
	$placeHolderstempbsicis_view1["Indonesian"] = array();
	$pageTitlestempbsicis_view1["Indonesian"] = array();
	$fieldLabelstempbsicis_view1["Indonesian"]["IDCIS"] = "IDCIS";
	$fieldToolTipstempbsicis_view1["Indonesian"]["IDCIS"] = "";
	$placeHolderstempbsicis_view1["Indonesian"]["IDCIS"] = "";
	$fieldLabelstempbsicis_view1["Indonesian"]["CIS_TOKEN"] = "CIS TOKEN";
	$fieldToolTipstempbsicis_view1["Indonesian"]["CIS_TOKEN"] = "";
	$placeHolderstempbsicis_view1["Indonesian"]["CIS_TOKEN"] = "";
	$fieldLabelstempbsicis_view1["Indonesian"]["CIS_REGION"] = "CIS REGION";
	$fieldToolTipstempbsicis_view1["Indonesian"]["CIS_REGION"] = "";
	$placeHolderstempbsicis_view1["Indonesian"]["CIS_REGION"] = "";
	$fieldLabelstempbsicis_view1["Indonesian"]["CIS_AREA"] = "CIS AREA";
	$fieldToolTipstempbsicis_view1["Indonesian"]["CIS_AREA"] = "";
	$placeHolderstempbsicis_view1["Indonesian"]["CIS_AREA"] = "";
	$fieldLabelstempbsicis_view1["Indonesian"]["SUMINSURED"] = "Uang Pertanggungan";
	$fieldToolTipstempbsicis_view1["Indonesian"]["SUMINSURED"] = "";
	$placeHolderstempbsicis_view1["Indonesian"]["SUMINSURED"] = "";
	$fieldLabelstempbsicis_view1["Indonesian"]["CIS_UPL_USER"] = "CIS UPL USER";
	$fieldToolTipstempbsicis_view1["Indonesian"]["CIS_UPL_USER"] = "";
	$placeHolderstempbsicis_view1["Indonesian"]["CIS_UPL_USER"] = "";
	$fieldLabelstempbsicis_view1["Indonesian"]["CIS_UPL_DATE"] = "CIS UPL DATE";
	$fieldToolTipstempbsicis_view1["Indonesian"]["CIS_UPL_DATE"] = "";
	$placeHolderstempbsicis_view1["Indonesian"]["CIS_UPL_DATE"] = "";
	$fieldLabelstempbsicis_view1["Indonesian"]["CIS_FL"] = "CIS FL";
	$fieldToolTipstempbsicis_view1["Indonesian"]["CIS_FL"] = "";
	$placeHolderstempbsicis_view1["Indonesian"]["CIS_FL"] = "";
	$fieldLabelstempbsicis_view1["Indonesian"]["Cabang"] = "Cabang";
	$fieldToolTipstempbsicis_view1["Indonesian"]["Cabang"] = "";
	$placeHolderstempbsicis_view1["Indonesian"]["Cabang"] = "";
	$fieldLabelstempbsicis_view1["Indonesian"]["Periode"] = "Periode Awal";
	$fieldToolTipstempbsicis_view1["Indonesian"]["Periode"] = "";
	$placeHolderstempbsicis_view1["Indonesian"]["Periode"] = "";
	if (count($fieldToolTipstempbsicis_view1["Indonesian"]))
		$tdatatempbsicis_view1[".isUseToolTips"] = true;
}


	$tdatatempbsicis_view1[".NCSearch"] = true;



$tdatatempbsicis_view1[".shortTableName"] = "tempbsicis_view1";
$tdatatempbsicis_view1[".nSecOptions"] = 0;

$tdatatempbsicis_view1[".recsLimit"] = 10;
$tdatatempbsicis_view1[".mainTableOwnerID"] = "";
$tdatatempbsicis_view1[".entityType"] = 1;
$tdatatempbsicis_view1[".connId"] = "u736239518_btn_at_154_41_241_2";


$tdatatempbsicis_view1[".strOriginalTableName"] = "TEMPBSICIS";

	



$tdatatempbsicis_view1[".showAddInPopup"] = false;

$tdatatempbsicis_view1[".showEditInPopup"] = false;

$tdatatempbsicis_view1[".showViewInPopup"] = false;

$tdatatempbsicis_view1[".listAjax"] = false;
//	temporary
//$tdatatempbsicis_view1[".listAjax"] = false;

	$tdatatempbsicis_view1[".audit"] = true;

	$tdatatempbsicis_view1[".locking"] = false;


$pages = $tdatatempbsicis_view1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatempbsicis_view1[".edit"] = true;
	$tdatatempbsicis_view1[".afterEditAction"] = 1;
	$tdatatempbsicis_view1[".closePopupAfterEdit"] = 1;
	$tdatatempbsicis_view1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatempbsicis_view1[".add"] = true;
$tdatatempbsicis_view1[".afterAddAction"] = 1;
$tdatatempbsicis_view1[".closePopupAfterAdd"] = 1;
$tdatatempbsicis_view1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatempbsicis_view1[".list"] = true;
}



$tdatatempbsicis_view1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatempbsicis_view1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatempbsicis_view1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatempbsicis_view1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatempbsicis_view1[".printFriendly"] = true;
}



$tdatatempbsicis_view1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatempbsicis_view1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatempbsicis_view1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatempbsicis_view1[".isUseAjaxSuggest"] = true;



																											

$tdatatempbsicis_view1[".ajaxCodeSnippetAdded"] = false;

$tdatatempbsicis_view1[".buttonsAdded"] = false;

$tdatatempbsicis_view1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatempbsicis_view1[".isUseTimeForSearch"] = false;


$tdatatempbsicis_view1[".badgeColor"] = "3CB371";


$tdatatempbsicis_view1[".allSearchFields"] = array();
$tdatatempbsicis_view1[".filterFields"] = array();
$tdatatempbsicis_view1[".requiredSearchFields"] = array();

$tdatatempbsicis_view1[".googleLikeFields"] = array();
$tdatatempbsicis_view1[".googleLikeFields"][] = "CIS_AREA";
$tdatatempbsicis_view1[".googleLikeFields"][] = "Cabang";
$tdatatempbsicis_view1[".googleLikeFields"][] = "Periode";
$tdatatempbsicis_view1[".googleLikeFields"][] = "SUMINSURED";
$tdatatempbsicis_view1[".googleLikeFields"][] = "CIS_UPL_USER";
$tdatatempbsicis_view1[".googleLikeFields"][] = "CIS_UPL_DATE";
$tdatatempbsicis_view1[".googleLikeFields"][] = "CIS_FL";
$tdatatempbsicis_view1[".googleLikeFields"][] = "IDCIS";
$tdatatempbsicis_view1[".googleLikeFields"][] = "CIS_TOKEN";
$tdatatempbsicis_view1[".googleLikeFields"][] = "CIS_REGION";



$tdatatempbsicis_view1[".tableType"] = "list";

$tdatatempbsicis_view1[".printerPageOrientation"] = 0;
$tdatatempbsicis_view1[".nPrinterPageScale"] = 100;

$tdatatempbsicis_view1[".nPrinterSplitRecords"] = 40;

$tdatatempbsicis_view1[".geocodingEnabled"] = false;




$tdatatempbsicis_view1[".isDisplayLoading"] = true;






$tdatatempbsicis_view1[".pageSize"] = 20;

$tdatatempbsicis_view1[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY SUMINSURED DESC";
$tdatatempbsicis_view1[".strOrderBy"] = $tstrOrderBy;

$tdatatempbsicis_view1[".orderindexes"] = array();
	$tdatatempbsicis_view1[".orderindexes"][] = array(4, (0 ? "ASC" : "DESC"), "SUMINSURED");



$tdatatempbsicis_view1[".sqlHead"] = "SELECT CIS_AREA,  KODECABANG as Cabang,  DATE_FORMAT(DATE, \"%M %Y\") as Periode,  SUMINSURED,  CIS_UPL_USER,  CIS_UPL_DATE,  CIS_FL,  IDCIS,  CIS_TOKEN,  CIS_REGION";
$tdatatempbsicis_view1[".sqlFrom"] = "FROM TEMPBSICIS";
$tdatatempbsicis_view1[".sqlWhereExpr"] = "(KODECABANG = ':session.IdExt')";
$tdatatempbsicis_view1[".sqlTail"] = "LIMIT 10";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatempbsicis_view1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatempbsicis_view1[".arrGroupsPerPage"] = $arrGPP;

$tdatatempbsicis_view1[".highlightSearchResults"] = true;

$tableKeystempbsicis_view1 = array();
$tableKeystempbsicis_view1[] = "IDCIS";
$tdatatempbsicis_view1[".Keys"] = $tableKeystempbsicis_view1;


$tdatatempbsicis_view1[".hideMobileList"] = array();




//	CIS_AREA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CIS_AREA";
	$fdata["GoodName"] = "CIS_AREA";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIS_view1","CIS_AREA");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CIS_AREA";

		$fdata["sourceSingle"] = "CIS_AREA";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CIS_AREA";

	
	
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


	$tdatatempbsicis_view1["CIS_AREA"] = $fdata;
		$tdatatempbsicis_view1[".searchableFields"][] = "CIS_AREA";
//	Cabang
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Cabang";
	$fdata["GoodName"] = "Cabang";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIS_view1","Cabang");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "KODECABANG";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "KODECABANG";

	
	
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
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "getbsibranch";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "IDBRANCH";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "BRANCHNAME";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
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


	$tdatatempbsicis_view1["Cabang"] = $fdata;
		$tdatatempbsicis_view1[".searchableFields"][] = "Cabang";
//	Periode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Periode";
	$fdata["GoodName"] = "Periode";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIS_view1","Periode");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Periode";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DATE_FORMAT(DATE, \"%M %Y\")";

	
	
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


	$tdatatempbsicis_view1["Periode"] = $fdata;
		$tdatatempbsicis_view1[".searchableFields"][] = "Periode";
//	SUMINSURED
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "SUMINSURED";
	$fdata["GoodName"] = "SUMINSURED";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIS_view1","SUMINSURED");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "SUMINSURED";

		$fdata["sourceSingle"] = "SUMINSURED";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUMINSURED";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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


	$tdatatempbsicis_view1["SUMINSURED"] = $fdata;
		$tdatatempbsicis_view1[".searchableFields"][] = "SUMINSURED";
//	CIS_UPL_USER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "CIS_UPL_USER";
	$fdata["GoodName"] = "CIS_UPL_USER";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIS_view1","CIS_UPL_USER");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CIS_UPL_USER";

		$fdata["sourceSingle"] = "CIS_UPL_USER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CIS_UPL_USER";

	
	
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


	$tdatatempbsicis_view1["CIS_UPL_USER"] = $fdata;
		$tdatatempbsicis_view1[".searchableFields"][] = "CIS_UPL_USER";
//	CIS_UPL_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "CIS_UPL_DATE";
	$fdata["GoodName"] = "CIS_UPL_DATE";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIS_view1","CIS_UPL_DATE");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "CIS_UPL_DATE";

		$fdata["sourceSingle"] = "CIS_UPL_DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CIS_UPL_DATE";

	
	
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


	$tdatatempbsicis_view1["CIS_UPL_DATE"] = $fdata;
		$tdatatempbsicis_view1[".searchableFields"][] = "CIS_UPL_DATE";
//	CIS_FL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "CIS_FL";
	$fdata["GoodName"] = "CIS_FL";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIS_view1","CIS_FL");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CIS_FL";

		$fdata["sourceSingle"] = "CIS_FL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CIS_FL";

	
	
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


	$tdatatempbsicis_view1["CIS_FL"] = $fdata;
		$tdatatempbsicis_view1[".searchableFields"][] = "CIS_FL";
//	IDCIS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "IDCIS";
	$fdata["GoodName"] = "IDCIS";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIS_view1","IDCIS");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "IDCIS";

		$fdata["sourceSingle"] = "IDCIS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IDCIS";

	
	
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


	$tdatatempbsicis_view1["IDCIS"] = $fdata;
		$tdatatempbsicis_view1[".searchableFields"][] = "IDCIS";
//	CIS_TOKEN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "CIS_TOKEN";
	$fdata["GoodName"] = "CIS_TOKEN";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIS_view1","CIS_TOKEN");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CIS_TOKEN";

		$fdata["sourceSingle"] = "CIS_TOKEN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CIS_TOKEN";

	
	
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


	$tdatatempbsicis_view1["CIS_TOKEN"] = $fdata;
		$tdatatempbsicis_view1[".searchableFields"][] = "CIS_TOKEN";
//	CIS_REGION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "CIS_REGION";
	$fdata["GoodName"] = "CIS_REGION";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIS_view1","CIS_REGION");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CIS_REGION";

		$fdata["sourceSingle"] = "CIS_REGION";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CIS_REGION";

	
	
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


	$tdatatempbsicis_view1["CIS_REGION"] = $fdata;
		$tdatatempbsicis_view1[".searchableFields"][] = "CIS_REGION";


$tables_data["TEMPBSICIS_view1"]=&$tdatatempbsicis_view1;
$field_labels["TEMPBSICIS_view1"] = &$fieldLabelstempbsicis_view1;
$fieldToolTips["TEMPBSICIS_view1"] = &$fieldToolTipstempbsicis_view1;
$placeHolders["TEMPBSICIS_view1"] = &$placeHolderstempbsicis_view1;
$page_titles["TEMPBSICIS_view1"] = &$pageTitlestempbsicis_view1;


changeTextControlsToDate( "TEMPBSICIS_view1" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["TEMPBSICIS_view1"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["TEMPBSICIS_view1"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tempbsicis_view1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CIS_AREA,  KODECABANG as Cabang,  DATE_FORMAT(DATE, \"%M %Y\") as Periode,  SUMINSURED,  CIS_UPL_USER,  CIS_UPL_DATE,  CIS_FL,  IDCIS,  CIS_TOKEN,  CIS_REGION";
$proto0["m_strFrom"] = "FROM TEMPBSICIS";
$proto0["m_strWhere"] = "(KODECABANG = ':session.IdExt')";
$proto0["m_strOrderBy"] = "ORDER BY SUMINSURED DESC";
	
																												;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "KODECABANG = ':session.IdExt'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "KODECABANG",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS_view1"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= ':session.IdExt'";
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
	"m_strName" => "CIS_AREA",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS_view1"
));

$proto6["m_sql"] = "CIS_AREA";
$proto6["m_srcTableName"] = "TEMPBSICIS_view1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "KODECABANG",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS_view1"
));

$proto8["m_sql"] = "KODECABANG";
$proto8["m_srcTableName"] = "TEMPBSICIS_view1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "Cabang";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$proto11=array();
$proto11["m_functiontype"] = "SQLF_CUSTOM";
$proto11["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "DATE"
));

$proto11["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%M %Y\""
));

$proto11["m_arguments"][]=$obj;
$proto11["m_strFunctionName"] = "DATE_FORMAT";
$obj = new SQLFunctionCall($proto11);

$proto10["m_sql"] = "DATE_FORMAT(DATE, \"%M %Y\")";
$proto10["m_srcTableName"] = "TEMPBSICIS_view1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "Periode";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "SUMINSURED",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS_view1"
));

$proto14["m_sql"] = "SUMINSURED";
$proto14["m_srcTableName"] = "TEMPBSICIS_view1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "CIS_UPL_USER",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS_view1"
));

$proto16["m_sql"] = "CIS_UPL_USER";
$proto16["m_srcTableName"] = "TEMPBSICIS_view1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "CIS_UPL_DATE",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS_view1"
));

$proto18["m_sql"] = "CIS_UPL_DATE";
$proto18["m_srcTableName"] = "TEMPBSICIS_view1";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "CIS_FL",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS_view1"
));

$proto20["m_sql"] = "CIS_FL";
$proto20["m_srcTableName"] = "TEMPBSICIS_view1";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "IDCIS",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS_view1"
));

$proto22["m_sql"] = "IDCIS";
$proto22["m_srcTableName"] = "TEMPBSICIS_view1";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "CIS_TOKEN",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS_view1"
));

$proto24["m_sql"] = "CIS_TOKEN";
$proto24["m_srcTableName"] = "TEMPBSICIS_view1";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "CIS_REGION",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS_view1"
));

$proto26["m_sql"] = "CIS_REGION";
$proto26["m_srcTableName"] = "TEMPBSICIS_view1";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "TEMPBSICIS";
$proto29["m_srcTableName"] = "TEMPBSICIS_view1";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "IDCIS";
$proto29["m_columns"][] = "CIS_TOKEN";
$proto29["m_columns"][] = "CIS_REGION";
$proto29["m_columns"][] = "CIS_AREA";
$proto29["m_columns"][] = "KODECABANG";
$proto29["m_columns"][] = "DATE";
$proto29["m_columns"][] = "SUMINSURED";
$proto29["m_columns"][] = "CIS_UPL_USER";
$proto29["m_columns"][] = "CIS_UPL_DATE";
$proto29["m_columns"][] = "CIS_FL";
$proto29["m_columns"][] = "CIS_BSMID";
$proto29["m_columns"][] = "CIS_PROPOSAL";
$proto29["m_columns"][] = "CIS_PREMI";
$proto29["m_columns"][] = "CIS_PERIODE_END";
$proto29["m_columns"][] = "CIS_RATE";
$proto29["m_columns"][] = "CIS_LIMIT";
$proto29["m_columns"][] = "CIS_TIPE";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "TEMPBSICIS";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "TEMPBSICIS_view1";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto32=array();
						$obj = new SQLField(array(
	"m_strName" => "SUMINSURED",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS_view1"
));

$proto32["m_column"]=$obj;
$proto32["m_bAsc"] = 0;
$proto32["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto32);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="TEMPBSICIS_view1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tempbsicis_view1 = createSqlQuery_tempbsicis_view1();


	
																												;

										

$tdatatempbsicis_view1[".sqlquery"] = $queryData_tempbsicis_view1;



$tdatatempbsicis_view1[".hasEvents"] = false;

?>