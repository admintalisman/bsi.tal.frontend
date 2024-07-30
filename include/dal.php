<?php

$dal_info = array();

/**
 * User API function
 * @param String sql
 */
function UsersTableName()
{
	global $cman;
	$connection = $cman->getForLogin();
	return $connection->addTableWrappers(Security::loginTable());
}

/**
 * User API function
 * It uses the default db connection
 * @param String dalSQL
 */
function CustomQuery($dalSQL)
{
	$connection = getDefaultConnection();
	$result = $connection->query( $dalSQL );
	if($result)
		return $result;
}

/**
 * User API function
 * It uses the default db connection 
 * @param String sql
 */
function DBLookup($sql)
{
	$connection = getDefaultConnection();
	$data = $connection->query( $sql )->fetchAssoc();

	if( $data )
		return reset($data);
	  
	return null;
}

/**
  * Data Access Layer.
  */
class tDAL
{
	var $tblu736239518_btn_at_154_41_241_2__BSIAPPRV;
	var $tblu736239518_btn_at_154_41_241_2__BSIBRANCH;
	var $tblu736239518_btn_at_154_41_241_2__bsiupload_noti;
	var $tblu736239518_btn_at_154_41_241_2__BSIVEHICLE;
	var $tblu736239518_btn_at_154_41_241_2__BSIVEHLIMIT;
	var $tblu736239518_btn_at_154_41_241_2__btn_new__audit;
	var $tblu736239518_btn_at_154_41_241_2__Chart_summary_report;
	var $tblu736239518_btn_at_154_41_241_2__getbsibranch;
	var $tblu736239518_btn_at_154_41_241_2__LOG_uggroups;
	var $tblu736239518_btn_at_154_41_241_2__LOG_ugmembers;
	var $tblu736239518_btn_at_154_41_241_2__LOG_ugrights;
	var $tblu736239518_btn_at_154_41_241_2__LOGIN;
	var $tblu736239518_btn_at_154_41_241_2__tblM_RESIKO;
	var $tblu736239518_btn_at_154_41_241_2__report_product_Month;
	var $tblu736239518_btn_at_154_41_241_2__SURAT;
	var $tblu736239518_btn_at_154_41_241_2__TEMBSICITASAL;
	var $tblu736239518_btn_at_154_41_241_2__TEMBSICITTUJUAN;
	var $tblu736239518_btn_at_154_41_241_2__TEMPBSICILE;
	var $tblu736239518_btn_at_154_41_241_2__TEMPBSICIS;
	var $tblu736239518_btn_at_154_41_241_2__TEMPBSICIT;
	var $tblu736239518_btn_at_154_41_241_2__TEMPBSICIT_APPRV;
	var $tblu736239518_btn_at_154_41_241_2__TEMPBSICIT_RESUME;
	var $tblu736239518_btn_at_154_41_241_2__TOTAL_PREMI_SI;
	var $lstTables;
	var $Table = array();

