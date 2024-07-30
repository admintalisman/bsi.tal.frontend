<?php
class ConnectionManager_Base
{
	/**
	 * Cached Connection objects
	 * @type Array
	 */
	protected $cache = array();

	/**
	 * Project connections data
	 * @type Array
	 */
	protected $_connectionsData;

	/**
	 * Project connections data
	 * @type Array
	 */
	protected $_connectionsIdByName = array();


	/**
	 * An array storing the correspondence between project
	 * datasource tables names and connections ids
	 * @type Array
	 */
	protected $_tablesConnectionIds;


	/**
	 * @constructor
	 */
	function __construct()
	{
		$this->_setConnectionsData();
		$this->_setTablesConnectionIds();
	}

	/**
	 * Get connection id by the table name
	 * @param String tName
	 * @return Connection
	 */
	public function getTableConnId( $tName )
	{
		return $this->_tablesConnectionIds[ $tName ];
	}


	/**
	 * Get connection object by the table name
	 * @param String tName
	 * @return Connection
	 */
	public function byTable( $tName )
	{
		$connId = $this->_tablesConnectionIds[ $tName ];
		if( !$connId )
			return $this->getDefault();
		return $this->byId( $connId );
	}

	/**
	 * Get connection object by the connection name
	 * @param String connName
	 * @return Connection
	 */
	public function byName( $connName )
	{
		$connId = $this->getIdByName( $connName );
		if( !$connId )
			return $this->getDefault();
		return $this->byId( $connId );
	}

	/**
	 * Get connection id by the connection name
	 * @param String connName
	 * @return String
	 */
	protected function getIdByName( $connName )
	{
		return $this->_connectionsIdByName[ $connName ];
	}

	/**
	 * Get connection object by the connection id
	 * @param String connId
	 * @return Connection
	 */
	public function byId( $connId )
	{
		if( !isset( $this->cache[ $connId ] ) ) {
			$conn = $this->getConnection( $connId );
			if( !$conn ) {
				global $restApis;
				$conn = $restApis->getConnection( $connId );
			}
			if( !$conn ) {
				$conn = $this->getDefault();
			}
			$this->cache[ $connId ] = $conn;
		}

		return $this->cache[ $connId ];
	}

	/**
	 * Get the default db connection class
	 * @return Connection
	 */
	public function getDefault()
	{
		return $this->byId( "u736239518_btn_at_154_41_241_2" );
	}

	/**
	 * Get the default db connection id
	 * @return String
	 */
	public function getDefaultConnId()
	{
		return "u736239518_btn_at_154_41_241_2";
	}



	/**
	 * Get the users table db connection
	 * @return Connection
	 */
	public function getForLogin() {
		return $this->byId( $this->getLoginConnId() );
	}

	public function getLoginConnId() {
		$db = &Security::dbProvider();		
		if( $db ) {
			return $db["table"]["connId"];
		}
		return "";
	}


	/**
	 * Get the log table db connection
	 * @return Connection
	 */
	public function getForAudit()
	{
		return $this->byId( "u736239518_btn_at_154_41_241_2" );
	}

	/**
	 * Get the locking table db connection
	 * @return Connection
	 */
	public function getForLocking()
	{
		return $this->byId( "u736239518_btn_at_154_41_241_2" );
	}

	/**
	 * Get the 'ug_groups' table db connection
	 * @return Connection
	 */
	public function getForUserGroups() {
		return $this->byId( $this->getUserGroupsConnId() );
	}

	public function getUserGroupsConnId() {
		return "u736239518_btn_at_154_41_241_2";
	}

	/**
	 * Get the saved searches table db connection
	 * @return Connection
	 */
	public function getForSavedSearches()
	{
		return $this->byId( $this->getSavedSearchesConnId() );
	}
	
	/**
	 * Get the saved searches table db connection
	 * @return Connection
	 */
	public function getSavedSearchesConnId()
	{
		return "u736239518_btn_at_154_41_241_2";
	}	

