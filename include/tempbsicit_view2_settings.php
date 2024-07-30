<?php
$tdatatempbsicit_view2 = array();
$tdatatempbsicit_view2[".searchableFields"] = array();
$tdatatempbsicit_view2[".ShortName"] = "tempbsicit_view2";
$tdatatempbsicit_view2[".OwnerID"] = "";
$tdatatempbsicit_view2[".OriginalTable"] = "TEMPBSICIT";


$tdatatempbsicit_view2[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdatatempbsicit_view2[".originalPagesByType"] = $tdatatempbsicit_view2[".pagesByType"];
$tdatatempbsicit_view2[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdatatempbsicit_view2[".originalPages"] = $tdatatempbsicit_view2[".pages"];
$tdatatempbsicit_view2[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdatatempbsicit_view2[".originalDefaultPages"] = $tdatatempbsicit_view2[".defaultPages"];

//	field labels
$fieldLabelstempbsicit_view2 = array();
$fieldToolTipstempbsicit_view2 = array();
$pageTitlestempbsicit_view2 = array();
$placeHolderstempbsicit_view2 = array();

if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelstempbsicit_view2["Indonesian"] = array();
	$fieldToolTipstempbsicit_view2["Indonesian"] = array();
	$placeHolderstempbsicit_view2["Indonesian"] = array();
	$pageTitlestempbsicit_view2["Indonesian"] = array();
	$fieldLabelstempbsicit_view2["Indonesian"]["SUMINSURED"] = "Nilai Pertanggungan";
	$fieldToolTipstempbsicit_view2["Indonesian"]["SUMINSURED"] = "";
	$placeHolderstempbsicit_view2["Indonesian"]["SUMINSURED"] = "";
	$fieldLabelstempbsicit_view2["Indonesian"]["PREMI"] = "Nilai Premi";
	$fieldToolTipstempbsicit_view2["Indonesian"]["PREMI"] = "";
	$placeHolderstempbsicit_view2["Indonesian"]["PREMI"] = "";
	$fieldLabelstempbsicit_view2["Indonesian"]["CIT_PROPOSAL"] = "No Proposal";
	$fieldToolTipstempbsicit_view2["Indonesian"]["CIT_PROPOSAL"] = "";
	$placeHolderstempbsicit_view2["Indonesian"]["CIT_PROPOSAL"] = "";
	if (count($fieldToolTipstempbsicit_view2["Indonesian"]))
		$tdatatempbsicit_view2[".isUseToolTips"] = true;
}


	$tdatatempbsicit_view2[".NCSearch"] = true;

	$tdatatempbsicit_view2[".ChartRefreshTime"] = 0;


$tdatatempbsicit_view2[".shortTableName"] = "tempbsicit_view2";
$tdatatempbsicit_view2[".nSecOptions"] = 0;

$tdatatempbsicit_view2[".mainTableOwnerID"] = "";
$tdatatempbsicit_view2[".entityType"] = 3;
$tdatatempbsicit_view2[".connId"] = "u736239518_btn_at_154_41_241_2";


$tdatatempbsicit_view2[".strOriginalTableName"] = "TEMPBSICIT";

	



$tdatatempbsicit_view2[".showAddInPopup"] = false;

$tdatatempbsicit_view2[".showEditInPopup"] = false;

$tdatatempbsicit_view2[".showViewInPopup"] = false;

$tdatatempbsicit_view2[".listAjax"] = false;
//	temporary
//$tdatatempbsicit_view2[".listAjax"] = false;

	$tdatatempbsicit_view2[".audit"] = false;

	$tdatatempbsicit_view2[".locking"] = false;


$pages = $tdatatempbsicit_view2[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatempbsicit_view2[".edit"] = true;
	$tdatatempbsicit_view2[".afterEditAction"] = 1;
	$tdatatempbsicit_view2[".closePopupAfterEdit"] = 1;
	$tdatatempbsicit_view2[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatempbsicit_view2[".add"] = true;
$tdatatempbsicit_view2[".afterAddAction"] = 1;
$tdatatempbsicit_view2[".closePopupAfterAdd"] = 1;
$tdatatempbsicit_view2[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatempbsicit_view2[".list"] = true;
}



$tdatatempbsicit_view2[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatempbsicit_view2[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatempbsicit_view2[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatempbsicit_view2[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatempbsicit_view2[".printFriendly"] = true;
}



$tdatatempbsicit_view2[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatempbsicit_view2[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatempbsicit_view2[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatempbsicit_view2[".isUseAjaxSuggest"] = true;



																											

$tdatatempbsicit_view2[".ajaxCodeSnippetAdded"] = false;

$tdatatempbsicit_view2[".buttonsAdded"] = false;

$tdatatempbsicit_view2[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatempbsicit_view2[".isUseTimeForSearch"] = false;


$tdatatempbsicit_view2[".badgeColor"] = "4682B4";


$tdatatempbsicit_view2[".allSearchFields"] = array();
$tdatatempbsicit_view2[".filterFields"] = array();
$tdatatempbsicit_view2[".requiredSearchFields"] = array();

$tdatatempbsicit_view2[".googleLikeFields"] = array();
$tdatatempbsicit_view2[".googleLikeFields"][] = "CIT_PROPOSAL";
$tdatatempbsicit_view2[".googleLikeFields"][] = "SUMINSURED";
$tdatatempbsicit_view2[".googleLikeFields"][] = "PREMI";



$tdatatempbsicit_view2[".tableType"] = "chart";

$tdatatempbsicit_view2[".printerPageOrientation"] = 0;
$tdatatempbsicit_view2[".nPrinterPageScale"] = 100;

$tdatatempbsicit_view2[".nPrinterSplitRecords"] = 40;

$tdatatempbsicit_view2[".geocodingEnabled"] = false;



// chart settings
$tdatatempbsicit_view2[".chartType"] = "2DColumn";
// end of chart settings








$tstrOrderBy = "";
$tdatatempbsicit_view2[".strOrderBy"] = $tstrOrderBy;

$tdatatempbsicit_view2[".orderindexes"] = array();


$tdatatempbsicit_view2[".sqlHead"] = "SELECT TEMPBSICIT.CIT_PROPOSAL,  SUM(TEMPBSICIT.CIT_TSI) AS SUMINSURED,  SUM(TEMPBSICIT.CIT_PREMI) AS PREMI";
$tdatatempbsicit_view2[".sqlFrom"] = "FROM TEMPBSICIT  INNER JOIN getbsibranch ON TEMPBSICIT.CIT_IDCBG = getbsibranch.IDBRANCH";
$tdatatempbsicit_view2[".sqlWhereExpr"] = "(CIT_IDCBG = ':session.IdExt')";
$tdatatempbsicit_view2[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatempbsicit_view2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatempbsicit_view2[".arrGroupsPerPage"] = $arrGPP;

$tdatatempbsicit_view2[".highlightSearchResults"] = true;

$tableKeystempbsicit_view2 = array();
$tdatatempbsicit_view2[".Keys"] = $tableKeystempbsicit_view2;


$tdatatempbsicit_view2[".hideMobileList"] = array();




//	CIT_PROPOSAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CIT_PROPOSAL";
	$fdata["GoodName"] = "CIT_PROPOSAL";
	$fdata["ownerTable"] = "TEMPBSICIT";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIT_view2","CIT_PROPOSAL");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CIT_PROPOSAL";

		$fdata["sourceSingle"] = "CIT_PROPOSAL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TEMPBSICIT.CIT_PROPOSAL";

	
	
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
			$edata["EditParams"].= " maxlength=45";

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
		$fdata["filterTotalFields"] = "SUMINSURED";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatempbsicit_view2["CIT_PROPOSAL"] = $fdata;
		$tdatatempbsicit_view2[".searchableFields"][] = "CIT_PROPOSAL";
//	SUMINSURED
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SUMINSURED";
	$fdata["GoodName"] = "SUMINSURED";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIT_view2","SUMINSURED");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "SUMINSURED";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(TEMPBSICIT.CIT_TSI)";

	
	
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


	$tdatatempbsicit_view2["SUMINSURED"] = $fdata;
		$tdatatempbsicit_view2[".searchableFields"][] = "SUMINSURED";
//	PREMI
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "PREMI";
	$fdata["GoodName"] = "PREMI";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIT_view2","PREMI");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "PREMI";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(TEMPBSICIT.CIT_PREMI)";

	
	
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


	$tdatatempbsicit_view2["PREMI"] = $fdata;
		$tdatatempbsicit_view2[".searchableFields"][] = "PREMI";

$tdatatempbsicit_view2[".chartLabelField"] = "CIT_PROPOSAL";
$tdatatempbsicit_view2[".chartSeries"] = array();
$tdatatempbsicit_view2[".chartSeries"][] = array(
	"field" => "SUMINSURED",
	"total" => ""
);
$tdatatempbsicit_view2[".chartSeries"][] = array(
	"field" => "PREMI",
	"total" => ""
);
	$tdatatempbsicit_view2[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">TEMPBSICIT_view2</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdatatempbsicit_view2[".chartXml"] .= '<attr value="0">
			<attr value="name">SUMINSURED</attr>';
	$tdatatempbsicit_view2[".chartXml"] .= '</attr>';
	$tdatatempbsicit_view2[".chartXml"] .= '<attr value="1">
			<attr value="name">PREMI</attr>';
	$tdatatempbsicit_view2[".chartXml"] .= '</attr>';
	$tdatatempbsicit_view2[".chartXml"] .= '<attr value="2">
		<attr value="name">CIT_PROPOSAL</attr>
	</attr>';
	$tdatatempbsicit_view2[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatatempbsicit_view2[".chartXml"] .= '<attr value="head">'.xmlencode("").'</attr>
<attr value="foot">'.xmlencode("").'</attr>
<attr value="y_axis_label">'.xmlencode("").'</attr>


<attr value="slegend">true</attr>
<attr value="sgrid">true</attr>
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
$tdatatempbsicit_view2[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatatempbsicit_view2[".chartXml"] .= '<attr value="0">
		<attr value="name">CIT_PROPOSAL</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("TEMPBSICIT_view2","CIT_PROPOSAL")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatempbsicit_view2[".chartXml"] .= '<attr value="1">
		<attr value="name">SUMINSURED</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("TEMPBSICIT_view2","SUMINSURED")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatatempbsicit_view2[".chartXml"] .= '<attr value="2">
		<attr value="name">PREMI</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("TEMPBSICIT_view2","PREMI")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatatempbsicit_view2[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">TEMPBSICIT_view2</attr>
<attr value="short_table_name">tempbsicit_view2</attr>
</attr>

</chart>';

$tables_data["TEMPBSICIT_view2"]=&$tdatatempbsicit_view2;
$field_labels["TEMPBSICIT_view2"] = &$fieldLabelstempbsicit_view2;
$fieldToolTips["TEMPBSICIT_view2"] = &$fieldToolTipstempbsicit_view2;
$placeHolders["TEMPBSICIT_view2"] = &$placeHolderstempbsicit_view2;
$page_titles["TEMPBSICIT_view2"] = &$pageTitlestempbsicit_view2;


changeTextControlsToDate( "TEMPBSICIT_view2" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["TEMPBSICIT_view2"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["TEMPBSICIT_view2"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tempbsicit_view2()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TEMPBSICIT.CIT_PROPOSAL,  SUM(TEMPBSICIT.CIT_TSI) AS SUMINSURED,  SUM(TEMPBSICIT.CIT_PREMI) AS PREMI";
$proto0["m_strFrom"] = "FROM TEMPBSICIT  INNER JOIN getbsibranch ON TEMPBSICIT.CIT_IDCBG = getbsibranch.IDBRANCH";
$proto0["m_strWhere"] = "(CIT_IDCBG = ':session.IdExt')";
$proto0["m_strOrderBy"] = "";
	
																												;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "CIT_IDCBG = ':session.IdExt'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CIT_IDCBG",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "TEMPBSICIT_view2"
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
	"m_strName" => "CIT_PROPOSAL",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "TEMPBSICIT_view2"
));

$proto6["m_sql"] = "TEMPBSICIT.CIT_PROPOSAL";
$proto6["m_srcTableName"] = "TEMPBSICIT_view2";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$proto9=array();
$proto9["m_functiontype"] = "SQLF_SUM";
$proto9["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "CIT_TSI",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "TEMPBSICIT_view2"
));

$proto9["m_arguments"][]=$obj;
$proto9["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto9);

$proto8["m_sql"] = "SUM(TEMPBSICIT.CIT_TSI)";
$proto8["m_srcTableName"] = "TEMPBSICIT_view2";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "SUMINSURED";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$proto12=array();
$proto12["m_functiontype"] = "SQLF_SUM";
$proto12["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "CIT_PREMI",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "TEMPBSICIT_view2"
));

$proto12["m_arguments"][]=$obj;
$proto12["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto12);

$proto11["m_sql"] = "SUM(TEMPBSICIT.CIT_PREMI)";
$proto11["m_srcTableName"] = "TEMPBSICIT_view2";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "PREMI";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "TEMPBSICIT";
$proto15["m_srcTableName"] = "TEMPBSICIT_view2";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "IDCIT";
$proto15["m_columns"][] = "CIT_REGDATE";
$proto15["m_columns"][] = "CIT_IDCBG";
$proto15["m_columns"][] = "CIT_MTU";
$proto15["m_columns"][] = "CIT_TTG";
$proto15["m_columns"][] = "CIT_DATE_DEPART";
$proto15["m_columns"][] = "CIT_DATE_ARRIV";
$proto15["m_columns"][] = "CIT_EMP_NAMA";
$proto15["m_columns"][] = "CIT_SEC_NAMA";
$proto15["m_columns"][] = "CIT_VECH";
$proto15["m_columns"][] = "CIT_NUMBER";
$proto15["m_columns"][] = "CIT_ADD_USER";
$proto15["m_columns"][] = "CIT_ADD_DATE";
$proto15["m_columns"][] = "CIT_EDIT_USER";
$proto15["m_columns"][] = "CIT_EDIT_DATE";
$proto15["m_columns"][] = "CIT_TSI";
$proto15["m_columns"][] = "CIT_FL";
$proto15["m_columns"][] = "CIT_ASAL";
$proto15["m_columns"][] = "CIT_TUJUAN";
$proto15["m_columns"][] = "CIT_TOKEN";
$proto15["m_columns"][] = "CIT_BSMID";
$proto15["m_columns"][] = "CIT_PROPOSAL";
$proto15["m_columns"][] = "CIT_PREMI";
$proto15["m_columns"][] = "CIT_PERIODE_END";
$proto15["m_columns"][] = "CIT_APP_USER";
$proto15["m_columns"][] = "CIT_APP_DATE";
$proto15["m_columns"][] = "CIT_APP_NOTE";
$proto15["m_columns"][] = "CIT_APP_FL";
$proto15["m_columns"][] = "CIT_TO_USER";
$proto15["m_columns"][] = "CIT_TO_DATE";
$proto15["m_columns"][] = "CIT_RATE";
$proto15["m_columns"][] = "CIT_LIMIT";
$proto15["m_columns"][] = "IS_OL";
$proto15["m_columns"][] = "CIT_MODE";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "TEMPBSICIT";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "TEMPBSICIT_view2";
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
												$proto18=array();
$proto18["m_link"] = "SQLL_INNERJOIN";
			$proto19=array();
$proto19["m_strName"] = "getbsibranch";
$proto19["m_srcTableName"] = "TEMPBSICIT_view2";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "IDBRANCH";
$proto19["m_columns"][] = "BRANCHNAME";
$proto19["m_columns"][] = "TYP";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "INNER JOIN getbsibranch ON TEMPBSICIT.CIT_IDCBG = getbsibranch.IDBRANCH";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "TEMPBSICIT_view2";
$proto20=array();
$proto20["m_sql"] = "getbsibranch.IDBRANCH = TEMPBSICIT.CIT_IDCBG";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "IDBRANCH",
	"m_strTable" => "getbsibranch",
	"m_srcTableName" => "TEMPBSICIT_view2"
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "= TEMPBSICIT.CIT_IDCBG";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto22=array();
						$obj = new SQLField(array(
	"m_strName" => "CIT_PROPOSAL",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "TEMPBSICIT_view2"
));

$proto22["m_column"]=$obj;
$obj = new SQLGroupByItem($proto22);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="TEMPBSICIT_view2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tempbsicit_view2 = createSqlQuery_tempbsicit_view2();


	
																												;

			

$tdatatempbsicit_view2[".sqlquery"] = $queryData_tempbsicit_view2;



$tdatatempbsicit_view2[".hasEvents"] = false;

?>