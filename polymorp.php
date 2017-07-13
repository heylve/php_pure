<?php
class Animal
{
public static $name;
public $version;

public static function nameChange()
{
echo "<br>function static nameChange Called";
self::$name ="Programer interview";
}
public static function whichClass() 
{
echo "<br> i am an animal";    
}
public function sayClassName()
{
    self::whichClass();
}
public function sayClassName2() {
      self::$name = "My name is Animal";
    }
    
    
    public function setVersion($v)
    {
     
        $this ->version=$v;
        echo "<br> the version is ".$this->version;
    }
    
    
    
}



$animal=  new Animal();
$animal->setVersion("7");
$animal ->sayClassName();
$animal ->sayClassName2();


$animal->nameChange();
Animal::nameChange();
echo "<br> animal name ".$animal::$name;

?>
