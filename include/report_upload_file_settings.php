<?php
$tdatareport_upload_file = array();
$tdatareport_upload_file[".searchableFields"] = array();
$tdatareport_upload_file[".ShortName"] = "report_upload_file";
$tdatareport_upload_file[".OwnerID"] = "";
$tdatareport_upload_file[".OriginalTable"] = "TEMPBSICILE";


$tdatareport_upload_file[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatareport_upload_file[".originalPagesByType"] = $tdatareport_upload_file[".pagesByType"];
$tdatareport_upload_file[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatareport_upload_file[".originalPages"] = $tdatareport_upload_file[".pages"];
$tdatareport_upload_file[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatareport_upload_file[".originalDefaultPages"] = $tdatareport_upload_file[".defaultPages"];

//	field labels
$fieldLabelsreport_upload_file = array();
$fieldToolTipsreport_upload_file = array();
$pageTitlesreport_upload_file = array();
$placeHoldersreport_upload_file = array();

if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelsreport_upload_file["Indonesian"] = array();
	$fieldToolTipsreport_upload_file["Indonesian"] = array();
	$placeHoldersreport_upload_file["Indonesian"] = array();
	$pageTitlesreport_upload_file["Indonesian"] = array();
	$fieldLabelsreport_upload_file["Indonesian"]["IDTEMPCE"] = "IDTEMPCE";
	$fieldToolTipsreport_upload_file["Indonesian"]["IDTEMPCE"] = "";
	$placeHoldersreport_upload_file["Indonesian"]["IDTEMPCE"] = "";
	$fieldLabelsreport_upload_file["Indonesian"]["NOLOANDISBURSE"] = "Nomor Loan Disburse";
	$fieldToolTipsreport_upload_file["Indonesian"]["NOLOANDISBURSE"] = "";
	$placeHoldersreport_upload_file["Indonesian"]["NOLOANDISBURSE"] = "";
	$fieldLabelsreport_upload_file["Indonesian"]["NAMATERJAMIN"] = "Nama Terjamin";
	$fieldToolTipsreport_upload_file["Indonesian"]["NAMATERJAMIN"] = "";
	$placeHoldersreport_upload_file["Indonesian"]["NAMATERJAMIN"] = "";
	$fieldLabelsreport_upload_file["Indonesian"]["POKOKPEMBIAYAAN"] = "Pokok Pembiayaan";
	$fieldToolTipsreport_upload_file["Indonesian"]["POKOKPEMBIAYAAN"] = "";
	$placeHoldersreport_upload_file["Indonesian"]["POKOKPEMBIAYAAN"] = "";
	$fieldLabelsreport_upload_file["Indonesian"]["JANGKAWAKTU"] = "Jangka Waktu";
	$fieldToolTipsreport_upload_file["Indonesian"]["JANGKAWAKTU"] = "";
	$placeHoldersreport_upload_file["Indonesian"]["JANGKAWAKTU"] = "";
	$fieldLabelsreport_upload_file["Indonesian"]["TGLAKAD"] = "Tanggal Akad";
	$fieldToolTipsreport_upload_file["Indonesian"]["TGLAKAD"] = "";
	$placeHoldersreport_upload_file["Indonesian"]["TGLAKAD"] = "";
	$fieldLabelsreport_upload_file["Indonesian"]["TGLJATUHTEMPO"] = "Tanggal Jatuh Tempo";
	$fieldToolTipsreport_upload_file["Indonesian"]["TGLJATUHTEMPO"] = "";
	$placeHoldersreport_upload_file["Indonesian"]["TGLJATUHTEMPO"] = "";
	$fieldLabelsreport_upload_file["Indonesian"]["KDCBGBANK"] = "Kode Bank Cabang";
	$fieldToolTipsreport_upload_file["Indonesian"]["KDCBGBANK"] = "";
	$placeHoldersreport_upload_file["Indonesian"]["KDCBGBANK"] = "";
	$fieldLabelsreport_upload_file["Indonesian"]["NMCBGBANK"] = "Nama Bank Cabang";
	$fieldToolTipsreport_upload_file["Indonesian"]["NMCBGBANK"] = "";
	$placeHoldersreport_upload_file["Indonesian"]["NMCBGBANK"] = "";
	$fieldLabelsreport_upload_file["Indonesian"]["ADDUSER"] = "ADDUSER";
	$fieldToolTipsreport_upload_file["Indonesian"]["ADDUSER"] = "";
	$placeHoldersreport_upload_file["Indonesian"]["ADDUSER"] = "";
	$fieldLabelsreport_upload_file["Indonesian"]["ADDDATE"] = "Tanggal Upload";
	$fieldToolTipsreport_upload_file["Indonesian"]["ADDDATE"] = "";
	$placeHoldersreport_upload_file["Indonesian"]["ADDDATE"] = "";
	$fieldLabelsreport_upload_file["Indonesian"]["NIK"] = "NIK";
	$fieldToolTipsreport_upload_file["Indonesian"]["NIK"] = "";
	$placeHoldersreport_upload_file["Indonesian"]["NIK"] = "";
	$fieldLabelsreport_upload_file["Indonesian"]["TGLLAHIR"] = "TGLLAHIR";
	$fieldToolTipsreport_upload_file["Indonesian"]["TGLLAHIR"] = "";
	$placeHoldersreport_upload_file["Indonesian"]["TGLLAHIR"] = "";
	$fieldLabelsreport_upload_file["Indonesian"]["ALAMAT"] = "ALAMAT";
	$fieldToolTipsreport_upload_file["Indonesian"]["ALAMAT"] = "";
	$placeHoldersreport_upload_file["Indonesian"]["ALAMAT"] = "";
	$fieldLabelsreport_upload_file["Indonesian"]["BSMID"] = "BSMID";
	$fieldToolTipsreport_upload_file["Indonesian"]["BSMID"] = "";
	$placeHoldersreport_upload_file["Indonesian"]["BSMID"] = "";
	$fieldLabelsreport_upload_file["Indonesian"]["PROPOSALNO"] = "PROPOSALNO";
	$fieldToolTipsreport_upload_file["Indonesian"]["PROPOSALNO"] = "";
	$placeHoldersreport_upload_file["Indonesian"]["PROPOSALNO"] = "";
	$fieldLabelsreport_upload_file["Indonesian"]["PREMI"] = "PREMI";
	$fieldToolTipsreport_upload_file["Indonesian"]["PREMI"] = "";
	$placeHoldersreport_upload_file["Indonesian"]["PREMI"] = "";
	$fieldLabelsreport_upload_file["Indonesian"]["RATE"] = "RATE";
	$fieldToolTipsreport_upload_file["Indonesian"]["RATE"] = "";
	$placeHoldersreport_upload_file["Indonesian"]["RATE"] = "";
	if (count($fieldToolTipsreport_upload_file["Indonesian"]))
		$tdatareport_upload_file[".isUseToolTips"] = true;
}


	$tdatareport_upload_file[".NCSearch"] = true;



$tdatareport_upload_file[".shortTableName"] = "report_upload_file";
$tdatareport_upload_file[".nSecOptions"] = 0;

$tdatareport_upload_file[".mainTableOwnerID"] = "";
$tdatareport_upload_file[".entityType"] = 1;
$tdatareport_upload_file[".connId"] = "u736239518_btn_at_154_41_241_2";


$tdatareport_upload_file[".strOriginalTableName"] = "TEMPBSICILE";

	



$tdatareport_upload_file[".showAddInPopup"] = false;

$tdatareport_upload_file[".showEditInPopup"] = false;

$tdatareport_upload_file[".showViewInPopup"] = false;

$tdatareport_upload_file[".listAjax"] = false;
//	temporary
//$tdatareport_upload_file[".listAjax"] = false;

	$tdatareport_upload_file[".audit"] = true;

	$tdatareport_upload_file[".locking"] = false;


$pages = $tdatareport_upload_file[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatareport_upload_file[".edit"] = true;
	$tdatareport_upload_file[".afterEditAction"] = 1;
	$tdatareport_upload_file[".closePopupAfterEdit"] = 1;
	$tdatareport_upload_file[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatareport_upload_file[".add"] = true;
$tdatareport_upload_file[".afterAddAction"] = 1;
$tdatareport_upload_file[".closePopupAfterAdd"] = 1;
$tdatareport_upload_file[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatareport_upload_file[".list"] = true;
}



$tdatareport_upload_file[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatareport_upload_file[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatareport_upload_file[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatareport_upload_file[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatareport_upload_file[".printFriendly"] = true;
}



$tdatareport_upload_file[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatareport_upload_file[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatareport_upload_file[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatareport_upload_file[".isUseAjaxSuggest"] = true;



																											

$tdatareport_upload_file[".ajaxCodeSnippetAdded"] = false;

$tdatareport_upload_file[".buttonsAdded"] = false;

$tdatareport_upload_file[".addPageEvents"] = false;

// use timepicker for search panel
$tdatareport_upload_file[".isUseTimeForSearch"] = false;


$tdatareport_upload_file[".badgeColor"] = "CFAE83";


$tdatareport_upload_file[".allSearchFields"] = array();
$tdatareport_upload_file[".filterFields"] = array();
$tdatareport_upload_file[".requiredSearchFields"] = array();

$tdatareport_upload_file[".googleLikeFields"] = array();
$tdatareport_upload_file[".googleLikeFields"][] = "IDTEMPCE";
$tdatareport_upload_file[".googleLikeFields"][] = "NOLOANDISBURSE";
$tdatareport_upload_file[".googleLikeFields"][] = "NAMATERJAMIN";
$tdatareport_upload_file[".googleLikeFields"][] = "POKOKPEMBIAYAAN";
$tdatareport_upload_file[".googleLikeFields"][] = "JANGKAWAKTU";
$tdatareport_upload_file[".googleLikeFields"][] = "TGLAKAD";
$tdatareport_upload_file[".googleLikeFields"][] = "TGLJATUHTEMPO";
$tdatareport_upload_file[".googleLikeFields"][] = "KDCBGBANK";
$tdatareport_upload_file[".googleLikeFields"][] = "NMCBGBANK";
$tdatareport_upload_file[".googleLikeFields"][] = "ADDUSER";
$tdatareport_upload_file[".googleLikeFields"][] = "ADDDATE";
$tdatareport_upload_file[".googleLikeFields"][] = "NIK";
$tdatareport_upload_file[".googleLikeFields"][] = "TGLLAHIR";
$tdatareport_upload_file[".googleLikeFields"][] = "ALAMAT";
$tdatareport_upload_file[".googleLikeFields"][] = "BSMID";
$tdatareport_upload_file[".googleLikeFields"][] = "PROPOSALNO";
$tdatareport_upload_file[".googleLikeFields"][] = "PREMI";
$tdatareport_upload_file[".googleLikeFields"][] = "RATE";



$tdatareport_upload_file[".tableType"] = "list";

$tdatareport_upload_file[".printerPageOrientation"] = 0;
$tdatareport_upload_file[".nPrinterPageScale"] = 100;

$tdatareport_upload_file[".nPrinterSplitRecords"] = 40;

$tdatareport_upload_file[".geocodingEnabled"] = false;




$tdatareport_upload_file[".isDisplayLoading"] = true;



$tdatareport_upload_file[".noRecordsFirstPage"] = true;



$tdatareport_upload_file[".pageSize"] = 20;

$tdatareport_upload_file[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatareport_upload_file[".strOrderBy"] = $tstrOrderBy;

$tdatareport_upload_file[".orderindexes"] = array();


$tdatareport_upload_file[".sqlHead"] = "SELECT IDTEMPCE,  	NOLOANDISBURSE,  	NAMATERJAMIN,  	POKOKPEMBIAYAAN,  	JANGKAWAKTU,  	TGLAKAD,  	TGLJATUHTEMPO,  	KDCBGBANK,  	NMCBGBANK,  	ADDUSER,  	ADDDATE,  	NIK,  	TGLLAHIR,  	ALAMAT,  	BSMID,  	PROPOSALNO,  	PREMI,  	RATE";
$tdatareport_upload_file[".sqlFrom"] = "FROM TEMPBSICILE";
$tdatareport_upload_file[".sqlWhereExpr"] = "";
$tdatareport_upload_file[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatareport_upload_file[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatareport_upload_file[".arrGroupsPerPage"] = $arrGPP;

$tdatareport_upload_file[".highlightSearchResults"] = true;

$tableKeysreport_upload_file = array();
$tableKeysreport_upload_file[] = "IDTEMPCE";
$tdatareport_upload_file[".Keys"] = $tableKeysreport_upload_file;


$tdatareport_upload_file[".hideMobileList"] = array();




//	IDTEMPCE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IDTEMPCE";
	$fdata["GoodName"] = "IDTEMPCE";
	$fdata["ownerTable"] = "TEMPBSICILE";
	$fdata["Label"] = GetFieldLabel("report_upload_file","IDTEMPCE");
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


	$tdatareport_upload_file["IDTEMPCE"] = $fdata;
		$tdatareport_upload_file[".searchableFields"][] = "IDTEMPCE";
//	NOLOANDISBURSE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "NOLOANDISBURSE";
	$fdata["GoodName"] = "NOLOANDISBURSE";
	$fdata["ownerTable"] = "TEMPBSICILE";
	$fdata["Label"] = GetFieldLabel("report_upload_file","NOLOANDISBURSE");
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


	$tdatareport_upload_file["NOLOANDISBURSE"] = $fdata;
		$tdatareport_upload_file[".searchableFields"][] = "NOLOANDISBURSE";
//	NAMATERJAMIN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "NAMATERJAMIN";
	$fdata["GoodName"] = "NAMATERJAMIN";
	$fdata["ownerTable"] = "TEMPBSICILE";
	$fdata["Label"] = GetFieldLabel("report_upload_file","NAMATERJAMIN");
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


	$tdatareport_upload_file["NAMATERJAMIN"] = $fdata;
		$tdatareport_upload_file[".searchableFields"][] = "NAMATERJAMIN";
//	POKOKPEMBIAYAAN
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "POKOKPEMBIAYAAN";
	$fdata["GoodName"] = "POKOKPEMBIAYAAN";
	$fdata["ownerTable"] = "TEMPBSICILE";
	$fdata["Label"] = GetFieldLabel("report_upload_file","POKOKPEMBIAYAAN");
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


	$tdatareport_upload_file["POKOKPEMBIAYAAN"] = $fdata;
		$tdatareport_upload_file[".searchableFields"][] = "POKOKPEMBIAYAAN";
//	JANGKAWAKTU
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "JANGKAWAKTU";
	$fdata["GoodName"] = "JANGKAWAKTU";
	$fdata["ownerTable"] = "TEMPBSICILE";
	$fdata["Label"] = GetFieldLabel("report_upload_file","JANGKAWAKTU");
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


	$tdatareport_upload_file["JANGKAWAKTU"] = $fdata;
		$tdatareport_upload_file[".searchableFields"][] = "JANGKAWAKTU";
//	TGLAKAD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "TGLAKAD";
	$fdata["GoodName"] = "TGLAKAD";
	$fdata["ownerTable"] = "TEMPBSICILE";
	$fdata["Label"] = GetFieldLabel("report_upload_file","TGLAKAD");
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Between";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
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


	$tdatareport_upload_file["TGLAKAD"] = $fdata;
		$tdatareport_upload_file[".searchableFields"][] = "TGLAKAD";
//	TGLJATUHTEMPO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "TGLJATUHTEMPO";
	$fdata["GoodName"] = "TGLJATUHTEMPO";
	$fdata["ownerTable"] = "TEMPBSICILE";
	$fdata["Label"] = GetFieldLabel("report_upload_file","TGLJATUHTEMPO");
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


	$tdatareport_upload_file["TGLJATUHTEMPO"] = $fdata;
		$tdatareport_upload_file[".searchableFields"][] = "TGLJATUHTEMPO";
//	KDCBGBANK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "KDCBGBANK";
	$fdata["GoodName"] = "KDCBGBANK";
	$fdata["ownerTable"] = "TEMPBSICILE";
	$fdata["Label"] = GetFieldLabel("report_upload_file","KDCBGBANK");
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


	$tdatareport_upload_file["KDCBGBANK"] = $fdata;
		$tdatareport_upload_file[".searchableFields"][] = "KDCBGBANK";
//	NMCBGBANK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "NMCBGBANK";
	$fdata["GoodName"] = "NMCBGBANK";
	$fdata["ownerTable"] = "TEMPBSICILE";
	$fdata["Label"] = GetFieldLabel("report_upload_file","NMCBGBANK");
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


	$tdatareport_upload_file["NMCBGBANK"] = $fdata;
		$tdatareport_upload_file[".searchableFields"][] = "NMCBGBANK";
//	ADDUSER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "ADDUSER";
	$fdata["GoodName"] = "ADDUSER";
	$fdata["ownerTable"] = "TEMPBSICILE";
	$fdata["Label"] = GetFieldLabel("report_upload_file","ADDUSER");
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


	$tdatareport_upload_file["ADDUSER"] = $fdata;
		$tdatareport_upload_file[".searchableFields"][] = "ADDUSER";
//	ADDDATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ADDDATE";
	$fdata["GoodName"] = "ADDDATE";
	$fdata["ownerTable"] = "TEMPBSICILE";
	$fdata["Label"] = GetFieldLabel("report_upload_file","ADDDATE");
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

	
	
		$edata["DateEditType"] = 2;
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
		$fdata["defaultSearchOption"] = "Between";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
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


	$tdatareport_upload_file["ADDDATE"] = $fdata;
		$tdatareport_upload_file[".searchableFields"][] = "ADDDATE";
//	NIK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "NIK";
	$fdata["GoodName"] = "NIK";
	$fdata["ownerTable"] = "TEMPBSICILE";
	$fdata["Label"] = GetFieldLabel("report_upload_file","NIK");
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


	$tdatareport_upload_file["NIK"] = $fdata;
		$tdatareport_upload_file[".searchableFields"][] = "NIK";
//	TGLLAHIR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "TGLLAHIR";
	$fdata["GoodName"] = "TGLLAHIR";
	$fdata["ownerTable"] = "TEMPBSICILE";
	$fdata["Label"] = GetFieldLabel("report_upload_file","TGLLAHIR");
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


	$tdatareport_upload_file["TGLLAHIR"] = $fdata;
		$tdatareport_upload_file[".searchableFields"][] = "TGLLAHIR";
//	ALAMAT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "ALAMAT";
	$fdata["GoodName"] = "ALAMAT";
	$fdata["ownerTable"] = "TEMPBSICILE";
	$fdata["Label"] = GetFieldLabel("report_upload_file","ALAMAT");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ALAMAT";

		$fdata["sourceSingle"] = "ALAMAT";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ALAMAT";

	
	
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


	$tdatareport_upload_file["ALAMAT"] = $fdata;
		$tdatareport_upload_file[".searchableFields"][] = "ALAMAT";
//	BSMID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "BSMID";
	$fdata["GoodName"] = "BSMID";
	$fdata["ownerTable"] = "TEMPBSICILE";
	$fdata["Label"] = GetFieldLabel("report_upload_file","BSMID");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "BSMID";

		$fdata["sourceSingle"] = "BSMID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BSMID";

	
	
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


	$tdatareport_upload_file["BSMID"] = $fdata;
		$tdatareport_upload_file[".searchableFields"][] = "BSMID";
//	PROPOSALNO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "PROPOSALNO";
	$fdata["GoodName"] = "PROPOSALNO";
	$fdata["ownerTable"] = "TEMPBSICILE";
	$fdata["Label"] = GetFieldLabel("report_upload_file","PROPOSALNO");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "PROPOSALNO";

		$fdata["sourceSingle"] = "PROPOSALNO";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PROPOSALNO";

	
	
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


	$tdatareport_upload_file["PROPOSALNO"] = $fdata;
		$tdatareport_upload_file[".searchableFields"][] = "PROPOSALNO";
//	PREMI
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "PREMI";
	$fdata["GoodName"] = "PREMI";
	$fdata["ownerTable"] = "TEMPBSICILE";
	$fdata["Label"] = GetFieldLabel("report_upload_file","PREMI");
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


	$tdatareport_upload_file["PREMI"] = $fdata;
		$tdatareport_upload_file[".searchableFields"][] = "PREMI";
//	RATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "RATE";
	$fdata["GoodName"] = "RATE";
	$fdata["ownerTable"] = "TEMPBSICILE";
	$fdata["Label"] = GetFieldLabel("report_upload_file","RATE");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "RATE";

		$fdata["sourceSingle"] = "RATE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RATE";

	
	
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


	$tdatareport_upload_file["RATE"] = $fdata;
		$tdatareport_upload_file[".searchableFields"][] = "RATE";


$tables_data["report_upload_file"]=&$tdatareport_upload_file;
$field_labels["report_upload_file"] = &$fieldLabelsreport_upload_file;
$fieldToolTips["report_upload_file"] = &$fieldToolTipsreport_upload_file;
$placeHolders["report_upload_file"] = &$placeHoldersreport_upload_file;
$page_titles["report_upload_file"] = &$pageTitlesreport_upload_file;


changeTextControlsToDate( "report_upload_file" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["report_upload_file"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["report_upload_file"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_report_upload_file()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "IDTEMPCE,  	NOLOANDISBURSE,  	NAMATERJAMIN,  	POKOKPEMBIAYAAN,  	JANGKAWAKTU,  	TGLAKAD,  	TGLJATUHTEMPO,  	KDCBGBANK,  	NMCBGBANK,  	ADDUSER,  	ADDDATE,  	NIK,  	TGLLAHIR,  	ALAMAT,  	BSMID,  	PROPOSALNO,  	PREMI,  	RATE";
$proto0["m_strFrom"] = "FROM TEMPBSICILE";
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
	"m_strName" => "IDTEMPCE",
	"m_strTable" => "TEMPBSICILE",
	"m_srcTableName" => "report_upload_file"
));

$proto6["m_sql"] = "IDTEMPCE";
$proto6["m_srcTableName"] = "report_upload_file";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "NOLOANDISBURSE",
	"m_strTable" => "TEMPBSICILE",
	"m_srcTableName" => "report_upload_file"
));

$proto8["m_sql"] = "NOLOANDISBURSE";
$proto8["m_srcTableName"] = "report_upload_file";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "NAMATERJAMIN",
	"m_strTable" => "TEMPBSICILE",
	"m_srcTableName" => "report_upload_file"
));

$proto10["m_sql"] = "NAMATERJAMIN";
$proto10["m_srcTableName"] = "report_upload_file";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "POKOKPEMBIAYAAN",
	"m_strTable" => "TEMPBSICILE",
	"m_srcTableName" => "report_upload_file"
));

$proto12["m_sql"] = "POKOKPEMBIAYAAN";
$proto12["m_srcTableName"] = "report_upload_file";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "JANGKAWAKTU",
	"m_strTable" => "TEMPBSICILE",
	"m_srcTableName" => "report_upload_file"
));

$proto14["m_sql"] = "JANGKAWAKTU";
$proto14["m_srcTableName"] = "report_upload_file";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "TGLAKAD",
	"m_strTable" => "TEMPBSICILE",
	"m_srcTableName" => "report_upload_file"
));

$proto16["m_sql"] = "TGLAKAD";
$proto16["m_srcTableName"] = "report_upload_file";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "TGLJATUHTEMPO",
	"m_strTable" => "TEMPBSICILE",
	"m_srcTableName" => "report_upload_file"
));

$proto18["m_sql"] = "TGLJATUHTEMPO";
$proto18["m_srcTableName"] = "report_upload_file";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "KDCBGBANK",
	"m_strTable" => "TEMPBSICILE",
	"m_srcTableName" => "report_upload_file"
));

