<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

//	CSRF protection
if( !isPostRequest() )
	return;

if(!isLogged())
{ 
	return;
}
if( !Security::isAdmin() )
{
	return;
}
$nonAdminTablesArr = array();
$nonAdminTablesArr[] = "LOGIN";
$nonAdminTablesArr[] = "TEMPBSICILE";
$nonAdminTablesArr[] = "v1";
$nonAdminTablesArr[] = "report_upload_file";
$nonAdminTablesArr[] = "Upload_cabang";
$nonAdminTablesArr[] = "TEMPBSICILE_view";
$nonAdminTablesArr[] = "hasil_proses_api";
$nonAdminTablesArr[] = "hasil_proses_api1";
$nonAdminTablesArr[] = "SURAT";
$nonAdminTablesArr[] = "upload_year_month";
$nonAdminTablesArr[] = "TOTAL_PREMI_SI";
$nonAdminTablesArr[] = "TEMPBSICILE_view1";
$nonAdminTablesArr[] = "TEMPBSICIT";
$nonAdminTablesArr[] = "TEMBSICITASAL";
$nonAdminTablesArr[] = "TEMBSICITTUJUAN";
$nonAdminTablesArr[] = "TEMPBSICIS";
$nonAdminTablesArr[] = "TEMPBSICIS_view";
$nonAdminTablesArr[] = "v2";
$nonAdminTablesArr[] = "v3";
$nonAdminTablesArr[] = "TEMPBSICIS_view1";
$nonAdminTablesArr[] = "TEMPBSICIS_view2";
$nonAdminTablesArr[] = "TEMPBSICIS_view3";
$nonAdminTablesArr[] = "v4";
$nonAdminTablesArr[] = "TEMPBSICIT_view";
$nonAdminTablesArr[] = "TEMPBSICIT_view1";
$nonAdminTablesArr[] = "TEMPBSICIT_view2";
$nonAdminTablesArr[] = "sp_summary_details_report";
$nonAdminTablesArr[] = "sp_summary_product";
$nonAdminTablesArr[] = "Chart_summary_report";
$nonAdminTablesArr[] = "Chart_summary_report_view";
$nonAdminTablesArr[] = "getbsibranch";
$nonAdminTablesArr[] = "SOA_CIS_view";
$nonAdminTablesArr[] = "REPORT_CIS_view";
$nonAdminTablesArr[] = "TEMPBSICIT_verifikasi";
$nonAdminTablesArr[] = "SOA_CIT_view";
$nonAdminTablesArr[] = "SOA_CIS_view1";
$nonAdminTablesArr[] = "SOA_CIT_view1";
$nonAdminTablesArr[] = "report_product_Month";
$nonAdminTablesArr[] = "report_product_Month_view";
$nonAdminTablesArr[] = "TEMBSICITASAL_verifikasi";
$nonAdminTablesArr[] = "TEMPBSICIS_KC";
$nonAdminTablesArr[] = "TEMPBSICIS_ATM";
$nonAdminTablesArr[] = "BSIBRANCH";
$nonAdminTablesArr[] = "TEMPBSICIS_OL";
$nonAdminTablesArr[] = "BSIVEHICLE";
$nonAdminTablesArr[] = "BSIVEHLIMIT";
$nonAdminTablesArr[] = "M_RESIKO";
$nonAdminTablesArr[] = "TEMPBSICIT_COLL";
$nonAdminTablesArr[] = "TEMPBSICIT_CIT";
$nonAdminTablesArr[] = "BSIVEHLIMIT_view";
$nonAdminTablesArr[] = "TEMBSICITASAL_view";
$nonAdminTablesArr[] = "BSIAPPRV";
$nonAdminTablesArr[] = "TEMPBSICIT_RESUME";
$nonAdminTablesArr[] = "TEMPBSICIT_APPRV";
$nonAdminTablesArr[] = "BSIVEHLIMIT_COL";

$ug_connection = $cman->getForUserGroups();

$cbxNames = array('add' => array('mask' => 'A', 'rightName' => 'add')
	, 'edt' => array('mask' => 'E', 'rightName' => 'edit')
	, 'del' => array('mask' => 'D', 'rightName' => 'delete')
	, 'lst' => array('mask' => 'S', 'rightName' => 'list')
	, 'exp' => array('mask' => 'P', 'rightName' => 'export')
	, 'imp' => array('mask' => 'I', 'rightName' => 'import')
	, 'adm' => array('mask' => 'M'));

$wGroupTableName = $ug_connection->addTableWrappers( "LOG_uggroups" );
	
