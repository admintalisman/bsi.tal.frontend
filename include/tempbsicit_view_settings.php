<?php
$tdatatempbsicit_view = array();
$tdatatempbsicit_view[".searchableFields"] = array();
$tdatatempbsicit_view[".ShortName"] = "tempbsicit_view";
$tdatatempbsicit_view[".OwnerID"] = "";
$tdatatempbsicit_view[".OriginalTable"] = "TEMPBSICIT";


$tdatatempbsicit_view[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatatempbsicit_view[".originalPagesByType"] = $tdatatempbsicit_view[".pagesByType"];
$tdatatempbsicit_view[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatatempbsicit_view[".originalPages"] = $tdatatempbsicit_view[".pages"];
$tdatatempbsicit_view[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatatempbsicit_view[".originalDefaultPages"] = $tdatatempbsicit_view[".defaultPages"];

//	field labels
$fieldLabelstempbsicit_view = array();
$fieldToolTipstempbsicit_view = array();
$pageTitlestempbsicit_view = array();
$placeHolderstempbsicit_view = array();

if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelstempbsicit_view["Indonesian"] = array();
	$fieldToolTipstempbsicit_view["Indonesian"] = array();
	$placeHolderstempbsicit_view["Indonesian"] = array();
	$pageTitlestempbsicit_view["Indonesian"] = array();
	$fieldLabelstempbsicit_view["Indonesian"]["CIT_IDCBG"] = "Cabang";
	$fieldToolTipstempbsicit_view["Indonesian"]["CIT_IDCBG"] = "";
	$placeHolderstempbsicit_view["Indonesian"]["CIT_IDCBG"] = "";
	$fieldLabelstempbsicit_view["Indonesian"]["CIT_TSI"] = "Uang Pertanggungan";
	$fieldToolTipstempbsicit_view["Indonesian"]["CIT_TSI"] = "";
	$placeHolderstempbsicit_view["Indonesian"]["CIT_TSI"] = "";
	$fieldLabelstempbsicit_view["Indonesian"]["Periode"] = "Periode";
	$fieldToolTipstempbsicit_view["Indonesian"]["Periode"] = "";
	$placeHolderstempbsicit_view["Indonesian"]["Periode"] = "";
	if (count($fieldToolTipstempbsicit_view["Indonesian"]))
		$tdatatempbsicit_view[".isUseToolTips"] = true;
}


	$tdatatempbsicit_view[".NCSearch"] = true;



$tdatatempbsicit_view[".shortTableName"] = "tempbsicit_view";
$tdatatempbsicit_view[".nSecOptions"] = 0;

$tdatatempbsicit_view[".recsLimit"] = 10;
$tdatatempbsicit_view[".mainTableOwnerID"] = "";
$tdatatempbsicit_view[".entityType"] = 1;
$tdatatempbsicit_view[".connId"] = "u736239518_btn_at_154_41_241_2";


$tdatatempbsicit_view[".strOriginalTableName"] = "TEMPBSICIT";

	



$tdatatempbsicit_view[".showAddInPopup"] = false;

$tdatatempbsicit_view[".showEditInPopup"] = false;

$tdatatempbsicit_view[".showViewInPopup"] = false;

$tdatatempbsicit_view[".listAjax"] = false;
//	temporary
//$tdatatempbsicit_view[".listAjax"] = false;

	$tdatatempbsicit_view[".audit"] = false;

	$tdatatempbsicit_view[".locking"] = false;


$pages = $tdatatempbsicit_view[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatempbsicit_view[".edit"] = true;
	$tdatatempbsicit_view[".afterEditAction"] = 1;
	$tdatatempbsicit_view[".closePopupAfterEdit"] = 1;
	$tdatatempbsicit_view[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatempbsicit_view[".add"] = true;
$tdatatempbsicit_view[".afterAddAction"] = 1;
$tdatatempbsicit_view[".closePopupAfterAdd"] = 1;
$tdatatempbsicit_view[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatempbsicit_view[".list"] = true;
}



$tdatatempbsicit_view[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatempbsicit_view[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatempbsicit_view[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatempbsicit_view[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatempbsicit_view[".printFriendly"] = true;
}



$tdatatempbsicit_view[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatempbsicit_view[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatempbsicit_view[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatempbsicit_view[".isUseAjaxSuggest"] = true;



																											

$tdatatempbsicit_view[".ajaxCodeSnippetAdded"] = false;

$tdatatempbsicit_view[".buttonsAdded"] = false;

$tdatatempbsicit_view[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatempbsicit_view[".isUseTimeForSearch"] = false;


$tdatatempbsicit_view[".badgeColor"] = "E07878";


$tdatatempbsicit_view[".allSearchFields"] = array();
$tdatatempbsicit_view[".filterFields"] = array();
$tdatatempbsicit_view[".requiredSearchFields"] = array();

$tdatatempbsicit_view[".googleLikeFields"] = array();
$tdatatempbsicit_view[".googleLikeFields"][] = "Periode";
$tdatatempbsicit_view[".googleLikeFields"][] = "CIT_IDCBG";
$tdatatempbsicit_view[".googleLikeFields"][] = "CIT_TSI";



$tdatatempbsicit_view[".tableType"] = "list";

$tdatatempbsicit_view[".printerPageOrientation"] = 0;
$tdatatempbsicit_view[".nPrinterPageScale"] = 100;

$tdatatempbsicit_view[".nPrinterSplitRecords"] = 40;

$tdatatempbsicit_view[".geocodingEnabled"] = false;










$tdatatempbsicit_view[".pageSize"] = 20;

$tdatatempbsicit_view[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY CIT_TSI desc";
$tdatatempbsicit_view[".strOrderBy"] = $tstrOrderBy;

$tdatatempbsicit_view[".orderindexes"] = array();
	$tdatatempbsicit_view[".orderindexes"][] = array(3, (0 ? "ASC" : "DESC"), "CIT_TSI");



$tdatatempbsicit_view[".sqlHead"] = "SELECT DATE_FORMAT(CIT_REGDATE, \"%M %Y\") as Periode,  CIT_IDCBG,  CIT_TSI";
$tdatatempbsicit_view[".sqlFrom"] = "FROM TEMPBSICIT";
$tdatatempbsicit_view[".sqlWhereExpr"] = "(CIT_IDCBG = ':session.IdExt')";
$tdatatempbsicit_view[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatempbsicit_view[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatempbsicit_view[".arrGroupsPerPage"] = $arrGPP;

$tdatatempbsicit_view[".highlightSearchResults"] = true;

$tableKeystempbsicit_view = array();
$tdatatempbsicit_view[".Keys"] = $tableKeystempbsicit_view;


$tdatatempbsicit_view[".hideMobileList"] = array();




//	Periode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Periode";
	$fdata["GoodName"] = "Periode";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIT_view","Periode");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Periode";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DATE_FORMAT(CIT_REGDATE, \"%M %Y\")";

	
	
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


	$tdatatempbsicit_view["Periode"] = $fdata;
		$tdatatempbsicit_view[".searchableFields"][] = "Periode";
//	CIT_IDCBG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CIT_IDCBG";
	$fdata["GoodName"] = "CIT_IDCBG";
	$fdata["ownerTable"] = "TEMPBSICIT";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIT_view","CIT_IDCBG");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CIT_IDCBG";

		$fdata["sourceSingle"] = "CIT_IDCBG";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CIT_IDCBG";

	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatatempbsicit_view["CIT_IDCBG"] = $fdata;
		$tdatatempbsicit_view[".searchableFields"][] = "CIT_IDCBG";
//	CIT_TSI
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CIT_TSI";
	$fdata["GoodName"] = "CIT_TSI";
	$fdata["ownerTable"] = "TEMPBSICIT";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIT_view","CIT_TSI");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "CIT_TSI";

		$fdata["sourceSingle"] = "CIT_TSI";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CIT_TSI";

	
	
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


	$tdatatempbsicit_view["CIT_TSI"] = $fdata;
		$tdatatempbsicit_view[".searchableFields"][] = "CIT_TSI";


$tables_data["TEMPBSICIT_view"]=&$tdatatempbsicit_view;
$field_labels["TEMPBSICIT_view"] = &$fieldLabelstempbsicit_view;
$fieldToolTips["TEMPBSICIT_view"] = &$fieldToolTipstempbsicit_view;
$placeHolders["TEMPBSICIT_view"] = &$placeHolderstempbsicit_view;
$page_titles["TEMPBSICIT_view"] = &$pageTitlestempbsicit_view;


changeTextControlsToDate( "TEMPBSICIT_view" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["TEMPBSICIT_view"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["TEMPBSICIT_view"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tempbsicit_view()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "DATE_FORMAT(CIT_REGDATE, \"%M %Y\") as Periode,  CIT_IDCBG,  CIT_TSI";
$proto0["m_strFrom"] = "FROM TEMPBSICIT";
$proto0["m_strWhere"] = "(CIT_IDCBG = ':session.IdExt')";
$proto0["m_strOrderBy"] = "ORDER BY CIT_TSI desc";
	
																												;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "CIT_IDCBG = ':session.IdExt'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CIT_IDCBG",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "TEMPBSICIT_view"
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
			$proto7=array();
$proto7["m_functiontype"] = "SQLF_CUSTOM";
$proto7["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "CIT_REGDATE"
));

$proto7["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "\"%M %Y\""
));

$proto7["m_arguments"][]=$obj;
$proto7["m_strFunctionName"] = "DATE_FORMAT";
$obj = new SQLFunctionCall($proto7);

$proto6["m_sql"] = "DATE_FORMAT(CIT_REGDATE, \"%M %Y\")";
$proto6["m_srcTableName"] = "TEMPBSICIT_view";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "Periode";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_IDCBG",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "TEMPBSICIT_view"
));

$proto10["m_sql"] = "CIT_IDCBG";
$proto10["m_srcTableName"] = "TEMPBSICIT_view";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_TSI",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "TEMPBSICIT_view"
));

$proto12["m_sql"] = "CIT_TSI";
$proto12["m_srcTableName"] = "TEMPBSICIT_view";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "TEMPBSICIT";
$proto15["m_srcTableName"] = "TEMPBSICIT_view";
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
$proto14["m_srcTableName"] = "TEMPBSICIT_view";
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
												$proto18=array();
						$obj = new SQLField(array(
	"m_strName" => "CIT_TSI",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "TEMPBSICIT_view"
));

$proto18["m_column"]=$obj;
$proto18["m_bAsc"] = 0;
$proto18["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto18);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="TEMPBSICIT_view";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tempbsicit_view = createSqlQuery_tempbsicit_view();


	
																												;

			

$tdatatempbsicit_view[".sqlquery"] = $queryData_tempbsicit_view;



$tdatatempbsicit_view[".hasEvents"] = false;

?>