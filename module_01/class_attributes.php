<?php

// Follow the steps below to use this file

// 1. In your main file (e.g., HelloWorld.php), include this file using:
// include 'NewFile1.php';

// 2. Call the function to get the greeting message:
// echo sayHelloFromNewFile1();

class Person{
  var $first_name;
  var $last_name;
  var $employed = false;
  var $country = 'None';
}

// get_class_vars('classname') only allows you to reference classes
// get_object_vars($object) allows you to reference objects that have been instantiated
// property_exists($object, 'property') checks if a property exists on an object

$customer = new Person();
$customer->first_name = "John";
echo $customer->first_name . "\n";

$variables = get_object_vars($customer);
foreach($variables as $key => $value) {
    echo "Property: $key, Value: $value  . <br />";

}

echo debug_zval_dump($customer);


?>