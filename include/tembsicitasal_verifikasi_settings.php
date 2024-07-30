<?php
$tdatatembsicitasal_verifikasi = array();
$tdatatembsicitasal_verifikasi[".searchableFields"] = array();
$tdatatembsicitasal_verifikasi[".ShortName"] = "tembsicitasal_verifikasi";
$tdatatembsicitasal_verifikasi[".OwnerID"] = "";
$tdatatembsicitasal_verifikasi[".OriginalTable"] = "TEMBSICITASAL";


$tdatatembsicitasal_verifikasi[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatatembsicitasal_verifikasi[".originalPagesByType"] = $tdatatembsicitasal_verifikasi[".pagesByType"];
$tdatatembsicitasal_verifikasi[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatatembsicitasal_verifikasi[".originalPages"] = $tdatatembsicitasal_verifikasi[".pages"];
$tdatatembsicitasal_verifikasi[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatatembsicitasal_verifikasi[".originalDefaultPages"] = $tdatatembsicitasal_verifikasi[".defaultPages"];

//	field labels
$fieldLabelstembsicitasal_verifikasi = array();
$fieldToolTipstembsicitasal_verifikasi = array();
$pageTitlestembsicitasal_verifikasi = array();
$placeHolderstembsicitasal_verifikasi = array();

if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelstembsicitasal_verifikasi["Indonesian"] = array();
	$fieldToolTipstembsicitasal_verifikasi["Indonesian"] = array();
	$placeHolderstembsicitasal_verifikasi["Indonesian"] = array();
	$pageTitlestembsicitasal_verifikasi["Indonesian"] = array();
	$fieldLabelstembsicitasal_verifikasi["Indonesian"]["ID_CIT_ASAL"] = "ID CIT ASAL";
	$fieldToolTipstembsicitasal_verifikasi["Indonesian"]["ID_CIT_ASAL"] = "";
	$placeHolderstembsicitasal_verifikasi["Indonesian"]["ID_CIT_ASAL"] = "";
	$fieldLabelstembsicitasal_verifikasi["Indonesian"]["ID_CIT"] = "ID CIT";
	$fieldToolTipstembsicitasal_verifikasi["Indonesian"]["ID_CIT"] = "";
	$placeHolderstembsicitasal_verifikasi["Indonesian"]["ID_CIT"] = "";
	$fieldLabelstembsicitasal_verifikasi["Indonesian"]["CIT_ASAL_DESC"] = "Asal";
	$fieldToolTipstembsicitasal_verifikasi["Indonesian"]["CIT_ASAL_DESC"] = "";
	$placeHolderstembsicitasal_verifikasi["Indonesian"]["CIT_ASAL_DESC"] = "";
	$fieldLabelstembsicitasal_verifikasi["Indonesian"]["CIT_ASAL_MTU"] = "MTU";
	$fieldToolTipstembsicitasal_verifikasi["Indonesian"]["CIT_ASAL_MTU"] = "";
	$placeHolderstembsicitasal_verifikasi["Indonesian"]["CIT_ASAL_MTU"] = "";
	$fieldLabelstembsicitasal_verifikasi["Indonesian"]["CIT_ASAL_NILAI"] = "Jumlah Uang";
	$fieldToolTipstembsicitasal_verifikasi["Indonesian"]["CIT_ASAL_NILAI"] = "";
	$placeHolderstembsicitasal_verifikasi["Indonesian"]["CIT_ASAL_NILAI"] = "";
	$fieldLabelstembsicitasal_verifikasi["Indonesian"]["CIT_TUJUAN_DESC"] = "Tujuan";
	$fieldToolTipstembsicitasal_verifikasi["Indonesian"]["CIT_TUJUAN_DESC"] = "";
	$placeHolderstembsicitasal_verifikasi["Indonesian"]["CIT_TUJUAN_DESC"] = "";
	$pageTitlestembsicitasal_verifikasi["Indonesian"]["list"] = "";
	if (count($fieldToolTipstembsicitasal_verifikasi["Indonesian"]))
		$tdatatembsicitasal_verifikasi[".isUseToolTips"] = true;
}


	$tdatatembsicitasal_verifikasi[".NCSearch"] = true;



$tdatatembsicitasal_verifikasi[".shortTableName"] = "tembsicitasal_verifikasi";
$tdatatembsicitasal_verifikasi[".nSecOptions"] = 0;

$tdatatembsicitasal_verifikasi[".mainTableOwnerID"] = "";
$tdatatembsicitasal_verifikasi[".entityType"] = 1;
$tdatatembsicitasal_verifikasi[".connId"] = "u736239518_btn_at_154_41_241_2";


$tdatatembsicitasal_verifikasi[".strOriginalTableName"] = "TEMBSICITASAL";

	



$tdatatembsicitasal_verifikasi[".showAddInPopup"] = false;

$tdatatembsicitasal_verifikasi[".showEditInPopup"] = false;

$tdatatembsicitasal_verifikasi[".showViewInPopup"] = false;

$tdatatembsicitasal_verifikasi[".listAjax"] = false;
//	temporary
//$tdatatembsicitasal_verifikasi[".listAjax"] = false;

	$tdatatembsicitasal_verifikasi[".audit"] = false;

	$tdatatembsicitasal_verifikasi[".locking"] = false;


$pages = $tdatatembsicitasal_verifikasi[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatembsicitasal_verifikasi[".edit"] = true;
	$tdatatembsicitasal_verifikasi[".afterEditAction"] = 1;
	$tdatatembsicitasal_verifikasi[".closePopupAfterEdit"] = 1;
	$tdatatembsicitasal_verifikasi[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatembsicitasal_verifikasi[".add"] = true;
$tdatatembsicitasal_verifikasi[".afterAddAction"] = 1;
$tdatatembsicitasal_verifikasi[".closePopupAfterAdd"] = 1;
$tdatatembsicitasal_verifikasi[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatembsicitasal_verifikasi[".list"] = true;
}



$tdatatembsicitasal_verifikasi[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatembsicitasal_verifikasi[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatembsicitasal_verifikasi[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatembsicitasal_verifikasi[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatembsicitasal_verifikasi[".printFriendly"] = true;
}



$tdatatembsicitasal_verifikasi[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatembsicitasal_verifikasi[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatembsicitasal_verifikasi[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatembsicitasal_verifikasi[".isUseAjaxSuggest"] = true;



																																																						

$tdatatembsicitasal_verifikasi[".ajaxCodeSnippetAdded"] = false;

$tdatatembsicitasal_verifikasi[".buttonsAdded"] = false;

$tdatatembsicitasal_verifikasi[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatembsicitasal_verifikasi[".isUseTimeForSearch"] = false;


$tdatatembsicitasal_verifikasi[".badgeColor"] = "1e90ff";


$tdatatembsicitasal_verifikasi[".allSearchFields"] = array();
$tdatatembsicitasal_verifikasi[".filterFields"] = array();
$tdatatembsicitasal_verifikasi[".requiredSearchFields"] = array();

$tdatatembsicitasal_verifikasi[".googleLikeFields"] = array();
$tdatatembsicitasal_verifikasi[".googleLikeFields"][] = "ID_CIT_ASAL";
$tdatatembsicitasal_verifikasi[".googleLikeFields"][] = "ID_CIT";
$tdatatembsicitasal_verifikasi[".googleLikeFields"][] = "CIT_ASAL_DESC";
$tdatatembsicitasal_verifikasi[".googleLikeFields"][] = "CIT_ASAL_MTU";
$tdatatembsicitasal_verifikasi[".googleLikeFields"][] = "CIT_ASAL_NILAI";
$tdatatembsicitasal_verifikasi[".googleLikeFields"][] = "CIT_TUJUAN_DESC";



$tdatatembsicitasal_verifikasi[".tableType"] = "list";

$tdatatembsicitasal_verifikasi[".printerPageOrientation"] = 0;
$tdatatembsicitasal_verifikasi[".nPrinterPageScale"] = 100;

$tdatatembsicitasal_verifikasi[".nPrinterSplitRecords"] = 40;

$tdatatembsicitasal_verifikasi[".geocodingEnabled"] = false;




$tdatatembsicitasal_verifikasi[".isDisplayLoading"] = true;






$tdatatembsicitasal_verifikasi[".pageSize"] = 20;

$tdatatembsicitasal_verifikasi[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatembsicitasal_verifikasi[".strOrderBy"] = $tstrOrderBy;

$tdatatembsicitasal_verifikasi[".orderindexes"] = array();


$tdatatembsicitasal_verifikasi[".sqlHead"] = "SELECT ID_CIT_ASAL,  	ID_CIT,  	CIT_ASAL_DESC,  	CIT_ASAL_MTU,  	CIT_ASAL_NILAI,  	CIT_TUJUAN_DESC";
$tdatatembsicitasal_verifikasi[".sqlFrom"] = "FROM TEMBSICITASAL";
$tdatatembsicitasal_verifikasi[".sqlWhereExpr"] = "";
$tdatatembsicitasal_verifikasi[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatembsicitasal_verifikasi[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatembsicitasal_verifikasi[".arrGroupsPerPage"] = $arrGPP;

$tdatatembsicitasal_verifikasi[".highlightSearchResults"] = true;

$tableKeystembsicitasal_verifikasi = array();
$tableKeystembsicitasal_verifikasi[] = "ID_CIT_ASAL";
$tdatatembsicitasal_verifikasi[".Keys"] = $tableKeystembsicitasal_verifikasi;


$tdatatembsicitasal_verifikasi[".hideMobileList"] = array();




//	ID_CIT_ASAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID_CIT_ASAL";
	$fdata["GoodName"] = "ID_CIT_ASAL";
	$fdata["ownerTable"] = "TEMBSICITASAL";
	$fdata["Label"] = GetFieldLabel("TEMBSICITASAL_verifikasi","ID_CIT_ASAL");
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


	$tdatatembsicitasal_verifikasi["ID_CIT_ASAL"] = $fdata;
		$tdatatembsicitasal_verifikasi[".searchableFields"][] = "ID_CIT_ASAL";
//	ID_CIT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ID_CIT";
	$fdata["GoodName"] = "ID_CIT";
	$fdata["ownerTable"] = "TEMBSICITASAL";
	$fdata["Label"] = GetFieldLabel("TEMBSICITASAL_verifikasi","ID_CIT");
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


	$tdatatembsicitasal_verifikasi["ID_CIT"] = $fdata;
		$tdatatembsicitasal_verifikasi[".searchableFields"][] = "ID_CIT";
//	CIT_ASAL_DESC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CIT_ASAL_DESC";
	$fdata["GoodName"] = "CIT_ASAL_DESC";
	$fdata["ownerTable"] = "TEMBSICITASAL";
	$fdata["Label"] = GetFieldLabel("TEMBSICITASAL_verifikasi","CIT_ASAL_DESC");
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


	$tdatatembsicitasal_verifikasi["CIT_ASAL_DESC"] = $fdata;
		$tdatatembsicitasal_verifikasi[".searchableFields"][] = "CIT_ASAL_DESC";
//	CIT_ASAL_MTU
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "CIT_ASAL_MTU";
	$fdata["GoodName"] = "CIT_ASAL_MTU";
	$fdata["ownerTable"] = "TEMBSICITASAL";
	$fdata["Label"] = GetFieldLabel("TEMBSICITASAL_verifikasi","CIT_ASAL_MTU");
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


	$tdatatembsicitasal_verifikasi["CIT_ASAL_MTU"] = $fdata;
		$tdatatembsicitasal_verifikasi[".searchableFields"][] = "CIT_ASAL_MTU";
//	CIT_ASAL_NILAI
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "CIT_ASAL_NILAI";
	$fdata["GoodName"] = "CIT_ASAL_NILAI";
	$fdata["ownerTable"] = "TEMBSICITASAL";
	$fdata["Label"] = GetFieldLabel("TEMBSICITASAL_verifikasi","CIT_ASAL_NILAI");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "CIT_ASAL_NILAI";

		$fdata["sourceSingle"] = "CIT_ASAL_NILAI";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CIT_ASAL_NILAI";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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


	$tdatatembsicitasal_verifikasi["CIT_ASAL_NILAI"] = $fdata;
		$tdatatembsicitasal_verifikasi[".searchableFields"][] = "CIT_ASAL_NILAI";
//	CIT_TUJUAN_DESC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "CIT_TUJUAN_DESC";
	$fdata["GoodName"] = "CIT_TUJUAN_DESC";
	$fdata["ownerTable"] = "TEMBSICITASAL";
	$fdata["Label"] = GetFieldLabel("TEMBSICITASAL_verifikasi","CIT_TUJUAN_DESC");
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


	$tdatatembsicitasal_verifikasi["CIT_TUJUAN_DESC"] = $fdata;
		$tdatatembsicitasal_verifikasi[".searchableFields"][] = "CIT_TUJUAN_DESC";


$tables_data["TEMBSICITASAL_verifikasi"]=&$tdatatembsicitasal_verifikasi;
$field_labels["TEMBSICITASAL_verifikasi"] = &$fieldLabelstembsicitasal_verifikasi;
$fieldToolTips["TEMBSICITASAL_verifikasi"] = &$fieldToolTipstembsicitasal_verifikasi;
$placeHolders["TEMBSICITASAL_verifikasi"] = &$placeHolderstembsicitasal_verifikasi;
$page_titles["TEMBSICITASAL_verifikasi"] = &$pageTitlestembsicitasal_verifikasi;


changeTextControlsToDate( "TEMBSICITASAL_verifikasi" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["TEMBSICITASAL_verifikasi"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["TEMBSICITASAL_verifikasi"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="TEMPBSICIT";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="TEMPBSICIT_verifikasi";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tempbsicit_verifikasi";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["TEMBSICITASAL_verifikasi"][0] = $masterParams;
				$masterTablesData["TEMBSICITASAL_verifikasi"][0]["masterKeys"] = array();
	$masterTablesData["TEMBSICITASAL_verifikasi"][0]["masterKeys"][]="IDCIT";
				$masterTablesData["TEMBSICITASAL_verifikasi"][0]["detailKeys"] = array();
	$masterTablesData["TEMBSICITASAL_verifikasi"][0]["detailKeys"][]="ID_CIT";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tembsicitasal_verifikasi()
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
	"m_srcTableName" => "TEMBSICITASAL_verifikasi"
));

$proto6["m_sql"] = "ID_CIT_ASAL";
$proto6["m_srcTableName"] = "TEMBSICITASAL_verifikasi";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ID_CIT",
	"m_strTable" => "TEMBSICITASAL",
	"m_srcTableName" => "TEMBSICITASAL_verifikasi"
));

$proto8["m_sql"] = "ID_CIT";
$proto8["m_srcTableName"] = "TEMBSICITASAL_verifikasi";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_ASAL_DESC",
	"m_strTable" => "TEMBSICITASAL",
	"m_srcTableName" => "TEMBSICITASAL_verifikasi"
));

$proto10["m_sql"] = "CIT_ASAL_DESC";
$proto10["m_srcTableName"] = "TEMBSICITASAL_verifikasi";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_ASAL_MTU",
	"m_strTable" => "TEMBSICITASAL",
	"m_srcTableName" => "TEMBSICITASAL_verifikasi"
));

$proto12["m_sql"] = "CIT_ASAL_MTU";
$proto12["m_srcTableName"] = "TEMBSICITASAL_verifikasi";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_ASAL_NILAI",
	"m_strTable" => "TEMBSICITASAL",
	"m_srcTableName" => "TEMBSICITASAL_verifikasi"
));

$proto14["m_sql"] = "CIT_ASAL_NILAI";
$proto14["m_srcTableName"] = "TEMBSICITASAL_verifikasi";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_TUJUAN_DESC",
	"m_strTable" => "TEMBSICITASAL",
	"m_srcTableName" => "TEMBSICITASAL_verifikasi"
));

$proto16["m_sql"] = "CIT_TUJUAN_DESC";
$proto16["m_srcTableName"] = "TEMBSICITASAL_verifikasi";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "TEMBSICITASAL";
$proto19["m_srcTableName"] = "TEMBSICITASAL_verifikasi";
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
$proto18["m_srcTableName"] = "TEMBSICITASAL_verifikasi";
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
$proto0["m_srcTableName"]="TEMBSICITASAL_verifikasi";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tembsicitasal_verifikasi = createSqlQuery_tembsicitasal_verifikasi();


	
																												;

						

$tdatatembsicitasal_verifikasi[".sqlquery"] = $queryData_tembsicitasal_verifikasi;



$tdatatembsicitasal_verifikasi[".hasEvents"] = false;

?>