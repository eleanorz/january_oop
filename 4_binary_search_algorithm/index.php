<html>
<head>
	<title>
		binary search algorithm
	</title>
</head>
<body>

	<?php

	// class node
	// {
	// 	function __construct()
	// 	{
	// 		$this->mom = 
	// 	}
	// }

	class binary_tree
	{
		var $a = [];

		function __construct($n)
		{
			for ($i=0; $i < $n; $i++)
			{ 
				$x = rand(0, $n);
				$this->a[] = $x;
			}

			echo "I just started your custom array of ".$n." numbers, randomly generated";
		}

		function display()
		{
			var_dump($this->a);
		}

		function sort()
		{
			$t1 = time();

			echo "Time one is now";
			echo $t1."<br>";

			sort($this->a);

			echo "I am done sorting";

			var_dump($this->a);

			$t2 = time();
			echo "time 2 is now: ";
			echo $t2."<br>";
			echo "The difference in times is: ";
			echo $t2 - $t1;
		}

		function node_sort()
		{
			
		}


	}

	$b = new binary_tree(100);
	// $b->display();
	$b->sort();

	$c = new binary_tree(100);
	$c->node_sort();

	?>

</body>
</html> 


