<?php
$tdatachart_summary_report_view = array();
$tdatachart_summary_report_view[".searchableFields"] = array();
$tdatachart_summary_report_view[".ShortName"] = "chart_summary_report_view";
$tdatachart_summary_report_view[".OwnerID"] = "";
$tdatachart_summary_report_view[".OriginalTable"] = "Chart_summary_report";


$tdatachart_summary_report_view[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdatachart_summary_report_view[".originalPagesByType"] = $tdatachart_summary_report_view[".pagesByType"];
$tdatachart_summary_report_view[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdatachart_summary_report_view[".originalPages"] = $tdatachart_summary_report_view[".pages"];
$tdatachart_summary_report_view[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdatachart_summary_report_view[".originalDefaultPages"] = $tdatachart_summary_report_view[".defaultPages"];

//	field labels
$fieldLabelschart_summary_report_view = array();
$fieldToolTipschart_summary_report_view = array();
$pageTitleschart_summary_report_view = array();
$placeHolderschart_summary_report_view = array();

if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelschart_summary_report_view["Indonesian"] = array();
	$fieldToolTipschart_summary_report_view["Indonesian"] = array();
	$placeHolderschart_summary_report_view["Indonesian"] = array();
	$pageTitleschart_summary_report_view["Indonesian"] = array();
	$fieldLabelschart_summary_report_view["Indonesian"]["KETERANGAN"] = "KETERANGAN";
	$fieldToolTipschart_summary_report_view["Indonesian"]["KETERANGAN"] = "";
	$placeHolderschart_summary_report_view["Indonesian"]["KETERANGAN"] = "";
	$fieldLabelschart_summary_report_view["Indonesian"]["Suminsured"] = "Suminsured";
	$fieldToolTipschart_summary_report_view["Indonesian"]["Suminsured"] = "";
	$placeHolderschart_summary_report_view["Indonesian"]["Suminsured"] = "";
	$fieldLabelschart_summary_report_view["Indonesian"]["Premi"] = "Premi";
	$fieldToolTipschart_summary_report_view["Indonesian"]["Premi"] = "";
	$placeHolderschart_summary_report_view["Indonesian"]["Premi"] = "";
	$fieldLabelschart_summary_report_view["Indonesian"]["Komisi"] = "Komisi";
	$fieldToolTipschart_summary_report_view["Indonesian"]["Komisi"] = "";
	$placeHolderschart_summary_report_view["Indonesian"]["Komisi"] = "";
	if (count($fieldToolTipschart_summary_report_view["Indonesian"]))
		$tdatachart_summary_report_view[".isUseToolTips"] = true;
}


	$tdatachart_summary_report_view[".NCSearch"] = true;

	$tdatachart_summary_report_view[".ChartRefreshTime"] = 0;


$tdatachart_summary_report_view[".shortTableName"] = "chart_summary_report_view";
$tdatachart_summary_report_view[".nSecOptions"] = 0;

$tdatachart_summary_report_view[".mainTableOwnerID"] = "";
$tdatachart_summary_report_view[".entityType"] = 3;
$tdatachart_summary_report_view[".connId"] = "u736239518_btn_at_154_41_241_2";


$tdatachart_summary_report_view[".strOriginalTableName"] = "Chart_summary_report";

	



$tdatachart_summary_report_view[".showAddInPopup"] = false;

$tdatachart_summary_report_view[".showEditInPopup"] = false;

$tdatachart_summary_report_view[".showViewInPopup"] = false;

$tdatachart_summary_report_view[".listAjax"] = false;
//	temporary
//$tdatachart_summary_report_view[".listAjax"] = false;

	$tdatachart_summary_report_view[".audit"] = false;

	$tdatachart_summary_report_view[".locking"] = false;


$pages = $tdatachart_summary_report_view[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatachart_summary_report_view[".edit"] = true;
	$tdatachart_summary_report_view[".afterEditAction"] = 1;
	$tdatachart_summary_report_view[".closePopupAfterEdit"] = 1;
	$tdatachart_summary_report_view[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatachart_summary_report_view[".add"] = true;
$tdatachart_summary_report_view[".afterAddAction"] = 1;
$tdatachart_summary_report_view[".closePopupAfterAdd"] = 1;
$tdatachart_summary_report_view[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatachart_summary_report_view[".list"] = true;
}



$tdatachart_summary_report_view[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatachart_summary_report_view[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatachart_summary_report_view[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatachart_summary_report_view[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatachart_summary_report_view[".printFriendly"] = true;
}



$tdatachart_summary_report_view[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatachart_summary_report_view[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatachart_summary_report_view[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatachart_summary_report_view[".isUseAjaxSuggest"] = true;



																											

$tdatachart_summary_report_view[".ajaxCodeSnippetAdded"] = false;

$tdatachart_summary_report_view[".buttonsAdded"] = false;

$tdatachart_summary_report_view[".addPageEvents"] = false;

// use timepicker for search panel
$tdatachart_summary_report_view[".isUseTimeForSearch"] = false;


$tdatachart_summary_report_view[".badgeColor"] = "CD853F";


$tdatachart_summary_report_view[".allSearchFields"] = array();
$tdatachart_summary_report_view[".filterFields"] = array();
$tdatachart_summary_report_view[".requiredSearchFields"] = array();

$tdatachart_summary_report_view[".googleLikeFields"] = array();
$tdatachart_summary_report_view[".googleLikeFields"][] = "KETERANGAN";
$tdatachart_summary_report_view[".googleLikeFields"][] = "Suminsured";
$tdatachart_summary_report_view[".googleLikeFields"][] = "Premi";
$tdatachart_summary_report_view[".googleLikeFields"][] = "Komisi";



$tdatachart_summary_report_view[".tableType"] = "chart";

$tdatachart_summary_report_view[".printerPageOrientation"] = 0;
$tdatachart_summary_report_view[".nPrinterPageScale"] = 100;

$tdatachart_summary_report_view[".nPrinterSplitRecords"] = 40;

$tdatachart_summary_report_view[".geocodingEnabled"] = false;



// chart settings
$tdatachart_summary_report_view[".chartType"] = "2DPie";
// end of chart settings








$tstrOrderBy = "";
$tdatachart_summary_report_view[".strOrderBy"] = $tstrOrderBy;

$tdatachart_summary_report_view[".orderindexes"] = array();


$tdatachart_summary_report_view[".sqlHead"] = "SELECT KETERANGAN,  	Suminsured,  	Premi,  	Komisi";
$tdatachart_summary_report_view[".sqlFrom"] = "FROM Chart_summary_report";
$tdatachart_summary_report_view[".sqlWhereExpr"] = "";
$tdatachart_summary_report_view[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatachart_summary_report_view[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatachart_summary_report_view[".arrGroupsPerPage"] = $arrGPP;

$tdatachart_summary_report_view[".highlightSearchResults"] = true;

$tableKeyschart_summary_report_view = array();
$tdatachart_summary_report_view[".Keys"] = $tableKeyschart_summary_report_view;


$tdatachart_summary_report_view[".hideMobileList"] = array();




//	KETERANGAN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "KETERANGAN";
	$fdata["GoodName"] = "KETERANGAN";
	$fdata["ownerTable"] = "Chart_summary_report";
	$fdata["Label"] = GetFieldLabel("Chart_summary_report_view","KETERANGAN");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdatachart_summary_report_view["KETERANGAN"] = $fdata;
		$tdatachart_summary_report_view[".searchableFields"][] = "KETERANGAN";
//	Suminsured
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Suminsured";
	$fdata["GoodName"] = "Suminsured";
	$fdata["ownerTable"] = "Chart_summary_report";
	$fdata["Label"] = GetFieldLabel("Chart_summary_report_view","Suminsured");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdatachart_summary_report_view["Suminsured"] = $fdata;
		$tdatachart_summary_report_view[".searchableFields"][] = "Suminsured";
//	Premi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Premi";
	$fdata["GoodName"] = "Premi";
	$fdata["ownerTable"] = "Chart_summary_report";
	$fdata["Label"] = GetFieldLabel("Chart_summary_report_view","Premi");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdatachart_summary_report_view["Premi"] = $fdata;
		$tdatachart_summary_report_view[".searchableFields"][] = "Premi";
//	Komisi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Komisi";
	$fdata["GoodName"] = "Komisi";
	$fdata["ownerTable"] = "Chart_summary_report";
	$fdata["Label"] = GetFieldLabel("Chart_summary_report_view","Komisi");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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


	$tdatachart_summary_report_view["Komisi"] = $fdata;
		$tdatachart_summary_report_view[".searchableFields"][] = "Komisi";

$tdatachart_summary_report_view[".chartLabelField"] = "KETERANGAN";
$tdatachart_summary_report_view[".chartSeries"] = array();
$tdatachart_summary_report_view[".chartSeries"][] = array(
	"field" => "Komisi",
	"total" => ""
);
	$tdatachart_summary_report_view[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">Chart_summary_report_view</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_pie</attr>
		</attr>

		<attr value="parameters">';
	$tdatachart_summary_report_view[".chartXml"] .= '<attr value="0">
			<attr value="name">Komisi</attr>';
	$tdatachart_summary_report_view[".chartXml"] .= '</attr>';
	$tdatachart_summary_report_view[".chartXml"] .= '<attr value="1">
		<attr value="name">KETERANGAN</attr>
	</attr>';
	$tdatachart_summary_report_view[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatachart_summary_report_view[".chartXml"] .= '<attr value="head">'.xmlencode("").'</attr>
<attr value="foot">'.xmlencode("").'</attr>
<attr value="y_axis_label">'.xmlencode("Suminsured").'</attr>


<attr value="slegend">true</attr>
<attr value="sgrid">false</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">0</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>';
$tdatachart_summary_report_view[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatachart_summary_report_view[".chartXml"] .= '<attr value="0">
		<attr value="name">KETERANGAN</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Chart_summary_report_view","KETERANGAN")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatachart_summary_report_view[".chartXml"] .= '<attr value="1">
		<attr value="name">Suminsured</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Chart_summary_report_view","Suminsured")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatachart_summary_report_view[".chartXml"] .= '<attr value="2">
		<attr value="name">Premi</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Chart_summary_report_view","Premi")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatachart_summary_report_view[".chartXml"] .= '<attr value="3">
		<attr value="name">Komisi</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("Chart_summary_report_view","Komisi")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatachart_summary_report_view[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">Chart_summary_report_view</attr>
<attr value="short_table_name">chart_summary_report_view</attr>
</attr>

</chart>';

$tables_data["Chart_summary_report_view"]=&$tdatachart_summary_report_view;
$field_labels["Chart_summary_report_view"] = &$fieldLabelschart_summary_report_view;
$fieldToolTips["Chart_summary_report_view"] = &$fieldToolTipschart_summary_report_view;
$placeHolders["Chart_summary_report_view"] = &$placeHolderschart_summary_report_view;
$page_titles["Chart_summary_report_view"] = &$pageTitleschart_summary_report_view;


changeTextControlsToDate( "Chart_summary_report_view" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Chart_summary_report_view"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Chart_summary_report_view"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_chart_summary_report_view()
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
	"m_srcTableName" => "Chart_summary_report_view"
));

$proto6["m_sql"] = "KETERANGAN";
$proto6["m_srcTableName"] = "Chart_summary_report_view";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Suminsured",
	"m_strTable" => "Chart_summary_report",
	"m_srcTableName" => "Chart_summary_report_view"
));

$proto8["m_sql"] = "Suminsured";
$proto8["m_srcTableName"] = "Chart_summary_report_view";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Premi",
	"m_strTable" => "Chart_summary_report",
	"m_srcTableName" => "Chart_summary_report_view"
));

$proto10["m_sql"] = "Premi";
$proto10["m_srcTableName"] = "Chart_summary_report_view";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Komisi",
	"m_strTable" => "Chart_summary_report",
	"m_srcTableName" => "Chart_summary_report_view"
));

$proto12["m_sql"] = "Komisi";
$proto12["m_srcTableName"] = "Chart_summary_report_view";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "Chart_summary_report";
$proto15["m_srcTableName"] = "Chart_summary_report_view";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "KETERANGAN";
$proto15["m_columns"][] = "Suminsured";
$proto15["m_columns"][] = "Premi";
$proto15["m_columns"][] = "Komisi";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "Chart_summary_report";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "Chart_summary_report_view";
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
$proto0["m_srcTableName"]="Chart_summary_report_view";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_chart_summary_report_view = createSqlQuery_chart_summary_report_view();


	
																												;

				

$tdatachart_summary_report_view[".sqlquery"] = $queryData_chart_summary_report_view;



$tdatachart_summary_report_view[".hasEvents"] = false;

?>