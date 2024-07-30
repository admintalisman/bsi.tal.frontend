<?php
$tdatasurat = array();
$tdatasurat[".searchableFields"] = array();
$tdatasurat[".ShortName"] = "surat";
$tdatasurat[".OwnerID"] = "";
$tdatasurat[".OriginalTable"] = "SURAT";


$tdatasurat[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatasurat[".originalPagesByType"] = $tdatasurat[".pagesByType"];
$tdatasurat[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatasurat[".originalPages"] = $tdatasurat[".pages"];
$tdatasurat[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatasurat[".originalDefaultPages"] = $tdatasurat[".defaultPages"];

//	field labels
$fieldLabelssurat = array();
$fieldToolTipssurat = array();
$pageTitlessurat = array();
$placeHolderssurat = array();

if(mlang_getcurrentlang()=="Indonesian")
{
	$fieldLabelssurat["Indonesian"] = array();
	$fieldToolTipssurat["Indonesian"] = array();
	$placeHolderssurat["Indonesian"] = array();
	$pageTitlessurat["Indonesian"] = array();
	$fieldLabelssurat["Indonesian"]["ID"] = "ID";
	$fieldToolTipssurat["Indonesian"]["ID"] = "";
	$placeHolderssurat["Indonesian"]["ID"] = "";
	$fieldLabelssurat["Indonesian"]["JUDUL"] = "JUDUL";
	$fieldToolTipssurat["Indonesian"]["JUDUL"] = "";
	$placeHolderssurat["Indonesian"]["JUDUL"] = "";
	$fieldLabelssurat["Indonesian"]["ISI"] = "ISI";
	$fieldToolTipssurat["Indonesian"]["ISI"] = "";
	$placeHolderssurat["Indonesian"]["ISI"] = "";
	if (count($fieldToolTipssurat["Indonesian"]))
		$tdatasurat[".isUseToolTips"] = true;
}


	$tdatasurat[".NCSearch"] = true;



$tdatasurat[".shortTableName"] = "surat";
$tdatasurat[".nSecOptions"] = 0;

$tdatasurat[".mainTableOwnerID"] = "";
$tdatasurat[".entityType"] = 0;
$tdatasurat[".connId"] = "u736239518_btn_at_154_41_241_2";


$tdatasurat[".strOriginalTableName"] = "SURAT";

	



$tdatasurat[".showAddInPopup"] = false;

$tdatasurat[".showEditInPopup"] = false;

$tdatasurat[".showViewInPopup"] = false;

$tdatasurat[".listAjax"] = false;
//	temporary
//$tdatasurat[".listAjax"] = false;

	$tdatasurat[".audit"] = true;

	$tdatasurat[".locking"] = false;


$pages = $tdatasurat[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasurat[".edit"] = true;
	$tdatasurat[".afterEditAction"] = 1;
	$tdatasurat[".closePopupAfterEdit"] = 1;
	$tdatasurat[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasurat[".add"] = true;
$tdatasurat[".afterAddAction"] = 1;
$tdatasurat[".closePopupAfterAdd"] = 1;
$tdatasurat[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasurat[".list"] = true;
}



$tdatasurat[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasurat[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasurat[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasurat[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasurat[".printFriendly"] = true;
}



$tdatasurat[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasurat[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasurat[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasurat[".isUseAjaxSuggest"] = true;



																											

$tdatasurat[".ajaxCodeSnippetAdded"] = false;

$tdatasurat[".buttonsAdded"] = false;

$tdatasurat[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasurat[".isUseTimeForSearch"] = false;


$tdatasurat[".badgeColor"] = "2F4F4F";


$tdatasurat[".allSearchFields"] = array();
$tdatasurat[".filterFields"] = array();
$tdatasurat[".requiredSearchFields"] = array();

$tdatasurat[".googleLikeFields"] = array();
$tdatasurat[".googleLikeFields"][] = "ID";
$tdatasurat[".googleLikeFields"][] = "JUDUL";
$tdatasurat[".googleLikeFields"][] = "ISI";



$tdatasurat[".tableType"] = "list";

$tdatasurat[".printerPageOrientation"] = 0;
$tdatasurat[".nPrinterPageScale"] = 100;

$tdatasurat[".nPrinterSplitRecords"] = 40;

$tdatasurat[".geocodingEnabled"] = false;










$tdatasurat[".pageSize"] = 20;

$tdatasurat[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasurat[".strOrderBy"] = $tstrOrderBy;

$tdatasurat[".orderindexes"] = array();


$tdatasurat[".sqlHead"] = "SELECT ID,  	JUDUL,  	ISI";
$tdatasurat[".sqlFrom"] = "FROM SURAT";
$tdatasurat[".sqlWhereExpr"] = "";
$tdatasurat[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasurat[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasurat[".arrGroupsPerPage"] = $arrGPP;

$tdatasurat[".highlightSearchResults"] = true;

$tableKeyssurat = array();
$tableKeyssurat[] = "ID";
$tdatasurat[".Keys"] = $tableKeyssurat;


$tdatasurat[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "SURAT";
	$fdata["Label"] = GetFieldLabel("SURAT","ID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ID";

		$fdata["sourceSingle"] = "ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";

	
	
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


	$tdatasurat["ID"] = $fdata;
		$tdatasurat[".searchableFields"][] = "ID";
//	JUDUL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "JUDUL";
	$fdata["GoodName"] = "JUDUL";
	$fdata["ownerTable"] = "SURAT";
	$fdata["Label"] = GetFieldLabel("SURAT","JUDUL");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "JUDUL";

		$fdata["sourceSingle"] = "JUDUL";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "JUDUL";

	
	
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


	$tdatasurat["JUDUL"] = $fdata;
		$tdatasurat[".searchableFields"][] = "JUDUL";
//	ISI
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ISI";
	$fdata["GoodName"] = "ISI";
	$fdata["ownerTable"] = "SURAT";
	$fdata["Label"] = GetFieldLabel("SURAT","ISI");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "ISI";

		$fdata["sourceSingle"] = "ISI";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ISI";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatasurat["ISI"] = $fdata;
		$tdatasurat[".searchableFields"][] = "ISI";


$tables_data["SURAT"]=&$tdatasurat;
$field_labels["SURAT"] = &$fieldLabelssurat;
$fieldToolTips["SURAT"] = &$fieldToolTipssurat;
$placeHolders["SURAT"] = &$placeHolderssurat;
$page_titles["SURAT"] = &$pageTitlessurat;


changeTextControlsToDate( "SURAT" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["SURAT"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["SURAT"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_surat()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	JUDUL,  	ISI";
$proto0["m_strFrom"] = "FROM SURAT";
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
	"m_strName" => "ID",
	"m_strTable" => "SURAT",
	"m_srcTableName" => "SURAT"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "SURAT";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "JUDUL",
	"m_strTable" => "SURAT",
	"m_srcTableName" => "SURAT"
));

$proto8["m_sql"] = "JUDUL";
$proto8["m_srcTableName"] = "SURAT";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ISI",
	"m_strTable" => "SURAT",
	"m_srcTableName" => "SURAT"
));

$proto10["m_sql"] = "ISI";
$proto10["m_srcTableName"] = "SURAT";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "SURAT";
$proto13["m_srcTableName"] = "SURAT";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "ID";
$proto13["m_columns"][] = "JUDUL";
$proto13["m_columns"][] = "ISI";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "SURAT";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "SURAT";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="SURAT";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_surat = createSqlQuery_surat();


	
																												;

			

$tdatasurat[".sqlquery"] = $queryData_surat;



$tdatasurat[".hasEvents"] = false;

?>