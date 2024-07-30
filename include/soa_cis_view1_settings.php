<?php
$tdatasoa_cis_view1 = array();
$tdatasoa_cis_view1[".searchableFields"] = array();
$tdatasoa_cis_view1[".ShortName"] = "soa_cis_view1";
$tdatasoa_cis_view1[".OwnerID"] = "";
$tdatasoa_cis_view1[".OriginalTable"] = "TEMPBSICIT";


$tdatasoa_cis_view1[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatasoa_cis_view1[".originalPagesByType"] = $tdatasoa_cis_view1[".pagesByType"];
$tdatasoa_cis_view1[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatasoa_cis_view1[".originalPages"] = $tdatasoa_cis_view1[".pages"];
$tdatasoa_cis_view1[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatasoa_cis_view1[".originalDefaultPages"] = $tdatasoa_cis_view1[".defaultPages"];

//	field labels
$fieldLabelssoa_cis_view1 = array();
$fieldToolTipssoa_cis_view1 = array();
$pageTitlessoa_cis_view1 = array();
$placeHolderssoa_cis_view1 = array();

if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelssoa_cis_view1["Indonesian"] = array();
	$fieldToolTipssoa_cis_view1["Indonesian"] = array();
	$placeHolderssoa_cis_view1["Indonesian"] = array();
	$pageTitlessoa_cis_view1["Indonesian"] = array();
	$fieldLabelssoa_cis_view1["Indonesian"]["NOPROPOSAL"] = "NO PROPOSAL";
	$fieldToolTipssoa_cis_view1["Indonesian"]["NOPROPOSAL"] = "";
	$placeHolderssoa_cis_view1["Indonesian"]["NOPROPOSAL"] = "";
	$fieldLabelssoa_cis_view1["Indonesian"]["KODEKC"] = "KODE CABANG";
	$fieldToolTipssoa_cis_view1["Indonesian"]["KODEKC"] = "";
	$placeHolderssoa_cis_view1["Indonesian"]["KODEKC"] = "";
	$fieldLabelssoa_cis_view1["Indonesian"]["CABANGBANK"] = "CABANG BANK";
	$fieldToolTipssoa_cis_view1["Indonesian"]["CABANGBANK"] = "";
	$placeHolderssoa_cis_view1["Indonesian"]["CABANGBANK"] = "";
	$fieldLabelssoa_cis_view1["Indonesian"]["COB"] = "COB";
	$fieldToolTipssoa_cis_view1["Indonesian"]["COB"] = "";
	$placeHolderssoa_cis_view1["Indonesian"]["COB"] = "";
	$fieldLabelssoa_cis_view1["Indonesian"]["DIVISI"] = "DIVISI";
	$fieldToolTipssoa_cis_view1["Indonesian"]["DIVISI"] = "";
	$placeHolderssoa_cis_view1["Indonesian"]["DIVISI"] = "";
	$fieldLabelssoa_cis_view1["Indonesian"]["AWAL"] = "PERIODE AWAL";
	$fieldToolTipssoa_cis_view1["Indonesian"]["AWAL"] = "";
	$placeHolderssoa_cis_view1["Indonesian"]["AWAL"] = "";
	$fieldLabelssoa_cis_view1["Indonesian"]["AKHIR"] = "PERIODE AKHIR";
	$fieldToolTipssoa_cis_view1["Indonesian"]["AKHIR"] = "";
	$placeHolderssoa_cis_view1["Indonesian"]["AKHIR"] = "";
	$fieldLabelssoa_cis_view1["Indonesian"]["MTU"] = "MTU";
	$fieldToolTipssoa_cis_view1["Indonesian"]["MTU"] = "";
	$placeHolderssoa_cis_view1["Indonesian"]["MTU"] = "";
	$fieldLabelssoa_cis_view1["Indonesian"]["SUMINSURED"] = "SUM INSURED";
	$fieldToolTipssoa_cis_view1["Indonesian"]["SUMINSURED"] = "";
	$placeHolderssoa_cis_view1["Indonesian"]["SUMINSURED"] = "";
	$fieldLabelssoa_cis_view1["Indonesian"]["PREMI"] = "PREMI";
	$fieldToolTipssoa_cis_view1["Indonesian"]["PREMI"] = "";
	$placeHolderssoa_cis_view1["Indonesian"]["PREMI"] = "";
	$fieldLabelssoa_cis_view1["Indonesian"]["rate"] = "RATE";
	$fieldToolTipssoa_cis_view1["Indonesian"]["rate"] = "";
	$placeHolderssoa_cis_view1["Indonesian"]["rate"] = "";
	$pageTitlessoa_cis_view1["Indonesian"]["print"] = "Data Deklarasi Cash In Safe";
	$pageTitlessoa_cis_view1["Indonesian"]["search"] = "Pencarian Data";
	if (count($fieldToolTipssoa_cis_view1["Indonesian"]))
		$tdatasoa_cis_view1[".isUseToolTips"] = true;
}


	$tdatasoa_cis_view1[".NCSearch"] = true;



$tdatasoa_cis_view1[".shortTableName"] = "soa_cis_view1";
$tdatasoa_cis_view1[".nSecOptions"] = 0;

$tdatasoa_cis_view1[".mainTableOwnerID"] = "";
$tdatasoa_cis_view1[".entityType"] = 1;
$tdatasoa_cis_view1[".connId"] = "u736239518_btn_at_154_41_241_2";


$tdatasoa_cis_view1[".strOriginalTableName"] = "TEMPBSICIT";

	



$tdatasoa_cis_view1[".showAddInPopup"] = false;

$tdatasoa_cis_view1[".showEditInPopup"] = false;

$tdatasoa_cis_view1[".showViewInPopup"] = false;

$tdatasoa_cis_view1[".listAjax"] = false;
//	temporary
//$tdatasoa_cis_view1[".listAjax"] = false;

	$tdatasoa_cis_view1[".audit"] = false;

	$tdatasoa_cis_view1[".locking"] = false;


$pages = $tdatasoa_cis_view1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasoa_cis_view1[".edit"] = true;
	$tdatasoa_cis_view1[".afterEditAction"] = 1;
	$tdatasoa_cis_view1[".closePopupAfterEdit"] = 1;
	$tdatasoa_cis_view1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasoa_cis_view1[".add"] = true;
$tdatasoa_cis_view1[".afterAddAction"] = 1;
$tdatasoa_cis_view1[".closePopupAfterAdd"] = 1;
$tdatasoa_cis_view1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasoa_cis_view1[".list"] = true;
}



$tdatasoa_cis_view1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasoa_cis_view1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasoa_cis_view1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasoa_cis_view1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasoa_cis_view1[".printFriendly"] = true;
}



