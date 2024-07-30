<?php
$tdatasoa_cit_view = array();
$tdatasoa_cit_view[".searchableFields"] = array();
$tdatasoa_cit_view[".ShortName"] = "soa_cit_view";
$tdatasoa_cit_view[".OwnerID"] = "";
$tdatasoa_cit_view[".OriginalTable"] = "TEMPBSICIT";


$tdatasoa_cit_view[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatasoa_cit_view[".originalPagesByType"] = $tdatasoa_cit_view[".pagesByType"];
$tdatasoa_cit_view[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatasoa_cit_view[".originalPages"] = $tdatasoa_cit_view[".pages"];
$tdatasoa_cit_view[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatasoa_cit_view[".originalDefaultPages"] = $tdatasoa_cit_view[".defaultPages"];

//	field labels
$fieldLabelssoa_cit_view = array();
$fieldToolTipssoa_cit_view = array();
$pageTitlessoa_cit_view = array();
$placeHolderssoa_cit_view = array();

if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelssoa_cit_view["Indonesian"] = array();
	$fieldToolTipssoa_cit_view["Indonesian"] = array();
	$placeHolderssoa_cit_view["Indonesian"] = array();
	$pageTitlessoa_cit_view["Indonesian"] = array();
	$fieldLabelssoa_cit_view["Indonesian"]["NOPROPOSAL"] = "NO PROPOSAL";
	$fieldToolTipssoa_cit_view["Indonesian"]["NOPROPOSAL"] = "";
	$placeHolderssoa_cit_view["Indonesian"]["NOPROPOSAL"] = "";
	$fieldLabelssoa_cit_view["Indonesian"]["KODEKC"] = "KODE KC";
	$fieldToolTipssoa_cit_view["Indonesian"]["KODEKC"] = "";
	$placeHolderssoa_cit_view["Indonesian"]["KODEKC"] = "";
	$fieldLabelssoa_cit_view["Indonesian"]["CABANGBANK"] = "CABANG BANK";
	$fieldToolTipssoa_cit_view["Indonesian"]["CABANGBANK"] = "";
	$placeHolderssoa_cit_view["Indonesian"]["CABANGBANK"] = "";
	$fieldLabelssoa_cit_view["Indonesian"]["COB"] = "COB";
	$fieldToolTipssoa_cit_view["Indonesian"]["COB"] = "";
	$placeHolderssoa_cit_view["Indonesian"]["COB"] = "";
	$fieldLabelssoa_cit_view["Indonesian"]["DIVISI"] = "DIVISI";
	$fieldToolTipssoa_cit_view["Indonesian"]["DIVISI"] = "";
	$placeHolderssoa_cit_view["Indonesian"]["DIVISI"] = "";
	$fieldLabelssoa_cit_view["Indonesian"]["AWAL"] = "PERIODE AWAL";
	$fieldToolTipssoa_cit_view["Indonesian"]["AWAL"] = "";
	$placeHolderssoa_cit_view["Indonesian"]["AWAL"] = "";
	$fieldLabelssoa_cit_view["Indonesian"]["AKHIR"] = "PERIODE AKHIR";
	$fieldToolTipssoa_cit_view["Indonesian"]["AKHIR"] = "";
	$placeHolderssoa_cit_view["Indonesian"]["AKHIR"] = "";
	$fieldLabelssoa_cit_view["Indonesian"]["ASAL"] = "ASAL";
	$fieldToolTipssoa_cit_view["Indonesian"]["ASAL"] = "";
	$placeHolderssoa_cit_view["Indonesian"]["ASAL"] = "";
	$fieldLabelssoa_cit_view["Indonesian"]["TUJUAN"] = "TUJUAN";
	$fieldToolTipssoa_cit_view["Indonesian"]["TUJUAN"] = "";
	$placeHolderssoa_cit_view["Indonesian"]["TUJUAN"] = "";
	$fieldLabelssoa_cit_view["Indonesian"]["MTU"] = "MTU";
	$fieldToolTipssoa_cit_view["Indonesian"]["MTU"] = "";
	$placeHolderssoa_cit_view["Indonesian"]["MTU"] = "";
	$fieldLabelssoa_cit_view["Indonesian"]["SUMINSURED"] = "SUM INSURED";
	$fieldToolTipssoa_cit_view["Indonesian"]["SUMINSURED"] = "";
	$placeHolderssoa_cit_view["Indonesian"]["SUMINSURED"] = "";
	$fieldLabelssoa_cit_view["Indonesian"]["PREMI"] = "PREMI";
	$fieldToolTipssoa_cit_view["Indonesian"]["PREMI"] = "";
	$placeHolderssoa_cit_view["Indonesian"]["PREMI"] = "";
	$fieldLabelssoa_cit_view["Indonesian"]["MODE"] = "MODE";
	$fieldToolTipssoa_cit_view["Indonesian"]["MODE"] = "";
	$placeHolderssoa_cit_view["Indonesian"]["MODE"] = "";
	$pageTitlessoa_cit_view["Indonesian"]["search"] = "Pencarian data";
	if (count($fieldToolTipssoa_cit_view["Indonesian"]))
		$tdatasoa_cit_view[".isUseToolTips"] = true;
}


	$tdatasoa_cit_view[".NCSearch"] = true;



$tdatasoa_cit_view[".shortTableName"] = "soa_cit_view";
$tdatasoa_cit_view[".nSecOptions"] = 0;

$tdatasoa_cit_view[".mainTableOwnerID"] = "";
$tdatasoa_cit_view[".entityType"] = 1;
$tdatasoa_cit_view[".connId"] = "u736239518_btn_at_154_41_241_2";


$tdatasoa_cit_view[".strOriginalTableName"] = "TEMPBSICIT";

	



$tdatasoa_cit_view[".showAddInPopup"] = false;

$tdatasoa_cit_view[".showEditInPopup"] = false;

$tdatasoa_cit_view[".showViewInPopup"] = false;

$tdatasoa_cit_view[".listAjax"] = false;
//	temporary
//$tdatasoa_cit_view[".listAjax"] = false;

	$tdatasoa_cit_view[".audit"] = false;

	$tdatasoa_cit_view[".locking"] = false;


$pages = $tdatasoa_cit_view[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasoa_cit_view[".edit"] = true;
	$tdatasoa_cit_view[".afterEditAction"] = 1;
	$tdatasoa_cit_view[".closePopupAfterEdit"] = 1;
	$tdatasoa_cit_view[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasoa_cit_view[".add"] = true;
$tdatasoa_cit_view[".afterAddAction"] = 1;
$tdatasoa_cit_view[".closePopupAfterAdd"] = 1;
$tdatasoa_cit_view[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasoa_cit_view[".list"] = true;
}



$tdatasoa_cit_view[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasoa_cit_view[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasoa_cit_view[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasoa_cit_view[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasoa_cit_view[".printFriendly"] = true;
}



$tdatasoa_cit_view[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasoa_cit_view[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasoa_cit_view[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasoa_cit_view[".isUseAjaxSuggest"] = true;



																											

$tdatasoa_cit_view[".ajaxCodeSnippetAdded"] = false;

$tdatasoa_cit_view[".buttonsAdded"] = false;

$tdatasoa_cit_view[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasoa_cit_view[".isUseTimeForSearch"] = false;


$tdatasoa_cit_view[".badgeColor"] = "E8926F";


$tdatasoa_cit_view[".allSearchFields"] = array();
$tdatasoa_cit_view[".filterFields"] = array();
$tdatasoa_cit_view[".requiredSearchFields"] = array();

$tdatasoa_cit_view[".googleLikeFields"] = array();
$tdatasoa_cit_view[".googleLikeFields"][] = "NOPROPOSAL";
$tdatasoa_cit_view[".googleLikeFields"][] = "KODEKC";
$tdatasoa_cit_view[".googleLikeFields"][] = "CABANGBANK";
$tdatasoa_cit_view[".googleLikeFields"][] = "COB";
$tdatasoa_cit_view[".googleLikeFields"][] = "MODE";
$tdatasoa_cit_view[".googleLikeFields"][] = "DIVISI";
$tdatasoa_cit_view[".googleLikeFields"][] = "AWAL";
$tdatasoa_cit_view[".googleLikeFields"][] = "AKHIR";
$tdatasoa_cit_view[".googleLikeFields"][] = "ASAL";
$tdatasoa_cit_view[".googleLikeFields"][] = "TUJUAN";
$tdatasoa_cit_view[".googleLikeFields"][] = "MTU";
$tdatasoa_cit_view[".googleLikeFields"][] = "SUMINSURED";
$tdatasoa_cit_view[".googleLikeFields"][] = "PREMI";



$tdatasoa_cit_view[".tableType"] = "list";

$tdatasoa_cit_view[".printerPageOrientation"] = 0;
$tdatasoa_cit_view[".nPrinterPageScale"] = 100;

$tdatasoa_cit_view[".nPrinterSplitRecords"] = 40;

$tdatasoa_cit_view[".geocodingEnabled"] = false;




$tdatasoa_cit_view[".isDisplayLoading"] = true;



$tdatasoa_cit_view[".noRecordsFirstPage"] = true;



$tdatasoa_cit_view[".pageSize"] = 20;

$tdatasoa_cit_view[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasoa_cit_view[".strOrderBy"] = $tstrOrderBy;

$tdatasoa_cit_view[".orderindexes"] = array();


$tdatasoa_cit_view[".sqlHead"] = "SELECT TEMPBSICIT.CIT_PROPOSAL AS NOPROPOSAL,  TEMPBSICIT.CIT_IDCBG AS KODEKC,  getbsibranch.BRANCHNAME AS CABANGBANK,  'CASH IN TRANSIT INSURANCE' AS COB,  TEMPBSICIT.CIT_MODE AS MODE,  'CTO' AS DIVISI,  TEMPBSICIT.CIT_DATE_DEPART AS AWAL,  TEMPBSICIT.CIT_DATE_ARRIV AS AKHIR,  TEMPBSICIT.CIT_ASAL AS ASAL,  TEMPBSICIT.CIT_TUJUAN AS TUJUAN,  'IDR' AS MTU,  TEMPBSICIT.CIT_TSI AS SUMINSURED,  TEMPBSICIT.CIT_PREMI AS PREMI";
$tdatasoa_cit_view[".sqlFrom"] = "FROM TEMPBSICIT  INNER JOIN getbsibranch ON TEMPBSICIT.CIT_IDCBG = getbsibranch.IDBRANCH";
$tdatasoa_cit_view[".sqlWhereExpr"] = "(TEMPBSICIT.CIT_PROPOSAL is not null) AND (CIT_IDCBG = ':session.IdExt')";
$tdatasoa_cit_view[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasoa_cit_view[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasoa_cit_view[".arrGroupsPerPage"] = $arrGPP;

$tdatasoa_cit_view[".highlightSearchResults"] = true;

$tableKeyssoa_cit_view = array();
$tdatasoa_cit_view[".Keys"] = $tableKeyssoa_cit_view;


$tdatasoa_cit_view[".hideMobileList"] = array();




//	NOPROPOSAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "NOPROPOSAL";
	$fdata["GoodName"] = "NOPROPOSAL";
	$fdata["ownerTable"] = "TEMPBSICIT";
	$fdata["Label"] = GetFieldLabel("SOA_CIT_view","NOPROPOSAL");
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


	$tdatasoa_cit_view["NOPROPOSAL"] = $fdata;
		$tdatasoa_cit_view[".searchableFields"][] = "NOPROPOSAL";
//	KODEKC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "KODEKC";
	$fdata["GoodName"] = "KODEKC";
	$fdata["ownerTable"] = "TEMPBSICIT";
	$fdata["Label"] = GetFieldLabel("SOA_CIT_view","KODEKC");
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


	$tdatasoa_cit_view["KODEKC"] = $fdata;
		$tdatasoa_cit_view[".searchableFields"][] = "KODEKC";
//	CABANGBANK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CABANGBANK";
	$fdata["GoodName"] = "CABANGBANK";
	$fdata["ownerTable"] = "getbsibranch";
	$fdata["Label"] = GetFieldLabel("SOA_CIT_view","CABANGBANK");
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


	$tdatasoa_cit_view["CABANGBANK"] = $fdata;
		$tdatasoa_cit_view[".searchableFields"][] = "CABANGBANK";
//	COB
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "COB";
	$fdata["GoodName"] = "COB";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("SOA_CIT_view","COB");
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


	$tdatasoa_cit_view["COB"] = $fdata;
		$tdatasoa_cit_view[".searchableFields"][] = "COB";
//	MODE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "MODE";
	$fdata["GoodName"] = "MODE";
	$fdata["ownerTable"] = "TEMPBSICIT";
	$fdata["Label"] = GetFieldLabel("SOA_CIT_view","MODE");
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


	$tdatasoa_cit_view["MODE"] = $fdata;
		$tdatasoa_cit_view[".searchableFields"][] = "MODE";
//	DIVISI
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "DIVISI";
	$fdata["GoodName"] = "DIVISI";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("SOA_CIT_view","DIVISI");
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


	$tdatasoa_cit_view["DIVISI"] = $fdata;
		$tdatasoa_cit_view[".searchableFields"][] = "DIVISI";
//	AWAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "AWAL";
	$fdata["GoodName"] = "AWAL";
	$fdata["ownerTable"] = "TEMPBSICIT";
	$fdata["Label"] = GetFieldLabel("SOA_CIT_view","AWAL");
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


	$tdatasoa_cit_view["AWAL"] = $fdata;
		$tdatasoa_cit_view[".searchableFields"][] = "AWAL";
//	AKHIR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "AKHIR";
	$fdata["GoodName"] = "AKHIR";
	$fdata["ownerTable"] = "TEMPBSICIT";
	$fdata["Label"] = GetFieldLabel("SOA_CIT_view","AKHIR");
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


	$tdatasoa_cit_view["AKHIR"] = $fdata;
		$tdatasoa_cit_view[".searchableFields"][] = "AKHIR";
//	ASAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ASAL";
	$fdata["GoodName"] = "ASAL";
	$fdata["ownerTable"] = "TEMPBSICIT";
	$fdata["Label"] = GetFieldLabel("SOA_CIT_view","ASAL");
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


	$tdatasoa_cit_view["ASAL"] = $fdata;
		$tdatasoa_cit_view[".searchableFields"][] = "ASAL";
//	TUJUAN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "TUJUAN";
	$fdata["GoodName"] = "TUJUAN";
	$fdata["ownerTable"] = "TEMPBSICIT";
	$fdata["Label"] = GetFieldLabel("SOA_CIT_view","TUJUAN");
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


	$tdatasoa_cit_view["TUJUAN"] = $fdata;
		$tdatasoa_cit_view[".searchableFields"][] = "TUJUAN";
//	MTU
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "MTU";
	$fdata["GoodName"] = "MTU";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("SOA_CIT_view","MTU");
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


	$tdatasoa_cit_view["MTU"] = $fdata;
		$tdatasoa_cit_view[".searchableFields"][] = "MTU";
//	SUMINSURED
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "SUMINSURED";
	$fdata["GoodName"] = "SUMINSURED";
	$fdata["ownerTable"] = "TEMPBSICIT";
	$fdata["Label"] = GetFieldLabel("SOA_CIT_view","SUMINSURED");
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


	$tdatasoa_cit_view["SUMINSURED"] = $fdata;
		$tdatasoa_cit_view[".searchableFields"][] = "SUMINSURED";
//	PREMI
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "PREMI";
	$fdata["GoodName"] = "PREMI";
	$fdata["ownerTable"] = "TEMPBSICIT";
	$fdata["Label"] = GetFieldLabel("SOA_CIT_view","PREMI");
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


	$tdatasoa_cit_view["PREMI"] = $fdata;
		$tdatasoa_cit_view[".searchableFields"][] = "PREMI";


$tables_data["SOA_CIT_view"]=&$tdatasoa_cit_view;
$field_labels["SOA_CIT_view"] = &$fieldLabelssoa_cit_view;
$fieldToolTips["SOA_CIT_view"] = &$fieldToolTipssoa_cit_view;
$placeHolders["SOA_CIT_view"] = &$placeHolderssoa_cit_view;
$page_titles["SOA_CIT_view"] = &$pageTitlessoa_cit_view;


changeTextControlsToDate( "SOA_CIT_view" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["SOA_CIT_view"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["SOA_CIT_view"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_soa_cit_view()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TEMPBSICIT.CIT_PROPOSAL AS NOPROPOSAL,  TEMPBSICIT.CIT_IDCBG AS KODEKC,  getbsibranch.BRANCHNAME AS CABANGBANK,  'CASH IN TRANSIT INSURANCE' AS COB,  TEMPBSICIT.CIT_MODE AS MODE,  'CTO' AS DIVISI,  TEMPBSICIT.CIT_DATE_DEPART AS AWAL,  TEMPBSICIT.CIT_DATE_ARRIV AS AKHIR,  TEMPBSICIT.CIT_ASAL AS ASAL,  TEMPBSICIT.CIT_TUJUAN AS TUJUAN,  'IDR' AS MTU,  TEMPBSICIT.CIT_TSI AS SUMINSURED,  TEMPBSICIT.CIT_PREMI AS PREMI";
$proto0["m_strFrom"] = "FROM TEMPBSICIT  INNER JOIN getbsibranch ON TEMPBSICIT.CIT_IDCBG = getbsibranch.IDBRANCH";
$proto0["m_strWhere"] = "(TEMPBSICIT.CIT_PROPOSAL is not null) AND (CIT_IDCBG = ':session.IdExt')";
$proto0["m_strOrderBy"] = "";
	
																												;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(TEMPBSICIT.CIT_PROPOSAL is not null) AND (CIT_IDCBG = ':session.IdExt')";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(TEMPBSICIT.CIT_PROPOSAL is not null) AND (CIT_IDCBG = ':session.IdExt')"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "TEMPBSICIT.CIT_PROPOSAL is not null";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CIT_PROPOSAL",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "SOA_CIT_view"
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
$proto6["m_sql"] = "CIT_IDCBG = ':session.IdExt'";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "CIT_IDCBG",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "SOA_CIT_view"
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
	"m_strName" => "CIT_PROPOSAL",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "SOA_CIT_view"
));

$proto10["m_sql"] = "TEMPBSICIT.CIT_PROPOSAL";
$proto10["m_srcTableName"] = "SOA_CIT_view";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "NOPROPOSAL";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_IDCBG",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "SOA_CIT_view"
));

$proto12["m_sql"] = "TEMPBSICIT.CIT_IDCBG";
$proto12["m_srcTableName"] = "SOA_CIT_view";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "KODEKC";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "BRANCHNAME",
	"m_strTable" => "getbsibranch",
	"m_srcTableName" => "SOA_CIT_view"
));

$proto14["m_sql"] = "getbsibranch.BRANCHNAME";
$proto14["m_srcTableName"] = "SOA_CIT_view";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "CABANGBANK";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "'CASH IN TRANSIT INSURANCE'"
));

$proto16["m_sql"] = "'CASH IN TRANSIT INSURANCE'";
$proto16["m_srcTableName"] = "SOA_CIT_view";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "COB";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_MODE",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "SOA_CIT_view"
));

$proto18["m_sql"] = "TEMPBSICIT.CIT_MODE";
$proto18["m_srcTableName"] = "SOA_CIT_view";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "MODE";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "'CTO'"
));

$proto20["m_sql"] = "'CTO'";
$proto20["m_srcTableName"] = "SOA_CIT_view";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "DIVISI";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_DATE_DEPART",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "SOA_CIT_view"
));

$proto22["m_sql"] = "TEMPBSICIT.CIT_DATE_DEPART";
$proto22["m_srcTableName"] = "SOA_CIT_view";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "AWAL";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_DATE_ARRIV",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "SOA_CIT_view"
));

$proto24["m_sql"] = "TEMPBSICIT.CIT_DATE_ARRIV";
$proto24["m_srcTableName"] = "SOA_CIT_view";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "AKHIR";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_ASAL",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "SOA_CIT_view"
));

