<?php
$tdatasoa_cit_view1 = array();
$tdatasoa_cit_view1[".searchableFields"] = array();
$tdatasoa_cit_view1[".ShortName"] = "soa_cit_view1";
$tdatasoa_cit_view1[".OwnerID"] = "";
$tdatasoa_cit_view1[".OriginalTable"] = "TEMPBSICIT";


$tdatasoa_cit_view1[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatasoa_cit_view1[".originalPagesByType"] = $tdatasoa_cit_view1[".pagesByType"];
$tdatasoa_cit_view1[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatasoa_cit_view1[".originalPages"] = $tdatasoa_cit_view1[".pages"];
$tdatasoa_cit_view1[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatasoa_cit_view1[".originalDefaultPages"] = $tdatasoa_cit_view1[".defaultPages"];

//	field labels
$fieldLabelssoa_cit_view1 = array();
$fieldToolTipssoa_cit_view1 = array();
$pageTitlessoa_cit_view1 = array();
$placeHolderssoa_cit_view1 = array();

if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelssoa_cit_view1["Indonesian"] = array();
	$fieldToolTipssoa_cit_view1["Indonesian"] = array();
	$placeHolderssoa_cit_view1["Indonesian"] = array();
	$pageTitlessoa_cit_view1["Indonesian"] = array();
	$fieldLabelssoa_cit_view1["Indonesian"]["NOPROPOSAL"] = "NO PROPOSAL";
	$fieldToolTipssoa_cit_view1["Indonesian"]["NOPROPOSAL"] = "";
	$placeHolderssoa_cit_view1["Indonesian"]["NOPROPOSAL"] = "";
	$fieldLabelssoa_cit_view1["Indonesian"]["KODEKC"] = "KODE KC";
	$fieldToolTipssoa_cit_view1["Indonesian"]["KODEKC"] = "";
	$placeHolderssoa_cit_view1["Indonesian"]["KODEKC"] = "";
	$fieldLabelssoa_cit_view1["Indonesian"]["CABANGBANK"] = "CABANG BANK";
	$fieldToolTipssoa_cit_view1["Indonesian"]["CABANGBANK"] = "";
	$placeHolderssoa_cit_view1["Indonesian"]["CABANGBANK"] = "";
	$fieldLabelssoa_cit_view1["Indonesian"]["COB"] = "COB";
	$fieldToolTipssoa_cit_view1["Indonesian"]["COB"] = "";
	$placeHolderssoa_cit_view1["Indonesian"]["COB"] = "";
	$fieldLabelssoa_cit_view1["Indonesian"]["DIVISI"] = "DIVISI";
	$fieldToolTipssoa_cit_view1["Indonesian"]["DIVISI"] = "";
	$placeHolderssoa_cit_view1["Indonesian"]["DIVISI"] = "";
	$fieldLabelssoa_cit_view1["Indonesian"]["AWAL"] = "PERIODE AWAL";
	$fieldToolTipssoa_cit_view1["Indonesian"]["AWAL"] = "";
	$placeHolderssoa_cit_view1["Indonesian"]["AWAL"] = "";
	$fieldLabelssoa_cit_view1["Indonesian"]["AKHIR"] = "PERIODE AKHIR";
	$fieldToolTipssoa_cit_view1["Indonesian"]["AKHIR"] = "";
	$placeHolderssoa_cit_view1["Indonesian"]["AKHIR"] = "";
	$fieldLabelssoa_cit_view1["Indonesian"]["ASAL"] = "ASAL";
	$fieldToolTipssoa_cit_view1["Indonesian"]["ASAL"] = "";
	$placeHolderssoa_cit_view1["Indonesian"]["ASAL"] = "";
	$fieldLabelssoa_cit_view1["Indonesian"]["TUJUAN"] = "TUJUAN";
	$fieldToolTipssoa_cit_view1["Indonesian"]["TUJUAN"] = "";
	$placeHolderssoa_cit_view1["Indonesian"]["TUJUAN"] = "";
	$fieldLabelssoa_cit_view1["Indonesian"]["MTU"] = "MTU";
	$fieldToolTipssoa_cit_view1["Indonesian"]["MTU"] = "";
	$placeHolderssoa_cit_view1["Indonesian"]["MTU"] = "";
	$fieldLabelssoa_cit_view1["Indonesian"]["SUMINSURED"] = "SUM INSURED";
	$fieldToolTipssoa_cit_view1["Indonesian"]["SUMINSURED"] = "";
	$placeHolderssoa_cit_view1["Indonesian"]["SUMINSURED"] = "";
	$fieldLabelssoa_cit_view1["Indonesian"]["PREMI"] = "PREMI";
	$fieldToolTipssoa_cit_view1["Indonesian"]["PREMI"] = "";
	$placeHolderssoa_cit_view1["Indonesian"]["PREMI"] = "";
	$fieldLabelssoa_cit_view1["Indonesian"]["MODE"] = "MODE";
	$fieldToolTipssoa_cit_view1["Indonesian"]["MODE"] = "";
	$placeHolderssoa_cit_view1["Indonesian"]["MODE"] = "";
	$fieldLabelssoa_cit_view1["Indonesian"]["RATE"] = "RATE";
	$fieldToolTipssoa_cit_view1["Indonesian"]["RATE"] = "";
	$placeHolderssoa_cit_view1["Indonesian"]["RATE"] = "";
	if (count($fieldToolTipssoa_cit_view1["Indonesian"]))
		$tdatasoa_cit_view1[".isUseToolTips"] = true;
}


	$tdatasoa_cit_view1[".NCSearch"] = true;



$tdatasoa_cit_view1[".shortTableName"] = "soa_cit_view1";
$tdatasoa_cit_view1[".nSecOptions"] = 0;

$tdatasoa_cit_view1[".mainTableOwnerID"] = "";
$tdatasoa_cit_view1[".entityType"] = 1;
$tdatasoa_cit_view1[".connId"] = "u736239518_btn_at_154_41_241_2";


$tdatasoa_cit_view1[".strOriginalTableName"] = "TEMPBSICIT";

	



$tdatasoa_cit_view1[".showAddInPopup"] = false;

$tdatasoa_cit_view1[".showEditInPopup"] = false;

$tdatasoa_cit_view1[".showViewInPopup"] = false;

$tdatasoa_cit_view1[".listAjax"] = false;
//	temporary
//$tdatasoa_cit_view1[".listAjax"] = false;

	$tdatasoa_cit_view1[".audit"] = false;

	$tdatasoa_cit_view1[".locking"] = false;


$pages = $tdatasoa_cit_view1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasoa_cit_view1[".edit"] = true;
	$tdatasoa_cit_view1[".afterEditAction"] = 1;
	$tdatasoa_cit_view1[".closePopupAfterEdit"] = 1;
	$tdatasoa_cit_view1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasoa_cit_view1[".add"] = true;
$tdatasoa_cit_view1[".afterAddAction"] = 1;
$tdatasoa_cit_view1[".closePopupAfterAdd"] = 1;
$tdatasoa_cit_view1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasoa_cit_view1[".list"] = true;
}



$tdatasoa_cit_view1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasoa_cit_view1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasoa_cit_view1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasoa_cit_view1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasoa_cit_view1[".printFriendly"] = true;
}



