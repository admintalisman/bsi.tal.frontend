<?php
$tdatatempbsicit_view1 = array();
$tdatatempbsicit_view1[".searchableFields"] = array();
$tdatatempbsicit_view1[".ShortName"] = "tempbsicit_view1";
$tdatatempbsicit_view1[".OwnerID"] = "";
$tdatatempbsicit_view1[".OriginalTable"] = "TEMPBSICIT";


$tdatatempbsicit_view1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatatempbsicit_view1[".originalPagesByType"] = $tdatatempbsicit_view1[".pagesByType"];
$tdatatempbsicit_view1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatatempbsicit_view1[".originalPages"] = $tdatatempbsicit_view1[".pages"];
$tdatatempbsicit_view1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatatempbsicit_view1[".originalDefaultPages"] = $tdatatempbsicit_view1[".defaultPages"];

//	field labels
$fieldLabelstempbsicit_view1 = array();
$fieldToolTipstempbsicit_view1 = array();
$pageTitlestempbsicit_view1 = array();
$placeHolderstempbsicit_view1 = array();

if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelstempbsicit_view1["Indonesian"] = array();
	$fieldToolTipstempbsicit_view1["Indonesian"] = array();
	$placeHolderstempbsicit_view1["Indonesian"] = array();
	$pageTitlestempbsicit_view1["Indonesian"] = array();
	$fieldLabelstempbsicit_view1["Indonesian"]["CIT_IDCBG"] = "Cabang";
	$fieldToolTipstempbsicit_view1["Indonesian"]["CIT_IDCBG"] = "";
	$placeHolderstempbsicit_view1["Indonesian"]["CIT_IDCBG"] = "";
	$fieldLabelstempbsicit_view1["Indonesian"]["CIT_TTG"] = "Nama Tertanggung";
	$fieldToolTipstempbsicit_view1["Indonesian"]["CIT_TTG"] = "";
	$placeHolderstempbsicit_view1["Indonesian"]["CIT_TTG"] = "";
	$fieldLabelstempbsicit_view1["Indonesian"]["CIT_PROPOSAL"] = "No. Proposal";
	$fieldToolTipstempbsicit_view1["Indonesian"]["CIT_PROPOSAL"] = "";
	$placeHolderstempbsicit_view1["Indonesian"]["CIT_PROPOSAL"] = "";
	$fieldLabelstempbsicit_view1["Indonesian"]["CIT_PREMI"] = "Nilai Premi";
	$fieldToolTipstempbsicit_view1["Indonesian"]["CIT_PREMI"] = "";
	$placeHolderstempbsicit_view1["Indonesian"]["CIT_PREMI"] = "";
	$fieldLabelstempbsicit_view1["Indonesian"]["CIT_TSI"] = "Nilai Pertanggungan";
	$fieldToolTipstempbsicit_view1["Indonesian"]["CIT_TSI"] = "";
	$placeHolderstempbsicit_view1["Indonesian"]["CIT_TSI"] = "";
	if (count($fieldToolTipstempbsicit_view1["Indonesian"]))
		$tdatatempbsicit_view1[".isUseToolTips"] = true;
}


	$tdatatempbsicit_view1[".NCSearch"] = true;



$tdatatempbsicit_view1[".shortTableName"] = "tempbsicit_view1";
$tdatatempbsicit_view1[".nSecOptions"] = 0;

$tdatatempbsicit_view1[".mainTableOwnerID"] = "";
$tdatatempbsicit_view1[".entityType"] = 1;
$tdatatempbsicit_view1[".connId"] = "u736239518_btn_at_154_41_241_2";


$tdatatempbsicit_view1[".strOriginalTableName"] = "TEMPBSICIT";

	



$tdatatempbsicit_view1[".showAddInPopup"] = false;

$tdatatempbsicit_view1[".showEditInPopup"] = false;

$tdatatempbsicit_view1[".showViewInPopup"] = false;

$tdatatempbsicit_view1[".listAjax"] = false;
//	temporary
//$tdatatempbsicit_view1[".listAjax"] = false;

	$tdatatempbsicit_view1[".audit"] = false;

	$tdatatempbsicit_view1[".locking"] = false;


$pages = $tdatatempbsicit_view1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatempbsicit_view1[".edit"] = true;
	$tdatatempbsicit_view1[".afterEditAction"] = 1;
	$tdatatempbsicit_view1[".closePopupAfterEdit"] = 1;
	$tdatatempbsicit_view1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatempbsicit_view1[".add"] = true;
$tdatatempbsicit_view1[".afterAddAction"] = 1;
$tdatatempbsicit_view1[".closePopupAfterAdd"] = 1;
$tdatatempbsicit_view1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatempbsicit_view1[".list"] = true;
}



$tdatatempbsicit_view1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatempbsicit_view1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatempbsicit_view1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatempbsicit_view1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatempbsicit_view1[".printFriendly"] = true;
}



