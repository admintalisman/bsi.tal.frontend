<?php
$tdatatempbsicis = array();
$tdatatempbsicis[".searchableFields"] = array();
$tdatatempbsicis[".ShortName"] = "tempbsicis";
$tdatatempbsicis[".OwnerID"] = "";
$tdatatempbsicis[".OriginalTable"] = "TEMPBSICIS";


$tdatatempbsicis[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatempbsicis[".originalPagesByType"] = $tdatatempbsicis[".pagesByType"];
$tdatatempbsicis[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatempbsicis[".originalPages"] = $tdatatempbsicis[".pages"];
$tdatatempbsicis[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatempbsicis[".originalDefaultPages"] = $tdatatempbsicis[".defaultPages"];

//	field labels
$fieldLabelstempbsicis = array();
$fieldToolTipstempbsicis = array();
$pageTitlestempbsicis = array();
$placeHolderstempbsicis = array();

if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelstempbsicis["Indonesian"] = array();
	$fieldToolTipstempbsicis["Indonesian"] = array();
	$placeHolderstempbsicis["Indonesian"] = array();
	$pageTitlestempbsicis["Indonesian"] = array();
	$fieldLabelstempbsicis["Indonesian"]["IDCIS"] = "IDCIS";
	$fieldToolTipstempbsicis["Indonesian"]["IDCIS"] = "";
	$placeHolderstempbsicis["Indonesian"]["IDCIS"] = "";
	$fieldLabelstempbsicis["Indonesian"]["CIS_UPL_USER"] = "User Upload";
	$fieldToolTipstempbsicis["Indonesian"]["CIS_UPL_USER"] = "";
	$placeHolderstempbsicis["Indonesian"]["CIS_UPL_USER"] = "";
	$fieldLabelstempbsicis["Indonesian"]["CIS_UPL_DATE"] = "Tanggal Upload";
	$fieldToolTipstempbsicis["Indonesian"]["CIS_UPL_DATE"] = "";
	$placeHolderstempbsicis["Indonesian"]["CIS_UPL_DATE"] = "";
	$fieldLabelstempbsicis["Indonesian"]["DATE"] = "DATE";
	$fieldToolTipstempbsicis["Indonesian"]["DATE"] = "";
	$placeHolderstempbsicis["Indonesian"]["DATE"] = "";
	$fieldLabelstempbsicis["Indonesian"]["KODECABANG"] = "KODECABANG";
	$fieldToolTipstempbsicis["Indonesian"]["KODECABANG"] = "";
	$placeHolderstempbsicis["Indonesian"]["KODECABANG"] = "";
	$fieldLabelstempbsicis["Indonesian"]["SUMINSURED"] = "SUMINSURED";
	$fieldToolTipstempbsicis["Indonesian"]["SUMINSURED"] = "";
	$placeHolderstempbsicis["Indonesian"]["SUMINSURED"] = "";
	$fieldLabelstempbsicis["Indonesian"]["CIS_FL"] = "CIS FL";
	$fieldToolTipstempbsicis["Indonesian"]["CIS_FL"] = "";
	$placeHolderstempbsicis["Indonesian"]["CIS_FL"] = "";
	$fieldLabelstempbsicis["Indonesian"]["CIS_REGION"] = "REGION";
	$fieldToolTipstempbsicis["Indonesian"]["CIS_REGION"] = "";
	$placeHolderstempbsicis["Indonesian"]["CIS_REGION"] = "";
	$fieldLabelstempbsicis["Indonesian"]["CIS_AREA"] = "AREA";
	$fieldToolTipstempbsicis["Indonesian"]["CIS_AREA"] = "";
	$placeHolderstempbsicis["Indonesian"]["CIS_AREA"] = "";
	$fieldLabelstempbsicis["Indonesian"]["CIS_TOKEN"] = "CIS TOKEN";
	$fieldToolTipstempbsicis["Indonesian"]["CIS_TOKEN"] = "";
	$placeHolderstempbsicis["Indonesian"]["CIS_TOKEN"] = "";
	$fieldLabelstempbsicis["Indonesian"]["CIS_TIPE"] = "CIS TIPE";
	$fieldToolTipstempbsicis["Indonesian"]["CIS_TIPE"] = "";
	$placeHolderstempbsicis["Indonesian"]["CIS_TIPE"] = "";
	if (count($fieldToolTipstempbsicis["Indonesian"]))
		$tdatatempbsicis[".isUseToolTips"] = true;
}


	$tdatatempbsicis[".NCSearch"] = true;



$tdatatempbsicis[".shortTableName"] = "tempbsicis";
$tdatatempbsicis[".nSecOptions"] = 0;

$tdatatempbsicis[".mainTableOwnerID"] = "";
$tdatatempbsicis[".entityType"] = 0;
$tdatatempbsicis[".connId"] = "u736239518_btn_at_154_41_241_2";


$tdatatempbsicis[".strOriginalTableName"] = "TEMPBSICIS";

	



$tdatatempbsicis[".showAddInPopup"] = false;

$tdatatempbsicis[".showEditInPopup"] = false;

$tdatatempbsicis[".showViewInPopup"] = false;

$tdatatempbsicis[".listAjax"] = false;
//	temporary
//$tdatatempbsicis[".listAjax"] = false;

	$tdatatempbsicis[".audit"] = true;

	$tdatatempbsicis[".locking"] = false;


$pages = $tdatatempbsicis[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatempbsicis[".edit"] = true;
	$tdatatempbsicis[".afterEditAction"] = 1;
	$tdatatempbsicis[".closePopupAfterEdit"] = 1;
	$tdatatempbsicis[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatempbsicis[".add"] = true;
$tdatatempbsicis[".afterAddAction"] = 1;
$tdatatempbsicis[".closePopupAfterAdd"] = 1;
$tdatatempbsicis[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatempbsicis[".list"] = true;
}



$tdatatempbsicis[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatempbsicis[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatempbsicis[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatempbsicis[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatempbsicis[".printFriendly"] = true;
}



$tdatatempbsicis[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatempbsicis[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatempbsicis[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatempbsicis[".isUseAjaxSuggest"] = true;



																											

$tdatatempbsicis[".ajaxCodeSnippetAdded"] = false;

$tdatatempbsicis[".buttonsAdded"] = false;

$tdatatempbsicis[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatempbsicis[".isUseTimeForSearch"] = false;


$tdatatempbsicis[".badgeColor"] = "E8926F";


$tdatatempbsicis[".allSearchFields"] = array();
$tdatatempbsicis[".filterFields"] = array();
$tdatatempbsicis[".requiredSearchFields"] = array();

$tdatatempbsicis[".googleLikeFields"] = array();
$tdatatempbsicis[".googleLikeFields"][] = "IDCIS";
$tdatatempbsicis[".googleLikeFields"][] = "DATE";
$tdatatempbsicis[".googleLikeFields"][] = "KODECABANG";
$tdatatempbsicis[".googleLikeFields"][] = "SUMINSURED";
$tdatatempbsicis[".googleLikeFields"][] = "CIS_UPL_USER";
$tdatatempbsicis[".googleLikeFields"][] = "CIS_UPL_DATE";
$tdatatempbsicis[".googleLikeFields"][] = "CIS_FL";
$tdatatempbsicis[".googleLikeFields"][] = "CIS_REGION";
$tdatatempbsicis[".googleLikeFields"][] = "CIS_AREA";
$tdatatempbsicis[".googleLikeFields"][] = "CIS_TOKEN";
$tdatatempbsicis[".googleLikeFields"][] = "CIS_TIPE";



$tdatatempbsicis[".tableType"] = "list";

$tdatatempbsicis[".printerPageOrientation"] = 0;
$tdatatempbsicis[".nPrinterPageScale"] = 100;

$tdatatempbsicis[".nPrinterSplitRecords"] = 40;

$tdatatempbsicis[".geocodingEnabled"] = false;




$tdatatempbsicis[".isDisplayLoading"] = true;






$tdatatempbsicis[".pageSize"] = 20;

$tdatatempbsicis[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatempbsicis[".strOrderBy"] = $tstrOrderBy;

$tdatatempbsicis[".orderindexes"] = array();


$tdatatempbsicis[".sqlHead"] = "SELECT IDCIS,  `DATE`,  KODECABANG,  SUMINSURED,  CIS_UPL_USER,  CIS_UPL_DATE,  CIS_FL,  CIS_REGION,  CIS_AREA,  CIS_TOKEN,  CIS_TIPE";
$tdatatempbsicis[".sqlFrom"] = "FROM TEMPBSICIS";
$tdatatempbsicis[".sqlWhereExpr"] = "(CIS_UPL_USER =':session.UserID') AND (date(CIS_UPL_DATE) = date(NOW()) AND CIS_FL =0)";
$tdatatempbsicis[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatempbsicis[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatempbsicis[".arrGroupsPerPage"] = $arrGPP;

$tdatatempbsicis[".highlightSearchResults"] = true;

$tableKeystempbsicis = array();
$tableKeystempbsicis[] = "IDCIS";
$tdatatempbsicis[".Keys"] = $tableKeystempbsicis;


$tdatatempbsicis[".hideMobileList"] = array();




//	IDCIS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IDCIS";
	$fdata["GoodName"] = "IDCIS";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIS","IDCIS");
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


	$tdatatempbsicis["IDCIS"] = $fdata;
		$tdatatempbsicis[".searchableFields"][] = "IDCIS";
//	DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DATE";
	$fdata["GoodName"] = "DATE";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIS","DATE");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "DATE";

		$fdata["sourceSingle"] = "DATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`DATE`";

	
	
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


	$tdatatempbsicis["DATE"] = $fdata;
		$tdatatempbsicis[".searchableFields"][] = "DATE";
//	KODECABANG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "KODECABANG";
	$fdata["GoodName"] = "KODECABANG";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIS","KODECABANG");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "KODECABANG";

		$fdata["sourceSingle"] = "KODECABANG";

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


	$tdatatempbsicis["KODECABANG"] = $fdata;
		$tdatatempbsicis[".searchableFields"][] = "KODECABANG";
//	SUMINSURED
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "SUMINSURED";
	$fdata["GoodName"] = "SUMINSURED";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIS","SUMINSURED");
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
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Currency");
							
	
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


	$tdatatempbsicis["SUMINSURED"] = $fdata;
		$tdatatempbsicis[".searchableFields"][] = "SUMINSURED";
//	CIS_UPL_USER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "CIS_UPL_USER";
	$fdata["GoodName"] = "CIS_UPL_USER";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIS","CIS_UPL_USER");
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


	$tdatatempbsicis["CIS_UPL_USER"] = $fdata;
		$tdatatempbsicis[".searchableFields"][] = "CIS_UPL_USER";
//	CIS_UPL_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "CIS_UPL_DATE";
	$fdata["GoodName"] = "CIS_UPL_DATE";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIS","CIS_UPL_DATE");
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


	$tdatatempbsicis["CIS_UPL_DATE"] = $fdata;
		$tdatatempbsicis[".searchableFields"][] = "CIS_UPL_DATE";
//	CIS_FL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "CIS_FL";
	$fdata["GoodName"] = "CIS_FL";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIS","CIS_FL");
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


	$tdatatempbsicis["CIS_FL"] = $fdata;
		$tdatatempbsicis[".searchableFields"][] = "CIS_FL";
//	CIS_REGION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "CIS_REGION";
	$fdata["GoodName"] = "CIS_REGION";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIS","CIS_REGION");
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


	$tdatatempbsicis["CIS_REGION"] = $fdata;
		$tdatatempbsicis[".searchableFields"][] = "CIS_REGION";
//	CIS_AREA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "CIS_AREA";
	$fdata["GoodName"] = "CIS_AREA";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIS","CIS_AREA");
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


	$tdatatempbsicis["CIS_AREA"] = $fdata;
		$tdatatempbsicis[".searchableFields"][] = "CIS_AREA";
//	CIS_TOKEN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "CIS_TOKEN";
	$fdata["GoodName"] = "CIS_TOKEN";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIS","CIS_TOKEN");
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


	$tdatatempbsicis["CIS_TOKEN"] = $fdata;
		$tdatatempbsicis[".searchableFields"][] = "CIS_TOKEN";
//	CIS_TIPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "CIS_TIPE";
	$fdata["GoodName"] = "CIS_TIPE";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIS","CIS_TIPE");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CIS_TIPE";

		$fdata["sourceSingle"] = "CIS_TIPE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CIS_TIPE";

	
	
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


	$tdatatempbsicis["CIS_TIPE"] = $fdata;
		$tdatatempbsicis[".searchableFields"][] = "CIS_TIPE";


$tables_data["TEMPBSICIS"]=&$tdatatempbsicis;
$field_labels["TEMPBSICIS"] = &$fieldLabelstempbsicis;
$fieldToolTips["TEMPBSICIS"] = &$fieldToolTipstempbsicis;
$placeHolders["TEMPBSICIS"] = &$placeHolderstempbsicis;
$page_titles["TEMPBSICIS"] = &$pageTitlestempbsicis;


changeTextControlsToDate( "TEMPBSICIS" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["TEMPBSICIS"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["TEMPBSICIS"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tempbsicis()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "IDCIS,  `DATE`,  KODECABANG,  SUMINSURED,  CIS_UPL_USER,  CIS_UPL_DATE,  CIS_FL,  CIS_REGION,  CIS_AREA,  CIS_TOKEN,  CIS_TIPE";
$proto0["m_strFrom"] = "FROM TEMPBSICIS";
$proto0["m_strWhere"] = "(CIS_UPL_USER =':session.UserID') AND (date(CIS_UPL_DATE) = date(NOW()) AND CIS_FL =0)";
$proto0["m_strOrderBy"] = "";
	
																												;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(CIS_UPL_USER =':session.UserID') AND (date(CIS_UPL_DATE) = date(NOW()) AND CIS_FL =0)";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(CIS_UPL_USER =':session.UserID') AND (date(CIS_UPL_DATE) = date(NOW()) AND CIS_FL =0)"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "CIS_UPL_USER =':session.UserID'";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CIS_UPL_USER",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "=':session.UserID'";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "date(CIS_UPL_DATE) = date(NOW()) AND CIS_FL =0";
$proto6["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "date(CIS_UPL_DATE) = date(NOW()) AND CIS_FL =0"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
						$proto8=array();
$proto8["m_sql"] = "date(CIS_UPL_DATE) = date(NOW())";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
						$proto9=array();
$proto9["m_functiontype"] = "SQLF_CUSTOM";
$proto9["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "CIS_UPL_DATE"
));

$proto9["m_arguments"][]=$obj;
$proto9["m_strFunctionName"] = "date";
$obj = new SQLFunctionCall($proto9);

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "= date(NOW())";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

			$proto6["m_contained"][]=$obj;
						$proto11=array();
$proto11["m_sql"] = "CIS_FL =0";
$proto11["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CIS_FL",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS"
));

$proto11["m_column"]=$obj;
$proto11["m_contained"] = array();
$proto11["m_strCase"] = "=0";
$proto11["m_havingmode"] = false;
$proto11["m_inBrackets"] = false;
$proto11["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto11);

			$proto6["m_contained"][]=$obj;
$proto6["m_strCase"] = "";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = true;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto13=array();
$proto13["m_sql"] = "";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "";
$proto13["m_havingmode"] = false;
$proto13["m_inBrackets"] = false;
$proto13["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto13);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "IDCIS",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS"
));

$proto15["m_sql"] = "IDCIS";
$proto15["m_srcTableName"] = "TEMPBSICIS";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "DATE",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS"
));

$proto17["m_sql"] = "`DATE`";
$proto17["m_srcTableName"] = "TEMPBSICIS";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "KODECABANG",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS"
));

$proto19["m_sql"] = "KODECABANG";
$proto19["m_srcTableName"] = "TEMPBSICIS";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "SUMINSURED",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS"
));

$proto21["m_sql"] = "SUMINSURED";
$proto21["m_srcTableName"] = "TEMPBSICIS";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "CIS_UPL_USER",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS"
));

$proto23["m_sql"] = "CIS_UPL_USER";
$proto23["m_srcTableName"] = "TEMPBSICIS";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "CIS_UPL_DATE",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS"
));

$proto25["m_sql"] = "CIS_UPL_DATE";
$proto25["m_srcTableName"] = "TEMPBSICIS";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "CIS_FL",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS"
));

$proto27["m_sql"] = "CIS_FL";
$proto27["m_srcTableName"] = "TEMPBSICIS";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "CIS_REGION",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS"
));

$proto29["m_sql"] = "CIS_REGION";
$proto29["m_srcTableName"] = "TEMPBSICIS";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "CIS_AREA",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS"
));