$tdatasoa_cit_view1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasoa_cit_view1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasoa_cit_view1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasoa_cit_view1[".isUseAjaxSuggest"] = true;



																											

$tdatasoa_cit_view1[".ajaxCodeSnippetAdded"] = false;

$tdatasoa_cit_view1[".buttonsAdded"] = false;

$tdatasoa_cit_view1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasoa_cit_view1[".isUseTimeForSearch"] = false;


$tdatasoa_cit_view1[".badgeColor"] = "4169E1";


$tdatasoa_cit_view1[".allSearchFields"] = array();
$tdatasoa_cit_view1[".filterFields"] = array();
$tdatasoa_cit_view1[".requiredSearchFields"] = array();

$tdatasoa_cit_view1[".googleLikeFields"] = array();
$tdatasoa_cit_view1[".googleLikeFields"][] = "NOPROPOSAL";
$tdatasoa_cit_view1[".googleLikeFields"][] = "KODEKC";
$tdatasoa_cit_view1[".googleLikeFields"][] = "CABANGBANK";
$tdatasoa_cit_view1[".googleLikeFields"][] = "COB";
$tdatasoa_cit_view1[".googleLikeFields"][] = "MODE";
$tdatasoa_cit_view1[".googleLikeFields"][] = "DIVISI";
$tdatasoa_cit_view1[".googleLikeFields"][] = "AWAL";
$tdatasoa_cit_view1[".googleLikeFields"][] = "AKHIR";
$tdatasoa_cit_view1[".googleLikeFields"][] = "ASAL";
$tdatasoa_cit_view1[".googleLikeFields"][] = "TUJUAN";
$tdatasoa_cit_view1[".googleLikeFields"][] = "MTU";
$tdatasoa_cit_view1[".googleLikeFields"][] = "SUMINSURED";
$tdatasoa_cit_view1[".googleLikeFields"][] = "RATE";
$tdatasoa_cit_view1[".googleLikeFields"][] = "PREMI";



