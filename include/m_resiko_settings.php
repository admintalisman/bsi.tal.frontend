<?php
$tdatam_resiko = array();
$tdatam_resiko[".searchableFields"] = array();
$tdatam_resiko[".ShortName"] = "m_resiko";
$tdatam_resiko[".OwnerID"] = "";
$tdatam_resiko[".OriginalTable"] = "M_RESIKO";


$tdatam_resiko[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"]}" );
$tdatam_resiko[".originalPagesByType"] = $tdatam_resiko[".pagesByType"];
$tdatam_resiko[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"]}" ) );
$tdatam_resiko[".originalPages"] = $tdatam_resiko[".pages"];
$tdatam_resiko[".defaultPages"] = my_json_decode( "{\"list\":\"list\"}" );
$tdatam_resiko[".originalDefaultPages"] = $tdatam_resiko[".defaultPages"];

//	field labels
$fieldLabelsm_resiko = array();
$fieldToolTipsm_resiko = array();
$pageTitlesm_resiko = array();
$placeHoldersm_resiko = array();

if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelsm_resiko["Indonesian"] = array();
	$fieldToolTipsm_resiko["Indonesian"] = array();
	$placeHoldersm_resiko["Indonesian"] = array();
	$pageTitlesm_resiko["Indonesian"] = array();
	$fieldLabelsm_resiko["Indonesian"]["resiko_id"] = "Resiko Id";
	$fieldToolTipsm_resiko["Indonesian"]["resiko_id"] = "";
	$placeHoldersm_resiko["Indonesian"]["resiko_id"] = "";
	$fieldLabelsm_resiko["Indonesian"]["resiko_kode"] = "Resiko Kode";
	$fieldToolTipsm_resiko["Indonesian"]["resiko_kode"] = "";
	$placeHoldersm_resiko["Indonesian"]["resiko_kode"] = "";
	$fieldLabelsm_resiko["Indonesian"]["resiko_ketr"] = "Resiko Ketr";
	$fieldToolTipsm_resiko["Indonesian"]["resiko_ketr"] = "";
	$placeHoldersm_resiko["Indonesian"]["resiko_ketr"] = "";
	$fieldLabelsm_resiko["Indonesian"]["resiko_rate"] = "Resiko Rate";
	$fieldToolTipsm_resiko["Indonesian"]["resiko_rate"] = "";
	$placeHoldersm_resiko["Indonesian"]["resiko_rate"] = "";
	$fieldLabelsm_resiko["Indonesian"]["resiko_minRate"] = "Resiko MinRate";
	$fieldToolTipsm_resiko["Indonesian"]["resiko_minRate"] = "";
	$placeHoldersm_resiko["Indonesian"]["resiko_minRate"] = "";
	$fieldLabelsm_resiko["Indonesian"]["resiko_limit"] = "Resiko Limit";
	$fieldToolTipsm_resiko["Indonesian"]["resiko_limit"] = "";
	$placeHoldersm_resiko["Indonesian"]["resiko_limit"] = "";
	$fieldLabelsm_resiko["Indonesian"]["resiko_cob"] = "Resiko Cob";
	$fieldToolTipsm_resiko["Indonesian"]["resiko_cob"] = "";
	$placeHoldersm_resiko["Indonesian"]["resiko_cob"] = "";
	$fieldLabelsm_resiko["Indonesian"]["resiko_aktif"] = "Resiko Aktif";
	$fieldToolTipsm_resiko["Indonesian"]["resiko_aktif"] = "";
	$placeHoldersm_resiko["Indonesian"]["resiko_aktif"] = "";
	$fieldLabelsm_resiko["Indonesian"]["resiko_urut"] = "Resiko Urut";
	$fieldToolTipsm_resiko["Indonesian"]["resiko_urut"] = "";
	$placeHoldersm_resiko["Indonesian"]["resiko_urut"] = "";
	$fieldLabelsm_resiko["Indonesian"]["add_user"] = "Add User";
	$fieldToolTipsm_resiko["Indonesian"]["add_user"] = "";
	$placeHoldersm_resiko["Indonesian"]["add_user"] = "";
	$fieldLabelsm_resiko["Indonesian"]["add_date"] = "Add Date";
	$fieldToolTipsm_resiko["Indonesian"]["add_date"] = "";
	$placeHoldersm_resiko["Indonesian"]["add_date"] = "";
	if (count($fieldToolTipsm_resiko["Indonesian"]))
		$tdatam_resiko[".isUseToolTips"] = true;
}


	$tdatam_resiko[".NCSearch"] = true;



$tdatam_resiko[".shortTableName"] = "m_resiko";
$tdatam_resiko[".nSecOptions"] = 0;