	function FillTablesList()
	{
		if($this->lstTables)
			return;
		$this->lstTables[] = array("name" => "BSIAPPRV", "varname" => "u736239518_btn_at_154_41_241_2__BSIAPPRV", "altvarname" => "BSIAPPRV", "connId" => "u736239518_btn_at_154_41_241_2", "schema" => "", "connName" => "u736239518_btn at 154.41.241.2");
		$this->lstTables[] = array("name" => "BSIBRANCH", "varname" => "u736239518_btn_at_154_41_241_2__BSIBRANCH", "altvarname" => "BSIBRANCH", "connId" => "u736239518_btn_at_154_41_241_2", "schema" => "", "connName" => "u736239518_btn at 154.41.241.2");
		$this->lstTables[] = array("name" => "bsiupload_noti", "varname" => "u736239518_btn_at_154_41_241_2__bsiupload_noti", "altvarname" => "bsiupload_noti", "connId" => "u736239518_btn_at_154_41_241_2", "schema" => "", "connName" => "u736239518_btn at 154.41.241.2");
		$this->lstTables[] = array("name" => "BSIVEHICLE", "varname" => "u736239518_btn_at_154_41_241_2__BSIVEHICLE", "altvarname" => "BSIVEHICLE", "connId" => "u736239518_btn_at_154_41_241_2", "schema" => "", "connName" => "u736239518_btn at 154.41.241.2");
		$this->lstTables[] = array("name" => "BSIVEHLIMIT", "varname" => "u736239518_btn_at_154_41_241_2__BSIVEHLIMIT", "altvarname" => "BSIVEHLIMIT", "connId" => "u736239518_btn_at_154_41_241_2", "schema" => "", "connName" => "u736239518_btn at 154.41.241.2");
		$this->lstTables[] = array("name" => "btn_new__audit", "varname" => "u736239518_btn_at_154_41_241_2__btn_new__audit", "altvarname" => "btn_new__audit", "connId" => "u736239518_btn_at_154_41_241_2", "schema" => "", "connName" => "u736239518_btn at 154.41.241.2");
		$this->lstTables[] = array("name" => "Chart_summary_report", "varname" => "u736239518_btn_at_154_41_241_2__Chart_summary_report", "altvarname" => "Chart_summary_report", "connId" => "u736239518_btn_at_154_41_241_2", "schema" => "", "connName" => "u736239518_btn at 154.41.241.2");
		$this->lstTables[] = array("name" => "getbsibranch", "varname" => "u736239518_btn_at_154_41_241_2__getbsibranch", "altvarname" => "getbsibranch", "connId" => "u736239518_btn_at_154_41_241_2", "schema" => "", "connName" => "u736239518_btn at 154.41.241.2");
		$this->lstTables[] = array("name" => "LOG_uggroups", "varname" => "u736239518_btn_at_154_41_241_2__LOG_uggroups", "altvarname" => "LOG_uggroups", "connId" => "u736239518_btn_at_154_41_241_2", "schema" => "", "connName" => "u736239518_btn at 154.41.241.2");
		$this->lstTables[] = array("name" => "LOG_ugmembers", "varname" => "u736239518_btn_at_154_41_241_2__LOG_ugmembers", "altvarname" => "LOG_ugmembers", "connId" => "u736239518_btn_at_154_41_241_2", "schema" => "", "connName" => "u736239518_btn at 154.41.241.2");
		$this->lstTables[] = array("name" => "LOG_ugrights", "varname" => "u736239518_btn_at_154_41_241_2__LOG_ugrights", "altvarname" => "LOG_ugrights", "connId" => "u736239518_btn_at_154_41_241_2", "schema" => "", "connName" => "u736239518_btn at 154.41.241.2");
		$this->lstTables[] = array("name" => "LOGIN", "varname" => "u736239518_btn_at_154_41_241_2__LOGIN", "altvarname" => "LOGIN", "connId" => "u736239518_btn_at_154_41_241_2", "schema" => "", "connName" => "u736239518_btn at 154.41.241.2");
		$this->lstTables[] = array("name" => "M_RESIKO", "varname" => "u736239518_btn_at_154_41_241_2__tblM_RESIKO", "altvarname" => "tblM_RESIKO", "connId" => "u736239518_btn_at_154_41_241_2", "schema" => "", "connName" => "u736239518_btn at 154.41.241.2");
		$this->lstTables[] = array("name" => "report_product_Month", "varname" => "u736239518_btn_at_154_41_241_2__report_product_Month", "altvarname" => "report_product_Month", "connId" => "u736239518_btn_at_154_41_241_2", "schema" => "", "connName" => "u736239518_btn at 154.41.241.2");
		$this->lstTables[] = array("name" => "SURAT", "varname" => "u736239518_btn_at_154_41_241_2__SURAT", "altvarname" => "SURAT", "connId" => "u736239518_btn_at_154_41_241_2", "schema" => "", "connName" => "u736239518_btn at 154.41.241.2");
		$this->lstTables[] = array("name" => "TEMBSICITASAL", "varname" => "u736239518_btn_at_154_41_241_2__TEMBSICITASAL", "altvarname" => "TEMBSICITASAL", "connId" => "u736239518_btn_at_154_41_241_2", "schema" => "", "connName" => "u736239518_btn at 154.41.241.2");
		$this->lstTables[] = array("name" => "TEMBSICITTUJUAN", "varname" => "u736239518_btn_at_154_41_241_2__TEMBSICITTUJUAN", "altvarname" => "TEMBSICITTUJUAN", "connId" => "u736239518_btn_at_154_41_241_2", "schema" => "", "connName" => "u736239518_btn at 154.41.241.2");
		$this->lstTables[] = array("name" => "TEMPBSICILE", "varname" => "u736239518_btn_at_154_41_241_2__TEMPBSICILE", "altvarname" => "TEMPBSICILE", "connId" => "u736239518_btn_at_154_41_241_2", "schema" => "", "connName" => "u736239518_btn at 154.41.241.2");
		$this->lstTables[] = array("name" => "TEMPBSICIS", "varname" => "u736239518_btn_at_154_41_241_2__TEMPBSICIS", "altvarname" => "TEMPBSICIS", "connId" => "u736239518_btn_at_154_41_241_2", "schema" => "", "connName" => "u736239518_btn at 154.41.241.2");
		$this->lstTables[] = array("name" => "TEMPBSICIT", "varname" => "u736239518_btn_at_154_41_241_2__TEMPBSICIT", "altvarname" => "TEMPBSICIT", "connId" => "u736239518_btn_at_154_41_241_2", "schema" => "", "connName" => "u736239518_btn at 154.41.241.2");
		$this->lstTables[] = array("name" => "TEMPBSICIT_APPRV", "varname" => "u736239518_btn_at_154_41_241_2__TEMPBSICIT_APPRV", "altvarname" => "TEMPBSICIT_APPRV", "connId" => "u736239518_btn_at_154_41_241_2", "schema" => "", "connName" => "u736239518_btn at 154.41.241.2");
		$this->lstTables[] = array("name" => "TEMPBSICIT_RESUME", "varname" => "u736239518_btn_at_154_41_241_2__TEMPBSICIT_RESUME", "altvarname" => "TEMPBSICIT_RESUME", "connId" => "u736239518_btn_at_154_41_241_2", "schema" => "", "connName" => "u736239518_btn at 154.41.241.2");
		$this->lstTables[] = array("name" => "TOTAL_PREMI_SI", "varname" => "u736239518_btn_at_154_41_241_2__TOTAL_PREMI_SI", "altvarname" => "TOTAL_PREMI_SI", "connId" => "u736239518_btn_at_154_41_241_2", "schema" => "", "connName" => "u736239518_btn at 154.41.241.2");
	}