$tdatasoa_cit_view1[".tableType"] = "list";

$tdatasoa_cit_view1[".printerPageOrientation"] = 0;
$tdatasoa_cit_view1[".nPrinterPageScale"] = 100;

$tdatasoa_cit_view1[".nPrinterSplitRecords"] = 40;

$tdatasoa_cit_view1[".geocodingEnabled"] = false;




$tdatasoa_cit_view1[".isDisplayLoading"] = true;



$tdatasoa_cit_view1[".noRecordsFirstPage"] = true;



$tdatasoa_cit_view1[".pageSize"] = 20;

$tdatasoa_cit_view1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasoa_cit_view1[".strOrderBy"] = $tstrOrderBy;

$tdatasoa_cit_view1[".orderindexes"] = array();


$tdatasoa_cit_view1[".sqlHead"] = "SELECT TEMPBSICIT.CIT_PROPOSAL AS NOPROPOSAL,  TEMPBSICIT.CIT_IDCBG AS KODEKC,  getbsibranch.BRANCHNAME AS CABANGBANK,  'CASH IN TRANSIT INSURANCE' AS COB,  TEMPBSICIT.CIT_MODE AS MODE,  'CTO' AS DIVISI,  TEMPBSICIT.CIT_DATE_DEPART AS AWAL,  TEMPBSICIT.CIT_DATE_ARRIV AS AKHIR,  TEMPBSICIT.CIT_ASAL AS ASAL,  TEMPBSICIT.CIT_TUJUAN AS TUJUAN,  'IDR' AS MTU,  TEMPBSICIT.CIT_TSI AS SUMINSURED,  TEMPBSICIT.CIT_RATE AS RATE,  TEMPBSICIT.CIT_PREMI AS PREMI";
$tdatasoa_cit_view1[".sqlFrom"] = "FROM TEMPBSICIT  INNER JOIN getbsibranch ON TEMPBSICIT.CIT_IDCBG = getbsibranch.IDBRANCH";
$tdatasoa_cit_view1[".sqlWhereExpr"] = "(CIT_IDCBG = ':session.IdExt')";
$tdatasoa_cit_view1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasoa_cit_view1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasoa_cit_view1[".arrGroupsPerPage"] = $arrGPP;

$tdatasoa_cit_view1[".highlightSearchResults"] = true;

$tableKeyssoa_cit_view1 = array();
$tdatasoa_cit_view1[".Keys"] = $tableKeyssoa_cit_view1;


$tdatasoa_cit_view1[".hideMobileList"] = array();




//	NOPROPOSAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "NOPROPOSAL";
	$fdata["GoodName"] = "NOPROPOSAL";
	$fdata["ownerTable"] = "TEMPBSICIT";
	$fdata["Label"] = GetFieldLabel("SOA_CIT_view1","NOPROPOSAL");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CIT_PROPOSAL";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TEMPBSICIT.CIT_PROPOSAL";

	
	
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


	$tdatasoa_cit_view1["NOPROPOSAL"] = $fdata;
		$tdatasoa_cit_view1[".searchableFields"][] = "NOPROPOSAL";
//	KODEKC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "KODEKC";
	$fdata["GoodName"] = "KODEKC";
	$fdata["ownerTable"] = "TEMPBSICIT";
	$fdata["Label"] = GetFieldLabel("SOA_CIT_view1","KODEKC");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CIT_IDCBG";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TEMPBSICIT.CIT_IDCBG";

	
	
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


	$tdatasoa_cit_view1["KODEKC"] = $fdata;
		$tdatasoa_cit_view1[".searchableFields"][] = "KODEKC";
//	CABANGBANK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CABANGBANK";
	$fdata["GoodName"] = "CABANGBANK";
	$fdata["ownerTable"] = "getbsibranch";
	$fdata["Label"] = GetFieldLabel("SOA_CIT_view1","CABANGBANK");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "BRANCHNAME";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "getbsibranch.BRANCHNAME";

	
	
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


	$tdatasoa_cit_view1["CABANGBANK"] = $fdata;
		$tdatasoa_cit_view1[".searchableFields"][] = "CABANGBANK";
