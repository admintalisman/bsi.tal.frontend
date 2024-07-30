<?php
$tdatatembsicitasal_view = array();
$tdatatembsicitasal_view[".searchableFields"] = array();
$tdatatembsicitasal_view[".ShortName"] = "tembsicitasal_view";
$tdatatembsicitasal_view[".OwnerID"] = "";
$tdatatembsicitasal_view[".OriginalTable"] = "TEMBSICITASAL";


$tdatatembsicitasal_view[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatembsicitasal_view[".originalPagesByType"] = $tdatatembsicitasal_view[".pagesByType"];
$tdatatembsicitasal_view[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatembsicitasal_view[".originalPages"] = $tdatatembsicitasal_view[".pages"];
$tdatatembsicitasal_view[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatembsicitasal_view[".originalDefaultPages"] = $tdatatembsicitasal_view[".defaultPages"];

//	field labels
$fieldLabelstembsicitasal_view = array();
$fieldToolTipstembsicitasal_view = array();
$pageTitlestembsicitasal_view = array();
$placeHolderstembsicitasal_view = array();

if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelstembsicitasal_view["Indonesian"] = array();
	$fieldToolTipstembsicitasal_view["Indonesian"] = array();
	$placeHolderstembsicitasal_view["Indonesian"] = array();
	$pageTitlestembsicitasal_view["Indonesian"] = array();
	$fieldLabelstembsicitasal_view["Indonesian"]["ID_CIT_ASAL"] = "ID CIT ASAL";
	$fieldToolTipstembsicitasal_view["Indonesian"]["ID_CIT_ASAL"] = "";
	$placeHolderstembsicitasal_view["Indonesian"]["ID_CIT_ASAL"] = "";
	$fieldLabelstembsicitasal_view["Indonesian"]["ID_CIT"] = "ID CIT";
	$fieldToolTipstembsicitasal_view["Indonesian"]["ID_CIT"] = "";
	$placeHolderstembsicitasal_view["Indonesian"]["ID_CIT"] = "";
	$fieldLabelstembsicitasal_view["Indonesian"]["CIT_ASAL_DESC"] = "Asal";
	$fieldToolTipstembsicitasal_view["Indonesian"]["CIT_ASAL_DESC"] = "";
	$placeHolderstembsicitasal_view["Indonesian"]["CIT_ASAL_DESC"] = "";
	$fieldLabelstembsicitasal_view["Indonesian"]["CIT_ASAL_MTU"] = "MTU";
	$fieldToolTipstembsicitasal_view["Indonesian"]["CIT_ASAL_MTU"] = "";
	$placeHolderstembsicitasal_view["Indonesian"]["CIT_ASAL_MTU"] = "";
	$fieldLabelstembsicitasal_view["Indonesian"]["CIT_ASAL_NILAI"] = "Jumlah Uang";
	$fieldToolTipstembsicitasal_view["Indonesian"]["CIT_ASAL_NILAI"] = "";
	$placeHolderstembsicitasal_view["Indonesian"]["CIT_ASAL_NILAI"] = "";
	$fieldLabelstembsicitasal_view["Indonesian"]["CIT_TUJUAN_DESC"] = "Tujuan";
	$fieldToolTipstembsicitasal_view["Indonesian"]["CIT_TUJUAN_DESC"] = "";
	$placeHolderstembsicitasal_view["Indonesian"]["CIT_TUJUAN_DESC"] = "";
	$pageTitlestembsicitasal_view["Indonesian"]["list"] = "";
	if (count($fieldToolTipstembsicitasal_view["Indonesian"]))
		$tdatatembsicitasal_view[".isUseToolTips"] = true;
}


	$tdatatembsicitasal_view[".NCSearch"] = true;



$tdatatembsicitasal_view[".shortTableName"] = "tembsicitasal_view";
$tdatatembsicitasal_view[".nSecOptions"] = 0;

$tdatatembsicitasal_view[".mainTableOwnerID"] = "";
$tdatatembsicitasal_view[".entityType"] = 1;
$tdatatembsicitasal_view[".connId"] = "u736239518_btn_at_154_41_241_2";


$tdatatembsicitasal_view[".strOriginalTableName"] = "TEMBSICITASAL";

	



$tdatatembsicitasal_view[".showAddInPopup"] = false;

$tdatatembsicitasal_view[".showEditInPopup"] = false;

$tdatatembsicitasal_view[".showViewInPopup"] = false;

$tdatatembsicitasal_view[".listAjax"] = false;
//	temporary
//$tdatatembsicitasal_view[".listAjax"] = false;

	$tdatatembsicitasal_view[".audit"] = false;

	$tdatatembsicitasal_view[".locking"] = false;


$pages = $tdatatembsicitasal_view[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatembsicitasal_view[".edit"] = true;
	$tdatatembsicitasal_view[".afterEditAction"] = 1;
	$tdatatembsicitasal_view[".closePopupAfterEdit"] = 1;
	$tdatatembsicitasal_view[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatembsicitasal_view[".add"] = true;
$tdatatembsicitasal_view[".afterAddAction"] = 1;
$tdatatembsicitasal_view[".closePopupAfterAdd"] = 1;
$tdatatembsicitasal_view[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatembsicitasal_view[".list"] = true;
}



$tdatatembsicitasal_view[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatembsicitasal_view[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatembsicitasal_view[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatembsicitasal_view[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatembsicitasal_view[".printFriendly"] = true;
}



$tdatatembsicitasal_view[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatembsicitasal_view[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatembsicitasal_view[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatembsicitasal_view[".isUseAjaxSuggest"] = true;



																																																																																	

$tdatatembsicitasal_view[".ajaxCodeSnippetAdded"] = false;

$tdatatembsicitasal_view[".buttonsAdded"] = false;

$tdatatembsicitasal_view[".addPageEvents"] = true;

// use timepicker for search panel
$tdatatembsicitasal_view[".isUseTimeForSearch"] = false;


$tdatatembsicitasal_view[".badgeColor"] = "d2691e";


$tdatatembsicitasal_view[".allSearchFields"] = array();
$tdatatembsicitasal_view[".filterFields"] = array();
$tdatatembsicitasal_view[".requiredSearchFields"] = array();

$tdatatembsicitasal_view[".googleLikeFields"] = array();
$tdatatembsicitasal_view[".googleLikeFields"][] = "ID_CIT_ASAL";
$tdatatembsicitasal_view[".googleLikeFields"][] = "ID_CIT";
$tdatatembsicitasal_view[".googleLikeFields"][] = "CIT_ASAL_DESC";
$tdatatembsicitasal_view[".googleLikeFields"][] = "CIT_ASAL_MTU";
$tdatatembsicitasal_view[".googleLikeFields"][] = "CIT_ASAL_NILAI";
$tdatatembsicitasal_view[".googleLikeFields"][] = "CIT_TUJUAN_DESC";



$tdatatembsicitasal_view[".tableType"] = "list";

$tdatatembsicitasal_view[".printerPageOrientation"] = 0;
$tdatatembsicitasal_view[".nPrinterPageScale"] = 100;

$tdatatembsicitasal_view[".nPrinterSplitRecords"] = 40;

$tdatatembsicitasal_view[".geocodingEnabled"] = false;










$tdatatembsicitasal_view[".pageSize"] = 20;

$tdatatembsicitasal_view[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatembsicitasal_view[".strOrderBy"] = $tstrOrderBy;

$tdatatembsicitasal_view[".orderindexes"] = array();


$tdatatembsicitasal_view[".sqlHead"] = "SELECT ID_CIT_ASAL,  	ID_CIT,  	CIT_ASAL_DESC,  	CIT_ASAL_MTU,  	CIT_ASAL_NILAI,  	CIT_TUJUAN_DESC";
$tdatatembsicitasal_view[".sqlFrom"] = "FROM TEMBSICITASAL";
$tdatatembsicitasal_view[".sqlWhereExpr"] = "";
$tdatatembsicitasal_view[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatembsicitasal_view[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatembsicitasal_view[".arrGroupsPerPage"] = $arrGPP;

$tdatatembsicitasal_view[".highlightSearchResults"] = true;

$tableKeystembsicitasal_view = array();
$tableKeystembsicitasal_view[] = "ID_CIT_ASAL";
$tdatatembsicitasal_view[".Keys"] = $tableKeystembsicitasal_view;


$tdatatembsicitasal_view[".hideMobileList"] = array();




//	ID_CIT_ASAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID_CIT_ASAL";
	$fdata["GoodName"] = "ID_CIT_ASAL";
	$fdata["ownerTable"] = "TEMBSICITASAL";
	$fdata["Label"] = GetFieldLabel("TEMBSICITASAL_view","ID_CIT_ASAL");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ID_CIT_ASAL";

		$fdata["sourceSingle"] = "ID_CIT_ASAL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID_CIT_ASAL";

	
	
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


	$tdatatembsicitasal_view["ID_CIT_ASAL"] = $fdata;
		$tdatatembsicitasal_view[".searchableFields"][] = "ID_CIT_ASAL";
//	ID_CIT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ID_CIT";
	$fdata["GoodName"] = "ID_CIT";
	$fdata["ownerTable"] = "TEMBSICITASAL";
	$fdata["Label"] = GetFieldLabel("TEMBSICITASAL_view","ID_CIT");
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


	$tdatatembsicitasal_view["ID_CIT"] = $fdata;
		$tdatatembsicitasal_view[".searchableFields"][] = "ID_CIT";
//	CIT_ASAL_DESC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CIT_ASAL_DESC";
	$fdata["GoodName"] = "CIT_ASAL_DESC";
	$fdata["ownerTable"] = "TEMBSICITASAL";
	$fdata["Label"] = GetFieldLabel("TEMBSICITASAL_view","CIT_ASAL_DESC");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CIT_ASAL_DESC";

		$fdata["sourceSingle"] = "CIT_ASAL_DESC";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CIT_ASAL_DESC";

	
	
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


	$tdatatembsicitasal_view["CIT_ASAL_DESC"] = $fdata;
		$tdatatembsicitasal_view[".searchableFields"][] = "CIT_ASAL_DESC";
//	CIT_ASAL_MTU
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "CIT_ASAL_MTU";
	$fdata["GoodName"] = "CIT_ASAL_MTU";
	$fdata["ownerTable"] = "TEMBSICITASAL";
	$fdata["Label"] = GetFieldLabel("TEMBSICITASAL_view","CIT_ASAL_MTU");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CIT_ASAL_MTU";

		$fdata["sourceSingle"] = "CIT_ASAL_MTU";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CIT_ASAL_MTU";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdatatembsicitasal_view["CIT_ASAL_MTU"] = $fdata;
		$tdatatembsicitasal_view[".searchableFields"][] = "CIT_ASAL_MTU";
//	CIT_ASAL_NILAI
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "CIT_ASAL_NILAI";
	$fdata["GoodName"] = "CIT_ASAL_NILAI";
	$fdata["ownerTable"] = "TEMBSICITASAL";
	$fdata["Label"] = GetFieldLabel("TEMBSICITASAL_view","CIT_ASAL_NILAI");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "CIT_ASAL_NILAI";

		$fdata["sourceSingle"] = "CIT_ASAL_NILAI";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CIT_ASAL_NILAI";

	
	
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


	$tdatatembsicitasal_view["CIT_ASAL_NILAI"] = $fdata;
		$tdatatembsicitasal_view[".searchableFields"][] = "CIT_ASAL_NILAI";
//	CIT_TUJUAN_DESC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "CIT_TUJUAN_DESC";
	$fdata["GoodName"] = "CIT_TUJUAN_DESC";
	$fdata["ownerTable"] = "TEMBSICITASAL";
	$fdata["Label"] = GetFieldLabel("TEMBSICITASAL_view","CIT_TUJUAN_DESC");
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


	$tdatatembsicitasal_view["CIT_TUJUAN_DESC"] = $fdata;
		$tdatatembsicitasal_view[".searchableFields"][] = "CIT_TUJUAN_DESC";


$tables_data["TEMBSICITASAL_view"]=&$tdatatembsicitasal_view;
$field_labels["TEMBSICITASAL_view"] = &$fieldLabelstembsicitasal_view;
$fieldToolTips["TEMBSICITASAL_view"] = &$fieldToolTipstembsicitasal_view;
$placeHolders["TEMBSICITASAL_view"] = &$placeHolderstembsicitasal_view;
$page_titles["TEMBSICITASAL_view"] = &$pageTitlestembsicitasal_view;


changeTextControlsToDate( "TEMBSICITASAL_view" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["TEMBSICITASAL_view"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["TEMBSICITASAL_view"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="TEMPBSICIT";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="TEMPBSICIT_CIT";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tempbsicit_cit";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["TEMBSICITASAL_view"][0] = $masterParams;
				$masterTablesData["TEMBSICITASAL_view"][0]["masterKeys"] = array();
	$masterTablesData["TEMBSICITASAL_view"][0]["masterKeys"][]="IDCIT";
				$masterTablesData["TEMBSICITASAL_view"][0]["detailKeys"] = array();
	$masterTablesData["TEMBSICITASAL_view"][0]["detailKeys"][]="ID_CIT";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="TEMPBSICIT";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="TEMPBSICIT_COLL";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tempbsicit_coll";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["TEMBSICITASAL_view"][1] = $masterParams;
				$masterTablesData["TEMBSICITASAL_view"][1]["masterKeys"] = array();
	$masterTablesData["TEMBSICITASAL_view"][1]["masterKeys"][]="IDCIT";
				$masterTablesData["TEMBSICITASAL_view"][1]["detailKeys"] = array();
	$masterTablesData["TEMBSICITASAL_view"][1]["detailKeys"][]="ID_CIT";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tembsicitasal_view()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID_CIT_ASAL,  	ID_CIT,  	CIT_ASAL_DESC,  	CIT_ASAL_MTU,  	CIT_ASAL_NILAI,  	CIT_TUJUAN_DESC";
$proto0["m_strFrom"] = "FROM TEMBSICITASAL";
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
	"m_strName" => "ID_CIT_ASAL",
	"m_strTable" => "TEMBSICITASAL",
	"m_srcTableName" => "TEMBSICITASAL_view"
));

$proto6["m_sql"] = "ID_CIT_ASAL";
$proto6["m_srcTableName"] = "TEMBSICITASAL_view";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ID_CIT",
	"m_strTable" => "TEMBSICITASAL",
	"m_srcTableName" => "TEMBSICITASAL_view"
));

$proto8["m_sql"] = "ID_CIT";
$proto8["m_srcTableName"] = "TEMBSICITASAL_view";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_ASAL_DESC",
	"m_strTable" => "TEMBSICITASAL",
	"m_srcTableName" => "TEMBSICITASAL_view"
));

$proto10["m_sql"] = "CIT_ASAL_DESC";
$proto10["m_srcTableName"] = "TEMBSICITASAL_view";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_ASAL_MTU",
	"m_strTable" => "TEMBSICITASAL",
	"m_srcTableName" => "TEMBSICITASAL_view"
));

$proto12["m_sql"] = "CIT_ASAL_MTU";
$proto12["m_srcTableName"] = "TEMBSICITASAL_view";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_ASAL_NILAI",
	"m_strTable" => "TEMBSICITASAL",
	"m_srcTableName" => "TEMBSICITASAL_view"
));

$proto14["m_sql"] = "CIT_ASAL_NILAI";
$proto14["m_srcTableName"] = "TEMBSICITASAL_view";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_TUJUAN_DESC",
	"m_strTable" => "TEMBSICITASAL",
	"m_srcTableName" => "TEMBSICITASAL_view"
));

$proto16["m_sql"] = "CIT_TUJUAN_DESC";
$proto16["m_srcTableName"] = "TEMBSICITASAL_view";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "TEMBSICITASAL";
$proto19["m_srcTableName"] = "TEMBSICITASAL_view";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "ID_CIT_ASAL";
$proto19["m_columns"][] = "ID_CIT";
$proto19["m_columns"][] = "CIT_ASAL_DESC";
$proto19["m_columns"][] = "CIT_ASAL_MTU";
$proto19["m_columns"][] = "CIT_ASAL_NILAI";
$proto19["m_columns"][] = "CIT_TUJUAN_DESC";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "TEMBSICITASAL";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "TEMBSICITASAL_view";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="TEMBSICITASAL_view";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tembsicitasal_view = createSqlQuery_tembsicitasal_view();


	
																												;

						

$tdatatembsicitasal_view[".sqlquery"] = $queryData_tembsicitasal_view;



include_once(getabspath("include/tembsicitasal_view_events.php"));
$tdatatembsicitasal_view[".hasEvents"] = true;

?>