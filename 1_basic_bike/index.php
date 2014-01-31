<html>
<head>
	<title>I want to ride my Bicyle</title>
	<link rel="stylesheet" href="main.css.php">
</head>
<body>
<?php

	//idea for a project: have a bicycle race with randomly generated bicycle gif's
    function gimmeColor()
    {
    	$rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
    	$color = '#'.$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)];
    	return $color;
    }

    function gimmePrice()
    {
    	return rand(90,600);
    }

    function gimmeSpeed()
    {
    	return rand(5,30);
    }

    function gimmeOdometer()
    {
    	return rand(3,300);
    }

	class Bike
	{
		//don't need to declare public vars as public, they are automatically
		function __construct()
		{
			$this->color = gimmeColor();
			$this->price = gimmePrice();
			$this->speed = gimmeSpeed();
			$this->miles = gimmeOdometer();
			echo "<div class = 'bike'></div>";

		}

		public function cycle()
		{
			$this->miles+=15;
			return $this->miles." total miles";
		}

		public function set_color($newcolor)
		{
			$this->color = $newcolor;
		}

		public function get_speed()
		{
			return $this->max_speed."  mph";
		}
	}

	$obj1 = new Bike();
	$obj2 = new Bike();
	$obj3 = new Bike();

	var_dump($obj1);
	var_dump($obj2);
	var_dump($obj3);
 ?>
</body>
</html>