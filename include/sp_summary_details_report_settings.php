<?php
$tdatasp_summary_details_report = array();
$tdatasp_summary_details_report[".searchableFields"] = array();
$tdatasp_summary_details_report[".ShortName"] = "sp_summary_details_report";
$tdatasp_summary_details_report[".OwnerID"] = "";
$tdatasp_summary_details_report[".OriginalTable"] = "sp_summary_details_report";


$tdatasp_summary_details_report[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatasp_summary_details_report[".originalPagesByType"] = $tdatasp_summary_details_report[".pagesByType"];
$tdatasp_summary_details_report[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatasp_summary_details_report[".originalPages"] = $tdatasp_summary_details_report[".pages"];
$tdatasp_summary_details_report[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatasp_summary_details_report[".originalDefaultPages"] = $tdatasp_summary_details_report[".defaultPages"];

//	field labels
$fieldLabelssp_summary_details_report = array();
$fieldToolTipssp_summary_details_report = array();
$pageTitlessp_summary_details_report = array();
$placeHolderssp_summary_details_report = array();

if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelssp_summary_details_report["Indonesian"] = array();
	$fieldToolTipssp_summary_details_report["Indonesian"] = array();
	$placeHolderssp_summary_details_report["Indonesian"] = array();
	$pageTitlessp_summary_details_report["Indonesian"] = array();
	$fieldLabelssp_summary_details_report["Indonesian"]["YEAR"] = "YEAR";
	$fieldToolTipssp_summary_details_report["Indonesian"]["YEAR"] = "";
	$placeHolderssp_summary_details_report["Indonesian"]["YEAR"] = "";
	$fieldLabelssp_summary_details_report["Indonesian"]["MONTH"] = "MONTH";
	$fieldToolTipssp_summary_details_report["Indonesian"]["MONTH"] = "";
	$placeHolderssp_summary_details_report["Indonesian"]["MONTH"] = "";
	$fieldLabelssp_summary_details_report["Indonesian"]["SUMINSURED"] = "SUMINSURED";
	$fieldToolTipssp_summary_details_report["Indonesian"]["SUMINSURED"] = "";
	$placeHolderssp_summary_details_report["Indonesian"]["SUMINSURED"] = "";
	$fieldLabelssp_summary_details_report["Indonesian"]["PREMI"] = "PREMI";
	$fieldToolTipssp_summary_details_report["Indonesian"]["PREMI"] = "";
	$placeHolderssp_summary_details_report["Indonesian"]["PREMI"] = "";
	$fieldLabelssp_summary_details_report["Indonesian"]["KOMISI"] = "KOMISI";
	$fieldToolTipssp_summary_details_report["Indonesian"]["KOMISI"] = "";
	$placeHolderssp_summary_details_report["Indonesian"]["KOMISI"] = "";
	$fieldLabelssp_summary_details_report["Indonesian"]["KETERANGAN"] = "KETERANGAN";
	$fieldToolTipssp_summary_details_report["Indonesian"]["KETERANGAN"] = "";
	$placeHolderssp_summary_details_report["Indonesian"]["KETERANGAN"] = "";
	if (count($fieldToolTipssp_summary_details_report["Indonesian"]))
		$tdatasp_summary_details_report[".isUseToolTips"] = true;
}


	$tdatasp_summary_details_report[".NCSearch"] = true;



$tdatasp_summary_details_report[".shortTableName"] = "sp_summary_details_report";
$tdatasp_summary_details_report[".nSecOptions"] = 0;

$tdatasp_summary_details_report[".mainTableOwnerID"] = "";
$tdatasp_summary_details_report[".entityType"] = 6;
$tdatasp_summary_details_report[".connId"] = "u736239518_btn_at_154_41_241_2";


$tdatasp_summary_details_report[".strOriginalTableName"] = "sp_summary_details_report";

	



$tdatasp_summary_details_report[".showAddInPopup"] = false;

$tdatasp_summary_details_report[".showEditInPopup"] = false;

$tdatasp_summary_details_report[".showViewInPopup"] = false;

$tdatasp_summary_details_report[".listAjax"] = false;
//	temporary
//$tdatasp_summary_details_report[".listAjax"] = false;

	$tdatasp_summary_details_report[".audit"] = false;

	$tdatasp_summary_details_report[".locking"] = false;


$pages = $tdatasp_summary_details_report[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasp_summary_details_report[".edit"] = true;
	$tdatasp_summary_details_report[".afterEditAction"] = 1;
	$tdatasp_summary_details_report[".closePopupAfterEdit"] = 1;
	$tdatasp_summary_details_report[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasp_summary_details_report[".add"] = true;
$tdatasp_summary_details_report[".afterAddAction"] = 1;
$tdatasp_summary_details_report[".closePopupAfterAdd"] = 1;
$tdatasp_summary_details_report[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasp_summary_details_report[".list"] = true;
}



$tdatasp_summary_details_report[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasp_summary_details_report[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasp_summary_details_report[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasp_summary_details_report[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasp_summary_details_report[".printFriendly"] = true;
}



$tdatasp_summary_details_report[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasp_summary_details_report[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasp_summary_details_report[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasp_summary_details_report[".isUseAjaxSuggest"] = false;



																											

$tdatasp_summary_details_report[".ajaxCodeSnippetAdded"] = false;

$tdatasp_summary_details_report[".buttonsAdded"] = false;

$tdatasp_summary_details_report[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasp_summary_details_report[".isUseTimeForSearch"] = false;


$tdatasp_summary_details_report[".badgeColor"] = "DC143C";


$tdatasp_summary_details_report[".allSearchFields"] = array();
$tdatasp_summary_details_report[".filterFields"] = array();
$tdatasp_summary_details_report[".requiredSearchFields"] = array();

$tdatasp_summary_details_report[".googleLikeFields"] = array();
$tdatasp_summary_details_report[".googleLikeFields"][] = "YEAR";
$tdatasp_summary_details_report[".googleLikeFields"][] = "MONTH";
$tdatasp_summary_details_report[".googleLikeFields"][] = "SUMINSURED";
$tdatasp_summary_details_report[".googleLikeFields"][] = "PREMI";
$tdatasp_summary_details_report[".googleLikeFields"][] = "KOMISI";
$tdatasp_summary_details_report[".googleLikeFields"][] = "KETERANGAN";




$tdatasp_summary_details_report[".printerPageOrientation"] = 0;
$tdatasp_summary_details_report[".nPrinterPageScale"] = 100;

$tdatasp_summary_details_report[".nPrinterSplitRecords"] = 40;

$tdatasp_summary_details_report[".geocodingEnabled"] = false;










$tdatasp_summary_details_report[".pageSize"] = 20;

$tdatasp_summary_details_report[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasp_summary_details_report[".strOrderBy"] = $tstrOrderBy;

$tdatasp_summary_details_report[".orderindexes"] = array();


$tdatasp_summary_details_report[".sqlHead"] = "";
$tdatasp_summary_details_report[".sqlFrom"] = "";
$tdatasp_summary_details_report[".sqlWhereExpr"] = "";
$tdatasp_summary_details_report[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasp_summary_details_report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasp_summary_details_report[".arrGroupsPerPage"] = $arrGPP;

$tdatasp_summary_details_report[".highlightSearchResults"] = true;

$tableKeyssp_summary_details_report = array();
$tdatasp_summary_details_report[".Keys"] = $tableKeyssp_summary_details_report;


$tdatasp_summary_details_report[".hideMobileList"] = array();




//	YEAR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "YEAR";
	$fdata["GoodName"] = "YEAR";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("sp_summary_details_report","YEAR");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "YEAR";

	
		$fdata["FullName"] = "YEAR";

	
	
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


	$tdatasp_summary_details_report["YEAR"] = $fdata;
		$tdatasp_summary_details_report[".searchableFields"][] = "YEAR";
//	MONTH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "MONTH";
	$fdata["GoodName"] = "MONTH";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("sp_summary_details_report","MONTH");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "MONTH";

	
		$fdata["FullName"] = "MONTH";

	
	
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


	$tdatasp_summary_details_report["MONTH"] = $fdata;
		$tdatasp_summary_details_report[".searchableFields"][] = "MONTH";
//	SUMINSURED
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "SUMINSURED";
	$fdata["GoodName"] = "SUMINSURED";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("sp_summary_details_report","SUMINSURED");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "SUMINSURED";

	
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


	$tdatasp_summary_details_report["SUMINSURED"] = $fdata;
		$tdatasp_summary_details_report[".searchableFields"][] = "SUMINSURED";
//	PREMI
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "PREMI";
	$fdata["GoodName"] = "PREMI";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("sp_summary_details_report","PREMI");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "PREMI";

	
		$fdata["FullName"] = "PREMI";

	
	
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


	$tdatasp_summary_details_report["PREMI"] = $fdata;
		$tdatasp_summary_details_report[".searchableFields"][] = "PREMI";
//	KOMISI
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "KOMISI";
	$fdata["GoodName"] = "KOMISI";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("sp_summary_details_report","KOMISI");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "KOMISI";

	
		$fdata["FullName"] = "KOMISI";

	
	
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


	$tdatasp_summary_details_report["KOMISI"] = $fdata;
		$tdatasp_summary_details_report[".searchableFields"][] = "KOMISI";
//	KETERANGAN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "KETERANGAN";
	$fdata["GoodName"] = "KETERANGAN";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("sp_summary_details_report","KETERANGAN");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "KETERANGAN";

	
		$fdata["FullName"] = "KETERANGAN";

	
	
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


	$tdatasp_summary_details_report["KETERANGAN"] = $fdata;
		$tdatasp_summary_details_report[".searchableFields"][] = "KETERANGAN";


$tables_data["sp_summary_details_report"]=&$tdatasp_summary_details_report;
$field_labels["sp_summary_details_report"] = &$fieldLabelssp_summary_details_report;
$fieldToolTips["sp_summary_details_report"] = &$fieldToolTipssp_summary_details_report;
$placeHolders["sp_summary_details_report"] = &$placeHolderssp_summary_details_report;
$page_titles["sp_summary_details_report"] = &$pageTitlessp_summary_details_report;


changeTextControlsToDate( "sp_summary_details_report" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["sp_summary_details_report"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["sp_summary_details_report"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/sp_summary_details_report_ops.php" ) );



	
																												;

						

$tdatasp_summary_details_report[".sqlquery"] = $queryData_sp_summary_details_report;



$tdatasp_summary_details_report[".hasEvents"] = false;

?>