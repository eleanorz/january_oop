<?php 

	require_once('connection.php');

	if (isset($_POST['action']) && $_POST['action']=='country')
	{
		getInfo();
	}

	function getInfo()
	{
		echo "I will get your info";
		die();
	}
 ?>