<?php
$tdatareport_product_month = array();
$tdatareport_product_month[".searchableFields"] = array();
$tdatareport_product_month[".ShortName"] = "report_product_month";
$tdatareport_product_month[".OwnerID"] = "";
$tdatareport_product_month[".OriginalTable"] = "report_product_Month";


$tdatareport_product_month[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatareport_product_month[".originalPagesByType"] = $tdatareport_product_month[".pagesByType"];
$tdatareport_product_month[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatareport_product_month[".originalPages"] = $tdatareport_product_month[".pages"];
$tdatareport_product_month[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatareport_product_month[".originalDefaultPages"] = $tdatareport_product_month[".defaultPages"];

//	field labels
$fieldLabelsreport_product_month = array();
$fieldToolTipsreport_product_month = array();
$pageTitlesreport_product_month = array();
$placeHoldersreport_product_month = array();

if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelsreport_product_month["Indonesian"] = array();
	$fieldToolTipsreport_product_month["Indonesian"] = array();
	$placeHoldersreport_product_month["Indonesian"] = array();
	$pageTitlesreport_product_month["Indonesian"] = array();
	$fieldLabelsreport_product_month["Indonesian"]["YEARS"] = "YEARS";
	$fieldToolTipsreport_product_month["Indonesian"]["YEARS"] = "";
	$placeHoldersreport_product_month["Indonesian"]["YEARS"] = "";
	$fieldLabelsreport_product_month["Indonesian"]["MONTHS"] = "MONTHS";
	$fieldToolTipsreport_product_month["Indonesian"]["MONTHS"] = "";
	$placeHoldersreport_product_month["Indonesian"]["MONTHS"] = "";
	$fieldLabelsreport_product_month["Indonesian"]["SUM_B_SUMINSURED_"] = "SUM(B.SUMINSURED)";
	$fieldToolTipsreport_product_month["Indonesian"]["SUM_B_SUMINSURED_"] = "";
	$placeHoldersreport_product_month["Indonesian"]["SUM_B_SUMINSURED_"] = "";
	$fieldLabelsreport_product_month["Indonesian"]["SUM_B_KOMISI_"] = "SUM(B.KOMISI)";
	$fieldToolTipsreport_product_month["Indonesian"]["SUM_B_KOMISI_"] = "";
	$placeHoldersreport_product_month["Indonesian"]["SUM_B_KOMISI_"] = "";
	$fieldLabelsreport_product_month["Indonesian"]["KETERANGAN"] = "KETERANGAN";
	$fieldToolTipsreport_product_month["Indonesian"]["KETERANGAN"] = "";
	$placeHoldersreport_product_month["Indonesian"]["KETERANGAN"] = "";
	if (count($fieldToolTipsreport_product_month["Indonesian"]))
		$tdatareport_product_month[".isUseToolTips"] = true;
}


	$tdatareport_product_month[".NCSearch"] = true;



$tdatareport_product_month[".shortTableName"] = "report_product_month";
$tdatareport_product_month[".nSecOptions"] = 0;

$tdatareport_product_month[".mainTableOwnerID"] = "";
$tdatareport_product_month[".entityType"] = 0;
$tdatareport_product_month[".connId"] = "u736239518_btn_at_154_41_241_2";


$tdatareport_product_month[".strOriginalTableName"] = "report_product_Month";

	



$tdatareport_product_month[".showAddInPopup"] = false;

$tdatareport_product_month[".showEditInPopup"] = false;

$tdatareport_product_month[".showViewInPopup"] = false;

$tdatareport_product_month[".listAjax"] = false;
//	temporary
//$tdatareport_product_month[".listAjax"] = false;

	$tdatareport_product_month[".audit"] = false;

	$tdatareport_product_month[".locking"] = false;


$pages = $tdatareport_product_month[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatareport_product_month[".edit"] = true;
	$tdatareport_product_month[".afterEditAction"] = 1;
	$tdatareport_product_month[".closePopupAfterEdit"] = 1;
	$tdatareport_product_month[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatareport_product_month[".add"] = true;
$tdatareport_product_month[".afterAddAction"] = 1;
$tdatareport_product_month[".closePopupAfterAdd"] = 1;
$tdatareport_product_month[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatareport_product_month[".list"] = true;
}



$tdatareport_product_month[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatareport_product_month[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatareport_product_month[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatareport_product_month[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatareport_product_month[".printFriendly"] = true;
}



$tdatareport_product_month[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatareport_product_month[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatareport_product_month[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatareport_product_month[".isUseAjaxSuggest"] = true;



																											

$tdatareport_product_month[".ajaxCodeSnippetAdded"] = false;

$tdatareport_product_month[".buttonsAdded"] = false;

$tdatareport_product_month[".addPageEvents"] = false;

// use timepicker for search panel
$tdatareport_product_month[".isUseTimeForSearch"] = false;


$tdatareport_product_month[".badgeColor"] = "008B8B";


$tdatareport_product_month[".allSearchFields"] = array();
$tdatareport_product_month[".filterFields"] = array();
$tdatareport_product_month[".requiredSearchFields"] = array();

$tdatareport_product_month[".googleLikeFields"] = array();
$tdatareport_product_month[".googleLikeFields"][] = "YEARS";
$tdatareport_product_month[".googleLikeFields"][] = "MONTHS";
$tdatareport_product_month[".googleLikeFields"][] = "SUM(B.SUMINSURED)";
$tdatareport_product_month[".googleLikeFields"][] = "SUM(B.KOMISI)";
$tdatareport_product_month[".googleLikeFields"][] = "KETERANGAN";



$tdatareport_product_month[".tableType"] = "list";

$tdatareport_product_month[".printerPageOrientation"] = 0;
$tdatareport_product_month[".nPrinterPageScale"] = 100;

$tdatareport_product_month[".nPrinterSplitRecords"] = 40;

$tdatareport_product_month[".geocodingEnabled"] = false;










$tdatareport_product_month[".pageSize"] = 20;

$tdatareport_product_month[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatareport_product_month[".strOrderBy"] = $tstrOrderBy;

$tdatareport_product_month[".orderindexes"] = array();


$tdatareport_product_month[".sqlHead"] = "SELECT YEARS,  	MONTHS,  	`SUM(B.SUMINSURED)`,  	`SUM(B.KOMISI)`,  	KETERANGAN";
$tdatareport_product_month[".sqlFrom"] = "FROM report_product_Month";
$tdatareport_product_month[".sqlWhereExpr"] = "";
$tdatareport_product_month[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatareport_product_month[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatareport_product_month[".arrGroupsPerPage"] = $arrGPP;

$tdatareport_product_month[".highlightSearchResults"] = true;

$tableKeysreport_product_month = array();
$tdatareport_product_month[".Keys"] = $tableKeysreport_product_month;


$tdatareport_product_month[".hideMobileList"] = array();




//	YEARS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "YEARS";
	$fdata["GoodName"] = "YEARS";
	$fdata["ownerTable"] = "report_product_Month";
	$fdata["Label"] = GetFieldLabel("report_product_Month","YEARS");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "YEARS";

		$fdata["sourceSingle"] = "YEARS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "YEARS";

	
	
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


	$tdatareport_product_month["YEARS"] = $fdata;
		$tdatareport_product_month[".searchableFields"][] = "YEARS";
//	MONTHS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "MONTHS";
	$fdata["GoodName"] = "MONTHS";
	$fdata["ownerTable"] = "report_product_Month";
	$fdata["Label"] = GetFieldLabel("report_product_Month","MONTHS");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "MONTHS";

		$fdata["sourceSingle"] = "MONTHS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MONTHS";

	
	
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


	$tdatareport_product_month["MONTHS"] = $fdata;
		$tdatareport_product_month[".searchableFields"][] = "MONTHS";
//	SUM(B.SUMINSURED)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "SUM(B.SUMINSURED)";
	$fdata["GoodName"] = "SUM_B_SUMINSURED_";
	$fdata["ownerTable"] = "report_product_Month";
	$fdata["Label"] = GetFieldLabel("report_product_Month","SUM_B_SUMINSURED_");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "SUM(B.SUMINSURED)";

		$fdata["sourceSingle"] = "SUM(B.SUMINSURED)";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`SUM(B.SUMINSURED)`";

	
	
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


	$tdatareport_product_month["SUM(B.SUMINSURED)"] = $fdata;
		$tdatareport_product_month[".searchableFields"][] = "SUM(B.SUMINSURED)";
//	SUM(B.KOMISI)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "SUM(B.KOMISI)";
	$fdata["GoodName"] = "SUM_B_KOMISI_";
	$fdata["ownerTable"] = "report_product_Month";
	$fdata["Label"] = GetFieldLabel("report_product_Month","SUM_B_KOMISI_");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "SUM(B.KOMISI)";

		$fdata["sourceSingle"] = "SUM(B.KOMISI)";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`SUM(B.KOMISI)`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 6;

	
	
	
	
	
	
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


	$tdatareport_product_month["SUM(B.KOMISI)"] = $fdata;
		$tdatareport_product_month[".searchableFields"][] = "SUM(B.KOMISI)";
//	KETERANGAN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "KETERANGAN";
	$fdata["GoodName"] = "KETERANGAN";
	$fdata["ownerTable"] = "report_product_Month";
	$fdata["Label"] = GetFieldLabel("report_product_Month","KETERANGAN");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "KETERANGAN";

		$fdata["sourceSingle"] = "KETERANGAN";

		$fdata["isSQLExpression"] = true;
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
			$edata["EditParams"].= " maxlength=15";

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


	$tdatareport_product_month["KETERANGAN"] = $fdata;
		$tdatareport_product_month[".searchableFields"][] = "KETERANGAN";


$tables_data["report_product_Month"]=&$tdatareport_product_month;
$field_labels["report_product_Month"] = &$fieldLabelsreport_product_month;
$fieldToolTips["report_product_Month"] = &$fieldToolTipsreport_product_month;
$placeHolders["report_product_Month"] = &$placeHoldersreport_product_month;
$page_titles["report_product_Month"] = &$pageTitlesreport_product_month;


changeTextControlsToDate( "report_product_Month" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["report_product_Month"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["report_product_Month"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_report_product_month()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "YEARS,  	MONTHS,  	`SUM(B.SUMINSURED)`,  	`SUM(B.KOMISI)`,  	KETERANGAN";
$proto0["m_strFrom"] = "FROM report_product_Month";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
																												;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
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
	"m_strName" => "YEARS",
	"m_strTable" => "report_product_Month",
	"m_srcTableName" => "report_product_Month"
));

$proto6["m_sql"] = "YEARS";
$proto6["m_srcTableName"] = "report_product_Month";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "MONTHS",
	"m_strTable" => "report_product_Month",
	"m_srcTableName" => "report_product_Month"
));

$proto8["m_sql"] = "MONTHS";
$proto8["m_srcTableName"] = "report_product_Month";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "SUM(B.SUMINSURED)",
	"m_strTable" => "report_product_Month",
	"m_srcTableName" => "report_product_Month"
));

$proto10["m_sql"] = "`SUM(B.SUMINSURED)`";
$proto10["m_srcTableName"] = "report_product_Month";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "SUM(B.KOMISI)",
	"m_strTable" => "report_product_Month",
	"m_srcTableName" => "report_product_Month"
));

$proto12["m_sql"] = "`SUM(B.KOMISI)`";
$proto12["m_srcTableName"] = "report_product_Month";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "KETERANGAN",
	"m_strTable" => "report_product_Month",
	"m_srcTableName" => "report_product_Month"
));

$proto14["m_sql"] = "KETERANGAN";
$proto14["m_srcTableName"] = "report_product_Month";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "report_product_Month";
$proto17["m_srcTableName"] = "report_product_Month";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "YEARS";
$proto17["m_columns"][] = "MONTHS";
$proto17["m_columns"][] = "SUM(B.SUMINSURED)";
$proto17["m_columns"][] = "SUM(B.KOMISI)";
$proto17["m_columns"][] = "KETERANGAN";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "report_product_Month";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "report_product_Month";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="report_product_Month";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_report_product_month = createSqlQuery_report_product_month();


	
																												;

					

$tdatareport_product_month[".sqlquery"] = $queryData_report_product_month;



$tdatareport_product_month[".hasEvents"] = false;

?>