//	COB
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "COB";
	$fdata["GoodName"] = "COB";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("SOA_CIT_view1","COB");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "COB";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "'CASH IN TRANSIT INSURANCE'";

	
	
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


	$tdatasoa_cit_view1["COB"] = $fdata;
		$tdatasoa_cit_view1[".searchableFields"][] = "COB";
//	MODE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "MODE";
	$fdata["GoodName"] = "MODE";
	$fdata["ownerTable"] = "TEMPBSICIT";
	$fdata["Label"] = GetFieldLabel("SOA_CIT_view1","MODE");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CIT_MODE";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TEMPBSICIT.CIT_MODE";

	
	
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


	$tdatasoa_cit_view1["MODE"] = $fdata;
		$tdatasoa_cit_view1[".searchableFields"][] = "MODE";
//	DIVISI
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "DIVISI";
	$fdata["GoodName"] = "DIVISI";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("SOA_CIT_view1","DIVISI");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "DIVISI";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "'CTO'";

	
	
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


	$tdatasoa_cit_view1["DIVISI"] = $fdata;
		$tdatasoa_cit_view1[".searchableFields"][] = "DIVISI";
//	AWAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "AWAL";
	$fdata["GoodName"] = "AWAL";
	$fdata["ownerTable"] = "TEMPBSICIT";
	$fdata["Label"] = GetFieldLabel("SOA_CIT_view1","AWAL");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "CIT_DATE_DEPART";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TEMPBSICIT.CIT_DATE_DEPART";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatasoa_cit_view1["AWAL"] = $fdata;
		$tdatasoa_cit_view1[".searchableFields"][] = "AWAL";
//	AKHIR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "AKHIR";
	$fdata["GoodName"] = "AKHIR";
	$fdata["ownerTable"] = "TEMPBSICIT";
	$fdata["Label"] = GetFieldLabel("SOA_CIT_view1","AKHIR");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "CIT_DATE_ARRIV";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TEMPBSICIT.CIT_DATE_ARRIV";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatasoa_cit_view1["AKHIR"] = $fdata;
		$tdatasoa_cit_view1[".searchableFields"][] = "AKHIR";
//	ASAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ASAL";
	$fdata["GoodName"] = "ASAL";
	$fdata["ownerTable"] = "TEMPBSICIT";
	$fdata["Label"] = GetFieldLabel("SOA_CIT_view1","ASAL");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CIT_ASAL";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TEMPBSICIT.CIT_ASAL";

	
	
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


	$tdatasoa_cit_view1["ASAL"] = $fdata;
		$tdatasoa_cit_view1[".searchableFields"][] = "ASAL";
//	TUJUAN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "TUJUAN";
	$fdata["GoodName"] = "TUJUAN";
	$fdata["ownerTable"] = "TEMPBSICIT";
	$fdata["Label"] = GetFieldLabel("SOA_CIT_view1","TUJUAN");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CIT_TUJUAN";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TEMPBSICIT.CIT_TUJUAN";

	
	
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


	$tdatasoa_cit_view1["TUJUAN"] = $fdata;
		$tdatasoa_cit_view1[".searchableFields"][] = "TUJUAN";
//	MTU
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "MTU";
	$fdata["GoodName"] = "MTU";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("SOA_CIT_view1","MTU");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "MTU";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "'IDR'";

	
	
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


	$tdatasoa_cit_view1["MTU"] = $fdata;
		$tdatasoa_cit_view1[".searchableFields"][] = "MTU";
//	SUMINSURED
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "SUMINSURED";
	$fdata["GoodName"] = "SUMINSURED";
	$fdata["ownerTable"] = "TEMPBSICIT";
	$fdata["Label"] = GetFieldLabel("SOA_CIT_view1","SUMINSURED");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "CIT_TSI";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TEMPBSICIT.CIT_TSI";

	
	
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


	$tdatasoa_cit_view1["SUMINSURED"] = $fdata;
		$tdatasoa_cit_view1[".searchableFields"][] = "SUMINSURED";
//	RATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "RATE";
	$fdata["GoodName"] = "RATE";
	$fdata["ownerTable"] = "TEMPBSICIT";
	$fdata["Label"] = GetFieldLabel("SOA_CIT_view1","RATE");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "CIT_RATE";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TEMPBSICIT.CIT_RATE";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 10;

	
	
	
	
	
	
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


	$tdatasoa_cit_view1["RATE"] = $fdata;
		$tdatasoa_cit_view1[".searchableFields"][] = "RATE";
