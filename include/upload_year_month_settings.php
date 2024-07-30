<?php
$tdataupload_year_month = array();
$tdataupload_year_month[".searchableFields"] = array();
$tdataupload_year_month[".ShortName"] = "upload_year_month";
$tdataupload_year_month[".OwnerID"] = "";
$tdataupload_year_month[".OriginalTable"] = "TEMPBSICILE";


$tdataupload_year_month[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataupload_year_month[".originalPagesByType"] = $tdataupload_year_month[".pagesByType"];
$tdataupload_year_month[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataupload_year_month[".originalPages"] = $tdataupload_year_month[".pages"];
$tdataupload_year_month[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataupload_year_month[".originalDefaultPages"] = $tdataupload_year_month[".defaultPages"];

//	field labels
$fieldLabelsupload_year_month = array();
$fieldToolTipsupload_year_month = array();
$pageTitlesupload_year_month = array();
$placeHoldersupload_year_month = array();

if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelsupload_year_month["Indonesian"] = array();
	$fieldToolTipsupload_year_month["Indonesian"] = array();
	$placeHoldersupload_year_month["Indonesian"] = array();
	$pageTitlesupload_year_month["Indonesian"] = array();
	$fieldLabelsupload_year_month["Indonesian"]["tahun_akad"] = "Tahun Akad";
	$fieldToolTipsupload_year_month["Indonesian"]["tahun_akad"] = "";
	$placeHoldersupload_year_month["Indonesian"]["tahun_akad"] = "";
	$fieldLabelsupload_year_month["Indonesian"]["bulan_akad"] = "Bulan Akad";
	$fieldToolTipsupload_year_month["Indonesian"]["bulan_akad"] = "";
	$placeHoldersupload_year_month["Indonesian"]["bulan_akad"] = "";
	$fieldLabelsupload_year_month["Indonesian"]["TGLAKAD"] = "Periode Akad";
	$fieldToolTipsupload_year_month["Indonesian"]["TGLAKAD"] = "";
	$placeHoldersupload_year_month["Indonesian"]["TGLAKAD"] = "";
	$fieldLabelsupload_year_month["Indonesian"]["Total_pertanggungan"] = "Total Pertanggungan";
	$fieldToolTipsupload_year_month["Indonesian"]["Total_pertanggungan"] = "";
	$placeHoldersupload_year_month["Indonesian"]["Total_pertanggungan"] = "";
	$fieldLabelsupload_year_month["Indonesian"]["NMCBGBANK"] = "Cabang";
	$fieldToolTipsupload_year_month["Indonesian"]["NMCBGBANK"] = "";
	$placeHoldersupload_year_month["Indonesian"]["NMCBGBANK"] = "";
	$pageTitlesupload_year_month["Indonesian"]["search"] = "Pencarian Data";
	if (count($fieldToolTipsupload_year_month["Indonesian"]))
		$tdataupload_year_month[".isUseToolTips"] = true;
}


	$tdataupload_year_month[".NCSearch"] = true;



$tdataupload_year_month[".shortTableName"] = "upload_year_month";
$tdataupload_year_month[".nSecOptions"] = 0;

$tdataupload_year_month[".mainTableOwnerID"] = "";
$tdataupload_year_month[".entityType"] = 1;
$tdataupload_year_month[".connId"] = "u736239518_btn_at_154_41_241_2";


$tdataupload_year_month[".strOriginalTableName"] = "TEMPBSICILE";

	



$tdataupload_year_month[".showAddInPopup"] = false;

$tdataupload_year_month[".showEditInPopup"] = false;

$tdataupload_year_month[".showViewInPopup"] = false;

$tdataupload_year_month[".listAjax"] = false;
//	temporary
//$tdataupload_year_month[".listAjax"] = false;

	$tdataupload_year_month[".audit"] = true;

	$tdataupload_year_month[".locking"] = false;


$pages = $tdataupload_year_month[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataupload_year_month[".edit"] = true;
	$tdataupload_year_month[".afterEditAction"] = 1;
	$tdataupload_year_month[".closePopupAfterEdit"] = 1;
	$tdataupload_year_month[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataupload_year_month[".add"] = true;
$tdataupload_year_month[".afterAddAction"] = 1;
$tdataupload_year_month[".closePopupAfterAdd"] = 1;
$tdataupload_year_month[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataupload_year_month[".list"] = true;
}



$tdataupload_year_month[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataupload_year_month[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataupload_year_month[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataupload_year_month[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataupload_year_month[".printFriendly"] = true;
}



$tdataupload_year_month[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataupload_year_month[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataupload_year_month[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataupload_year_month[".isUseAjaxSuggest"] = true;



																											

$tdataupload_year_month[".ajaxCodeSnippetAdded"] = false;

$tdataupload_year_month[".buttonsAdded"] = false;

$tdataupload_year_month[".addPageEvents"] = false;

// use timepicker for search panel
$tdataupload_year_month[".isUseTimeForSearch"] = false;


$tdataupload_year_month[".badgeColor"] = "CD853F";


$tdataupload_year_month[".allSearchFields"] = array();
$tdataupload_year_month[".filterFields"] = array();
$tdataupload_year_month[".requiredSearchFields"] = array();

$tdataupload_year_month[".googleLikeFields"] = array();
$tdataupload_year_month[".googleLikeFields"][] = "TGLAKAD";
$tdataupload_year_month[".googleLikeFields"][] = "NMCBGBANK";
$tdataupload_year_month[".googleLikeFields"][] = "tahun_akad";
$tdataupload_year_month[".googleLikeFields"][] = "bulan_akad";
$tdataupload_year_month[".googleLikeFields"][] = "Total_pertanggungan";



$tdataupload_year_month[".tableType"] = "list";

$tdataupload_year_month[".printerPageOrientation"] = 0;
$tdataupload_year_month[".nPrinterPageScale"] = 100;

$tdataupload_year_month[".nPrinterSplitRecords"] = 40;

$tdataupload_year_month[".geocodingEnabled"] = false;







$tdataupload_year_month[".noRecordsFirstPage"] = true;



$tdataupload_year_month[".pageSize"] = 20;

$tdataupload_year_month[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataupload_year_month[".strOrderBy"] = $tstrOrderBy;

$tdataupload_year_month[".orderindexes"] = array();


$tdataupload_year_month[".sqlHead"] = "select TGLAKAD, NMCBGBANK, year(TGLAKAD) as tahun_akad, monthname(TGLAKAD) as bulan_akad, sum(POKOKPEMBIAYAAN) as Total_pertanggungan";
$tdataupload_year_month[".sqlFrom"] = "from TEMPBSICILE";
$tdataupload_year_month[".sqlWhereExpr"] = "TGLAKAD > '2024-02-01'";
$tdataupload_year_month[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataupload_year_month[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataupload_year_month[".arrGroupsPerPage"] = $arrGPP;

$tdataupload_year_month[".highlightSearchResults"] = true;

$tableKeysupload_year_month = array();
$tdataupload_year_month[".Keys"] = $tableKeysupload_year_month;


$tdataupload_year_month[".hideMobileList"] = array();




//	TGLAKAD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TGLAKAD";
	$fdata["GoodName"] = "TGLAKAD";
	$fdata["ownerTable"] = "TEMPBSICILE";
	$fdata["Label"] = GetFieldLabel("upload_year_month","TGLAKAD");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "TGLAKAD";

		$fdata["sourceSingle"] = "TGLAKAD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TGLAKAD";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Between";

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


	$tdataupload_year_month["TGLAKAD"] = $fdata;
		$tdataupload_year_month[".searchableFields"][] = "TGLAKAD";
//	NMCBGBANK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "NMCBGBANK";
	$fdata["GoodName"] = "NMCBGBANK";
	$fdata["ownerTable"] = "TEMPBSICILE";
	$fdata["Label"] = GetFieldLabel("upload_year_month","NMCBGBANK");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "NMCBGBANK";

		$fdata["sourceSingle"] = "NMCBGBANK";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NMCBGBANK";

	
	
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


	$tdataupload_year_month["NMCBGBANK"] = $fdata;
		$tdataupload_year_month[".searchableFields"][] = "NMCBGBANK";
//	tahun_akad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "tahun_akad";
	$fdata["GoodName"] = "tahun_akad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("upload_year_month","tahun_akad");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "tahun_akad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "year(TGLAKAD)";

	
	
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


	$tdataupload_year_month["tahun_akad"] = $fdata;
		$tdataupload_year_month[".searchableFields"][] = "tahun_akad";
//	bulan_akad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "bulan_akad";
	$fdata["GoodName"] = "bulan_akad";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("upload_year_month","bulan_akad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "bulan_akad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "monthname(TGLAKAD)";

	
	
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


	$tdataupload_year_month["bulan_akad"] = $fdata;
		$tdataupload_year_month[".searchableFields"][] = "bulan_akad";
//	Total_pertanggungan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Total_pertanggungan";
	$fdata["GoodName"] = "Total_pertanggungan";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("upload_year_month","Total_pertanggungan");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Total_pertanggungan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sum(POKOKPEMBIAYAAN)";

	
	
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


	$tdataupload_year_month["Total_pertanggungan"] = $fdata;
		$tdataupload_year_month[".searchableFields"][] = "Total_pertanggungan";


$tables_data["upload_year_month"]=&$tdataupload_year_month;
$field_labels["upload_year_month"] = &$fieldLabelsupload_year_month;
$fieldToolTips["upload_year_month"] = &$fieldToolTipsupload_year_month;
$placeHolders["upload_year_month"] = &$placeHoldersupload_year_month;
$page_titles["upload_year_month"] = &$pageTitlesupload_year_month;


changeTextControlsToDate( "upload_year_month" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["upload_year_month"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["upload_year_month"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_upload_year_month()
{
$proto0=array();
$proto0["m_strHead"] = "select";
$proto0["m_strFieldList"] = "TGLAKAD, NMCBGBANK, year(TGLAKAD) as tahun_akad, monthname(TGLAKAD) as bulan_akad, sum(POKOKPEMBIAYAAN) as Total_pertanggungan";
$proto0["m_strFrom"] = "from TEMPBSICILE";
$proto0["m_strWhere"] = "TGLAKAD > '2024-02-01'";
$proto0["m_strOrderBy"] = "";
	
																												;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "TGLAKAD > '2024-02-01'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "TGLAKAD",
	"m_strTable" => "TEMPBSICILE",
	"m_srcTableName" => "upload_year_month"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "> '2024-02-01'";
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
	"m_strName" => "TGLAKAD",
	"m_strTable" => "TEMPBSICILE",
	"m_srcTableName" => "upload_year_month"
));

$proto6["m_sql"] = "TGLAKAD";
$proto6["m_srcTableName"] = "upload_year_month";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "NMCBGBANK",
	"m_strTable" => "TEMPBSICILE",
	"m_srcTableName" => "upload_year_month"
));

$proto8["m_sql"] = "NMCBGBANK";
$proto8["m_srcTableName"] = "upload_year_month";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$proto11=array();
$proto11["m_functiontype"] = "SQLF_CUSTOM";
$proto11["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "TGLAKAD"
));

$proto11["m_arguments"][]=$obj;
$proto11["m_strFunctionName"] = "year";
$obj = new SQLFunctionCall($proto11);

$proto10["m_sql"] = "year(TGLAKAD)";
$proto10["m_srcTableName"] = "upload_year_month";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "tahun_akad";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$proto14=array();
$proto14["m_functiontype"] = "SQLF_CUSTOM";
$proto14["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "TGLAKAD"
));

$proto14["m_arguments"][]=$obj;
$proto14["m_strFunctionName"] = "monthname";
$obj = new SQLFunctionCall($proto14);

$proto13["m_sql"] = "monthname(TGLAKAD)";
$proto13["m_srcTableName"] = "upload_year_month";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "bulan_akad";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$proto17=array();
$proto17["m_functiontype"] = "SQLF_SUM";
$proto17["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "POKOKPEMBIAYAAN",
	"m_strTable" => "TEMPBSICILE",
	"m_srcTableName" => "upload_year_month"
));

$proto17["m_arguments"][]=$obj;
$proto17["m_strFunctionName"] = "sum";
$obj = new SQLFunctionCall($proto17);

$proto16["m_sql"] = "sum(POKOKPEMBIAYAAN)";
$proto16["m_srcTableName"] = "upload_year_month";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "Total_pertanggungan";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "TEMPBSICILE";
$proto20["m_srcTableName"] = "upload_year_month";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "IDTEMPCE";
$proto20["m_columns"][] = "NOLOANDISBURSE";
$proto20["m_columns"][] = "NAMATERJAMIN";
$proto20["m_columns"][] = "POKOKPEMBIAYAAN";
$proto20["m_columns"][] = "JANGKAWAKTU";
$proto20["m_columns"][] = "TGLAKAD";
$proto20["m_columns"][] = "TGLJATUHTEMPO";
$proto20["m_columns"][] = "KDCBGBANK";
$proto20["m_columns"][] = "NMCBGBANK";
$proto20["m_columns"][] = "ADDUSER";
$proto20["m_columns"][] = "ADDDATE";
$proto20["m_columns"][] = "NIK";
$proto20["m_columns"][] = "TGLLAHIR";
$proto20["m_columns"][] = "ALAMAT";
$proto20["m_columns"][] = "BSMID";
$proto20["m_columns"][] = "PROPOSALNO";
$proto20["m_columns"][] = "PREMI";
$proto20["m_columns"][] = "RATE";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_sql"] = "TEMPBSICILE";
$proto19["m_alias"] = "";
$proto19["m_srcTableName"] = "upload_year_month";
$proto21=array();
$proto21["m_sql"] = "";
$proto21["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto21["m_column"]=$obj;
$proto21["m_contained"] = array();
$proto21["m_strCase"] = "";
$proto21["m_havingmode"] = false;
$proto21["m_inBrackets"] = false;
$proto21["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto21);

$proto19["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto19);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto23=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "tahun_akad"
));

$proto23["m_column"]=$obj;
$obj = new SQLGroupByItem($proto23);

$proto0["m_groupby"][]=$obj;
												$proto25=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "bulan_akad"
));

$proto25["m_column"]=$obj;
$obj = new SQLGroupByItem($proto25);

$proto0["m_groupby"][]=$obj;
												$proto27=array();
						$obj = new SQLField(array(
	"m_strName" => "NMCBGBANK",
	"m_strTable" => "TEMPBSICILE",
	"m_srcTableName" => "upload_year_month"
));

$proto27["m_column"]=$obj;
$obj = new SQLGroupByItem($proto27);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="upload_year_month";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_upload_year_month = createSqlQuery_upload_year_month();


	
																												;

					

$tdataupload_year_month[".sqlquery"] = $queryData_upload_year_month;



$tdataupload_year_month[".hasEvents"] = false;

?>