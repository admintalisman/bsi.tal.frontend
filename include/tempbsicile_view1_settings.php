<?php
$tdatatempbsicile_view1 = array();
$tdatatempbsicile_view1[".searchableFields"] = array();
$tdatatempbsicile_view1[".ShortName"] = "tempbsicile_view1";
$tdatatempbsicile_view1[".OwnerID"] = "";
$tdatatempbsicile_view1[".OriginalTable"] = "TEMPBSICILE";


$tdatatempbsicile_view1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatatempbsicile_view1[".originalPagesByType"] = $tdatatempbsicile_view1[".pagesByType"];
$tdatatempbsicile_view1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatatempbsicile_view1[".originalPages"] = $tdatatempbsicile_view1[".pages"];
$tdatatempbsicile_view1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatatempbsicile_view1[".originalDefaultPages"] = $tdatatempbsicile_view1[".defaultPages"];

//	field labels
$fieldLabelstempbsicile_view1 = array();
$fieldToolTipstempbsicile_view1 = array();
$pageTitlestempbsicile_view1 = array();
$placeHolderstempbsicile_view1 = array();

if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelstempbsicile_view1["Indonesian"] = array();
	$fieldToolTipstempbsicile_view1["Indonesian"] = array();
	$placeHolderstempbsicile_view1["Indonesian"] = array();
	$pageTitlestempbsicile_view1["Indonesian"] = array();
	$fieldLabelstempbsicile_view1["Indonesian"]["Kode_Cabang"] = "Kode Cabang";
	$fieldToolTipstempbsicile_view1["Indonesian"]["Kode_Cabang"] = "";
	$placeHolderstempbsicile_view1["Indonesian"]["Kode_Cabang"] = "";
	$fieldLabelstempbsicile_view1["Indonesian"]["Kantor_Cabang"] = "Kantor Cabang";
	$fieldToolTipstempbsicile_view1["Indonesian"]["Kantor_Cabang"] = "";
	$placeHolderstempbsicile_view1["Indonesian"]["Kantor_Cabang"] = "";
	$fieldLabelstempbsicile_view1["Indonesian"]["Total_pertanggungan"] = "Nilai Pertanggungan";
	$fieldToolTipstempbsicile_view1["Indonesian"]["Total_pertanggungan"] = "";
	$placeHolderstempbsicile_view1["Indonesian"]["Total_pertanggungan"] = "";
	$fieldLabelstempbsicile_view1["Indonesian"]["TAHUN_PERIODE"] = "Periode Akad";
	$fieldToolTipstempbsicile_view1["Indonesian"]["TAHUN_PERIODE"] = "";
	$placeHolderstempbsicile_view1["Indonesian"]["TAHUN_PERIODE"] = "";
	if (count($fieldToolTipstempbsicile_view1["Indonesian"]))
		$tdatatempbsicile_view1[".isUseToolTips"] = true;
}


	$tdatatempbsicile_view1[".NCSearch"] = true;



$tdatatempbsicile_view1[".shortTableName"] = "tempbsicile_view1";
$tdatatempbsicile_view1[".nSecOptions"] = 0;

$tdatatempbsicile_view1[".recsLimit"] = 10;
$tdatatempbsicile_view1[".mainTableOwnerID"] = "";
$tdatatempbsicile_view1[".entityType"] = 1;
$tdatatempbsicile_view1[".connId"] = "u736239518_btn_at_154_41_241_2";


$tdatatempbsicile_view1[".strOriginalTableName"] = "TEMPBSICILE";

	



$tdatatempbsicile_view1[".showAddInPopup"] = false;

$tdatatempbsicile_view1[".showEditInPopup"] = false;

$tdatatempbsicile_view1[".showViewInPopup"] = false;

$tdatatempbsicile_view1[".listAjax"] = false;
//	temporary
//$tdatatempbsicile_view1[".listAjax"] = false;

	$tdatatempbsicile_view1[".audit"] = true;

	$tdatatempbsicile_view1[".locking"] = false;


$pages = $tdatatempbsicile_view1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatempbsicile_view1[".edit"] = true;
	$tdatatempbsicile_view1[".afterEditAction"] = 1;
	$tdatatempbsicile_view1[".closePopupAfterEdit"] = 1;
	$tdatatempbsicile_view1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatempbsicile_view1[".add"] = true;
$tdatatempbsicile_view1[".afterAddAction"] = 1;
$tdatatempbsicile_view1[".closePopupAfterAdd"] = 1;
$tdatatempbsicile_view1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatempbsicile_view1[".list"] = true;
}



$tdatatempbsicile_view1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatempbsicile_view1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatempbsicile_view1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatempbsicile_view1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatempbsicile_view1[".printFriendly"] = true;
}



$tdatatempbsicile_view1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatempbsicile_view1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatempbsicile_view1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatempbsicile_view1[".isUseAjaxSuggest"] = true;



																											

$tdatatempbsicile_view1[".ajaxCodeSnippetAdded"] = false;

