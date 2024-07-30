<?php
$tdatachart_summary_report = array();
$tdatachart_summary_report[".searchableFields"] = array();
$tdatachart_summary_report[".ShortName"] = "chart_summary_report";
$tdatachart_summary_report[".OwnerID"] = "";
$tdatachart_summary_report[".OriginalTable"] = "Chart_summary_report";


$tdatachart_summary_report[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatachart_summary_report[".originalPagesByType"] = $tdatachart_summary_report[".pagesByType"];
$tdatachart_summary_report[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatachart_summary_report[".originalPages"] = $tdatachart_summary_report[".pages"];
$tdatachart_summary_report[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatachart_summary_report[".originalDefaultPages"] = $tdatachart_summary_report[".defaultPages"];

//	field labels
$fieldLabelschart_summary_report = array();
$fieldToolTipschart_summary_report = array();
$pageTitleschart_summary_report = array();
$placeHolderschart_summary_report = array();

if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelschart_summary_report["Indonesian"] = array();
	$fieldToolTipschart_summary_report["Indonesian"] = array();
	$placeHolderschart_summary_report["Indonesian"] = array();
	$pageTitleschart_summary_report["Indonesian"] = array();
	$fieldLabelschart_summary_report["Indonesian"]["KETERANGAN"] = "KETERANGAN";
	$fieldToolTipschart_summary_report["Indonesian"]["KETERANGAN"] = "";
	$placeHolderschart_summary_report["Indonesian"]["KETERANGAN"] = "";
	$fieldLabelschart_summary_report["Indonesian"]["Suminsured"] = "Suminsured";
	$fieldToolTipschart_summary_report["Indonesian"]["Suminsured"] = "";
	$placeHolderschart_summary_report["Indonesian"]["Suminsured"] = "";
	$fieldLabelschart_summary_report["Indonesian"]["Premi"] = "Premi";
	$fieldToolTipschart_summary_report["Indonesian"]["Premi"] = "";
	$placeHolderschart_summary_report["Indonesian"]["Premi"] = "";
	$fieldLabelschart_summary_report["Indonesian"]["Komisi"] = "Komisi";
	$fieldToolTipschart_summary_report["Indonesian"]["Komisi"] = "";
	$placeHolderschart_summary_report["Indonesian"]["Komisi"] = "";
	if (count($fieldToolTipschart_summary_report["Indonesian"]))
		$tdatachart_summary_report[".isUseToolTips"] = true;
}


	$tdatachart_summary_report[".NCSearch"] = true;



$tdatachart_summary_report[".shortTableName"] = "chart_summary_report";
$tdatachart_summary_report[".nSecOptions"] = 0;

$tdatachart_summary_report[".mainTableOwnerID"] = "";
$tdatachart_summary_report[".entityType"] = 0;
$tdatachart_summary_report[".connId"] = "u736239518_btn_at_154_41_241_2";


$tdatachart_summary_report[".strOriginalTableName"] = "Chart_summary_report";

	



$tdatachart_summary_report[".showAddInPopup"] = false;

$tdatachart_summary_report[".showEditInPopup"] = false;

$tdatachart_summary_report[".showViewInPopup"] = false;

$tdatachart_summary_report[".listAjax"] = false;
//	temporary
//$tdatachart_summary_report[".listAjax"] = false;

	$tdatachart_summary_report[".audit"] = false;

	$tdatachart_summary_report[".locking"] = false;


$pages = $tdatachart_summary_report[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatachart_summary_report[".edit"] = true;
	$tdatachart_summary_report[".afterEditAction"] = 1;
	$tdatachart_summary_report[".closePopupAfterEdit"] = 1;
	$tdatachart_summary_report[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatachart_summary_report[".add"] = true;
$tdatachart_summary_report[".afterAddAction"] = 1;
$tdatachart_summary_report[".closePopupAfterAdd"] = 1;
$tdatachart_summary_report[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatachart_summary_report[".list"] = true;
}



$tdatachart_summary_report[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatachart_summary_report[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatachart_summary_report[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatachart_summary_report[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatachart_summary_report[".printFriendly"] = true;
}



$tdatachart_summary_report[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatachart_summary_report[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatachart_summary_report[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatachart_summary_report[".isUseAjaxSuggest"] = true;



																											

$tdatachart_summary_report[".ajaxCodeSnippetAdded"] = false;

$tdatachart_summary_report[".buttonsAdded"] = false;

$tdatachart_summary_report[".addPageEvents"] = false;

// use timepicker for search panel
$tdatachart_summary_report[".isUseTimeForSearch"] = false;


$tdatachart_summary_report[".badgeColor"] = "5F9EA0";


$tdatachart_summary_report[".allSearchFields"] = array();
$tdatachart_summary_report[".filterFields"] = array();
$tdatachart_summary_report[".requiredSearchFields"] = array();

$tdatachart_summary_report[".googleLikeFields"] = array();
$tdatachart_summary_report[".googleLikeFields"][] = "KETERANGAN";
$tdatachart_summary_report[".googleLikeFields"][] = "Suminsured";
$tdatachart_summary_report[".googleLikeFields"][] = "Premi";
$tdatachart_summary_report[".googleLikeFields"][] = "Komisi";



$tdatachart_summary_report[".tableType"] = "list";

$tdatachart_summary_report[".printerPageOrientation"] = 0;
$tdatachart_summary_report[".nPrinterPageScale"] = 100;

$tdatachart_summary_report[".nPrinterSplitRecords"] = 40;

$tdatachart_summary_report[".geocodingEnabled"] = false;










$tdatachart_summary_report[".pageSize"] = 20;

$tdatachart_summary_report[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatachart_summary_report[".strOrderBy"] = $tstrOrderBy;

$tdatachart_summary_report[".orderindexes"] = array();


$tdatachart_summary_report[".sqlHead"] = "SELECT KETERANGAN,  	Suminsured,  	Premi,  	Komisi";
$tdatachart_summary_report[".sqlFrom"] = "FROM Chart_summary_report";
$tdatachart_summary_report[".sqlWhereExpr"] = "";
$tdatachart_summary_report[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatachart_summary_report[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatachart_summary_report[".arrGroupsPerPage"] = $arrGPP;

$tdatachart_summary_report[".highlightSearchResults"] = true;

$tableKeyschart_summary_report = array();
$tdatachart_summary_report[".Keys"] = $tableKeyschart_summary_report;


$tdatachart_summary_report[".hideMobileList"] = array();




//	KETERANGAN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "KETERANGAN";
	$fdata["GoodName"] = "KETERANGAN";
	$fdata["ownerTable"] = "Chart_summary_report";
	$fdata["Label"] = GetFieldLabel("Chart_summary_report","KETERANGAN");
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


	$tdatachart_summary_report["KETERANGAN"] = $fdata;
		$tdatachart_summary_report[".searchableFields"][] = "KETERANGAN";
//	Suminsured
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Suminsured";
	$fdata["GoodName"] = "Suminsured";
	$fdata["ownerTable"] = "Chart_summary_report";
	$fdata["Label"] = GetFieldLabel("Chart_summary_report","Suminsured");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Suminsured";

		$fdata["sourceSingle"] = "Suminsured";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Suminsured";

	
	
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


	$tdatachart_summary_report["Suminsured"] = $fdata;
		$tdatachart_summary_report[".searchableFields"][] = "Suminsured";
//	Premi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Premi";
	$fdata["GoodName"] = "Premi";
	$fdata["ownerTable"] = "Chart_summary_report";
	$fdata["Label"] = GetFieldLabel("Chart_summary_report","Premi");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Premi";

		$fdata["sourceSingle"] = "Premi";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Premi";

	
	
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


	$tdatachart_summary_report["Premi"] = $fdata;
		$tdatachart_summary_report[".searchableFields"][] = "Premi";
//	Komisi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Komisi";
	$fdata["GoodName"] = "Komisi";
	$fdata["ownerTable"] = "Chart_summary_report";
	$fdata["Label"] = GetFieldLabel("Chart_summary_report","Komisi");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Komisi";

		$fdata["sourceSingle"] = "Komisi";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Komisi";

	
	
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


	$tdatachart_summary_report["Komisi"] = $fdata;
		$tdatachart_summary_report[".searchableFields"][] = "Komisi";


$tables_data["Chart_summary_report"]=&$tdatachart_summary_report;
$field_labels["Chart_summary_report"] = &$fieldLabelschart_summary_report;
$fieldToolTips["Chart_summary_report"] = &$fieldToolTipschart_summary_report;
$placeHolders["Chart_summary_report"] = &$placeHolderschart_summary_report;
$page_titles["Chart_summary_report"] = &$pageTitleschart_summary_report;


changeTextControlsToDate( "Chart_summary_report" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Chart_summary_report"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Chart_summary_report"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_chart_summary_report()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "KETERANGAN,  	Suminsured,  	Premi,  	Komisi";
$proto0["m_strFrom"] = "FROM Chart_summary_report";
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
	"m_strName" => "KETERANGAN",
	"m_strTable" => "Chart_summary_report",
	"m_srcTableName" => "Chart_summary_report"
));

$proto6["m_sql"] = "KETERANGAN";
$proto6["m_srcTableName"] = "Chart_summary_report";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Suminsured",
	"m_strTable" => "Chart_summary_report",
	"m_srcTableName" => "Chart_summary_report"
));

$proto8["m_sql"] = "Suminsured";
$proto8["m_srcTableName"] = "Chart_summary_report";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Premi",
	"m_strTable" => "Chart_summary_report",
	"m_srcTableName" => "Chart_summary_report"
));

$proto10["m_sql"] = "Premi";
$proto10["m_srcTableName"] = "Chart_summary_report";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Komisi",
	"m_strTable" => "Chart_summary_report",
	"m_srcTableName" => "Chart_summary_report"
));

$proto12["m_sql"] = "Komisi";
$proto12["m_srcTableName"] = "Chart_summary_report";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "Chart_summary_report";
$proto15["m_srcTableName"] = "Chart_summary_report";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "KETERANGAN";
$proto15["m_columns"][] = "Suminsured";
$proto15["m_columns"][] = "Premi";
$proto15["m_columns"][] = "Komisi";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "Chart_summary_report";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "Chart_summary_report";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Chart_summary_report";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_chart_summary_report = createSqlQuery_chart_summary_report();


	
																												;

				

$tdatachart_summary_report[".sqlquery"] = $queryData_chart_summary_report;



$tdatachart_summary_report[".hasEvents"] = false;

?>