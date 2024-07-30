<?php
$tdatatempbsicile = array();
$tdatatempbsicile[".searchableFields"] = array();
$tdatatempbsicile[".ShortName"] = "tempbsicile";
$tdatatempbsicile[".OwnerID"] = "";
$tdatatempbsicile[".OriginalTable"] = "TEMPBSICILE";


$tdatatempbsicile[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatatempbsicile[".originalPagesByType"] = $tdatatempbsicile[".pagesByType"];
$tdatatempbsicile[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatatempbsicile[".originalPages"] = $tdatatempbsicile[".pages"];
$tdatatempbsicile[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatatempbsicile[".originalDefaultPages"] = $tdatatempbsicile[".defaultPages"];

//	field labels
$fieldLabelstempbsicile = array();
$fieldToolTipstempbsicile = array();
$pageTitlestempbsicile = array();
$placeHolderstempbsicile = array();

if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelstempbsicile["Indonesian"] = array();
	$fieldToolTipstempbsicile["Indonesian"] = array();
	$placeHolderstempbsicile["Indonesian"] = array();
	$pageTitlestempbsicile["Indonesian"] = array();
	$fieldLabelstempbsicile["Indonesian"]["IDTEMPCE"] = "IDTEMPCE";
	$fieldToolTipstempbsicile["Indonesian"]["IDTEMPCE"] = "";
	$placeHolderstempbsicile["Indonesian"]["IDTEMPCE"] = "";
	$fieldLabelstempbsicile["Indonesian"]["NOLOANDISBURSE"] = "Nomor Loan Disburse";
	$fieldToolTipstempbsicile["Indonesian"]["NOLOANDISBURSE"] = "";
	$placeHolderstempbsicile["Indonesian"]["NOLOANDISBURSE"] = "";
	$fieldLabelstempbsicile["Indonesian"]["NAMATERJAMIN"] = "Nama Terjamin";
	$fieldToolTipstempbsicile["Indonesian"]["NAMATERJAMIN"] = "";
	$placeHolderstempbsicile["Indonesian"]["NAMATERJAMIN"] = "";
	$fieldLabelstempbsicile["Indonesian"]["POKOKPEMBIAYAAN"] = "Pokok Pembiayaan";
	$fieldToolTipstempbsicile["Indonesian"]["POKOKPEMBIAYAAN"] = "";
	$placeHolderstempbsicile["Indonesian"]["POKOKPEMBIAYAAN"] = "";
	$fieldLabelstempbsicile["Indonesian"]["JANGKAWAKTU"] = "Jangka Waktu";
	$fieldToolTipstempbsicile["Indonesian"]["JANGKAWAKTU"] = "";
	$placeHolderstempbsicile["Indonesian"]["JANGKAWAKTU"] = "";
	$fieldLabelstempbsicile["Indonesian"]["TGLAKAD"] = "Tanggal Akad";
	$fieldToolTipstempbsicile["Indonesian"]["TGLAKAD"] = "";
	$placeHolderstempbsicile["Indonesian"]["TGLAKAD"] = "";
	$fieldLabelstempbsicile["Indonesian"]["TGLJATUHTEMPO"] = "Tanggal Jatuh Tempo";
	$fieldToolTipstempbsicile["Indonesian"]["TGLJATUHTEMPO"] = "";
	$placeHolderstempbsicile["Indonesian"]["TGLJATUHTEMPO"] = "";
	$fieldLabelstempbsicile["Indonesian"]["KDCBGBANK"] = "Kode Bank Cabang";
	$fieldToolTipstempbsicile["Indonesian"]["KDCBGBANK"] = "";
	$placeHolderstempbsicile["Indonesian"]["KDCBGBANK"] = "";
	$fieldLabelstempbsicile["Indonesian"]["NMCBGBANK"] = "Nama Bank Cabang";
	$fieldToolTipstempbsicile["Indonesian"]["NMCBGBANK"] = "";
	$placeHolderstempbsicile["Indonesian"]["NMCBGBANK"] = "";
	$fieldLabelstempbsicile["Indonesian"]["ADDUSER"] = "ADDUSER";
	$fieldToolTipstempbsicile["Indonesian"]["ADDUSER"] = "";
	$placeHolderstempbsicile["Indonesian"]["ADDUSER"] = "";
	$fieldLabelstempbsicile["Indonesian"]["ADDDATE"] = "ADDDATE";
	$fieldToolTipstempbsicile["Indonesian"]["ADDDATE"] = "";
	$placeHolderstempbsicile["Indonesian"]["ADDDATE"] = "";
	$fieldLabelstempbsicile["Indonesian"]["TGLLAHIR"] = "TGLLAHIR";
	$fieldToolTipstempbsicile["Indonesian"]["TGLLAHIR"] = "";
	$placeHolderstempbsicile["Indonesian"]["TGLLAHIR"] = "";
	$fieldLabelstempbsicile["Indonesian"]["NIK"] = "NIK";
	$fieldToolTipstempbsicile["Indonesian"]["NIK"] = "";
	$placeHolderstempbsicile["Indonesian"]["NIK"] = "";
	$pageTitlestempbsicile["Indonesian"]["import"] = "Upload Data Deklarasi Cicilan Emas BSI";
	if (count($fieldToolTipstempbsicile["Indonesian"]))
		$tdatatempbsicile[".isUseToolTips"] = true;
}


	$tdatatempbsicile[".NCSearch"] = true;



$tdatatempbsicile[".shortTableName"] = "tempbsicile";
$tdatatempbsicile[".nSecOptions"] = 0;

$tdatatempbsicile[".mainTableOwnerID"] = "";
$tdatatempbsicile[".entityType"] = 0;
$tdatatempbsicile[".connId"] = "u736239518_btn_at_154_41_241_2";


$tdatatempbsicile[".strOriginalTableName"] = "TEMPBSICILE";

	



$tdatatempbsicile[".showAddInPopup"] = false;

$tdatatempbsicile[".showEditInPopup"] = false;

$tdatatempbsicile[".showViewInPopup"] = false;

$tdatatempbsicile[".listAjax"] = false;
//	temporary
//$tdatatempbsicile[".listAjax"] = false;

	$tdatatempbsicile[".audit"] = true;

	$tdatatempbsicile[".locking"] = false;


$pages = $tdatatempbsicile[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatempbsicile[".edit"] = true;
	$tdatatempbsicile[".afterEditAction"] = 1;
	$tdatatempbsicile[".closePopupAfterEdit"] = 1;
	$tdatatempbsicile[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatempbsicile[".add"] = true;
$tdatatempbsicile[".afterAddAction"] = 1;
$tdatatempbsicile[".closePopupAfterAdd"] = 1;
$tdatatempbsicile[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatempbsicile[".list"] = true;
}



$tdatatempbsicile[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatempbsicile[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatempbsicile[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatempbsicile[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatempbsicile[".printFriendly"] = true;
}



$tdatatempbsicile[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatempbsicile[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatempbsicile[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatempbsicile[".isUseAjaxSuggest"] = true;



																											

$tdatatempbsicile[".ajaxCodeSnippetAdded"] = false;

$tdatatempbsicile[".buttonsAdded"] = false;

$tdatatempbsicile[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatempbsicile[".isUseTimeForSearch"] = false;


$tdatatempbsicile[".badgeColor"] = "5F9EA0";


$tdatatempbsicile[".allSearchFields"] = array();
$tdatatempbsicile[".filterFields"] = array();
$tdatatempbsicile[".requiredSearchFields"] = array();

$tdatatempbsicile[".googleLikeFields"] = array();
$tdatatempbsicile[".googleLikeFields"][] = "IDTEMPCE";
$tdatatempbsicile[".googleLikeFields"][] = "NOLOANDISBURSE";
$tdatatempbsicile[".googleLikeFields"][] = "NAMATERJAMIN";
$tdatatempbsicile[".googleLikeFields"][] = "POKOKPEMBIAYAAN";
$tdatatempbsicile[".googleLikeFields"][] = "JANGKAWAKTU";
$tdatatempbsicile[".googleLikeFields"][] = "TGLAKAD";
$tdatatempbsicile[".googleLikeFields"][] = "TGLJATUHTEMPO";
$tdatatempbsicile[".googleLikeFields"][] = "KDCBGBANK";
$tdatatempbsicile[".googleLikeFields"][] = "NMCBGBANK";
$tdatatempbsicile[".googleLikeFields"][] = "ADDUSER";
$tdatatempbsicile[".googleLikeFields"][] = "ADDDATE";
$tdatatempbsicile[".googleLikeFields"][] = "TGLLAHIR";
$tdatatempbsicile[".googleLikeFields"][] = "NIK";



$tdatatempbsicile[".tableType"] = "list";

$tdatatempbsicile[".printerPageOrientation"] = 0;
$tdatatempbsicile[".nPrinterPageScale"] = 100;

$tdatatempbsicile[".nPrinterSplitRecords"] = 40;

$tdatatempbsicile[".geocodingEnabled"] = false;




$tdatatempbsicile[".isDisplayLoading"] = true;






$tdatatempbsicile[".pageSize"] = 20;

$tdatatempbsicile[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatempbsicile[".strOrderBy"] = $tstrOrderBy;

$tdatatempbsicile[".orderindexes"] = array();


$tdatatempbsicile[".sqlHead"] = "SELECT IDTEMPCE,  NOLOANDISBURSE,  NAMATERJAMIN,  POKOKPEMBIAYAAN,  JANGKAWAKTU,  TGLAKAD,  TGLJATUHTEMPO,  KDCBGBANK,  NMCBGBANK,  ADDUSER,  ADDDATE,  TGLLAHIR,  NIK";
$tdatatempbsicile[".sqlFrom"] = "FROM TEMPBSICILE";
$tdatatempbsicile[".sqlWhereExpr"] = "(ADDUSER = ':USER.USERNAME') AND (date(ADDDATE) = date(NOW()))";
$tdatatempbsicile[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatempbsicile[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatempbsicile[".arrGroupsPerPage"] = $arrGPP;

$tdatatempbsicile[".highlightSearchResults"] = true;

$tableKeystempbsicile = array();
$tableKeystempbsicile[] = "IDTEMPCE";
$tdatatempbsicile[".Keys"] = $tableKeystempbsicile;


$tdatatempbsicile[".hideMobileList"] = array();




//	IDTEMPCE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IDTEMPCE";
	$fdata["GoodName"] = "IDTEMPCE";
	$fdata["ownerTable"] = "TEMPBSICILE";
	$fdata["Label"] = GetFieldLabel("TEMPBSICILE","IDTEMPCE");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "IDTEMPCE";

		$fdata["sourceSingle"] = "IDTEMPCE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IDTEMPCE";

	
	
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


	$tdatatempbsicile["IDTEMPCE"] = $fdata;
		$tdatatempbsicile[".searchableFields"][] = "IDTEMPCE";
//	NOLOANDISBURSE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "NOLOANDISBURSE";
	$fdata["GoodName"] = "NOLOANDISBURSE";
	$fdata["ownerTable"] = "TEMPBSICILE";
	$fdata["Label"] = GetFieldLabel("TEMPBSICILE","NOLOANDISBURSE");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "NOLOANDISBURSE";

		$fdata["sourceSingle"] = "NOLOANDISBURSE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NOLOANDISBURSE";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatatempbsicile["NOLOANDISBURSE"] = $fdata;
		$tdatatempbsicile[".searchableFields"][] = "NOLOANDISBURSE";
//	NAMATERJAMIN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "NAMATERJAMIN";
	$fdata["GoodName"] = "NAMATERJAMIN";
	$fdata["ownerTable"] = "TEMPBSICILE";
	$fdata["Label"] = GetFieldLabel("TEMPBSICILE","NAMATERJAMIN");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "NAMATERJAMIN";

		$fdata["sourceSingle"] = "NAMATERJAMIN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NAMATERJAMIN";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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


	$tdatatempbsicile["NAMATERJAMIN"] = $fdata;
		$tdatatempbsicile[".searchableFields"][] = "NAMATERJAMIN";
//	POKOKPEMBIAYAAN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "POKOKPEMBIAYAAN";
	$fdata["GoodName"] = "POKOKPEMBIAYAAN";
	$fdata["ownerTable"] = "TEMPBSICILE";
	$fdata["Label"] = GetFieldLabel("TEMPBSICILE","POKOKPEMBIAYAAN");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "POKOKPEMBIAYAAN";

		$fdata["sourceSingle"] = "POKOKPEMBIAYAAN";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "POKOKPEMBIAYAAN";

	
	
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


	$tdatatempbsicile["POKOKPEMBIAYAAN"] = $fdata;
		$tdatatempbsicile[".searchableFields"][] = "POKOKPEMBIAYAAN";
//	JANGKAWAKTU
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "JANGKAWAKTU";
	$fdata["GoodName"] = "JANGKAWAKTU";
	$fdata["ownerTable"] = "TEMPBSICILE";
	$fdata["Label"] = GetFieldLabel("TEMPBSICILE","JANGKAWAKTU");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "JANGKAWAKTU";

		$fdata["sourceSingle"] = "JANGKAWAKTU";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "JANGKAWAKTU";

	
	
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


	$tdatatempbsicile["JANGKAWAKTU"] = $fdata;
		$tdatatempbsicile[".searchableFields"][] = "JANGKAWAKTU";
//	TGLAKAD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "TGLAKAD";
	$fdata["GoodName"] = "TGLAKAD";
	$fdata["ownerTable"] = "TEMPBSICILE";
	$fdata["Label"] = GetFieldLabel("TEMPBSICILE","TGLAKAD");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "TGLAKAD";

		$fdata["sourceSingle"] = "TGLAKAD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TGLAKAD";

	
	
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


	$tdatatempbsicile["TGLAKAD"] = $fdata;
		$tdatatempbsicile[".searchableFields"][] = "TGLAKAD";
//	TGLJATUHTEMPO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "TGLJATUHTEMPO";
	$fdata["GoodName"] = "TGLJATUHTEMPO";
	$fdata["ownerTable"] = "TEMPBSICILE";
	$fdata["Label"] = GetFieldLabel("TEMPBSICILE","TGLJATUHTEMPO");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "TGLJATUHTEMPO";

		$fdata["sourceSingle"] = "TGLJATUHTEMPO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TGLJATUHTEMPO";

	
	
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


	$tdatatempbsicile["TGLJATUHTEMPO"] = $fdata;
		$tdatatempbsicile[".searchableFields"][] = "TGLJATUHTEMPO";
//	KDCBGBANK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "KDCBGBANK";
	$fdata["GoodName"] = "KDCBGBANK";
	$fdata["ownerTable"] = "TEMPBSICILE";
	$fdata["Label"] = GetFieldLabel("TEMPBSICILE","KDCBGBANK");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "KDCBGBANK";

		$fdata["sourceSingle"] = "KDCBGBANK";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "KDCBGBANK";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatatempbsicile["KDCBGBANK"] = $fdata;
		$tdatatempbsicile[".searchableFields"][] = "KDCBGBANK";
//	NMCBGBANK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "NMCBGBANK";
	$fdata["GoodName"] = "NMCBGBANK";
	$fdata["ownerTable"] = "TEMPBSICILE";
	$fdata["Label"] = GetFieldLabel("TEMPBSICILE","NMCBGBANK");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "NMCBGBANK";

		$fdata["sourceSingle"] = "NMCBGBANK";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NMCBGBANK";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatatempbsicile["NMCBGBANK"] = $fdata;
		$tdatatempbsicile[".searchableFields"][] = "NMCBGBANK";
//	ADDUSER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "ADDUSER";
	$fdata["GoodName"] = "ADDUSER";
	$fdata["ownerTable"] = "TEMPBSICILE";
	$fdata["Label"] = GetFieldLabel("TEMPBSICILE","ADDUSER");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ADDUSER";

		$fdata["sourceSingle"] = "ADDUSER";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ADDUSER";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatatempbsicile["ADDUSER"] = $fdata;
		$tdatatempbsicile[".searchableFields"][] = "ADDUSER";
//	ADDDATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ADDDATE";
	$fdata["GoodName"] = "ADDDATE";
	$fdata["ownerTable"] = "TEMPBSICILE";
	$fdata["Label"] = GetFieldLabel("TEMPBSICILE","ADDDATE");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "ADDDATE";

		$fdata["sourceSingle"] = "ADDDATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ADDDATE";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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


	$tdatatempbsicile["ADDDATE"] = $fdata;
		$tdatatempbsicile[".searchableFields"][] = "ADDDATE";
//	TGLLAHIR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "TGLLAHIR";
	$fdata["GoodName"] = "TGLLAHIR";
	$fdata["ownerTable"] = "TEMPBSICILE";
	$fdata["Label"] = GetFieldLabel("TEMPBSICILE","TGLLAHIR");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "TGLLAHIR";

		$fdata["sourceSingle"] = "TGLLAHIR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TGLLAHIR";

	
	
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


	$tdatatempbsicile["TGLLAHIR"] = $fdata;
		$tdatatempbsicile[".searchableFields"][] = "TGLLAHIR";
//	NIK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "NIK";
	$fdata["GoodName"] = "NIK";
	$fdata["ownerTable"] = "TEMPBSICILE";
	$fdata["Label"] = GetFieldLabel("TEMPBSICILE","NIK");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "NIK";

		$fdata["sourceSingle"] = "NIK";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NIK";

	
	
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
			$edata["EditParams"].= " maxlength=16";

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


	$tdatatempbsicile["NIK"] = $fdata;
		$tdatatempbsicile[".searchableFields"][] = "NIK";


$tables_data["TEMPBSICILE"]=&$tdatatempbsicile;
$field_labels["TEMPBSICILE"] = &$fieldLabelstempbsicile;
$fieldToolTips["TEMPBSICILE"] = &$fieldToolTipstempbsicile;
$placeHolders["TEMPBSICILE"] = &$placeHolderstempbsicile;
$page_titles["TEMPBSICILE"] = &$pageTitlestempbsicile;


changeTextControlsToDate( "TEMPBSICILE" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["TEMPBSICILE"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["TEMPBSICILE"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tempbsicile()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "IDTEMPCE,  NOLOANDISBURSE,  NAMATERJAMIN,  POKOKPEMBIAYAAN,  JANGKAWAKTU,  TGLAKAD,  TGLJATUHTEMPO,  KDCBGBANK,  NMCBGBANK,  ADDUSER,  ADDDATE,  TGLLAHIR,  NIK";
$proto0["m_strFrom"] = "FROM TEMPBSICILE";
$proto0["m_strWhere"] = "(ADDUSER = ':USER.USERNAME') AND (date(ADDDATE) = date(NOW()))";
$proto0["m_strOrderBy"] = "";
	
																												;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(ADDUSER = ':USER.USERNAME') AND (date(ADDDATE) = date(NOW()))";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(ADDUSER = ':USER.USERNAME') AND (date(ADDDATE) = date(NOW()))"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "ADDUSER = ':USER.USERNAME'";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ADDUSER",
	"m_strTable" => "TEMPBSICILE",
	"m_srcTableName" => "TEMPBSICILE"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "= ':USER.USERNAME'";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "date(ADDDATE) = date(NOW())";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$proto7=array();
$proto7["m_functiontype"] = "SQLF_CUSTOM";
$proto7["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "ADDDATE"
));

$proto7["m_arguments"][]=$obj;
$proto7["m_strFunctionName"] = "date";
$obj = new SQLFunctionCall($proto7);

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "= date(NOW())";
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
$proto9=array();
$proto9["m_sql"] = "";
$proto9["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto9["m_column"]=$obj;
$proto9["m_contained"] = array();
$proto9["m_strCase"] = "";
$proto9["m_havingmode"] = false;
$proto9["m_inBrackets"] = false;
$proto9["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto9);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "IDTEMPCE",
	"m_strTable" => "TEMPBSICILE",
	"m_srcTableName" => "TEMPBSICILE"
));

$proto11["m_sql"] = "IDTEMPCE";
$proto11["m_srcTableName"] = "TEMPBSICILE";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "NOLOANDISBURSE",
	"m_strTable" => "TEMPBSICILE",
	"m_srcTableName" => "TEMPBSICILE"
));

$proto13["m_sql"] = "NOLOANDISBURSE";
$proto13["m_srcTableName"] = "TEMPBSICILE";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "NAMATERJAMIN",
	"m_strTable" => "TEMPBSICILE",
	"m_srcTableName" => "TEMPBSICILE"
));

$proto15["m_sql"] = "NAMATERJAMIN";
$proto15["m_srcTableName"] = "TEMPBSICILE";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "POKOKPEMBIAYAAN",
	"m_strTable" => "TEMPBSICILE",
	"m_srcTableName" => "TEMPBSICILE"
));

$proto17["m_sql"] = "POKOKPEMBIAYAAN";
$proto17["m_srcTableName"] = "TEMPBSICILE";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "JANGKAWAKTU",
	"m_strTable" => "TEMPBSICILE",
	"m_srcTableName" => "TEMPBSICILE"
));

$proto19["m_sql"] = "JANGKAWAKTU";
$proto19["m_srcTableName"] = "TEMPBSICILE";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "TGLAKAD",
	"m_strTable" => "TEMPBSICILE",
	"m_srcTableName" => "TEMPBSICILE"
));

$proto21["m_sql"] = "TGLAKAD";
$proto21["m_srcTableName"] = "TEMPBSICILE";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "TGLJATUHTEMPO",
	"m_strTable" => "TEMPBSICILE",
	"m_srcTableName" => "TEMPBSICILE"
));

$proto23["m_sql"] = "TGLJATUHTEMPO";
$proto23["m_srcTableName"] = "TEMPBSICILE";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "KDCBGBANK",
	"m_strTable" => "TEMPBSICILE",
	"m_srcTableName" => "TEMPBSICILE"
));

$proto25["m_sql"] = "KDCBGBANK";
$proto25["m_srcTableName"] = "TEMPBSICILE";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "NMCBGBANK",
	"m_strTable" => "TEMPBSICILE",
	"m_srcTableName" => "TEMPBSICILE"
));

