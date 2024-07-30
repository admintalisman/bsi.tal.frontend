<?php
$tdatatempbsicis_atm = array();
$tdatatempbsicis_atm[".searchableFields"] = array();
$tdatatempbsicis_atm[".ShortName"] = "tempbsicis_atm";
$tdatatempbsicis_atm[".OwnerID"] = "";
$tdatatempbsicis_atm[".OriginalTable"] = "TEMPBSICIS";


$tdatatempbsicis_atm[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatempbsicis_atm[".originalPagesByType"] = $tdatatempbsicis_atm[".pagesByType"];
$tdatatempbsicis_atm[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatempbsicis_atm[".originalPages"] = $tdatatempbsicis_atm[".pages"];
$tdatatempbsicis_atm[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"import\":\"import\",\"list\":\"list\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatempbsicis_atm[".originalDefaultPages"] = $tdatatempbsicis_atm[".defaultPages"];

//	field labels
$fieldLabelstempbsicis_atm = array();
$fieldToolTipstempbsicis_atm = array();
$pageTitlestempbsicis_atm = array();
$placeHolderstempbsicis_atm = array();

if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelstempbsicis_atm["Indonesian"] = array();
	$fieldToolTipstempbsicis_atm["Indonesian"] = array();
	$placeHolderstempbsicis_atm["Indonesian"] = array();
	$pageTitlestempbsicis_atm["Indonesian"] = array();
	$fieldLabelstempbsicis_atm["Indonesian"]["IDCIS"] = "IDCIS";
	$fieldToolTipstempbsicis_atm["Indonesian"]["IDCIS"] = "";
	$placeHolderstempbsicis_atm["Indonesian"]["IDCIS"] = "";
	$fieldLabelstempbsicis_atm["Indonesian"]["CIS_TOKEN"] = "CIS TOKEN";
	$fieldToolTipstempbsicis_atm["Indonesian"]["CIS_TOKEN"] = "";
	$placeHolderstempbsicis_atm["Indonesian"]["CIS_TOKEN"] = "";
	$fieldLabelstempbsicis_atm["Indonesian"]["CIS_REGION"] = "Region";
	$fieldToolTipstempbsicis_atm["Indonesian"]["CIS_REGION"] = "";
	$placeHolderstempbsicis_atm["Indonesian"]["CIS_REGION"] = "";
	$fieldLabelstempbsicis_atm["Indonesian"]["CIS_AREA"] = "Area";
	$fieldToolTipstempbsicis_atm["Indonesian"]["CIS_AREA"] = "";
	$placeHolderstempbsicis_atm["Indonesian"]["CIS_AREA"] = "";
	$fieldLabelstempbsicis_atm["Indonesian"]["KODECABANG"] = "Kantor Cabang BSI";
	$fieldToolTipstempbsicis_atm["Indonesian"]["KODECABANG"] = "";
	$placeHolderstempbsicis_atm["Indonesian"]["KODECABANG"] = "";
	$fieldLabelstempbsicis_atm["Indonesian"]["DATE"] = "Tanggal Periode (Awal)";
	$fieldToolTipstempbsicis_atm["Indonesian"]["DATE"] = "";
	$placeHolderstempbsicis_atm["Indonesian"]["DATE"] = "";
	$fieldLabelstempbsicis_atm["Indonesian"]["SUMINSURED"] = "Sum Insured";
	$fieldToolTipstempbsicis_atm["Indonesian"]["SUMINSURED"] = "";
	$placeHolderstempbsicis_atm["Indonesian"]["SUMINSURED"] = "";
	$fieldLabelstempbsicis_atm["Indonesian"]["CIS_UPL_USER"] = "CIS UPL USER";
	$fieldToolTipstempbsicis_atm["Indonesian"]["CIS_UPL_USER"] = "";
	$placeHolderstempbsicis_atm["Indonesian"]["CIS_UPL_USER"] = "";
	$fieldLabelstempbsicis_atm["Indonesian"]["CIS_UPL_DATE"] = "CIS UPL DATE";
	$fieldToolTipstempbsicis_atm["Indonesian"]["CIS_UPL_DATE"] = "";
	$placeHolderstempbsicis_atm["Indonesian"]["CIS_UPL_DATE"] = "";
	$fieldLabelstempbsicis_atm["Indonesian"]["CIS_FL"] = "Status";
	$fieldToolTipstempbsicis_atm["Indonesian"]["CIS_FL"] = "";
	$placeHolderstempbsicis_atm["Indonesian"]["CIS_FL"] = "";
	$fieldLabelstempbsicis_atm["Indonesian"]["CIS_TIPE"] = "Tipe CIS";
	$fieldToolTipstempbsicis_atm["Indonesian"]["CIS_TIPE"] = "";
	$placeHolderstempbsicis_atm["Indonesian"]["CIS_TIPE"] = "";
	if (count($fieldToolTipstempbsicis_atm["Indonesian"]))
		$tdatatempbsicis_atm[".isUseToolTips"] = true;
}


	$tdatatempbsicis_atm[".NCSearch"] = true;



$tdatatempbsicis_atm[".shortTableName"] = "tempbsicis_atm";
$tdatatempbsicis_atm[".nSecOptions"] = 0;

$tdatatempbsicis_atm[".mainTableOwnerID"] = "";
$tdatatempbsicis_atm[".entityType"] = 1;
$tdatatempbsicis_atm[".connId"] = "u736239518_btn_at_154_41_241_2";


$tdatatempbsicis_atm[".strOriginalTableName"] = "TEMPBSICIS";

	



$tdatatempbsicis_atm[".showAddInPopup"] = false;

$tdatatempbsicis_atm[".showEditInPopup"] = false;

$tdatatempbsicis_atm[".showViewInPopup"] = false;

$tdatatempbsicis_atm[".listAjax"] = false;
//	temporary
//$tdatatempbsicis_atm[".listAjax"] = false;

	$tdatatempbsicis_atm[".audit"] = false;

	$tdatatempbsicis_atm[".locking"] = false;


$pages = $tdatatempbsicis_atm[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatempbsicis_atm[".edit"] = true;
	$tdatatempbsicis_atm[".afterEditAction"] = 0;
	$tdatatempbsicis_atm[".closePopupAfterEdit"] = 1;
	$tdatatempbsicis_atm[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatatempbsicis_atm[".add"] = true;
$tdatatempbsicis_atm[".afterAddAction"] = 1;
$tdatatempbsicis_atm[".closePopupAfterAdd"] = 1;
$tdatatempbsicis_atm[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatempbsicis_atm[".list"] = true;
}



$tdatatempbsicis_atm[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatempbsicis_atm[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatempbsicis_atm[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatempbsicis_atm[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatempbsicis_atm[".printFriendly"] = true;
}



$tdatatempbsicis_atm[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatempbsicis_atm[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatempbsicis_atm[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatempbsicis_atm[".isUseAjaxSuggest"] = true;



																											

$tdatatempbsicis_atm[".ajaxCodeSnippetAdded"] = false;

$tdatatempbsicis_atm[".buttonsAdded"] = false;

$tdatatempbsicis_atm[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatempbsicis_atm[".isUseTimeForSearch"] = false;


$tdatatempbsicis_atm[".badgeColor"] = "CD853F";


$tdatatempbsicis_atm[".allSearchFields"] = array();
$tdatatempbsicis_atm[".filterFields"] = array();
$tdatatempbsicis_atm[".requiredSearchFields"] = array();

$tdatatempbsicis_atm[".googleLikeFields"] = array();
$tdatatempbsicis_atm[".googleLikeFields"][] = "IDCIS";
$tdatatempbsicis_atm[".googleLikeFields"][] = "DATE";
$tdatatempbsicis_atm[".googleLikeFields"][] = "KODECABANG";
$tdatatempbsicis_atm[".googleLikeFields"][] = "SUMINSURED";
$tdatatempbsicis_atm[".googleLikeFields"][] = "CIS_UPL_USER";
$tdatatempbsicis_atm[".googleLikeFields"][] = "CIS_UPL_DATE";
$tdatatempbsicis_atm[".googleLikeFields"][] = "CIS_FL";
$tdatatempbsicis_atm[".googleLikeFields"][] = "CIS_REGION";
$tdatatempbsicis_atm[".googleLikeFields"][] = "CIS_AREA";
$tdatatempbsicis_atm[".googleLikeFields"][] = "CIS_TOKEN";
$tdatatempbsicis_atm[".googleLikeFields"][] = "CIS_TIPE";



$tdatatempbsicis_atm[".tableType"] = "list";

$tdatatempbsicis_atm[".printerPageOrientation"] = 0;
$tdatatempbsicis_atm[".nPrinterPageScale"] = 100;

$tdatatempbsicis_atm[".nPrinterSplitRecords"] = 40;

$tdatatempbsicis_atm[".geocodingEnabled"] = false;










$tdatatempbsicis_atm[".pageSize"] = 20;

$tdatatempbsicis_atm[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatempbsicis_atm[".strOrderBy"] = $tstrOrderBy;

$tdatatempbsicis_atm[".orderindexes"] = array();


$tdatatempbsicis_atm[".sqlHead"] = "SELECT IDCIS,  `DATE`,  KODECABANG,  SUMINSURED,  CIS_UPL_USER,  CIS_UPL_DATE,  CIS_FL,  CIS_REGION,  CIS_AREA,  CIS_TOKEN,  CIS_TIPE";
$tdatatempbsicis_atm[".sqlFrom"] = "FROM TEMPBSICIS";
$tdatatempbsicis_atm[".sqlWhereExpr"] = "(CIS_UPL_USER =':session.UserID') AND (date(CIS_UPL_DATE) = date(NOW()) AND (CIS_FL = 0 OR CIS_FL = 2) AND (CIS_TIPE =\"ATM\"))";
$tdatatempbsicis_atm[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatempbsicis_atm[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatempbsicis_atm[".arrGroupsPerPage"] = $arrGPP;

$tdatatempbsicis_atm[".highlightSearchResults"] = true;

$tableKeystempbsicis_atm = array();
$tableKeystempbsicis_atm[] = "IDCIS";
$tdatatempbsicis_atm[".Keys"] = $tableKeystempbsicis_atm;


$tdatatempbsicis_atm[".hideMobileList"] = array();




//	IDCIS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IDCIS";
	$fdata["GoodName"] = "IDCIS";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIS_ATM","IDCIS");
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


	$tdatatempbsicis_atm["IDCIS"] = $fdata;
		$tdatatempbsicis_atm[".searchableFields"][] = "IDCIS";
//	DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DATE";
	$fdata["GoodName"] = "DATE";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIS_ATM","DATE");
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


	$tdatatempbsicis_atm["DATE"] = $fdata;
		$tdatatempbsicis_atm[".searchableFields"][] = "DATE";
//	KODECABANG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "KODECABANG";
	$fdata["GoodName"] = "KODECABANG";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIS_ATM","KODECABANG");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "BSIBRANCH";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "IDBRANCH";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "concat(IDBRANCH,' -  ',BRANCHNAME)";

	

		$edata["CustomDisplay"] = "true";

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


	$tdatatempbsicis_atm["KODECABANG"] = $fdata;
		$tdatatempbsicis_atm[".searchableFields"][] = "KODECABANG";
//	SUMINSURED
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "SUMINSURED";
	$fdata["GoodName"] = "SUMINSURED";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIS_ATM","SUMINSURED");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "SUMINSURED";

		$fdata["sourceSingle"] = "SUMINSURED";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUMINSURED";

	
	
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


	$tdatatempbsicis_atm["SUMINSURED"] = $fdata;
		$tdatatempbsicis_atm[".searchableFields"][] = "SUMINSURED";
//	CIS_UPL_USER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "CIS_UPL_USER";
	$fdata["GoodName"] = "CIS_UPL_USER";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIS_ATM","CIS_UPL_USER");
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


	$tdatatempbsicis_atm["CIS_UPL_USER"] = $fdata;
		$tdatatempbsicis_atm[".searchableFields"][] = "CIS_UPL_USER";
//	CIS_UPL_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "CIS_UPL_DATE";
	$fdata["GoodName"] = "CIS_UPL_DATE";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIS_ATM","CIS_UPL_DATE");
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


	$tdatatempbsicis_atm["CIS_UPL_DATE"] = $fdata;
		$tdatatempbsicis_atm[".searchableFields"][] = "CIS_UPL_DATE";
//	CIS_FL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "CIS_FL";
	$fdata["GoodName"] = "CIS_FL";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIS_ATM","CIS_FL");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CIS_FL";

		$fdata["sourceSingle"] = "CIS_FL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CIS_FL";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatatempbsicis_atm["CIS_FL"] = $fdata;
		$tdatatempbsicis_atm[".searchableFields"][] = "CIS_FL";
//	CIS_REGION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "CIS_REGION";
	$fdata["GoodName"] = "CIS_REGION";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIS_ATM","CIS_REGION");
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


	$tdatatempbsicis_atm["CIS_REGION"] = $fdata;
		$tdatatempbsicis_atm[".searchableFields"][] = "CIS_REGION";
//	CIS_AREA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "CIS_AREA";
	$fdata["GoodName"] = "CIS_AREA";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIS_ATM","CIS_AREA");
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


	$tdatatempbsicis_atm["CIS_AREA"] = $fdata;
		$tdatatempbsicis_atm[".searchableFields"][] = "CIS_AREA";
//	CIS_TOKEN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "CIS_TOKEN";
	$fdata["GoodName"] = "CIS_TOKEN";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIS_ATM","CIS_TOKEN");
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


	$tdatatempbsicis_atm["CIS_TOKEN"] = $fdata;
		$tdatatempbsicis_atm[".searchableFields"][] = "CIS_TOKEN";
//	CIS_TIPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "CIS_TIPE";
	$fdata["GoodName"] = "CIS_TIPE";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIS_ATM","CIS_TIPE");
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


	$tdatatempbsicis_atm["CIS_TIPE"] = $fdata;
		$tdatatempbsicis_atm[".searchableFields"][] = "CIS_TIPE";


$tables_data["TEMPBSICIS_ATM"]=&$tdatatempbsicis_atm;
$field_labels["TEMPBSICIS_ATM"] = &$fieldLabelstempbsicis_atm;
$fieldToolTips["TEMPBSICIS_ATM"] = &$fieldToolTipstempbsicis_atm;
$placeHolders["TEMPBSICIS_ATM"] = &$placeHolderstempbsicis_atm;
$page_titles["TEMPBSICIS_ATM"] = &$pageTitlestempbsicis_atm;


changeTextControlsToDate( "TEMPBSICIS_ATM" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["TEMPBSICIS_ATM"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["TEMPBSICIS_ATM"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tempbsicis_atm()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "IDCIS,  `DATE`,  KODECABANG,  SUMINSURED,  CIS_UPL_USER,  CIS_UPL_DATE,  CIS_FL,  CIS_REGION,  CIS_AREA,  CIS_TOKEN,  CIS_TIPE";
$proto0["m_strFrom"] = "FROM TEMPBSICIS";
$proto0["m_strWhere"] = "(CIS_UPL_USER =':session.UserID') AND (date(CIS_UPL_DATE) = date(NOW()) AND (CIS_FL = 0 OR CIS_FL = 2) AND (CIS_TIPE =\"ATM\"))";
$proto0["m_strOrderBy"] = "";
	
																												;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(CIS_UPL_USER =':session.UserID') AND (date(CIS_UPL_DATE) = date(NOW()) AND (CIS_FL = 0 OR CIS_FL = 2) AND (CIS_TIPE =\"ATM\"))";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(CIS_UPL_USER =':session.UserID') AND (date(CIS_UPL_DATE) = date(NOW()) AND (CIS_FL = 0 OR CIS_FL = 2) AND (CIS_TIPE =\"ATM\"))"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "CIS_UPL_USER =':session.UserID'";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CIS_UPL_USER",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS_ATM"
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
$proto6["m_sql"] = "date(CIS_UPL_DATE) = date(NOW()) AND (CIS_FL = 0 OR CIS_FL = 2) AND (CIS_TIPE =\"ATM\")";
$proto6["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "date(CIS_UPL_DATE) = date(NOW()) AND (CIS_FL = 0 OR CIS_FL = 2) AND (CIS_TIPE =\"ATM\")"
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
$proto11["m_sql"] = "CIS_FL = 0 OR CIS_FL = 2";
$proto11["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "CIS_FL = 0 OR CIS_FL = 2"
));

$proto11["m_column"]=$obj;
$proto11["m_contained"] = array();
						$proto13=array();
$proto13["m_sql"] = "CIS_FL = 0";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CIS_FL",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS_ATM"
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "= 0";
$proto13["m_havingmode"] = false;
$proto13["m_inBrackets"] = false;
$proto13["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto13);

			$proto11["m_contained"][]=$obj;
						$proto15=array();
$proto15["m_sql"] = "CIS_FL = 2";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CIS_FL",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS_ATM"
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "= 2";
$proto15["m_havingmode"] = false;
$proto15["m_inBrackets"] = false;
$proto15["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto15);

			$proto11["m_contained"][]=$obj;
$proto11["m_strCase"] = "";
$proto11["m_havingmode"] = false;
$proto11["m_inBrackets"] = true;
$proto11["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto11);

			$proto6["m_contained"][]=$obj;
						$proto17=array();
$proto17["m_sql"] = "CIS_TIPE =\"ATM\"";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CIS_TIPE",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS_ATM"
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = "=\"ATM\"";
$proto17["m_havingmode"] = false;
$proto17["m_inBrackets"] = true;
$proto17["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto17);

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
$proto19=array();
$proto19["m_sql"] = "";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = "";
$proto19["m_havingmode"] = false;
$proto19["m_inBrackets"] = false;
$proto19["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto19);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "IDCIS",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS_ATM"
));

$proto21["m_sql"] = "IDCIS";
$proto21["m_srcTableName"] = "TEMPBSICIS_ATM";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "DATE",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS_ATM"
));

$proto23["m_sql"] = "`DATE`";
$proto23["m_srcTableName"] = "TEMPBSICIS_ATM";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "KODECABANG",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS_ATM"
));

$proto25["m_sql"] = "KODECABANG";
$proto25["m_srcTableName"] = "TEMPBSICIS_ATM";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "SUMINSURED",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS_ATM"
));

$proto27["m_sql"] = "SUMINSURED";
$proto27["m_srcTableName"] = "TEMPBSICIS_ATM";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "CIS_UPL_USER",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS_ATM"
));

$proto29["m_sql"] = "CIS_UPL_USER";
$proto29["m_srcTableName"] = "TEMPBSICIS_ATM";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "CIS_UPL_DATE",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS_ATM"
));

$proto31["m_sql"] = "CIS_UPL_DATE";
$proto31["m_srcTableName"] = "TEMPBSICIS_ATM";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "CIS_FL",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS_ATM"
));

$proto33["m_sql"] = "CIS_FL";
$proto33["m_srcTableName"] = "TEMPBSICIS_ATM";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "CIS_REGION",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS_ATM"
));

$proto35["m_sql"] = "CIS_REGION";
$proto35["m_srcTableName"] = "TEMPBSICIS_ATM";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "CIS_AREA",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS_ATM"
));

$proto37["m_sql"] = "CIS_AREA";
$proto37["m_srcTableName"] = "TEMPBSICIS_ATM";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "CIS_TOKEN",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS_ATM"
));

$proto39["m_sql"] = "CIS_TOKEN";
$proto39["m_srcTableName"] = "TEMPBSICIS_ATM";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "CIS_TIPE",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS_ATM"
));

$proto41["m_sql"] = "CIS_TIPE";
$proto41["m_srcTableName"] = "TEMPBSICIS_ATM";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto43=array();
$proto43["m_link"] = "SQLL_MAIN";
			$proto44=array();
$proto44["m_strName"] = "TEMPBSICIS";
$proto44["m_srcTableName"] = "TEMPBSICIS_ATM";
$proto44["m_columns"] = array();
$proto44["m_columns"][] = "IDCIS";
$proto44["m_columns"][] = "CIS_TOKEN";
$proto44["m_columns"][] = "CIS_REGION";
$proto44["m_columns"][] = "CIS_AREA";
$proto44["m_columns"][] = "KODECABANG";
$proto44["m_columns"][] = "DATE";
$proto44["m_columns"][] = "SUMINSURED";
$proto44["m_columns"][] = "CIS_UPL_USER";
$proto44["m_columns"][] = "CIS_UPL_DATE";
$proto44["m_columns"][] = "CIS_FL";
$proto44["m_columns"][] = "CIS_BSMID";
$proto44["m_columns"][] = "CIS_PROPOSAL";
$proto44["m_columns"][] = "CIS_PREMI";
$proto44["m_columns"][] = "CIS_PERIODE_END";
$proto44["m_columns"][] = "CIS_RATE";
$proto44["m_columns"][] = "CIS_LIMIT";
$proto44["m_columns"][] = "CIS_TIPE";
$obj = new SQLTable($proto44);

$proto43["m_table"] = $obj;
$proto43["m_sql"] = "TEMPBSICIS";
$proto43["m_alias"] = "";
$proto43["m_srcTableName"] = "TEMPBSICIS_ATM";
$proto45=array();
$proto45["m_sql"] = "";
$proto45["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto45["m_column"]=$obj;
$proto45["m_contained"] = array();
$proto45["m_strCase"] = "";
$proto45["m_havingmode"] = false;
$proto45["m_inBrackets"] = false;
$proto45["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto45);

$proto43["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto43);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="TEMPBSICIS_ATM";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tempbsicis_atm = createSqlQuery_tempbsicis_atm();


	
																												;

											

$tdatatempbsicis_atm[".sqlquery"] = $queryData_tempbsicis_atm;



include_once(getabspath("include/tempbsicis_atm_events.php"));
$tdatatempbsicis_atm[".hasEvents"] = true;

?>