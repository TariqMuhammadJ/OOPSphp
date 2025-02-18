<?php 
class bicycle{
    var $brand = null;
    var $model = null;
    var $year = 'Not updated';

    var $description = "";

    var $weight_kg = "";

    public function __construct($brand, $model, $year, $weight){
        $this->brand = $brand;
        $this->year = $year;
        $this->model = $model;
        $this->weight_kg = $weight;
    }

    function name($name){
        echo "This is the {$name} of the bicycle";
    }

    public function setDescription($description){
        $this->description = $description;
    }

    function weight_in_labs(){
        return $this->weight_kg*2.2046226218 . "lbs" . "\n";
    }

    public function set_weight_in_lbs($weight){
        $this->weight_kg = $weight/2.2046226218;
        echo "New weight in kgs " . $this->weight_kg . "\n";
    }

    function get_attributes(){
        foreach(get_object_vars($this) as $attributes){
            echo $attributes . "\n";

        }
    }
}


$bicycle1 = new bicycle('Ford', 'X-50', 2023, 800);
$bicycle1->setDescription("This is one of a kind, and you should buy it before it's to late");
echo $bicycle1->weight_in_labs();
echo $bicycle1->set_weight_in_lbs(400);
echo $bicycle1->get_attributes();

var_dump($bicycle1);// this is a method that displays all information about a variable



?>