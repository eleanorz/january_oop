<?php 
	require_once('connection.php');
	session_start();
?>

<html>
<head>
	<title>country wiki</title>
</head>
<body>

	<?php

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

		country_selector();

		if (isset($_SESSION['result']))
		{
			pretty_info();
		}

		unset($_SESSION['result']);

		
		function country_selector()
		{
			?>
				<form action="process.php" method="post">
					<input type="hidden" name="action" value="country">
					<select name="picked" id="">
						<?php create_options(); ?>						
					</select>
					<input type="submit" value="Check Info">
				</form>

			<?php
		}

		function create_options()
		{
			$query = "SELECT Name FROM country";
			$countries = fetch_all($query);
			foreach ($countries as $country)
			{
				echo "<option value='".$country['Name']."'>".$country['Name']."</option>";
			}
		}

		function pretty_info()
		{
			var_dump($_SESSION['result']);
		}

	 ?>
</body>
</html>