$tdatasoa_cis_view1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasoa_cis_view1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasoa_cis_view1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasoa_cis_view1[".isUseAjaxSuggest"] = true;



																											

$tdatasoa_cis_view1[".ajaxCodeSnippetAdded"] = false;

$tdatasoa_cis_view1[".buttonsAdded"] = false;

$tdatasoa_cis_view1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasoa_cis_view1[".isUseTimeForSearch"] = false;


$tdatasoa_cis_view1[".badgeColor"] = "6DA5C8";


$tdatasoa_cis_view1[".allSearchFields"] = array();
$tdatasoa_cis_view1[".filterFields"] = array();
$tdatasoa_cis_view1[".requiredSearchFields"] = array();

$tdatasoa_cis_view1[".googleLikeFields"] = array();
$tdatasoa_cis_view1[".googleLikeFields"][] = "NOPROPOSAL";
$tdatasoa_cis_view1[".googleLikeFields"][] = "KODEKC";
$tdatasoa_cis_view1[".googleLikeFields"][] = "CABANGBANK";
$tdatasoa_cis_view1[".googleLikeFields"][] = "COB";
$tdatasoa_cis_view1[".googleLikeFields"][] = "DIVISI";
$tdatasoa_cis_view1[".googleLikeFields"][] = "AWAL";
$tdatasoa_cis_view1[".googleLikeFields"][] = "AKHIR";
$tdatasoa_cis_view1[".googleLikeFields"][] = "MTU";
$tdatasoa_cis_view1[".googleLikeFields"][] = "SUMINSURED";
$tdatasoa_cis_view1[".googleLikeFields"][] = "PREMI";
$tdatasoa_cis_view1[".googleLikeFields"][] = "rate";



$tdatasoa_cis_view1[".tableType"] = "list";