	/**
      * Returns table object by table name.
      * @intellisense
      */
	function & Table($strTable, $schema = "", $connName = "")
	{
		$this->FillTablesList();
		foreach($this->lstTables as $tbl)
		{
			if(strtoupper($strTable)==strtoupper($tbl["name"]) &&
				( $schema == "" || strtoupper($schema) == strtoupper($tbl["schema"]) ) &&
				($connName == "" || strtoupper($connName) == strtoupper($tbl["connName"]) ) )
			{
				$this->CreateClass($tbl);
				return $this->{"tbl".$tbl["varname"]};
			}
		}
//	check table names without dbo. and other prefixes
		foreach($this->lstTables as $tbl)
		{
			if(strtoupper(cutprefix($strTable))==strtoupper(cutprefix($tbl["name"])))
			{
				$this->CreateClass($tbl);
				return $this->{"tbl".$tbl["varname"]};
			}
		}
		$dummy=null;
		return $dummy;
	}
	
	function CreateClass(&$tbl)
	{
		if($this->{"tbl".$tbl["varname"]})
			return;
//	load table info
		global $dal_info;
		include(getabspath("include/dal/".($tbl["varname"]).".php"));
//	create class and object

		$classname="class_".$tbl["varname"];
		$str = "class ".$classname." extends tDALTable  {";
		foreach($dal_info[$tbl["varname"]] as $fld)
		{
			$str.=' var $'.$fld["varname"].'; ';
		}
		
		$tableName = $tbl["name"];
		if( $tbl["schema"] )
			$tableName = $tbl["schema"] . "." . $tbl["name"];
		$str.=' function __construct()
			{
				$this->m_TableName = \''.escapesq( $tableName ).'\';
				$this->infoKey = \'' . $tbl["varname"] . '\';
				$this->setConnection(\''. $tbl["connId"] .'\');
			}
		};';
		eval($str);
		$this->{"tbl".$tbl["varname"]} = new $classname;
		$this->{$tbl["altvarname"]} = $this->{"tbl".$tbl["varname"]};
		$this->Table[$tbl["name"]]=&$this->{"tbl".$tbl["varname"]};
	}
	
	/**
      * Returns list of table names.
      * @intellisense
      */
	function GetTablesList()
	{
		$this->FillTablesList();
		$res=array();
		foreach($this->lstTables as $tbl)
			$res[]=$tbl["name"];
		return $res;
	}
	
	/**
      * Get list of table fields by table name.
      * @intellisense
      */
	function GetFieldsList($table)
	{
		$tbl = $this->Table($table);
		return $tbl->GetFieldsList();
	}
	
	/**
      * Get field type by table name and field name.
      * @intellisense
      */
	function GetFieldType($table,$field)
	{
		$tbl = $this->Table($table);
		return $tbl->GetFieldType($field);
	}