$tdatatempbsicit_view1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatempbsicit_view1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatempbsicit_view1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatempbsicit_view1[".isUseAjaxSuggest"] = true;



																											

$tdatatempbsicit_view1[".ajaxCodeSnippetAdded"] = false;

$tdatatempbsicit_view1[".buttonsAdded"] = false;

$tdatatempbsicit_view1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatempbsicit_view1[".isUseTimeForSearch"] = false;


$tdatatempbsicit_view1[".badgeColor"] = "D2691E";


$tdatatempbsicit_view1[".allSearchFields"] = array();
$tdatatempbsicit_view1[".filterFields"] = array();
$tdatatempbsicit_view1[".requiredSearchFields"] = array();

$tdatatempbsicit_view1[".googleLikeFields"] = array();
$tdatatempbsicit_view1[".googleLikeFields"][] = "CIT_IDCBG";
$tdatatempbsicit_view1[".googleLikeFields"][] = "CIT_TTG";
$tdatatempbsicit_view1[".googleLikeFields"][] = "CIT_PROPOSAL";
$tdatatempbsicit_view1[".googleLikeFields"][] = "CIT_PREMI";
$tdatatempbsicit_view1[".googleLikeFields"][] = "CIT_TSI";



$tdatatempbsicit_view1[".tableType"] = "list";

$tdatatempbsicit_view1[".printerPageOrientation"] = 0;
$tdatatempbsicit_view1[".nPrinterPageScale"] = 100;

$tdatatempbsicit_view1[".nPrinterSplitRecords"] = 40;

$tdatatempbsicit_view1[".geocodingEnabled"] = false;










$tdatatempbsicit_view1[".pageSize"] = 20;

$tdatatempbsicit_view1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatempbsicit_view1[".strOrderBy"] = $tstrOrderBy;

$tdatatempbsicit_view1[".orderindexes"] = array();


$tdatatempbsicit_view1[".sqlHead"] = "SELECT CIT_IDCBG,  CIT_TTG,  CIT_PROPOSAL,  CIT_PREMI,  CIT_TSI";
$tdatatempbsicit_view1[".sqlFrom"] = "FROM TEMPBSICIT";
$tdatatempbsicit_view1[".sqlWhereExpr"] = "(CIT_IDCBG = ':session.IdExt')";
$tdatatempbsicit_view1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatempbsicit_view1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatempbsicit_view1[".arrGroupsPerPage"] = $arrGPP;

$tdatatempbsicit_view1[".highlightSearchResults"] = true;

$tableKeystempbsicit_view1 = array();
$tdatatempbsicit_view1[".Keys"] = $tableKeystempbsicit_view1;


$tdatatempbsicit_view1[".hideMobileList"] = array();




//	CIT_IDCBG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CIT_IDCBG";
	$fdata["GoodName"] = "CIT_IDCBG";
	$fdata["ownerTable"] = "TEMPBSICIT";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIT_view1","CIT_IDCBG");
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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

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


	$tdatatempbsicit_view1["CIT_IDCBG"] = $fdata;
		$tdatatempbsicit_view1[".searchableFields"][] = "CIT_IDCBG";
//	CIT_TTG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CIT_TTG";
	$fdata["GoodName"] = "CIT_TTG";
	$fdata["ownerTable"] = "TEMPBSICIT";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIT_view1","CIT_TTG");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CIT_TTG";

		$fdata["sourceSingle"] = "CIT_TTG";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CIT_TTG";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatatempbsicit_view1["CIT_TTG"] = $fdata;
		$tdatatempbsicit_view1[".searchableFields"][] = "CIT_TTG";
//	CIT_PROPOSAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CIT_PROPOSAL";
	$fdata["GoodName"] = "CIT_PROPOSAL";
	$fdata["ownerTable"] = "TEMPBSICIT";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIT_view1","CIT_PROPOSAL");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CIT_PROPOSAL";

		$fdata["sourceSingle"] = "CIT_PROPOSAL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CIT_PROPOSAL";

	
	
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


	$tdatatempbsicit_view1["CIT_PROPOSAL"] = $fdata;
		$tdatatempbsicit_view1[".searchableFields"][] = "CIT_PROPOSAL";
//	CIT_PREMI
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "CIT_PREMI";
	$fdata["GoodName"] = "CIT_PREMI";
	$fdata["ownerTable"] = "TEMPBSICIT";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIT_view1","CIT_PREMI");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "CIT_PREMI";

		$fdata["sourceSingle"] = "CIT_PREMI";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CIT_PREMI";

	
	
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


	$tdatatempbsicit_view1["CIT_PREMI"] = $fdata;
		$tdatatempbsicit_view1[".searchableFields"][] = "CIT_PREMI";
