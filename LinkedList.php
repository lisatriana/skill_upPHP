<?php
//struktur node
class Node {
  public $data;
  public $next;
}

class LinkedList {
  public $head;

  //constructor untuk membuat linkedlist menjadi kosong
  public function __construct(){
    $this->head = null;
  }
  
  //menampilkan konten dari list
  public function PrintList() {
    $temp = new Node();
    $temp = $this->head;
    if($temp != null) {
      echo "The list contains: ";
      while($temp != null) {
        echo $temp->data." ";
        $temp = $temp->next;
      }
      echo "\n";
    } else {
      echo "The list is empty.\n";
    }
  }   
};

// test the code  
//create an empty LinkedList
$MyList = new LinkedList();

//Add first node.
$first = new Node();
$first->data = 10;
$first->next = null;
//linking with head node
$MyList->head = $first;

//Add second node.
$second = new Node();
$second->data = 20;
$second->next = null;
//linking with first node
$first->next = $second;

//Add third node.
$third = new Node();
$third->data = 30;
$third->next = null;
//linking with second node
$second->next = $third;

//print the content of list
$MyList->PrintList();   
?>