$tdatatempbsicile_view1[".buttonsAdded"] = false;

$tdatatempbsicile_view1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatempbsicile_view1[".isUseTimeForSearch"] = false;


$tdatatempbsicile_view1[".badgeColor"] = "B22222";


$tdatatempbsicile_view1[".allSearchFields"] = array();
$tdatatempbsicile_view1[".filterFields"] = array();
$tdatatempbsicile_view1[".requiredSearchFields"] = array();

$tdatatempbsicile_view1[".googleLikeFields"] = array();
$tdatatempbsicile_view1[".googleLikeFields"][] = "Kode_Cabang";
$tdatatempbsicile_view1[".googleLikeFields"][] = "Kantor_Cabang";
$tdatatempbsicile_view1[".googleLikeFields"][] = "Total_pertanggungan";
$tdatatempbsicile_view1[".googleLikeFields"][] = "TAHUN_PERIODE";



$tdatatempbsicile_view1[".tableType"] = "list";

$tdatatempbsicile_view1[".printerPageOrientation"] = 0;
$tdatatempbsicile_view1[".nPrinterPageScale"] = 100;

$tdatatempbsicile_view1[".nPrinterSplitRecords"] = 40;

$tdatatempbsicile_view1[".geocodingEnabled"] = false;










$tdatatempbsicile_view1[".pageSize"] = 10;

$tdatatempbsicile_view1[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY Total_pertanggungan DESC";
$tdatatempbsicile_view1[".strOrderBy"] = $tstrOrderBy;

$tdatatempbsicile_view1[".orderindexes"] = array();
	$tdatatempbsicile_view1[".orderindexes"][] = array(3, (0 ? "ASC" : "DESC"), "SUM(POKOKPEMBIAYAAN)");



$tdatatempbsicile_view1[".sqlHead"] = "select KDCBGBANK AS Kode_Cabang,  NMCBGBANK AS Kantor_Cabang,  SUM(POKOKPEMBIAYAAN) AS Total_pertanggungan,  YEAR(TGLAKAD) AS TAHUN_PERIODE";
$tdatatempbsicile_view1[".sqlFrom"] = "FROM TEMPBSICILE";
$tdatatempbsicile_view1[".sqlWhereExpr"] = "(TGLAKAD > '2024-02-01')";
$tdatatempbsicile_view1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatempbsicile_view1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatempbsicile_view1[".arrGroupsPerPage"] = $arrGPP;

$tdatatempbsicile_view1[".highlightSearchResults"] = true;

$tableKeystempbsicile_view1 = array();
$tdatatempbsicile_view1[".Keys"] = $tableKeystempbsicile_view1;


$tdatatempbsicile_view1[".hideMobileList"] = array();




//	Kode_Cabang
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Kode_Cabang";
	$fdata["GoodName"] = "Kode_Cabang";
	$fdata["ownerTable"] = "TEMPBSICILE";
	$fdata["Label"] = GetFieldLabel("TEMPBSICILE_view1","Kode_Cabang");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "KDCBGBANK";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "KDCBGBANK";

	
	
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


	$tdatatempbsicile_view1["Kode_Cabang"] = $fdata;
		$tdatatempbsicile_view1[".searchableFields"][] = "Kode_Cabang";
//	Kantor_Cabang
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Kantor_Cabang";
	$fdata["GoodName"] = "Kantor_Cabang";
	$fdata["ownerTable"] = "TEMPBSICILE";
	$fdata["Label"] = GetFieldLabel("TEMPBSICILE_view1","Kantor_Cabang");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "NMCBGBANK";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NMCBGBANK";

	
	
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


	$tdatatempbsicile_view1["Kantor_Cabang"] = $fdata;
		$tdatatempbsicile_view1[".searchableFields"][] = "Kantor_Cabang";
//	Total_pertanggungan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Total_pertanggungan";
	$fdata["GoodName"] = "Total_pertanggungan";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("TEMPBSICILE_view1","Total_pertanggungan");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Total_pertanggungan";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(POKOKPEMBIAYAAN)";

	
	
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


	$tdatatempbsicile_view1["Total_pertanggungan"] = $fdata;
		$tdatatempbsicile_view1[".searchableFields"][] = "Total_pertanggungan";
//	TAHUN_PERIODE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "TAHUN_PERIODE";
	$fdata["GoodName"] = "TAHUN_PERIODE";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("TEMPBSICILE_view1","TAHUN_PERIODE");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "TAHUN_PERIODE";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "YEAR(TGLAKAD)";

	
	
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


	$tdatatempbsicile_view1["TAHUN_PERIODE"] = $fdata;
		$tdatatempbsicile_view1[".searchableFields"][] = "TAHUN_PERIODE";


$tables_data["TEMPBSICILE_view1"]=&$tdatatempbsicile_view1;
$field_labels["TEMPBSICILE_view1"] = &$fieldLabelstempbsicile_view1;
$fieldToolTips["TEMPBSICILE_view1"] = &$fieldToolTipstempbsicile_view1;
$placeHolders["TEMPBSICILE_view1"] = &$placeHolderstempbsicile_view1;
$page_titles["TEMPBSICILE_view1"] = &$pageTitlestempbsicile_view1;


changeTextControlsToDate( "TEMPBSICILE_view1" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["TEMPBSICILE_view1"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["TEMPBSICILE_view1"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tempbsicile_view1()
{
$proto0=array();
$proto0["m_strHead"] = "select";
$proto0["m_strFieldList"] = "KDCBGBANK AS Kode_Cabang,  NMCBGBANK AS Kantor_Cabang,  SUM(POKOKPEMBIAYAAN) AS Total_pertanggungan,  YEAR(TGLAKAD) AS TAHUN_PERIODE";
$proto0["m_strFrom"] = "FROM TEMPBSICILE";
$proto0["m_strWhere"] = "(TGLAKAD > '2024-02-01')";
$proto0["m_strOrderBy"] = "ORDER BY Total_pertanggungan DESC";
	
																												;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "TGLAKAD > '2024-02-01'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "TGLAKAD",
	"m_strTable" => "TEMPBSICILE",
	"m_srcTableName" => "TEMPBSICILE_view1"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "> '2024-02-01'";
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
	"m_strName" => "KDCBGBANK",
	"m_strTable" => "TEMPBSICILE",
	"m_srcTableName" => "TEMPBSICILE_view1"
));

$proto6["m_sql"] = "KDCBGBANK";
$proto6["m_srcTableName"] = "TEMPBSICILE_view1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "Kode_Cabang";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "NMCBGBANK",
	"m_strTable" => "TEMPBSICILE",
	"m_srcTableName" => "TEMPBSICILE_view1"
));

$proto8["m_sql"] = "NMCBGBANK";
$proto8["m_srcTableName"] = "TEMPBSICILE_view1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "Kantor_Cabang";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$proto11=array();
$proto11["m_functiontype"] = "SQLF_SUM";
$proto11["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "POKOKPEMBIAYAAN",
	"m_strTable" => "TEMPBSICILE",
	"m_srcTableName" => "TEMPBSICILE_view1"
));