$tdatam_resiko[".mainTableOwnerID"] = "";
$tdatam_resiko[".entityType"] = 0;
$tdatam_resiko[".connId"] = "u736239518_btn_at_154_41_241_2";


$tdatam_resiko[".strOriginalTableName"] = "M_RESIKO";

	



$tdatam_resiko[".showAddInPopup"] = false;

$tdatam_resiko[".showEditInPopup"] = false;

$tdatam_resiko[".showViewInPopup"] = false;

$tdatam_resiko[".listAjax"] = false;
//	temporary
//$tdatam_resiko[".listAjax"] = false;

	$tdatam_resiko[".audit"] = false;

	$tdatam_resiko[".locking"] = false;


$pages = $tdatam_resiko[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatam_resiko[".edit"] = true;
	$tdatam_resiko[".afterEditAction"] = 1;
	$tdatam_resiko[".closePopupAfterEdit"] = 1;
	$tdatam_resiko[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatam_resiko[".add"] = true;
$tdatam_resiko[".afterAddAction"] = 1;
$tdatam_resiko[".closePopupAfterAdd"] = 1;
$tdatam_resiko[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatam_resiko[".list"] = true;
}



$tdatam_resiko[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatam_resiko[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatam_resiko[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatam_resiko[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatam_resiko[".printFriendly"] = true;
}



$tdatam_resiko[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatam_resiko[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatam_resiko[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatam_resiko[".isUseAjaxSuggest"] = true;



																											

$tdatam_resiko[".ajaxCodeSnippetAdded"] = false;

$tdatam_resiko[".buttonsAdded"] = false;

$tdatam_resiko[".addPageEvents"] = false;

// use timepicker for search panel
$tdatam_resiko[".isUseTimeForSearch"] = false;


$tdatam_resiko[".badgeColor"] = "CD853F";


$tdatam_resiko[".allSearchFields"] = array();
$tdatam_resiko[".filterFields"] = array();
$tdatam_resiko[".requiredSearchFields"] = array();

$tdatam_resiko[".googleLikeFields"] = array();
$tdatam_resiko[".googleLikeFields"][] = "resiko_id";
$tdatam_resiko[".googleLikeFields"][] = "resiko_kode";
$tdatam_resiko[".googleLikeFields"][] = "resiko_ketr";
$tdatam_resiko[".googleLikeFields"][] = "resiko_rate";
$tdatam_resiko[".googleLikeFields"][] = "resiko_minRate";
$tdatam_resiko[".googleLikeFields"][] = "resiko_limit";
$tdatam_resiko[".googleLikeFields"][] = "resiko_cob";
$tdatam_resiko[".googleLikeFields"][] = "resiko_aktif";
$tdatam_resiko[".googleLikeFields"][] = "resiko_urut";
$tdatam_resiko[".googleLikeFields"][] = "add_user";
$tdatam_resiko[".googleLikeFields"][] = "add_date";



$tdatam_resiko[".tableType"] = "list";

$tdatam_resiko[".printerPageOrientation"] = 0;
$tdatam_resiko[".nPrinterPageScale"] = 100;

$tdatam_resiko[".nPrinterSplitRecords"] = 40;

$tdatam_resiko[".geocodingEnabled"] = false;










$tdatam_resiko[".pageSize"] = 20;

$tdatam_resiko[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatam_resiko[".strOrderBy"] = $tstrOrderBy;

$tdatam_resiko[".orderindexes"] = array();


$tdatam_resiko[".sqlHead"] = "SELECT resiko_id,  	resiko_kode,  	resiko_ketr,  	resiko_rate,  	resiko_minRate,  	resiko_limit,  	resiko_cob,  	resiko_aktif,  	resiko_urut,  	add_user,  	add_date";
$tdatam_resiko[".sqlFrom"] = "FROM M_RESIKO";
$tdatam_resiko[".sqlWhereExpr"] = "";
$tdatam_resiko[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatam_resiko[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatam_resiko[".arrGroupsPerPage"] = $arrGPP;

$tdatam_resiko[".highlightSearchResults"] = true;

$tableKeysm_resiko = array();
$tableKeysm_resiko[] = "resiko_id";
$tdatam_resiko[".Keys"] = $tableKeysm_resiko;


$tdatam_resiko[".hideMobileList"] = array();




//	resiko_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "resiko_id";
	$fdata["GoodName"] = "resiko_id";
	$fdata["ownerTable"] = "M_RESIKO";
	$fdata["Label"] = GetFieldLabel("M_RESIKO","resiko_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "resiko_id";

		$fdata["sourceSingle"] = "resiko_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "resiko_id";

	
	
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


	$tdatam_resiko["resiko_id"] = $fdata;
		$tdatam_resiko[".searchableFields"][] = "resiko_id";
//	resiko_kode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "resiko_kode";
	$fdata["GoodName"] = "resiko_kode";
	$fdata["ownerTable"] = "M_RESIKO";
	$fdata["Label"] = GetFieldLabel("M_RESIKO","resiko_kode");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "resiko_kode";

		$fdata["sourceSingle"] = "resiko_kode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "resiko_kode";

	
	
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


	$tdatam_resiko["resiko_kode"] = $fdata;
		$tdatam_resiko[".searchableFields"][] = "resiko_kode";
//	resiko_ketr
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "resiko_ketr";
	$fdata["GoodName"] = "resiko_ketr";
	$fdata["ownerTable"] = "M_RESIKO";
	$fdata["Label"] = GetFieldLabel("M_RESIKO","resiko_ketr");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "resiko_ketr";

		$fdata["sourceSingle"] = "resiko_ketr";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "resiko_ketr";

	
	
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


	$tdatam_resiko["resiko_ketr"] = $fdata;
		$tdatam_resiko[".searchableFields"][] = "resiko_ketr";
//	resiko_rate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "resiko_rate";
	$fdata["GoodName"] = "resiko_rate";
	$fdata["ownerTable"] = "M_RESIKO";
	$fdata["Label"] = GetFieldLabel("M_RESIKO","resiko_rate");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "resiko_rate";

		$fdata["sourceSingle"] = "resiko_rate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "resiko_rate";

	
	
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


	$tdatam_resiko["resiko_rate"] = $fdata;
		$tdatam_resiko[".searchableFields"][] = "resiko_rate";
//	resiko_minRate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "resiko_minRate";
	$fdata["GoodName"] = "resiko_minRate";
	$fdata["ownerTable"] = "M_RESIKO";
	$fdata["Label"] = GetFieldLabel("M_RESIKO","resiko_minRate");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "resiko_minRate";

		$fdata["sourceSingle"] = "resiko_minRate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "resiko_minRate";

	
	
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


	$tdatam_resiko["resiko_minRate"] = $fdata;
		$tdatam_resiko[".searchableFields"][] = "resiko_minRate";
//	resiko_limit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "resiko_limit";
	$fdata["GoodName"] = "resiko_limit";
	$fdata["ownerTable"] = "M_RESIKO";
	$fdata["Label"] = GetFieldLabel("M_RESIKO","resiko_limit");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "resiko_limit";

		$fdata["sourceSingle"] = "resiko_limit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "resiko_limit";

	
	
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


	$tdatam_resiko["resiko_limit"] = $fdata;
		$tdatam_resiko[".searchableFields"][] = "resiko_limit";
//	resiko_cob
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "resiko_cob";
	$fdata["GoodName"] = "resiko_cob";
	$fdata["ownerTable"] = "M_RESIKO";
	$fdata["Label"] = GetFieldLabel("M_RESIKO","resiko_cob");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "resiko_cob";

		$fdata["sourceSingle"] = "resiko_cob";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "resiko_cob";

	
	
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
			$edata["EditParams"].= " maxlength=1";

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


	$tdatam_resiko["resiko_cob"] = $fdata;
		$tdatam_resiko[".searchableFields"][] = "resiko_cob";
//	resiko_aktif
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "resiko_aktif";
	$fdata["GoodName"] = "resiko_aktif";
	$fdata["ownerTable"] = "M_RESIKO";
	$fdata["Label"] = GetFieldLabel("M_RESIKO","resiko_aktif");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "resiko_aktif";

		$fdata["sourceSingle"] = "resiko_aktif";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "resiko_aktif";

	
	
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


	$tdatam_resiko["resiko_aktif"] = $fdata;
		$tdatam_resiko[".searchableFields"][] = "resiko_aktif";
//	resiko_urut
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "resiko_urut";
	$fdata["GoodName"] = "resiko_urut";
	$fdata["ownerTable"] = "M_RESIKO";
	$fdata["Label"] = GetFieldLabel("M_RESIKO","resiko_urut");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "resiko_urut";

		$fdata["sourceSingle"] = "resiko_urut";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "resiko_urut";

	
	
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


	$tdatam_resiko["resiko_urut"] = $fdata;
		$tdatam_resiko[".searchableFields"][] = "resiko_urut";
//	add_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "add_user";
	$fdata["GoodName"] = "add_user";
	$fdata["ownerTable"] = "M_RESIKO";
	$fdata["Label"] = GetFieldLabel("M_RESIKO","add_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "add_user";

		$fdata["sourceSingle"] = "add_user";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "add_user";

	
	
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


	$tdatam_resiko["add_user"] = $fdata;
		$tdatam_resiko[".searchableFields"][] = "add_user";
//	add_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "add_date";
	$fdata["GoodName"] = "add_date";
	$fdata["ownerTable"] = "M_RESIKO";
	$fdata["Label"] = GetFieldLabel("M_RESIKO","add_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "add_date";

		$fdata["sourceSingle"] = "add_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "add_date";

	
	
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


	$tdatam_resiko["add_date"] = $fdata;
		$tdatam_resiko[".searchableFields"][] = "add_date";


$tables_data["M_RESIKO"]=&$tdatam_resiko;
$field_labels["M_RESIKO"] = &$fieldLabelsm_resiko;
$fieldToolTips["M_RESIKO"] = &$fieldToolTipsm_resiko;
$placeHolders["M_RESIKO"] = &$placeHoldersm_resiko;
$page_titles["M_RESIKO"] = &$pageTitlesm_resiko;


changeTextControlsToDate( "M_RESIKO" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["M_RESIKO"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["M_RESIKO"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_m_resiko()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "resiko_id,  	resiko_kode,  	resiko_ketr,  	resiko_rate,  	resiko_minRate,  	resiko_limit,  	resiko_cob,  	resiko_aktif,  	resiko_urut,  	add_user,  	add_date";
$proto0["m_strFrom"] = "FROM M_RESIKO";
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
	"m_strName" => "resiko_id",
	"m_strTable" => "M_RESIKO",
	"m_srcTableName" => "M_RESIKO"
));

$proto6["m_sql"] = "resiko_id";
$proto6["m_srcTableName"] = "M_RESIKO";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "resiko_kode",
	"m_strTable" => "M_RESIKO",
	"m_srcTableName" => "M_RESIKO"
));

$proto8["m_sql"] = "resiko_kode";
$proto8["m_srcTableName"] = "M_RESIKO";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "resiko_ketr",
	"m_strTable" => "M_RESIKO",
	"m_srcTableName" => "M_RESIKO"
));

$proto10["m_sql"] = "resiko_ketr";
$proto10["m_srcTableName"] = "M_RESIKO";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "resiko_rate",
	"m_strTable" => "M_RESIKO",
	"m_srcTableName" => "M_RESIKO"
));

$proto12["m_sql"] = "resiko_rate";
$proto12["m_srcTableName"] = "M_RESIKO";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "resiko_minRate",
	"m_strTable" => "M_RESIKO",
	"m_srcTableName" => "M_RESIKO"
));

$proto14["m_sql"] = "resiko_minRate";
$proto14["m_srcTableName"] = "M_RESIKO";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "resiko_limit",
	"m_strTable" => "M_RESIKO",
	"m_srcTableName" => "M_RESIKO"
));

$proto16["m_sql"] = "resiko_limit";
$proto16["m_srcTableName"] = "M_RESIKO";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "resiko_cob",
	"m_strTable" => "M_RESIKO",
	"m_srcTableName" => "M_RESIKO"
));

$proto18["m_sql"] = "resiko_cob";
$proto18["m_srcTableName"] = "M_RESIKO";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "resiko_aktif",
	"m_strTable" => "M_RESIKO",
	"m_srcTableName" => "M_RESIKO"
));

$proto20["m_sql"] = "resiko_aktif";
$proto20["m_srcTableName"] = "M_RESIKO";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "resiko_urut",
	"m_strTable" => "M_RESIKO",
	"m_srcTableName" => "M_RESIKO"
));