//	CIT_TSI
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "CIT_TSI";
	$fdata["GoodName"] = "CIT_TSI";
	$fdata["ownerTable"] = "TEMPBSICIT";
	$fdata["Label"] = GetFieldLabel("TEMPBSICIT_view1","CIT_TSI");
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


	$tdatatempbsicit_view1["CIT_TSI"] = $fdata;
		$tdatatempbsicit_view1[".searchableFields"][] = "CIT_TSI";


$tables_data["TEMPBSICIT_view1"]=&$tdatatempbsicit_view1;
$field_labels["TEMPBSICIT_view1"] = &$fieldLabelstempbsicit_view1;
$fieldToolTips["TEMPBSICIT_view1"] = &$fieldToolTipstempbsicit_view1;
$placeHolders["TEMPBSICIT_view1"] = &$placeHolderstempbsicit_view1;
$page_titles["TEMPBSICIT_view1"] = &$pageTitlestempbsicit_view1;


changeTextControlsToDate( "TEMPBSICIT_view1" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["TEMPBSICIT_view1"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["TEMPBSICIT_view1"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tempbsicit_view1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CIT_IDCBG,  CIT_TTG,  CIT_PROPOSAL,  CIT_PREMI,  CIT_TSI";
$proto0["m_strFrom"] = "FROM TEMPBSICIT";
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
	"m_srcTableName" => "TEMPBSICIT_view1"
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
	"m_strName" => "CIT_IDCBG",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "TEMPBSICIT_view1"
));

$proto6["m_sql"] = "CIT_IDCBG";
$proto6["m_srcTableName"] = "TEMPBSICIT_view1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_TTG",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "TEMPBSICIT_view1"
));

$proto8["m_sql"] = "CIT_TTG";
$proto8["m_srcTableName"] = "TEMPBSICIT_view1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_PROPOSAL",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "TEMPBSICIT_view1"
));

$proto10["m_sql"] = "CIT_PROPOSAL";
$proto10["m_srcTableName"] = "TEMPBSICIT_view1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_PREMI",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "TEMPBSICIT_view1"
));

$proto12["m_sql"] = "CIT_PREMI";
$proto12["m_srcTableName"] = "TEMPBSICIT_view1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_TSI",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "TEMPBSICIT_view1"
));

$proto14["m_sql"] = "CIT_TSI";
$proto14["m_srcTableName"] = "TEMPBSICIT_view1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "TEMPBSICIT";
$proto17["m_srcTableName"] = "TEMPBSICIT_view1";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "IDCIT";
$proto17["m_columns"][] = "CIT_REGDATE";
$proto17["m_columns"][] = "CIT_IDCBG";
$proto17["m_columns"][] = "CIT_MTU";
$proto17["m_columns"][] = "CIT_TTG";
$proto17["m_columns"][] = "CIT_DATE_DEPART";
$proto17["m_columns"][] = "CIT_DATE_ARRIV";
$proto17["m_columns"][] = "CIT_EMP_NAMA";
$proto17["m_columns"][] = "CIT_SEC_NAMA";
$proto17["m_columns"][] = "CIT_VECH";
$proto17["m_columns"][] = "CIT_NUMBER";
$proto17["m_columns"][] = "CIT_ADD_USER";
$proto17["m_columns"][] = "CIT_ADD_DATE";
$proto17["m_columns"][] = "CIT_EDIT_USER";
$proto17["m_columns"][] = "CIT_EDIT_DATE";
$proto17["m_columns"][] = "CIT_TSI";
$proto17["m_columns"][] = "CIT_FL";
$proto17["m_columns"][] = "CIT_ASAL";
$proto17["m_columns"][] = "CIT_TUJUAN";
$proto17["m_columns"][] = "CIT_TOKEN";
$proto17["m_columns"][] = "CIT_BSMID";
$proto17["m_columns"][] = "CIT_PROPOSAL";
$proto17["m_columns"][] = "CIT_PREMI";
$proto17["m_columns"][] = "CIT_PERIODE_END";
$proto17["m_columns"][] = "CIT_APP_USER";
$proto17["m_columns"][] = "CIT_APP_DATE";
$proto17["m_columns"][] = "CIT_APP_NOTE";
$proto17["m_columns"][] = "CIT_APP_FL";
$proto17["m_columns"][] = "CIT_TO_USER";
$proto17["m_columns"][] = "CIT_TO_DATE";
$proto17["m_columns"][] = "CIT_RATE";
$proto17["m_columns"][] = "CIT_LIMIT";
$proto17["m_columns"][] = "IS_OL";
$proto17["m_columns"][] = "CIT_MODE";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "TEMPBSICIT";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "TEMPBSICIT_view1";
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
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="TEMPBSICIT_view1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tempbsicit_view1 = createSqlQuery_tempbsicit_view1();


	
																												;

					

$tdatatempbsicit_view1[".sqlquery"] = $queryData_tempbsicit_view1;



$tdatatempbsicit_view1[".hasEvents"] = false;

?>