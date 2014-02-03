<?php 

	require_once('connection.php');
	session_start();

			/**
		* COUNTRY
		*/
		// class Country
		// {
			
		// 	function __construct($argument)
		// 	{
		// 		# code...
		// 	}
		// }

	if (isset($_POST['action']) && $_POST['action']=='country')
	{
		getInfo();
	}

	function getInfo()
	{
		$c = $_POST['picked'];
		echo "you requested country name = ".$c;

		$query = "SELECT * from country WHERE Name = '".$c."'";

		$result = fetch_record($query);

		$_SESSION['result']=$result;

		var_dump($_SESSION['result']);


		header("Location:3_intermediate_countries.php");
		die();
	}
 ?>