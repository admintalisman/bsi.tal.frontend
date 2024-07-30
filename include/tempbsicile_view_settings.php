<?php
$tdatatempbsicile_view = array();
$tdatatempbsicile_view[".searchableFields"] = array();
$tdatatempbsicile_view[".ShortName"] = "tempbsicile_view";
$tdatatempbsicile_view[".OwnerID"] = "";
$tdatatempbsicile_view[".OriginalTable"] = "TEMPBSICILE";


$tdatatempbsicile_view[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdatatempbsicile_view[".originalPagesByType"] = $tdatatempbsicile_view[".pagesByType"];
$tdatatempbsicile_view[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdatatempbsicile_view[".originalPages"] = $tdatatempbsicile_view[".pages"];
$tdatatempbsicile_view[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdatatempbsicile_view[".originalDefaultPages"] = $tdatatempbsicile_view[".defaultPages"];

//	field labels
$fieldLabelstempbsicile_view = array();
$fieldToolTipstempbsicile_view = array();
$pageTitlestempbsicile_view = array();
$placeHolderstempbsicile_view = array();

if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelstempbsicile_view["Indonesian"] = array();
	$fieldToolTipstempbsicile_view["Indonesian"] = array();
	$placeHolderstempbsicile_view["Indonesian"] = array();
	$pageTitlestempbsicile_view["Indonesian"] = array();
	$fieldLabelstempbsicile_view["Indonesian"]["NMCBGBANK"] = "NMCBGBANK";
	$fieldToolTipstempbsicile_view["Indonesian"]["NMCBGBANK"] = "";
	$placeHolderstempbsicile_view["Indonesian"]["NMCBGBANK"] = "";
	$fieldLabelstempbsicile_view["Indonesian"]["Total"] = "Total";
	$fieldToolTipstempbsicile_view["Indonesian"]["Total"] = "";
	$placeHolderstempbsicile_view["Indonesian"]["Total"] = "";
	if (count($fieldToolTipstempbsicile_view["Indonesian"]))
		$tdatatempbsicile_view[".isUseToolTips"] = true;
}


	$tdatatempbsicile_view[".NCSearch"] = true;

	$tdatatempbsicile_view[".ChartRefreshTime"] = 0;


$tdatatempbsicile_view[".shortTableName"] = "tempbsicile_view";
$tdatatempbsicile_view[".nSecOptions"] = 0;

$tdatatempbsicile_view[".recsLimit"] = 5;
$tdatatempbsicile_view[".mainTableOwnerID"] = "";
$tdatatempbsicile_view[".entityType"] = 3;
$tdatatempbsicile_view[".connId"] = "u736239518_btn_at_154_41_241_2";


$tdatatempbsicile_view[".strOriginalTableName"] = "TEMPBSICILE";

	



$tdatatempbsicile_view[".showAddInPopup"] = false;

$tdatatempbsicile_view[".showEditInPopup"] = false;

$tdatatempbsicile_view[".showViewInPopup"] = false;

$tdatatempbsicile_view[".listAjax"] = false;
//	temporary
//$tdatatempbsicile_view[".listAjax"] = false;

	$tdatatempbsicile_view[".audit"] = false;

	$tdatatempbsicile_view[".locking"] = false;


$pages = $tdatatempbsicile_view[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatempbsicile_view[".edit"] = true;
	$tdatatempbsicile_view[".afterEditAction"] = 1;
	$tdatatempbsicile_view[".closePopupAfterEdit"] = 1;
	$tdatatempbsicile_view[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatempbsicile_view[".add"] = true;
$tdatatempbsicile_view[".afterAddAction"] = 1;
$tdatatempbsicile_view[".closePopupAfterAdd"] = 1;
$tdatatempbsicile_view[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatempbsicile_view[".list"] = true;
}



$tdatatempbsicile_view[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatempbsicile_view[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatempbsicile_view[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatempbsicile_view[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatempbsicile_view[".printFriendly"] = true;
}



$tdatatempbsicile_view[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatempbsicile_view[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatempbsicile_view[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatempbsicile_view[".isUseAjaxSuggest"] = true;



																											

$tdatatempbsicile_view[".ajaxCodeSnippetAdded"] = false;

$tdatatempbsicile_view[".buttonsAdded"] = false;

$tdatatempbsicile_view[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatempbsicile_view[".isUseTimeForSearch"] = false;


$tdatatempbsicile_view[".badgeColor"] = "DC143C";


$tdatatempbsicile_view[".allSearchFields"] = array();
$tdatatempbsicile_view[".filterFields"] = array();
$tdatatempbsicile_view[".requiredSearchFields"] = array();

$tdatatempbsicile_view[".googleLikeFields"] = array();
$tdatatempbsicile_view[".googleLikeFields"][] = "Total";
$tdatatempbsicile_view[".googleLikeFields"][] = "NMCBGBANK";



$tdatatempbsicile_view[".tableType"] = "chart";

$tdatatempbsicile_view[".printerPageOrientation"] = 0;
$tdatatempbsicile_view[".nPrinterPageScale"] = 100;

$tdatatempbsicile_view[".nPrinterSplitRecords"] = 40;

$tdatatempbsicile_view[".geocodingEnabled"] = false;



// chart settings
$tdatatempbsicile_view[".chartType"] = "2DDoughnut";
// end of chart settings








$tstrOrderBy = "ORDER BY Total DESC";
$tdatatempbsicile_view[".strOrderBy"] = $tstrOrderBy;

$tdatatempbsicile_view[".orderindexes"] = array();
	$tdatatempbsicile_view[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "COUNT(NMCBGBANK)");



$tdatatempbsicile_view[".sqlHead"] = "SELECT COUNT(NMCBGBANK) as Total,  	NMCBGBANK";
$tdatatempbsicile_view[".sqlFrom"] = "FROM TEMPBSICILE";
$tdatatempbsicile_view[".sqlWhereExpr"] = "";
$tdatatempbsicile_view[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatempbsicile_view[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatempbsicile_view[".arrGroupsPerPage"] = $arrGPP;

$tdatatempbsicile_view[".highlightSearchResults"] = true;

$tableKeystempbsicile_view = array();
$tdatatempbsicile_view[".Keys"] = $tableKeystempbsicile_view;


$tdatatempbsicile_view[".hideMobileList"] = array();




//	Total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Total";
	$fdata["GoodName"] = "Total";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("TEMPBSICILE_view","Total");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Total";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(NMCBGBANK)";

	
	
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


	$tdatatempbsicile_view["Total"] = $fdata;
		$tdatatempbsicile_view[".searchableFields"][] = "Total";
//	NMCBGBANK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "NMCBGBANK";
	$fdata["GoodName"] = "NMCBGBANK";
	$fdata["ownerTable"] = "TEMPBSICILE";
	$fdata["Label"] = GetFieldLabel("TEMPBSICILE_view","NMCBGBANK");
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatatempbsicile_view["NMCBGBANK"] = $fdata;
		$tdatatempbsicile_view[".searchableFields"][] = "NMCBGBANK";

$tdatatempbsicile_view[".groupChart"] = true;
$tdatatempbsicile_view[".chartLabelInterval"] = 0;
$tdatatempbsicile_view[".chartLabelField"] = "NMCBGBANK";
$tdatatempbsicile_view[".chartSeries"] = array();
$tdatatempbsicile_view[".chartSeries"][] = array(
	"field" => "Total",
	"total" => "SUM"
);
	$tdatatempbsicile_view[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">TEMPBSICILE_view</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_doughnut</attr>
		</attr>

		<attr value="parameters">';
	$tdatatempbsicile_view[".chartXml"] .= '<attr value="0">
			<attr value="name">Total</attr>';
	$tdatatempbsicile_view[".chartXml"] .= '</attr>';
	$tdatatempbsicile_view[".chartXml"] .= '<attr value="1">
		<attr value="name">NMCBGBANK</attr>
	</attr>';
	$tdatatempbsicile_view[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatatempbsicile_view[".chartXml"] .= '<attr value="head">'.xmlencode("").'</attr>
<attr value="foot">'.xmlencode("").'</attr>
<attr value="y_axis_label">'.xmlencode("POKOKPEMBIAYAAN").'</attr>


<attr value="slegend">true</attr>
<attr value="sgrid">true</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="slog">true</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">0</attr>
<attr value="isstacked">1</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>';
$tdatatempbsicile_view[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatatempbsicile_view[".chartXml"] .= '<attr value="0">
		<attr value="name">Total</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("TEMPBSICILE_view","Total")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatempbsicile_view[".chartXml"] .= '<attr value="1">
		<attr value="name">NMCBGBANK</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("TEMPBSICILE_view","NMCBGBANK")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatatempbsicile_view[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">TEMPBSICILE_view</attr>
<attr value="short_table_name">tempbsicile_view</attr>
</attr>

</chart>';

$tables_data["TEMPBSICILE_view"]=&$tdatatempbsicile_view;
$field_labels["TEMPBSICILE_view"] = &$fieldLabelstempbsicile_view;
$fieldToolTips["TEMPBSICILE_view"] = &$fieldToolTipstempbsicile_view;
$placeHolders["TEMPBSICILE_view"] = &$placeHolderstempbsicile_view;
$page_titles["TEMPBSICILE_view"] = &$pageTitlestempbsicile_view;


changeTextControlsToDate( "TEMPBSICILE_view" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["TEMPBSICILE_view"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["TEMPBSICILE_view"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tempbsicile_view()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "COUNT(NMCBGBANK) as Total,  	NMCBGBANK";
$proto0["m_strFrom"] = "FROM TEMPBSICILE";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY Total DESC";
	
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
			$proto7=array();
$proto7["m_functiontype"] = "SQLF_COUNT";
$proto7["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "NMCBGBANK",
	"m_strTable" => "TEMPBSICILE",
	"m_srcTableName" => "TEMPBSICILE_view"
));

$proto7["m_arguments"][]=$obj;
$proto7["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto7);

$proto6["m_sql"] = "COUNT(NMCBGBANK)";
$proto6["m_srcTableName"] = "TEMPBSICILE_view";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "Total";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "NMCBGBANK",
	"m_strTable" => "TEMPBSICILE",
	"m_srcTableName" => "TEMPBSICILE_view"
));

$proto9["m_sql"] = "NMCBGBANK";
$proto9["m_srcTableName"] = "TEMPBSICILE_view";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "TEMPBSICILE";
$proto12["m_srcTableName"] = "TEMPBSICILE_view";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "IDTEMPCE";
$proto12["m_columns"][] = "NOLOANDISBURSE";
$proto12["m_columns"][] = "NAMATERJAMIN";
$proto12["m_columns"][] = "POKOKPEMBIAYAAN";
$proto12["m_columns"][] = "JANGKAWAKTU";
$proto12["m_columns"][] = "TGLAKAD";
$proto12["m_columns"][] = "TGLJATUHTEMPO";
$proto12["m_columns"][] = "KDCBGBANK";
$proto12["m_columns"][] = "NMCBGBANK";
$proto12["m_columns"][] = "ADDUSER";
$proto12["m_columns"][] = "ADDDATE";
$proto12["m_columns"][] = "NIK";
$proto12["m_columns"][] = "TGLLAHIR";
$proto12["m_columns"][] = "ALAMAT";
$proto12["m_columns"][] = "BSMID";
$proto12["m_columns"][] = "PROPOSALNO";
$proto12["m_columns"][] = "PREMI";
$proto12["m_columns"][] = "RATE";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_sql"] = "TEMPBSICILE";
$proto11["m_alias"] = "";
$proto11["m_srcTableName"] = "TEMPBSICILE_view";
$proto13=array();
$proto13["m_sql"] = "";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "";
$proto13["m_havingmode"] = false;
$proto13["m_inBrackets"] = false;
$proto13["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto13);

$proto11["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto11);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto15=array();
						$obj = new SQLField(array(
	"m_strName" => "NMCBGBANK",
	"m_strTable" => "TEMPBSICILE",
	"m_srcTableName" => "TEMPBSICILE_view"
));

$proto15["m_column"]=$obj;
$obj = new SQLGroupByItem($proto15);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto17=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "Total"
));

$proto17["m_column"]=$obj;
$proto17["m_bAsc"] = 0;
$proto17["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto17);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="TEMPBSICILE_view";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tempbsicile_view = createSqlQuery_tempbsicile_view();


	
																												;

		

$tdatatempbsicile_view[".sqlquery"] = $queryData_tempbsicile_view;



$tdatatempbsicile_view[".hasEvents"] = false;

?>