	/**
	 * Get the webreports tables db connection
	 * @return Connection
	 */
	public function getForWebReports() 
	{
		return $this->byId( $this->getSavedSearchesConnId() );
	}

	/**
	 * Get the webreports tables db connection id
	 * @return String
	 */
	public function getWebReportsConnId() {
		return "u736239518_btn_at_154_41_241_2";
	}	
	
	/**
	 * @param String connId
	 * @return Connection
	 */
	protected function getConnection( $connId )
	{
		return false;
	}

	public function getConectionsIds()
	{
		$connectionsIds = array();
		foreach ($this->_connectionsData as $connId => $data) {
			$connectionsIds[] = $connId;
		}

		return $connectionsIds;
	}

	/**
	 * Set the data representing the project's
	 * db connection properties
	 */
	protected function _setConnectionsData()
	{
        return null;
	}

	/**
	 * Set the data representing the correspondence between
	 * the project's table names and db connections
	 */
	protected function _setTablesConnectionIds()
	{
		$connectionsIds = array();
		$connectionsIds["LOGIN"] = "u736239518_btn_at_154_41_241_2";
		$connectionsIds["TEMPBSICILE"] = "u736239518_btn_at_154_41_241_2";
		$connectionsIds["report_upload_file"] = "u736239518_btn_at_154_41_241_2";
		$connectionsIds["Upload_cabang"] = "u736239518_btn_at_154_41_241_2";
		$connectionsIds["TEMPBSICILE_view"] = "u736239518_btn_at_154_41_241_2";
		$connectionsIds["hasil_proses_api"] = "rest";
		$connectionsIds["hasil_proses_api1"] = "rest";
		$connectionsIds["SURAT"] = "u736239518_btn_at_154_41_241_2";
		$connectionsIds["upload_year_month"] = "u736239518_btn_at_154_41_241_2";
		$connectionsIds["TOTAL_PREMI_SI"] = "u736239518_btn_at_154_41_241_2";
		$connectionsIds["TEMPBSICILE_view1"] = "u736239518_btn_at_154_41_241_2";
		$connectionsIds["TEMPBSICIT"] = "u736239518_btn_at_154_41_241_2";
		$connectionsIds["TEMBSICITASAL"] = "u736239518_btn_at_154_41_241_2";
		$connectionsIds["TEMBSICITTUJUAN"] = "u736239518_btn_at_154_41_241_2";
		$connectionsIds["TEMPBSICIS"] = "u736239518_btn_at_154_41_241_2";
		$connectionsIds["TEMPBSICIS_view"] = "u736239518_btn_at_154_41_241_2";
		$connectionsIds["TEMPBSICIS_view1"] = "u736239518_btn_at_154_41_241_2";
		$connectionsIds["TEMPBSICIS_view2"] = "u736239518_btn_at_154_41_241_2";
		$connectionsIds["TEMPBSICIS_view3"] = "u736239518_btn_at_154_41_241_2";
		$connectionsIds["admin_rights"] = "u736239518_btn_at_154_41_241_2";
		$connectionsIds["admin_members"] = "u736239518_btn_at_154_41_241_2";
		$connectionsIds["admin_users"] = "u736239518_btn_at_154_41_241_2";
		$connectionsIds["TEMPBSICIT_view"] = "u736239518_btn_at_154_41_241_2";
		$connectionsIds["TEMPBSICIT_view1"] = "u736239518_btn_at_154_41_241_2";
		$connectionsIds["TEMPBSICIT_view2"] = "u736239518_btn_at_154_41_241_2";
		$connectionsIds["sp_summary_details_report"] = "u736239518_btn_at_154_41_241_2";
		$connectionsIds["sp_summary_product"] = "u736239518_btn_at_154_41_241_2";
		$connectionsIds["Chart_summary_report"] = "u736239518_btn_at_154_41_241_2";
		$connectionsIds["Chart_summary_report_view"] = "u736239518_btn_at_154_41_241_2";
		$connectionsIds["getbsibranch"] = "u736239518_btn_at_154_41_241_2";
		$connectionsIds["SOA_CIS_view"] = "u736239518_btn_at_154_41_241_2";
		$connectionsIds["REPORT_CIS_view"] = "u736239518_btn_at_154_41_241_2";
		$connectionsIds["TEMPBSICIT_verifikasi"] = "u736239518_btn_at_154_41_241_2";
		$connectionsIds["SOA_CIT_view"] = "u736239518_btn_at_154_41_241_2";
		$connectionsIds["SOA_CIS_view1"] = "u736239518_btn_at_154_41_241_2";
		$connectionsIds["SOA_CIT_view1"] = "u736239518_btn_at_154_41_241_2";
		$connectionsIds["report_product_Month"] = "u736239518_btn_at_154_41_241_2";
		$connectionsIds["report_product_Month_view"] = "u736239518_btn_at_154_41_241_2";
		$connectionsIds["TEMBSICITASAL_verifikasi"] = "u736239518_btn_at_154_41_241_2";
		$connectionsIds["TEMPBSICIS_KC"] = "u736239518_btn_at_154_41_241_2";
		$connectionsIds["TEMPBSICIS_ATM"] = "u736239518_btn_at_154_41_241_2";
		$connectionsIds["BSIBRANCH"] = "u736239518_btn_at_154_41_241_2";
		$connectionsIds["TEMPBSICIS_OL"] = "u736239518_btn_at_154_41_241_2";
		$connectionsIds["BSIVEHICLE"] = "u736239518_btn_at_154_41_241_2";
		$connectionsIds["BSIVEHLIMIT"] = "u736239518_btn_at_154_41_241_2";
		$connectionsIds["M_RESIKO"] = "u736239518_btn_at_154_41_241_2";
		$connectionsIds["TEMPBSICIT_COLL"] = "u736239518_btn_at_154_41_241_2";
		$connectionsIds["TEMPBSICIT_CIT"] = "u736239518_btn_at_154_41_241_2";
		$connectionsIds["BSIVEHLIMIT_view"] = "u736239518_btn_at_154_41_241_2";
		$connectionsIds["TEMBSICITASAL_view"] = "u736239518_btn_at_154_41_241_2";
		$connectionsIds["BSIAPPRV"] = "u736239518_btn_at_154_41_241_2";
		$connectionsIds["TEMPBSICIT_RESUME"] = "u736239518_btn_at_154_41_241_2";
		$connectionsIds["TEMPBSICIT_APPRV"] = "u736239518_btn_at_154_41_241_2";
		$connectionsIds["BSIVEHLIMIT_COL"] = "u736239518_btn_at_154_41_241_2";

		$this->_tablesConnectionIds = &$connectionsIds;
	}

	/**
	 * Check if It's possible to add to one table's sql query
	 * an sql subquery to another table.
	 * Access doesn't support subqueries from the same table as main.
	 * @param String dataSourceTName1
	 * @param String dataSourceTName2
	 * @return Boolean
	 */
	public function checkTablesSubqueriesSupport( $dataSourceTName1, $dataSourceTName2 )
	{
		$connId1 = $this->_tablesConnectionIds[ $dataSourceTName1 ];
		$connId2 = $this->_tablesConnectionIds[ $dataSourceTName2 ];

		if( $connId1 != $connId2 )
			return false;

		if( $this->_connectionsData[ $connId1 ]["dbType"] == nDATABASE_Access && $dataSourceTName1 == $dataSourceTName2 )
			return false;

		return true;
	}

	/**
	 * Close db connections
    */
	function CloseConnections()
	{
		foreach( $this->cache as $connection )
		{
			if( $connection )
				$connection->close();
		}
	}
}
?>