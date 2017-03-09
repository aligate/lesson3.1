<?php
header('Content-Type: text/html; charset=utf-8');

//Объект книга
class Book
{
	public $page;
	public $text;
	public $image;
	public $type='adultsbook';
	
	public function __construct($page, $image ,$text)
	{
		$this->page = $page;
		$this->image = $image;
		$this->text = $text;
		if($text == null) $this->type = 'childrenbook';
	}
}

$book = new Book(200, 'picture', null);
echo $book->type;
echo '<br>';

//Объект - человек
class Man
{
	
	private $hand = 2;
	
	private $foot = 2;
	
	private $name;
	
	private $gender;
	
	private $age;
	
	
	public function __construct($name, $gender)
	{
		
		$this->name = $name;
		$this->gender = $gender;
		
	}
	
	public function live($age)
	{
		$this->age = $age;
		if($age==7) echo 'Пошел в первый класс';
		if($age==25) echo 'Создал семью';
		if($age==65) echo 'Ушел на пенсию';
	}
}

$man = new Man('Mike', 'male');
$man->live(65);


echo '<br>';
echo '<br>';
echo '<hr>';
 
//Объект - здание
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
echo '<hr>';
echo '<br>';

//Объект - автомобиль
class Auto
{
	 
	 public $speed = 0;
	 public $breakingDistance= 0;
	 
	 public function drive($tank = 'empty')
	 {
		 
		 if($tank=='full')
		 {
			 $this->speed = 200;
			 $this->breakingDistance = 120;
		 } 
		 if($tank=='little')
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
echo '<hr>';

//Объект - дети
class Children 
{
private $name;
public static $childNumber = 0;
public function __construct( $name ) 
 {
	$this->name = $name;
        self::$childNumber++;
}
}
echo Children::$childNumber;
echo '<br>';

$child = new Children( "Анна" );

echo Children::$childNumber;
echo '<br>';

$child = new Children( "Кирилл" );

echo Children::$childNumber;
echo '<br>';
echo '<hr>';



