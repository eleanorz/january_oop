<?php 
 $temp = array("first_name" => "Eleanor", "last_name" => "Zimmermann", "nick_name" => "Zimmy");
	
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
}

$table = new HTML_Helper($temp);

$table->print_table();

 ?>
