<?php
  class Pages extends Controller{
    public function __construct(){
      
    }

    // Load Homepage
    public function index(){
      require_once(APPROOT."/models/Item.php");
      $item = new Item();
      $data = $item->getItems();
      $data = json_decode(json_encode($data), true);
      // print_r($data);
      // Load homepage/index view
      $this->view('items/index', $data);
    }
  }