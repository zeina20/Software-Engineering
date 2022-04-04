<?php
class ProductsModel extends model
{
     public $title = 'Products Page' ;
     public $data = 'choose from the list';
     protected $productname;
     protected $productid;
     protected $quantity;
     protected $orderid;
 
     public function __construct()
     {
         parent::__construct();
         $this->productname = '';
         $this->productid    = '';
         $this->quantity = '';
         $this->orderid = '';
     }
 
     public function getName()
     {
         return $this->productname;
     }
     public function setName($productname)
     {
         $this->productname = $productname;
     }
 
     public function getProductID()
     {
         return $this->productid;
     }
     public function setProductID($productid)
     {
         $this->productid = $productid;
     }
 
     public function getQuantity()
     {
         return $this->quantity;
     }
     public function setOrderID($orderid)
     {
         $this->orderid = $orderid;
     }
 
      public function getAllProducts()
     {
         $this->dbh->query('select * from products');
 
         $productRecord = $this->dbh->resultSet();
         return $productRecord;
     }
      
 }
 ?>