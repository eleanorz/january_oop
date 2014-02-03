<?php 
 $temp = array("first_name" => "Michael", "last_name" => "Choi", "nick_name" => "Sensei");
	
class HTML_Helper
{
	var $a = array();
	function __construct($b)
	{
		echo "I am making a new array";
		$this->a = $b;
	}
	function print_table()
	{
		echo "<table>";
		foreach ($this->a as $key => $value)
		{
			echo "<th>".$key."</th>";
		}

		echo "<tr>";
		foreach ($this->a as $key => $value)
		{
			echo "<td>".$value."</td>";
		}
		echo "</tr></table>";
	}

	function print_select($temp, $string)
	{
		echo "entered print select".$string;
		var_dump($temp);
	}
}

$table = new HTML_Helper($temp);

$table->print_table();

$table->print_select($temp, "Hello world");

 ?>