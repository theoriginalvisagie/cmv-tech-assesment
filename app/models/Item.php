<?php
  class Item {
    private $db;
    
    public function __construct(){
      $this->db = new Database;
    }


    public function getItems(){
      $sql = "SELECT * FROM items";
      
      $this->db->query($sql);

      $results = $this->db->resultset();

      // print_r($results,true);
      return $results;
    }


    public function addItem($data){
      // Prepare Query
      $this->db->query('INSERT INTO items (item, qty) VALUES (:item, :qty)');

      // Bind Values
      $this->db->bind(':item', $data['item']);
      $this->db->bind(':qty', $data['qty']);
      
      //Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

  }