$tdatasoa_cis_view1[".printerPageOrientation"] = 0;
$tdatasoa_cis_view1[".nPrinterPageScale"] = 100;

$tdatasoa_cis_view1[".nPrinterSplitRecords"] = 40;

$tdatasoa_cis_view1[".geocodingEnabled"] = false;




$tdatasoa_cis_view1[".isDisplayLoading"] = true;



$tdatasoa_cis_view1[".noRecordsFirstPage"] = true;



$tdatasoa_cis_view1[".pageSize"] = 100;

$tdatasoa_cis_view1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasoa_cis_view1[".strOrderBy"] = $tstrOrderBy;

$tdatasoa_cis_view1[".orderindexes"] = array();


$tdatasoa_cis_view1[".sqlHead"] = "SELECT TEMPBSICIS.CIS_PROPOSAL AS NOPROPOSAL,  TEMPBSICIS.KODECABANG AS KODEKC,  getbsibranch.BRANCHNAME AS CABANGBANK,  'CASH IN SAFE' AS COB,  'CTO' AS DIVISI,  TEMPBSICIS.`DATE` AS AWAL,  TEMPBSICIS.CIS_PERIODE_END AS AKHIR,  'IDR' AS MTU,  TEMPBSICIS.SUMINSURED AS SUMINSURED,  TEMPBSICIS.CIS_PREMI AS PREMI,  TEMPBSICIS.CIS_RATE AS rate";
$tdatasoa_cis_view1[".sqlFrom"] = "FROM TEMPBSICIS  INNER JOIN getbsibranch ON TEMPBSICIS.KODECABANG = getbsibranch.IDBRANCH";
$tdatasoa_cis_view1[".sqlWhereExpr"] = "(KODECABANG = ':session.IdExt')";
$tdatasoa_cis_view1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasoa_cis_view1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasoa_cis_view1[".arrGroupsPerPage"] = $arrGPP;

$tdatasoa_cis_view1[".highlightSearchResults"] = true;

$tableKeyssoa_cis_view1 = array();
$tdatasoa_cis_view1[".Keys"] = $tableKeyssoa_cis_view1;


$tdatasoa_cis_view1[".hideMobileList"] = array();




//	NOPROPOSAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "NOPROPOSAL";
	$fdata["GoodName"] = "NOPROPOSAL";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("SOA_CIS_view1","NOPROPOSAL");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CIS_PROPOSAL";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TEMPBSICIS.CIS_PROPOSAL";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Between";
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


	$tdatasoa_cis_view1["NOPROPOSAL"] = $fdata;
		$tdatasoa_cis_view1[".searchableFields"][] = "NOPROPOSAL";
//	KODEKC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "KODEKC";
	$fdata["GoodName"] = "KODEKC";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("SOA_CIS_view1","KODEKC");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "KODECABANG";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TEMPBSICIS.KODECABANG";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Between";
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


	$tdatasoa_cis_view1["KODEKC"] = $fdata;
		$tdatasoa_cis_view1[".searchableFields"][] = "KODEKC";
//	CABANGBANK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CABANGBANK";
	$fdata["GoodName"] = "CABANGBANK";
	$fdata["ownerTable"] = "getbsibranch";
	$fdata["Label"] = GetFieldLabel("SOA_CIS_view1","CABANGBANK");
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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdatasoa_cis_view1["CABANGBANK"] = $fdata;
		$tdatasoa_cis_view1[".searchableFields"][] = "CABANGBANK";
//	COB
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "COB";
	$fdata["GoodName"] = "COB";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("SOA_CIS_view1","COB");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "COB";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "'CASH IN SAFE'";

	
	
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


	$tdatasoa_cis_view1["COB"] = $fdata;
		$tdatasoa_cis_view1[".searchableFields"][] = "COB";
//	DIVISI
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "DIVISI";
	$fdata["GoodName"] = "DIVISI";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("SOA_CIS_view1","DIVISI");
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


	$tdatasoa_cis_view1["DIVISI"] = $fdata;
		$tdatasoa_cis_view1[".searchableFields"][] = "DIVISI";
