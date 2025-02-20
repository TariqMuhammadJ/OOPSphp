<?php

// get_parent_class();
// is_subclass_of();
// class_parents(); -- retrieves all the parent classes of a sub class included

class User{
    var $first_name;
    var $last_name;
    var $username;

    function fullname(){
        return $this->first_name . " " . $this->last_name . "\n";
    }
}

class Customer extends User{
    // empty but will have all the same attributes as the upper class because it's a subclass
}


$u = new User();
$u->first_name = "John";
$u->last_name = "Seinfield";
$u->username = "jseinfield";
echo $u->fullname();

$c = new Customer();
$c->first_name = "George";
$c->last_name = "Costanze";
$c->username = "gconstanze";
echo $c->fullname();
echo get_parent_class($c) . "\n";
echo implode(', ', class_parents($c));




?>