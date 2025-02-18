<?php

class Student{
    var $first_name = null;
    var $last_name = null;
    

    function say_hello(){
        return "Hello my name is {$this->first_name} {$this->last_name}! I'm a student." . "\n";
    }
}


$student = new Student();
$student->first_name = "John";
$student->last_name = "Doe";

echo $student->say_hello() . "\n";

$class_methods = get_class_methods(Student::class);

foreach ($class_methods as $method) {
    echo "Method: $method" . "\n";

}

if (method_exists(Student::class, 'say_goodbye')) {
    echo "Method exists" . "\n";
    
}

else {
    echo "Method does not exist" . "\n";
}

print_r($student);



?>