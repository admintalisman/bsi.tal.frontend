<?php
$tdatabsiapprv = array();
$tdatabsiapprv[".searchableFields"] = array();
$tdatabsiapprv[".ShortName"] = "bsiapprv";
$tdatabsiapprv[".OwnerID"] = "";
$tdatabsiapprv[".OriginalTable"] = "BSIAPPRV";


$tdatabsiapprv[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatabsiapprv[".originalPagesByType"] = $tdatabsiapprv[".pagesByType"];
$tdatabsiapprv[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatabsiapprv[".originalPages"] = $tdatabsiapprv[".pages"];
$tdatabsiapprv[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatabsiapprv[".originalDefaultPages"] = $tdatabsiapprv[".defaultPages"];

//	field labels
$fieldLabelsbsiapprv = array();
$fieldToolTipsbsiapprv = array();
$pageTitlesbsiapprv = array();
$placeHoldersbsiapprv = array();

if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelsbsiapprv["Indonesian"] = array();
	$fieldToolTipsbsiapprv["Indonesian"] = array();
	$placeHoldersbsiapprv["Indonesian"] = array();
	$pageTitlesbsiapprv["Indonesian"] = array();
	$fieldLabelsbsiapprv["Indonesian"]["IDBSIAPPRV"] = "IDBSIAPPRV";
	$fieldToolTipsbsiapprv["Indonesian"]["IDBSIAPPRV"] = "";
	$placeHoldersbsiapprv["Indonesian"]["IDBSIAPPRV"] = "";
	$fieldLabelsbsiapprv["Indonesian"]["BSIAPPRVFROM"] = "BSIAPPRVFROM";
	$fieldToolTipsbsiapprv["Indonesian"]["BSIAPPRVFROM"] = "";
	$placeHoldersbsiapprv["Indonesian"]["BSIAPPRVFROM"] = "";
	$fieldLabelsbsiapprv["Indonesian"]["BSIAPPRVTO"] = "BSIAPPRVTO";
	$fieldToolTipsbsiapprv["Indonesian"]["BSIAPPRVTO"] = "";
	$placeHoldersbsiapprv["Indonesian"]["BSIAPPRVTO"] = "";
	if (count($fieldToolTipsbsiapprv["Indonesian"]))
		$tdatabsiapprv[".isUseToolTips"] = true;
}


	$tdatabsiapprv[".NCSearch"] = true;



$tdatabsiapprv[".shortTableName"] = "bsiapprv";
$tdatabsiapprv[".nSecOptions"] = 0;

$tdatabsiapprv[".mainTableOwnerID"] = "";
$tdatabsiapprv[".entityType"] = 0;
$tdatabsiapprv[".connId"] = "u736239518_btn_at_154_41_241_2";


$tdatabsiapprv[".strOriginalTableName"] = "BSIAPPRV";

	



$tdatabsiapprv[".showAddInPopup"] = false;

$tdatabsiapprv[".showEditInPopup"] = false;

$tdatabsiapprv[".showViewInPopup"] = false;

$tdatabsiapprv[".listAjax"] = false;
//	temporary
//$tdatabsiapprv[".listAjax"] = false;

	$tdatabsiapprv[".audit"] = false;

	$tdatabsiapprv[".locking"] = false;


$pages = $tdatabsiapprv[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabsiapprv[".edit"] = true;
	$tdatabsiapprv[".afterEditAction"] = 1;
	$tdatabsiapprv[".closePopupAfterEdit"] = 1;
	$tdatabsiapprv[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabsiapprv[".add"] = true;
$tdatabsiapprv[".afterAddAction"] = 1;
$tdatabsiapprv[".closePopupAfterAdd"] = 1;
$tdatabsiapprv[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabsiapprv[".list"] = true;
}



$tdatabsiapprv[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabsiapprv[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabsiapprv[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabsiapprv[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabsiapprv[".printFriendly"] = true;
}



$tdatabsiapprv[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabsiapprv[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabsiapprv[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabsiapprv[".isUseAjaxSuggest"] = true;



																											

$tdatabsiapprv[".ajaxCodeSnippetAdded"] = false;

$tdatabsiapprv[".buttonsAdded"] = false;

$tdatabsiapprv[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabsiapprv[".isUseTimeForSearch"] = false;


$tdatabsiapprv[".badgeColor"] = "EDCA00";


$tdatabsiapprv[".allSearchFields"] = array();
$tdatabsiapprv[".filterFields"] = array();
$tdatabsiapprv[".requiredSearchFields"] = array();

$tdatabsiapprv[".googleLikeFields"] = array();
$tdatabsiapprv[".googleLikeFields"][] = "IDBSIAPPRV";
$tdatabsiapprv[".googleLikeFields"][] = "BSIAPPRVFROM";
$tdatabsiapprv[".googleLikeFields"][] = "BSIAPPRVTO";



$tdatabsiapprv[".tableType"] = "list";

$tdatabsiapprv[".printerPageOrientation"] = 0;
$tdatabsiapprv[".nPrinterPageScale"] = 100;

$tdatabsiapprv[".nPrinterSplitRecords"] = 40;

$tdatabsiapprv[".geocodingEnabled"] = false;










$tdatabsiapprv[".pageSize"] = 20;

$tdatabsiapprv[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatabsiapprv[".strOrderBy"] = $tstrOrderBy;

$tdatabsiapprv[".orderindexes"] = array();


$tdatabsiapprv[".sqlHead"] = "SELECT IDBSIAPPRV,  	BSIAPPRVFROM,  	BSIAPPRVTO";
$tdatabsiapprv[".sqlFrom"] = "FROM BSIAPPRV";
$tdatabsiapprv[".sqlWhereExpr"] = "";
$tdatabsiapprv[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabsiapprv[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabsiapprv[".arrGroupsPerPage"] = $arrGPP;

$tdatabsiapprv[".highlightSearchResults"] = true;

$tableKeysbsiapprv = array();
$tableKeysbsiapprv[] = "IDBSIAPPRV";
$tdatabsiapprv[".Keys"] = $tableKeysbsiapprv;


$tdatabsiapprv[".hideMobileList"] = array();




//	IDBSIAPPRV
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IDBSIAPPRV";
	$fdata["GoodName"] = "IDBSIAPPRV";
	$fdata["ownerTable"] = "BSIAPPRV";
	$fdata["Label"] = GetFieldLabel("BSIAPPRV","IDBSIAPPRV");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "IDBSIAPPRV";

		$fdata["sourceSingle"] = "IDBSIAPPRV";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IDBSIAPPRV";

	
	
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


	$tdatabsiapprv["IDBSIAPPRV"] = $fdata;
		$tdatabsiapprv[".searchableFields"][] = "IDBSIAPPRV";
//	BSIAPPRVFROM
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "BSIAPPRVFROM";
	$fdata["GoodName"] = "BSIAPPRVFROM";
	$fdata["ownerTable"] = "BSIAPPRV";
	$fdata["Label"] = GetFieldLabel("BSIAPPRV","BSIAPPRVFROM");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "BSIAPPRVFROM";

		$fdata["sourceSingle"] = "BSIAPPRVFROM";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BSIAPPRVFROM";

	
	
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
	$edata["LookupTable"] = "LOGIN";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "username";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "concat(username,' -  ',fullname)";

	

		$edata["CustomDisplay"] = "true";

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
								$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Value %value% already exists", "messageType" => "Text");

	
//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
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


	$tdatabsiapprv["BSIAPPRVFROM"] = $fdata;
		$tdatabsiapprv[".searchableFields"][] = "BSIAPPRVFROM";
//	BSIAPPRVTO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "BSIAPPRVTO";
	$fdata["GoodName"] = "BSIAPPRVTO";
	$fdata["ownerTable"] = "BSIAPPRV";
	$fdata["Label"] = GetFieldLabel("BSIAPPRV","BSIAPPRVTO");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "BSIAPPRVTO";

		$fdata["sourceSingle"] = "BSIAPPRVTO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BSIAPPRVTO";

	
	
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
	$edata["LookupTable"] = "LOGIN";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "username";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "concat(username,' -  ',fullname)";

	

		$edata["CustomDisplay"] = "true";

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


	$tdatabsiapprv["BSIAPPRVTO"] = $fdata;
		$tdatabsiapprv[".searchableFields"][] = "BSIAPPRVTO";


$tables_data["BSIAPPRV"]=&$tdatabsiapprv;
$field_labels["BSIAPPRV"] = &$fieldLabelsbsiapprv;
$fieldToolTips["BSIAPPRV"] = &$fieldToolTipsbsiapprv;
$placeHolders["BSIAPPRV"] = &$placeHoldersbsiapprv;
$page_titles["BSIAPPRV"] = &$pageTitlesbsiapprv;


changeTextControlsToDate( "BSIAPPRV" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["BSIAPPRV"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["BSIAPPRV"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_bsiapprv()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "IDBSIAPPRV,  	BSIAPPRVFROM,  	BSIAPPRVTO";
$proto0["m_strFrom"] = "FROM BSIAPPRV";
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
	"m_strName" => "IDBSIAPPRV",
	"m_strTable" => "BSIAPPRV",
	"m_srcTableName" => "BSIAPPRV"
));

$proto6["m_sql"] = "IDBSIAPPRV";
$proto6["m_srcTableName"] = "BSIAPPRV";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "BSIAPPRVFROM",
	"m_strTable" => "BSIAPPRV",
	"m_srcTableName" => "BSIAPPRV"
));

$proto8["m_sql"] = "BSIAPPRVFROM";
$proto8["m_srcTableName"] = "BSIAPPRV";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "BSIAPPRVTO",
	"m_strTable" => "BSIAPPRV",
	"m_srcTableName" => "BSIAPPRV"
));

$proto10["m_sql"] = "BSIAPPRVTO";
$proto10["m_srcTableName"] = "BSIAPPRV";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "BSIAPPRV";
$proto13["m_srcTableName"] = "BSIAPPRV";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "IDBSIAPPRV";
$proto13["m_columns"][] = "BSIAPPRVFROM";
$proto13["m_columns"][] = "BSIAPPRVTO";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "BSIAPPRV";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "BSIAPPRV";
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
$proto0["m_srcTableName"]="BSIAPPRV";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_bsiapprv = createSqlQuery_bsiapprv();


	
																												;

			

$tdatabsiapprv[".sqlquery"] = $queryData_bsiapprv;



$tdatabsiapprv[".hasEvents"] = false;

?>