$proto11["m_arguments"][]=$obj;
$proto11["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto11);

$proto10["m_sql"] = "SUM(POKOKPEMBIAYAAN)";
$proto10["m_srcTableName"] = "TEMPBSICILE_view1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "Total_pertanggungan";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$proto14=array();
$proto14["m_functiontype"] = "SQLF_CUSTOM";
$proto14["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "TGLAKAD"
));

$proto14["m_arguments"][]=$obj;
$proto14["m_strFunctionName"] = "YEAR";
$obj = new SQLFunctionCall($proto14);

$proto13["m_sql"] = "YEAR(TGLAKAD)";
$proto13["m_srcTableName"] = "TEMPBSICILE_view1";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "TAHUN_PERIODE";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "TEMPBSICILE";
$proto17["m_srcTableName"] = "TEMPBSICILE_view1";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "IDTEMPCE";
$proto17["m_columns"][] = "NOLOANDISBURSE";
$proto17["m_columns"][] = "NAMATERJAMIN";
$proto17["m_columns"][] = "POKOKPEMBIAYAAN";
$proto17["m_columns"][] = "JANGKAWAKTU";
$proto17["m_columns"][] = "TGLAKAD";
$proto17["m_columns"][] = "TGLJATUHTEMPO";
$proto17["m_columns"][] = "KDCBGBANK";
$proto17["m_columns"][] = "NMCBGBANK";
$proto17["m_columns"][] = "ADDUSER";
$proto17["m_columns"][] = "ADDDATE";
$proto17["m_columns"][] = "NIK";
$proto17["m_columns"][] = "TGLLAHIR";
$proto17["m_columns"][] = "ALAMAT";
$proto17["m_columns"][] = "BSMID";
$proto17["m_columns"][] = "PROPOSALNO";
$proto17["m_columns"][] = "PREMI";
$proto17["m_columns"][] = "RATE";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "TEMPBSICILE";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "TEMPBSICILE_view1";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto20=array();
						$obj = new SQLField(array(
	"m_strName" => "KDCBGBANK",
	"m_strTable" => "TEMPBSICILE",
	"m_srcTableName" => "TEMPBSICILE_view1"
));

$proto20["m_column"]=$obj;
$obj = new SQLGroupByItem($proto20);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto22=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "Total_pertanggungan"
));

$proto22["m_column"]=$obj;
$proto22["m_bAsc"] = 0;
$proto22["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto22);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="TEMPBSICILE_view1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tempbsicile_view1 = createSqlQuery_tempbsicile_view1();


	
																												;

				

$tdatatempbsicile_view1[".sqlquery"] = $queryData_tempbsicile_view1;



$tdatatempbsicile_view1[".hasEvents"] = false;

?>