//	PREMI
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "PREMI";
	$fdata["GoodName"] = "PREMI";
	$fdata["ownerTable"] = "TEMPBSICIT";
	$fdata["Label"] = GetFieldLabel("SOA_CIT_view1","PREMI");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "CIT_PREMI";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TEMPBSICIT.CIT_PREMI";

	
	
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


	$tdatasoa_cit_view1["PREMI"] = $fdata;
		$tdatasoa_cit_view1[".searchableFields"][] = "PREMI";


$tables_data["SOA_CIT_view1"]=&$tdatasoa_cit_view1;
$field_labels["SOA_CIT_view1"] = &$fieldLabelssoa_cit_view1;
$fieldToolTips["SOA_CIT_view1"] = &$fieldToolTipssoa_cit_view1;
$placeHolders["SOA_CIT_view1"] = &$placeHolderssoa_cit_view1;
$page_titles["SOA_CIT_view1"] = &$pageTitlessoa_cit_view1;


changeTextControlsToDate( "SOA_CIT_view1" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["SOA_CIT_view1"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["SOA_CIT_view1"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_soa_cit_view1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TEMPBSICIT.CIT_PROPOSAL AS NOPROPOSAL,  TEMPBSICIT.CIT_IDCBG AS KODEKC,  getbsibranch.BRANCHNAME AS CABANGBANK,  'CASH IN TRANSIT INSURANCE' AS COB,  TEMPBSICIT.CIT_MODE AS MODE,  'CTO' AS DIVISI,  TEMPBSICIT.CIT_DATE_DEPART AS AWAL,  TEMPBSICIT.CIT_DATE_ARRIV AS AKHIR,  TEMPBSICIT.CIT_ASAL AS ASAL,  TEMPBSICIT.CIT_TUJUAN AS TUJUAN,  'IDR' AS MTU,  TEMPBSICIT.CIT_TSI AS SUMINSURED,  TEMPBSICIT.CIT_RATE AS RATE,  TEMPBSICIT.CIT_PREMI AS PREMI";
$proto0["m_strFrom"] = "FROM TEMPBSICIT  INNER JOIN getbsibranch ON TEMPBSICIT.CIT_IDCBG = getbsibranch.IDBRANCH";
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
	"m_srcTableName" => "SOA_CIT_view1"
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
	"m_strName" => "CIT_PROPOSAL",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "SOA_CIT_view1"
));

$proto6["m_sql"] = "TEMPBSICIT.CIT_PROPOSAL";
$proto6["m_srcTableName"] = "SOA_CIT_view1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "NOPROPOSAL";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_IDCBG",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "SOA_CIT_view1"
));

$proto8["m_sql"] = "TEMPBSICIT.CIT_IDCBG";
$proto8["m_srcTableName"] = "SOA_CIT_view1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "KODEKC";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "BRANCHNAME",
	"m_strTable" => "getbsibranch",
	"m_srcTableName" => "SOA_CIT_view1"
));

$proto10["m_sql"] = "getbsibranch.BRANCHNAME";
$proto10["m_srcTableName"] = "SOA_CIT_view1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "CABANGBANK";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "'CASH IN TRANSIT INSURANCE'"
));

$proto12["m_sql"] = "'CASH IN TRANSIT INSURANCE'";
$proto12["m_srcTableName"] = "SOA_CIT_view1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "COB";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_MODE",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "SOA_CIT_view1"
));

$proto14["m_sql"] = "TEMPBSICIT.CIT_MODE";
$proto14["m_srcTableName"] = "SOA_CIT_view1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "MODE";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "'CTO'"
));

$proto16["m_sql"] = "'CTO'";
$proto16["m_srcTableName"] = "SOA_CIT_view1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "DIVISI";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_DATE_DEPART",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "SOA_CIT_view1"
));

$proto18["m_sql"] = "TEMPBSICIT.CIT_DATE_DEPART";
$proto18["m_srcTableName"] = "SOA_CIT_view1";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "AWAL";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_DATE_ARRIV",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "SOA_CIT_view1"
));

$proto20["m_sql"] = "TEMPBSICIT.CIT_DATE_ARRIV";
$proto20["m_srcTableName"] = "SOA_CIT_view1";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "AKHIR";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_ASAL",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "SOA_CIT_view1"
));

$proto22["m_sql"] = "TEMPBSICIT.CIT_ASAL";
$proto22["m_srcTableName"] = "SOA_CIT_view1";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "ASAL";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_TUJUAN",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "SOA_CIT_view1"
));

