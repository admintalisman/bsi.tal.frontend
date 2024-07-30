<?php
$tdataupload_cabang = array();
$tdataupload_cabang[".searchableFields"] = array();
$tdataupload_cabang[".ShortName"] = "upload_cabang";
$tdataupload_cabang[".OwnerID"] = "";
$tdataupload_cabang[".OriginalTable"] = "TEMPBSICILE";


$tdataupload_cabang[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataupload_cabang[".originalPagesByType"] = $tdataupload_cabang[".pagesByType"];
$tdataupload_cabang[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataupload_cabang[".originalPages"] = $tdataupload_cabang[".pages"];
$tdataupload_cabang[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataupload_cabang[".originalDefaultPages"] = $tdataupload_cabang[".defaultPages"];

//	field labels
$fieldLabelsupload_cabang = array();
$fieldToolTipsupload_cabang = array();
$pageTitlesupload_cabang = array();
$placeHoldersupload_cabang = array();

if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelsupload_cabang["Indonesian"] = array();
	$fieldToolTipsupload_cabang["Indonesian"] = array();
	$placeHoldersupload_cabang["Indonesian"] = array();
	$pageTitlesupload_cabang["Indonesian"] = array();
	$fieldLabelsupload_cabang["Indonesian"]["NMCBGBANK"] = "Cabang";
	$fieldToolTipsupload_cabang["Indonesian"]["NMCBGBANK"] = "";
	$placeHoldersupload_cabang["Indonesian"]["NMCBGBANK"] = "";
	$fieldLabelsupload_cabang["Indonesian"]["Total"] = "Total";
	$fieldToolTipsupload_cabang["Indonesian"]["Total"] = "";
	$placeHoldersupload_cabang["Indonesian"]["Total"] = "";
	if (count($fieldToolTipsupload_cabang["Indonesian"]))
		$tdataupload_cabang[".isUseToolTips"] = true;
}


	$tdataupload_cabang[".NCSearch"] = true;



$tdataupload_cabang[".shortTableName"] = "upload_cabang";
$tdataupload_cabang[".nSecOptions"] = 0;

$tdataupload_cabang[".recsLimit"] = 10;
$tdataupload_cabang[".mainTableOwnerID"] = "";
$tdataupload_cabang[".entityType"] = 1;
$tdataupload_cabang[".connId"] = "u736239518_btn_at_154_41_241_2";


$tdataupload_cabang[".strOriginalTableName"] = "TEMPBSICILE";

	



$tdataupload_cabang[".showAddInPopup"] = false;

$tdataupload_cabang[".showEditInPopup"] = false;

$tdataupload_cabang[".showViewInPopup"] = false;

$tdataupload_cabang[".listAjax"] = false;
//	temporary
//$tdataupload_cabang[".listAjax"] = false;

	$tdataupload_cabang[".audit"] = true;

	$tdataupload_cabang[".locking"] = false;


$pages = $tdataupload_cabang[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataupload_cabang[".edit"] = true;
	$tdataupload_cabang[".afterEditAction"] = 1;
	$tdataupload_cabang[".closePopupAfterEdit"] = 1;
	$tdataupload_cabang[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataupload_cabang[".add"] = true;
$tdataupload_cabang[".afterAddAction"] = 1;
$tdataupload_cabang[".closePopupAfterAdd"] = 1;
$tdataupload_cabang[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataupload_cabang[".list"] = true;
}



$tdataupload_cabang[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataupload_cabang[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataupload_cabang[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataupload_cabang[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataupload_cabang[".printFriendly"] = true;
}



$tdataupload_cabang[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataupload_cabang[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataupload_cabang[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataupload_cabang[".isUseAjaxSuggest"] = true;



																											

$tdataupload_cabang[".ajaxCodeSnippetAdded"] = false;

$tdataupload_cabang[".buttonsAdded"] = false;

$tdataupload_cabang[".addPageEvents"] = false;

// use timepicker for search panel
$tdataupload_cabang[".isUseTimeForSearch"] = false;


$tdataupload_cabang[".badgeColor"] = "D2691E";


$tdataupload_cabang[".allSearchFields"] = array();
$tdataupload_cabang[".filterFields"] = array();
$tdataupload_cabang[".requiredSearchFields"] = array();

$tdataupload_cabang[".googleLikeFields"] = array();
$tdataupload_cabang[".googleLikeFields"][] = "Total";
$tdataupload_cabang[".googleLikeFields"][] = "NMCBGBANK";



$tdataupload_cabang[".tableType"] = "list";

$tdataupload_cabang[".printerPageOrientation"] = 0;
$tdataupload_cabang[".nPrinterPageScale"] = 100;

$tdataupload_cabang[".nPrinterSplitRecords"] = 40;

$tdataupload_cabang[".geocodingEnabled"] = false;




$tdataupload_cabang[".isDisplayLoading"] = true;






$tdataupload_cabang[".pageSize"] = 20;

$tdataupload_cabang[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY POKOKPEMBIAYAAN DESC";
$tdataupload_cabang[".strOrderBy"] = $tstrOrderBy;

$tdataupload_cabang[".orderindexes"] = array();
	$tdataupload_cabang[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "POKOKPEMBIAYAAN");



$tdataupload_cabang[".sqlHead"] = "SELECT SUM(POKOKPEMBIAYAAN) AS Total,  NMCBGBANK";
$tdataupload_cabang[".sqlFrom"] = "FROM TEMPBSICILE";
$tdataupload_cabang[".sqlWhereExpr"] = "(ADDUSER = ':user.username')";
$tdataupload_cabang[".sqlTail"] = "LIMIT 10";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataupload_cabang[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataupload_cabang[".arrGroupsPerPage"] = $arrGPP;

$tdataupload_cabang[".highlightSearchResults"] = true;

$tableKeysupload_cabang = array();
$tdataupload_cabang[".Keys"] = $tableKeysupload_cabang;


$tdataupload_cabang[".hideMobileList"] = array();




//	Total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Total";
	$fdata["GoodName"] = "Total";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("Upload_cabang","Total");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Total";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SUM(POKOKPEMBIAYAAN)";

	
	
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


	$tdataupload_cabang["Total"] = $fdata;
		$tdataupload_cabang[".searchableFields"][] = "Total";
//	NMCBGBANK
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "NMCBGBANK";
	$fdata["GoodName"] = "NMCBGBANK";
	$fdata["ownerTable"] = "TEMPBSICILE";
	$fdata["Label"] = GetFieldLabel("Upload_cabang","NMCBGBANK");
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


	$tdataupload_cabang["NMCBGBANK"] = $fdata;
		$tdataupload_cabang[".searchableFields"][] = "NMCBGBANK";


$tables_data["Upload_cabang"]=&$tdataupload_cabang;
$field_labels["Upload_cabang"] = &$fieldLabelsupload_cabang;
$fieldToolTips["Upload_cabang"] = &$fieldToolTipsupload_cabang;
$placeHolders["Upload_cabang"] = &$placeHoldersupload_cabang;
$page_titles["Upload_cabang"] = &$pageTitlesupload_cabang;


changeTextControlsToDate( "Upload_cabang" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Upload_cabang"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Upload_cabang"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_upload_cabang()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "SUM(POKOKPEMBIAYAAN) AS Total,  NMCBGBANK";
$proto0["m_strFrom"] = "FROM TEMPBSICILE";
$proto0["m_strWhere"] = "(ADDUSER = ':user.username')";
$proto0["m_strOrderBy"] = "ORDER BY POKOKPEMBIAYAAN DESC";
	
																												;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "ADDUSER = ':user.username'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "ADDUSER",
	"m_strTable" => "TEMPBSICILE",
	"m_srcTableName" => "Upload_cabang"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= ':user.username'";
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
			$proto7=array();
$proto7["m_functiontype"] = "SQLF_SUM";
$proto7["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "POKOKPEMBIAYAAN",
	"m_strTable" => "TEMPBSICILE",
	"m_srcTableName" => "Upload_cabang"
));

$proto7["m_arguments"][]=$obj;
$proto7["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto7);

$proto6["m_sql"] = "SUM(POKOKPEMBIAYAAN)";
$proto6["m_srcTableName"] = "Upload_cabang";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "Total";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "NMCBGBANK",
	"m_strTable" => "TEMPBSICILE",
	"m_srcTableName" => "Upload_cabang"
));

$proto9["m_sql"] = "NMCBGBANK";
$proto9["m_srcTableName"] = "Upload_cabang";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "TEMPBSICILE";
$proto12["m_srcTableName"] = "Upload_cabang";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "IDTEMPCE";
$proto12["m_columns"][] = "NOLOANDISBURSE";
$proto12["m_columns"][] = "NAMATERJAMIN";
$proto12["m_columns"][] = "POKOKPEMBIAYAAN";
$proto12["m_columns"][] = "JANGKAWAKTU";
$proto12["m_columns"][] = "TGLAKAD";
$proto12["m_columns"][] = "TGLJATUHTEMPO";
$proto12["m_columns"][] = "KDCBGBANK";
$proto12["m_columns"][] = "NMCBGBANK";
$proto12["m_columns"][] = "ADDUSER";
$proto12["m_columns"][] = "ADDDATE";
$proto12["m_columns"][] = "NIK";
$proto12["m_columns"][] = "TGLLAHIR";
$proto12["m_columns"][] = "ALAMAT";
$proto12["m_columns"][] = "BSMID";
$proto12["m_columns"][] = "PROPOSALNO";
$proto12["m_columns"][] = "PREMI";
$proto12["m_columns"][] = "RATE";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_sql"] = "TEMPBSICILE";
$proto11["m_alias"] = "";
$proto11["m_srcTableName"] = "Upload_cabang";
$proto13=array();
$proto13["m_sql"] = "";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "";
$proto13["m_havingmode"] = false;
$proto13["m_inBrackets"] = false;
$proto13["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto13);

$proto11["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto11);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto15=array();
						$obj = new SQLField(array(
	"m_strName" => "NMCBGBANK",
	"m_strTable" => "TEMPBSICILE",
	"m_srcTableName" => "Upload_cabang"
));

$proto15["m_column"]=$obj;
$obj = new SQLGroupByItem($proto15);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto17=array();
						$obj = new SQLField(array(
	"m_strName" => "POKOKPEMBIAYAAN",
	"m_strTable" => "TEMPBSICILE",
	"m_srcTableName" => "Upload_cabang"
));

$proto17["m_column"]=$obj;
$proto17["m_bAsc"] = 0;
$proto17["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto17);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="Upload_cabang";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_upload_cabang = createSqlQuery_upload_cabang();


	
																												;

		

$tdataupload_cabang[".sqlquery"] = $queryData_upload_cabang;



$tdataupload_cabang[".hasEvents"] = false;

?>