$proto31["m_sql"] = "CIS_AREA";
$proto31["m_srcTableName"] = "TEMPBSICIS";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "CIS_TOKEN",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS"
));

$proto33["m_sql"] = "CIS_TOKEN";
$proto33["m_srcTableName"] = "TEMPBSICIS";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "CIS_TIPE",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS"
));

$proto35["m_sql"] = "CIS_TIPE";
$proto35["m_srcTableName"] = "TEMPBSICIS";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto37=array();
$proto37["m_link"] = "SQLL_MAIN";
			$proto38=array();
$proto38["m_strName"] = "TEMPBSICIS";
$proto38["m_srcTableName"] = "TEMPBSICIS";
$proto38["m_columns"] = array();
$proto38["m_columns"][] = "IDCIS";
$proto38["m_columns"][] = "CIS_TOKEN";
$proto38["m_columns"][] = "CIS_REGION";
$proto38["m_columns"][] = "CIS_AREA";
$proto38["m_columns"][] = "KODECABANG";
$proto38["m_columns"][] = "DATE";
$proto38["m_columns"][] = "SUMINSURED";
$proto38["m_columns"][] = "CIS_UPL_USER";
$proto38["m_columns"][] = "CIS_UPL_DATE";
$proto38["m_columns"][] = "CIS_FL";
$proto38["m_columns"][] = "CIS_BSMID";
$proto38["m_columns"][] = "CIS_PROPOSAL";
$proto38["m_columns"][] = "CIS_PREMI";
$proto38["m_columns"][] = "CIS_PERIODE_END";
$proto38["m_columns"][] = "CIS_RATE";
$proto38["m_columns"][] = "CIS_LIMIT";
$proto38["m_columns"][] = "CIS_TIPE";
$obj = new SQLTable($proto38);

$proto37["m_table"] = $obj;
$proto37["m_sql"] = "TEMPBSICIS";
$proto37["m_alias"] = "";
$proto37["m_srcTableName"] = "TEMPBSICIS";
$proto39=array();
$proto39["m_sql"] = "";
$proto39["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto39["m_column"]=$obj;
$proto39["m_contained"] = array();
$proto39["m_strCase"] = "";
$proto39["m_havingmode"] = false;
$proto39["m_inBrackets"] = false;
$proto39["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto39);

$proto37["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto37);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="TEMPBSICIS";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tempbsicis = createSqlQuery_tempbsicis();


	
																												;

											

$tdatatempbsicis[".sqlquery"] = $queryData_tempbsicis;



include_once(getabspath("include/tempbsicis_events.php"));
$tdatatempbsicis[".hasEvents"] = true;

?>