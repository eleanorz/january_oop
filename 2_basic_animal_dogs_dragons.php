<?php 
	
	class Animal
	{
		function __construct($name)
		{
			$this->name = $name;
			$this->health = 100;

			return $this->name;
		}

		function walk()
		{
			$this->health -= 1;
		}

		function run()
		{
			$this->health -= 5;
		}

		function displayHealth()
		{
			echo $this->name."'s life points = ";
			echo $this->health;
		}
	}

	class Dog extends Animal
	{
		function __construct($instance)
		{
			//scope resolution operator to keep parent construct going
			parent::__construct($instance);
			$this->health = 150;
			echo $this->name." the Puppy born, ";
		}

		function pet()
		{
			$this->health += 5;
			echo " pet, ";
		}
	}

	class Dragon extends Animal
	{
		function __construct($instance)
		{
			parent::__construct($instance);
			$this->health = 170;
			echo $this->name;
			echo " the Dragon hatched, ";
		}

		function fly()
		{
			$this->health-=10;
			echo " Fly, ";
		}

		function getHealth($instance)
		{
			echo "This is a dragonnn!";
			parent::__construct($instance);
		}
	}

	//DOG
	$rover = new Dog('Rover');
	//walk 3 times
	for ($i=0; $i < 3; $i++) 
	{ 
		$rover->walk();
	}
	//run 3 times
	for ($i=0; $i < 2; $i++)
	{ 
		$rover->run();
	}
	$rover->pet();
	$rover->displayHealth();

	//DRAGON
	$drag = new Dragon('Puff');
	for ($i=0; $i < 3; $i++)
	{ 
		$drag->walk();
	}
	for ($i=0; $i < 2; $i++)
	{ 
		$drag->run();
		$drag->fly();
	}
	$drag->displayHealth();
 ?>