$proto27["m_sql"] = "NMCBGBANK";
$proto27["m_srcTableName"] = "TEMPBSICILE";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "ADDUSER",
	"m_strTable" => "TEMPBSICILE",
	"m_srcTableName" => "TEMPBSICILE"
));

$proto29["m_sql"] = "ADDUSER";
$proto29["m_srcTableName"] = "TEMPBSICILE";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "ADDDATE",
	"m_strTable" => "TEMPBSICILE",
	"m_srcTableName" => "TEMPBSICILE"
));

$proto31["m_sql"] = "ADDDATE";
$proto31["m_srcTableName"] = "TEMPBSICILE";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "TGLLAHIR",
	"m_strTable" => "TEMPBSICILE",
	"m_srcTableName" => "TEMPBSICILE"
));

$proto33["m_sql"] = "TGLLAHIR";
$proto33["m_srcTableName"] = "TEMPBSICILE";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "NIK",
	"m_strTable" => "TEMPBSICILE",
	"m_srcTableName" => "TEMPBSICILE"
));

$proto35["m_sql"] = "NIK";
$proto35["m_srcTableName"] = "TEMPBSICILE";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto37=array();
$proto37["m_link"] = "SQLL_MAIN";
			$proto38=array();
$proto38["m_strName"] = "TEMPBSICILE";
$proto38["m_srcTableName"] = "TEMPBSICILE";
$proto38["m_columns"] = array();
$proto38["m_columns"][] = "IDTEMPCE";
$proto38["m_columns"][] = "NOLOANDISBURSE";
$proto38["m_columns"][] = "NAMATERJAMIN";
$proto38["m_columns"][] = "POKOKPEMBIAYAAN";
$proto38["m_columns"][] = "JANGKAWAKTU";
$proto38["m_columns"][] = "TGLAKAD";
$proto38["m_columns"][] = "TGLJATUHTEMPO";
$proto38["m_columns"][] = "KDCBGBANK";
$proto38["m_columns"][] = "NMCBGBANK";
$proto38["m_columns"][] = "ADDUSER";
$proto38["m_columns"][] = "ADDDATE";
$proto38["m_columns"][] = "NIK";
$proto38["m_columns"][] = "TGLLAHIR";
$proto38["m_columns"][] = "ALAMAT";
$proto38["m_columns"][] = "BSMID";
$proto38["m_columns"][] = "PROPOSALNO";
$proto38["m_columns"][] = "PREMI";
$proto38["m_columns"][] = "RATE";
$obj = new SQLTable($proto38);

$proto37["m_table"] = $obj;
$proto37["m_sql"] = "TEMPBSICILE";
$proto37["m_alias"] = "";
$proto37["m_srcTableName"] = "TEMPBSICILE";
$proto39=array();
$proto39["m_sql"] = "";
$proto39["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto39["m_column"]=$obj;
$proto39["m_contained"] = array();
$proto39["m_strCase"] = "";
$proto39["m_havingmode"] = false;
$proto39["m_inBrackets"] = false;
$proto39["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto39);

$proto37["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto37);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="TEMPBSICILE";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tempbsicile = createSqlQuery_tempbsicile();


	
																												;

													

$tdatatempbsicile[".sqlquery"] = $queryData_tempbsicile;



include_once(getabspath("include/tempbsicile_events.php"));
$tdatatempbsicile[".hasEvents"] = true;

?>