$proto26["m_sql"] = "TEMPBSICIT.CIT_ASAL";
$proto26["m_srcTableName"] = "SOA_CIT_view";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "ASAL";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_TUJUAN",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "SOA_CIT_view"
));

$proto28["m_sql"] = "TEMPBSICIT.CIT_TUJUAN";
$proto28["m_srcTableName"] = "SOA_CIT_view";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "TUJUAN";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "'IDR'"
));

$proto30["m_sql"] = "'IDR'";
$proto30["m_srcTableName"] = "SOA_CIT_view";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "MTU";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_TSI",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "SOA_CIT_view"
));

$proto32["m_sql"] = "TEMPBSICIT.CIT_TSI";
$proto32["m_srcTableName"] = "SOA_CIT_view";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "SUMINSURED";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "CIT_PREMI",
	"m_strTable" => "TEMPBSICIT",
	"m_srcTableName" => "SOA_CIT_view"
));

$proto34["m_sql"] = "TEMPBSICIT.CIT_PREMI";
$proto34["m_srcTableName"] = "SOA_CIT_view";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "PREMI";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto36=array();
$proto36["m_link"] = "SQLL_MAIN";
			$proto37=array();
$proto37["m_strName"] = "TEMPBSICIT";
$proto37["m_srcTableName"] = "SOA_CIT_view";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "IDCIT";
$proto37["m_columns"][] = "CIT_REGDATE";
$proto37["m_columns"][] = "CIT_IDCBG";
$proto37["m_columns"][] = "CIT_MTU";
$proto37["m_columns"][] = "CIT_TTG";
$proto37["m_columns"][] = "CIT_DATE_DEPART";
$proto37["m_columns"][] = "CIT_DATE_ARRIV";
$proto37["m_columns"][] = "CIT_EMP_NAMA";
$proto37["m_columns"][] = "CIT_SEC_NAMA";
$proto37["m_columns"][] = "CIT_VECH";
$proto37["m_columns"][] = "CIT_NUMBER";
$proto37["m_columns"][] = "CIT_ADD_USER";
$proto37["m_columns"][] = "CIT_ADD_DATE";
$proto37["m_columns"][] = "CIT_EDIT_USER";
$proto37["m_columns"][] = "CIT_EDIT_DATE";
$proto37["m_columns"][] = "CIT_TSI";
$proto37["m_columns"][] = "CIT_FL";
$proto37["m_columns"][] = "CIT_ASAL";
$proto37["m_columns"][] = "CIT_TUJUAN";
$proto37["m_columns"][] = "CIT_TOKEN";
$proto37["m_columns"][] = "CIT_BSMID";
$proto37["m_columns"][] = "CIT_PROPOSAL";
$proto37["m_columns"][] = "CIT_PREMI";
$proto37["m_columns"][] = "CIT_PERIODE_END";
$proto37["m_columns"][] = "CIT_APP_USER";
$proto37["m_columns"][] = "CIT_APP_DATE";
$proto37["m_columns"][] = "CIT_APP_NOTE";
$proto37["m_columns"][] = "CIT_APP_FL";
$proto37["m_columns"][] = "CIT_TO_USER";
$proto37["m_columns"][] = "CIT_TO_DATE";
$proto37["m_columns"][] = "CIT_RATE";
$proto37["m_columns"][] = "CIT_LIMIT";
$proto37["m_columns"][] = "IS_OL";
$proto37["m_columns"][] = "CIT_MODE";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "TEMPBSICIT";
$proto36["m_alias"] = "";
$proto36["m_srcTableName"] = "SOA_CIT_view";
$proto38=array();
$proto38["m_sql"] = "";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

