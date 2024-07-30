<?php
$tdatatotal_premi_si = array();
$tdatatotal_premi_si[".searchableFields"] = array();
$tdatatotal_premi_si[".ShortName"] = "total_premi_si";
$tdatatotal_premi_si[".OwnerID"] = "";
$tdatatotal_premi_si[".OriginalTable"] = "TOTAL_PREMI_SI";


$tdatatotal_premi_si[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatotal_premi_si[".originalPagesByType"] = $tdatatotal_premi_si[".pagesByType"];
$tdatatotal_premi_si[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatotal_premi_si[".originalPages"] = $tdatatotal_premi_si[".pages"];
$tdatatotal_premi_si[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatotal_premi_si[".originalDefaultPages"] = $tdatatotal_premi_si[".defaultPages"];

//	field labels
$fieldLabelstotal_premi_si = array();
$fieldToolTipstotal_premi_si = array();
$pageTitlestotal_premi_si = array();
$placeHolderstotal_premi_si = array();

if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelstotal_premi_si["Indonesian"] = array();
	$fieldToolTipstotal_premi_si["Indonesian"] = array();
	$placeHolderstotal_premi_si["Indonesian"] = array();
	$pageTitlestotal_premi_si["Indonesian"] = array();
	$fieldLabelstotal_premi_si["Indonesian"]["ID"] = "ID";
	$fieldToolTipstotal_premi_si["Indonesian"]["ID"] = "";
	$placeHolderstotal_premi_si["Indonesian"]["ID"] = "";
	$fieldLabelstotal_premi_si["Indonesian"]["TAHUN"] = "TAHUN";
	$fieldToolTipstotal_premi_si["Indonesian"]["TAHUN"] = "";
	$placeHolderstotal_premi_si["Indonesian"]["TAHUN"] = "";
	$fieldLabelstotal_premi_si["Indonesian"]["BULAN"] = "BULAN";
	$fieldToolTipstotal_premi_si["Indonesian"]["BULAN"] = "";
	$placeHolderstotal_premi_si["Indonesian"]["BULAN"] = "";
	$fieldLabelstotal_premi_si["Indonesian"]["PREMI"] = "NILAI PREMI (IDR)";
	$fieldToolTipstotal_premi_si["Indonesian"]["PREMI"] = "";
	$placeHolderstotal_premi_si["Indonesian"]["PREMI"] = "";
	$fieldLabelstotal_premi_si["Indonesian"]["PERTANGGUNGAN"] = "NILAI PERTANGGUNGAN (IDR)";
	$fieldToolTipstotal_premi_si["Indonesian"]["PERTANGGUNGAN"] = "";
	$placeHolderstotal_premi_si["Indonesian"]["PERTANGGUNGAN"] = "";
	if (count($fieldToolTipstotal_premi_si["Indonesian"]))
		$tdatatotal_premi_si[".isUseToolTips"] = true;
}


	$tdatatotal_premi_si[".NCSearch"] = true;



$tdatatotal_premi_si[".shortTableName"] = "total_premi_si";
$tdatatotal_premi_si[".nSecOptions"] = 0;

$tdatatotal_premi_si[".mainTableOwnerID"] = "";
$tdatatotal_premi_si[".entityType"] = 0;
$tdatatotal_premi_si[".connId"] = "u736239518_btn_at_154_41_241_2";


$tdatatotal_premi_si[".strOriginalTableName"] = "TOTAL_PREMI_SI";

	



$tdatatotal_premi_si[".showAddInPopup"] = false;

$tdatatotal_premi_si[".showEditInPopup"] = false;

$tdatatotal_premi_si[".showViewInPopup"] = false;

$tdatatotal_premi_si[".listAjax"] = false;
//	temporary
//$tdatatotal_premi_si[".listAjax"] = false;

	$tdatatotal_premi_si[".audit"] = true;

	$tdatatotal_premi_si[".locking"] = false;


$pages = $tdatatotal_premi_si[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatotal_premi_si[".edit"] = true;
	$tdatatotal_premi_si[".afterEditAction"] = 1;
	$tdatatotal_premi_si[".closePopupAfterEdit"] = 1;
	$tdatatotal_premi_si[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatotal_premi_si[".add"] = true;
$tdatatotal_premi_si[".afterAddAction"] = 1;
$tdatatotal_premi_si[".closePopupAfterAdd"] = 1;
$tdatatotal_premi_si[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatotal_premi_si[".list"] = true;
}



$tdatatotal_premi_si[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatotal_premi_si[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatotal_premi_si[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatotal_premi_si[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatotal_premi_si[".printFriendly"] = true;
}



$tdatatotal_premi_si[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatotal_premi_si[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatotal_premi_si[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatotal_premi_si[".isUseAjaxSuggest"] = true;



																											

$tdatatotal_premi_si[".ajaxCodeSnippetAdded"] = false;

$tdatatotal_premi_si[".buttonsAdded"] = false;

$tdatatotal_premi_si[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatotal_premi_si[".isUseTimeForSearch"] = false;


$tdatatotal_premi_si[".badgeColor"] = "CD5C5C";


$tdatatotal_premi_si[".allSearchFields"] = array();
$tdatatotal_premi_si[".filterFields"] = array();
$tdatatotal_premi_si[".requiredSearchFields"] = array();

$tdatatotal_premi_si[".googleLikeFields"] = array();
$tdatatotal_premi_si[".googleLikeFields"][] = "ID";
$tdatatotal_premi_si[".googleLikeFields"][] = "TAHUN";
$tdatatotal_premi_si[".googleLikeFields"][] = "BULAN";
$tdatatotal_premi_si[".googleLikeFields"][] = "PERTANGGUNGAN";
$tdatatotal_premi_si[".googleLikeFields"][] = "PREMI";



$tdatatotal_premi_si[".tableType"] = "list";

$tdatatotal_premi_si[".printerPageOrientation"] = 0;
$tdatatotal_premi_si[".nPrinterPageScale"] = 100;

$tdatatotal_premi_si[".nPrinterSplitRecords"] = 40;

$tdatatotal_premi_si[".geocodingEnabled"] = false;










$tdatatotal_premi_si[".pageSize"] = 20;

$tdatatotal_premi_si[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatotal_premi_si[".strOrderBy"] = $tstrOrderBy;

$tdatatotal_premi_si[".orderindexes"] = array();


$tdatatotal_premi_si[".sqlHead"] = "SELECT ID,  	TAHUN,      CASE       WHEN (BULAN = 1) THEN \"Januari\"      WHEN (BULAN = 2) THEN \"Februari\"      WHEN (BULAN = 3) THEN \"Maret\"      WHEN (BULAN = 4) THEN \"April\"      WHEN (BULAN = 5) THEN \"Mei\"      WHEN (BULAN = 6) THEN \"Juni\"      WHEN (BULAN = 7) THEN \"Juli\"      WHEN (BULAN = 8) THEN \"Agustus\"      WHEN (BULAN = 9) THEN \"September\"      WHEN (BULAN = 10) THEN \"Oktober\"      WHEN (BULAN = 11) THEN \"November\"      WHEN (BULAN = 12) THEN \"Desember\"      END  	BULAN,  PERTANGGUNGAN,  	PREMI";
$tdatatotal_premi_si[".sqlFrom"] = "FROM TOTAL_PREMI_SI";
$tdatatotal_premi_si[".sqlWhereExpr"] = "";
$tdatatotal_premi_si[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatotal_premi_si[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatotal_premi_si[".arrGroupsPerPage"] = $arrGPP;

$tdatatotal_premi_si[".highlightSearchResults"] = true;

$tableKeystotal_premi_si = array();
$tableKeystotal_premi_si[] = "ID";
$tdatatotal_premi_si[".Keys"] = $tableKeystotal_premi_si;


$tdatatotal_premi_si[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "TOTAL_PREMI_SI";
	$fdata["Label"] = GetFieldLabel("TOTAL_PREMI_SI","ID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ID";

		$fdata["sourceSingle"] = "ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";

	
	
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


	$tdatatotal_premi_si["ID"] = $fdata;
		$tdatatotal_premi_si[".searchableFields"][] = "ID";
//	TAHUN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "TAHUN";
	$fdata["GoodName"] = "TAHUN";
	$fdata["ownerTable"] = "TOTAL_PREMI_SI";
	$fdata["Label"] = GetFieldLabel("TOTAL_PREMI_SI","TAHUN");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "TAHUN";

		$fdata["sourceSingle"] = "TAHUN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TAHUN";

	
	
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


	$tdatatotal_premi_si["TAHUN"] = $fdata;
		$tdatatotal_premi_si[".searchableFields"][] = "TAHUN";
//	BULAN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "BULAN";
	$fdata["GoodName"] = "BULAN";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("TOTAL_PREMI_SI","BULAN");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "BULAN";

		$fdata["sourceSingle"] = "BULAN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CASE       WHEN (BULAN = 1) THEN \"Januari\"      WHEN (BULAN = 2) THEN \"Februari\"      WHEN (BULAN = 3) THEN \"Maret\"      WHEN (BULAN = 4) THEN \"April\"      WHEN (BULAN = 5) THEN \"Mei\"      WHEN (BULAN = 6) THEN \"Juni\"      WHEN (BULAN = 7) THEN \"Juli\"      WHEN (BULAN = 8) THEN \"Agustus\"      WHEN (BULAN = 9) THEN \"September\"      WHEN (BULAN = 10) THEN \"Oktober\"      WHEN (BULAN = 11) THEN \"November\"      WHEN (BULAN = 12) THEN \"Desember\"      END";

	
	
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
			$edata["EditParams"].= " maxlength=11";

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


	$tdatatotal_premi_si["BULAN"] = $fdata;
		$tdatatotal_premi_si[".searchableFields"][] = "BULAN";
//	PERTANGGUNGAN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "PERTANGGUNGAN";
	$fdata["GoodName"] = "PERTANGGUNGAN";
	$fdata["ownerTable"] = "TOTAL_PREMI_SI";
	$fdata["Label"] = GetFieldLabel("TOTAL_PREMI_SI","PERTANGGUNGAN");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "PERTANGGUNGAN";

		$fdata["sourceSingle"] = "PERTANGGUNGAN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PERTANGGUNGAN";

	
	
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


	$tdatatotal_premi_si["PERTANGGUNGAN"] = $fdata;
		$tdatatotal_premi_si[".searchableFields"][] = "PERTANGGUNGAN";
//	PREMI
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "PREMI";
	$fdata["GoodName"] = "PREMI";
	$fdata["ownerTable"] = "TOTAL_PREMI_SI";
	$fdata["Label"] = GetFieldLabel("TOTAL_PREMI_SI","PREMI");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "PREMI";

		$fdata["sourceSingle"] = "PREMI";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PREMI";

	
	
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


	$tdatatotal_premi_si["PREMI"] = $fdata;
		$tdatatotal_premi_si[".searchableFields"][] = "PREMI";


$tables_data["TOTAL_PREMI_SI"]=&$tdatatotal_premi_si;
$field_labels["TOTAL_PREMI_SI"] = &$fieldLabelstotal_premi_si;
$fieldToolTips["TOTAL_PREMI_SI"] = &$fieldToolTipstotal_premi_si;
$placeHolders["TOTAL_PREMI_SI"] = &$placeHolderstotal_premi_si;
$page_titles["TOTAL_PREMI_SI"] = &$pageTitlestotal_premi_si;


changeTextControlsToDate( "TOTAL_PREMI_SI" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["TOTAL_PREMI_SI"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["TOTAL_PREMI_SI"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_total_premi_si()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	TAHUN,      CASE       WHEN (BULAN = 1) THEN \"Januari\"      WHEN (BULAN = 2) THEN \"Februari\"      WHEN (BULAN = 3) THEN \"Maret\"      WHEN (BULAN = 4) THEN \"April\"      WHEN (BULAN = 5) THEN \"Mei\"      WHEN (BULAN = 6) THEN \"Juni\"      WHEN (BULAN = 7) THEN \"Juli\"      WHEN (BULAN = 8) THEN \"Agustus\"      WHEN (BULAN = 9) THEN \"September\"      WHEN (BULAN = 10) THEN \"Oktober\"      WHEN (BULAN = 11) THEN \"November\"      WHEN (BULAN = 12) THEN \"Desember\"      END  	BULAN,  PERTANGGUNGAN,  	PREMI";
$proto0["m_strFrom"] = "FROM TOTAL_PREMI_SI";
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
	"m_strName" => "ID",
	"m_strTable" => "TOTAL_PREMI_SI",
	"m_srcTableName" => "TOTAL_PREMI_SI"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "TOTAL_PREMI_SI";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "TAHUN",
	"m_strTable" => "TOTAL_PREMI_SI",
	"m_srcTableName" => "TOTAL_PREMI_SI"
));

$proto8["m_sql"] = "TAHUN";
$proto8["m_srcTableName"] = "TOTAL_PREMI_SI";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "CASE       WHEN (BULAN = 1) THEN \"Januari\"      WHEN (BULAN = 2) THEN \"Februari\"      WHEN (BULAN = 3) THEN \"Maret\"      WHEN (BULAN = 4) THEN \"April\"      WHEN (BULAN = 5) THEN \"Mei\"      WHEN (BULAN = 6) THEN \"Juni\"      WHEN (BULAN = 7) THEN \"Juli\"      WHEN (BULAN = 8) THEN \"Agustus\"      WHEN (BULAN = 9) THEN \"September\"      WHEN (BULAN = 10) THEN \"Oktober\"      WHEN (BULAN = 11) THEN \"November\"      WHEN (BULAN = 12) THEN \"Desember\"      END"
));

$proto10["m_sql"] = "CASE       WHEN (BULAN = 1) THEN \"Januari\"      WHEN (BULAN = 2) THEN \"Februari\"      WHEN (BULAN = 3) THEN \"Maret\"      WHEN (BULAN = 4) THEN \"April\"      WHEN (BULAN = 5) THEN \"Mei\"      WHEN (BULAN = 6) THEN \"Juni\"      WHEN (BULAN = 7) THEN \"Juli\"      WHEN (BULAN = 8) THEN \"Agustus\"      WHEN (BULAN = 9) THEN \"September\"      WHEN (BULAN = 10) THEN \"Oktober\"      WHEN (BULAN = 11) THEN \"November\"      WHEN (BULAN = 12) THEN \"Desember\"      END";
$proto10["m_srcTableName"] = "TOTAL_PREMI_SI";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "BULAN";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "PERTANGGUNGAN",
	"m_strTable" => "TOTAL_PREMI_SI",
	"m_srcTableName" => "TOTAL_PREMI_SI"
));

$proto12["m_sql"] = "PERTANGGUNGAN";
$proto12["m_srcTableName"] = "TOTAL_PREMI_SI";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "PREMI",
	"m_strTable" => "TOTAL_PREMI_SI",
	"m_srcTableName" => "TOTAL_PREMI_SI"
));

$proto14["m_sql"] = "PREMI";
$proto14["m_srcTableName"] = "TOTAL_PREMI_SI";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "TOTAL_PREMI_SI";
$proto17["m_srcTableName"] = "TOTAL_PREMI_SI";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "ID";
$proto17["m_columns"][] = "TAHUN";
$proto17["m_columns"][] = "BULAN";
$proto17["m_columns"][] = "PREMI";
$proto17["m_columns"][] = "PERTANGGUNGAN";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "TOTAL_PREMI_SI";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "TOTAL_PREMI_SI";
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
$proto0["m_srcTableName"]="TOTAL_PREMI_SI";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_total_premi_si = createSqlQuery_total_premi_si();


	
																												;

					

$tdatatotal_premi_si[".sqlquery"] = $queryData_total_premi_si;



$tdatatotal_premi_si[".hasEvents"] = false;

?>