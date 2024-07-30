<?php
$tdatagetbsibranch = array();
$tdatagetbsibranch[".searchableFields"] = array();
$tdatagetbsibranch[".ShortName"] = "getbsibranch";
$tdatagetbsibranch[".OwnerID"] = "";
$tdatagetbsibranch[".OriginalTable"] = "getbsibranch";


$tdatagetbsibranch[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"]}" );
$tdatagetbsibranch[".originalPagesByType"] = $tdatagetbsibranch[".pagesByType"];
$tdatagetbsibranch[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"]}" ) );
$tdatagetbsibranch[".originalPages"] = $tdatagetbsibranch[".pages"];
$tdatagetbsibranch[".defaultPages"] = my_json_decode( "{\"list\":\"list\"}" );
$tdatagetbsibranch[".originalDefaultPages"] = $tdatagetbsibranch[".defaultPages"];

//	field labels
$fieldLabelsgetbsibranch = array();
$fieldToolTipsgetbsibranch = array();
$pageTitlesgetbsibranch = array();
$placeHoldersgetbsibranch = array();

if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelsgetbsibranch["Indonesian"] = array();
	$fieldToolTipsgetbsibranch["Indonesian"] = array();
	$placeHoldersgetbsibranch["Indonesian"] = array();
	$pageTitlesgetbsibranch["Indonesian"] = array();
	$fieldLabelsgetbsibranch["Indonesian"]["IDBRANCH"] = "IDBRANCH";
	$fieldToolTipsgetbsibranch["Indonesian"]["IDBRANCH"] = "";
	$placeHoldersgetbsibranch["Indonesian"]["IDBRANCH"] = "";
	$fieldLabelsgetbsibranch["Indonesian"]["BRANCHNAME"] = "BRANCHNAME";
	$fieldToolTipsgetbsibranch["Indonesian"]["BRANCHNAME"] = "";
	$placeHoldersgetbsibranch["Indonesian"]["BRANCHNAME"] = "";
	$fieldLabelsgetbsibranch["Indonesian"]["TYP"] = "TYP";
	$fieldToolTipsgetbsibranch["Indonesian"]["TYP"] = "";
	$placeHoldersgetbsibranch["Indonesian"]["TYP"] = "";
	if (count($fieldToolTipsgetbsibranch["Indonesian"]))
		$tdatagetbsibranch[".isUseToolTips"] = true;
}


	$tdatagetbsibranch[".NCSearch"] = true;



$tdatagetbsibranch[".shortTableName"] = "getbsibranch";
$tdatagetbsibranch[".nSecOptions"] = 0;

$tdatagetbsibranch[".mainTableOwnerID"] = "";
$tdatagetbsibranch[".entityType"] = 0;
$tdatagetbsibranch[".connId"] = "u736239518_btn_at_154_41_241_2";


$tdatagetbsibranch[".strOriginalTableName"] = "getbsibranch";

	



$tdatagetbsibranch[".showAddInPopup"] = false;

$tdatagetbsibranch[".showEditInPopup"] = false;

$tdatagetbsibranch[".showViewInPopup"] = false;

$tdatagetbsibranch[".listAjax"] = false;
//	temporary
//$tdatagetbsibranch[".listAjax"] = false;

	$tdatagetbsibranch[".audit"] = false;

	$tdatagetbsibranch[".locking"] = false;


