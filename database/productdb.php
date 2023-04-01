<?php
//use to fetch products
class Product{
    public $db=null;

    public function __construct(DBController $db){
      if(!isset($db->con))return null;
      $this->db=$db;
    }
    // fetch product data using getData Method
    public function getData($table='products'){
      $result = $this->db->con->query("Select * from {$table}");

      $resultArray = array();

      while($item = mysqli_fetch_array($result,MYSQLI_ASSOC)){
          $resultArray[]=$item;
      }
      return $resultArray;
    }
    //get product using item id
    public function getProduct($item_id=null,$table='products'){
        if(isset($item_id)){
            $result=$this->db->con->query("SELECT * FROM {$table} WHERE item_id = {$item_id}");

            $resultArray = array();

            while($item = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $resultArray[]=$item;
            }
            return $resultArray;
        }
    }
}