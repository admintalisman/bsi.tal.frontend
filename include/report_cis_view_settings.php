<?php
$tdatareport_cis_view = array();
$tdatareport_cis_view[".searchableFields"] = array();
$tdatareport_cis_view[".ShortName"] = "report_cis_view";
$tdatareport_cis_view[".OwnerID"] = "";
$tdatareport_cis_view[".OriginalTable"] = "TEMPBSICIS";


$tdatareport_cis_view[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatareport_cis_view[".originalPagesByType"] = $tdatareport_cis_view[".pagesByType"];
$tdatareport_cis_view[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatareport_cis_view[".originalPages"] = $tdatareport_cis_view[".pages"];
$tdatareport_cis_view[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatareport_cis_view[".originalDefaultPages"] = $tdatareport_cis_view[".defaultPages"];

//	field labels
$fieldLabelsreport_cis_view = array();
$fieldToolTipsreport_cis_view = array();
$pageTitlesreport_cis_view = array();
$placeHoldersreport_cis_view = array();

if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelsreport_cis_view["Indonesian"] = array();
	$fieldToolTipsreport_cis_view["Indonesian"] = array();
	$placeHoldersreport_cis_view["Indonesian"] = array();
	$pageTitlesreport_cis_view["Indonesian"] = array();
	$fieldLabelsreport_cis_view["Indonesian"]["CIS_REGION"] = "CIS REGION";
	$fieldToolTipsreport_cis_view["Indonesian"]["CIS_REGION"] = "";
	$placeHoldersreport_cis_view["Indonesian"]["CIS_REGION"] = "";
	$fieldLabelsreport_cis_view["Indonesian"]["CIS_AREA"] = "CIS AREA";
	$fieldToolTipsreport_cis_view["Indonesian"]["CIS_AREA"] = "";
	$placeHoldersreport_cis_view["Indonesian"]["CIS_AREA"] = "";
	$fieldLabelsreport_cis_view["Indonesian"]["KODECABANG"] = "KODECABANG";
	$fieldToolTipsreport_cis_view["Indonesian"]["KODECABANG"] = "";
	$placeHoldersreport_cis_view["Indonesian"]["KODECABANG"] = "";
	$fieldLabelsreport_cis_view["Indonesian"]["DATE"] = "PERIODE AWAL";
	$fieldToolTipsreport_cis_view["Indonesian"]["DATE"] = "";
	$placeHoldersreport_cis_view["Indonesian"]["DATE"] = "";
	$fieldLabelsreport_cis_view["Indonesian"]["SUMINSURED"] = "SUMINSURED";
	$fieldToolTipsreport_cis_view["Indonesian"]["SUMINSURED"] = "";
	$placeHoldersreport_cis_view["Indonesian"]["SUMINSURED"] = "";
	$fieldLabelsreport_cis_view["Indonesian"]["CIS_UPL_USER"] = "CIS UPL USER";
	$fieldToolTipsreport_cis_view["Indonesian"]["CIS_UPL_USER"] = "";
	$placeHoldersreport_cis_view["Indonesian"]["CIS_UPL_USER"] = "";
	$fieldLabelsreport_cis_view["Indonesian"]["CIS_UPL_DATE"] = "CIS UPL DATE";
	$fieldToolTipsreport_cis_view["Indonesian"]["CIS_UPL_DATE"] = "";
	$placeHoldersreport_cis_view["Indonesian"]["CIS_UPL_DATE"] = "";
	$fieldLabelsreport_cis_view["Indonesian"]["CIS_FL"] = "CIS FL";
	$fieldToolTipsreport_cis_view["Indonesian"]["CIS_FL"] = "";
	$placeHoldersreport_cis_view["Indonesian"]["CIS_FL"] = "";
	$fieldLabelsreport_cis_view["Indonesian"]["CIS_BSMID"] = "CIS BSMID";
	$fieldToolTipsreport_cis_view["Indonesian"]["CIS_BSMID"] = "";
	$placeHoldersreport_cis_view["Indonesian"]["CIS_BSMID"] = "";
	$fieldLabelsreport_cis_view["Indonesian"]["CIS_PROPOSAL"] = "CIS PROPOSAL";
	$fieldToolTipsreport_cis_view["Indonesian"]["CIS_PROPOSAL"] = "";
	$placeHoldersreport_cis_view["Indonesian"]["CIS_PROPOSAL"] = "";
	$fieldLabelsreport_cis_view["Indonesian"]["CIS_PREMI"] = "CIS PREMI";
	$fieldToolTipsreport_cis_view["Indonesian"]["CIS_PREMI"] = "";
	$placeHoldersreport_cis_view["Indonesian"]["CIS_PREMI"] = "";
	$fieldLabelsreport_cis_view["Indonesian"]["CIS_PERIODE_END"] = "CIS PERIODE END";
	$fieldToolTipsreport_cis_view["Indonesian"]["CIS_PERIODE_END"] = "";
	$placeHoldersreport_cis_view["Indonesian"]["CIS_PERIODE_END"] = "";
	if (count($fieldToolTipsreport_cis_view["Indonesian"]))
		$tdatareport_cis_view[".isUseToolTips"] = true;
}


	$tdatareport_cis_view[".NCSearch"] = true;



$tdatareport_cis_view[".shortTableName"] = "report_cis_view";
$tdatareport_cis_view[".nSecOptions"] = 0;

$tdatareport_cis_view[".mainTableOwnerID"] = "";
$tdatareport_cis_view[".entityType"] = 1;
$tdatareport_cis_view[".connId"] = "u736239518_btn_at_154_41_241_2";


$tdatareport_cis_view[".strOriginalTableName"] = "TEMPBSICIS";

	



$tdatareport_cis_view[".showAddInPopup"] = false;

$tdatareport_cis_view[".showEditInPopup"] = false;

$tdatareport_cis_view[".showViewInPopup"] = false;

$tdatareport_cis_view[".listAjax"] = false;
//	temporary
//$tdatareport_cis_view[".listAjax"] = false;

	$tdatareport_cis_view[".audit"] = false;

	$tdatareport_cis_view[".locking"] = false;


$pages = $tdatareport_cis_view[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatareport_cis_view[".edit"] = true;
	$tdatareport_cis_view[".afterEditAction"] = 1;
	$tdatareport_cis_view[".closePopupAfterEdit"] = 1;
	$tdatareport_cis_view[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatareport_cis_view[".add"] = true;
$tdatareport_cis_view[".afterAddAction"] = 1;
$tdatareport_cis_view[".closePopupAfterAdd"] = 1;
$tdatareport_cis_view[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatareport_cis_view[".list"] = true;
}



$tdatareport_cis_view[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatareport_cis_view[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatareport_cis_view[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatareport_cis_view[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatareport_cis_view[".printFriendly"] = true;
}



$tdatareport_cis_view[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatareport_cis_view[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatareport_cis_view[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatareport_cis_view[".isUseAjaxSuggest"] = true;



																											

$tdatareport_cis_view[".ajaxCodeSnippetAdded"] = false;

$tdatareport_cis_view[".buttonsAdded"] = false;

$tdatareport_cis_view[".addPageEvents"] = false;

// use timepicker for search panel
$tdatareport_cis_view[".isUseTimeForSearch"] = false;


$tdatareport_cis_view[".badgeColor"] = "4682B4";


$tdatareport_cis_view[".allSearchFields"] = array();
$tdatareport_cis_view[".filterFields"] = array();
$tdatareport_cis_view[".requiredSearchFields"] = array();

$tdatareport_cis_view[".googleLikeFields"] = array();
$tdatareport_cis_view[".googleLikeFields"][] = "CIS_REGION";
$tdatareport_cis_view[".googleLikeFields"][] = "CIS_AREA";
$tdatareport_cis_view[".googleLikeFields"][] = "KODECABANG";
$tdatareport_cis_view[".googleLikeFields"][] = "DATE";
$tdatareport_cis_view[".googleLikeFields"][] = "SUMINSURED";
$tdatareport_cis_view[".googleLikeFields"][] = "CIS_UPL_USER";
$tdatareport_cis_view[".googleLikeFields"][] = "CIS_UPL_DATE";
$tdatareport_cis_view[".googleLikeFields"][] = "CIS_FL";
$tdatareport_cis_view[".googleLikeFields"][] = "CIS_BSMID";
$tdatareport_cis_view[".googleLikeFields"][] = "CIS_PROPOSAL";
$tdatareport_cis_view[".googleLikeFields"][] = "CIS_PREMI";
$tdatareport_cis_view[".googleLikeFields"][] = "CIS_PERIODE_END";



$tdatareport_cis_view[".tableType"] = "list";

$tdatareport_cis_view[".printerPageOrientation"] = 0;
$tdatareport_cis_view[".nPrinterPageScale"] = 100;

$tdatareport_cis_view[".nPrinterSplitRecords"] = 40;

$tdatareport_cis_view[".geocodingEnabled"] = false;




$tdatareport_cis_view[".isDisplayLoading"] = true;






$tdatareport_cis_view[".pageSize"] = 100;

$tdatareport_cis_view[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatareport_cis_view[".strOrderBy"] = $tstrOrderBy;

$tdatareport_cis_view[".orderindexes"] = array();


$tdatareport_cis_view[".sqlHead"] = "SELECT CIS_REGION,  CIS_AREA,  KODECABANG,  `DATE`,  SUMINSURED,  CIS_UPL_USER,  CIS_UPL_DATE,  CIS_FL,  CIS_BSMID,  CIS_PROPOSAL,  CIS_PREMI,  CIS_PERIODE_END";
$tdatareport_cis_view[".sqlFrom"] = "FROM TEMPBSICIS";
$tdatareport_cis_view[".sqlWhereExpr"] = "CIS_UPL_USER=':session.UserID'";
$tdatareport_cis_view[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatareport_cis_view[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatareport_cis_view[".arrGroupsPerPage"] = $arrGPP;

$tdatareport_cis_view[".highlightSearchResults"] = true;

$tableKeysreport_cis_view = array();
$tdatareport_cis_view[".Keys"] = $tableKeysreport_cis_view;


$tdatareport_cis_view[".hideMobileList"] = array();




//	CIS_REGION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CIS_REGION";
	$fdata["GoodName"] = "CIS_REGION";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("REPORT_CIS_view","CIS_REGION");
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


	$tdatareport_cis_view["CIS_REGION"] = $fdata;
		$tdatareport_cis_view[".searchableFields"][] = "CIS_REGION";
//	CIS_AREA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CIS_AREA";
	$fdata["GoodName"] = "CIS_AREA";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("REPORT_CIS_view","CIS_AREA");
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


	$tdatareport_cis_view["CIS_AREA"] = $fdata;
		$tdatareport_cis_view[".searchableFields"][] = "CIS_AREA";
//	KODECABANG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "KODECABANG";
	$fdata["GoodName"] = "KODECABANG";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("REPORT_CIS_view","KODECABANG");
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


	$tdatareport_cis_view["KODECABANG"] = $fdata;
		$tdatareport_cis_view[".searchableFields"][] = "KODECABANG";
//	DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "DATE";
	$fdata["GoodName"] = "DATE";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("REPORT_CIS_view","DATE");
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


	$tdatareport_cis_view["DATE"] = $fdata;
		$tdatareport_cis_view[".searchableFields"][] = "DATE";
//	SUMINSURED
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "SUMINSURED";
	$fdata["GoodName"] = "SUMINSURED";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("REPORT_CIS_view","SUMINSURED");
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


	$tdatareport_cis_view["SUMINSURED"] = $fdata;
		$tdatareport_cis_view[".searchableFields"][] = "SUMINSURED";
//	CIS_UPL_USER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "CIS_UPL_USER";
	$fdata["GoodName"] = "CIS_UPL_USER";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("REPORT_CIS_view","CIS_UPL_USER");
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


	$tdatareport_cis_view["CIS_UPL_USER"] = $fdata;
		$tdatareport_cis_view[".searchableFields"][] = "CIS_UPL_USER";
//	CIS_UPL_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "CIS_UPL_DATE";
	$fdata["GoodName"] = "CIS_UPL_DATE";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("REPORT_CIS_view","CIS_UPL_DATE");
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


	$tdatareport_cis_view["CIS_UPL_DATE"] = $fdata;
		$tdatareport_cis_view[".searchableFields"][] = "CIS_UPL_DATE";
//	CIS_FL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "CIS_FL";
	$fdata["GoodName"] = "CIS_FL";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("REPORT_CIS_view","CIS_FL");
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


	$tdatareport_cis_view["CIS_FL"] = $fdata;
		$tdatareport_cis_view[".searchableFields"][] = "CIS_FL";
//	CIS_BSMID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "CIS_BSMID";
	$fdata["GoodName"] = "CIS_BSMID";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("REPORT_CIS_view","CIS_BSMID");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CIS_BSMID";

		$fdata["sourceSingle"] = "CIS_BSMID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CIS_BSMID";

	
	
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


	$tdatareport_cis_view["CIS_BSMID"] = $fdata;
		$tdatareport_cis_view[".searchableFields"][] = "CIS_BSMID";
//	CIS_PROPOSAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "CIS_PROPOSAL";
	$fdata["GoodName"] = "CIS_PROPOSAL";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("REPORT_CIS_view","CIS_PROPOSAL");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CIS_PROPOSAL";

		$fdata["sourceSingle"] = "CIS_PROPOSAL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CIS_PROPOSAL";

	
	
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


	$tdatareport_cis_view["CIS_PROPOSAL"] = $fdata;
		$tdatareport_cis_view[".searchableFields"][] = "CIS_PROPOSAL";
//	CIS_PREMI
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "CIS_PREMI";
	$fdata["GoodName"] = "CIS_PREMI";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("REPORT_CIS_view","CIS_PREMI");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "CIS_PREMI";

		$fdata["sourceSingle"] = "CIS_PREMI";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CIS_PREMI";

	
	
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


	$tdatareport_cis_view["CIS_PREMI"] = $fdata;
		$tdatareport_cis_view[".searchableFields"][] = "CIS_PREMI";
//	CIS_PERIODE_END
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "CIS_PERIODE_END";
	$fdata["GoodName"] = "CIS_PERIODE_END";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("REPORT_CIS_view","CIS_PERIODE_END");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "CIS_PERIODE_END";

		$fdata["sourceSingle"] = "CIS_PERIODE_END";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CIS_PERIODE_END";

	
	
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


	$tdatareport_cis_view["CIS_PERIODE_END"] = $fdata;
		$tdatareport_cis_view[".searchableFields"][] = "CIS_PERIODE_END";


$tables_data["REPORT_CIS_view"]=&$tdatareport_cis_view;
$field_labels["REPORT_CIS_view"] = &$fieldLabelsreport_cis_view;
$fieldToolTips["REPORT_CIS_view"] = &$fieldToolTipsreport_cis_view;
$placeHolders["REPORT_CIS_view"] = &$placeHoldersreport_cis_view;
$page_titles["REPORT_CIS_view"] = &$pageTitlesreport_cis_view;


changeTextControlsToDate( "REPORT_CIS_view" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["REPORT_CIS_view"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["REPORT_CIS_view"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_report_cis_view()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CIS_REGION,  CIS_AREA,  KODECABANG,  `DATE`,  SUMINSURED,  CIS_UPL_USER,  CIS_UPL_DATE,  CIS_FL,  CIS_BSMID,  CIS_PROPOSAL,  CIS_PREMI,  CIS_PERIODE_END";
$proto0["m_strFrom"] = "FROM TEMPBSICIS";
$proto0["m_strWhere"] = "CIS_UPL_USER=':session.UserID'";
$proto0["m_strOrderBy"] = "";
	
																												;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "CIS_UPL_USER=':session.UserID'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CIS_UPL_USER",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "REPORT_CIS_view"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "=':session.UserID'";
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
	"m_strName" => "CIS_REGION",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "REPORT_CIS_view"
));

$proto6["m_sql"] = "CIS_REGION";
$proto6["m_srcTableName"] = "REPORT_CIS_view";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CIS_AREA",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "REPORT_CIS_view"
));

$proto8["m_sql"] = "CIS_AREA";
$proto8["m_srcTableName"] = "REPORT_CIS_view";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "KODECABANG",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "REPORT_CIS_view"
));

$proto10["m_sql"] = "KODECABANG";
$proto10["m_srcTableName"] = "REPORT_CIS_view";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "DATE",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "REPORT_CIS_view"
));

$proto12["m_sql"] = "`DATE`";
$proto12["m_srcTableName"] = "REPORT_CIS_view";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "SUMINSURED",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "REPORT_CIS_view"
));

$proto14["m_sql"] = "SUMINSURED";
$proto14["m_srcTableName"] = "REPORT_CIS_view";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "CIS_UPL_USER",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "REPORT_CIS_view"
));

$proto16["m_sql"] = "CIS_UPL_USER";
$proto16["m_srcTableName"] = "REPORT_CIS_view";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "CIS_UPL_DATE",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "REPORT_CIS_view"
));

$proto18["m_sql"] = "CIS_UPL_DATE";
$proto18["m_srcTableName"] = "REPORT_CIS_view";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "CIS_FL",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "REPORT_CIS_view"
));

