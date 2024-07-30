<?php
$tdatatempbsicit_resume = array();
$tdatatempbsicit_resume[".searchableFields"] = array();
$tdatatempbsicit_resume[".ShortName"] = "tempbsicit_resume";
$tdatatempbsicit_resume[".OwnerID"] = "";
$tdatatempbsicit_resume[".OriginalTable"] = "TEMPBSICIT_RESUME";


$tdatatempbsicit_resume[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatempbsicit_resume[".originalPagesByType"] = $tdatatempbsicit_resume[".pagesByType"];
$tdatatempbsicit_resume[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatempbsicit_resume[".originalPages"] = $tdatatempbsicit_resume[".pages"];
$tdatatempbsicit_resume[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatempbsicit_resume[".originalDefaultPages"] = $tdatatempbsicit_resume[".defaultPages"];

//	field labels
$fieldLabelstempbsicit_resume = array();
$fieldToolTipstempbsicit_resume = array();
$pageTitlestempbsicit_resume = array();
$placeHolderstempbsicit_resume = array();

if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelstempbsicit_resume["Indonesian"] = array();
	$fieldToolTipstempbsicit_resume["Indonesian"] = array();
	$placeHolderstempbsicit_resume["Indonesian"] = array();
	$pageTitlestempbsicit_resume["Indonesian"] = array();
	$fieldLabelstempbsicit_resume["Indonesian"]["IDCIT_RESUME"] = "IDCIT RESUME";
	$fieldToolTipstempbsicit_resume["Indonesian"]["IDCIT_RESUME"] = "";
	$placeHolderstempbsicit_resume["Indonesian"]["IDCIT_RESUME"] = "";
	$fieldLabelstempbsicit_resume["Indonesian"]["IDCIT"] = "IDCIT";
	$fieldToolTipstempbsicit_resume["Indonesian"]["IDCIT"] = "";
	$placeHolderstempbsicit_resume["Indonesian"]["IDCIT"] = "";
	$fieldLabelstempbsicit_resume["Indonesian"]["STATUS"] = "STATUS";
	$fieldToolTipstempbsicit_resume["Indonesian"]["STATUS"] = "";
	$placeHolderstempbsicit_resume["Indonesian"]["STATUS"] = "";
	$fieldLabelstempbsicit_resume["Indonesian"]["ERROR_DESC"] = "ERROR DESC";
	$fieldToolTipstempbsicit_resume["Indonesian"]["ERROR_DESC"] = "";
	$placeHolderstempbsicit_resume["Indonesian"]["ERROR_DESC"] = "";
	if (count($fieldToolTipstempbsicit_resume["Indonesian"]))
		$tdatatempbsicit_resume[".isUseToolTips"] = true;
}


	$tdatatempbsicit_resume[".NCSearch"] = true;



$tdatatempbsicit_resume[".shortTableName"] = "tempbsicit_resume";
$tdatatempbsicit_resume[".nSecOptions"] = 0;

$tdatatempbsicit_resume[".mainTableOwnerID"] = "";
$tdatatempbsicit_resume[".entityType"] = 0;
$tdatatempbsicit_resume[".connId"] = "u736239518_btn_at_154_41_241_2";


$tdatatempbsicit_resume[".strOriginalTableName"] = "TEMPBSICIT_RESUME";

	



$tdatatempbsicit_resume[".showAddInPopup"] = false;

$tdatatempbsicit_resume[".showEditInPopup"] = false;

$tdatatempbsicit_resume[".showViewInPopup"] = false;

$tdatatempbsicit_resume[".listAjax"] = false;
//	temporary
//$tdatatempbsicit_resume[".listAjax"] = false;

	$tdatatempbsicit_resume[".audit"] = false;

	$tdatatempbsicit_resume[".locking"] = false;


$pages = $tdatatempbsicit_resume[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatempbsicit_resume[".edit"] = true;
	$tdatatempbsicit_resume[".afterEditAction"] = 1;
	$tdatatempbsicit_resume[".closePopupAfterEdit"] = 1;
	$tdatatempbsicit_resume[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatempbsicit_resume[".add"] = true;
$tdatatempbsicit_resume[".afterAddAction"] = 1;
$tdatatempbsicit_resume[".closePopupAfterAdd"] = 1;
$tdatatempbsicit_resume[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatempbsicit_resume[".list"] = true;
}



$tdatatempbsicit_resume[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatempbsicit_resume[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatempbsicit_resume[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatempbsicit_resume[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatempbsicit_resume[".printFriendly"] = true;
}



$tdatatempbsicit_resume[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatempbsicit_resume[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatempbsicit_resume[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatempbsicit_resume[".isUseAjaxSuggest"] = true;



																											

$tdatatempbsicit_resume[".ajaxCodeSnippetAdded"] = false;

$tdatatempbsicit_resume[".buttonsAdded"] = false;

$tdatatempbsicit_resume[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatempbsicit_resume[".isUseTimeForSearch"] = false;


$tdatatempbsicit_resume[".badgeColor"] = "E67349";


$tdatatempbsicit_resume[".allSearchFields"] = array();
$tdatatempbsicit_resume[".filterFields"] = array();
$tdatatempbsicit_resume[".requiredSearchFields"] = array();

$tdatatempbsicit_resume[".googleLikeFields"] = array();
$tdatatempbsicit_resume[".googleLikeFields"][] = "IDCIT_RESUME";
$tdatatempbsicit_resume[".googleLikeFields"][] = "IDCIT";
$tdatatempbsicit_resume[".googleLikeFields"][] = "STATUS";
$tdatatempbsicit_resume[".googleLikeFields"][] = "ERROR_DESC";



$tdatatempbsicit_resume[".tableType"] = "list";

$tdatatempbsicit_resume[".printerPageOrientation"] = 0;
$tdatatempbsicit_resume[".nPrinterPageScale"] = 100;

$tdatatempbsicit_resume[".nPrinterSplitRecords"] = 40;

$tdatatempbsicit_resume[".geocodingEnabled"] = false;










$tdatatempbsicit_resume[".pageSize"] = 20;

$tdatatempbsicit_resume[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatempbsicit_resume[".strOrderBy"] = $tstrOrderBy;

$tdatatempbsicit_resume[".orderindexes"] = array();


$tdatatempbsicit_resume[".sqlHead"] = "SELECT IDCIT_RESUME,  	IDCIT,  	STATUS,  	ERROR_DESC";
$tdatatempbsicit_resume[".sqlFrom"] = "FROM TEMPBSICIT_RESUME";
$tdatatempbsicit_resume[".sqlWhereExpr"] = "";
$tdatatempbsicit_resume[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatempbsicit_resume[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatempbsicit_resume[".arrGroupsPerPage"] = $arrGPP;

$tdatatempbsicit_resume[".highlightSearchResults"] = true;

$tableKeystempbsicit_resume = array();
$tableKeystempbsicit_resume[] = "IDCIT_RESUME";
$tdatatempbsicit_resume[".Keys"] = $tableKeystempbsicit_resume;


$tdatatempbsicit_resume[".hideMobileList"] = array();




//	IDCIT_RESUME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IDCIT_RESUME";
	$fdata["GoodName"] = "IDCIT_RESUME";
	$fdata["ownerTable"] = "TEMPBSICIT_RESUME";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIT_RESUME","IDCIT_RESUME");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "IDCIT_RESUME";

		$fdata["sourceSingle"] = "IDCIT_RESUME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IDCIT_RESUME";

	
	
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


	$tdatatempbsicit_resume["IDCIT_RESUME"] = $fdata;
		$tdatatempbsicit_resume[".searchableFields"][] = "IDCIT_RESUME";
//	IDCIT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "IDCIT";
	$fdata["GoodName"] = "IDCIT";
	$fdata["ownerTable"] = "TEMPBSICIT_RESUME";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIT_RESUME","IDCIT");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "IDCIT";

		$fdata["sourceSingle"] = "IDCIT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IDCIT";

	
	
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


	$tdatatempbsicit_resume["IDCIT"] = $fdata;
		$tdatatempbsicit_resume[".searchableFields"][] = "IDCIT";
//	STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "STATUS";
	$fdata["GoodName"] = "STATUS";
	$fdata["ownerTable"] = "TEMPBSICIT_RESUME";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIT_RESUME","STATUS");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "STATUS";

		$fdata["sourceSingle"] = "STATUS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "STATUS";

	
	
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


	$tdatatempbsicit_resume["STATUS"] = $fdata;
		$tdatatempbsicit_resume[".searchableFields"][] = "STATUS";
//	ERROR_DESC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ERROR_DESC";
	$fdata["GoodName"] = "ERROR_DESC";
	$fdata["ownerTable"] = "TEMPBSICIT_RESUME";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIT_RESUME","ERROR_DESC");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ERROR_DESC";

		$fdata["sourceSingle"] = "ERROR_DESC";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ERROR_DESC";

	
	
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
			$edata["EditParams"].= " maxlength=500";

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


	$tdatatempbsicit_resume["ERROR_DESC"] = $fdata;
		$tdatatempbsicit_resume[".searchableFields"][] = "ERROR_DESC";


$tables_data["TEMPBSICIT_RESUME"]=&$tdatatempbsicit_resume;
$field_labels["TEMPBSICIT_RESUME"] = &$fieldLabelstempbsicit_resume;
$fieldToolTips["TEMPBSICIT_RESUME"] = &$fieldToolTipstempbsicit_resume;
$placeHolders["TEMPBSICIT_RESUME"] = &$placeHolderstempbsicit_resume;
$page_titles["TEMPBSICIT_RESUME"] = &$pageTitlestempbsicit_resume;


changeTextControlsToDate( "TEMPBSICIT_RESUME" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["TEMPBSICIT_RESUME"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["TEMPBSICIT_RESUME"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tempbsicit_resume()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "IDCIT_RESUME,  	IDCIT,  	STATUS,  	ERROR_DESC";
$proto0["m_strFrom"] = "FROM TEMPBSICIT_RESUME";
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
	"m_strName" => "IDCIT_RESUME",
	"m_strTable" => "TEMPBSICIT_RESUME",
	"m_srcTableName" => "TEMPBSICIT_RESUME"
));

$proto6["m_sql"] = "IDCIT_RESUME";
$proto6["m_srcTableName"] = "TEMPBSICIT_RESUME";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "IDCIT",
	"m_strTable" => "TEMPBSICIT_RESUME",
	"m_srcTableName" => "TEMPBSICIT_RESUME"
));

$proto8["m_sql"] = "IDCIT";
$proto8["m_srcTableName"] = "TEMPBSICIT_RESUME";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "STATUS",
	"m_strTable" => "TEMPBSICIT_RESUME",
	"m_srcTableName" => "TEMPBSICIT_RESUME"
));

$proto10["m_sql"] = "STATUS";
$proto10["m_srcTableName"] = "TEMPBSICIT_RESUME";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ERROR_DESC",
	"m_strTable" => "TEMPBSICIT_RESUME",
	"m_srcTableName" => "TEMPBSICIT_RESUME"
));

$proto12["m_sql"] = "ERROR_DESC";
$proto12["m_srcTableName"] = "TEMPBSICIT_RESUME";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "TEMPBSICIT_RESUME";
$proto15["m_srcTableName"] = "TEMPBSICIT_RESUME";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "IDCIT_RESUME";
$proto15["m_columns"][] = "IDCIT";
$proto15["m_columns"][] = "STATUS";
$proto15["m_columns"][] = "ERROR_DESC";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "TEMPBSICIT_RESUME";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "TEMPBSICIT_RESUME";
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
$proto0["m_srcTableName"]="TEMPBSICIT_RESUME";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tempbsicit_resume = createSqlQuery_tempbsicit_resume();


	
																												;

				

$tdatatempbsicit_resume[".sqlquery"] = $queryData_tempbsicit_resume;



$tdatatempbsicit_resume[".hasEvents"] = false;

?>