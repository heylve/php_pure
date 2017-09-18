<?php
// An array of names
$users = array("John", "Jane", "Sally", "Philip");
 
// Pass the array to array_walk
array_walk($users, function ($name) {
  echo "Hello $name<br>";
});

 $string = function(){
			return "This is an anonymous function";
		  };
	
	echo $string();

//clojure to access private members of a class
class worker
{
	private $id;
	private $sal;
	
	public function __construct($id,$salary)
	{
		$this->id=$id;
		$this->sal=$salary;
	}
	
	public function info(){
			return function(){
			return "ID = {$this->id} <br>Salary = {$this->sal}.";
		};
	}
	
	public function info2(){
			
			echo "ID = {$this->id} <br>Salary = {$this->sal}.";
		
	}
	
}
$work=new worker(101,10000);
$f=$work->info();
$work->info2();
// echo "salary ".$work->$id;
$f();
echo "<br>_____________________<br>";

class Plane
{
	public function __invoke()
	{
		echo "This is an Indian Airlines plane.";
	}
}
 
$plane=new Plane();
$plane();
class Plane2
{
	private $id;
	
	public function __construct($id)
	{
		$this->id=$id;
	}
	
	public function company($comp)
	{
		return static function() use($comp){
			echo "This is a ".$comp." plane.";
		}; 
	}
}
 
$plane2=new Plane2("4");
$plane2->company("Indian Airlines Society LTD");