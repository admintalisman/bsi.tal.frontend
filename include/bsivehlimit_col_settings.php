<?php
$tdatabsivehlimit_col = array();
$tdatabsivehlimit_col[".searchableFields"] = array();
$tdatabsivehlimit_col[".ShortName"] = "bsivehlimit_col";
$tdatabsivehlimit_col[".OwnerID"] = "";
$tdatabsivehlimit_col[".OriginalTable"] = "BSIVEHLIMIT";


$tdatabsivehlimit_col[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatabsivehlimit_col[".originalPagesByType"] = $tdatabsivehlimit_col[".pagesByType"];
$tdatabsivehlimit_col[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatabsivehlimit_col[".originalPages"] = $tdatabsivehlimit_col[".pages"];
$tdatabsivehlimit_col[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatabsivehlimit_col[".originalDefaultPages"] = $tdatabsivehlimit_col[".defaultPages"];

//	field labels
$fieldLabelsbsivehlimit_col = array();
$fieldToolTipsbsivehlimit_col = array();
$pageTitlesbsivehlimit_col = array();
$placeHoldersbsivehlimit_col = array();

if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelsbsivehlimit_col["Indonesian"] = array();
	$fieldToolTipsbsivehlimit_col["Indonesian"] = array();
	$placeHoldersbsivehlimit_col["Indonesian"] = array();
	$pageTitlesbsivehlimit_col["Indonesian"] = array();
	$fieldLabelsbsivehlimit_col["Indonesian"]["IDBSIVEHLIMIT"] = "IDBSIVEHLIMIT";
	$fieldToolTipsbsivehlimit_col["Indonesian"]["IDBSIVEHLIMIT"] = "";
	$placeHoldersbsivehlimit_col["Indonesian"]["IDBSIVEHLIMIT"] = "";
	$fieldLabelsbsivehlimit_col["Indonesian"]["IDVEHICLE"] = "IDVEHICLE";
	$fieldToolTipsbsivehlimit_col["Indonesian"]["IDVEHICLE"] = "";
	$placeHoldersbsivehlimit_col["Indonesian"]["IDVEHICLE"] = "";
	$fieldLabelsbsivehlimit_col["Indonesian"]["IDRATE"] = "IDRATE";
	$fieldToolTipsbsivehlimit_col["Indonesian"]["IDRATE"] = "";
	$placeHoldersbsivehlimit_col["Indonesian"]["IDRATE"] = "";
	$fieldLabelsbsivehlimit_col["Indonesian"]["MODE"] = "MODE";
	$fieldToolTipsbsivehlimit_col["Indonesian"]["MODE"] = "";
	$placeHoldersbsivehlimit_col["Indonesian"]["MODE"] = "";
	$fieldLabelsbsivehlimit_col["Indonesian"]["BSIVEHICLEDESC"] = "BSIVEHICLEDESC";
	$fieldToolTipsbsivehlimit_col["Indonesian"]["BSIVEHICLEDESC"] = "";
	$placeHoldersbsivehlimit_col["Indonesian"]["BSIVEHICLEDESC"] = "";
	$fieldLabelsbsivehlimit_col["Indonesian"]["resiko_kode"] = "Resiko Kode";
	$fieldToolTipsbsivehlimit_col["Indonesian"]["resiko_kode"] = "";
	$placeHoldersbsivehlimit_col["Indonesian"]["resiko_kode"] = "";
	$fieldLabelsbsivehlimit_col["Indonesian"]["resiko_ketr"] = "Resiko Ketr";
	$fieldToolTipsbsivehlimit_col["Indonesian"]["resiko_ketr"] = "";
	$placeHoldersbsivehlimit_col["Indonesian"]["resiko_ketr"] = "";
	$fieldLabelsbsivehlimit_col["Indonesian"]["resiko_limit"] = "Resiko Limit";
	$fieldToolTipsbsivehlimit_col["Indonesian"]["resiko_limit"] = "";
	$placeHoldersbsivehlimit_col["Indonesian"]["resiko_limit"] = "";
	if (count($fieldToolTipsbsivehlimit_col["Indonesian"]))
		$tdatabsivehlimit_col[".isUseToolTips"] = true;
}


	$tdatabsivehlimit_col[".NCSearch"] = true;



$tdatabsivehlimit_col[".shortTableName"] = "bsivehlimit_col";
$tdatabsivehlimit_col[".nSecOptions"] = 0;

$tdatabsivehlimit_col[".mainTableOwnerID"] = "";
$tdatabsivehlimit_col[".entityType"] = 1;
$tdatabsivehlimit_col[".connId"] = "u736239518_btn_at_154_41_241_2";


$tdatabsivehlimit_col[".strOriginalTableName"] = "BSIVEHLIMIT";

	



$tdatabsivehlimit_col[".showAddInPopup"] = false;

$tdatabsivehlimit_col[".showEditInPopup"] = false;

$tdatabsivehlimit_col[".showViewInPopup"] = false;

$tdatabsivehlimit_col[".listAjax"] = false;
//	temporary
//$tdatabsivehlimit_col[".listAjax"] = false;

	$tdatabsivehlimit_col[".audit"] = false;

	$tdatabsivehlimit_col[".locking"] = false;


$pages = $tdatabsivehlimit_col[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabsivehlimit_col[".edit"] = true;
	$tdatabsivehlimit_col[".afterEditAction"] = 1;
	$tdatabsivehlimit_col[".closePopupAfterEdit"] = 1;
	$tdatabsivehlimit_col[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabsivehlimit_col[".add"] = true;
$tdatabsivehlimit_col[".afterAddAction"] = 1;
$tdatabsivehlimit_col[".closePopupAfterAdd"] = 1;
$tdatabsivehlimit_col[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabsivehlimit_col[".list"] = true;
}



$tdatabsivehlimit_col[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabsivehlimit_col[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabsivehlimit_col[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabsivehlimit_col[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabsivehlimit_col[".printFriendly"] = true;
}



$tdatabsivehlimit_col[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabsivehlimit_col[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabsivehlimit_col[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabsivehlimit_col[".isUseAjaxSuggest"] = true;



																											

$tdatabsivehlimit_col[".ajaxCodeSnippetAdded"] = false;

$tdatabsivehlimit_col[".buttonsAdded"] = false;

$tdatabsivehlimit_col[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabsivehlimit_col[".isUseTimeForSearch"] = false;


$tdatabsivehlimit_col[".badgeColor"] = "E67349";


$tdatabsivehlimit_col[".allSearchFields"] = array();
$tdatabsivehlimit_col[".filterFields"] = array();
$tdatabsivehlimit_col[".requiredSearchFields"] = array();

$tdatabsivehlimit_col[".googleLikeFields"] = array();
$tdatabsivehlimit_col[".googleLikeFields"][] = "IDBSIVEHLIMIT";
$tdatabsivehlimit_col[".googleLikeFields"][] = "IDVEHICLE";
$tdatabsivehlimit_col[".googleLikeFields"][] = "IDRATE";
$tdatabsivehlimit_col[".googleLikeFields"][] = "MODE";
$tdatabsivehlimit_col[".googleLikeFields"][] = "BSIVEHICLEDESC";
$tdatabsivehlimit_col[".googleLikeFields"][] = "resiko_kode";
$tdatabsivehlimit_col[".googleLikeFields"][] = "resiko_ketr";
$tdatabsivehlimit_col[".googleLikeFields"][] = "resiko_limit";



$tdatabsivehlimit_col[".tableType"] = "list";

$tdatabsivehlimit_col[".printerPageOrientation"] = 0;
$tdatabsivehlimit_col[".nPrinterPageScale"] = 100;

$tdatabsivehlimit_col[".nPrinterSplitRecords"] = 40;

$tdatabsivehlimit_col[".geocodingEnabled"] = false;










$tdatabsivehlimit_col[".pageSize"] = 20;

$tdatabsivehlimit_col[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatabsivehlimit_col[".strOrderBy"] = $tstrOrderBy;

$tdatabsivehlimit_col[".orderindexes"] = array();


$tdatabsivehlimit_col[".sqlHead"] = "SELECT BSIVEHLIMIT.IDBSIVEHLIMIT,  BSIVEHLIMIT.IDVEHICLE,  BSIVEHLIMIT.IDRATE,  BSIVEHLIMIT.`MODE` AS MODE,  BSIVEHICLE.BSIVEHICLEDESC,  M_RESIKO.resiko_kode,  M_RESIKO.resiko_ketr,  M_RESIKO.resiko_limit";
$tdatabsivehlimit_col[".sqlFrom"] = "FROM BSIVEHLIMIT  INNER JOIN BSIVEHICLE ON BSIVEHLIMIT.IDVEHICLE = BSIVEHICLE.IDBSIVEHICLE  INNER JOIN M_RESIKO ON BSIVEHLIMIT.IDRATE = M_RESIKO.resiko_id";
$tdatabsivehlimit_col[".sqlWhereExpr"] = "MODE = 'CITCOLL'";
$tdatabsivehlimit_col[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabsivehlimit_col[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabsivehlimit_col[".arrGroupsPerPage"] = $arrGPP;

$tdatabsivehlimit_col[".highlightSearchResults"] = true;

$tableKeysbsivehlimit_col = array();
$tableKeysbsivehlimit_col[] = "IDBSIVEHLIMIT";
$tdatabsivehlimit_col[".Keys"] = $tableKeysbsivehlimit_col;


$tdatabsivehlimit_col[".hideMobileList"] = array();




//	IDBSIVEHLIMIT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IDBSIVEHLIMIT";
	$fdata["GoodName"] = "IDBSIVEHLIMIT";
	$fdata["ownerTable"] = "BSIVEHLIMIT";
	$fdata["Label"] = GetFieldLabel("BSIVEHLIMIT_COL","IDBSIVEHLIMIT");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "IDBSIVEHLIMIT";

		$fdata["sourceSingle"] = "IDBSIVEHLIMIT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BSIVEHLIMIT.IDBSIVEHLIMIT";

	
	
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


	$tdatabsivehlimit_col["IDBSIVEHLIMIT"] = $fdata;
		$tdatabsivehlimit_col[".searchableFields"][] = "IDBSIVEHLIMIT";
//	IDVEHICLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "IDVEHICLE";
	$fdata["GoodName"] = "IDVEHICLE";
	$fdata["ownerTable"] = "BSIVEHLIMIT";
	$fdata["Label"] = GetFieldLabel("BSIVEHLIMIT_COL","IDVEHICLE");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "IDVEHICLE";

		$fdata["sourceSingle"] = "IDVEHICLE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BSIVEHLIMIT.IDVEHICLE";

	
	
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


	$tdatabsivehlimit_col["IDVEHICLE"] = $fdata;
		$tdatabsivehlimit_col[".searchableFields"][] = "IDVEHICLE";
//	IDRATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "IDRATE";
	$fdata["GoodName"] = "IDRATE";
	$fdata["ownerTable"] = "BSIVEHLIMIT";
	$fdata["Label"] = GetFieldLabel("BSIVEHLIMIT_COL","IDRATE");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "IDRATE";

		$fdata["sourceSingle"] = "IDRATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BSIVEHLIMIT.IDRATE";

	
	
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


	$tdatabsivehlimit_col["IDRATE"] = $fdata;
		$tdatabsivehlimit_col[".searchableFields"][] = "IDRATE";
//	MODE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "MODE";
	$fdata["GoodName"] = "MODE";
	$fdata["ownerTable"] = "BSIVEHLIMIT";
	$fdata["Label"] = GetFieldLabel("BSIVEHLIMIT_COL","MODE");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "MODE";

		$fdata["sourceSingle"] = "MODE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BSIVEHLIMIT.`MODE`";

	
	
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


	$tdatabsivehlimit_col["MODE"] = $fdata;
		$tdatabsivehlimit_col[".searchableFields"][] = "MODE";
//	BSIVEHICLEDESC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "BSIVEHICLEDESC";
	$fdata["GoodName"] = "BSIVEHICLEDESC";
	$fdata["ownerTable"] = "BSIVEHICLE";
	$fdata["Label"] = GetFieldLabel("BSIVEHLIMIT_COL","BSIVEHICLEDESC");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "BSIVEHICLEDESC";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BSIVEHICLE.BSIVEHICLEDESC";

	
	
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


	$tdatabsivehlimit_col["BSIVEHICLEDESC"] = $fdata;
		$tdatabsivehlimit_col[".searchableFields"][] = "BSIVEHICLEDESC";
//	resiko_kode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "resiko_kode";
	$fdata["GoodName"] = "resiko_kode";
	$fdata["ownerTable"] = "M_RESIKO";
	$fdata["Label"] = GetFieldLabel("BSIVEHLIMIT_COL","resiko_kode");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "resiko_kode";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "M_RESIKO.resiko_kode";

	
	
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


	$tdatabsivehlimit_col["resiko_kode"] = $fdata;
		$tdatabsivehlimit_col[".searchableFields"][] = "resiko_kode";
//	resiko_ketr
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "resiko_ketr";
	$fdata["GoodName"] = "resiko_ketr";
	$fdata["ownerTable"] = "M_RESIKO";
	$fdata["Label"] = GetFieldLabel("BSIVEHLIMIT_COL","resiko_ketr");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "resiko_ketr";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "M_RESIKO.resiko_ketr";

	
	
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


	$tdatabsivehlimit_col["resiko_ketr"] = $fdata;
		$tdatabsivehlimit_col[".searchableFields"][] = "resiko_ketr";
//	resiko_limit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "resiko_limit";
	$fdata["GoodName"] = "resiko_limit";
	$fdata["ownerTable"] = "M_RESIKO";
	$fdata["Label"] = GetFieldLabel("BSIVEHLIMIT_COL","resiko_limit");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "resiko_limit";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "M_RESIKO.resiko_limit";

	
	
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


	$tdatabsivehlimit_col["resiko_limit"] = $fdata;
		$tdatabsivehlimit_col[".searchableFields"][] = "resiko_limit";


$tables_data["BSIVEHLIMIT_COL"]=&$tdatabsivehlimit_col;
$field_labels["BSIVEHLIMIT_COL"] = &$fieldLabelsbsivehlimit_col;
$fieldToolTips["BSIVEHLIMIT_COL"] = &$fieldToolTipsbsivehlimit_col;
$placeHolders["BSIVEHLIMIT_COL"] = &$placeHoldersbsivehlimit_col;
$page_titles["BSIVEHLIMIT_COL"] = &$pageTitlesbsivehlimit_col;


changeTextControlsToDate( "BSIVEHLIMIT_COL" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["BSIVEHLIMIT_COL"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["BSIVEHLIMIT_COL"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_bsivehlimit_col()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "BSIVEHLIMIT.IDBSIVEHLIMIT,  BSIVEHLIMIT.IDVEHICLE,  BSIVEHLIMIT.IDRATE,  BSIVEHLIMIT.`MODE` AS MODE,  BSIVEHICLE.BSIVEHICLEDESC,  M_RESIKO.resiko_kode,  M_RESIKO.resiko_ketr,  M_RESIKO.resiko_limit";
$proto0["m_strFrom"] = "FROM BSIVEHLIMIT  INNER JOIN BSIVEHICLE ON BSIVEHLIMIT.IDVEHICLE = BSIVEHICLE.IDBSIVEHICLE  INNER JOIN M_RESIKO ON BSIVEHLIMIT.IDRATE = M_RESIKO.resiko_id";
$proto0["m_strWhere"] = "MODE = 'CITCOLL'";
$proto0["m_strOrderBy"] = "";
	
																												;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "MODE = 'CITCOLL'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "MODE",
	"m_strTable" => "BSIVEHLIMIT",
	"m_srcTableName" => "BSIVEHLIMIT_COL"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= 'CITCOLL'";
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
	"m_srcTableName" => "BSIVEHLIMIT_COL"
));

$proto6["m_sql"] = "BSIVEHLIMIT.IDBSIVEHLIMIT";
$proto6["m_srcTableName"] = "BSIVEHLIMIT_COL";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "IDVEHICLE",
	"m_strTable" => "BSIVEHLIMIT",
	"m_srcTableName" => "BSIVEHLIMIT_COL"
));

$proto8["m_sql"] = "BSIVEHLIMIT.IDVEHICLE";
$proto8["m_srcTableName"] = "BSIVEHLIMIT_COL";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "IDRATE",
	"m_strTable" => "BSIVEHLIMIT",
	"m_srcTableName" => "BSIVEHLIMIT_COL"
));

$proto10["m_sql"] = "BSIVEHLIMIT.IDRATE";
$proto10["m_srcTableName"] = "BSIVEHLIMIT_COL";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "MODE",
	"m_strTable" => "BSIVEHLIMIT",
	"m_srcTableName" => "BSIVEHLIMIT_COL"
));

$proto12["m_sql"] = "BSIVEHLIMIT.`MODE`";
$proto12["m_srcTableName"] = "BSIVEHLIMIT_COL";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "MODE";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "BSIVEHICLEDESC",
	"m_strTable" => "BSIVEHICLE",
	"m_srcTableName" => "BSIVEHLIMIT_COL"
));

$proto14["m_sql"] = "BSIVEHICLE.BSIVEHICLEDESC";
$proto14["m_srcTableName"] = "BSIVEHLIMIT_COL";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "resiko_kode",
	"m_strTable" => "M_RESIKO",
	"m_srcTableName" => "BSIVEHLIMIT_COL"
));

$proto16["m_sql"] = "M_RESIKO.resiko_kode";
$proto16["m_srcTableName"] = "BSIVEHLIMIT_COL";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "resiko_ketr",
	"m_strTable" => "M_RESIKO",
	"m_srcTableName" => "BSIVEHLIMIT_COL"
));

$proto18["m_sql"] = "M_RESIKO.resiko_ketr";
$proto18["m_srcTableName"] = "BSIVEHLIMIT_COL";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "resiko_limit",
	"m_strTable" => "M_RESIKO",
	"m_srcTableName" => "BSIVEHLIMIT_COL"
));

$proto20["m_sql"] = "M_RESIKO.resiko_limit";
$proto20["m_srcTableName"] = "BSIVEHLIMIT_COL";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "BSIVEHLIMIT";
$proto23["m_srcTableName"] = "BSIVEHLIMIT_COL";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "IDBSIVEHLIMIT";
$proto23["m_columns"][] = "IDVEHICLE";
$proto23["m_columns"][] = "IDRATE";
$proto23["m_columns"][] = "MODE";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "BSIVEHLIMIT";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "BSIVEHLIMIT_COL";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
												$proto26=array();
$proto26["m_link"] = "SQLL_INNERJOIN";
			$proto27=array();
$proto27["m_strName"] = "BSIVEHICLE";
$proto27["m_srcTableName"] = "BSIVEHLIMIT_COL";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "IDBSIVEHICLE";
$proto27["m_columns"][] = "BSIVEHICLEDESC";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "INNER JOIN BSIVEHICLE ON BSIVEHLIMIT.IDVEHICLE = BSIVEHICLE.IDBSIVEHICLE";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "BSIVEHLIMIT_COL";
$proto28=array();
$proto28["m_sql"] = "BSIVEHICLE.IDBSIVEHICLE = BSIVEHLIMIT.IDVEHICLE";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "IDBSIVEHICLE",
	"m_strTable" => "BSIVEHICLE",
	"m_srcTableName" => "BSIVEHLIMIT_COL"
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "= BSIVEHLIMIT.IDVEHICLE";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
												$proto30=array();
$proto30["m_link"] = "SQLL_INNERJOIN";
			$proto31=array();
$proto31["m_strName"] = "M_RESIKO";
$proto31["m_srcTableName"] = "BSIVEHLIMIT_COL";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "resiko_id";
$proto31["m_columns"][] = "resiko_kode";
$proto31["m_columns"][] = "resiko_ketr";
$proto31["m_columns"][] = "resiko_rate";
$proto31["m_columns"][] = "resiko_minRate";
$proto31["m_columns"][] = "resiko_limit";
$proto31["m_columns"][] = "resiko_cob";
$proto31["m_columns"][] = "resiko_aktif";
$proto31["m_columns"][] = "resiko_urut";
$proto31["m_columns"][] = "add_user";
$proto31["m_columns"][] = "add_date";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "INNER JOIN M_RESIKO ON BSIVEHLIMIT.IDRATE = M_RESIKO.resiko_id";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "BSIVEHLIMIT_COL";
$proto32=array();
$proto32["m_sql"] = "M_RESIKO.resiko_id = BSIVEHLIMIT.IDRATE";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "resiko_id",
	"m_strTable" => "M_RESIKO",
	"m_srcTableName" => "BSIVEHLIMIT_COL"
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "= BSIVEHLIMIT.IDRATE";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="BSIVEHLIMIT_COL";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_bsivehlimit_col = createSqlQuery_bsivehlimit_col();


	
																												;

								

$tdatabsivehlimit_col[".sqlquery"] = $queryData_bsivehlimit_col;



$tdatabsivehlimit_col[".hasEvents"] = false;

?>