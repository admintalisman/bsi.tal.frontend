<?php
$tdatatembsicittujuan = array();
$tdatatembsicittujuan[".searchableFields"] = array();
$tdatatembsicittujuan[".ShortName"] = "tembsicittujuan";
$tdatatembsicittujuan[".OwnerID"] = "";
$tdatatembsicittujuan[".OriginalTable"] = "TEMBSICITTUJUAN";


$tdatatembsicittujuan[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatembsicittujuan[".originalPagesByType"] = $tdatatembsicittujuan[".pagesByType"];
$tdatatembsicittujuan[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatembsicittujuan[".originalPages"] = $tdatatembsicittujuan[".pages"];
$tdatatembsicittujuan[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatembsicittujuan[".originalDefaultPages"] = $tdatatembsicittujuan[".defaultPages"];

//	field labels
$fieldLabelstembsicittujuan = array();
$fieldToolTipstembsicittujuan = array();
$pageTitlestembsicittujuan = array();
$placeHolderstembsicittujuan = array();

if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelstembsicittujuan["Indonesian"] = array();
	$fieldToolTipstembsicittujuan["Indonesian"] = array();
	$placeHolderstembsicittujuan["Indonesian"] = array();
	$pageTitlestembsicittujuan["Indonesian"] = array();
	$fieldLabelstembsicittujuan["Indonesian"]["ID_CIT_TUJUAN"] = "ID CIT TUJUAN";
	$fieldToolTipstembsicittujuan["Indonesian"]["ID_CIT_TUJUAN"] = "";
	$placeHolderstembsicittujuan["Indonesian"]["ID_CIT_TUJUAN"] = "";
	$fieldLabelstembsicittujuan["Indonesian"]["ID_CIT"] = "ID CIT";
	$fieldToolTipstembsicittujuan["Indonesian"]["ID_CIT"] = "";
	$placeHolderstembsicittujuan["Indonesian"]["ID_CIT"] = "";
	$fieldLabelstembsicittujuan["Indonesian"]["CIT_TUJUAN_DESC"] = "Tujuan";
	$fieldToolTipstembsicittujuan["Indonesian"]["CIT_TUJUAN_DESC"] = "";
	$placeHolderstembsicittujuan["Indonesian"]["CIT_TUJUAN_DESC"] = "";
	$fieldLabelstembsicittujuan["Indonesian"]["CIT_TUJUAN_MTU"] = "MTU";
	$fieldToolTipstembsicittujuan["Indonesian"]["CIT_TUJUAN_MTU"] = "";
	$placeHolderstembsicittujuan["Indonesian"]["CIT_TUJUAN_MTU"] = "";
	$fieldLabelstembsicittujuan["Indonesian"]["CIT_TUJUAN_NILAI"] = "Jumlah Uang";
	$fieldToolTipstembsicittujuan["Indonesian"]["CIT_TUJUAN_NILAI"] = "";
	$placeHolderstembsicittujuan["Indonesian"]["CIT_TUJUAN_NILAI"] = "";
	$pageTitlestembsicittujuan["Indonesian"]["list"] = "Tujuan";
	if (count($fieldToolTipstembsicittujuan["Indonesian"]))
		$tdatatembsicittujuan[".isUseToolTips"] = true;
}


	$tdatatembsicittujuan[".NCSearch"] = true;



$tdatatembsicittujuan[".shortTableName"] = "tembsicittujuan";
$tdatatembsicittujuan[".nSecOptions"] = 0;

$tdatatembsicittujuan[".mainTableOwnerID"] = "";
$tdatatembsicittujuan[".entityType"] = 0;
$tdatatembsicittujuan[".connId"] = "u736239518_btn_at_154_41_241_2";


$tdatatembsicittujuan[".strOriginalTableName"] = "TEMBSICITTUJUAN";

	



$tdatatembsicittujuan[".showAddInPopup"] = false;

$tdatatembsicittujuan[".showEditInPopup"] = false;

$tdatatembsicittujuan[".showViewInPopup"] = false;

$tdatatembsicittujuan[".listAjax"] = false;
//	temporary
//$tdatatembsicittujuan[".listAjax"] = false;

	$tdatatembsicittujuan[".audit"] = true;

	$tdatatembsicittujuan[".locking"] = false;


$pages = $tdatatembsicittujuan[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatembsicittujuan[".edit"] = true;
	$tdatatembsicittujuan[".afterEditAction"] = 1;
	$tdatatembsicittujuan[".closePopupAfterEdit"] = 1;
	$tdatatembsicittujuan[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatembsicittujuan[".add"] = true;
$tdatatembsicittujuan[".afterAddAction"] = 1;
$tdatatembsicittujuan[".closePopupAfterAdd"] = 1;
$tdatatembsicittujuan[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatembsicittujuan[".list"] = true;
}



$tdatatembsicittujuan[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatembsicittujuan[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatembsicittujuan[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatembsicittujuan[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatembsicittujuan[".printFriendly"] = true;
}



$tdatatembsicittujuan[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatembsicittujuan[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatembsicittujuan[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatembsicittujuan[".isUseAjaxSuggest"] = true;



																											

$tdatatembsicittujuan[".ajaxCodeSnippetAdded"] = false;

$tdatatembsicittujuan[".buttonsAdded"] = false;

$tdatatembsicittujuan[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatembsicittujuan[".isUseTimeForSearch"] = false;


$tdatatembsicittujuan[".badgeColor"] = "e07878";


$tdatatembsicittujuan[".allSearchFields"] = array();
$tdatatembsicittujuan[".filterFields"] = array();
$tdatatembsicittujuan[".requiredSearchFields"] = array();

$tdatatembsicittujuan[".googleLikeFields"] = array();
$tdatatembsicittujuan[".googleLikeFields"][] = "ID_CIT_TUJUAN";
$tdatatembsicittujuan[".googleLikeFields"][] = "ID_CIT";
$tdatatembsicittujuan[".googleLikeFields"][] = "CIT_TUJUAN_DESC";
$tdatatembsicittujuan[".googleLikeFields"][] = "CIT_TUJUAN_MTU";
$tdatatembsicittujuan[".googleLikeFields"][] = "CIT_TUJUAN_NILAI";



$tdatatembsicittujuan[".tableType"] = "list";

$tdatatembsicittujuan[".printerPageOrientation"] = 0;
$tdatatembsicittujuan[".nPrinterPageScale"] = 100;

$tdatatembsicittujuan[".nPrinterSplitRecords"] = 40;

$tdatatembsicittujuan[".geocodingEnabled"] = false;










$tdatatembsicittujuan[".pageSize"] = 20;

$tdatatembsicittujuan[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatembsicittujuan[".strOrderBy"] = $tstrOrderBy;

$tdatatembsicittujuan[".orderindexes"] = array();


$tdatatembsicittujuan[".sqlHead"] = "SELECT ID_CIT_TUJUAN,  	ID_CIT,  	CIT_TUJUAN_DESC,  	CIT_TUJUAN_MTU,  	CIT_TUJUAN_NILAI";
$tdatatembsicittujuan[".sqlFrom"] = "FROM TEMBSICITTUJUAN";
$tdatatembsicittujuan[".sqlWhereExpr"] = "";
$tdatatembsicittujuan[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatembsicittujuan[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatembsicittujuan[".arrGroupsPerPage"] = $arrGPP;

$tdatatembsicittujuan[".highlightSearchResults"] = true;

$tableKeystembsicittujuan = array();
$tableKeystembsicittujuan[] = "ID_CIT_TUJUAN";
$tdatatembsicittujuan[".Keys"] = $tableKeystembsicittujuan;


$tdatatembsicittujuan[".hideMobileList"] = array();




//	ID_CIT_TUJUAN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID_CIT_TUJUAN";
	$fdata["GoodName"] = "ID_CIT_TUJUAN";
	$fdata["ownerTable"] = "TEMBSICITTUJUAN";
	$fdata["Label"] = GetFieldLabel("TEMBSICITTUJUAN","ID_CIT_TUJUAN");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ID_CIT_TUJUAN";

		$fdata["sourceSingle"] = "ID_CIT_TUJUAN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID_CIT_TUJUAN";

	
	
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


	$tdatatembsicittujuan["ID_CIT_TUJUAN"] = $fdata;
		$tdatatembsicittujuan[".searchableFields"][] = "ID_CIT_TUJUAN";
//	ID_CIT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ID_CIT";
	$fdata["GoodName"] = "ID_CIT";
	$fdata["ownerTable"] = "TEMBSICITTUJUAN";
	$fdata["Label"] = GetFieldLabel("TEMBSICITTUJUAN","ID_CIT");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ID_CIT";

		$fdata["sourceSingle"] = "ID_CIT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID_CIT";

	
	
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


	$tdatatembsicittujuan["ID_CIT"] = $fdata;
		$tdatatembsicittujuan[".searchableFields"][] = "ID_CIT";
//	CIT_TUJUAN_DESC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CIT_TUJUAN_DESC";
	$fdata["GoodName"] = "CIT_TUJUAN_DESC";
	$fdata["ownerTable"] = "TEMBSICITTUJUAN";
	$fdata["Label"] = GetFieldLabel("TEMBSICITTUJUAN","CIT_TUJUAN_DESC");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CIT_TUJUAN_DESC";

		$fdata["sourceSingle"] = "CIT_TUJUAN_DESC";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CIT_TUJUAN_DESC";

	
	
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


	$tdatatembsicittujuan["CIT_TUJUAN_DESC"] = $fdata;
		$tdatatembsicittujuan[".searchableFields"][] = "CIT_TUJUAN_DESC";
//	CIT_TUJUAN_MTU
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "CIT_TUJUAN_MTU";
	$fdata["GoodName"] = "CIT_TUJUAN_MTU";
	$fdata["ownerTable"] = "TEMBSICITTUJUAN";
	$fdata["Label"] = GetFieldLabel("TEMBSICITTUJUAN","CIT_TUJUAN_MTU");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CIT_TUJUAN_MTU";

		$fdata["sourceSingle"] = "CIT_TUJUAN_MTU";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CIT_TUJUAN_MTU";

	
	
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


	$tdatatembsicittujuan["CIT_TUJUAN_MTU"] = $fdata;
		$tdatatembsicittujuan[".searchableFields"][] = "CIT_TUJUAN_MTU";
//	CIT_TUJUAN_NILAI
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "CIT_TUJUAN_NILAI";
	$fdata["GoodName"] = "CIT_TUJUAN_NILAI";
	$fdata["ownerTable"] = "TEMBSICITTUJUAN";
	$fdata["Label"] = GetFieldLabel("TEMBSICITTUJUAN","CIT_TUJUAN_NILAI");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "CIT_TUJUAN_NILAI";

		$fdata["sourceSingle"] = "CIT_TUJUAN_NILAI";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CIT_TUJUAN_NILAI";

	
	
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


	$tdatatembsicittujuan["CIT_TUJUAN_NILAI"] = $fdata;
		$tdatatembsicittujuan[".searchableFields"][] = "CIT_TUJUAN_NILAI";


$tables_data["TEMBSICITTUJUAN"]=&$tdatatembsicittujuan;
$field_labels["TEMBSICITTUJUAN"] = &$fieldLabelstembsicittujuan;
$fieldToolTips["TEMBSICITTUJUAN"] = &$fieldToolTipstembsicittujuan;
$placeHolders["TEMBSICITTUJUAN"] = &$placeHolderstembsicittujuan;
$page_titles["TEMBSICITTUJUAN"] = &$pageTitlestembsicittujuan;


changeTextControlsToDate( "TEMBSICITTUJUAN" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["TEMBSICITTUJUAN"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["TEMBSICITTUJUAN"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tembsicittujuan()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID_CIT_TUJUAN,  	ID_CIT,  	CIT_TUJUAN_DESC,  	CIT_TUJUAN_MTU,  	CIT_TUJUAN_NILAI";
$proto0["m_strFrom"] = "FROM TEMBSICITTUJUAN";
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
	"m_strName" => "ID_CIT_TUJUAN",
	"m_strTable" => "TEMBSICITTUJUAN",
	"m_srcTableName" => "TEMBSICITTUJUAN"
));

$proto6["m_sql"] = "ID_CIT_TUJUAN";
$proto6["m_srcTableName"] = "TEMBSICITTUJUAN";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ID_CIT",
	"m_strTable" => "TEMBSICITTUJUAN",
	"m_srcTableName" => "TEMBSICITTUJUAN"
));

$proto8["m_sql"] = "ID_CIT";
$proto8["m_srcTableName"] = "TEMBSICITTUJUAN";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_TUJUAN_DESC",
	"m_strTable" => "TEMBSICITTUJUAN",
	"m_srcTableName" => "TEMBSICITTUJUAN"
));

$proto10["m_sql"] = "CIT_TUJUAN_DESC";
$proto10["m_srcTableName"] = "TEMBSICITTUJUAN";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_TUJUAN_MTU",
	"m_strTable" => "TEMBSICITTUJUAN",
	"m_srcTableName" => "TEMBSICITTUJUAN"
));

$proto12["m_sql"] = "CIT_TUJUAN_MTU";
$proto12["m_srcTableName"] = "TEMBSICITTUJUAN";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_TUJUAN_NILAI",
	"m_strTable" => "TEMBSICITTUJUAN",
	"m_srcTableName" => "TEMBSICITTUJUAN"
));

$proto14["m_sql"] = "CIT_TUJUAN_NILAI";
$proto14["m_srcTableName"] = "TEMBSICITTUJUAN";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "TEMBSICITTUJUAN";
$proto17["m_srcTableName"] = "TEMBSICITTUJUAN";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "ID_CIT_TUJUAN";
$proto17["m_columns"][] = "ID_CIT";
$proto17["m_columns"][] = "CIT_TUJUAN_DESC";
$proto17["m_columns"][] = "CIT_TUJUAN_MTU";
$proto17["m_columns"][] = "CIT_TUJUAN_NILAI";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "TEMBSICITTUJUAN";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "TEMBSICITTUJUAN";
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
$proto0["m_srcTableName"]="TEMBSICITTUJUAN";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tembsicittujuan = createSqlQuery_tembsicittujuan();


	
																												;

					

$tdatatembsicittujuan[".sqlquery"] = $queryData_tembsicittujuan;



$tdatatembsicittujuan[".hasEvents"] = false;

?>