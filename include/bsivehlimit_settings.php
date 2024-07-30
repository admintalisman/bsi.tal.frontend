<?php
$tdatabsivehlimit = array();
$tdatabsivehlimit[".searchableFields"] = array();
$tdatabsivehlimit[".ShortName"] = "bsivehlimit";
$tdatabsivehlimit[".OwnerID"] = "";
$tdatabsivehlimit[".OriginalTable"] = "BSIVEHLIMIT";


$tdatabsivehlimit[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatabsivehlimit[".originalPagesByType"] = $tdatabsivehlimit[".pagesByType"];
$tdatabsivehlimit[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatabsivehlimit[".originalPages"] = $tdatabsivehlimit[".pages"];
$tdatabsivehlimit[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatabsivehlimit[".originalDefaultPages"] = $tdatabsivehlimit[".defaultPages"];

//	field labels
$fieldLabelsbsivehlimit = array();
$fieldToolTipsbsivehlimit = array();
$pageTitlesbsivehlimit = array();
$placeHoldersbsivehlimit = array();

if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelsbsivehlimit["Indonesian"] = array();
	$fieldToolTipsbsivehlimit["Indonesian"] = array();
	$placeHoldersbsivehlimit["Indonesian"] = array();
	$pageTitlesbsivehlimit["Indonesian"] = array();
	$fieldLabelsbsivehlimit["Indonesian"]["IDBSIVEHLIMIT"] = "IDBSIVEHLIMIT";
	$fieldToolTipsbsivehlimit["Indonesian"]["IDBSIVEHLIMIT"] = "";
	$placeHoldersbsivehlimit["Indonesian"]["IDBSIVEHLIMIT"] = "";
	$fieldLabelsbsivehlimit["Indonesian"]["IDVEHICLE"] = "KENDARAAN";
	$fieldToolTipsbsivehlimit["Indonesian"]["IDVEHICLE"] = "";
	$placeHoldersbsivehlimit["Indonesian"]["IDVEHICLE"] = "";
	$fieldLabelsbsivehlimit["Indonesian"]["IDRATE"] = "RATE";
	$fieldToolTipsbsivehlimit["Indonesian"]["IDRATE"] = "";
	$placeHoldersbsivehlimit["Indonesian"]["IDRATE"] = "";
	$fieldLabelsbsivehlimit["Indonesian"]["MODE"] = "MODE";
	$fieldToolTipsbsivehlimit["Indonesian"]["MODE"] = "";
	$placeHoldersbsivehlimit["Indonesian"]["MODE"] = "";
	if (count($fieldToolTipsbsivehlimit["Indonesian"]))
		$tdatabsivehlimit[".isUseToolTips"] = true;
}


	$tdatabsivehlimit[".NCSearch"] = true;



$tdatabsivehlimit[".shortTableName"] = "bsivehlimit";
$tdatabsivehlimit[".nSecOptions"] = 0;

$tdatabsivehlimit[".mainTableOwnerID"] = "";
$tdatabsivehlimit[".entityType"] = 0;
$tdatabsivehlimit[".connId"] = "u736239518_btn_at_154_41_241_2";


$tdatabsivehlimit[".strOriginalTableName"] = "BSIVEHLIMIT";

	



$tdatabsivehlimit[".showAddInPopup"] = false;

$tdatabsivehlimit[".showEditInPopup"] = false;

$tdatabsivehlimit[".showViewInPopup"] = false;

$tdatabsivehlimit[".listAjax"] = false;
//	temporary
//$tdatabsivehlimit[".listAjax"] = false;

	$tdatabsivehlimit[".audit"] = false;

	$tdatabsivehlimit[".locking"] = false;


$pages = $tdatabsivehlimit[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabsivehlimit[".edit"] = true;
	$tdatabsivehlimit[".afterEditAction"] = 1;
	$tdatabsivehlimit[".closePopupAfterEdit"] = 1;
	$tdatabsivehlimit[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabsivehlimit[".add"] = true;
$tdatabsivehlimit[".afterAddAction"] = 1;
$tdatabsivehlimit[".closePopupAfterAdd"] = 1;
$tdatabsivehlimit[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabsivehlimit[".list"] = true;
}



$tdatabsivehlimit[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabsivehlimit[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabsivehlimit[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabsivehlimit[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabsivehlimit[".printFriendly"] = true;
}



$tdatabsivehlimit[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabsivehlimit[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabsivehlimit[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabsivehlimit[".isUseAjaxSuggest"] = true;



																											

$tdatabsivehlimit[".ajaxCodeSnippetAdded"] = false;

$tdatabsivehlimit[".buttonsAdded"] = false;

$tdatabsivehlimit[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabsivehlimit[".isUseTimeForSearch"] = false;


$tdatabsivehlimit[".badgeColor"] = "E07878";


$tdatabsivehlimit[".allSearchFields"] = array();
$tdatabsivehlimit[".filterFields"] = array();
$tdatabsivehlimit[".requiredSearchFields"] = array();

$tdatabsivehlimit[".googleLikeFields"] = array();
$tdatabsivehlimit[".googleLikeFields"][] = "IDBSIVEHLIMIT";
$tdatabsivehlimit[".googleLikeFields"][] = "IDVEHICLE";
$tdatabsivehlimit[".googleLikeFields"][] = "IDRATE";
$tdatabsivehlimit[".googleLikeFields"][] = "MODE";



$tdatabsivehlimit[".tableType"] = "list";

$tdatabsivehlimit[".printerPageOrientation"] = 0;
$tdatabsivehlimit[".nPrinterPageScale"] = 100;

$tdatabsivehlimit[".nPrinterSplitRecords"] = 40;

$tdatabsivehlimit[".geocodingEnabled"] = false;










$tdatabsivehlimit[".pageSize"] = 20;

$tdatabsivehlimit[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatabsivehlimit[".strOrderBy"] = $tstrOrderBy;

$tdatabsivehlimit[".orderindexes"] = array();


$tdatabsivehlimit[".sqlHead"] = "SELECT IDBSIVEHLIMIT,  	IDVEHICLE,  	IDRATE,  	`MODE`";
$tdatabsivehlimit[".sqlFrom"] = "FROM BSIVEHLIMIT";
$tdatabsivehlimit[".sqlWhereExpr"] = "";
$tdatabsivehlimit[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabsivehlimit[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabsivehlimit[".arrGroupsPerPage"] = $arrGPP;

$tdatabsivehlimit[".highlightSearchResults"] = true;

$tableKeysbsivehlimit = array();
$tableKeysbsivehlimit[] = "IDBSIVEHLIMIT";
$tdatabsivehlimit[".Keys"] = $tableKeysbsivehlimit;


$tdatabsivehlimit[".hideMobileList"] = array();




//	IDBSIVEHLIMIT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IDBSIVEHLIMIT";
	$fdata["GoodName"] = "IDBSIVEHLIMIT";
	$fdata["ownerTable"] = "BSIVEHLIMIT";
	$fdata["Label"] = GetFieldLabel("BSIVEHLIMIT","IDBSIVEHLIMIT");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "IDBSIVEHLIMIT";

		$fdata["sourceSingle"] = "IDBSIVEHLIMIT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IDBSIVEHLIMIT";

	
	
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


	$tdatabsivehlimit["IDBSIVEHLIMIT"] = $fdata;
		$tdatabsivehlimit[".searchableFields"][] = "IDBSIVEHLIMIT";
//	IDVEHICLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "IDVEHICLE";
	$fdata["GoodName"] = "IDVEHICLE";
	$fdata["ownerTable"] = "BSIVEHLIMIT";
	$fdata["Label"] = GetFieldLabel("BSIVEHLIMIT","IDVEHICLE");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "IDVEHICLE";

		$fdata["sourceSingle"] = "IDVEHICLE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IDVEHICLE";

	
	
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
	$edata["LookupTable"] = "BSIVEHICLE";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "IDBSIVEHICLE";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "BSIVEHICLEDESC";

	

	
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


	$tdatabsivehlimit["IDVEHICLE"] = $fdata;
		$tdatabsivehlimit[".searchableFields"][] = "IDVEHICLE";
//	IDRATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "IDRATE";
	$fdata["GoodName"] = "IDRATE";
	$fdata["ownerTable"] = "BSIVEHLIMIT";
	$fdata["Label"] = GetFieldLabel("BSIVEHLIMIT","IDRATE");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "IDRATE";

		$fdata["sourceSingle"] = "IDRATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IDRATE";

	
	
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
	$edata["LookupTable"] = "M_RESIKO";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "resiko_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "concat(resiko_kode,' -  ',resiko_ketr)";

	

		$edata["CustomDisplay"] = "true";

	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdatabsivehlimit["IDRATE"] = $fdata;
		$tdatabsivehlimit[".searchableFields"][] = "IDRATE";
//	MODE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "MODE";
	$fdata["GoodName"] = "MODE";
	$fdata["ownerTable"] = "BSIVEHLIMIT";
	$fdata["Label"] = GetFieldLabel("BSIVEHLIMIT","MODE");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "MODE";

		$fdata["sourceSingle"] = "MODE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`MODE`";

	
	
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


	$tdatabsivehlimit["MODE"] = $fdata;
		$tdatabsivehlimit[".searchableFields"][] = "MODE";


$tables_data["BSIVEHLIMIT"]=&$tdatabsivehlimit;
$field_labels["BSIVEHLIMIT"] = &$fieldLabelsbsivehlimit;
$fieldToolTips["BSIVEHLIMIT"] = &$fieldToolTipsbsivehlimit;
$placeHolders["BSIVEHLIMIT"] = &$placeHoldersbsivehlimit;
$page_titles["BSIVEHLIMIT"] = &$pageTitlesbsivehlimit;


changeTextControlsToDate( "BSIVEHLIMIT" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["BSIVEHLIMIT"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["BSIVEHLIMIT"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_bsivehlimit()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "IDBSIVEHLIMIT,  	IDVEHICLE,  	IDRATE,  	`MODE`";
$proto0["m_strFrom"] = "FROM BSIVEHLIMIT";
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
	"m_strName" => "IDBSIVEHLIMIT",
	"m_strTable" => "BSIVEHLIMIT",
	"m_srcTableName" => "BSIVEHLIMIT"
));

$proto6["m_sql"] = "IDBSIVEHLIMIT";
$proto6["m_srcTableName"] = "BSIVEHLIMIT";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "IDVEHICLE",
	"m_strTable" => "BSIVEHLIMIT",
	"m_srcTableName" => "BSIVEHLIMIT"
));

$proto8["m_sql"] = "IDVEHICLE";
$proto8["m_srcTableName"] = "BSIVEHLIMIT";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "IDRATE",
	"m_strTable" => "BSIVEHLIMIT",
	"m_srcTableName" => "BSIVEHLIMIT"
));

$proto10["m_sql"] = "IDRATE";
$proto10["m_srcTableName"] = "BSIVEHLIMIT";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "MODE",
	"m_strTable" => "BSIVEHLIMIT",
	"m_srcTableName" => "BSIVEHLIMIT"
));

$proto12["m_sql"] = "`MODE`";
$proto12["m_srcTableName"] = "BSIVEHLIMIT";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "BSIVEHLIMIT";
$proto15["m_srcTableName"] = "BSIVEHLIMIT";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "IDBSIVEHLIMIT";
$proto15["m_columns"][] = "IDVEHICLE";
$proto15["m_columns"][] = "IDRATE";
$proto15["m_columns"][] = "MODE";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "BSIVEHLIMIT";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "BSIVEHLIMIT";
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
$proto0["m_srcTableName"]="BSIVEHLIMIT";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_bsivehlimit = createSqlQuery_bsivehlimit();


	
																												;

				

$tdatabsivehlimit[".sqlquery"] = $queryData_bsivehlimit;



$tdatabsivehlimit[".hasEvents"] = false;

?>