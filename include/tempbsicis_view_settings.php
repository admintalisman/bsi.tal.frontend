<?php
$tdatatempbsicis_view = array();
$tdatatempbsicis_view[".searchableFields"] = array();
$tdatatempbsicis_view[".ShortName"] = "tempbsicis_view";
$tdatatempbsicis_view[".OwnerID"] = "";
$tdatatempbsicis_view[".OriginalTable"] = "TEMPBSICIS";


$tdatatempbsicis_view[".pagesByType"] = my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" );
$tdatatempbsicis_view[".originalPagesByType"] = $tdatatempbsicis_view[".pagesByType"];
$tdatatempbsicis_view[".pages"] = types2pages( my_json_decode( "{\"report\":[\"report\"],\"rprint\":[\"rprint\"],\"search\":[\"search\"]}" ) );
$tdatatempbsicis_view[".originalPages"] = $tdatatempbsicis_view[".pages"];
$tdatatempbsicis_view[".defaultPages"] = my_json_decode( "{\"report\":\"report\",\"rprint\":\"rprint\",\"search\":\"search\"}" );
$tdatatempbsicis_view[".originalDefaultPages"] = $tdatatempbsicis_view[".defaultPages"];

//	field labels
$fieldLabelstempbsicis_view = array();
$fieldToolTipstempbsicis_view = array();
$pageTitlestempbsicis_view = array();
$placeHolderstempbsicis_view = array();

if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelstempbsicis_view["Indonesian"] = array();
	$fieldToolTipstempbsicis_view["Indonesian"] = array();
	$placeHolderstempbsicis_view["Indonesian"] = array();
	$pageTitlestempbsicis_view["Indonesian"] = array();
	$fieldLabelstempbsicis_view["Indonesian"]["IDCIS"] = "IDCIS";
	$fieldToolTipstempbsicis_view["Indonesian"]["IDCIS"] = "";
	$placeHolderstempbsicis_view["Indonesian"]["IDCIS"] = "";
	$fieldLabelstempbsicis_view["Indonesian"]["DATE"] = "Tanggal Deklarasi";
	$fieldToolTipstempbsicis_view["Indonesian"]["DATE"] = "";
	$placeHolderstempbsicis_view["Indonesian"]["DATE"] = "";
	$fieldLabelstempbsicis_view["Indonesian"]["KODECABANG"] = "Id Cabang";
	$fieldToolTipstempbsicis_view["Indonesian"]["KODECABANG"] = "";
	$placeHolderstempbsicis_view["Indonesian"]["KODECABANG"] = "";
	$fieldLabelstempbsicis_view["Indonesian"]["SUMINSURED"] = "Nilai Pertanggungan";
	$fieldToolTipstempbsicis_view["Indonesian"]["SUMINSURED"] = "";
	$placeHolderstempbsicis_view["Indonesian"]["SUMINSURED"] = "";
	$fieldLabelstempbsicis_view["Indonesian"]["CIS_UPL_USER"] = "CIS UPL USER";
	$fieldToolTipstempbsicis_view["Indonesian"]["CIS_UPL_USER"] = "";
	$placeHolderstempbsicis_view["Indonesian"]["CIS_UPL_USER"] = "";
	$fieldLabelstempbsicis_view["Indonesian"]["CIS_UPL_DATE"] = "CIS UPL DATE";
	$fieldToolTipstempbsicis_view["Indonesian"]["CIS_UPL_DATE"] = "";
	$placeHolderstempbsicis_view["Indonesian"]["CIS_UPL_DATE"] = "";
	$fieldLabelstempbsicis_view["Indonesian"]["CIS_FL"] = "CIS FL";
	$fieldToolTipstempbsicis_view["Indonesian"]["CIS_FL"] = "";
	$placeHolderstempbsicis_view["Indonesian"]["CIS_FL"] = "";
	if (count($fieldToolTipstempbsicis_view["Indonesian"]))
		$tdatatempbsicis_view[".isUseToolTips"] = true;
}


	$tdatatempbsicis_view[".NCSearch"] = true;



$tdatatempbsicis_view[".shortTableName"] = "tempbsicis_view";
$tdatatempbsicis_view[".nSecOptions"] = 0;

$tdatatempbsicis_view[".mainTableOwnerID"] = "";
$tdatatempbsicis_view[".entityType"] = 2;
$tdatatempbsicis_view[".connId"] = "u736239518_btn_at_154_41_241_2";


$tdatatempbsicis_view[".strOriginalTableName"] = "TEMPBSICIS";

	



$tdatatempbsicis_view[".showAddInPopup"] = false;

$tdatatempbsicis_view[".showEditInPopup"] = false;

$tdatatempbsicis_view[".showViewInPopup"] = false;

$tdatatempbsicis_view[".listAjax"] = false;
//	temporary
//$tdatatempbsicis_view[".listAjax"] = false;

	$tdatatempbsicis_view[".audit"] = false;

	$tdatatempbsicis_view[".locking"] = false;


