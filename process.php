<?php 

	require_once('connection.php');
	session_start();

	/**
	* COUNTRY
	*/

	if (isset($_POST['action']) && $_POST['action']=='country')
	{
		$x = new Country($_POST['picked']);
		$x->getInfo();
	}

	class Country
	{
		var $c = ""; 
		
		function __construct($string)
		{
			$this->c = $string;
			echo "I am country: ".$this->c;
		}

		function getInfo()
		{
			echo "you requested country name = ".$this->c;

			$query = "SELECT * from country WHERE Name = '".$this->c."'";

			$result = fetch_record($query);

			$_SESSION['result']=$result;

			var_dump($_SESSION['result']);

			header("Location:3_intermediate_countries.php");
			die();
		}
	}

 ?>