//	AWAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "AWAL";
	$fdata["GoodName"] = "AWAL";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("SOA_CIS_view1","AWAL");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "DATE";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TEMPBSICIS.`DATE`";

	
	
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
		$fdata["defaultSearchOption"] = "Between";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
		$fdata["searchOptionsList"][] = "Between";
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


	$tdatasoa_cis_view1["AWAL"] = $fdata;
		$tdatasoa_cis_view1[".searchableFields"][] = "AWAL";
//	AKHIR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "AKHIR";
	$fdata["GoodName"] = "AKHIR";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("SOA_CIS_view1","AKHIR");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "CIS_PERIODE_END";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TEMPBSICIS.CIS_PERIODE_END";

	
	
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdatasoa_cis_view1["AKHIR"] = $fdata;
		$tdatasoa_cis_view1[".searchableFields"][] = "AKHIR";
//	MTU
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "MTU";
	$fdata["GoodName"] = "MTU";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("SOA_CIS_view1","MTU");
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


	$tdatasoa_cis_view1["MTU"] = $fdata;
		$tdatasoa_cis_view1[".searchableFields"][] = "MTU";
//	SUMINSURED
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "SUMINSURED";
	$fdata["GoodName"] = "SUMINSURED";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("SOA_CIS_view1","SUMINSURED");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "SUMINSURED";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TEMPBSICIS.SUMINSURED";

	
	
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


	$tdatasoa_cis_view1["SUMINSURED"] = $fdata;
		$tdatasoa_cis_view1[".searchableFields"][] = "SUMINSURED";
//	PREMI
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "PREMI";
	$fdata["GoodName"] = "PREMI";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("SOA_CIS_view1","PREMI");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "CIS_PREMI";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TEMPBSICIS.CIS_PREMI";

	
	
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


	$tdatasoa_cis_view1["PREMI"] = $fdata;
		$tdatasoa_cis_view1[".searchableFields"][] = "PREMI";
//	rate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "rate";
	$fdata["GoodName"] = "rate";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("SOA_CIS_view1","rate");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "CIS_RATE";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TEMPBSICIS.CIS_RATE";

	
	
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


	$tdatasoa_cis_view1["rate"] = $fdata;
		$tdatasoa_cis_view1[".searchableFields"][] = "rate";


$tables_data["SOA_CIS_view1"]=&$tdatasoa_cis_view1;
$field_labels["SOA_CIS_view1"] = &$fieldLabelssoa_cis_view1;
$fieldToolTips["SOA_CIS_view1"] = &$fieldToolTipssoa_cis_view1;
$placeHolders["SOA_CIS_view1"] = &$placeHolderssoa_cis_view1;
$page_titles["SOA_CIS_view1"] = &$pageTitlessoa_cis_view1;


changeTextControlsToDate( "SOA_CIS_view1" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["SOA_CIS_view1"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["SOA_CIS_view1"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_soa_cis_view1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TEMPBSICIS.CIS_PROPOSAL AS NOPROPOSAL,  TEMPBSICIS.KODECABANG AS KODEKC,  getbsibranch.BRANCHNAME AS CABANGBANK,  'CASH IN SAFE' AS COB,  'CTO' AS DIVISI,  TEMPBSICIS.`DATE` AS AWAL,  TEMPBSICIS.CIS_PERIODE_END AS AKHIR,  'IDR' AS MTU,  TEMPBSICIS.SUMINSURED AS SUMINSURED,  TEMPBSICIS.CIS_PREMI AS PREMI,  TEMPBSICIS.CIS_RATE AS rate";
$proto0["m_strFrom"] = "FROM TEMPBSICIS  INNER JOIN getbsibranch ON TEMPBSICIS.KODECABANG = getbsibranch.IDBRANCH";
$proto0["m_strWhere"] = "(KODECABANG = ':session.IdExt')";
$proto0["m_strOrderBy"] = "";
	
																												;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "KODECABANG = ':session.IdExt'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "KODECABANG",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "SOA_CIS_view1"
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
	"m_strName" => "CIS_PROPOSAL",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "SOA_CIS_view1"
));

$proto6["m_sql"] = "TEMPBSICIS.CIS_PROPOSAL";
$proto6["m_srcTableName"] = "SOA_CIS_view1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "NOPROPOSAL";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "KODECABANG",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "SOA_CIS_view1"
));

$proto8["m_sql"] = "TEMPBSICIS.KODECABANG";
$proto8["m_srcTableName"] = "SOA_CIS_view1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "KODEKC";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "BRANCHNAME",
	"m_strTable" => "getbsibranch",
	"m_srcTableName" => "SOA_CIS_view1"
));

