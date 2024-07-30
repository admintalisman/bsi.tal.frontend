<?php
$tdatasp_summary_product = array();
$tdatasp_summary_product[".searchableFields"] = array();
$tdatasp_summary_product[".ShortName"] = "sp_summary_product";
$tdatasp_summary_product[".OwnerID"] = "";
$tdatasp_summary_product[".OriginalTable"] = "sp_summary_product";


$tdatasp_summary_product[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatasp_summary_product[".originalPagesByType"] = $tdatasp_summary_product[".pagesByType"];
$tdatasp_summary_product[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatasp_summary_product[".originalPages"] = $tdatasp_summary_product[".pages"];
$tdatasp_summary_product[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatasp_summary_product[".originalDefaultPages"] = $tdatasp_summary_product[".defaultPages"];

//	field labels
$fieldLabelssp_summary_product = array();
$fieldToolTipssp_summary_product = array();
$pageTitlessp_summary_product = array();
$placeHolderssp_summary_product = array();

if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelssp_summary_product["Indonesian"] = array();
	$fieldToolTipssp_summary_product["Indonesian"] = array();
	$placeHolderssp_summary_product["Indonesian"] = array();
	$pageTitlessp_summary_product["Indonesian"] = array();
	$fieldLabelssp_summary_product["Indonesian"]["KETERANGAN"] = "KETERANGAN";
	$fieldToolTipssp_summary_product["Indonesian"]["KETERANGAN"] = "";
	$placeHolderssp_summary_product["Indonesian"]["KETERANGAN"] = "";
	$fieldLabelssp_summary_product["Indonesian"]["Suminsured"] = "Suminsured";
	$fieldToolTipssp_summary_product["Indonesian"]["Suminsured"] = "";
	$placeHolderssp_summary_product["Indonesian"]["Suminsured"] = "";
	$fieldLabelssp_summary_product["Indonesian"]["Premi"] = "Premi";
	$fieldToolTipssp_summary_product["Indonesian"]["Premi"] = "";
	$placeHolderssp_summary_product["Indonesian"]["Premi"] = "";
	$fieldLabelssp_summary_product["Indonesian"]["Komisi"] = "Komisi";
	$fieldToolTipssp_summary_product["Indonesian"]["Komisi"] = "";
	$placeHolderssp_summary_product["Indonesian"]["Komisi"] = "";
	if (count($fieldToolTipssp_summary_product["Indonesian"]))
		$tdatasp_summary_product[".isUseToolTips"] = true;
}


	$tdatasp_summary_product[".NCSearch"] = true;



$tdatasp_summary_product[".shortTableName"] = "sp_summary_product";
$tdatasp_summary_product[".nSecOptions"] = 0;

$tdatasp_summary_product[".mainTableOwnerID"] = "";
$tdatasp_summary_product[".entityType"] = 6;
$tdatasp_summary_product[".connId"] = "u736239518_btn_at_154_41_241_2";


$tdatasp_summary_product[".strOriginalTableName"] = "sp_summary_product";

	



$tdatasp_summary_product[".showAddInPopup"] = false;

$tdatasp_summary_product[".showEditInPopup"] = false;

$tdatasp_summary_product[".showViewInPopup"] = false;

$tdatasp_summary_product[".listAjax"] = false;
//	temporary
//$tdatasp_summary_product[".listAjax"] = false;

	$tdatasp_summary_product[".audit"] = false;

	$tdatasp_summary_product[".locking"] = false;


$pages = $tdatasp_summary_product[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasp_summary_product[".edit"] = true;
	$tdatasp_summary_product[".afterEditAction"] = 1;
	$tdatasp_summary_product[".closePopupAfterEdit"] = 1;
	$tdatasp_summary_product[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasp_summary_product[".add"] = true;
$tdatasp_summary_product[".afterAddAction"] = 1;
$tdatasp_summary_product[".closePopupAfterAdd"] = 1;
$tdatasp_summary_product[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasp_summary_product[".list"] = true;
}



$tdatasp_summary_product[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasp_summary_product[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasp_summary_product[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasp_summary_product[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasp_summary_product[".printFriendly"] = true;
}



$tdatasp_summary_product[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasp_summary_product[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasp_summary_product[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasp_summary_product[".isUseAjaxSuggest"] = false;



																											

$tdatasp_summary_product[".ajaxCodeSnippetAdded"] = false;

$tdatasp_summary_product[".buttonsAdded"] = false;

$tdatasp_summary_product[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasp_summary_product[".isUseTimeForSearch"] = false;


$tdatasp_summary_product[".badgeColor"] = "9ACD32";


$tdatasp_summary_product[".allSearchFields"] = array();
$tdatasp_summary_product[".filterFields"] = array();
$tdatasp_summary_product[".requiredSearchFields"] = array();

$tdatasp_summary_product[".googleLikeFields"] = array();
$tdatasp_summary_product[".googleLikeFields"][] = "KETERANGAN";
$tdatasp_summary_product[".googleLikeFields"][] = "Suminsured";
$tdatasp_summary_product[".googleLikeFields"][] = "Premi";
$tdatasp_summary_product[".googleLikeFields"][] = "Komisi";




$tdatasp_summary_product[".printerPageOrientation"] = 0;
$tdatasp_summary_product[".nPrinterPageScale"] = 100;

$tdatasp_summary_product[".nPrinterSplitRecords"] = 40;

$tdatasp_summary_product[".geocodingEnabled"] = false;










$tdatasp_summary_product[".pageSize"] = 20;

$tdatasp_summary_product[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasp_summary_product[".strOrderBy"] = $tstrOrderBy;

$tdatasp_summary_product[".orderindexes"] = array();


$tdatasp_summary_product[".sqlHead"] = "";
$tdatasp_summary_product[".sqlFrom"] = "";
$tdatasp_summary_product[".sqlWhereExpr"] = "";
$tdatasp_summary_product[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasp_summary_product[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasp_summary_product[".arrGroupsPerPage"] = $arrGPP;

$tdatasp_summary_product[".highlightSearchResults"] = true;

$tableKeyssp_summary_product = array();
$tdatasp_summary_product[".Keys"] = $tableKeyssp_summary_product;


$tdatasp_summary_product[".hideMobileList"] = array();




//	KETERANGAN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "KETERANGAN";
	$fdata["GoodName"] = "KETERANGAN";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("sp_summary_product","KETERANGAN");
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


	$tdatasp_summary_product["KETERANGAN"] = $fdata;
		$tdatasp_summary_product[".searchableFields"][] = "KETERANGAN";
//	Suminsured
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Suminsured";
	$fdata["GoodName"] = "Suminsured";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("sp_summary_product","Suminsured");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Suminsured";

	
		$fdata["FullName"] = "Suminsured";

	
	
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


	$tdatasp_summary_product["Suminsured"] = $fdata;
		$tdatasp_summary_product[".searchableFields"][] = "Suminsured";
//	Premi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Premi";
	$fdata["GoodName"] = "Premi";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("sp_summary_product","Premi");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Premi";

	
		$fdata["FullName"] = "Premi";

	
	
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


	$tdatasp_summary_product["Premi"] = $fdata;
		$tdatasp_summary_product[".searchableFields"][] = "Premi";
//	Komisi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Komisi";
	$fdata["GoodName"] = "Komisi";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("sp_summary_product","Komisi");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Komisi";

	
		$fdata["FullName"] = "Komisi";

	
	
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


	$tdatasp_summary_product["Komisi"] = $fdata;
		$tdatasp_summary_product[".searchableFields"][] = "Komisi";


$tables_data["sp_summary_product"]=&$tdatasp_summary_product;
$field_labels["sp_summary_product"] = &$fieldLabelssp_summary_product;
$fieldToolTips["sp_summary_product"] = &$fieldToolTipssp_summary_product;
$placeHolders["sp_summary_product"] = &$placeHolderssp_summary_product;
$page_titles["sp_summary_product"] = &$pageTitlessp_summary_product;


changeTextControlsToDate( "sp_summary_product" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["sp_summary_product"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["sp_summary_product"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/sp_summary_product_ops.php" ) );



	
																												;

				

$tdatasp_summary_product[".sqlquery"] = $queryData_sp_summary_product;



$tdatasp_summary_product[".hasEvents"] = false;

?>