<?php
$tdatahasil_proses_api = array();
$tdatahasil_proses_api[".searchableFields"] = array();
$tdatahasil_proses_api[".ShortName"] = "hasil_proses_api";
$tdatahasil_proses_api[".OwnerID"] = "";
$tdatahasil_proses_api[".OriginalTable"] = "hasil_proses_api";


$tdatahasil_proses_api[".pagesByType"] = my_json_decode( "{\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatahasil_proses_api[".originalPagesByType"] = $tdatahasil_proses_api[".pagesByType"];
$tdatahasil_proses_api[".pages"] = types2pages( my_json_decode( "{\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatahasil_proses_api[".originalPages"] = $tdatahasil_proses_api[".pages"];
$tdatahasil_proses_api[".defaultPages"] = my_json_decode( "{\"import\":\"import\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatahasil_proses_api[".originalDefaultPages"] = $tdatahasil_proses_api[".defaultPages"];

//	field labels
$fieldLabelshasil_proses_api = array();
$fieldToolTipshasil_proses_api = array();
$pageTitleshasil_proses_api = array();
$placeHoldershasil_proses_api = array();

if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelshasil_proses_api["Indonesian"] = array();
	$fieldToolTipshasil_proses_api["Indonesian"] = array();
	$placeHoldershasil_proses_api["Indonesian"] = array();
	$pageTitleshasil_proses_api["Indonesian"] = array();
	$fieldLabelshasil_proses_api["Indonesian"]["BSMID"] = "BSMID";
	$fieldToolTipshasil_proses_api["Indonesian"]["BSMID"] = "";
	$placeHoldershasil_proses_api["Indonesian"]["BSMID"] = "";
	$fieldLabelshasil_proses_api["Indonesian"]["PROPNO"] = "No. Proposal";
	$fieldToolTipshasil_proses_api["Indonesian"]["PROPNO"] = "";
	$placeHoldershasil_proses_api["Indonesian"]["PROPNO"] = "";
	$fieldLabelshasil_proses_api["Indonesian"]["REGDATE"] = "Tanggal";
	$fieldToolTipshasil_proses_api["Indonesian"]["REGDATE"] = "";
	$placeHoldershasil_proses_api["Indonesian"]["REGDATE"] = "";
	$fieldLabelshasil_proses_api["Indonesian"]["TTG"] = "TTG";
	$fieldToolTipshasil_proses_api["Indonesian"]["TTG"] = "";
	$placeHoldershasil_proses_api["Indonesian"]["TTG"] = "";
	$fieldLabelshasil_proses_api["Indonesian"]["SDATE"] = "SDATE";
	$fieldToolTipshasil_proses_api["Indonesian"]["SDATE"] = "";
	$placeHoldershasil_proses_api["Indonesian"]["SDATE"] = "";
	$fieldLabelshasil_proses_api["Indonesian"]["EDATE"] = "EDATE";
	$fieldToolTipshasil_proses_api["Indonesian"]["EDATE"] = "";
	$placeHoldershasil_proses_api["Indonesian"]["EDATE"] = "";
	$fieldLabelshasil_proses_api["Indonesian"]["MTUSI"] = "MTUSI";
	$fieldToolTipshasil_proses_api["Indonesian"]["MTUSI"] = "";
	$placeHoldershasil_proses_api["Indonesian"]["MTUSI"] = "";
	$fieldLabelshasil_proses_api["Indonesian"]["SI"] = "SI";
	$fieldToolTipshasil_proses_api["Indonesian"]["SI"] = "";
	$placeHoldershasil_proses_api["Indonesian"]["SI"] = "";
	$fieldLabelshasil_proses_api["Indonesian"]["RATE"] = "RATE";
	$fieldToolTipshasil_proses_api["Indonesian"]["RATE"] = "";
	$placeHoldershasil_proses_api["Indonesian"]["RATE"] = "";
	$fieldLabelshasil_proses_api["Indonesian"]["RATEUNIT"] = "RATEUNIT";
	$fieldToolTipshasil_proses_api["Indonesian"]["RATEUNIT"] = "";
	$placeHoldershasil_proses_api["Indonesian"]["RATEUNIT"] = "";
	$fieldLabelshasil_proses_api["Indonesian"]["MTUPREMI"] = "MTUPREMI";
	$fieldToolTipshasil_proses_api["Indonesian"]["MTUPREMI"] = "";
	$placeHoldershasil_proses_api["Indonesian"]["MTUPREMI"] = "";
	$fieldLabelshasil_proses_api["Indonesian"]["PREMI"] = "Premi";
	$fieldToolTipshasil_proses_api["Indonesian"]["PREMI"] = "";
	$placeHoldershasil_proses_api["Indonesian"]["PREMI"] = "";
	$fieldLabelshasil_proses_api["Indonesian"]["KODETOC"] = "KODETOC";
	$fieldToolTipshasil_proses_api["Indonesian"]["KODETOC"] = "";
	$placeHoldershasil_proses_api["Indonesian"]["KODETOC"] = "";
	$fieldLabelshasil_proses_api["Indonesian"]["STATUS"] = "STATUS";
	$fieldToolTipshasil_proses_api["Indonesian"]["STATUS"] = "";
	$placeHoldershasil_proses_api["Indonesian"]["STATUS"] = "";
	$fieldLabelshasil_proses_api["Indonesian"]["LASTUSER"] = "LASTUSER";
	$fieldToolTipshasil_proses_api["Indonesian"]["LASTUSER"] = "";
	$placeHoldershasil_proses_api["Indonesian"]["LASTUSER"] = "";
	$fieldLabelshasil_proses_api["Indonesian"]["MODEBISNISBSM"] = "MODEBISNISBSM";
	$fieldToolTipshasil_proses_api["Indonesian"]["MODEBISNISBSM"] = "";
	$placeHoldershasil_proses_api["Indonesian"]["MODEBISNISBSM"] = "";
	if (count($fieldToolTipshasil_proses_api["Indonesian"]))
		$tdatahasil_proses_api[".isUseToolTips"] = true;
}


	$tdatahasil_proses_api[".NCSearch"] = true;



$tdatahasil_proses_api[".shortTableName"] = "hasil_proses_api";
$tdatahasil_proses_api[".nSecOptions"] = 0;

$tdatahasil_proses_api[".mainTableOwnerID"] = "";
$tdatahasil_proses_api[".entityType"] = 7;
$tdatahasil_proses_api[".connId"] = "rest";


$tdatahasil_proses_api[".strOriginalTableName"] = "hasil_proses_api";

	



$tdatahasil_proses_api[".showAddInPopup"] = false;

$tdatahasil_proses_api[".showEditInPopup"] = false;

$tdatahasil_proses_api[".showViewInPopup"] = false;

$tdatahasil_proses_api[".listAjax"] = false;
//	temporary
//$tdatahasil_proses_api[".listAjax"] = false;

	$tdatahasil_proses_api[".audit"] = true;

	$tdatahasil_proses_api[".locking"] = false;


$pages = $tdatahasil_proses_api[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatahasil_proses_api[".edit"] = true;
	$tdatahasil_proses_api[".afterEditAction"] = 1;
	$tdatahasil_proses_api[".closePopupAfterEdit"] = 1;
	$tdatahasil_proses_api[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatahasil_proses_api[".add"] = true;
$tdatahasil_proses_api[".afterAddAction"] = 1;
$tdatahasil_proses_api[".closePopupAfterAdd"] = 1;
$tdatahasil_proses_api[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatahasil_proses_api[".list"] = true;
}



$tdatahasil_proses_api[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatahasil_proses_api[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatahasil_proses_api[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatahasil_proses_api[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatahasil_proses_api[".printFriendly"] = true;
}



$tdatahasil_proses_api[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatahasil_proses_api[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatahasil_proses_api[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatahasil_proses_api[".isUseAjaxSuggest"] = false;



																											

$tdatahasil_proses_api[".ajaxCodeSnippetAdded"] = false;

$tdatahasil_proses_api[".buttonsAdded"] = false;

$tdatahasil_proses_api[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahasil_proses_api[".isUseTimeForSearch"] = false;


$tdatahasil_proses_api[".badgeColor"] = "5F9EA0";


$tdatahasil_proses_api[".allSearchFields"] = array();
$tdatahasil_proses_api[".filterFields"] = array();
$tdatahasil_proses_api[".requiredSearchFields"] = array();

$tdatahasil_proses_api[".googleLikeFields"] = array();
$tdatahasil_proses_api[".googleLikeFields"][] = "BSMID";
$tdatahasil_proses_api[".googleLikeFields"][] = "PROPNO";
$tdatahasil_proses_api[".googleLikeFields"][] = "REGDATE";
$tdatahasil_proses_api[".googleLikeFields"][] = "TTG";
$tdatahasil_proses_api[".googleLikeFields"][] = "SDATE";
$tdatahasil_proses_api[".googleLikeFields"][] = "EDATE";
$tdatahasil_proses_api[".googleLikeFields"][] = "MTUSI";
$tdatahasil_proses_api[".googleLikeFields"][] = "SI";
$tdatahasil_proses_api[".googleLikeFields"][] = "RATE";
$tdatahasil_proses_api[".googleLikeFields"][] = "RATEUNIT";
$tdatahasil_proses_api[".googleLikeFields"][] = "MTUPREMI";
$tdatahasil_proses_api[".googleLikeFields"][] = "PREMI";
$tdatahasil_proses_api[".googleLikeFields"][] = "KODETOC";
$tdatahasil_proses_api[".googleLikeFields"][] = "STATUS";
$tdatahasil_proses_api[".googleLikeFields"][] = "LASTUSER";
$tdatahasil_proses_api[".googleLikeFields"][] = "MODEBISNISBSM";




$tdatahasil_proses_api[".printerPageOrientation"] = 0;
$tdatahasil_proses_api[".nPrinterPageScale"] = 100;

$tdatahasil_proses_api[".nPrinterSplitRecords"] = 40;

$tdatahasil_proses_api[".geocodingEnabled"] = false;










$tdatahasil_proses_api[".pageSize"] = 20;

$tdatahasil_proses_api[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatahasil_proses_api[".strOrderBy"] = $tstrOrderBy;

$tdatahasil_proses_api[".orderindexes"] = array();


$tdatahasil_proses_api[".sqlHead"] = "";
$tdatahasil_proses_api[".sqlFrom"] = "";
$tdatahasil_proses_api[".sqlWhereExpr"] = "";
$tdatahasil_proses_api[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahasil_proses_api[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahasil_proses_api[".arrGroupsPerPage"] = $arrGPP;

$tdatahasil_proses_api[".highlightSearchResults"] = true;

$tableKeyshasil_proses_api = array();
$tdatahasil_proses_api[".Keys"] = $tableKeyshasil_proses_api;


$tdatahasil_proses_api[".hideMobileList"] = array();




//	BSMID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "BSMID";
	$fdata["GoodName"] = "BSMID";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("hasil_proses_api","BSMID");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "data/*/BSMID";

	
		$fdata["FullName"] = "BSMID";

	
	
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


	$tdatahasil_proses_api["BSMID"] = $fdata;
		$tdatahasil_proses_api[".searchableFields"][] = "BSMID";
//	PROPNO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PROPNO";
	$fdata["GoodName"] = "PROPNO";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("hasil_proses_api","PROPNO");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "data/*/PROPNO";

	
		$fdata["FullName"] = "PROPNO";

	
	
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


	$tdatahasil_proses_api["PROPNO"] = $fdata;
		$tdatahasil_proses_api[".searchableFields"][] = "PROPNO";
//	REGDATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "REGDATE";
	$fdata["GoodName"] = "REGDATE";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("hasil_proses_api","REGDATE");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "data/*/REGDATE";

	
		$fdata["FullName"] = "REGDATE";

	
	
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


	$tdatahasil_proses_api["REGDATE"] = $fdata;
		$tdatahasil_proses_api[".searchableFields"][] = "REGDATE";
//	TTG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "TTG";
	$fdata["GoodName"] = "TTG";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("hasil_proses_api","TTG");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "data/*/TTG";

	
		$fdata["FullName"] = "TTG";

	
	
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


	$tdatahasil_proses_api["TTG"] = $fdata;
		$tdatahasil_proses_api[".searchableFields"][] = "TTG";
//	SDATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "SDATE";
	$fdata["GoodName"] = "SDATE";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("hasil_proses_api","SDATE");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "data/*/SDATE";

	
		$fdata["FullName"] = "SDATE";

	
	
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


	$tdatahasil_proses_api["SDATE"] = $fdata;
		$tdatahasil_proses_api[".searchableFields"][] = "SDATE";
//	EDATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "EDATE";
	$fdata["GoodName"] = "EDATE";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("hasil_proses_api","EDATE");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "data/*/EDATE";

	
		$fdata["FullName"] = "EDATE";

	
	
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


	$tdatahasil_proses_api["EDATE"] = $fdata;
		$tdatahasil_proses_api[".searchableFields"][] = "EDATE";
//	MTUSI
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "MTUSI";
	$fdata["GoodName"] = "MTUSI";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("hasil_proses_api","MTUSI");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "data/*/MTUSI";

	
		$fdata["FullName"] = "MTUSI";

	
	
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


	$tdatahasil_proses_api["MTUSI"] = $fdata;
		$tdatahasil_proses_api[".searchableFields"][] = "MTUSI";
//	SI
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "SI";
	$fdata["GoodName"] = "SI";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("hasil_proses_api","SI");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "data/*/SI";

	
		$fdata["FullName"] = "SI";

	
	
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


	$tdatahasil_proses_api["SI"] = $fdata;
		$tdatahasil_proses_api[".searchableFields"][] = "SI";
//	RATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "RATE";
	$fdata["GoodName"] = "RATE";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("hasil_proses_api","RATE");
	$fdata["FieldType"] = 131;


	
	
			

		$fdata["strField"] = "data/*/RATE";

	
		$fdata["FullName"] = "RATE";

	
	
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


	$tdatahasil_proses_api["RATE"] = $fdata;
		$tdatahasil_proses_api[".searchableFields"][] = "RATE";
//	RATEUNIT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "RATEUNIT";
	$fdata["GoodName"] = "RATEUNIT";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("hasil_proses_api","RATEUNIT");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "data/*/RATEUNIT";

	
		$fdata["FullName"] = "RATEUNIT";

	
	
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


	$tdatahasil_proses_api["RATEUNIT"] = $fdata;
		$tdatahasil_proses_api[".searchableFields"][] = "RATEUNIT";
//	MTUPREMI
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "MTUPREMI";
	$fdata["GoodName"] = "MTUPREMI";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("hasil_proses_api","MTUPREMI");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "data/*/MTUPREMI";

	
		$fdata["FullName"] = "MTUPREMI";

	
	
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


	$tdatahasil_proses_api["MTUPREMI"] = $fdata;
		$tdatahasil_proses_api[".searchableFields"][] = "MTUPREMI";
//	PREMI
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "PREMI";
	$fdata["GoodName"] = "PREMI";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("hasil_proses_api","PREMI");
	$fdata["FieldType"] = 131;


	
	
			

		$fdata["strField"] = "data/*/PREMI";

	
		$fdata["FullName"] = "PREMI";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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


	$tdatahasil_proses_api["PREMI"] = $fdata;
		$tdatahasil_proses_api[".searchableFields"][] = "PREMI";
//	KODETOC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "KODETOC";
	$fdata["GoodName"] = "KODETOC";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("hasil_proses_api","KODETOC");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "data/*/KODETOC";

	
		$fdata["FullName"] = "KODETOC";

	
	
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


	$tdatahasil_proses_api["KODETOC"] = $fdata;
		$tdatahasil_proses_api[".searchableFields"][] = "KODETOC";
//	STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "STATUS";
	$fdata["GoodName"] = "STATUS";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("hasil_proses_api","STATUS");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "data/*/STATUS";

	
		$fdata["FullName"] = "STATUS";

	
	
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


	$tdatahasil_proses_api["STATUS"] = $fdata;
		$tdatahasil_proses_api[".searchableFields"][] = "STATUS";
//	LASTUSER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "LASTUSER";
	$fdata["GoodName"] = "LASTUSER";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("hasil_proses_api","LASTUSER");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "data/*/LASTUSER";

	
		$fdata["FullName"] = "LASTUSER";

	
	
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


	$tdatahasil_proses_api["LASTUSER"] = $fdata;
		$tdatahasil_proses_api[".searchableFields"][] = "LASTUSER";
//	MODEBISNISBSM
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "MODEBISNISBSM";
	$fdata["GoodName"] = "MODEBISNISBSM";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("hasil_proses_api","MODEBISNISBSM");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "data/*/MODEBISNISBSM";

	
		$fdata["FullName"] = "MODEBISNISBSM";

	
	
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


	$tdatahasil_proses_api["MODEBISNISBSM"] = $fdata;
		$tdatahasil_proses_api[".searchableFields"][] = "MODEBISNISBSM";


$tables_data["hasil_proses_api"]=&$tdatahasil_proses_api;
$field_labels["hasil_proses_api"] = &$fieldLabelshasil_proses_api;
$fieldToolTips["hasil_proses_api"] = &$fieldToolTipshasil_proses_api;
$placeHolders["hasil_proses_api"] = &$placeHoldershasil_proses_api;
$page_titles["hasil_proses_api"] = &$pageTitleshasil_proses_api;


changeTextControlsToDate( "hasil_proses_api" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["hasil_proses_api"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["hasil_proses_api"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/hasil_proses_api_ops.php" ) );



	
																												;

																

$tdatahasil_proses_api[".sqlquery"] = $queryData_hasil_proses_api;



$tdatahasil_proses_api[".hasEvents"] = false;

?>