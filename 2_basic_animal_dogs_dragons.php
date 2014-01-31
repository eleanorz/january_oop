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
			return $this->heath;
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
	}

	$drag = new Dragon('Puff');

	$rover = new Dog('Rover');

	$drag->fly();

	$rover->pet();

 ?>