	/**
      * Get table key fields by table name.
      * @intellisense
      */
	function GetDBTableKeys($table)
	{
		$tbl = $this->Table($table);
		return $tbl->GetDBTableKeys();
	}
}

$dal = new tDAL;

/**
 * Data Access Layer table class.
 */ 
class tDALTable
{
	var $m_TableName;
	var $infoKey;
	var $Param = array();
	var $Value = array();
	/**
	 * @type Connection
	 */
	var $_connection;
	
	/**
	 * Set the connection property
	 * @param String connId
	 */
	function setConnection( $connId )
	{
		global $cman;
		$this->_connection = $cman->byId( $connId );
	}
	
	/**
      * Get table key fields.
      * @intellisense
      */
	function GetDBTableKeys()
	{
		global $dal_info;
		if( !array_key_exists($this->infoKey, $dal_info) || !is_array($dal_info[ $this->infoKey ]) )
			return array();
		
		$ret = array();
		foreach($dal_info[ $this->infoKey ] as $fname=>$f)
		{
			if( @$f["key"] )
				$ret[] = $fname;
		}
		return $ret;
	}
	
	/**
      * Get list of table fields.
      * @intellisense
      */
	function GetFieldsList()
	{
		global $dal_info;
		return array_keys( $dal_info[ $this->infoKey ] );
	}

	/**
      * Get field type.
      * @intellisense
      */
	function GetFieldType($field)
	{
		global $dal_info;
		
		if( !array_key_exists( $field, $dal_info[ $this->infoKey ]) )
			return 200;
			
		return $dal_info[ $this->infoKey ][ $field ]["type"];
	}
	
	/**
	 *
	 */
	function PrepareValue($value, $type)
	{
		if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
		{
			if( IsBinaryType($type) )
			{
				if( $this->_connection->dbType == nDATABASE_Oracle )
					return "EMPTY_BLOB()";
					
				return "?";
			}
			
			if( $this->_connection->dbType == nDATABASE_Informix  && IsTextType($type) )
				return "?";
		}
	
		if( IsDateFieldType($type) )
		{
			if( !$value )
				return "null";
			else
				$this->_connection->addDateQuotes( $value );
		}
		
		if( NeedQuotes($type) )
			return $this->_connection->prepareString( $value );

		return 0 + $value;
	}
	
	/**
      * Get table name.
      * @intellisense
      */
	function TableName()
	{
		return $this->_connection->addTableWrappers( $this->m_TableName );
	} 

	/**
	 * @param Array blobs
	 * @param String dalSQL
	 * @param Array tableinfo
	 */
	protected function Execute_Query($blobs, $dalSQL, $tableinfo)
	{		
		$blobTypes = array();
		if( $this->_connection->dbType == nDATABASE_Informix )
		{		
			foreach( $blobs as $fname => $fvalue )
			{
				$blobTypes[ $fname ] = $tableinfo[ $fname ]["type"];
			}
		}

		$this->_connection->execWithBlobProcessing( $dalSQL, $blobs, $blobTypes );
	}

