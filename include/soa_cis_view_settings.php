<?php
$tdatasoa_cis_view = array();
$tdatasoa_cis_view[".searchableFields"] = array();
$tdatasoa_cis_view[".ShortName"] = "soa_cis_view";
$tdatasoa_cis_view[".OwnerID"] = "";
$tdatasoa_cis_view[".OriginalTable"] = "TEMPBSICIT";


$tdatasoa_cis_view[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatasoa_cis_view[".originalPagesByType"] = $tdatasoa_cis_view[".pagesByType"];
$tdatasoa_cis_view[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatasoa_cis_view[".originalPages"] = $tdatasoa_cis_view[".pages"];
$tdatasoa_cis_view[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatasoa_cis_view[".originalDefaultPages"] = $tdatasoa_cis_view[".defaultPages"];

//	field labels
$fieldLabelssoa_cis_view = array();
$fieldToolTipssoa_cis_view = array();
$pageTitlessoa_cis_view = array();
$placeHolderssoa_cis_view = array();

if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelssoa_cis_view["Indonesian"] = array();
	$fieldToolTipssoa_cis_view["Indonesian"] = array();
	$placeHolderssoa_cis_view["Indonesian"] = array();
	$pageTitlessoa_cis_view["Indonesian"] = array();
	$fieldLabelssoa_cis_view["Indonesian"]["NOPROPOSAL"] = "NO PROPOSAL";
	$fieldToolTipssoa_cis_view["Indonesian"]["NOPROPOSAL"] = "";
	$placeHolderssoa_cis_view["Indonesian"]["NOPROPOSAL"] = "";
	$fieldLabelssoa_cis_view["Indonesian"]["KODEKC"] = "KODE CABANG";
	$fieldToolTipssoa_cis_view["Indonesian"]["KODEKC"] = "";
	$placeHolderssoa_cis_view["Indonesian"]["KODEKC"] = "";
	$fieldLabelssoa_cis_view["Indonesian"]["CABANGBANK"] = "CABANG BANK";
	$fieldToolTipssoa_cis_view["Indonesian"]["CABANGBANK"] = "";
	$placeHolderssoa_cis_view["Indonesian"]["CABANGBANK"] = "";
	$fieldLabelssoa_cis_view["Indonesian"]["COB"] = "COB";
	$fieldToolTipssoa_cis_view["Indonesian"]["COB"] = "";
	$placeHolderssoa_cis_view["Indonesian"]["COB"] = "";
	$fieldLabelssoa_cis_view["Indonesian"]["DIVISI"] = "DIVISI";
	$fieldToolTipssoa_cis_view["Indonesian"]["DIVISI"] = "";
	$placeHolderssoa_cis_view["Indonesian"]["DIVISI"] = "";
	$fieldLabelssoa_cis_view["Indonesian"]["AWAL"] = "PERIODE AWAL";
	$fieldToolTipssoa_cis_view["Indonesian"]["AWAL"] = "";
	$placeHolderssoa_cis_view["Indonesian"]["AWAL"] = "";
	$fieldLabelssoa_cis_view["Indonesian"]["AKHIR"] = "PERIODE AKHIR";
	$fieldToolTipssoa_cis_view["Indonesian"]["AKHIR"] = "";
	$placeHolderssoa_cis_view["Indonesian"]["AKHIR"] = "";
	$fieldLabelssoa_cis_view["Indonesian"]["MTU"] = "MTU";
	$fieldToolTipssoa_cis_view["Indonesian"]["MTU"] = "";
	$placeHolderssoa_cis_view["Indonesian"]["MTU"] = "";
	$fieldLabelssoa_cis_view["Indonesian"]["SUMINSURED"] = "SUM INSURED";
	$fieldToolTipssoa_cis_view["Indonesian"]["SUMINSURED"] = "";
	$placeHolderssoa_cis_view["Indonesian"]["SUMINSURED"] = "";
	$fieldLabelssoa_cis_view["Indonesian"]["PREMI"] = "PREMI";
	$fieldToolTipssoa_cis_view["Indonesian"]["PREMI"] = "";
	$placeHolderssoa_cis_view["Indonesian"]["PREMI"] = "";
	$fieldLabelssoa_cis_view["Indonesian"]["rate"] = "RATE";
	$fieldToolTipssoa_cis_view["Indonesian"]["rate"] = "";
	$placeHolderssoa_cis_view["Indonesian"]["rate"] = "";
	$pageTitlessoa_cis_view["Indonesian"]["search"] = "Pencarian Data";
	$pageTitlessoa_cis_view["Indonesian"]["print"] = "Statement of Account Cash In Safe";
	if (count($fieldToolTipssoa_cis_view["Indonesian"]))
		$tdatasoa_cis_view[".isUseToolTips"] = true;
}


	$tdatasoa_cis_view[".NCSearch"] = true;



$tdatasoa_cis_view[".shortTableName"] = "soa_cis_view";
$tdatasoa_cis_view[".nSecOptions"] = 0;

$tdatasoa_cis_view[".mainTableOwnerID"] = "";
$tdatasoa_cis_view[".entityType"] = 1;
$tdatasoa_cis_view[".connId"] = "u736239518_btn_at_154_41_241_2";


$tdatasoa_cis_view[".strOriginalTableName"] = "TEMPBSICIT";

	



$tdatasoa_cis_view[".showAddInPopup"] = false;

$tdatasoa_cis_view[".showEditInPopup"] = false;

$tdatasoa_cis_view[".showViewInPopup"] = false;

$tdatasoa_cis_view[".listAjax"] = false;
//	temporary
//$tdatasoa_cis_view[".listAjax"] = false;

	$tdatasoa_cis_view[".audit"] = false;

	$tdatasoa_cis_view[".locking"] = false;


$pages = $tdatasoa_cis_view[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasoa_cis_view[".edit"] = true;
	$tdatasoa_cis_view[".afterEditAction"] = 1;
	$tdatasoa_cis_view[".closePopupAfterEdit"] = 1;
	$tdatasoa_cis_view[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasoa_cis_view[".add"] = true;
$tdatasoa_cis_view[".afterAddAction"] = 1;
$tdatasoa_cis_view[".closePopupAfterAdd"] = 1;
$tdatasoa_cis_view[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasoa_cis_view[".list"] = true;
}



$tdatasoa_cis_view[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasoa_cis_view[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasoa_cis_view[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasoa_cis_view[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasoa_cis_view[".printFriendly"] = true;
}



$tdatasoa_cis_view[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasoa_cis_view[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasoa_cis_view[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasoa_cis_view[".isUseAjaxSuggest"] = true;



																											

$tdatasoa_cis_view[".ajaxCodeSnippetAdded"] = false;

$tdatasoa_cis_view[".buttonsAdded"] = false;

$tdatasoa_cis_view[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasoa_cis_view[".isUseTimeForSearch"] = false;


$tdatasoa_cis_view[".badgeColor"] = "DC143C";


$tdatasoa_cis_view[".allSearchFields"] = array();
$tdatasoa_cis_view[".filterFields"] = array();
$tdatasoa_cis_view[".requiredSearchFields"] = array();

$tdatasoa_cis_view[".googleLikeFields"] = array();
$tdatasoa_cis_view[".googleLikeFields"][] = "NOPROPOSAL";
$tdatasoa_cis_view[".googleLikeFields"][] = "KODEKC";
$tdatasoa_cis_view[".googleLikeFields"][] = "CABANGBANK";
$tdatasoa_cis_view[".googleLikeFields"][] = "COB";
$tdatasoa_cis_view[".googleLikeFields"][] = "DIVISI";
$tdatasoa_cis_view[".googleLikeFields"][] = "AWAL";
$tdatasoa_cis_view[".googleLikeFields"][] = "AKHIR";
$tdatasoa_cis_view[".googleLikeFields"][] = "MTU";
$tdatasoa_cis_view[".googleLikeFields"][] = "SUMINSURED";
$tdatasoa_cis_view[".googleLikeFields"][] = "PREMI";
$tdatasoa_cis_view[".googleLikeFields"][] = "rate";



$tdatasoa_cis_view[".tableType"] = "list";

$tdatasoa_cis_view[".printerPageOrientation"] = 0;
$tdatasoa_cis_view[".nPrinterPageScale"] = 100;

$tdatasoa_cis_view[".nPrinterSplitRecords"] = 40;

$tdatasoa_cis_view[".geocodingEnabled"] = false;




$tdatasoa_cis_view[".isDisplayLoading"] = true;



$tdatasoa_cis_view[".noRecordsFirstPage"] = true;



$tdatasoa_cis_view[".pageSize"] = 100;

$tdatasoa_cis_view[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasoa_cis_view[".strOrderBy"] = $tstrOrderBy;

$tdatasoa_cis_view[".orderindexes"] = array();


$tdatasoa_cis_view[".sqlHead"] = "SELECT TEMPBSICIS.CIS_PROPOSAL AS NOPROPOSAL,  TEMPBSICIS.KODECABANG AS KODEKC,  getbsibranch.BRANCHNAME AS CABANGBANK,  'CASH IN SAFE' AS COB,  'CTO' AS DIVISI,  TEMPBSICIS.`DATE` AS AWAL,  TEMPBSICIS.CIS_PERIODE_END AS AKHIR,  'IDR' AS MTU,  TEMPBSICIS.SUMINSURED AS SUMINSURED,  TEMPBSICIS.CIS_PREMI AS PREMI,  TEMPBSICIS.CIS_RATE AS rate";
$tdatasoa_cis_view[".sqlFrom"] = "FROM TEMPBSICIS  INNER JOIN getbsibranch ON TEMPBSICIS.KODECABANG = getbsibranch.IDBRANCH";
$tdatasoa_cis_view[".sqlWhereExpr"] = "(TEMPBSICIS.CIS_PROPOSAL is not null) AND (KODECABANG = ':session.IdExt')";
$tdatasoa_cis_view[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasoa_cis_view[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasoa_cis_view[".arrGroupsPerPage"] = $arrGPP;

$tdatasoa_cis_view[".highlightSearchResults"] = true;

$tableKeyssoa_cis_view = array();
$tdatasoa_cis_view[".Keys"] = $tableKeyssoa_cis_view;


$tdatasoa_cis_view[".hideMobileList"] = array();




//	NOPROPOSAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "NOPROPOSAL";
	$fdata["GoodName"] = "NOPROPOSAL";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("SOA_CIS_view","NOPROPOSAL");
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


	$tdatasoa_cis_view["NOPROPOSAL"] = $fdata;
		$tdatasoa_cis_view[".searchableFields"][] = "NOPROPOSAL";
//	KODEKC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "KODEKC";
	$fdata["GoodName"] = "KODEKC";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("SOA_CIS_view","KODEKC");
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


	$tdatasoa_cis_view["KODEKC"] = $fdata;
		$tdatasoa_cis_view[".searchableFields"][] = "KODEKC";
//	CABANGBANK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CABANGBANK";
	$fdata["GoodName"] = "CABANGBANK";
	$fdata["ownerTable"] = "getbsibranch";
	$fdata["Label"] = GetFieldLabel("SOA_CIS_view","CABANGBANK");
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


	$tdatasoa_cis_view["CABANGBANK"] = $fdata;
		$tdatasoa_cis_view[".searchableFields"][] = "CABANGBANK";
//	COB
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "COB";
	$fdata["GoodName"] = "COB";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("SOA_CIS_view","COB");
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


	$tdatasoa_cis_view["COB"] = $fdata;
		$tdatasoa_cis_view[".searchableFields"][] = "COB";
//	DIVISI
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "DIVISI";
	$fdata["GoodName"] = "DIVISI";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("SOA_CIS_view","DIVISI");
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


	$tdatasoa_cis_view["DIVISI"] = $fdata;
		$tdatasoa_cis_view[".searchableFields"][] = "DIVISI";
//	AWAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "AWAL";
	$fdata["GoodName"] = "AWAL";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("SOA_CIS_view","AWAL");
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


	$tdatasoa_cis_view["AWAL"] = $fdata;
		$tdatasoa_cis_view[".searchableFields"][] = "AWAL";
//	AKHIR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "AKHIR";
	$fdata["GoodName"] = "AKHIR";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("SOA_CIS_view","AKHIR");
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


	$tdatasoa_cis_view["AKHIR"] = $fdata;
		$tdatasoa_cis_view[".searchableFields"][] = "AKHIR";
//	MTU
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "MTU";
	$fdata["GoodName"] = "MTU";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("SOA_CIS_view","MTU");
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


	$tdatasoa_cis_view["MTU"] = $fdata;
		$tdatasoa_cis_view[".searchableFields"][] = "MTU";
//	SUMINSURED
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "SUMINSURED";
	$fdata["GoodName"] = "SUMINSURED";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("SOA_CIS_view","SUMINSURED");
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


	$tdatasoa_cis_view["SUMINSURED"] = $fdata;
		$tdatasoa_cis_view[".searchableFields"][] = "SUMINSURED";
//	PREMI
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "PREMI";
	$fdata["GoodName"] = "PREMI";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("SOA_CIS_view","PREMI");
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


	$tdatasoa_cis_view["PREMI"] = $fdata;
		$tdatasoa_cis_view[".searchableFields"][] = "PREMI";
//	rate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "rate";
	$fdata["GoodName"] = "rate";
	$fdata["ownerTable"] = "TEMPBSICIS";
	$fdata["Label"] = GetFieldLabel("SOA_CIS_view","rate");
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


	$tdatasoa_cis_view["rate"] = $fdata;
		$tdatasoa_cis_view[".searchableFields"][] = "rate";


$tables_data["SOA_CIS_view"]=&$tdatasoa_cis_view;
$field_labels["SOA_CIS_view"] = &$fieldLabelssoa_cis_view;
$fieldToolTips["SOA_CIS_view"] = &$fieldToolTipssoa_cis_view;
$placeHolders["SOA_CIS_view"] = &$placeHolderssoa_cis_view;
$page_titles["SOA_CIS_view"] = &$pageTitlessoa_cis_view;


changeTextControlsToDate( "SOA_CIS_view" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["SOA_CIS_view"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["SOA_CIS_view"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_soa_cis_view()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TEMPBSICIS.CIS_PROPOSAL AS NOPROPOSAL,  TEMPBSICIS.KODECABANG AS KODEKC,  getbsibranch.BRANCHNAME AS CABANGBANK,  'CASH IN SAFE' AS COB,  'CTO' AS DIVISI,  TEMPBSICIS.`DATE` AS AWAL,  TEMPBSICIS.CIS_PERIODE_END AS AKHIR,  'IDR' AS MTU,  TEMPBSICIS.SUMINSURED AS SUMINSURED,  TEMPBSICIS.CIS_PREMI AS PREMI,  TEMPBSICIS.CIS_RATE AS rate";
$proto0["m_strFrom"] = "FROM TEMPBSICIS  INNER JOIN getbsibranch ON TEMPBSICIS.KODECABANG = getbsibranch.IDBRANCH";
$proto0["m_strWhere"] = "(TEMPBSICIS.CIS_PROPOSAL is not null) AND (KODECABANG = ':session.IdExt')";
$proto0["m_strOrderBy"] = "";
	
																												;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(TEMPBSICIS.CIS_PROPOSAL is not null) AND (KODECABANG = ':session.IdExt')";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(TEMPBSICIS.CIS_PROPOSAL is not null) AND (KODECABANG = ':session.IdExt')"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "TEMPBSICIS.CIS_PROPOSAL is not null";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CIS_PROPOSAL",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "SOA_CIS_view"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "is not null";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "KODECABANG = ':session.IdExt'";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "KODECABANG",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "SOA_CIS_view"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "= ':session.IdExt'";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = true;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto8=array();
$proto8["m_sql"] = "";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CIS_PROPOSAL",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "SOA_CIS_view"
));

$proto10["m_sql"] = "TEMPBSICIS.CIS_PROPOSAL";
$proto10["m_srcTableName"] = "SOA_CIS_view";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "NOPROPOSAL";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "KODECABANG",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "SOA_CIS_view"
));

$proto12["m_sql"] = "TEMPBSICIS.KODECABANG";
$proto12["m_srcTableName"] = "SOA_CIS_view";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "KODEKC";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "BRANCHNAME",
	"m_strTable" => "getbsibranch",
	"m_srcTableName" => "SOA_CIS_view"
));

$proto14["m_sql"] = "getbsibranch.BRANCHNAME";
$proto14["m_srcTableName"] = "SOA_CIS_view";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "CABANGBANK";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "'CASH IN SAFE'"
));

$proto16["m_sql"] = "'CASH IN SAFE'";
$proto16["m_srcTableName"] = "SOA_CIS_view";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "COB";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "'CTO'"
));

$proto18["m_sql"] = "'CTO'";
$proto18["m_srcTableName"] = "SOA_CIS_view";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "DIVISI";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "DATE",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "SOA_CIS_view"
));

$proto20["m_sql"] = "TEMPBSICIS.`DATE`";
$proto20["m_srcTableName"] = "SOA_CIS_view";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "AWAL";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "CIS_PERIODE_END",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "SOA_CIS_view"
));

$proto22["m_sql"] = "TEMPBSICIS.CIS_PERIODE_END";
$proto22["m_srcTableName"] = "SOA_CIS_view";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "AKHIR";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "'IDR'"
));

$proto24["m_sql"] = "'IDR'";
$proto24["m_srcTableName"] = "SOA_CIS_view";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "MTU";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "SUMINSURED",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "SOA_CIS_view"
));