$proto10["m_sql"] = "getbsibranch.BRANCHNAME";
$proto10["m_srcTableName"] = "SOA_CIS_view1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "CABANGBANK";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "'CASH IN SAFE'"
));

$proto12["m_sql"] = "'CASH IN SAFE'";
$proto12["m_srcTableName"] = "SOA_CIS_view1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "COB";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "'CTO'"
));

$proto14["m_sql"] = "'CTO'";
$proto14["m_srcTableName"] = "SOA_CIS_view1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "DIVISI";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "DATE",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "SOA_CIS_view1"
));

$proto16["m_sql"] = "TEMPBSICIS.`DATE`";
$proto16["m_srcTableName"] = "SOA_CIS_view1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "AWAL";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "CIS_PERIODE_END",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "SOA_CIS_view1"
));

$proto18["m_sql"] = "TEMPBSICIS.CIS_PERIODE_END";
$proto18["m_srcTableName"] = "SOA_CIS_view1";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "AKHIR";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "'IDR'"
));

$proto20["m_sql"] = "'IDR'";
$proto20["m_srcTableName"] = "SOA_CIS_view1";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "MTU";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "SUMINSURED",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "SOA_CIS_view1"
));

$proto22["m_sql"] = "TEMPBSICIS.SUMINSURED";
$proto22["m_srcTableName"] = "SOA_CIS_view1";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "SUMINSURED";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "CIS_PREMI",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "SOA_CIS_view1"
));

$proto24["m_sql"] = "TEMPBSICIS.CIS_PREMI";
$proto24["m_srcTableName"] = "SOA_CIS_view1";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "PREMI";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "CIS_RATE",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "SOA_CIS_view1"
));

$proto26["m_sql"] = "TEMPBSICIS.CIS_RATE";
$proto26["m_srcTableName"] = "SOA_CIS_view1";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "rate";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "TEMPBSICIS";
$proto29["m_srcTableName"] = "SOA_CIS_view1";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "IDCIS";
$proto29["m_columns"][] = "CIS_TOKEN";
$proto29["m_columns"][] = "CIS_REGION";
$proto29["m_columns"][] = "CIS_AREA";
$proto29["m_columns"][] = "KODECABANG";
$proto29["m_columns"][] = "DATE";
$proto29["m_columns"][] = "SUMINSURED";
$proto29["m_columns"][] = "CIS_UPL_USER";
$proto29["m_columns"][] = "CIS_UPL_DATE";
$proto29["m_columns"][] = "CIS_FL";
$proto29["m_columns"][] = "CIS_BSMID";
$proto29["m_columns"][] = "CIS_PROPOSAL";
$proto29["m_columns"][] = "CIS_PREMI";
$proto29["m_columns"][] = "CIS_PERIODE_END";
$proto29["m_columns"][] = "CIS_RATE";
$proto29["m_columns"][] = "CIS_LIMIT";
$proto29["m_columns"][] = "CIS_TIPE";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "TEMPBSICIS";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "SOA_CIS_view1";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
												$proto32=array();
$proto32["m_link"] = "SQLL_INNERJOIN";
			$proto33=array();
$proto33["m_strName"] = "getbsibranch";
$proto33["m_srcTableName"] = "SOA_CIS_view1";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "IDBRANCH";
$proto33["m_columns"][] = "BRANCHNAME";
$proto33["m_columns"][] = "TYP";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "INNER JOIN getbsibranch ON TEMPBSICIS.KODECABANG = getbsibranch.IDBRANCH";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "SOA_CIS_view1";
$proto34=array();
$proto34["m_sql"] = "getbsibranch.IDBRANCH = TEMPBSICIS.KODECABANG";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "IDBRANCH",
	"m_strTable" => "getbsibranch",
	"m_srcTableName" => "SOA_CIS_view1"
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "= TEMPBSICIS.KODECABANG";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="SOA_CIS_view1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_soa_cis_view1 = createSqlQuery_soa_cis_view1();


	
																												;

											

$tdatasoa_cis_view1[".sqlquery"] = $queryData_soa_cis_view1;



$tdatasoa_cis_view1[".hasEvents"] = false;

?>