$pages = $tdatagetbsibranch[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatagetbsibranch[".edit"] = true;
	$tdatagetbsibranch[".afterEditAction"] = 1;
	$tdatagetbsibranch[".closePopupAfterEdit"] = 1;
	$tdatagetbsibranch[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatagetbsibranch[".add"] = true;
$tdatagetbsibranch[".afterAddAction"] = 1;
$tdatagetbsibranch[".closePopupAfterAdd"] = 1;
$tdatagetbsibranch[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatagetbsibranch[".list"] = true;
}



$tdatagetbsibranch[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatagetbsibranch[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatagetbsibranch[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatagetbsibranch[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatagetbsibranch[".printFriendly"] = true;
}



$tdatagetbsibranch[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatagetbsibranch[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatagetbsibranch[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatagetbsibranch[".isUseAjaxSuggest"] = true;



																											

$tdatagetbsibranch[".ajaxCodeSnippetAdded"] = false;

$tdatagetbsibranch[".buttonsAdded"] = false;

$tdatagetbsibranch[".addPageEvents"] = false;

// use timepicker for search panel
$tdatagetbsibranch[".isUseTimeForSearch"] = false;


$tdatagetbsibranch[".badgeColor"] = "DB7093";


$tdatagetbsibranch[".allSearchFields"] = array();
$tdatagetbsibranch[".filterFields"] = array();
$tdatagetbsibranch[".requiredSearchFields"] = array();

$tdatagetbsibranch[".googleLikeFields"] = array();
$tdatagetbsibranch[".googleLikeFields"][] = "IDBRANCH";
$tdatagetbsibranch[".googleLikeFields"][] = "BRANCHNAME";
$tdatagetbsibranch[".googleLikeFields"][] = "TYP";



$tdatagetbsibranch[".tableType"] = "list";

$tdatagetbsibranch[".printerPageOrientation"] = 0;
$tdatagetbsibranch[".nPrinterPageScale"] = 100;

$tdatagetbsibranch[".nPrinterSplitRecords"] = 40;

$tdatagetbsibranch[".geocodingEnabled"] = false;










$tdatagetbsibranch[".pageSize"] = 20;

$tdatagetbsibranch[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatagetbsibranch[".strOrderBy"] = $tstrOrderBy;

$tdatagetbsibranch[".orderindexes"] = array();


$tdatagetbsibranch[".sqlHead"] = "SELECT IDBRANCH,  	BRANCHNAME,  	TYP";
$tdatagetbsibranch[".sqlFrom"] = "FROM getbsibranch";
$tdatagetbsibranch[".sqlWhereExpr"] = "";
$tdatagetbsibranch[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagetbsibranch[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagetbsibranch[".arrGroupsPerPage"] = $arrGPP;

$tdatagetbsibranch[".highlightSearchResults"] = true;

$tableKeysgetbsibranch = array();
$tdatagetbsibranch[".Keys"] = $tableKeysgetbsibranch;


$tdatagetbsibranch[".hideMobileList"] = array();




//	IDBRANCH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IDBRANCH";
	$fdata["GoodName"] = "IDBRANCH";
	$fdata["ownerTable"] = "getbsibranch";
	$fdata["Label"] = GetFieldLabel("getbsibranch","IDBRANCH");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "IDBRANCH";

		$fdata["sourceSingle"] = "IDBRANCH";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IDBRANCH";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatagetbsibranch["IDBRANCH"] = $fdata;
		$tdatagetbsibranch[".searchableFields"][] = "IDBRANCH";
//	BRANCHNAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "BRANCHNAME";
	$fdata["GoodName"] = "BRANCHNAME";
	$fdata["ownerTable"] = "getbsibranch";
	$fdata["Label"] = GetFieldLabel("getbsibranch","BRANCHNAME");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "BRANCHNAME";

		$fdata["sourceSingle"] = "BRANCHNAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BRANCHNAME";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatagetbsibranch["BRANCHNAME"] = $fdata;
		$tdatagetbsibranch[".searchableFields"][] = "BRANCHNAME";
//	TYP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TYP";
	$fdata["GoodName"] = "TYP";
	$fdata["ownerTable"] = "getbsibranch";
	$fdata["Label"] = GetFieldLabel("getbsibranch","TYP");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "TYP";

		$fdata["sourceSingle"] = "TYP";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TYP";

	
	
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
			$edata["EditParams"].= " maxlength=3";

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


	$tdatagetbsibranch["TYP"] = $fdata;
		$tdatagetbsibranch[".searchableFields"][] = "TYP";


$tables_data["getbsibranch"]=&$tdatagetbsibranch;
$field_labels["getbsibranch"] = &$fieldLabelsgetbsibranch;
$fieldToolTips["getbsibranch"] = &$fieldToolTipsgetbsibranch;
$placeHolders["getbsibranch"] = &$placeHoldersgetbsibranch;
$page_titles["getbsibranch"] = &$pageTitlesgetbsibranch;


changeTextControlsToDate( "getbsibranch" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["getbsibranch"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["getbsibranch"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_getbsibranch()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "IDBRANCH,  	BRANCHNAME,  	TYP";
$proto0["m_strFrom"] = "FROM getbsibranch";
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
	"m_strName" => "IDBRANCH",
	"m_strTable" => "getbsibranch",
	"m_srcTableName" => "getbsibranch"
));

$proto6["m_sql"] = "IDBRANCH";
$proto6["m_srcTableName"] = "getbsibranch";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "BRANCHNAME",
	"m_strTable" => "getbsibranch",
	"m_srcTableName" => "getbsibranch"
));

$proto8["m_sql"] = "BRANCHNAME";
$proto8["m_srcTableName"] = "getbsibranch";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TYP",
	"m_strTable" => "getbsibranch",
	"m_srcTableName" => "getbsibranch"
));

$proto10["m_sql"] = "TYP";
$proto10["m_srcTableName"] = "getbsibranch";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "getbsibranch";
$proto13["m_srcTableName"] = "getbsibranch";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "IDBRANCH";
$proto13["m_columns"][] = "BRANCHNAME";
$proto13["m_columns"][] = "TYP";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "getbsibranch";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "getbsibranch";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="getbsibranch";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_getbsibranch = createSqlQuery_getbsibranch();


	
																												;

			

$tdatagetbsibranch[".sqlquery"] = $queryData_getbsibranch;



$tdatagetbsibranch[".hasEvents"] = false;

?>