$proto26["m_sql"] = "TEMPBSICIS.SUMINSURED";
$proto26["m_srcTableName"] = "SOA_CIS_view";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "SUMINSURED";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "CIS_PREMI",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "SOA_CIS_view"
));

$proto28["m_sql"] = "TEMPBSICIS.CIS_PREMI";
$proto28["m_srcTableName"] = "SOA_CIS_view";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "PREMI";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "CIS_RATE",
	"m_strTable" => "TEMPBSICIS",
	"m_srcTableName" => "SOA_CIS_view"
));

$proto30["m_sql"] = "TEMPBSICIS.CIS_RATE";
$proto30["m_srcTableName"] = "SOA_CIS_view";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "rate";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "TEMPBSICIS";
$proto33["m_srcTableName"] = "SOA_CIS_view";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "IDCIS";
$proto33["m_columns"][] = "CIS_TOKEN";
$proto33["m_columns"][] = "CIS_REGION";
$proto33["m_columns"][] = "CIS_AREA";
$proto33["m_columns"][] = "KODECABANG";
$proto33["m_columns"][] = "DATE";
$proto33["m_columns"][] = "SUMINSURED";
$proto33["m_columns"][] = "CIS_UPL_USER";
$proto33["m_columns"][] = "CIS_UPL_DATE";
$proto33["m_columns"][] = "CIS_FL";
$proto33["m_columns"][] = "CIS_BSMID";
$proto33["m_columns"][] = "CIS_PROPOSAL";
$proto33["m_columns"][] = "CIS_PREMI";
$proto33["m_columns"][] = "CIS_PERIODE_END";
$proto33["m_columns"][] = "CIS_RATE";
$proto33["m_columns"][] = "CIS_LIMIT";
$proto33["m_columns"][] = "CIS_TIPE";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "TEMPBSICIS";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "SOA_CIS_view";
$proto34=array();
$proto34["m_sql"] = "";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
												$proto36=array();
$proto36["m_link"] = "SQLL_INNERJOIN";
			$proto37=array();
$proto37["m_strName"] = "getbsibranch";
$proto37["m_srcTableName"] = "SOA_CIS_view";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "IDBRANCH";
$proto37["m_columns"][] = "BRANCHNAME";
$proto37["m_columns"][] = "TYP";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "INNER JOIN getbsibranch ON TEMPBSICIS.KODECABANG = getbsibranch.IDBRANCH";
$proto36["m_alias"] = "";
$proto36["m_srcTableName"] = "SOA_CIS_view";
$proto38=array();
$proto38["m_sql"] = "getbsibranch.IDBRANCH = TEMPBSICIS.KODECABANG";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "IDBRANCH",
	"m_strTable" => "getbsibranch",
	"m_srcTableName" => "SOA_CIS_view"
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "= TEMPBSICIS.KODECABANG";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

$proto36["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto36);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="SOA_CIS_view";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_soa_cis_view = createSqlQuery_soa_cis_view();


	
																												;

											

$tdatasoa_cis_view[".sqlquery"] = $queryData_soa_cis_view;



$tdatasoa_cis_view[".hasEvents"] = false;

?>