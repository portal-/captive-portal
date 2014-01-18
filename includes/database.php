<?php 
require_once('config.php');

class MySQLDatabase{
	private $connection;
	public $last_query;

	function __construct()
	{
		$this->open_connection();

	}



public function open_connection()
{
	$this->connection=mysql_connect(DB_SERVER,DB_USER,DB_PASS);

	if(!$this->connection)
	 {
		 die("database connecetion failed".mysql_error());
	 }
	 else 
	 {
	 	$db_select=mysql_select_db(DB_NAME,$this->connection);
	 	if(!$db_select)
	 	{
	 		die("database selection failed".mysql_error());
	 	}
	 }

}



public function close_connection()
{
	if(isset($this->connection))
	{
		mysql_close($this->connection);
		unset($this->connection);
	}
}


public function query($sql)
{
  $this->last_query=$sql;

  $result=mysql_query($sql,$this->connection);

    if(!$result)
    {
    	die("database query failed ".mysql_error());
    }


    return $result;
}


private function confirm_query($result)
{
	if(!$result)
	{
		$output="database query failed".mysql_error();
		$output.="Last Sql query".$this->last_query;
		die($output);

	}

}

}



$database=new MySQLDatabase();





?>