$proto20["m_sql"] = "CIS_FL";
$proto20["m_srcTableName"] = "REPORT_CIS_view";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "CIS_BSMID",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "REPORT_CIS_view"
));

$proto22["m_sql"] = "CIS_BSMID";
$proto22["m_srcTableName"] = "REPORT_CIS_view";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "CIS_PROPOSAL",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "REPORT_CIS_view"
));

$proto24["m_sql"] = "CIS_PROPOSAL";
$proto24["m_srcTableName"] = "REPORT_CIS_view";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "CIS_PREMI",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "REPORT_CIS_view"
));

$proto26["m_sql"] = "CIS_PREMI";
$proto26["m_srcTableName"] = "REPORT_CIS_view";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "CIS_PERIODE_END",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "REPORT_CIS_view"
));

$proto28["m_sql"] = "CIS_PERIODE_END";
$proto28["m_srcTableName"] = "REPORT_CIS_view";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "TEMPBSICIS";
$proto31["m_srcTableName"] = "REPORT_CIS_view";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "IDCIS";
$proto31["m_columns"][] = "CIS_TOKEN";
$proto31["m_columns"][] = "CIS_REGION";
$proto31["m_columns"][] = "CIS_AREA";
$proto31["m_columns"][] = "KODECABANG";
$proto31["m_columns"][] = "DATE";
$proto31["m_columns"][] = "SUMINSURED";
$proto31["m_columns"][] = "CIS_UPL_USER";
$proto31["m_columns"][] = "CIS_UPL_DATE";
$proto31["m_columns"][] = "CIS_FL";
$proto31["m_columns"][] = "CIS_BSMID";
$proto31["m_columns"][] = "CIS_PROPOSAL";
$proto31["m_columns"][] = "CIS_PREMI";
$proto31["m_columns"][] = "CIS_PERIODE_END";
$proto31["m_columns"][] = "CIS_RATE";
$proto31["m_columns"][] = "CIS_LIMIT";
$proto31["m_columns"][] = "CIS_TIPE";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "TEMPBSICIS";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "REPORT_CIS_view";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="REPORT_CIS_view";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_report_cis_view = createSqlQuery_report_cis_view();


	
																												;

												

$tdatareport_cis_view[".sqlquery"] = $queryData_report_cis_view;



$tdatareport_cis_view[".hasEvents"] = false;

?>