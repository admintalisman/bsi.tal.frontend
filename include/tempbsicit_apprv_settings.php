<?php
$tdatatempbsicit_apprv = array();
$tdatatempbsicit_apprv[".searchableFields"] = array();
$tdatatempbsicit_apprv[".ShortName"] = "tempbsicit_apprv";
$tdatatempbsicit_apprv[".OwnerID"] = "";
$tdatatempbsicit_apprv[".OriginalTable"] = "TEMPBSICIT_APPRV";


$tdatatempbsicit_apprv[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatempbsicit_apprv[".originalPagesByType"] = $tdatatempbsicit_apprv[".pagesByType"];
$tdatatempbsicit_apprv[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatempbsicit_apprv[".originalPages"] = $tdatatempbsicit_apprv[".pages"];
$tdatatempbsicit_apprv[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatempbsicit_apprv[".originalDefaultPages"] = $tdatatempbsicit_apprv[".defaultPages"];

//	field labels
$fieldLabelstempbsicit_apprv = array();
$fieldToolTipstempbsicit_apprv = array();
$pageTitlestempbsicit_apprv = array();
$placeHolderstempbsicit_apprv = array();

if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelstempbsicit_apprv["Indonesian"] = array();
	$fieldToolTipstempbsicit_apprv["Indonesian"] = array();
	$placeHolderstempbsicit_apprv["Indonesian"] = array();
	$pageTitlestempbsicit_apprv["Indonesian"] = array();
	$fieldLabelstempbsicit_apprv["Indonesian"]["IDTEMPBSICIT_APPRV"] = "IDTEMPBSICIT APPRV";
	$fieldToolTipstempbsicit_apprv["Indonesian"]["IDTEMPBSICIT_APPRV"] = "";
	$placeHolderstempbsicit_apprv["Indonesian"]["IDTEMPBSICIT_APPRV"] = "";
	$fieldLabelstempbsicit_apprv["Indonesian"]["IDCIT"] = "IDCIT";
	$fieldToolTipstempbsicit_apprv["Indonesian"]["IDCIT"] = "";
	$placeHolderstempbsicit_apprv["Indonesian"]["IDCIT"] = "";
	$fieldLabelstempbsicit_apprv["Indonesian"]["CATATAN"] = "CATATAN";
	$fieldToolTipstempbsicit_apprv["Indonesian"]["CATATAN"] = "";
	$placeHolderstempbsicit_apprv["Indonesian"]["CATATAN"] = "Catatan / Keterangan";
	$fieldLabelstempbsicit_apprv["Indonesian"]["APPRV_FL"] = "APPRV FL";
	$fieldToolTipstempbsicit_apprv["Indonesian"]["APPRV_FL"] = "";
	$placeHolderstempbsicit_apprv["Indonesian"]["APPRV_FL"] = "";
	$pageTitlestempbsicit_apprv["Indonesian"]["list"] = "";
	if (count($fieldToolTipstempbsicit_apprv["Indonesian"]))
		$tdatatempbsicit_apprv[".isUseToolTips"] = true;
}


	$tdatatempbsicit_apprv[".NCSearch"] = true;



$tdatatempbsicit_apprv[".shortTableName"] = "tempbsicit_apprv";
$tdatatempbsicit_apprv[".nSecOptions"] = 0;

$tdatatempbsicit_apprv[".mainTableOwnerID"] = "";
$tdatatempbsicit_apprv[".entityType"] = 0;
$tdatatempbsicit_apprv[".connId"] = "u736239518_btn_at_154_41_241_2";


$tdatatempbsicit_apprv[".strOriginalTableName"] = "TEMPBSICIT_APPRV";

	



$tdatatempbsicit_apprv[".showAddInPopup"] = false;

$tdatatempbsicit_apprv[".showEditInPopup"] = false;

$tdatatempbsicit_apprv[".showViewInPopup"] = false;

$tdatatempbsicit_apprv[".listAjax"] = false;
//	temporary
//$tdatatempbsicit_apprv[".listAjax"] = false;

	$tdatatempbsicit_apprv[".audit"] = false;

	$tdatatempbsicit_apprv[".locking"] = false;


$pages = $tdatatempbsicit_apprv[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatempbsicit_apprv[".edit"] = true;
	$tdatatempbsicit_apprv[".afterEditAction"] = 0;
	$tdatatempbsicit_apprv[".closePopupAfterEdit"] = 1;
	$tdatatempbsicit_apprv[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatatempbsicit_apprv[".add"] = true;
$tdatatempbsicit_apprv[".afterAddAction"] = 1;
$tdatatempbsicit_apprv[".closePopupAfterAdd"] = 1;
$tdatatempbsicit_apprv[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatempbsicit_apprv[".list"] = true;
}



$tdatatempbsicit_apprv[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatempbsicit_apprv[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatempbsicit_apprv[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatempbsicit_apprv[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatempbsicit_apprv[".printFriendly"] = true;
}



$tdatatempbsicit_apprv[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatempbsicit_apprv[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatempbsicit_apprv[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatempbsicit_apprv[".isUseAjaxSuggest"] = true;



																																																						

$tdatatempbsicit_apprv[".ajaxCodeSnippetAdded"] = false;

$tdatatempbsicit_apprv[".buttonsAdded"] = false;

$tdatatempbsicit_apprv[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatempbsicit_apprv[".isUseTimeForSearch"] = false;


$tdatatempbsicit_apprv[".badgeColor"] = "9acd32";


$tdatatempbsicit_apprv[".allSearchFields"] = array();
$tdatatempbsicit_apprv[".filterFields"] = array();
$tdatatempbsicit_apprv[".requiredSearchFields"] = array();

$tdatatempbsicit_apprv[".googleLikeFields"] = array();
$tdatatempbsicit_apprv[".googleLikeFields"][] = "IDTEMPBSICIT_APPRV";
$tdatatempbsicit_apprv[".googleLikeFields"][] = "IDCIT";
$tdatatempbsicit_apprv[".googleLikeFields"][] = "CATATAN";
$tdatatempbsicit_apprv[".googleLikeFields"][] = "APPRV_FL";



$tdatatempbsicit_apprv[".tableType"] = "list";

$tdatatempbsicit_apprv[".printerPageOrientation"] = 0;
$tdatatempbsicit_apprv[".nPrinterPageScale"] = 100;

$tdatatempbsicit_apprv[".nPrinterSplitRecords"] = 40;

$tdatatempbsicit_apprv[".geocodingEnabled"] = false;










$tdatatempbsicit_apprv[".pageSize"] = 20;

$tdatatempbsicit_apprv[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatempbsicit_apprv[".strOrderBy"] = $tstrOrderBy;

$tdatatempbsicit_apprv[".orderindexes"] = array();


$tdatatempbsicit_apprv[".sqlHead"] = "SELECT IDTEMPBSICIT_APPRV,  	IDCIT,  	CATATAN,  	APPRV_FL";
$tdatatempbsicit_apprv[".sqlFrom"] = "FROM TEMPBSICIT_APPRV";
$tdatatempbsicit_apprv[".sqlWhereExpr"] = "";
$tdatatempbsicit_apprv[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatempbsicit_apprv[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatempbsicit_apprv[".arrGroupsPerPage"] = $arrGPP;

$tdatatempbsicit_apprv[".highlightSearchResults"] = true;

$tableKeystempbsicit_apprv = array();
$tableKeystempbsicit_apprv[] = "IDTEMPBSICIT_APPRV";
$tdatatempbsicit_apprv[".Keys"] = $tableKeystempbsicit_apprv;


$tdatatempbsicit_apprv[".hideMobileList"] = array();




//	IDTEMPBSICIT_APPRV
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IDTEMPBSICIT_APPRV";
	$fdata["GoodName"] = "IDTEMPBSICIT_APPRV";
	$fdata["ownerTable"] = "TEMPBSICIT_APPRV";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIT_APPRV","IDTEMPBSICIT_APPRV");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "IDTEMPBSICIT_APPRV";

		$fdata["sourceSingle"] = "IDTEMPBSICIT_APPRV";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IDTEMPBSICIT_APPRV";

	
	
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


	$tdatatempbsicit_apprv["IDTEMPBSICIT_APPRV"] = $fdata;
		$tdatatempbsicit_apprv[".searchableFields"][] = "IDTEMPBSICIT_APPRV";
//	IDCIT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "IDCIT";
	$fdata["GoodName"] = "IDCIT";
	$fdata["ownerTable"] = "TEMPBSICIT_APPRV";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIT_APPRV","IDCIT");
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


	$tdatatempbsicit_apprv["IDCIT"] = $fdata;
		$tdatatempbsicit_apprv[".searchableFields"][] = "IDCIT";
//	CATATAN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CATATAN";
	$fdata["GoodName"] = "CATATAN";
	$fdata["ownerTable"] = "TEMPBSICIT_APPRV";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIT_APPRV","CATATAN");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CATATAN";

		$fdata["sourceSingle"] = "CATATAN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CATATAN";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatatempbsicit_apprv["CATATAN"] = $fdata;
		$tdatatempbsicit_apprv[".searchableFields"][] = "CATATAN";
//	APPRV_FL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "APPRV_FL";
	$fdata["GoodName"] = "APPRV_FL";
	$fdata["ownerTable"] = "TEMPBSICIT_APPRV";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIT_APPRV","APPRV_FL");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "APPRV_FL";

		$fdata["sourceSingle"] = "APPRV_FL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "APPRV_FL";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatatempbsicit_apprv["APPRV_FL"] = $fdata;
		$tdatatempbsicit_apprv[".searchableFields"][] = "APPRV_FL";


$tables_data["TEMPBSICIT_APPRV"]=&$tdatatempbsicit_apprv;
$field_labels["TEMPBSICIT_APPRV"] = &$fieldLabelstempbsicit_apprv;
$fieldToolTips["TEMPBSICIT_APPRV"] = &$fieldToolTipstempbsicit_apprv;
$placeHolders["TEMPBSICIT_APPRV"] = &$placeHolderstempbsicit_apprv;
$page_titles["TEMPBSICIT_APPRV"] = &$pageTitlestempbsicit_apprv;


changeTextControlsToDate( "TEMPBSICIT_APPRV" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["TEMPBSICIT_APPRV"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["TEMPBSICIT_APPRV"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="TEMPBSICIT";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="TEMPBSICIT_verifikasi";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tempbsicit_verifikasi";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["TEMPBSICIT_APPRV"][0] = $masterParams;
				$masterTablesData["TEMPBSICIT_APPRV"][0]["masterKeys"] = array();
	$masterTablesData["TEMPBSICIT_APPRV"][0]["masterKeys"][]="IDCIT";
				$masterTablesData["TEMPBSICIT_APPRV"][0]["detailKeys"] = array();
	$masterTablesData["TEMPBSICIT_APPRV"][0]["detailKeys"][]="IDCIT";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tempbsicit_apprv()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "IDTEMPBSICIT_APPRV,  	IDCIT,  	CATATAN,  	APPRV_FL";
$proto0["m_strFrom"] = "FROM TEMPBSICIT_APPRV";
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
	"m_strName" => "IDTEMPBSICIT_APPRV",
	"m_strTable" => "TEMPBSICIT_APPRV",
	"m_srcTableName" => "TEMPBSICIT_APPRV"
));

$proto6["m_sql"] = "IDTEMPBSICIT_APPRV";
$proto6["m_srcTableName"] = "TEMPBSICIT_APPRV";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "IDCIT",
	"m_strTable" => "TEMPBSICIT_APPRV",
	"m_srcTableName" => "TEMPBSICIT_APPRV"
));

$proto8["m_sql"] = "IDCIT";
$proto8["m_srcTableName"] = "TEMPBSICIT_APPRV";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CATATAN",
	"m_strTable" => "TEMPBSICIT_APPRV",
	"m_srcTableName" => "TEMPBSICIT_APPRV"
));

$proto10["m_sql"] = "CATATAN";
$proto10["m_srcTableName"] = "TEMPBSICIT_APPRV";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "APPRV_FL",
	"m_strTable" => "TEMPBSICIT_APPRV",
	"m_srcTableName" => "TEMPBSICIT_APPRV"
));

$proto12["m_sql"] = "APPRV_FL";
$proto12["m_srcTableName"] = "TEMPBSICIT_APPRV";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "TEMPBSICIT_APPRV";
$proto15["m_srcTableName"] = "TEMPBSICIT_APPRV";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "IDTEMPBSICIT_APPRV";
$proto15["m_columns"][] = "IDCIT";
$proto15["m_columns"][] = "CATATAN";
$proto15["m_columns"][] = "APPRV_FL";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "TEMPBSICIT_APPRV";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "TEMPBSICIT_APPRV";
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
$proto0["m_srcTableName"]="TEMPBSICIT_APPRV";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tempbsicit_apprv = createSqlQuery_tempbsicit_apprv();


	
																												;

				

$tdatatempbsicit_apprv[".sqlquery"] = $queryData_tempbsicit_apprv;



include_once(getabspath("include/tempbsicit_apprv_events.php"));
$tdatatempbsicit_apprv[".hasEvents"] = true;

?>