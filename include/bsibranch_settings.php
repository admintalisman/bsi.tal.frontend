<?php
$tdatabsibranch = array();
$tdatabsibranch[".searchableFields"] = array();
$tdatabsibranch[".ShortName"] = "bsibranch";
$tdatabsibranch[".OwnerID"] = "";
$tdatabsibranch[".OriginalTable"] = "BSIBRANCH";


$tdatabsibranch[".pagesByType"] = my_json_decode( "{}" );
$tdatabsibranch[".originalPagesByType"] = $tdatabsibranch[".pagesByType"];
$tdatabsibranch[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatabsibranch[".originalPages"] = $tdatabsibranch[".pages"];
$tdatabsibranch[".defaultPages"] = my_json_decode( "{}" );
$tdatabsibranch[".originalDefaultPages"] = $tdatabsibranch[".defaultPages"];

//	field labels
$fieldLabelsbsibranch = array();
$fieldToolTipsbsibranch = array();
$pageTitlesbsibranch = array();
$placeHoldersbsibranch = array();

if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelsbsibranch["Indonesian"] = array();
	$fieldToolTipsbsibranch["Indonesian"] = array();
	$placeHoldersbsibranch["Indonesian"] = array();
	$pageTitlesbsibranch["Indonesian"] = array();
	$fieldLabelsbsibranch["Indonesian"]["IDKC"] = "IDKC";
	$fieldToolTipsbsibranch["Indonesian"]["IDKC"] = "";
	$placeHoldersbsibranch["Indonesian"]["IDKC"] = "";
	$fieldLabelsbsibranch["Indonesian"]["IDBRANCH"] = "IDBRANCH";
	$fieldToolTipsbsibranch["Indonesian"]["IDBRANCH"] = "";
	$placeHoldersbsibranch["Indonesian"]["IDBRANCH"] = "";
	$fieldLabelsbsibranch["Indonesian"]["BRANCHNAME"] = "BRANCHNAME";
	$fieldToolTipsbsibranch["Indonesian"]["BRANCHNAME"] = "";
	$placeHoldersbsibranch["Indonesian"]["BRANCHNAME"] = "";
	$fieldLabelsbsibranch["Indonesian"]["BSIOFFICE"] = "BSIOFFICE";
	$fieldToolTipsbsibranch["Indonesian"]["BSIOFFICE"] = "";
	$placeHoldersbsibranch["Indonesian"]["BSIOFFICE"] = "";
	$fieldLabelsbsibranch["Indonesian"]["BRANCHADDR"] = "BRANCHADDR";
	$fieldToolTipsbsibranch["Indonesian"]["BRANCHADDR"] = "";
	$placeHoldersbsibranch["Indonesian"]["BRANCHADDR"] = "";
	$fieldLabelsbsibranch["Indonesian"]["AREAID"] = "AREAID";
	$fieldToolTipsbsibranch["Indonesian"]["AREAID"] = "";
	$placeHoldersbsibranch["Indonesian"]["AREAID"] = "";
	$fieldLabelsbsibranch["Indonesian"]["REGIONID"] = "REGIONID";
	$fieldToolTipsbsibranch["Indonesian"]["REGIONID"] = "";
	$placeHoldersbsibranch["Indonesian"]["REGIONID"] = "";
	if (count($fieldToolTipsbsibranch["Indonesian"]))
		$tdatabsibranch[".isUseToolTips"] = true;
}


	$tdatabsibranch[".NCSearch"] = true;



$tdatabsibranch[".shortTableName"] = "bsibranch";
$tdatabsibranch[".nSecOptions"] = 0;

$tdatabsibranch[".mainTableOwnerID"] = "";
$tdatabsibranch[".entityType"] = 0;
$tdatabsibranch[".connId"] = "u736239518_btn_at_154_41_241_2";


$tdatabsibranch[".strOriginalTableName"] = "BSIBRANCH";

	



$tdatabsibranch[".showAddInPopup"] = false;

$tdatabsibranch[".showEditInPopup"] = false;

$tdatabsibranch[".showViewInPopup"] = false;

$tdatabsibranch[".listAjax"] = false;
//	temporary
//$tdatabsibranch[".listAjax"] = false;

	$tdatabsibranch[".audit"] = false;

	$tdatabsibranch[".locking"] = false;


