<?php
class Database
{
	public $result;
	public $connection;

	public function __construct()
	{
		//$servername, $username, $password, $database, $port
		$this->connection = mysqli_connect("sql201.epizy.com", "epiz_30584536", "shhCue4cuuZWLSb", "epiz_30584536_stevesplace", 3306);
	}

	public function Disconnect()
	{
		if ($this->connection == null)
		{
			return;
		}

		$this->connection->close();
	}

	public function ExecSql($sql)
	{
		if ($this->connection == null)
		{
			return;
		}

		$this->result = $this->connection->query($sql);

		if ($this->result === false)
		{
			varDump($sql);

			varDump($this->connection);
		}
	}

	public function FetchRow()
	{
		if ($this->connection == null)
		{
			return;
		}

		if (($this->result !== null) && ($this->result !== false) && ($this->result !== true))
		{
			return $this->result->fetch_assoc();
		}
	}

	public function GetRowCount()
	{
		if ($this->connection == null)
		{
			return;
		}

		if (($this->result !== null) && ($this->result !== false) && ($this->result !== true))
		{
			return $this->result->num_rows;
		}

		return 0;
	}
}
?>