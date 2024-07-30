<?php
$tdatatembsicitasal = array();
$tdatatembsicitasal[".searchableFields"] = array();
$tdatatembsicitasal[".ShortName"] = "tembsicitasal";
$tdatatembsicitasal[".OwnerID"] = "";
$tdatatembsicitasal[".OriginalTable"] = "TEMBSICITASAL";


$tdatatembsicitasal[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatembsicitasal[".originalPagesByType"] = $tdatatembsicitasal[".pagesByType"];
$tdatatembsicitasal[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatembsicitasal[".originalPages"] = $tdatatembsicitasal[".pages"];
$tdatatembsicitasal[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatembsicitasal[".originalDefaultPages"] = $tdatatembsicitasal[".defaultPages"];

//	field labels
$fieldLabelstembsicitasal = array();
$fieldToolTipstembsicitasal = array();
$pageTitlestembsicitasal = array();
$placeHolderstembsicitasal = array();

if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelstembsicitasal["Indonesian"] = array();
	$fieldToolTipstembsicitasal["Indonesian"] = array();
	$placeHolderstembsicitasal["Indonesian"] = array();
	$pageTitlestembsicitasal["Indonesian"] = array();
	$fieldLabelstembsicitasal["Indonesian"]["ID_CIT_ASAL"] = "ID CIT ASAL";
	$fieldToolTipstembsicitasal["Indonesian"]["ID_CIT_ASAL"] = "";
	$placeHolderstembsicitasal["Indonesian"]["ID_CIT_ASAL"] = "";
	$fieldLabelstembsicitasal["Indonesian"]["ID_CIT"] = "ID CIT";
	$fieldToolTipstembsicitasal["Indonesian"]["ID_CIT"] = "";
	$placeHolderstembsicitasal["Indonesian"]["ID_CIT"] = "";
	$fieldLabelstembsicitasal["Indonesian"]["CIT_ASAL_DESC"] = "Asal";
	$fieldToolTipstembsicitasal["Indonesian"]["CIT_ASAL_DESC"] = "";
	$placeHolderstembsicitasal["Indonesian"]["CIT_ASAL_DESC"] = "";
	$fieldLabelstembsicitasal["Indonesian"]["CIT_ASAL_MTU"] = "MTU";
	$fieldToolTipstembsicitasal["Indonesian"]["CIT_ASAL_MTU"] = "";
	$placeHolderstembsicitasal["Indonesian"]["CIT_ASAL_MTU"] = "";
	$fieldLabelstembsicitasal["Indonesian"]["CIT_ASAL_NILAI"] = "Jumlah Uang";
	$fieldToolTipstembsicitasal["Indonesian"]["CIT_ASAL_NILAI"] = "";
	$placeHolderstembsicitasal["Indonesian"]["CIT_ASAL_NILAI"] = "";
	$fieldLabelstembsicitasal["Indonesian"]["CIT_TUJUAN_DESC"] = "Tujuan";
	$fieldToolTipstembsicitasal["Indonesian"]["CIT_TUJUAN_DESC"] = "";
	$placeHolderstembsicitasal["Indonesian"]["CIT_TUJUAN_DESC"] = "";
	$pageTitlestembsicitasal["Indonesian"]["list"] = "";
	if (count($fieldToolTipstembsicitasal["Indonesian"]))
		$tdatatembsicitasal[".isUseToolTips"] = true;
}


	$tdatatembsicitasal[".NCSearch"] = true;



$tdatatembsicitasal[".shortTableName"] = "tembsicitasal";
$tdatatembsicitasal[".nSecOptions"] = 0;

$tdatatembsicitasal[".mainTableOwnerID"] = "";
$tdatatembsicitasal[".entityType"] = 0;
$tdatatembsicitasal[".connId"] = "u736239518_btn_at_154_41_241_2";


$tdatatembsicitasal[".strOriginalTableName"] = "TEMBSICITASAL";

	



$tdatatembsicitasal[".showAddInPopup"] = false;

$tdatatembsicitasal[".showEditInPopup"] = false;

$tdatatembsicitasal[".showViewInPopup"] = false;

$tdatatembsicitasal[".listAjax"] = false;
//	temporary
//$tdatatembsicitasal[".listAjax"] = false;

	$tdatatembsicitasal[".audit"] = true;

	$tdatatembsicitasal[".locking"] = false;


$pages = $tdatatembsicitasal[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatembsicitasal[".edit"] = true;
	$tdatatembsicitasal[".afterEditAction"] = 1;
	$tdatatembsicitasal[".closePopupAfterEdit"] = 1;
	$tdatatembsicitasal[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatembsicitasal[".add"] = true;
$tdatatembsicitasal[".afterAddAction"] = 1;
$tdatatembsicitasal[".closePopupAfterAdd"] = 1;
$tdatatembsicitasal[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatembsicitasal[".list"] = true;
}



$tdatatembsicitasal[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatembsicitasal[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatembsicitasal[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatembsicitasal[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatembsicitasal[".printFriendly"] = true;
}



$tdatatembsicitasal[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatembsicitasal[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatembsicitasal[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatembsicitasal[".isUseAjaxSuggest"] = true;



																																																						

$tdatatembsicitasal[".ajaxCodeSnippetAdded"] = false;

$tdatatembsicitasal[".buttonsAdded"] = false;

$tdatatembsicitasal[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatembsicitasal[".isUseTimeForSearch"] = false;


$tdatatembsicitasal[".badgeColor"] = "9acd32";


$tdatatembsicitasal[".allSearchFields"] = array();
$tdatatembsicitasal[".filterFields"] = array();
$tdatatembsicitasal[".requiredSearchFields"] = array();

$tdatatembsicitasal[".googleLikeFields"] = array();
$tdatatembsicitasal[".googleLikeFields"][] = "ID_CIT_ASAL";
$tdatatembsicitasal[".googleLikeFields"][] = "ID_CIT";
$tdatatembsicitasal[".googleLikeFields"][] = "CIT_ASAL_DESC";
$tdatatembsicitasal[".googleLikeFields"][] = "CIT_ASAL_MTU";
$tdatatembsicitasal[".googleLikeFields"][] = "CIT_ASAL_NILAI";
$tdatatembsicitasal[".googleLikeFields"][] = "CIT_TUJUAN_DESC";



$tdatatembsicitasal[".tableType"] = "list";

$tdatatembsicitasal[".printerPageOrientation"] = 0;
$tdatatembsicitasal[".nPrinterPageScale"] = 100;

$tdatatembsicitasal[".nPrinterSplitRecords"] = 40;

$tdatatembsicitasal[".geocodingEnabled"] = false;










$tdatatembsicitasal[".pageSize"] = 20;

$tdatatembsicitasal[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatembsicitasal[".strOrderBy"] = $tstrOrderBy;

$tdatatembsicitasal[".orderindexes"] = array();


$tdatatembsicitasal[".sqlHead"] = "SELECT ID_CIT_ASAL,  	ID_CIT,  	CIT_ASAL_DESC,  	CIT_ASAL_MTU,  	CIT_ASAL_NILAI,  	CIT_TUJUAN_DESC";
$tdatatembsicitasal[".sqlFrom"] = "FROM TEMBSICITASAL";
$tdatatembsicitasal[".sqlWhereExpr"] = "";
$tdatatembsicitasal[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatembsicitasal[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatembsicitasal[".arrGroupsPerPage"] = $arrGPP;

$tdatatembsicitasal[".highlightSearchResults"] = true;

$tableKeystembsicitasal = array();
$tableKeystembsicitasal[] = "ID_CIT_ASAL";
$tdatatembsicitasal[".Keys"] = $tableKeystembsicitasal;


$tdatatembsicitasal[".hideMobileList"] = array();




//	ID_CIT_ASAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID_CIT_ASAL";
	$fdata["GoodName"] = "ID_CIT_ASAL";
	$fdata["ownerTable"] = "TEMBSICITASAL";
	$fdata["Label"] = GetFieldLabel("TEMBSICITASAL","ID_CIT_ASAL");
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


	$tdatatembsicitasal["ID_CIT_ASAL"] = $fdata;
		$tdatatembsicitasal[".searchableFields"][] = "ID_CIT_ASAL";
//	ID_CIT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ID_CIT";
	$fdata["GoodName"] = "ID_CIT";
	$fdata["ownerTable"] = "TEMBSICITASAL";
	$fdata["Label"] = GetFieldLabel("TEMBSICITASAL","ID_CIT");
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


	$tdatatembsicitasal["ID_CIT"] = $fdata;
		$tdatatembsicitasal[".searchableFields"][] = "ID_CIT";
//	CIT_ASAL_DESC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CIT_ASAL_DESC";
	$fdata["GoodName"] = "CIT_ASAL_DESC";
	$fdata["ownerTable"] = "TEMBSICITASAL";
	$fdata["Label"] = GetFieldLabel("TEMBSICITASAL","CIT_ASAL_DESC");
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


	$tdatatembsicitasal["CIT_ASAL_DESC"] = $fdata;
		$tdatatembsicitasal[".searchableFields"][] = "CIT_ASAL_DESC";
//	CIT_ASAL_MTU
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "CIT_ASAL_MTU";
	$fdata["GoodName"] = "CIT_ASAL_MTU";
	$fdata["ownerTable"] = "TEMBSICITASAL";
	$fdata["Label"] = GetFieldLabel("TEMBSICITASAL","CIT_ASAL_MTU");
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


	$tdatatembsicitasal["CIT_ASAL_MTU"] = $fdata;
		$tdatatembsicitasal[".searchableFields"][] = "CIT_ASAL_MTU";
//	CIT_ASAL_NILAI
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "CIT_ASAL_NILAI";
	$fdata["GoodName"] = "CIT_ASAL_NILAI";
	$fdata["ownerTable"] = "TEMBSICITASAL";
	$fdata["Label"] = GetFieldLabel("TEMBSICITASAL","CIT_ASAL_NILAI");
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


	$tdatatembsicitasal["CIT_ASAL_NILAI"] = $fdata;
		$tdatatembsicitasal[".searchableFields"][] = "CIT_ASAL_NILAI";
//	CIT_TUJUAN_DESC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "CIT_TUJUAN_DESC";
	$fdata["GoodName"] = "CIT_TUJUAN_DESC";
	$fdata["ownerTable"] = "TEMBSICITASAL";
	$fdata["Label"] = GetFieldLabel("TEMBSICITASAL","CIT_TUJUAN_DESC");
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


	$tdatatembsicitasal["CIT_TUJUAN_DESC"] = $fdata;
		$tdatatembsicitasal[".searchableFields"][] = "CIT_TUJUAN_DESC";


$tables_data["TEMBSICITASAL"]=&$tdatatembsicitasal;
$field_labels["TEMBSICITASAL"] = &$fieldLabelstembsicitasal;
$fieldToolTips["TEMBSICITASAL"] = &$fieldToolTipstembsicitasal;
$placeHolders["TEMBSICITASAL"] = &$placeHolderstembsicitasal;
$page_titles["TEMBSICITASAL"] = &$pageTitlestembsicitasal;


changeTextControlsToDate( "TEMBSICITASAL" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["TEMBSICITASAL"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["TEMBSICITASAL"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="TEMPBSICIT";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="TEMPBSICIT";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tempbsicit";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["TEMBSICITASAL"][0] = $masterParams;
				$masterTablesData["TEMBSICITASAL"][0]["masterKeys"] = array();
	$masterTablesData["TEMBSICITASAL"][0]["masterKeys"][]="IDCIT";
				$masterTablesData["TEMBSICITASAL"][0]["detailKeys"] = array();
	$masterTablesData["TEMBSICITASAL"][0]["detailKeys"][]="ID_CIT";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tembsicitasal()
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
	"m_srcTableName" => "TEMBSICITASAL"
));

$proto6["m_sql"] = "ID_CIT_ASAL";
$proto6["m_srcTableName"] = "TEMBSICITASAL";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ID_CIT",
	"m_strTable" => "TEMBSICITASAL",
	"m_srcTableName" => "TEMBSICITASAL"
));

$proto8["m_sql"] = "ID_CIT";
$proto8["m_srcTableName"] = "TEMBSICITASAL";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_ASAL_DESC",
	"m_strTable" => "TEMBSICITASAL",
	"m_srcTableName" => "TEMBSICITASAL"
));

$proto10["m_sql"] = "CIT_ASAL_DESC";
$proto10["m_srcTableName"] = "TEMBSICITASAL";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_ASAL_MTU",
	"m_strTable" => "TEMBSICITASAL",
	"m_srcTableName" => "TEMBSICITASAL"
));

$proto12["m_sql"] = "CIT_ASAL_MTU";
$proto12["m_srcTableName"] = "TEMBSICITASAL";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_ASAL_NILAI",
	"m_strTable" => "TEMBSICITASAL",
	"m_srcTableName" => "TEMBSICITASAL"
));

$proto14["m_sql"] = "CIT_ASAL_NILAI";
$proto14["m_srcTableName"] = "TEMBSICITASAL";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_TUJUAN_DESC",
	"m_strTable" => "TEMBSICITASAL",
	"m_srcTableName" => "TEMBSICITASAL"
));

$proto16["m_sql"] = "CIT_TUJUAN_DESC";
$proto16["m_srcTableName"] = "TEMBSICITASAL";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "TEMBSICITASAL";
$proto19["m_srcTableName"] = "TEMBSICITASAL";
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
$proto18["m_srcTableName"] = "TEMBSICITASAL";
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
$proto0["m_srcTableName"]="TEMBSICITASAL";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tembsicitasal = createSqlQuery_tembsicitasal();


	
																												;

						

$tdatatembsicitasal[".sqlquery"] = $queryData_tembsicitasal;



include_once(getabspath("include/tembsicitasal_events.php"));
$tdatatembsicitasal[".hasEvents"] = true;

?>