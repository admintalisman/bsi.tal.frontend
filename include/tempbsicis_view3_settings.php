<?php
$tdatatempbsicis_view3 = array();
$tdatatempbsicis_view3[".searchableFields"] = array();
$tdatatempbsicis_view3[".ShortName"] = "tempbsicis_view3";
$tdatatempbsicis_view3[".OwnerID"] = "";
$tdatatempbsicis_view3[".OriginalTable"] = "TEMPBSICIS";


$tdatatempbsicis_view3[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatatempbsicis_view3[".originalPagesByType"] = $tdatatempbsicis_view3[".pagesByType"];
$tdatatempbsicis_view3[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatatempbsicis_view3[".originalPages"] = $tdatatempbsicis_view3[".pages"];
$tdatatempbsicis_view3[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatatempbsicis_view3[".originalDefaultPages"] = $tdatatempbsicis_view3[".defaultPages"];

//	field labels
$fieldLabelstempbsicis_view3 = array();
$fieldToolTipstempbsicis_view3 = array();
$pageTitlestempbsicis_view3 = array();
$placeHolderstempbsicis_view3 = array();

if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelstempbsicis_view3["Indonesian"] = array();
	$fieldToolTipstempbsicis_view3["Indonesian"] = array();
	$placeHolderstempbsicis_view3["Indonesian"] = array();
	$pageTitlestempbsicis_view3["Indonesian"] = array();
	$fieldLabelstempbsicis_view3["Indonesian"]["KODECABANG"] = "Cabang";
	$fieldToolTipstempbsicis_view3["Indonesian"]["KODECABANG"] = "";
	$placeHolderstempbsicis_view3["Indonesian"]["KODECABANG"] = "";
	$fieldLabelstempbsicis_view3["Indonesian"]["CIS_PROPOSAL"] = "No Proposal";
	$fieldToolTipstempbsicis_view3["Indonesian"]["CIS_PROPOSAL"] = "";
	$placeHolderstempbsicis_view3["Indonesian"]["CIS_PROPOSAL"] = "";
	$fieldLabelstempbsicis_view3["Indonesian"]["CIS_PREMI"] = "Nilai Premi";
	$fieldToolTipstempbsicis_view3["Indonesian"]["CIS_PREMI"] = "";
	$placeHolderstempbsicis_view3["Indonesian"]["CIS_PREMI"] = "";
	$fieldLabelstempbsicis_view3["Indonesian"]["CIS_PERIODE_END"] = "CIS PERIODE END";
	$fieldToolTipstempbsicis_view3["Indonesian"]["CIS_PERIODE_END"] = "";
	$placeHolderstempbsicis_view3["Indonesian"]["CIS_PERIODE_END"] = "";
	if (count($fieldToolTipstempbsicis_view3["Indonesian"]))
		$tdatatempbsicis_view3[".isUseToolTips"] = true;
}


	$tdatatempbsicis_view3[".NCSearch"] = true;



$tdatatempbsicis_view3[".shortTableName"] = "tempbsicis_view3";
$tdatatempbsicis_view3[".nSecOptions"] = 0;

$tdatatempbsicis_view3[".mainTableOwnerID"] = "";
$tdatatempbsicis_view3[".entityType"] = 1;
$tdatatempbsicis_view3[".connId"] = "u736239518_btn_at_154_41_241_2";


$tdatatempbsicis_view3[".strOriginalTableName"] = "TEMPBSICIS";

	



$tdatatempbsicis_view3[".showAddInPopup"] = false;

$tdatatempbsicis_view3[".showEditInPopup"] = false;

$tdatatempbsicis_view3[".showViewInPopup"] = false;

$tdatatempbsicis_view3[".listAjax"] = false;
//	temporary
//$tdatatempbsicis_view3[".listAjax"] = false;

	$tdatatempbsicis_view3[".audit"] = true;

	$tdatatempbsicis_view3[".locking"] = false;


$pages = $tdatatempbsicis_view3[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatempbsicis_view3[".edit"] = true;
	$tdatatempbsicis_view3[".afterEditAction"] = 1;
	$tdatatempbsicis_view3[".closePopupAfterEdit"] = 1;
	$tdatatempbsicis_view3[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatempbsicis_view3[".add"] = true;
$tdatatempbsicis_view3[".afterAddAction"] = 1;
$tdatatempbsicis_view3[".closePopupAfterAdd"] = 1;
$tdatatempbsicis_view3[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatempbsicis_view3[".list"] = true;
}



$tdatatempbsicis_view3[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatempbsicis_view3[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatempbsicis_view3[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatempbsicis_view3[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatempbsicis_view3[".printFriendly"] = true;
}



$tdatatempbsicis_view3[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatempbsicis_view3[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatempbsicis_view3[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatempbsicis_view3[".isUseAjaxSuggest"] = true;



																											

$tdatatempbsicis_view3[".ajaxCodeSnippetAdded"] = false;

$tdatatempbsicis_view3[".buttonsAdded"] = false;

$tdatatempbsicis_view3[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatempbsicis_view3[".isUseTimeForSearch"] = false;


$tdatatempbsicis_view3[".badgeColor"] = "B22222";


$tdatatempbsicis_view3[".allSearchFields"] = array();
$tdatatempbsicis_view3[".filterFields"] = array();
$tdatatempbsicis_view3[".requiredSearchFields"] = array();

$tdatatempbsicis_view3[".googleLikeFields"] = array();
$tdatatempbsicis_view3[".googleLikeFields"][] = "CIS_PROPOSAL";
$tdatatempbsicis_view3[".googleLikeFields"][] = "CIS_PREMI";
$tdatatempbsicis_view3[".googleLikeFields"][] = "CIS_PERIODE_END";
$tdatatempbsicis_view3[".googleLikeFields"][] = "KODECABANG";



$tdatatempbsicis_view3[".tableType"] = "list";

$tdatatempbsicis_view3[".printerPageOrientation"] = 0;
$tdatatempbsicis_view3[".nPrinterPageScale"] = 100;

$tdatatempbsicis_view3[".nPrinterSplitRecords"] = 40;

$tdatatempbsicis_view3[".geocodingEnabled"] = false;




$tdatatempbsicis_view3[".isDisplayLoading"] = true;






$tdatatempbsicis_view3[".pageSize"] = 20;

$tdatatempbsicis_view3[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatempbsicis_view3[".strOrderBy"] = $tstrOrderBy;

$tdatatempbsicis_view3[".orderindexes"] = array();


$tdatatempbsicis_view3[".sqlHead"] = "SELECT CIS_PROPOSAL,  CIS_PREMI,  CIS_PERIODE_END,  KODECABANG";
$tdatatempbsicis_view3[".sqlFrom"] = "FROM TEMPBSICIS";
$tdatatempbsicis_view3[".sqlWhereExpr"] = "(CIS_PROPOSAL is not null) AND (KODECABANG = ':session.IdExt')";
$tdatatempbsicis_view3[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatempbsicis_view3[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatempbsicis_view3[".arrGroupsPerPage"] = $arrGPP;

$tdatatempbsicis_view3[".highlightSearchResults"] = true;

$tableKeystempbsicis_view3 = array();
$tdatatempbsicis_view3[".Keys"] = $tableKeystempbsicis_view3;


$tdatatempbsicis_view3[".hideMobileList"] = array();




//	CIS_PROPOSAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CIS_PROPOSAL";
	$fdata["GoodName"] = "CIS_PROPOSAL";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIS_view3","CIS_PROPOSAL");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CIS_PROPOSAL";

		$fdata["sourceSingle"] = "CIS_PROPOSAL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CIS_PROPOSAL";

	
	
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
			$edata["EditParams"].= " maxlength=45";

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


	$tdatatempbsicis_view3["CIS_PROPOSAL"] = $fdata;
		$tdatatempbsicis_view3[".searchableFields"][] = "CIS_PROPOSAL";
//	CIS_PREMI
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CIS_PREMI";
	$fdata["GoodName"] = "CIS_PREMI";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIS_view3","CIS_PREMI");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "CIS_PREMI";

		$fdata["sourceSingle"] = "CIS_PREMI";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CIS_PREMI";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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


	$tdatatempbsicis_view3["CIS_PREMI"] = $fdata;
		$tdatatempbsicis_view3[".searchableFields"][] = "CIS_PREMI";
//	CIS_PERIODE_END
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CIS_PERIODE_END";
	$fdata["GoodName"] = "CIS_PERIODE_END";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIS_view3","CIS_PERIODE_END");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "CIS_PERIODE_END";

		$fdata["sourceSingle"] = "CIS_PERIODE_END";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CIS_PERIODE_END";

	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
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


	$tdatatempbsicis_view3["CIS_PERIODE_END"] = $fdata;
		$tdatatempbsicis_view3[".searchableFields"][] = "CIS_PERIODE_END";
//	KODECABANG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "KODECABANG";
	$fdata["GoodName"] = "KODECABANG";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIS_view3","KODECABANG");
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


	$tdatatempbsicis_view3["KODECABANG"] = $fdata;
		$tdatatempbsicis_view3[".searchableFields"][] = "KODECABANG";


$tables_data["TEMPBSICIS_view3"]=&$tdatatempbsicis_view3;
$field_labels["TEMPBSICIS_view3"] = &$fieldLabelstempbsicis_view3;
$fieldToolTips["TEMPBSICIS_view3"] = &$fieldToolTipstempbsicis_view3;
$placeHolders["TEMPBSICIS_view3"] = &$placeHolderstempbsicis_view3;
$page_titles["TEMPBSICIS_view3"] = &$pageTitlestempbsicis_view3;


changeTextControlsToDate( "TEMPBSICIS_view3" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["TEMPBSICIS_view3"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["TEMPBSICIS_view3"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tempbsicis_view3()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CIS_PROPOSAL,  CIS_PREMI,  CIS_PERIODE_END,  KODECABANG";
$proto0["m_strFrom"] = "FROM TEMPBSICIS";
$proto0["m_strWhere"] = "(CIS_PROPOSAL is not null) AND (KODECABANG = ':session.IdExt')";
$proto0["m_strOrderBy"] = "";
	
																												;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(CIS_PROPOSAL is not null) AND (KODECABANG = ':session.IdExt')";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(CIS_PROPOSAL is not null) AND (KODECABANG = ':session.IdExt')"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "CIS_PROPOSAL is not null";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CIS_PROPOSAL",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS_view3"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "is not null";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "KODECABANG = ':session.IdExt'";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "KODECABANG",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS_view3"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "= ':session.IdExt'";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = true;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto8=array();
$proto8["m_sql"] = "";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CIS_PROPOSAL",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS_view3"
));

$proto10["m_sql"] = "CIS_PROPOSAL";
$proto10["m_srcTableName"] = "TEMPBSICIS_view3";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "CIS_PREMI",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS_view3"
));

$proto12["m_sql"] = "CIS_PREMI";
$proto12["m_srcTableName"] = "TEMPBSICIS_view3";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "CIS_PERIODE_END",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS_view3"
));

$proto14["m_sql"] = "CIS_PERIODE_END";
$proto14["m_srcTableName"] = "TEMPBSICIS_view3";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "KODECABANG",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "TEMPBSICIS_view3"
));

$proto16["m_sql"] = "KODECABANG";
$proto16["m_srcTableName"] = "TEMPBSICIS_view3";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "TEMPBSICIS";
$proto19["m_srcTableName"] = "TEMPBSICIS_view3";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "IDCIS";
$proto19["m_columns"][] = "CIS_TOKEN";
$proto19["m_columns"][] = "CIS_REGION";
$proto19["m_columns"][] = "CIS_AREA";
$proto19["m_columns"][] = "KODECABANG";
$proto19["m_columns"][] = "DATE";
$proto19["m_columns"][] = "SUMINSURED";
$proto19["m_columns"][] = "CIS_UPL_USER";
$proto19["m_columns"][] = "CIS_UPL_DATE";
$proto19["m_columns"][] = "CIS_FL";
$proto19["m_columns"][] = "CIS_BSMID";
$proto19["m_columns"][] = "CIS_PROPOSAL";
$proto19["m_columns"][] = "CIS_PREMI";
$proto19["m_columns"][] = "CIS_PERIODE_END";
$proto19["m_columns"][] = "CIS_RATE";
$proto19["m_columns"][] = "CIS_LIMIT";
$proto19["m_columns"][] = "CIS_TIPE";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "TEMPBSICIS";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "TEMPBSICIS_view3";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="TEMPBSICIS_view3";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tempbsicis_view3 = createSqlQuery_tempbsicis_view3();


	
																												;

				

$tdatatempbsicis_view3[".sqlquery"] = $queryData_tempbsicis_view3;



$tdatatempbsicis_view3[".hasEvents"] = false;

?>