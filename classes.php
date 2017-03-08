<?php
header('Content-Type: text/html; charset=utf-8');

class Man{
	
	private $hand = 2;
	
	private $foot = 2;
	
	private $name;
	
	private $gender;
	
	private $haircolor;
	
	public function __construct($name, $gender, $haircolor){
		
		$this->name = $name;
		$this->gender = $gender;
		$this->haircolor = $haircolor;
	}
	
	public function work($hour, $feel= 'good'){
		//fdfdfdfd
		
		
	}
	
	public function rest(){
		
	}
	
}

class House
{
	
	public $walls = 4;
	public $roof ;
	public $floor;
	
	public function changeWall($type)
	{
		
		if($type=='circus') $this->walls = 1;
	}
}

$house = new House();
echo $house->walls;
echo '<br>';
$house->changeWall('circus');
echo 'Число стен у цирка -'.$house->walls;
echo '<br>';
class Auto
{
	 
	 public $speed = 0;
	 public $breakingDistance= 0;
	 
	 public function drive($tank = 'empty')
	 {
		 
		 if($tank=='full')
		 {
			 $this->speed = 200;
			 $this->breakingDistance = 100;
		 } 
		 elseif($tank=='little')
		 {
			$this->speed = 70;
			$this->breakingDistance = 30; 
		 }
			 
		 	 
	
	}	
	
}
$obj= new Auto();
echo $obj->speed;
echo '<br>';
$obj->drive('little');
echo 'Тормозной путь - '.$obj->breakingDistance;