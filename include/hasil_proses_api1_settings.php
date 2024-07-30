<?php
$tdatahasil_proses_api1 = array();
$tdatahasil_proses_api1[".searchableFields"] = array();
$tdatahasil_proses_api1[".ShortName"] = "hasil_proses_api1";
$tdatahasil_proses_api1[".OwnerID"] = "";
$tdatahasil_proses_api1[".OriginalTable"] = "hasil_proses_api";


$tdatahasil_proses_api1[".pagesByType"] = my_json_decode( "{\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatahasil_proses_api1[".originalPagesByType"] = $tdatahasil_proses_api1[".pagesByType"];
$tdatahasil_proses_api1[".pages"] = types2pages( my_json_decode( "{\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatahasil_proses_api1[".originalPages"] = $tdatahasil_proses_api1[".pages"];
$tdatahasil_proses_api1[".defaultPages"] = my_json_decode( "{\"import\":\"import\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatahasil_proses_api1[".originalDefaultPages"] = $tdatahasil_proses_api1[".defaultPages"];

//	field labels
$fieldLabelshasil_proses_api1 = array();
$fieldToolTipshasil_proses_api1 = array();
$pageTitleshasil_proses_api1 = array();
$placeHoldershasil_proses_api1 = array();

if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelshasil_proses_api1["Indonesian"] = array();
	$fieldToolTipshasil_proses_api1["Indonesian"] = array();
	$placeHoldershasil_proses_api1["Indonesian"] = array();
	$pageTitleshasil_proses_api1["Indonesian"] = array();
	$fieldLabelshasil_proses_api1["Indonesian"]["BSMID"] = "BSMID";
	$fieldToolTipshasil_proses_api1["Indonesian"]["BSMID"] = "";
	$placeHoldershasil_proses_api1["Indonesian"]["BSMID"] = "";
	$fieldLabelshasil_proses_api1["Indonesian"]["PROPNO"] = "No. Proposal";
	$fieldToolTipshasil_proses_api1["Indonesian"]["PROPNO"] = "";
	$placeHoldershasil_proses_api1["Indonesian"]["PROPNO"] = "";
	$fieldLabelshasil_proses_api1["Indonesian"]["REGDATE"] = "Tanggal";
	$fieldToolTipshasil_proses_api1["Indonesian"]["REGDATE"] = "";
	$placeHoldershasil_proses_api1["Indonesian"]["REGDATE"] = "";
	$fieldLabelshasil_proses_api1["Indonesian"]["TTG"] = "Nama Tertanggung";
	$fieldToolTipshasil_proses_api1["Indonesian"]["TTG"] = "";
	$placeHoldershasil_proses_api1["Indonesian"]["TTG"] = "";
	$fieldLabelshasil_proses_api1["Indonesian"]["SDATE"] = "Tanggal Akad";
	$fieldToolTipshasil_proses_api1["Indonesian"]["SDATE"] = "";
	$placeHoldershasil_proses_api1["Indonesian"]["SDATE"] = "";
	$fieldLabelshasil_proses_api1["Indonesian"]["EDATE"] = "Tanggal Jatuh Tempo";
	$fieldToolTipshasil_proses_api1["Indonesian"]["EDATE"] = "";
	$placeHoldershasil_proses_api1["Indonesian"]["EDATE"] = "";
	$fieldLabelshasil_proses_api1["Indonesian"]["MTUSI"] = "Mata Uang";
	$fieldToolTipshasil_proses_api1["Indonesian"]["MTUSI"] = "";
	$placeHoldershasil_proses_api1["Indonesian"]["MTUSI"] = "";
	$fieldLabelshasil_proses_api1["Indonesian"]["SI"] = "Jumlah Pembiayaan";
	$fieldToolTipshasil_proses_api1["Indonesian"]["SI"] = "";
	$placeHoldershasil_proses_api1["Indonesian"]["SI"] = "";
	$fieldLabelshasil_proses_api1["Indonesian"]["RATE"] = "Rate";
	$fieldToolTipshasil_proses_api1["Indonesian"]["RATE"] = "";
	$placeHoldershasil_proses_api1["Indonesian"]["RATE"] = "";
	$fieldLabelshasil_proses_api1["Indonesian"]["RATEUNIT"] = "RATEUNIT";
	$fieldToolTipshasil_proses_api1["Indonesian"]["RATEUNIT"] = "";
	$placeHoldershasil_proses_api1["Indonesian"]["RATEUNIT"] = "";
	$fieldLabelshasil_proses_api1["Indonesian"]["MTUPREMI"] = "Mata Uang Premi";
	$fieldToolTipshasil_proses_api1["Indonesian"]["MTUPREMI"] = "";
	$placeHoldershasil_proses_api1["Indonesian"]["MTUPREMI"] = "";
	$fieldLabelshasil_proses_api1["Indonesian"]["PREMI"] = "Premi";
	$fieldToolTipshasil_proses_api1["Indonesian"]["PREMI"] = "";
	$placeHoldershasil_proses_api1["Indonesian"]["PREMI"] = "";
	$fieldLabelshasil_proses_api1["Indonesian"]["KODETOC"] = "KODETOC";
	$fieldToolTipshasil_proses_api1["Indonesian"]["KODETOC"] = "";
	$placeHoldershasil_proses_api1["Indonesian"]["KODETOC"] = "";
	$fieldLabelshasil_proses_api1["Indonesian"]["STATUS"] = "Status";
	$fieldToolTipshasil_proses_api1["Indonesian"]["STATUS"] = "";
	$placeHoldershasil_proses_api1["Indonesian"]["STATUS"] = "";
	$fieldLabelshasil_proses_api1["Indonesian"]["LASTUSER"] = "LASTUSER";
	$fieldToolTipshasil_proses_api1["Indonesian"]["LASTUSER"] = "";
	$placeHoldershasil_proses_api1["Indonesian"]["LASTUSER"] = "";
	$fieldLabelshasil_proses_api1["Indonesian"]["MODEBISNISBSM"] = "MODEBISNISBSM";
	$fieldToolTipshasil_proses_api1["Indonesian"]["MODEBISNISBSM"] = "";
	$placeHoldershasil_proses_api1["Indonesian"]["MODEBISNISBSM"] = "";
	if (count($fieldToolTipshasil_proses_api1["Indonesian"]))
		$tdatahasil_proses_api1[".isUseToolTips"] = true;
}


	$tdatahasil_proses_api1[".NCSearch"] = true;



$tdatahasil_proses_api1[".shortTableName"] = "hasil_proses_api1";
$tdatahasil_proses_api1[".nSecOptions"] = 0;

$tdatahasil_proses_api1[".mainTableOwnerID"] = "";
$tdatahasil_proses_api1[".entityType"] = 7;
$tdatahasil_proses_api1[".connId"] = "rest";


$tdatahasil_proses_api1[".strOriginalTableName"] = "hasil_proses_api";

	



$tdatahasil_proses_api1[".showAddInPopup"] = false;

$tdatahasil_proses_api1[".showEditInPopup"] = false;

$tdatahasil_proses_api1[".showViewInPopup"] = false;

$tdatahasil_proses_api1[".listAjax"] = false;
//	temporary
//$tdatahasil_proses_api1[".listAjax"] = false;

	$tdatahasil_proses_api1[".audit"] = true;

	$tdatahasil_proses_api1[".locking"] = false;


$pages = $tdatahasil_proses_api1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatahasil_proses_api1[".edit"] = true;
	$tdatahasil_proses_api1[".afterEditAction"] = 1;
	$tdatahasil_proses_api1[".closePopupAfterEdit"] = 1;
	$tdatahasil_proses_api1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatahasil_proses_api1[".add"] = true;
$tdatahasil_proses_api1[".afterAddAction"] = 1;
$tdatahasil_proses_api1[".closePopupAfterAdd"] = 1;
$tdatahasil_proses_api1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatahasil_proses_api1[".list"] = true;
}



$tdatahasil_proses_api1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatahasil_proses_api1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatahasil_proses_api1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatahasil_proses_api1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatahasil_proses_api1[".printFriendly"] = true;
}



$tdatahasil_proses_api1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatahasil_proses_api1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatahasil_proses_api1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatahasil_proses_api1[".isUseAjaxSuggest"] = false;



																											

$tdatahasil_proses_api1[".ajaxCodeSnippetAdded"] = false;

$tdatahasil_proses_api1[".buttonsAdded"] = false;

$tdatahasil_proses_api1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahasil_proses_api1[".isUseTimeForSearch"] = false;


$tdatahasil_proses_api1[".badgeColor"] = "1E90FF";


$tdatahasil_proses_api1[".allSearchFields"] = array();
$tdatahasil_proses_api1[".filterFields"] = array();
$tdatahasil_proses_api1[".requiredSearchFields"] = array();

$tdatahasil_proses_api1[".googleLikeFields"] = array();
$tdatahasil_proses_api1[".googleLikeFields"][] = "BSMID";
$tdatahasil_proses_api1[".googleLikeFields"][] = "PROPNO";
$tdatahasil_proses_api1[".googleLikeFields"][] = "REGDATE";
$tdatahasil_proses_api1[".googleLikeFields"][] = "TTG";
$tdatahasil_proses_api1[".googleLikeFields"][] = "SDATE";
$tdatahasil_proses_api1[".googleLikeFields"][] = "EDATE";
$tdatahasil_proses_api1[".googleLikeFields"][] = "MTUSI";
$tdatahasil_proses_api1[".googleLikeFields"][] = "SI";
$tdatahasil_proses_api1[".googleLikeFields"][] = "RATE";
$tdatahasil_proses_api1[".googleLikeFields"][] = "RATEUNIT";
$tdatahasil_proses_api1[".googleLikeFields"][] = "MTUPREMI";
$tdatahasil_proses_api1[".googleLikeFields"][] = "PREMI";
$tdatahasil_proses_api1[".googleLikeFields"][] = "KODETOC";
$tdatahasil_proses_api1[".googleLikeFields"][] = "STATUS";
$tdatahasil_proses_api1[".googleLikeFields"][] = "LASTUSER";
$tdatahasil_proses_api1[".googleLikeFields"][] = "MODEBISNISBSM";




$tdatahasil_proses_api1[".printerPageOrientation"] = 0;
$tdatahasil_proses_api1[".nPrinterPageScale"] = 100;

$tdatahasil_proses_api1[".nPrinterSplitRecords"] = 40;

$tdatahasil_proses_api1[".geocodingEnabled"] = false;




$tdatahasil_proses_api1[".isDisplayLoading"] = true;



$tdatahasil_proses_api1[".noRecordsFirstPage"] = true;



$tdatahasil_proses_api1[".pageSize"] = 20;

$tdatahasil_proses_api1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatahasil_proses_api1[".strOrderBy"] = $tstrOrderBy;

$tdatahasil_proses_api1[".orderindexes"] = array();


$tdatahasil_proses_api1[".sqlHead"] = "";
$tdatahasil_proses_api1[".sqlFrom"] = "";
$tdatahasil_proses_api1[".sqlWhereExpr"] = "";
$tdatahasil_proses_api1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahasil_proses_api1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahasil_proses_api1[".arrGroupsPerPage"] = $arrGPP;

$tdatahasil_proses_api1[".highlightSearchResults"] = true;

$tableKeyshasil_proses_api1 = array();
$tdatahasil_proses_api1[".Keys"] = $tableKeyshasil_proses_api1;


$tdatahasil_proses_api1[".hideMobileList"] = array();




//	BSMID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "BSMID";
	$fdata["GoodName"] = "BSMID";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("hasil_proses_api1","BSMID");
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


	$tdatahasil_proses_api1["BSMID"] = $fdata;
		$tdatahasil_proses_api1[".searchableFields"][] = "BSMID";
//	PROPNO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PROPNO";
	$fdata["GoodName"] = "PROPNO";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("hasil_proses_api1","PROPNO");
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


	$tdatahasil_proses_api1["PROPNO"] = $fdata;
		$tdatahasil_proses_api1[".searchableFields"][] = "PROPNO";
//	REGDATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "REGDATE";
	$fdata["GoodName"] = "REGDATE";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("hasil_proses_api1","REGDATE");
	$fdata["FieldType"] = 7;


	
	
			

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
		$fdata["defaultSearchOption"] = "Between";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Between";
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


	$tdatahasil_proses_api1["REGDATE"] = $fdata;
		$tdatahasil_proses_api1[".searchableFields"][] = "REGDATE";
//	TTG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "TTG";
	$fdata["GoodName"] = "TTG";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("hasil_proses_api1","TTG");
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


	$tdatahasil_proses_api1["TTG"] = $fdata;
		$tdatahasil_proses_api1[".searchableFields"][] = "TTG";
//	SDATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "SDATE";
	$fdata["GoodName"] = "SDATE";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("hasil_proses_api1","SDATE");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "data/*/SDATE";

	
		$fdata["FullName"] = "SDATE";

	
	
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


	$tdatahasil_proses_api1["SDATE"] = $fdata;
		$tdatahasil_proses_api1[".searchableFields"][] = "SDATE";
//	EDATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "EDATE";
	$fdata["GoodName"] = "EDATE";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("hasil_proses_api1","EDATE");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "data/*/EDATE";

	
		$fdata["FullName"] = "EDATE";

	
	
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


	$tdatahasil_proses_api1["EDATE"] = $fdata;
		$tdatahasil_proses_api1[".searchableFields"][] = "EDATE";
//	MTUSI
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "MTUSI";
	$fdata["GoodName"] = "MTUSI";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("hasil_proses_api1","MTUSI");
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


	$tdatahasil_proses_api1["MTUSI"] = $fdata;
		$tdatahasil_proses_api1[".searchableFields"][] = "MTUSI";
//	SI
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "SI";
	$fdata["GoodName"] = "SI";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("hasil_proses_api1","SI");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "data/*/SI";

	
		$fdata["FullName"] = "SI";

	
	
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


	$tdatahasil_proses_api1["SI"] = $fdata;
		$tdatahasil_proses_api1[".searchableFields"][] = "SI";
//	RATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "RATE";
	$fdata["GoodName"] = "RATE";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("hasil_proses_api1","RATE");
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


	$tdatahasil_proses_api1["RATE"] = $fdata;
		$tdatahasil_proses_api1[".searchableFields"][] = "RATE";
//	RATEUNIT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "RATEUNIT";
	$fdata["GoodName"] = "RATEUNIT";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("hasil_proses_api1","RATEUNIT");
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


	$tdatahasil_proses_api1["RATEUNIT"] = $fdata;
		$tdatahasil_proses_api1[".searchableFields"][] = "RATEUNIT";
//	MTUPREMI
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "MTUPREMI";
	$fdata["GoodName"] = "MTUPREMI";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("hasil_proses_api1","MTUPREMI");
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


	$tdatahasil_proses_api1["MTUPREMI"] = $fdata;
		$tdatahasil_proses_api1[".searchableFields"][] = "MTUPREMI";
//	PREMI
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "PREMI";
	$fdata["GoodName"] = "PREMI";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("hasil_proses_api1","PREMI");
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


	$tdatahasil_proses_api1["PREMI"] = $fdata;
		$tdatahasil_proses_api1[".searchableFields"][] = "PREMI";
//	KODETOC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "KODETOC";
	$fdata["GoodName"] = "KODETOC";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("hasil_proses_api1","KODETOC");
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


	$tdatahasil_proses_api1["KODETOC"] = $fdata;
		$tdatahasil_proses_api1[".searchableFields"][] = "KODETOC";
//	STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "STATUS";
	$fdata["GoodName"] = "STATUS";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("hasil_proses_api1","STATUS");
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


	$tdatahasil_proses_api1["STATUS"] = $fdata;
		$tdatahasil_proses_api1[".searchableFields"][] = "STATUS";
//	LASTUSER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "LASTUSER";
	$fdata["GoodName"] = "LASTUSER";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("hasil_proses_api1","LASTUSER");
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


	$tdatahasil_proses_api1["LASTUSER"] = $fdata;
		$tdatahasil_proses_api1[".searchableFields"][] = "LASTUSER";
//	MODEBISNISBSM
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "MODEBISNISBSM";
	$fdata["GoodName"] = "MODEBISNISBSM";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("hasil_proses_api1","MODEBISNISBSM");
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


	$tdatahasil_proses_api1["MODEBISNISBSM"] = $fdata;
		$tdatahasil_proses_api1[".searchableFields"][] = "MODEBISNISBSM";


$tables_data["hasil_proses_api1"]=&$tdatahasil_proses_api1;
$field_labels["hasil_proses_api1"] = &$fieldLabelshasil_proses_api1;
$fieldToolTips["hasil_proses_api1"] = &$fieldToolTipshasil_proses_api1;
$placeHolders["hasil_proses_api1"] = &$placeHoldershasil_proses_api1;
$page_titles["hasil_proses_api1"] = &$pageTitleshasil_proses_api1;


changeTextControlsToDate( "hasil_proses_api1" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["hasil_proses_api1"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["hasil_proses_api1"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/hasil_proses_api1_ops.php" ) );



	
																												;

																

$tdatahasil_proses_api1[".sqlquery"] = $queryData_hasil_proses_api1;



$tdatahasil_proses_api1[".hasEvents"] = false;

?>