$proto24["m_sql"] = "TEMPBSICIT.CIT_TUJUAN";
$proto24["m_srcTableName"] = "SOA_CIT_view1";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "TUJUAN";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "'IDR'"
));

$proto26["m_sql"] = "'IDR'";
$proto26["m_srcTableName"] = "SOA_CIT_view1";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "MTU";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_TSI",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "SOA_CIT_view1"
));

$proto28["m_sql"] = "TEMPBSICIT.CIT_TSI";
$proto28["m_srcTableName"] = "SOA_CIT_view1";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "SUMINSURED";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_RATE",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "SOA_CIT_view1"
));

$proto30["m_sql"] = "TEMPBSICIT.CIT_RATE";
$proto30["m_srcTableName"] = "SOA_CIT_view1";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "RATE";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_PREMI",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "SOA_CIT_view1"
));

$proto32["m_sql"] = "TEMPBSICIT.CIT_PREMI";
$proto32["m_srcTableName"] = "SOA_CIT_view1";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "PREMI";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "TEMPBSICIT";
$proto35["m_srcTableName"] = "SOA_CIT_view1";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "IDCIT";
$proto35["m_columns"][] = "CIT_REGDATE";
$proto35["m_columns"][] = "CIT_IDCBG";
$proto35["m_columns"][] = "CIT_MTU";
$proto35["m_columns"][] = "CIT_TTG";
$proto35["m_columns"][] = "CIT_DATE_DEPART";
$proto35["m_columns"][] = "CIT_DATE_ARRIV";
$proto35["m_columns"][] = "CIT_EMP_NAMA";
$proto35["m_columns"][] = "CIT_SEC_NAMA";
$proto35["m_columns"][] = "CIT_VECH";
$proto35["m_columns"][] = "CIT_NUMBER";
$proto35["m_columns"][] = "CIT_ADD_USER";
$proto35["m_columns"][] = "CIT_ADD_DATE";
$proto35["m_columns"][] = "CIT_EDIT_USER";
$proto35["m_columns"][] = "CIT_EDIT_DATE";
$proto35["m_columns"][] = "CIT_TSI";
$proto35["m_columns"][] = "CIT_FL";
$proto35["m_columns"][] = "CIT_ASAL";
$proto35["m_columns"][] = "CIT_TUJUAN";
$proto35["m_columns"][] = "CIT_TOKEN";
$proto35["m_columns"][] = "CIT_BSMID";
$proto35["m_columns"][] = "CIT_PROPOSAL";
$proto35["m_columns"][] = "CIT_PREMI";
$proto35["m_columns"][] = "CIT_PERIODE_END";
$proto35["m_columns"][] = "CIT_APP_USER";
$proto35["m_columns"][] = "CIT_APP_DATE";
$proto35["m_columns"][] = "CIT_APP_NOTE";
$proto35["m_columns"][] = "CIT_APP_FL";
$proto35["m_columns"][] = "CIT_TO_USER";
$proto35["m_columns"][] = "CIT_TO_DATE";
$proto35["m_columns"][] = "CIT_RATE";
$proto35["m_columns"][] = "CIT_LIMIT";
$proto35["m_columns"][] = "IS_OL";
$proto35["m_columns"][] = "CIT_MODE";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "TEMPBSICIT";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "SOA_CIT_view1";
$proto36=array();
$proto36["m_sql"] = "";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
												$proto38=array();
$proto38["m_link"] = "SQLL_INNERJOIN";
			$proto39=array();
$proto39["m_strName"] = "getbsibranch";
$proto39["m_srcTableName"] = "SOA_CIT_view1";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "IDBRANCH";
$proto39["m_columns"][] = "BRANCHNAME";
$proto39["m_columns"][] = "TYP";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "INNER JOIN getbsibranch ON TEMPBSICIT.CIT_IDCBG = getbsibranch.IDBRANCH";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "SOA_CIT_view1";
$proto40=array();
$proto40["m_sql"] = "getbsibranch.IDBRANCH = TEMPBSICIT.CIT_IDCBG";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "IDBRANCH",
	"m_strTable" => "getbsibranch",
	"m_srcTableName" => "SOA_CIT_view1"
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "= TEMPBSICIT.CIT_IDCBG";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

$proto38["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto38);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="SOA_CIT_view1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_soa_cit_view1 = createSqlQuery_soa_cit_view1();


	
																												;

														

$tdatasoa_cit_view1[".sqlquery"] = $queryData_soa_cit_view1;



$tdatasoa_cit_view1[".hasEvents"] = false;

?>