$proto36["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto36);

$proto0["m_fromlist"][]=$obj;
												$proto40=array();
$proto40["m_link"] = "SQLL_INNERJOIN";
			$proto41=array();
$proto41["m_strName"] = "getbsibranch";
$proto41["m_srcTableName"] = "SOA_CIT_view";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "IDBRANCH";
$proto41["m_columns"][] = "BRANCHNAME";
$proto41["m_columns"][] = "TYP";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_sql"] = "INNER JOIN getbsibranch ON TEMPBSICIT.CIT_IDCBG = getbsibranch.IDBRANCH";
$proto40["m_alias"] = "";
$proto40["m_srcTableName"] = "SOA_CIT_view";
$proto42=array();
$proto42["m_sql"] = "getbsibranch.IDBRANCH = TEMPBSICIT.CIT_IDCBG";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "IDBRANCH",
	"m_strTable" => "getbsibranch",
	"m_srcTableName" => "SOA_CIT_view"
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "= TEMPBSICIT.CIT_IDCBG";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

$proto40["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto40);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="SOA_CIT_view";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_soa_cit_view = createSqlQuery_soa_cit_view();


	
																												;

													

$tdatasoa_cit_view[".sqlquery"] = $queryData_soa_cit_view;



$tdatasoa_cit_view[".hasEvents"] = false;

?>