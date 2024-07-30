<?php
$tdatatempbsicis_ol = array();
$tdatatempbsicis_ol[".searchableFields"] = array();
$tdatatempbsicis_ol[".ShortName"] = "tempbsicis_ol";
$tdatatempbsicis_ol[".OwnerID"] = "";
$tdatatempbsicis_ol[".OriginalTable"] = "TEMPBSICIS";


$tdatatempbsicis_ol[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatempbsicis_ol[".originalPagesByType"] = $tdatatempbsicis_ol[".pagesByType"];
$tdatatempbsicis_ol[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatempbsicis_ol[".originalPages"] = $tdatatempbsicis_ol[".pages"];
$tdatatempbsicis_ol[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatempbsicis_ol[".originalDefaultPages"] = $tdatatempbsicis_ol[".defaultPages"];

//	field labels
$fieldLabelstempbsicis_ol = array();
$fieldToolTipstempbsicis_ol = array();
$pageTitlestempbsicis_ol = array();
$placeHolderstempbsicis_ol = array();

if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelstempbsicis_ol["Indonesian"] = array();
	$fieldToolTipstempbsicis_ol["Indonesian"] = array();
	$placeHolderstempbsicis_ol["Indonesian"] = array();
	$pageTitlestempbsicis_ol["Indonesian"] = array();
	$fieldLabelstempbsicis_ol["Indonesian"]["IDCIS"] = "IDCIS";
	$fieldToolTipstempbsicis_ol["Indonesian"]["IDCIS"] = "";
	$placeHolderstempbsicis_ol["Indonesian"]["IDCIS"] = "";
	$fieldLabelstempbsicis_ol["Indonesian"]["CIS_TOKEN"] = "CIS TOKEN";
	$fieldToolTipstempbsicis_ol["Indonesian"]["CIS_TOKEN"] = "";
	$placeHolderstempbsicis_ol["Indonesian"]["CIS_TOKEN"] = "";
	$fieldLabelstempbsicis_ol["Indonesian"]["CIS_REGION"] = "CIS REGION";
	$fieldToolTipstempbsicis_ol["Indonesian"]["CIS_REGION"] = "";
	$placeHolderstempbsicis_ol["Indonesian"]["CIS_REGION"] = "";
	$fieldLabelstempbsicis_ol["Indonesian"]["CIS_AREA"] = "CIS AREA";
	$fieldToolTipstempbsicis_ol["Indonesian"]["CIS_AREA"] = "";
	$placeHolderstempbsicis_ol["Indonesian"]["CIS_AREA"] = "";
	$fieldLabelstempbsicis_ol["Indonesian"]["KODECABANG"] = "Kantor Cabang BSI";
	$fieldToolTipstempbsicis_ol["Indonesian"]["KODECABANG"] = "";
	$placeHolderstempbsicis_ol["Indonesian"]["KODECABANG"] = "";
	$fieldLabelstempbsicis_ol["Indonesian"]["DATE"] = "Tanggal Periode (Awal)";
	$fieldToolTipstempbsicis_ol["Indonesian"]["DATE"] = "";
	$placeHolderstempbsicis_ol["Indonesian"]["DATE"] = "";
	$fieldLabelstempbsicis_ol["Indonesian"]["SUMINSURED"] = "Sum Insured";
	$fieldToolTipstempbsicis_ol["Indonesian"]["SUMINSURED"] = "";
	$placeHolderstempbsicis_ol["Indonesian"]["SUMINSURED"] = "";
	$fieldLabelstempbsicis_ol["Indonesian"]["CIS_UPL_USER"] = "User Upload";
	$fieldToolTipstempbsicis_ol["Indonesian"]["CIS_UPL_USER"] = "";
	$placeHolderstempbsicis_ol["Indonesian"]["CIS_UPL_USER"] = "";
	$fieldLabelstempbsicis_ol["Indonesian"]["CIS_UPL_DATE"] = "Tanggal Upload";
	$fieldToolTipstempbsicis_ol["Indonesian"]["CIS_UPL_DATE"] = "";
	$placeHolderstempbsicis_ol["Indonesian"]["CIS_UPL_DATE"] = "";
	$fieldLabelstempbsicis_ol["Indonesian"]["CIS_FL"] = "Status";
	$fieldToolTipstempbsicis_ol["Indonesian"]["CIS_FL"] = "";
	$placeHolderstempbsicis_ol["Indonesian"]["CIS_FL"] = "";
	$fieldLabelstempbsicis_ol["Indonesian"]["CIS_TIPE"] = "Tipe CIS";
	$fieldToolTipstempbsicis_ol["Indonesian"]["CIS_TIPE"] = "";
	$placeHolderstempbsicis_ol["Indonesian"]["CIS_TIPE"] = "";
	if (count($fieldToolTipstempbsicis_ol["Indonesian"]))
		$tdatatempbsicis_ol[".isUseToolTips"] = true;
}


	$tdatatempbsicis_ol[".NCSearch"] = true;



$tdatatempbsicis_ol[".shortTableName"] = "tempbsicis_ol";
$tdatatempbsicis_ol[".nSecOptions"] = 0;

$tdatatempbsicis_ol[".mainTableOwnerID"] = "";
$tdatatempbsicis_ol[".entityType"] = 1;
$tdatatempbsicis_ol[".connId"] = "u736239518_btn_at_154_41_241_2";


$tdatatempbsicis_ol[".strOriginalTableName"] = "TEMPBSICIS";

	



$tdatatempbsicis_ol[".showAddInPopup"] = false;

$tdatatempbsicis_ol[".showEditInPopup"] = false;

$tdatatempbsicis_ol[".showViewInPopup"] = false;

$tdatatempbsicis_ol[".listAjax"] = false;
//	temporary
//$tdatatempbsicis_ol[".listAjax"] = false;

	$tdatatempbsicis_ol[".audit"] = false;

	$tdatatempbsicis_ol[".locking"] = false;


$pages = $tdatatempbsicis_ol[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatempbsicis_ol[".edit"] = true;
	$tdatatempbsicis_ol[".afterEditAction"] = 1;
	$tdatatempbsicis_ol[".closePopupAfterEdit"] = 1;
	$tdatatempbsicis_ol[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatempbsicis_ol[".add"] = true;
$tdatatempbsicis_ol[".afterAddAction"] = 1;
$tdatatempbsicis_ol[".closePopupAfterAdd"] = 1;
$tdatatempbsicis_ol[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatempbsicis_ol[".list"] = true;
}



$tdatatempbsicis_ol[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatempbsicis_ol[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatempbsicis_ol[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatempbsicis_ol[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatempbsicis_ol[".printFriendly"] = true;
}



$tdatatempbsicis_ol[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatempbsicis_ol[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatempbsicis_ol[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatempbsicis_ol[".isUseAjaxSuggest"] = true;



																											

$tdatatempbsicis_ol[".ajaxCodeSnippetAdded"] = false;

$tdatatempbsicis_ol[".buttonsAdded"] = false;

$tdatatempbsicis_ol[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatempbsicis_ol[".isUseTimeForSearch"] = false;


$tdatatempbsicis_ol[".badgeColor"] = "7B68EE";


$tdatatempbsicis_ol[".allSearchFields"] = array();
$tdatatempbsicis_ol[".filterFields"] = array();
$tdatatempbsicis_ol[".requiredSearchFields"] = array();

$tdatatempbsicis_ol[".googleLikeFields"] = array();
$tdatatempbsicis_ol[".googleLikeFields"][] = "IDCIS";
$tdatatempbsicis_ol[".googleLikeFields"][] = "DATE";
$tdatatempbsicis_ol[".googleLikeFields"][] = "KODECABANG";
$tdatatempbsicis_ol[".googleLikeFields"][] = "SUMINSURED";
$tdatatempbsicis_ol[".googleLikeFields"][] = "CIS_UPL_USER";
$tdatatempbsicis_ol[".googleLikeFields"][] = "CIS_UPL_DATE";
$tdatatempbsicis_ol[".googleLikeFields"][] = "CIS_FL";
$tdatatempbsicis_ol[".googleLikeFields"][] = "CIS_REGION";
$tdatatempbsicis_ol[".googleLikeFields"][] = "CIS_AREA";
$tdatatempbsicis_ol[".googleLikeFields"][] = "CIS_TOKEN";
$tdatatempbsicis_ol[".googleLikeFields"][] = "CIS_TIPE";



$tdatatempbsicis_ol[".tableType"] = "list";

$tdatatempbsicis_ol[".printerPageOrientation"] = 0;
$tdatatempbsicis_ol[".nPrinterPageScale"] = 100;

$tdatatempbsicis_ol[".nPrinterSplitRecords"] = 40;

$tdatatempbsicis_ol[".geocodingEnabled"] = false;










$tdatatempbsicis_ol[".pageSize"] = 20;

$tdatatempbsicis_ol[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatempbsicis_ol[".strOrderBy"] = $tstrOrderBy;

$tdatatempbsicis_ol[".orderindexes"] = array();


$tdatatempbsicis_ol[".sqlHead"] = "SELECT IDCIS,  `DATE`,  KODECABANG,  SUMINSURED,  CIS_UPL_USER,  CIS_UPL_DATE,  CIS_FL,  CIS_REGION,  CIS_AREA,  CIS_TOKEN,  CIS_TIPE";
$tdatatempbsicis_ol[".sqlFrom"] = "FROM TEMPBSICIS";
$tdatatempbsicis_ol[".sqlWhereExpr"] = "(CIS_FL = 2)";
$tdatatempbsicis_ol[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatempbsicis_ol[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatempbsicis_ol[".arrGroupsPerPage"] = $arrGPP;

$tdatatempbsicis_ol[".highlightSearchResults"] = true;

$tableKeystempbsicis_ol = array();
$tableKeystempbsicis_ol[] = "IDCIS";
$tdatatempbsicis_ol[".Keys"] = $tableKeystempbsicis_ol;


$tdatatempbsicis_ol[".hideMobileList"] = array();




//	IDCIS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IDCIS";
	$fdata["GoodName"] = "IDCIS";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIS_OL","IDCIS");
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


	$tdatatempbsicis_ol["IDCIS"] = $fdata;
		$tdatatempbsicis_ol[".searchableFields"][] = "IDCIS";
//	DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DATE";
	$fdata["GoodName"] = "DATE";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIS_OL","DATE");
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


	$tdatatempbsicis_ol["DATE"] = $fdata;
		$tdatatempbsicis_ol[".searchableFields"][] = "DATE";
//	KODECABANG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "KODECABANG";
	$fdata["GoodName"] = "KODECABANG";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIS_OL","KODECABANG");
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


	$tdatatempbsicis_ol["KODECABANG"] = $fdata;
		$tdatatempbsicis_ol[".searchableFields"][] = "KODECABANG";
//	SUMINSURED
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "SUMINSURED";
	$fdata["GoodName"] = "SUMINSURED";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIS_OL","SUMINSURED");
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


	$tdatatempbsicis_ol["SUMINSURED"] = $fdata;
		$tdatatempbsicis_ol[".searchableFields"][] = "SUMINSURED";
//	CIS_UPL_USER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "CIS_UPL_USER";
	$fdata["GoodName"] = "CIS_UPL_USER";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIS_OL","CIS_UPL_USER");
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


	$tdatatempbsicis_ol["CIS_UPL_USER"] = $fdata;
		$tdatatempbsicis_ol[".searchableFields"][] = "CIS_UPL_USER";
//	CIS_UPL_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "CIS_UPL_DATE";
	$fdata["GoodName"] = "CIS_UPL_DATE";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIS_OL","CIS_UPL_DATE");
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


	$tdatatempbsicis_ol["CIS_UPL_DATE"] = $fdata;
		$tdatatempbsicis_ol[".searchableFields"][] = "CIS_UPL_DATE";
//	CIS_FL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "CIS_FL";
	$fdata["GoodName"] = "CIS_FL";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIS_OL","CIS_FL");
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


	$tdatatempbsicis_ol["CIS_FL"] = $fdata;
		$tdatatempbsicis_ol[".searchableFields"][] = "CIS_FL";
//	CIS_REGION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "CIS_REGION";
	$fdata["GoodName"] = "CIS_REGION";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIS_OL","CIS_REGION");
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


	$tdatatempbsicis_ol["CIS_REGION"] = $fdata;
		$tdatatempbsicis_ol[".searchableFields"][] = "CIS_REGION";
//	CIS_AREA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "CIS_AREA";
	$fdata["GoodName"] = "CIS_AREA";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIS_OL","CIS_AREA");
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


	$tdatatempbsicis_ol["CIS_AREA"] = $fdata;
		$tdatatempbsicis_ol[".searchableFields"][] = "CIS_AREA";
//	CIS_TOKEN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "CIS_TOKEN";
	$fdata["GoodName"] = "CIS_TOKEN";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIS_OL","CIS_TOKEN");
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


	$tdatatempbsicis_ol["CIS_TOKEN"] = $fdata;
		$tdatatempbsicis_ol[".searchableFields"][] = "CIS_TOKEN";
//	CIS_TIPE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "CIS_TIPE";
	$fdata["GoodName"] = "CIS_TIPE";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIS_OL","CIS_TIPE");
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


	$tdatatempbsicis_ol["CIS_TIPE"] = $fdata;
		$tdatatempbsicis_ol[".searchableFields"][] = "CIS_TIPE";


$tables_data["TEMPBSICIS_OL"]=&$tdatatempbsicis_ol;
$field_labels["TEMPBSICIS_OL"] = &$fieldLabelstempbsicis_ol;
$fieldToolTips["TEMPBSICIS_OL"] = &$fieldToolTipstempbsicis_ol;
$placeHolders["TEMPBSICIS_OL"] = &$placeHolderstempbsicis_ol;
$page_titles["TEMPBSICIS_OL"] = &$pageTitlestempbsicis_ol;


changeTextControlsToDate( "TEMPBSICIS_OL" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["TEMPBSICIS_OL"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["TEMPBSICIS_OL"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tempbsicis_ol()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "IDCIS,  `DATE`,  KODECABANG,  SUMINSURED,  CIS_UPL_USER,  CIS_UPL_DATE,  CIS_FL,  CIS_REGION,  CIS_AREA,  CIS_TOKEN,  CIS_TIPE";
$proto0["m_strFrom"] = "FROM TEMPBSICIS";
$proto0["m_strWhere"] = "(CIS_FL = 2)";
$proto0["m_strOrderBy"] = "";
	
																												;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "CIS_FL = 2";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CIS_FL",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS_OL"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= 2";
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
	"m_strName" => "IDCIS",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS_OL"
));

$proto6["m_sql"] = "IDCIS";
$proto6["m_srcTableName"] = "TEMPBSICIS_OL";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "DATE",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS_OL"
));

$proto8["m_sql"] = "`DATE`";
$proto8["m_srcTableName"] = "TEMPBSICIS_OL";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "KODECABANG",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS_OL"
));

$proto10["m_sql"] = "KODECABANG";
$proto10["m_srcTableName"] = "TEMPBSICIS_OL";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "SUMINSURED",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS_OL"
));

$proto12["m_sql"] = "SUMINSURED";
$proto12["m_srcTableName"] = "TEMPBSICIS_OL";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "CIS_UPL_USER",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS_OL"
));

$proto14["m_sql"] = "CIS_UPL_USER";
$proto14["m_srcTableName"] = "TEMPBSICIS_OL";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "CIS_UPL_DATE",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS_OL"
));

$proto16["m_sql"] = "CIS_UPL_DATE";
$proto16["m_srcTableName"] = "TEMPBSICIS_OL";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "CIS_FL",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS_OL"
));

$proto18["m_sql"] = "CIS_FL";
$proto18["m_srcTableName"] = "TEMPBSICIS_OL";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "CIS_REGION",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS_OL"
));

$proto20["m_sql"] = "CIS_REGION";
$proto20["m_srcTableName"] = "TEMPBSICIS_OL";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "CIS_AREA",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS_OL"
));

$proto22["m_sql"] = "CIS_AREA";
$proto22["m_srcTableName"] = "TEMPBSICIS_OL";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "CIS_TOKEN",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS_OL"
));

$proto24["m_sql"] = "CIS_TOKEN";
$proto24["m_srcTableName"] = "TEMPBSICIS_OL";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "CIS_TIPE",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS_OL"
));

$proto26["m_sql"] = "CIS_TIPE";
$proto26["m_srcTableName"] = "TEMPBSICIS_OL";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "TEMPBSICIS";
$proto29["m_srcTableName"] = "TEMPBSICIS_OL";
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
$proto28["m_srcTableName"] = "TEMPBSICIS_OL";
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
$proto0["m_srcTableName"]="TEMPBSICIS_OL";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tempbsicis_ol = createSqlQuery_tempbsicis_ol();


	
																												;

											

$tdatatempbsicis_ol[".sqlquery"] = $queryData_tempbsicis_ol;



include_once(getabspath("include/tempbsicis_ol_events.php"));
$tdatatempbsicis_ol[".hasEvents"] = true;

?>