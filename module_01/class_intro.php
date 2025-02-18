<?php
	class Student{
	  
	  
	}
	
	
	$classes = get_declared_classes();
	echo "Classes " . implode(', ', $classes) . "\n";
	
	$class_names = ['Product', 'Student', 'student'];
	
	foreach($class_names as $class_name){
	  if (class_exists($class_name)){
	    echo "Class Exists + {$class_name}" . "\n";
	    
	  }
	  else{
	    echo "This class does not exist + {$class_name}" . "\n";
	  }
	}
	
	
	echo "Php is case insensitive" . "\n";
	
	$student = new Student();
	
	echo "This variable holds the " .  get_class($student) . " Class" . "\n";
	echo is_a($student, "Student");
	
	// Let's stry a better example
	
	foreach($class_names as $class_name){
	  if(is_a($student, $class_name)){
	    echo "Student is {$class_name} is a declared class" . "\n";
	    
	  }
	  else {
	    echo "Student is {$class_name} is not a declared class" . "\n";
	  }
	}
?>