$pages = $tdatatempbsicis_view[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatempbsicis_view[".edit"] = true;
	$tdatatempbsicis_view[".afterEditAction"] = 1;
	$tdatatempbsicis_view[".closePopupAfterEdit"] = 1;
	$tdatatempbsicis_view[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatempbsicis_view[".add"] = true;
$tdatatempbsicis_view[".afterAddAction"] = 1;
$tdatatempbsicis_view[".closePopupAfterAdd"] = 1;
$tdatatempbsicis_view[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatempbsicis_view[".list"] = true;
}



$tdatatempbsicis_view[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatempbsicis_view[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatempbsicis_view[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatempbsicis_view[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatempbsicis_view[".printFriendly"] = true;
}



$tdatatempbsicis_view[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatempbsicis_view[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatempbsicis_view[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatempbsicis_view[".isUseAjaxSuggest"] = true;



																											

$tdatatempbsicis_view[".ajaxCodeSnippetAdded"] = false;

$tdatatempbsicis_view[".buttonsAdded"] = false;

$tdatatempbsicis_view[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatempbsicis_view[".isUseTimeForSearch"] = false;


$tdatatempbsicis_view[".badgeColor"] = "6DA5C8";


$tdatatempbsicis_view[".allSearchFields"] = array();
$tdatatempbsicis_view[".filterFields"] = array();
$tdatatempbsicis_view[".requiredSearchFields"] = array();

$tdatatempbsicis_view[".googleLikeFields"] = array();
$tdatatempbsicis_view[".googleLikeFields"][] = "IDCIS";
$tdatatempbsicis_view[".googleLikeFields"][] = "DATE";
$tdatatempbsicis_view[".googleLikeFields"][] = "KODECABANG";
$tdatatempbsicis_view[".googleLikeFields"][] = "SUMINSURED";
$tdatatempbsicis_view[".googleLikeFields"][] = "CIS_UPL_USER";
$tdatatempbsicis_view[".googleLikeFields"][] = "CIS_UPL_DATE";
$tdatatempbsicis_view[".googleLikeFields"][] = "CIS_FL";



$tdatatempbsicis_view[".tableType"] = "report";

$tdatatempbsicis_view[".printerPageOrientation"] = 0;
$tdatatempbsicis_view[".nPrinterPageScale"] = 100;

$tdatatempbsicis_view[".nPrinterSplitRecords"] = 40;

$tdatatempbsicis_view[".geocodingEnabled"] = false;

//report settings

$tdatatempbsicis_view[".reportPrintGroupsPerPage"] = 3;
$tdatatempbsicis_view[".reportPrintRecordsPerPage"] = 40;

$tdatatempbsicis_view[".pageSizeGroups"] = 5;
$tdatatempbsicis_view[".pageSizeRecords"] = 20;


//end of report settings










$tstrOrderBy = "";
$tdatatempbsicis_view[".strOrderBy"] = $tstrOrderBy;

$tdatatempbsicis_view[".orderindexes"] = array();


$tdatatempbsicis_view[".sqlHead"] = "SELECT IDCIS,  	`DATE`,  	KODECABANG,  	SUMINSURED,  	CIS_UPL_USER,  	CIS_UPL_DATE,  	CIS_FL";
$tdatatempbsicis_view[".sqlFrom"] = "FROM TEMPBSICIS";
$tdatatempbsicis_view[".sqlWhereExpr"] = "(KODECABANG = ':session.IdExt')";
$tdatatempbsicis_view[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatempbsicis_view[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatempbsicis_view[".arrGroupsPerPage"] = $arrGPP;

$tdatatempbsicis_view[".highlightSearchResults"] = true;

$tableKeystempbsicis_view = array();
$tableKeystempbsicis_view[] = "IDCIS";
$tdatatempbsicis_view[".Keys"] = $tableKeystempbsicis_view;


$tdatatempbsicis_view[".hideMobileList"] = array();




//	IDCIS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IDCIS";
	$fdata["GoodName"] = "IDCIS";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIS_view","IDCIS");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatatempbsicis_view["IDCIS"] = $fdata;
		$tdatatempbsicis_view[".searchableFields"][] = "IDCIS";
//	DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "DATE";
	$fdata["GoodName"] = "DATE";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIS_view","DATE");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatatempbsicis_view["DATE"] = $fdata;
		$tdatatempbsicis_view[".searchableFields"][] = "DATE";
//	KODECABANG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "KODECABANG";
	$fdata["GoodName"] = "KODECABANG";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIS_view","KODECABANG");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatatempbsicis_view["KODECABANG"] = $fdata;
		$tdatatempbsicis_view[".searchableFields"][] = "KODECABANG";
//	SUMINSURED
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "SUMINSURED";
	$fdata["GoodName"] = "SUMINSURED";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIS_view","SUMINSURED");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatatempbsicis_view["SUMINSURED"] = $fdata;
		$tdatatempbsicis_view[".searchableFields"][] = "SUMINSURED";
//	CIS_UPL_USER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "CIS_UPL_USER";
	$fdata["GoodName"] = "CIS_UPL_USER";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIS_view","CIS_UPL_USER");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatatempbsicis_view["CIS_UPL_USER"] = $fdata;
		$tdatatempbsicis_view[".searchableFields"][] = "CIS_UPL_USER";
//	CIS_UPL_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "CIS_UPL_DATE";
	$fdata["GoodName"] = "CIS_UPL_DATE";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIS_view","CIS_UPL_DATE");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatatempbsicis_view["CIS_UPL_DATE"] = $fdata;
		$tdatatempbsicis_view[".searchableFields"][] = "CIS_UPL_DATE";
//	CIS_FL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "CIS_FL";
	$fdata["GoodName"] = "CIS_FL";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIS_view","CIS_FL");
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

	$fdata["ViewFormats"]["report"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatatempbsicis_view["CIS_FL"] = $fdata;
		$tdatatempbsicis_view[".searchableFields"][] = "CIS_FL";


$tables_data["TEMPBSICIS_view"]=&$tdatatempbsicis_view;
$field_labels["TEMPBSICIS_view"] = &$fieldLabelstempbsicis_view;
$fieldToolTips["TEMPBSICIS_view"] = &$fieldToolTipstempbsicis_view;
$placeHolders["TEMPBSICIS_view"] = &$placeHolderstempbsicis_view;
$page_titles["TEMPBSICIS_view"] = &$pageTitlestempbsicis_view;


changeTextControlsToDate( "TEMPBSICIS_view" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["TEMPBSICIS_view"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["TEMPBSICIS_view"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tempbsicis_view()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "IDCIS,  	`DATE`,  	KODECABANG,  	SUMINSURED,  	CIS_UPL_USER,  	CIS_UPL_DATE,  	CIS_FL";
$proto0["m_strFrom"] = "FROM TEMPBSICIS";
$proto0["m_strWhere"] = "(KODECABANG = ':session.IdExt')";
$proto0["m_strOrderBy"] = "";
	
																												;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "KODECABANG = ':session.IdExt'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "KODECABANG",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS_view"
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
	"m_strName" => "IDCIS",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS_view"
));

$proto6["m_sql"] = "IDCIS";
$proto6["m_srcTableName"] = "TEMPBSICIS_view";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "DATE",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS_view"
));

$proto8["m_sql"] = "`DATE`";
$proto8["m_srcTableName"] = "TEMPBSICIS_view";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "KODECABANG",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS_view"
));

$proto10["m_sql"] = "KODECABANG";
$proto10["m_srcTableName"] = "TEMPBSICIS_view";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "SUMINSURED",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS_view"
));

$proto12["m_sql"] = "SUMINSURED";
$proto12["m_srcTableName"] = "TEMPBSICIS_view";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "CIS_UPL_USER",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS_view"
));

$proto14["m_sql"] = "CIS_UPL_USER";
$proto14["m_srcTableName"] = "TEMPBSICIS_view";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "CIS_UPL_DATE",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS_view"
));

$proto16["m_sql"] = "CIS_UPL_DATE";
$proto16["m_srcTableName"] = "TEMPBSICIS_view";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "CIS_FL",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS_view"
));

$proto18["m_sql"] = "CIS_FL";
$proto18["m_srcTableName"] = "TEMPBSICIS_view";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "TEMPBSICIS";
$proto21["m_srcTableName"] = "TEMPBSICIS_view";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "IDCIS";
$proto21["m_columns"][] = "CIS_TOKEN";
$proto21["m_columns"][] = "CIS_REGION";
$proto21["m_columns"][] = "CIS_AREA";
$proto21["m_columns"][] = "KODECABANG";
$proto21["m_columns"][] = "DATE";
$proto21["m_columns"][] = "SUMINSURED";
$proto21["m_columns"][] = "CIS_UPL_USER";
$proto21["m_columns"][] = "CIS_UPL_DATE";
$proto21["m_columns"][] = "CIS_FL";
$proto21["m_columns"][] = "CIS_BSMID";
$proto21["m_columns"][] = "CIS_PROPOSAL";
$proto21["m_columns"][] = "CIS_PREMI";
$proto21["m_columns"][] = "CIS_PERIODE_END";
$proto21["m_columns"][] = "CIS_RATE";
$proto21["m_columns"][] = "CIS_LIMIT";
$proto21["m_columns"][] = "CIS_TIPE";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "TEMPBSICIS";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "TEMPBSICIS_view";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="TEMPBSICIS_view";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tempbsicis_view = createSqlQuery_tempbsicis_view();


	
																												;

							

$tdatatempbsicis_view[".sqlquery"] = $queryData_tempbsicis_view;



$tdatatempbsicis_view[".hasEvents"] = false;

?>