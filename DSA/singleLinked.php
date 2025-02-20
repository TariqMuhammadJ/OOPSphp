<?php
class Node{
  public $data;
  public $next;
  public $prev;
  
  public function __construct($data){
    $this->data = $data;
    $this->next = null;
    $this->prev = null;
  }
}


class LinkedList{
  private $head;
  
  public function __construct(){
    $this->head = null;
  }
  
  public function append($data){
    $newNode = new Node($data);
    if ($this->head === null){
      $this->head = $newNode;
      return;
    }
    
    $current = $this->head;
    while ($current->next !== null){
      $current = $current->next;
    }
    
    $current->next = $newNode;
  }
  
  public function traverseForward(){
    $current = $this->head;
    while ($current !== null){
      echo $current->data . "\n";
      $current = $current->next;
      
    }
  }
}

$list = new LinkedList();
$list->append(10);
$list->append(20);
$list->append("I love life");
$list->traverseForward();





?>