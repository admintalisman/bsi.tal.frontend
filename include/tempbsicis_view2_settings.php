<?php
$tdatatempbsicis_view2 = array();
$tdatatempbsicis_view2[".searchableFields"] = array();
$tdatatempbsicis_view2[".ShortName"] = "tempbsicis_view2";
$tdatatempbsicis_view2[".OwnerID"] = "";
$tdatatempbsicis_view2[".OriginalTable"] = "TEMPBSICIS";


$tdatatempbsicis_view2[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdatatempbsicis_view2[".originalPagesByType"] = $tdatatempbsicis_view2[".pagesByType"];
$tdatatempbsicis_view2[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdatatempbsicis_view2[".originalPages"] = $tdatatempbsicis_view2[".pages"];
$tdatatempbsicis_view2[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdatatempbsicis_view2[".originalDefaultPages"] = $tdatatempbsicis_view2[".defaultPages"];

//	field labels
$fieldLabelstempbsicis_view2 = array();
$fieldToolTipstempbsicis_view2 = array();
$pageTitlestempbsicis_view2 = array();
$placeHolderstempbsicis_view2 = array();

if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelstempbsicis_view2["Indonesian"] = array();
	$fieldToolTipstempbsicis_view2["Indonesian"] = array();
	$placeHolderstempbsicis_view2["Indonesian"] = array();
	$pageTitlestempbsicis_view2["Indonesian"] = array();
	$fieldLabelstempbsicis_view2["Indonesian"]["KODECABANG"] = "Cabang";
	$fieldToolTipstempbsicis_view2["Indonesian"]["KODECABANG"] = "";
	$placeHolderstempbsicis_view2["Indonesian"]["KODECABANG"] = "";
	$fieldLabelstempbsicis_view2["Indonesian"]["SUMINSURED"] = "Nilai Uang Pertanggungan";
	$fieldToolTipstempbsicis_view2["Indonesian"]["SUMINSURED"] = "";
	$placeHolderstempbsicis_view2["Indonesian"]["SUMINSURED"] = "";
	if (count($fieldToolTipstempbsicis_view2["Indonesian"]))
		$tdatatempbsicis_view2[".isUseToolTips"] = true;
}


	$tdatatempbsicis_view2[".NCSearch"] = true;

	$tdatatempbsicis_view2[".ChartRefreshTime"] = 0;


$tdatatempbsicis_view2[".shortTableName"] = "tempbsicis_view2";
$tdatatempbsicis_view2[".nSecOptions"] = 0;

$tdatatempbsicis_view2[".recsLimit"] = 5;
$tdatatempbsicis_view2[".mainTableOwnerID"] = "";
$tdatatempbsicis_view2[".entityType"] = 3;
$tdatatempbsicis_view2[".connId"] = "u736239518_btn_at_154_41_241_2";


$tdatatempbsicis_view2[".strOriginalTableName"] = "TEMPBSICIS";

	



$tdatatempbsicis_view2[".showAddInPopup"] = false;

$tdatatempbsicis_view2[".showEditInPopup"] = false;

$tdatatempbsicis_view2[".showViewInPopup"] = false;

$tdatatempbsicis_view2[".listAjax"] = false;
//	temporary
//$tdatatempbsicis_view2[".listAjax"] = false;

	$tdatatempbsicis_view2[".audit"] = false;

	$tdatatempbsicis_view2[".locking"] = false;


$pages = $tdatatempbsicis_view2[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatempbsicis_view2[".edit"] = true;
	$tdatatempbsicis_view2[".afterEditAction"] = 1;
	$tdatatempbsicis_view2[".closePopupAfterEdit"] = 1;
	$tdatatempbsicis_view2[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatempbsicis_view2[".add"] = true;
$tdatatempbsicis_view2[".afterAddAction"] = 1;
$tdatatempbsicis_view2[".closePopupAfterAdd"] = 1;
$tdatatempbsicis_view2[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatempbsicis_view2[".list"] = true;
}



$tdatatempbsicis_view2[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatempbsicis_view2[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatempbsicis_view2[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatempbsicis_view2[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatempbsicis_view2[".printFriendly"] = true;
}



$tdatatempbsicis_view2[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatempbsicis_view2[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatempbsicis_view2[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatempbsicis_view2[".isUseAjaxSuggest"] = true;



																											

$tdatatempbsicis_view2[".ajaxCodeSnippetAdded"] = false;

$tdatatempbsicis_view2[".buttonsAdded"] = false;

$tdatatempbsicis_view2[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatempbsicis_view2[".isUseTimeForSearch"] = false;


$tdatatempbsicis_view2[".badgeColor"] = "3CB371";


$tdatatempbsicis_view2[".allSearchFields"] = array();
$tdatatempbsicis_view2[".filterFields"] = array();
$tdatatempbsicis_view2[".requiredSearchFields"] = array();

$tdatatempbsicis_view2[".googleLikeFields"] = array();
$tdatatempbsicis_view2[".googleLikeFields"][] = "KODECABANG";
$tdatatempbsicis_view2[".googleLikeFields"][] = "SUMINSURED";



$tdatatempbsicis_view2[".tableType"] = "chart";

$tdatatempbsicis_view2[".printerPageOrientation"] = 0;
$tdatatempbsicis_view2[".nPrinterPageScale"] = 100;

$tdatatempbsicis_view2[".nPrinterSplitRecords"] = 40;

$tdatatempbsicis_view2[".geocodingEnabled"] = false;



// chart settings
$tdatatempbsicis_view2[".chartType"] = "2DColumn";
// end of chart settings

$tdatatempbsicis_view2[".isDisplayLoading"] = true;







$tstrOrderBy = "ORDER BY SUMINSURED DESC";
$tdatatempbsicis_view2[".strOrderBy"] = $tstrOrderBy;

$tdatatempbsicis_view2[".orderindexes"] = array();
	$tdatatempbsicis_view2[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "SUMINSURED");



$tdatatempbsicis_view2[".sqlHead"] = "SELECT KODECABANG,  SUMINSURED";
$tdatatempbsicis_view2[".sqlFrom"] = "FROM TEMPBSICIS";
$tdatatempbsicis_view2[".sqlWhereExpr"] = "(KODECABANG = ':session.IdExt')";
$tdatatempbsicis_view2[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatempbsicis_view2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatempbsicis_view2[".arrGroupsPerPage"] = $arrGPP;

$tdatatempbsicis_view2[".highlightSearchResults"] = true;

$tableKeystempbsicis_view2 = array();
$tdatatempbsicis_view2[".Keys"] = $tableKeystempbsicis_view2;


$tdatatempbsicis_view2[".hideMobileList"] = array();




//	KODECABANG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "KODECABANG";
	$fdata["GoodName"] = "KODECABANG";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIS_view2","KODECABANG");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "getbsibranch";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "IDBRANCH";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "BRANCHNAME";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
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


	$tdatatempbsicis_view2["KODECABANG"] = $fdata;
		$tdatatempbsicis_view2[".searchableFields"][] = "KODECABANG";
//	SUMINSURED
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SUMINSURED";
	$fdata["GoodName"] = "SUMINSURED";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIS_view2","SUMINSURED");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Currency");
							
	
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


	$tdatatempbsicis_view2["SUMINSURED"] = $fdata;
		$tdatatempbsicis_view2[".searchableFields"][] = "SUMINSURED";

$tdatatempbsicis_view2[".chartLabelField"] = "KODECABANG";
$tdatatempbsicis_view2[".chartSeries"] = array();
$tdatatempbsicis_view2[".chartSeries"][] = array(
	"field" => "SUMINSURED",
	"total" => ""
);
	$tdatatempbsicis_view2[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">TEMPBSICIS_view2</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdatatempbsicis_view2[".chartXml"] .= '<attr value="0">
			<attr value="name">SUMINSURED</attr>';
	$tdatatempbsicis_view2[".chartXml"] .= '</attr>';
	$tdatatempbsicis_view2[".chartXml"] .= '<attr value="1">
		<attr value="name">KODECABANG</attr>
	</attr>';
	$tdatatempbsicis_view2[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatatempbsicis_view2[".chartXml"] .= '<attr value="head">'.xmlencode("").'</attr>
<attr value="foot">'.xmlencode("").'</attr>
<attr value="y_axis_label">'.xmlencode("SUMINSURED").'</attr>


<attr value="slegend">false</attr>
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
$tdatatempbsicis_view2[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatatempbsicis_view2[".chartXml"] .= '<attr value="0">
		<attr value="name">KODECABANG</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("TEMPBSICIS_view2","KODECABANG")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatempbsicis_view2[".chartXml"] .= '<attr value="1">
		<attr value="name">SUMINSURED</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("TEMPBSICIS_view2","SUMINSURED")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatatempbsicis_view2[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">TEMPBSICIS_view2</attr>
<attr value="short_table_name">tempbsicis_view2</attr>
</attr>

</chart>';

$tables_data["TEMPBSICIS_view2"]=&$tdatatempbsicis_view2;
$field_labels["TEMPBSICIS_view2"] = &$fieldLabelstempbsicis_view2;
$fieldToolTips["TEMPBSICIS_view2"] = &$fieldToolTipstempbsicis_view2;
$placeHolders["TEMPBSICIS_view2"] = &$placeHolderstempbsicis_view2;
$page_titles["TEMPBSICIS_view2"] = &$pageTitlestempbsicis_view2;


changeTextControlsToDate( "TEMPBSICIS_view2" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["TEMPBSICIS_view2"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["TEMPBSICIS_view2"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tempbsicis_view2()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "KODECABANG,  SUMINSURED";
$proto0["m_strFrom"] = "FROM TEMPBSICIS";
$proto0["m_strWhere"] = "(KODECABANG = ':session.IdExt')";
$proto0["m_strOrderBy"] = "ORDER BY SUMINSURED DESC";
	
																												;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "KODECABANG = ':session.IdExt'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "KODECABANG",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS_view2"
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
	"m_strName" => "KODECABANG",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS_view2"
));

$proto6["m_sql"] = "KODECABANG";
$proto6["m_srcTableName"] = "TEMPBSICIS_view2";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "SUMINSURED",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS_view2"
));

$proto8["m_sql"] = "SUMINSURED";
$proto8["m_srcTableName"] = "TEMPBSICIS_view2";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "TEMPBSICIS";
$proto11["m_srcTableName"] = "TEMPBSICIS_view2";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "IDCIS";
$proto11["m_columns"][] = "CIS_TOKEN";
$proto11["m_columns"][] = "CIS_REGION";
$proto11["m_columns"][] = "CIS_AREA";
$proto11["m_columns"][] = "KODECABANG";
$proto11["m_columns"][] = "DATE";
$proto11["m_columns"][] = "SUMINSURED";
$proto11["m_columns"][] = "CIS_UPL_USER";
$proto11["m_columns"][] = "CIS_UPL_DATE";
$proto11["m_columns"][] = "CIS_FL";
$proto11["m_columns"][] = "CIS_BSMID";
$proto11["m_columns"][] = "CIS_PROPOSAL";
$proto11["m_columns"][] = "CIS_PREMI";
$proto11["m_columns"][] = "CIS_PERIODE_END";
$proto11["m_columns"][] = "CIS_RATE";
$proto11["m_columns"][] = "CIS_LIMIT";
$proto11["m_columns"][] = "CIS_TIPE";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "TEMPBSICIS";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "TEMPBSICIS_view2";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto14=array();
						$obj = new SQLField(array(
	"m_strName" => "SUMINSURED",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS_view2"
));

$proto14["m_column"]=$obj;
$proto14["m_bAsc"] = 0;
$proto14["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto14);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="TEMPBSICIS_view2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tempbsicis_view2 = createSqlQuery_tempbsicis_view2();


	
																												;

		

$tdatatempbsicis_view2[".sqlquery"] = $queryData_tempbsicis_view2;



$tdatatempbsicis_view2[".hasEvents"] = false;

?>