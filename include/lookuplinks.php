<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["getbsibranch"] ) ) {
			$lookupTableLinks["getbsibranch"] = array();
		}
		if( !isset( $lookupTableLinks["getbsibranch"]["tempbsicis_view1.Cabang"] )) {
			$lookupTableLinks["getbsibranch"]["tempbsicis_view1.Cabang"] = array();
		}
		$lookupTableLinks["getbsibranch"]["tempbsicis_view1.Cabang"]["edit"] = array("table" => "TEMPBSICIS_view1", "field" => "Cabang", "page" => "edit");
		if( !isset( $lookupTableLinks["getbsibranch"] ) ) {
			$lookupTableLinks["getbsibranch"] = array();
		}
		if( !isset( $lookupTableLinks["getbsibranch"]["tempbsicis_view2.KODECABANG"] )) {
			$lookupTableLinks["getbsibranch"]["tempbsicis_view2.KODECABANG"] = array();
		}
		$lookupTableLinks["getbsibranch"]["tempbsicis_view2.KODECABANG"]["search"] = array("table" => "TEMPBSICIS_view2", "field" => "KODECABANG", "page" => "search");
		if( !isset( $lookupTableLinks["getbsibranch"] ) ) {
			$lookupTableLinks["getbsibranch"] = array();
		}
		if( !isset( $lookupTableLinks["getbsibranch"]["tempbsicis_view3.KODECABANG"] )) {
			$lookupTableLinks["getbsibranch"]["tempbsicis_view3.KODECABANG"] = array();
		}
		$lookupTableLinks["getbsibranch"]["tempbsicis_view3.KODECABANG"]["edit"] = array("table" => "TEMPBSICIS_view3", "field" => "KODECABANG", "page" => "edit");
		if( !isset( $lookupTableLinks["getbsibranch"] ) ) {
			$lookupTableLinks["getbsibranch"] = array();
		}
		if( !isset( $lookupTableLinks["getbsibranch"]["tempbsicit_view.CIT_IDCBG"] )) {
			$lookupTableLinks["getbsibranch"]["tempbsicit_view.CIT_IDCBG"] = array();
		}
		$lookupTableLinks["getbsibranch"]["tempbsicit_view.CIT_IDCBG"]["edit"] = array("table" => "TEMPBSICIT_view", "field" => "CIT_IDCBG", "page" => "edit");
		if( !isset( $lookupTableLinks["BSIVEHICLE"] ) ) {
			$lookupTableLinks["BSIVEHICLE"] = array();
		}
		if( !isset( $lookupTableLinks["BSIVEHICLE"]["tempbsicit_verifikasi.CIT_VECH"] )) {
			$lookupTableLinks["BSIVEHICLE"]["tempbsicit_verifikasi.CIT_VECH"] = array();
		}
		$lookupTableLinks["BSIVEHICLE"]["tempbsicit_verifikasi.CIT_VECH"]["add"] = array("table" => "TEMPBSICIT_verifikasi", "field" => "CIT_VECH", "page" => "add");
		if( !isset( $lookupTableLinks["BSIBRANCH"] ) ) {
			$lookupTableLinks["BSIBRANCH"] = array();
		}
		if( !isset( $lookupTableLinks["BSIBRANCH"]["tempbsicis_kc.KODECABANG"] )) {
			$lookupTableLinks["BSIBRANCH"]["tempbsicis_kc.KODECABANG"] = array();
		}
		$lookupTableLinks["BSIBRANCH"]["tempbsicis_kc.KODECABANG"]["edit"] = array("table" => "TEMPBSICIS_KC", "field" => "KODECABANG", "page" => "edit");
		if( !isset( $lookupTableLinks["BSIBRANCH"] ) ) {
			$lookupTableLinks["BSIBRANCH"] = array();
		}
		if( !isset( $lookupTableLinks["BSIBRANCH"]["tempbsicis_atm.KODECABANG"] )) {
			$lookupTableLinks["BSIBRANCH"]["tempbsicis_atm.KODECABANG"] = array();
		}
		$lookupTableLinks["BSIBRANCH"]["tempbsicis_atm.KODECABANG"]["edit"] = array("table" => "TEMPBSICIS_ATM", "field" => "KODECABANG", "page" => "edit");
		if( !isset( $lookupTableLinks["BSIBRANCH"] ) ) {
			$lookupTableLinks["BSIBRANCH"] = array();
		}
		if( !isset( $lookupTableLinks["BSIBRANCH"]["tempbsicis_ol.KODECABANG"] )) {
			$lookupTableLinks["BSIBRANCH"]["tempbsicis_ol.KODECABANG"] = array();
		}
		$lookupTableLinks["BSIBRANCH"]["tempbsicis_ol.KODECABANG"]["edit"] = array("table" => "TEMPBSICIS_OL", "field" => "KODECABANG", "page" => "edit");
		if( !isset( $lookupTableLinks["BSIVEHICLE"] ) ) {
			$lookupTableLinks["BSIVEHICLE"] = array();
		}
		if( !isset( $lookupTableLinks["BSIVEHICLE"]["bsivehlimit.IDVEHICLE"] )) {
			$lookupTableLinks["BSIVEHICLE"]["bsivehlimit.IDVEHICLE"] = array();
		}
		$lookupTableLinks["BSIVEHICLE"]["bsivehlimit.IDVEHICLE"]["edit"] = array("table" => "BSIVEHLIMIT", "field" => "IDVEHICLE", "page" => "edit");
		if( !isset( $lookupTableLinks["M_RESIKO"] ) ) {
			$lookupTableLinks["M_RESIKO"] = array();
		}
		if( !isset( $lookupTableLinks["M_RESIKO"]["bsivehlimit.IDRATE"] )) {
			$lookupTableLinks["M_RESIKO"]["bsivehlimit.IDRATE"] = array();
		}
		$lookupTableLinks["M_RESIKO"]["bsivehlimit.IDRATE"]["edit"] = array("table" => "BSIVEHLIMIT", "field" => "IDRATE", "page" => "edit");
		if( !isset( $lookupTableLinks["BSIVEHLIMIT_COL"] ) ) {
			$lookupTableLinks["BSIVEHLIMIT_COL"] = array();
		}
		if( !isset( $lookupTableLinks["BSIVEHLIMIT_COL"]["tempbsicit_coll.CIT_VECH"] )) {
			$lookupTableLinks["BSIVEHLIMIT_COL"]["tempbsicit_coll.CIT_VECH"] = array();
		}
		$lookupTableLinks["BSIVEHLIMIT_COL"]["tempbsicit_coll.CIT_VECH"]["add"] = array("table" => "TEMPBSICIT_COLL", "field" => "CIT_VECH", "page" => "add");
		if( !isset( $lookupTableLinks["BSIVEHLIMIT_COL"] ) ) {
			$lookupTableLinks["BSIVEHLIMIT_COL"] = array();
		}
		if( !isset( $lookupTableLinks["BSIVEHLIMIT_COL"]["tempbsicit_coll.CIT_VECH"] )) {
			$lookupTableLinks["BSIVEHLIMIT_COL"]["tempbsicit_coll.CIT_VECH"] = array();
		}
		$lookupTableLinks["BSIVEHLIMIT_COL"]["tempbsicit_coll.CIT_VECH"]["search"] = array("table" => "TEMPBSICIT_COLL", "field" => "CIT_VECH", "page" => "search");
		if( !isset( $lookupTableLinks["BSIVEHLIMIT_view"] ) ) {
			$lookupTableLinks["BSIVEHLIMIT_view"] = array();
		}
		if( !isset( $lookupTableLinks["BSIVEHLIMIT_view"]["tempbsicit_cit.CIT_VECH"] )) {
			$lookupTableLinks["BSIVEHLIMIT_view"]["tempbsicit_cit.CIT_VECH"] = array();
		}
		$lookupTableLinks["BSIVEHLIMIT_view"]["tempbsicit_cit.CIT_VECH"]["add"] = array("table" => "TEMPBSICIT_CIT", "field" => "CIT_VECH", "page" => "add");
		if( !isset( $lookupTableLinks["BSIVEHLIMIT_view"] ) ) {
			$lookupTableLinks["BSIVEHLIMIT_view"] = array();
		}
		if( !isset( $lookupTableLinks["BSIVEHLIMIT_view"]["tempbsicit_cit.CIT_VECH"] )) {
			$lookupTableLinks["BSIVEHLIMIT_view"]["tempbsicit_cit.CIT_VECH"] = array();
		}
		$lookupTableLinks["BSIVEHLIMIT_view"]["tempbsicit_cit.CIT_VECH"]["search"] = array("table" => "TEMPBSICIT_CIT", "field" => "CIT_VECH", "page" => "search");
		if( !isset( $lookupTableLinks["LOGIN"] ) ) {
			$lookupTableLinks["LOGIN"] = array();
		}
		if( !isset( $lookupTableLinks["LOGIN"]["bsiapprv.BSIAPPRVFROM"] )) {
			$lookupTableLinks["LOGIN"]["bsiapprv.BSIAPPRVFROM"] = array();
		}
		$lookupTableLinks["LOGIN"]["bsiapprv.BSIAPPRVFROM"]["edit"] = array("table" => "BSIAPPRV", "field" => "BSIAPPRVFROM", "page" => "edit");
		if( !isset( $lookupTableLinks["LOGIN"] ) ) {
			$lookupTableLinks["LOGIN"] = array();
		}
		if( !isset( $lookupTableLinks["LOGIN"]["bsiapprv.BSIAPPRVTO"] )) {
			$lookupTableLinks["LOGIN"]["bsiapprv.BSIAPPRVTO"] = array();
		}
		$lookupTableLinks["LOGIN"]["bsiapprv.BSIAPPRVTO"]["edit"] = array("table" => "BSIAPPRV", "field" => "BSIAPPRVTO", "page" => "edit");
}

?>