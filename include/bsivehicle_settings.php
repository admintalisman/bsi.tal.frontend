<?php
$tdatabsivehicle = array();
$tdatabsivehicle[".searchableFields"] = array();
$tdatabsivehicle[".ShortName"] = "bsivehicle";
$tdatabsivehicle[".OwnerID"] = "";
$tdatabsivehicle[".OriginalTable"] = "BSIVEHICLE";


$tdatabsivehicle[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatabsivehicle[".originalPagesByType"] = $tdatabsivehicle[".pagesByType"];
$tdatabsivehicle[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatabsivehicle[".originalPages"] = $tdatabsivehicle[".pages"];
$tdatabsivehicle[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatabsivehicle[".originalDefaultPages"] = $tdatabsivehicle[".defaultPages"];

//	field labels
$fieldLabelsbsivehicle = array();
$fieldToolTipsbsivehicle = array();
$pageTitlesbsivehicle = array();
$placeHoldersbsivehicle = array();

if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelsbsivehicle["Indonesian"] = array();
	$fieldToolTipsbsivehicle["Indonesian"] = array();
	$placeHoldersbsivehicle["Indonesian"] = array();
	$pageTitlesbsivehicle["Indonesian"] = array();
	$fieldLabelsbsivehicle["Indonesian"]["IDBSIVEHICLE"] = "IDBSIVEHICLE";
	$fieldToolTipsbsivehicle["Indonesian"]["IDBSIVEHICLE"] = "";
	$placeHoldersbsivehicle["Indonesian"]["IDBSIVEHICLE"] = "";
	$fieldLabelsbsivehicle["Indonesian"]["BSIVEHICLEDESC"] = "BSIVEHICLEDESC";
	$fieldToolTipsbsivehicle["Indonesian"]["BSIVEHICLEDESC"] = "";
	$placeHoldersbsivehicle["Indonesian"]["BSIVEHICLEDESC"] = "";
	if (count($fieldToolTipsbsivehicle["Indonesian"]))
		$tdatabsivehicle[".isUseToolTips"] = true;
}


	$tdatabsivehicle[".NCSearch"] = true;



$tdatabsivehicle[".shortTableName"] = "bsivehicle";
$tdatabsivehicle[".nSecOptions"] = 0;

$tdatabsivehicle[".mainTableOwnerID"] = "";
$tdatabsivehicle[".entityType"] = 0;
$tdatabsivehicle[".connId"] = "u736239518_btn_at_154_41_241_2";


$tdatabsivehicle[".strOriginalTableName"] = "BSIVEHICLE";

	



$tdatabsivehicle[".showAddInPopup"] = false;

$tdatabsivehicle[".showEditInPopup"] = false;

$tdatabsivehicle[".showViewInPopup"] = false;

$tdatabsivehicle[".listAjax"] = false;
//	temporary
//$tdatabsivehicle[".listAjax"] = false;

	$tdatabsivehicle[".audit"] = false;

	$tdatabsivehicle[".locking"] = false;


$pages = $tdatabsivehicle[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabsivehicle[".edit"] = true;
	$tdatabsivehicle[".afterEditAction"] = 1;
	$tdatabsivehicle[".closePopupAfterEdit"] = 1;
	$tdatabsivehicle[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabsivehicle[".add"] = true;
$tdatabsivehicle[".afterAddAction"] = 1;
$tdatabsivehicle[".closePopupAfterAdd"] = 1;
$tdatabsivehicle[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabsivehicle[".list"] = true;
}



$tdatabsivehicle[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabsivehicle[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabsivehicle[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabsivehicle[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabsivehicle[".printFriendly"] = true;
}



$tdatabsivehicle[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabsivehicle[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabsivehicle[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabsivehicle[".isUseAjaxSuggest"] = true;



																											

$tdatabsivehicle[".ajaxCodeSnippetAdded"] = false;

$tdatabsivehicle[".buttonsAdded"] = false;

$tdatabsivehicle[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabsivehicle[".isUseTimeForSearch"] = false;


$tdatabsivehicle[".badgeColor"] = "EDCA00";


$tdatabsivehicle[".allSearchFields"] = array();
$tdatabsivehicle[".filterFields"] = array();
$tdatabsivehicle[".requiredSearchFields"] = array();

$tdatabsivehicle[".googleLikeFields"] = array();
$tdatabsivehicle[".googleLikeFields"][] = "IDBSIVEHICLE";
$tdatabsivehicle[".googleLikeFields"][] = "BSIVEHICLEDESC";



$tdatabsivehicle[".tableType"] = "list";

$tdatabsivehicle[".printerPageOrientation"] = 0;
$tdatabsivehicle[".nPrinterPageScale"] = 100;

$tdatabsivehicle[".nPrinterSplitRecords"] = 40;

$tdatabsivehicle[".geocodingEnabled"] = false;










$tdatabsivehicle[".pageSize"] = 20;

$tdatabsivehicle[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatabsivehicle[".strOrderBy"] = $tstrOrderBy;

$tdatabsivehicle[".orderindexes"] = array();


$tdatabsivehicle[".sqlHead"] = "SELECT IDBSIVEHICLE,  	BSIVEHICLEDESC";
$tdatabsivehicle[".sqlFrom"] = "FROM BSIVEHICLE";
$tdatabsivehicle[".sqlWhereExpr"] = "";
$tdatabsivehicle[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabsivehicle[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabsivehicle[".arrGroupsPerPage"] = $arrGPP;

$tdatabsivehicle[".highlightSearchResults"] = true;

$tableKeysbsivehicle = array();
$tableKeysbsivehicle[] = "IDBSIVEHICLE";
$tdatabsivehicle[".Keys"] = $tableKeysbsivehicle;


$tdatabsivehicle[".hideMobileList"] = array();




//	IDBSIVEHICLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IDBSIVEHICLE";
	$fdata["GoodName"] = "IDBSIVEHICLE";
	$fdata["ownerTable"] = "BSIVEHICLE";
	$fdata["Label"] = GetFieldLabel("BSIVEHICLE","IDBSIVEHICLE");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "IDBSIVEHICLE";

		$fdata["sourceSingle"] = "IDBSIVEHICLE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IDBSIVEHICLE";

	
	
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


	$tdatabsivehicle["IDBSIVEHICLE"] = $fdata;
		$tdatabsivehicle[".searchableFields"][] = "IDBSIVEHICLE";
//	BSIVEHICLEDESC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "BSIVEHICLEDESC";
	$fdata["GoodName"] = "BSIVEHICLEDESC";
	$fdata["ownerTable"] = "BSIVEHICLE";
	$fdata["Label"] = GetFieldLabel("BSIVEHICLE","BSIVEHICLEDESC");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "BSIVEHICLEDESC";

		$fdata["sourceSingle"] = "BSIVEHICLEDESC";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BSIVEHICLEDESC";

	
	
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


	$tdatabsivehicle["BSIVEHICLEDESC"] = $fdata;
		$tdatabsivehicle[".searchableFields"][] = "BSIVEHICLEDESC";


$tables_data["BSIVEHICLE"]=&$tdatabsivehicle;
$field_labels["BSIVEHICLE"] = &$fieldLabelsbsivehicle;
$fieldToolTips["BSIVEHICLE"] = &$fieldToolTipsbsivehicle;
$placeHolders["BSIVEHICLE"] = &$placeHoldersbsivehicle;
$page_titles["BSIVEHICLE"] = &$pageTitlesbsivehicle;


changeTextControlsToDate( "BSIVEHICLE" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["BSIVEHICLE"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["BSIVEHICLE"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_bsivehicle()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "IDBSIVEHICLE,  	BSIVEHICLEDESC";
$proto0["m_strFrom"] = "FROM BSIVEHICLE";
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
	"m_strName" => "IDBSIVEHICLE",
	"m_strTable" => "BSIVEHICLE",
	"m_srcTableName" => "BSIVEHICLE"
));

$proto6["m_sql"] = "IDBSIVEHICLE";
$proto6["m_srcTableName"] = "BSIVEHICLE";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "BSIVEHICLEDESC",
	"m_strTable" => "BSIVEHICLE",
	"m_srcTableName" => "BSIVEHICLE"
));

$proto8["m_sql"] = "BSIVEHICLEDESC";
$proto8["m_srcTableName"] = "BSIVEHICLE";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "BSIVEHICLE";
$proto11["m_srcTableName"] = "BSIVEHICLE";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "IDBSIVEHICLE";
$proto11["m_columns"][] = "BSIVEHICLEDESC";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "BSIVEHICLE";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "BSIVEHICLE";
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
$proto0["m_srcTableName"]="BSIVEHICLE";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_bsivehicle = createSqlQuery_bsivehicle();


	
																												;

		

$tdatabsivehicle[".sqlquery"] = $queryData_bsivehicle;



$tdatabsivehicle[".hasEvents"] = false;

?>