$proto20["m_sql"] = "KDCBGBANK";
$proto20["m_srcTableName"] = "report_upload_file";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "NMCBGBANK",
	"m_strTable" => "TEMPBSICILE",
	"m_srcTableName" => "report_upload_file"
));

$proto22["m_sql"] = "NMCBGBANK";
$proto22["m_srcTableName"] = "report_upload_file";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "ADDUSER",
	"m_strTable" => "TEMPBSICILE",
	"m_srcTableName" => "report_upload_file"
));

$proto24["m_sql"] = "ADDUSER";
$proto24["m_srcTableName"] = "report_upload_file";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "ADDDATE",
	"m_strTable" => "TEMPBSICILE",
	"m_srcTableName" => "report_upload_file"
));

$proto26["m_sql"] = "ADDDATE";
$proto26["m_srcTableName"] = "report_upload_file";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "NIK",
	"m_strTable" => "TEMPBSICILE",
	"m_srcTableName" => "report_upload_file"
));

$proto28["m_sql"] = "NIK";
$proto28["m_srcTableName"] = "report_upload_file";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "TGLLAHIR",
	"m_strTable" => "TEMPBSICILE",
	"m_srcTableName" => "report_upload_file"
));

$proto30["m_sql"] = "TGLLAHIR";
$proto30["m_srcTableName"] = "report_upload_file";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "ALAMAT",
	"m_strTable" => "TEMPBSICILE",
	"m_srcTableName" => "report_upload_file"
));