	/**
      * Add new record to the table.
      * @intellisense
      */
	function Add() 
	{
		global $dal_info;
		
		$insertFields = "";
		$insertValues = "";
		$tableinfo = &$dal_info[ $this->infoKey ];
		$blobs = array();
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			if( isset($this->{$fld['varname']}) )
			{
				$this->Value[ $fieldname ] = $this->{$fld['varname']};
			}
			
			foreach($this->Value as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$insertFields.= $this->_connection->addFieldWrappers( $fieldname ).",";
				$insertValues.= $this->PrepareValue($value,$fld["type"]) . ",";
				
				if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
				{
					if( IsBinaryType( $fld["type"] ) )
						$blobs[ $fieldname ] = $value;
						
					if( $this->_connection->dbType == nDATABASE_Informix && IsTextType( $fld["type"] ) )
						$blobs[ $fieldname ] = $value;
				}
				break;
			}
		}
		//	prepare and exec SQL
		if( $insertFields != "" && $insertValues != "" )		
		{
			$insertFields = substr($insertFields, 0, -1);
			$insertValues = substr($insertValues, 0, -1);
			$dalSQL = "insert into ".$this->_connection->addTableWrappers( $this->m_TableName )." (".$insertFields.") values (".$insertValues.")";
			$this->Execute_Query($blobs, $dalSQL, $tableinfo);
		}
		//	cleanup		
	    $this->Reset();
	}

	/**
      * Query all records from the table.
      * @intellisense
      */
	function QueryAll()
	{
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName );
		return $this->_connection->query( $dalSQL );
	}

	/**
      * Do a custom query on the table.
      * @intellisense
      */
	function Query($swhere = "", $orderby = "")
	{
		if ($swhere)
			$swhere = " where ".$swhere;
			
		if ($orderby)
			$orderby = " order by ".$orderby;
			
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName ).$swhere.$orderby;
		return $this->_connection->query( $dalSQL );
	}

	/**
      * Delete a record from the table.
      * @intellisense
      */
	function Delete()
	{
		global $dal_info;
		
		$deleteFields = "";
		$tableinfo = &$dal_info[ $this->infoKey ];
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			if( isset($this->{$fld['varname']}) )
			{
				$this->Param[ $fieldname ] = $this->{$fld['varname']};
			}
			
			foreach($this->Param as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$deleteFields.= $this->_connection->addFieldWrappers( $fieldname )."=". $this->PrepareValue($value, $fld["type"]) . " and ";
				break;
			}
		}
		//	do delete
		if ($deleteFields)
		{
			$deleteFields = substr($deleteFields, 0, -5);
			$dalSQL = "delete from ".$this->_connection->addTableWrappers( $this->m_TableName )." where ".$deleteFields;
			$this->_connection->exec( $dalSQL );
		}
	
		//	cleanup
	    $this->Reset();
	}

	/**
      * Reset table object.
      * @intellisense
      */
	function Reset()
	{
		global $dal_info;
		
		$this->Value = array();
		$this->Param = array();
		
		$tableinfo = &$dal_info[ $this->infoKey ];
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			unset($this->{$fld["varname"]});
		}
	}	

	/**
      * Update record in the table.
      * @intellisense
      */
	function Update()
	{
		global $dal_info;
		
		$tableinfo = &$dal_info[ $this->infoKey ];
		$updateParam = "";
		$updateValue = "";
		$blobs = array();

		foreach($tableinfo as $fieldname => $fld)
		{
			$command = 'if(isset($this->'.$fld['varname'].')) { ';
			if( $fld["key"] )
				$command.= '$this->Param[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			else
				$command.= '$this->Value[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			$command.= ' }';
			
			eval($command);
			
			if( !$fld["key"] && !array_key_exists( strtoupper($fieldname), array_change_key_case($this->Param, CASE_UPPER) ) )
			{
				foreach($this->Value as $field => $value)
				{
					if( strtoupper($field) != strtoupper($fieldname) )
						continue;
						
					$updateValue.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . ", ";
					
					if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
					{
						if( IsBinaryType( $fld["type"] ) )
							$blobs[ $fieldname ] = $value;
							
						if( $this->_connection->dbType == nDATABASE_Informix && IsTextType( $fld["type"] ) )	
							$blobs[ $fieldname ] = $value;		
					}
					break;
				}
			}
			else
			{
				foreach($this->Param as $field=>$value)
				{
					if( strtoupper($field) != strtoupper($fieldname) )
						continue;
						
					$updateParam.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . " and ";
					break;
				}
			}
		}

		//	construct SQL and do update	
		if ($updateParam)
			$updateParam = substr($updateParam, 0, -5);
		if ($updateValue)
			$updateValue = substr($updateValue, 0, -2);
			
		if ($updateValue && $updateParam)
		{
			$dalSQL = "update ".$this->_connection->addTableWrappers( $this->m_TableName )." set ".$updateValue." where ".$updateParam;
			$this->Execute_Query($blobs, $dalSQL, $tableinfo);
		}

		//	cleanup
		$this->Reset();
	}
	
	/**
	 * Select one or more records matching the condition
	 */
	function FetchByID()
	{
		global $dal_info;
		$tableinfo = &$dal_info[ $this->infoKey ];

		$dal_where = "";
		foreach($tableinfo as $fieldname => $fld)
		{
			$command = 'if(isset($this->'.$fld['varname'].')) { ';
			$command.= '$this->Value[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			$command.= ' }';
			
			eval($command);
			
			foreach($this->Param as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$dal_where.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . " and ";
				break;
			}
		}
		// cleanup
		$this->Reset();
		// construct and run SQL
		if ($dal_where)
			$dal_where = " where ".substr($dal_where, 0, -5);
			
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName ).$dal_where;
		return $this->_connection->query( $dalSQL );
	}
}

function cutprefix($table)
{
	$pos = strpos($table,".");
	if( $pos === false )
		return $table;
		
	return substr($table, $pos + 1);
}

function escapesq($str)
{
	return str_replace(array("\\","'"),array("\\\\","\\'"),$str);
}

?>