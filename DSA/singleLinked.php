<?php

class Node{
    var $data = null;
    var $next = null;
    var $list = [];
    
    public function __construct($data){
      $this->data = $data;
    }
    
    public function traverse($current){
      
      while ($current->data !== null){
        if ($current->data === null){
          break;
        }
        $this->list[] = $current->data;
        echo $current->data . "\n";
        $current = $current->next;
        
      }
      
    }
  }
  
  $node1 = new Node(3);
  $node2 = new Node(4);
  $node3 = new Node(5);
  
  
  $list1 = new Node(3);
  $list2 = new Node(8);
  $list3 = new Node(9);
  
  
  $node1->next = $node2;
  $node2->next = $node3;
  
  $list1->next = $list2;
  $list2->next = $list3;
  
  $node1->traverse($node1);
  print_r($node1->list);
  
  $list1->traverse($list1);
  print_r($list1->list);
  
  $firstList = $node1->list;
  $secondList = $list1->list;
  
  $sum = 0;
  foreach ($firstList as $li){
    $sum += $li;
    
  }
  
  foreach ($secondList as $li2){
    $sum +=  $li2;
  }
  
  echo $sum;
  
  




?>