$proto22["m_sql"] = "resiko_urut";
$proto22["m_srcTableName"] = "M_RESIKO";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "add_user",
	"m_strTable" => "M_RESIKO",
	"m_srcTableName" => "M_RESIKO"
));

$proto24["m_sql"] = "add_user";
$proto24["m_srcTableName"] = "M_RESIKO";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "add_date",
	"m_strTable" => "M_RESIKO",
	"m_srcTableName" => "M_RESIKO"
));

$proto26["m_sql"] = "add_date";
$proto26["m_srcTableName"] = "M_RESIKO";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "M_RESIKO";
$proto29["m_srcTableName"] = "M_RESIKO";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "resiko_id";
$proto29["m_columns"][] = "resiko_kode";
$proto29["m_columns"][] = "resiko_ketr";
$proto29["m_columns"][] = "resiko_rate";
$proto29["m_columns"][] = "resiko_minRate";
$proto29["m_columns"][] = "resiko_limit";
$proto29["m_columns"][] = "resiko_cob";
$proto29["m_columns"][] = "resiko_aktif";
$proto29["m_columns"][] = "resiko_urut";
$proto29["m_columns"][] = "add_user";
$proto29["m_columns"][] = "add_date";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "M_RESIKO";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "M_RESIKO";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="M_RESIKO";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_m_resiko = createSqlQuery_m_resiko();


	
																												;

											

$tdatam_resiko[".sqlquery"] = $queryData_m_resiko;



$tdatam_resiko[".hasEvents"] = false;

?>