$pages = $tdatabsibranch[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatabsibranch[".edit"] = true;
	$tdatabsibranch[".afterEditAction"] = 1;
	$tdatabsibranch[".closePopupAfterEdit"] = 1;
	$tdatabsibranch[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatabsibranch[".add"] = true;
$tdatabsibranch[".afterAddAction"] = 1;
$tdatabsibranch[".closePopupAfterAdd"] = 1;
$tdatabsibranch[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatabsibranch[".list"] = true;
}



$tdatabsibranch[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatabsibranch[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatabsibranch[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatabsibranch[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatabsibranch[".printFriendly"] = true;
}



$tdatabsibranch[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatabsibranch[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatabsibranch[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatabsibranch[".isUseAjaxSuggest"] = true;



																											

$tdatabsibranch[".ajaxCodeSnippetAdded"] = false;

$tdatabsibranch[".buttonsAdded"] = false;

$tdatabsibranch[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabsibranch[".isUseTimeForSearch"] = false;


$tdatabsibranch[".badgeColor"] = "CFAE83";


$tdatabsibranch[".allSearchFields"] = array();
$tdatabsibranch[".filterFields"] = array();
$tdatabsibranch[".requiredSearchFields"] = array();

$tdatabsibranch[".googleLikeFields"] = array();
$tdatabsibranch[".googleLikeFields"][] = "IDKC";
$tdatabsibranch[".googleLikeFields"][] = "IDBRANCH";
$tdatabsibranch[".googleLikeFields"][] = "BRANCHNAME";
$tdatabsibranch[".googleLikeFields"][] = "BSIOFFICE";
$tdatabsibranch[".googleLikeFields"][] = "BRANCHADDR";
$tdatabsibranch[".googleLikeFields"][] = "AREAID";
$tdatabsibranch[".googleLikeFields"][] = "REGIONID";



$tdatabsibranch[".tableType"] = "list";

$tdatabsibranch[".printerPageOrientation"] = 0;
$tdatabsibranch[".nPrinterPageScale"] = 100;

$tdatabsibranch[".nPrinterSplitRecords"] = 40;

$tdatabsibranch[".geocodingEnabled"] = false;










$tdatabsibranch[".pageSize"] = 20;

$tdatabsibranch[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatabsibranch[".strOrderBy"] = $tstrOrderBy;

$tdatabsibranch[".orderindexes"] = array();


$tdatabsibranch[".sqlHead"] = "SELECT IDKC,  	IDBRANCH,  	BRANCHNAME,  	BSIOFFICE,  	BRANCHADDR,  	AREAID,  	REGIONID";
$tdatabsibranch[".sqlFrom"] = "FROM BSIBRANCH";
$tdatabsibranch[".sqlWhereExpr"] = "";
$tdatabsibranch[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabsibranch[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabsibranch[".arrGroupsPerPage"] = $arrGPP;

$tdatabsibranch[".highlightSearchResults"] = true;

$tableKeysbsibranch = array();
$tableKeysbsibranch[] = "IDKC";
$tdatabsibranch[".Keys"] = $tableKeysbsibranch;


$tdatabsibranch[".hideMobileList"] = array();




//	IDKC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "IDKC";
	$fdata["GoodName"] = "IDKC";
	$fdata["ownerTable"] = "BSIBRANCH";
	$fdata["Label"] = GetFieldLabel("BSIBRANCH","IDKC");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "IDKC";

		$fdata["sourceSingle"] = "IDKC";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IDKC";

	
	
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


	$tdatabsibranch["IDKC"] = $fdata;
		$tdatabsibranch[".searchableFields"][] = "IDKC";
//	IDBRANCH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "IDBRANCH";
	$fdata["GoodName"] = "IDBRANCH";
	$fdata["ownerTable"] = "BSIBRANCH";
	$fdata["Label"] = GetFieldLabel("BSIBRANCH","IDBRANCH");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "IDBRANCH";

		$fdata["sourceSingle"] = "IDBRANCH";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IDBRANCH";

	
	
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


	$tdatabsibranch["IDBRANCH"] = $fdata;
		$tdatabsibranch[".searchableFields"][] = "IDBRANCH";
//	BRANCHNAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "BRANCHNAME";
	$fdata["GoodName"] = "BRANCHNAME";
	$fdata["ownerTable"] = "BSIBRANCH";
	$fdata["Label"] = GetFieldLabel("BSIBRANCH","BRANCHNAME");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "BRANCHNAME";

		$fdata["sourceSingle"] = "BRANCHNAME";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BRANCHNAME";

	
	
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


	$tdatabsibranch["BRANCHNAME"] = $fdata;
		$tdatabsibranch[".searchableFields"][] = "BRANCHNAME";
//	BSIOFFICE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "BSIOFFICE";
	$fdata["GoodName"] = "BSIOFFICE";
	$fdata["ownerTable"] = "BSIBRANCH";
	$fdata["Label"] = GetFieldLabel("BSIBRANCH","BSIOFFICE");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "BSIOFFICE";

		$fdata["sourceSingle"] = "BSIOFFICE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BSIOFFICE";

	
	
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
			$edata["EditParams"].= " maxlength=45";

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


	$tdatabsibranch["BSIOFFICE"] = $fdata;
		$tdatabsibranch[".searchableFields"][] = "BSIOFFICE";
//	BRANCHADDR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "BRANCHADDR";
	$fdata["GoodName"] = "BRANCHADDR";
	$fdata["ownerTable"] = "BSIBRANCH";
	$fdata["Label"] = GetFieldLabel("BSIBRANCH","BRANCHADDR");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "BRANCHADDR";

		$fdata["sourceSingle"] = "BRANCHADDR";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BRANCHADDR";

	
	
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
			$edata["EditParams"].= " maxlength=300";

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


	$tdatabsibranch["BRANCHADDR"] = $fdata;
		$tdatabsibranch[".searchableFields"][] = "BRANCHADDR";
//	AREAID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "AREAID";
	$fdata["GoodName"] = "AREAID";
	$fdata["ownerTable"] = "BSIBRANCH";
	$fdata["Label"] = GetFieldLabel("BSIBRANCH","AREAID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "AREAID";

		$fdata["sourceSingle"] = "AREAID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AREAID";

	
	
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


	$tdatabsibranch["AREAID"] = $fdata;
		$tdatabsibranch[".searchableFields"][] = "AREAID";
//	REGIONID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "REGIONID";
	$fdata["GoodName"] = "REGIONID";
	$fdata["ownerTable"] = "BSIBRANCH";
	$fdata["Label"] = GetFieldLabel("BSIBRANCH","REGIONID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "REGIONID";

		$fdata["sourceSingle"] = "REGIONID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "REGIONID";

	
	
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


	$tdatabsibranch["REGIONID"] = $fdata;
		$tdatabsibranch[".searchableFields"][] = "REGIONID";


$tables_data["BSIBRANCH"]=&$tdatabsibranch;
$field_labels["BSIBRANCH"] = &$fieldLabelsbsibranch;
$fieldToolTips["BSIBRANCH"] = &$fieldToolTipsbsibranch;
$placeHolders["BSIBRANCH"] = &$placeHoldersbsibranch;
$page_titles["BSIBRANCH"] = &$pageTitlesbsibranch;


changeTextControlsToDate( "BSIBRANCH" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["BSIBRANCH"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["BSIBRANCH"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_bsibranch()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "IDKC,  	IDBRANCH,  	BRANCHNAME,  	BSIOFFICE,  	BRANCHADDR,  	AREAID,  	REGIONID";
$proto0["m_strFrom"] = "FROM BSIBRANCH";
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
	"m_strName" => "IDKC",
	"m_strTable" => "BSIBRANCH",
	"m_srcTableName" => "BSIBRANCH"
));

$proto6["m_sql"] = "IDKC";
$proto6["m_srcTableName"] = "BSIBRANCH";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "IDBRANCH",
	"m_strTable" => "BSIBRANCH",
	"m_srcTableName" => "BSIBRANCH"
));

$proto8["m_sql"] = "IDBRANCH";
$proto8["m_srcTableName"] = "BSIBRANCH";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "BRANCHNAME",
	"m_strTable" => "BSIBRANCH",
	"m_srcTableName" => "BSIBRANCH"
));

$proto10["m_sql"] = "BRANCHNAME";
$proto10["m_srcTableName"] = "BSIBRANCH";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "BSIOFFICE",
	"m_strTable" => "BSIBRANCH",
	"m_srcTableName" => "BSIBRANCH"
));

$proto12["m_sql"] = "BSIOFFICE";
$proto12["m_srcTableName"] = "BSIBRANCH";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "BRANCHADDR",
	"m_strTable" => "BSIBRANCH",
	"m_srcTableName" => "BSIBRANCH"
));

$proto14["m_sql"] = "BRANCHADDR";
$proto14["m_srcTableName"] = "BSIBRANCH";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "AREAID",
	"m_strTable" => "BSIBRANCH",
	"m_srcTableName" => "BSIBRANCH"
));

$proto16["m_sql"] = "AREAID";
$proto16["m_srcTableName"] = "BSIBRANCH";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "REGIONID",
	"m_strTable" => "BSIBRANCH",
	"m_srcTableName" => "BSIBRANCH"
));

$proto18["m_sql"] = "REGIONID";
$proto18["m_srcTableName"] = "BSIBRANCH";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "BSIBRANCH";
$proto21["m_srcTableName"] = "BSIBRANCH";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "IDKC";
$proto21["m_columns"][] = "IDBRANCH";
$proto21["m_columns"][] = "BRANCHNAME";
$proto21["m_columns"][] = "BSIOFFICE";
$proto21["m_columns"][] = "BRANCHADDR";
$proto21["m_columns"][] = "AREAID";
$proto21["m_columns"][] = "REGIONID";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "BSIBRANCH";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "BSIBRANCH";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="BSIBRANCH";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_bsibranch = createSqlQuery_bsibranch();


	
																												;

							

$tdatabsibranch[".sqlquery"] = $queryData_bsibranch;



$tdatabsibranch[".hasEvents"] = false;

?>