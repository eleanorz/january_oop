<?php 
	// require_once();
?>

<html>
<head>
	<title>country wiki</title>
</head>
<body>

	<?php

		$temp = array('a', 'b', 'c', 'd', 'e');

		var_dump($temp);

		$query = "";
		$results = "";

		country_selector();


		/**
		* COUNTRY
		*/
		class Country
		{
			
			function __construct($argument)
			{
				# code...
			}
		}

		function country_selector()
		{
			?>
				<form action="process.php" method="post">
					<input type="hidden" name="action" value="country">
					<select name="" id="">
						<option value="HELLO">Hello</option>
						<option value="TESTING">TESTING</option>
						<?php //call create_options method here ?>
					</select>
					<input type="submit" value="Check Info">
				</form>

			<?php
		}

		var_dump($temp);
		function create_options()
		{
			foreach ($temp as $value)
			{
				echo "<option value='"."random"."'>"."random"."</option>";
			}
		}
	 ?>
</body>
</html>