$proto32["m_sql"] = "ALAMAT";
$proto32["m_srcTableName"] = "report_upload_file";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "BSMID",
	"m_strTable" => "TEMPBSICILE",
	"m_srcTableName" => "report_upload_file"
));

$proto34["m_sql"] = "BSMID";
$proto34["m_srcTableName"] = "report_upload_file";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "PROPOSALNO",
	"m_strTable" => "TEMPBSICILE",
	"m_srcTableName" => "report_upload_file"
));

$proto36["m_sql"] = "PROPOSALNO";
$proto36["m_srcTableName"] = "report_upload_file";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "PREMI",
	"m_strTable" => "TEMPBSICILE",
	"m_srcTableName" => "report_upload_file"
));

$proto38["m_sql"] = "PREMI";
$proto38["m_srcTableName"] = "report_upload_file";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "RATE",
	"m_strTable" => "TEMPBSICILE",
	"m_srcTableName" => "report_upload_file"
));

$proto40["m_sql"] = "RATE";
$proto40["m_srcTableName"] = "report_upload_file";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto42=array();
$proto42["m_link"] = "SQLL_MAIN";
			$proto43=array();
$proto43["m_strName"] = "TEMPBSICILE";
$proto43["m_srcTableName"] = "report_upload_file";
$proto43["m_columns"] = array();
$proto43["m_columns"][] = "IDTEMPCE";
$proto43["m_columns"][] = "NOLOANDISBURSE";
$proto43["m_columns"][] = "NAMATERJAMIN";
$proto43["m_columns"][] = "POKOKPEMBIAYAAN";
$proto43["m_columns"][] = "JANGKAWAKTU";
$proto43["m_columns"][] = "TGLAKAD";
$proto43["m_columns"][] = "TGLJATUHTEMPO";
$proto43["m_columns"][] = "KDCBGBANK";
$proto43["m_columns"][] = "NMCBGBANK";
$proto43["m_columns"][] = "ADDUSER";
$proto43["m_columns"][] = "ADDDATE";
$proto43["m_columns"][] = "NIK";
$proto43["m_columns"][] = "TGLLAHIR";
$proto43["m_columns"][] = "ALAMAT";
$proto43["m_columns"][] = "BSMID";
$proto43["m_columns"][] = "PROPOSALNO";
$proto43["m_columns"][] = "PREMI";
$proto43["m_columns"][] = "RATE";
$obj = new SQLTable($proto43);

$proto42["m_table"] = $obj;
$proto42["m_sql"] = "TEMPBSICILE";
$proto42["m_alias"] = "";
$proto42["m_srcTableName"] = "report_upload_file";
$proto44=array();
$proto44["m_sql"] = "";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "";
$proto44["m_havingmode"] = false;
$proto44["m_inBrackets"] = false;
$proto44["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto44);

$proto42["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto42);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="report_upload_file";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_report_upload_file = createSqlQuery_report_upload_file();


	
																												;

																		

$tdatareport_upload_file[".sqlquery"] = $queryData_report_upload_file;



$tdatareport_upload_file[".hasEvents"] = false;

?>