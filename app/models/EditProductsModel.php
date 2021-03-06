<?php
require_once 'ProductsModel.php';
class EditProductsModel extends Model
{
    public  $title = 'Edit Products Page';
    protected $productname;
    protected $productid;
    protected $description;
    protected $quantity;
    protected $price;
    protected $picture;

    public function __construct()
    {
        parent::__construct();
        $this->productname='';
        $this->productid='';
        $this->description='';
        $this->quantity='';
        $this->price='';

    }

    public function getProductName(){
        return $this->productname;
    }

    public function setProductName($productname){
         $this->productname=$productname;
    }

    public function getProductID(){
        return $this->productid;
    }

    public function setProductID($productid){
        $this->productid=$productid;
   }
   
   public function getDescription(){
    return $this->description;
}
  
public function setDescription($description){
     $this->description=$description;
}
public function getQuantity(){
    return $this->quantity;
}
public function setQuantity($quantity){
    $this->quantity=$quantity;
}
public function getPrice(){
    return $this->price;
}
public function setPrice($price){
    $this->price=$price;
}

public function getPicture(){
    return $this->price;
}
public function setPicture($picture){
    $this->picture=$picture;
}

    public function Edit($productid)
    {
        $this->dbh->query("UPDATE `products` SET `productname` = :productname, `picture` = :picture, `description` = :description, `quantity` = :quantity, `price` = :price WHERE `products`.`product_id` = ".$productid);
        $this->dbh->bind(':productname', $this->productname);
        $this->dbh->bind(':picture', $this->picture);
        $this->dbh->bind(':description', $this->description);
        $this->dbh->bind(':quantity', $this->quantity);
        $this->dbh->bind(':price', $this->price);
        $prodRecord = $this->dbh->execute();
        return $prodRecord;
    }
}
