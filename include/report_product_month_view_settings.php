<?php
$tdatareport_product_month_view = array();
$tdatareport_product_month_view[".searchableFields"] = array();
$tdatareport_product_month_view[".ShortName"] = "report_product_month_view";
$tdatareport_product_month_view[".OwnerID"] = "";
$tdatareport_product_month_view[".OriginalTable"] = "report_product_Month";


$tdatareport_product_month_view[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdatareport_product_month_view[".originalPagesByType"] = $tdatareport_product_month_view[".pagesByType"];
$tdatareport_product_month_view[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdatareport_product_month_view[".originalPages"] = $tdatareport_product_month_view[".pages"];
$tdatareport_product_month_view[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdatareport_product_month_view[".originalDefaultPages"] = $tdatareport_product_month_view[".defaultPages"];

//	field labels
$fieldLabelsreport_product_month_view = array();
$fieldToolTipsreport_product_month_view = array();
$pageTitlesreport_product_month_view = array();
$placeHoldersreport_product_month_view = array();

if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelsreport_product_month_view["Indonesian"] = array();
	$fieldToolTipsreport_product_month_view["Indonesian"] = array();
	$placeHoldersreport_product_month_view["Indonesian"] = array();
	$pageTitlesreport_product_month_view["Indonesian"] = array();
	$fieldLabelsreport_product_month_view["Indonesian"]["YEARS"] = "YEARS";
	$fieldToolTipsreport_product_month_view["Indonesian"]["YEARS"] = "";
	$placeHoldersreport_product_month_view["Indonesian"]["YEARS"] = "";
	$fieldLabelsreport_product_month_view["Indonesian"]["MONTHS"] = "MONTHS";
	$fieldToolTipsreport_product_month_view["Indonesian"]["MONTHS"] = "";
	$placeHoldersreport_product_month_view["Indonesian"]["MONTHS"] = "";
	$fieldLabelsreport_product_month_view["Indonesian"]["SUM_B_SUMINSURED_"] = "SUM(B.SUMINSURED)";
	$fieldToolTipsreport_product_month_view["Indonesian"]["SUM_B_SUMINSURED_"] = "";
	$placeHoldersreport_product_month_view["Indonesian"]["SUM_B_SUMINSURED_"] = "";
	$fieldLabelsreport_product_month_view["Indonesian"]["SUM_B_KOMISI_"] = "SUM(B.KOMISI)";
	$fieldToolTipsreport_product_month_view["Indonesian"]["SUM_B_KOMISI_"] = "";
	$placeHoldersreport_product_month_view["Indonesian"]["SUM_B_KOMISI_"] = "";
	$fieldLabelsreport_product_month_view["Indonesian"]["KETERANGAN"] = "KETERANGAN";
	$fieldToolTipsreport_product_month_view["Indonesian"]["KETERANGAN"] = "";
	$placeHoldersreport_product_month_view["Indonesian"]["KETERANGAN"] = "";
	if (count($fieldToolTipsreport_product_month_view["Indonesian"]))
		$tdatareport_product_month_view[".isUseToolTips"] = true;
}


	$tdatareport_product_month_view[".NCSearch"] = true;

	$tdatareport_product_month_view[".ChartRefreshTime"] = 0;


$tdatareport_product_month_view[".shortTableName"] = "report_product_month_view";
$tdatareport_product_month_view[".nSecOptions"] = 0;

$tdatareport_product_month_view[".mainTableOwnerID"] = "";
$tdatareport_product_month_view[".entityType"] = 3;
$tdatareport_product_month_view[".connId"] = "u736239518_btn_at_154_41_241_2";


$tdatareport_product_month_view[".strOriginalTableName"] = "report_product_Month";

	



$tdatareport_product_month_view[".showAddInPopup"] = false;

$tdatareport_product_month_view[".showEditInPopup"] = false;

$tdatareport_product_month_view[".showViewInPopup"] = false;

$tdatareport_product_month_view[".listAjax"] = false;
//	temporary
//$tdatareport_product_month_view[".listAjax"] = false;

	$tdatareport_product_month_view[".audit"] = false;

	$tdatareport_product_month_view[".locking"] = false;


$pages = $tdatareport_product_month_view[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatareport_product_month_view[".edit"] = true;
	$tdatareport_product_month_view[".afterEditAction"] = 1;
	$tdatareport_product_month_view[".closePopupAfterEdit"] = 1;
	$tdatareport_product_month_view[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatareport_product_month_view[".add"] = true;
$tdatareport_product_month_view[".afterAddAction"] = 1;
$tdatareport_product_month_view[".closePopupAfterAdd"] = 1;
$tdatareport_product_month_view[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatareport_product_month_view[".list"] = true;
}



$tdatareport_product_month_view[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatareport_product_month_view[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatareport_product_month_view[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatareport_product_month_view[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatareport_product_month_view[".printFriendly"] = true;
}



$tdatareport_product_month_view[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatareport_product_month_view[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatareport_product_month_view[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatareport_product_month_view[".isUseAjaxSuggest"] = true;



																											

$tdatareport_product_month_view[".ajaxCodeSnippetAdded"] = false;

$tdatareport_product_month_view[".buttonsAdded"] = false;

$tdatareport_product_month_view[".addPageEvents"] = false;

// use timepicker for search panel
$tdatareport_product_month_view[".isUseTimeForSearch"] = false;


$tdatareport_product_month_view[".badgeColor"] = "4169E1";


$tdatareport_product_month_view[".allSearchFields"] = array();
$tdatareport_product_month_view[".filterFields"] = array();
$tdatareport_product_month_view[".requiredSearchFields"] = array();

$tdatareport_product_month_view[".googleLikeFields"] = array();
$tdatareport_product_month_view[".googleLikeFields"][] = "YEARS";
$tdatareport_product_month_view[".googleLikeFields"][] = "MONTHS";
$tdatareport_product_month_view[".googleLikeFields"][] = "SUM(B.SUMINSURED)";
$tdatareport_product_month_view[".googleLikeFields"][] = "SUM(B.KOMISI)";
$tdatareport_product_month_view[".googleLikeFields"][] = "KETERANGAN";



$tdatareport_product_month_view[".tableType"] = "chart";

$tdatareport_product_month_view[".printerPageOrientation"] = 0;
$tdatareport_product_month_view[".nPrinterPageScale"] = 100;

$tdatareport_product_month_view[".nPrinterSplitRecords"] = 40;

$tdatareport_product_month_view[".geocodingEnabled"] = false;



// chart settings
$tdatareport_product_month_view[".chartType"] = "2DDoughnut";
// end of chart settings








$tstrOrderBy = "";
$tdatareport_product_month_view[".strOrderBy"] = $tstrOrderBy;

$tdatareport_product_month_view[".orderindexes"] = array();


$tdatareport_product_month_view[".sqlHead"] = "SELECT YEARS,  	MONTHS,  	`SUM(B.SUMINSURED)`,  	`SUM(B.KOMISI)`,  	KETERANGAN";
$tdatareport_product_month_view[".sqlFrom"] = "FROM report_product_Month";
$tdatareport_product_month_view[".sqlWhereExpr"] = "";
$tdatareport_product_month_view[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatareport_product_month_view[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatareport_product_month_view[".arrGroupsPerPage"] = $arrGPP;

$tdatareport_product_month_view[".highlightSearchResults"] = true;

$tableKeysreport_product_month_view = array();
$tdatareport_product_month_view[".Keys"] = $tableKeysreport_product_month_view;


$tdatareport_product_month_view[".hideMobileList"] = array();




//	YEARS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "YEARS";
	$fdata["GoodName"] = "YEARS";
	$fdata["ownerTable"] = "report_product_Month";
	$fdata["Label"] = GetFieldLabel("report_product_Month_view","YEARS");
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


	$tdatareport_product_month_view["YEARS"] = $fdata;
		$tdatareport_product_month_view[".searchableFields"][] = "YEARS";
//	MONTHS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "MONTHS";
	$fdata["GoodName"] = "MONTHS";
	$fdata["ownerTable"] = "report_product_Month";
	$fdata["Label"] = GetFieldLabel("report_product_Month_view","MONTHS");
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


	$tdatareport_product_month_view["MONTHS"] = $fdata;
		$tdatareport_product_month_view[".searchableFields"][] = "MONTHS";
//	SUM(B.SUMINSURED)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "SUM(B.SUMINSURED)";
	$fdata["GoodName"] = "SUM_B_SUMINSURED_";
	$fdata["ownerTable"] = "report_product_Month";
	$fdata["Label"] = GetFieldLabel("report_product_Month_view","SUM_B_SUMINSURED_");
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


	$tdatareport_product_month_view["SUM(B.SUMINSURED)"] = $fdata;
		$tdatareport_product_month_view[".searchableFields"][] = "SUM(B.SUMINSURED)";
//	SUM(B.KOMISI)
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "SUM(B.KOMISI)";
	$fdata["GoodName"] = "SUM_B_KOMISI_";
	$fdata["ownerTable"] = "report_product_Month";
	$fdata["Label"] = GetFieldLabel("report_product_Month_view","SUM_B_KOMISI_");
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


	$tdatareport_product_month_view["SUM(B.KOMISI)"] = $fdata;
		$tdatareport_product_month_view[".searchableFields"][] = "SUM(B.KOMISI)";
//	KETERANGAN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "KETERANGAN";
	$fdata["GoodName"] = "KETERANGAN";
	$fdata["ownerTable"] = "report_product_Month";
	$fdata["Label"] = GetFieldLabel("report_product_Month_view","KETERANGAN");
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


	$tdatareport_product_month_view["KETERANGAN"] = $fdata;
		$tdatareport_product_month_view[".searchableFields"][] = "KETERANGAN";

$tdatareport_product_month_view[".chartLabelField"] = "KETERANGAN";
$tdatareport_product_month_view[".chartSeries"] = array();
$tdatareport_product_month_view[".chartSeries"][] = array(
	"field" => "SUM(B.SUMINSURED)",
	"total" => ""
);
$tdatareport_product_month_view[".chartSeries"][] = array(
	"field" => "SUM(B.KOMISI)",
	"total" => ""
);
	$tdatareport_product_month_view[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">report_product_Month_view</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_doughnut</attr>
		</attr>

		<attr value="parameters">';
	$tdatareport_product_month_view[".chartXml"] .= '<attr value="0">
			<attr value="name">SUM(B.SUMINSURED)</attr>';
	$tdatareport_product_month_view[".chartXml"] .= '</attr>';
	$tdatareport_product_month_view[".chartXml"] .= '<attr value="1">
			<attr value="name">SUM(B.KOMISI)</attr>';
	$tdatareport_product_month_view[".chartXml"] .= '</attr>';
	$tdatareport_product_month_view[".chartXml"] .= '<attr value="2">
		<attr value="name">KETERANGAN</attr>
	</attr>';
	$tdatareport_product_month_view[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatareport_product_month_view[".chartXml"] .= '<attr value="head">'.xmlencode("").'</attr>
<attr value="foot">'.xmlencode("").'</attr>
<attr value="y_axis_label">'.xmlencode("").'</attr>


<attr value="slegend">true</attr>
<attr value="sgrid">false</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">1</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>';
$tdatareport_product_month_view[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatareport_product_month_view[".chartXml"] .= '<attr value="0">
		<attr value="name">YEARS</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("report_product_Month_view","YEARS")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatareport_product_month_view[".chartXml"] .= '<attr value="1">
		<attr value="name">MONTHS</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("report_product_Month_view","MONTHS")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatareport_product_month_view[".chartXml"] .= '<attr value="2">
		<attr value="name">SUM(B.SUMINSURED)</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("report_product_Month_view","SUM_B_SUMINSURED_")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatareport_product_month_view[".chartXml"] .= '<attr value="3">
		<attr value="name">SUM(B.KOMISI)</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("report_product_Month_view","SUM_B_KOMISI_")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatareport_product_month_view[".chartXml"] .= '<attr value="4">
		<attr value="name">KETERANGAN</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("report_product_Month_view","KETERANGAN")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatareport_product_month_view[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">report_product_Month_view</attr>
<attr value="short_table_name">report_product_month_view</attr>
</attr>

</chart>';

$tables_data["report_product_Month_view"]=&$tdatareport_product_month_view;
$field_labels["report_product_Month_view"] = &$fieldLabelsreport_product_month_view;
$fieldToolTips["report_product_Month_view"] = &$fieldToolTipsreport_product_month_view;
$placeHolders["report_product_Month_view"] = &$placeHoldersreport_product_month_view;
$page_titles["report_product_Month_view"] = &$pageTitlesreport_product_month_view;


changeTextControlsToDate( "report_product_Month_view" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["report_product_Month_view"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["report_product_Month_view"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_report_product_month_view()
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
	"m_srcTableName" => "report_product_Month_view"
));

$proto6["m_sql"] = "YEARS";
$proto6["m_srcTableName"] = "report_product_Month_view";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "MONTHS",
	"m_strTable" => "report_product_Month",
	"m_srcTableName" => "report_product_Month_view"
));

$proto8["m_sql"] = "MONTHS";
$proto8["m_srcTableName"] = "report_product_Month_view";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "SUM(B.SUMINSURED)",
	"m_strTable" => "report_product_Month",
	"m_srcTableName" => "report_product_Month_view"
));

$proto10["m_sql"] = "`SUM(B.SUMINSURED)`";
$proto10["m_srcTableName"] = "report_product_Month_view";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "SUM(B.KOMISI)",
	"m_strTable" => "report_product_Month",
	"m_srcTableName" => "report_product_Month_view"
));

$proto12["m_sql"] = "`SUM(B.KOMISI)`";
$proto12["m_srcTableName"] = "report_product_Month_view";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "KETERANGAN",
	"m_strTable" => "report_product_Month",
	"m_srcTableName" => "report_product_Month_view"
));

$proto14["m_sql"] = "KETERANGAN";
$proto14["m_srcTableName"] = "report_product_Month_view";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "report_product_Month";
$proto17["m_srcTableName"] = "report_product_Month_view";
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
$proto16["m_srcTableName"] = "report_product_Month_view";
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
$proto0["m_srcTableName"]="report_product_Month_view";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_report_product_month_view = createSqlQuery_report_product_month_view();


	
																												;

					

$tdatareport_product_month_view[".sqlquery"] = $queryData_report_product_month_view;



$tdatareport_product_month_view[".hasEvents"] = false;

?>