switch(postvalue("a"))
{
	case "add":
		$sql = "insert into ". $wGroupTableName ." (". $ug_connection->addFieldWrappers( "Label" ) .")"
			." values (". $ug_connection->prepareString( postvalue("name") ). ")";		
		$ug_connection->exec( $sql );

		$sql = "select max(". $ug_connection->addFieldWrappers( "GroupID") .") from ". $wGroupTableName;
		$data = $ug_connection->query( $sql )->fetchNumeric();
		
		echo printJSON( array('success' => true, 'id' => $data[0]) );
		break;
		
	case "del":
		$sql = "delete from ". $wGroupTableName ." where ". $ug_connection->addFieldWrappers("GroupID") ."=".(postvalue_number("id"));
		$ug_connection->exec( $sql );
		
		$sql = "delete from ". $ug_connection->addTableWrappers( "LOG_ugrights" ) 
			." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=".(postvalue_number("id"));
		$ug_connection->exec( $sql );

		// delete records from ugmembers table	
		$dataSource = Security::getUgMembersDatasource();
		$dc = new DsCommand();
		$dc->filter = DataCondition::FieldEquals( "GroupID", postvalue_number("id") ); 
		$dataSource->deleteSingle( $dc, false );
		
		echo printJSON( array('success' => true) );
		break;
		
	case "rename":
		$sql = "update ". $wGroupTableName  
			." set ". $ug_connection->addFieldWrappers( "Label" ) ."=". $ug_connection->prepareString( postvalue("name") )
			." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=".(postvalue_number("id"));
		$ug_connection->exec( $sql );
		
		echo printJSON( array('success' => true) );
		break;
	
	// @deprecated 
	// see ug_rights
	case 'saveRights':
		$error = '';
		if( postvalue('state') )
		{	
			$allRights = array();
			$sql = "select ". $ug_connection->addFieldWrappers( "GroupID" ) 
				.", ". $ug_connection->addFieldWrappers( "TableName" ) 
				.", ". $ug_connection->addFieldWrappers( "AccessMask" ) ." from ". $wGroupTableName;
			
			$qResult = $ug_connection->query( $sql );
			// don't use fetchAssoc! because of ORACLE and PostgreSQL
			while( $rightsRow = $qResult->fetchNumeric() )
			{
				$allRights[] = $rightsRow;
			}
			
			$wRightsTableName = $ug_connection->addTableWrappers( "LOG_ugrights" );
			
			$delGroupId = 0;
			$state = my_json_decode( postvalue('state') );
			// delete all extra permissions from db
			foreach($allRights as $i => $rightValue)
			{
				$groupIDInt = (int) $rightValue[0];
				
				if($groupIDInt == $delGroupId)
					continue;
					
				//delete all extra permissions for group
				if( !array_key_exists($groupIDInt, $state) )
				{
					$sql = "delete from ". $wRightsTableName 
						." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=". $groupIDInt;
					$ug_connection->exec( $sql );
				}
				//delete all extra permissions for table in group
				else if(!array_key_exists(GetTableId($data[1]), $state[$groupIDInt]))
				{
					$sql = "delete from ". $wRightsTableName 
						." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=". $groupIDInt 
						." and ". $ug_connection->addFieldWrappers( "TableName" ) ."=".$ug_connection->prepareString( html_special_decode($data[1]) );				
					$ug_connection->exec( $sql );
				}
			}
			
			$realTables = GetRealValues();
			foreach ($state as $groupId => $groupRights)
			{
				foreach ($groupRights as $table => $mask)
				{
					if( !array_key_exists($table, $realTables) )
						continue;
					
					$ins = true;
					foreach($allRights as $i => $rightValue)
					{	
						if($rightValue[0] == $groupId && $rightValue[1] == $realTables[$table])	
						{
							$ins = false;
							if($data[2]!= $mask)
							{
								$sql ="update". $wRightsTableName 
									." set ". $ug_connection->addFieldWrappers( "AccessMask" ) ."=". $ug_connection->prepareString( $mask )
									." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=". $groupId 
									." and ". $ug_connection->addFieldWrappers( "TableName" ) ."=". $ug_connection->prepareString( html_special_decode($realTables[$table]) );
								$ug_connection->exec( $sql );
							}
						}
					}
					if($ins)
					{
						$sql = "insert into ". $wRightsTableName
							." (". $ug_connection->addFieldWrappers( "TableName" ) 
							.", ". $ug_connection->addFieldWrappers( "GroupID" ) 
							.", ". $ug_connection->addFieldWrappers( "AccessMask" ) .") " 
							."values (". $ug_connection->prepareString(html_special_decode($realTables[$table])) .", ". $groupId .", ". $ug_connection->prepareString($mask)  .")";
						$ug_connection->exec( $sql );
					}
					
					$error = $ug_connection->lastError();
				}
			}
		}
		
		getJSONResult($error);
		break;
}

function GetTableId($name)
{
	$tbls = GetRealValues();
	for($i = 0;$i < count($tbls); $i++)
	{
		if($tbls[$i] == $name)
			return $i;
	}
	return -1;
}

/**
 * GetRealValues
 * Form array with real users or tables names
 * @return {array} array of reaf names
 */
function GetRealValues()
{
	$result = array();
	if(postvalue('realValues'))
		$realValues = my_json_decode(postvalue('realValues'));
		foreach ($realValues as $key =>$value)
			$result[$key] = $value;
	return $result;
}

/**
 * getJSONResult
 * Form result as a JSON object according of errors
 * @param {string} list of errors
 */
function getJSONResult($error)
{
	$result['success'] = $error == '';
	$result['error'] = $error;	
	echo printJSON($result);
}