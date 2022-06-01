<?php
require_once 'ProductsModel.php';
class AddProductsModel extends ProductsModel
{
    public  $title = 'Add Products Page';
    protected $product_id;
    protected $productname;
    protected $picture;
    protected $description;
    protected $quantity;
    protected $price;

    public function __construct()
    {
        parent::__construct();
    }

    public function getProductName(){
        return $this->productname;
    }
   

    public function setProductName($productname){
         $this->productname=$productname;
    }

    public function getProductID(){
        return $this->product_id;
    }

    public function setProductID($product_id){
         $this->product_id=$product_id;
    }

    public function getProductPicture(){
        return $this->picture;
    }

    public function setProductPicture($picture){
         $this->picture=$picture;
    }

    public function getProductDescription(){
        return $this->description;
    }

    public function setProductDescription($description){
         $this->description=$description;
    }

    public function getProductQuantity(){
        return $this->quantity;
    }

    public function setProductQuantity($quantity){
         $this->quantity=$quantity;
    }


    public function getProductPrice(){
        return $this->price;
    }

    public function setProductPrice($price){
         $this->price=$price;
    }

    public function Add()
    {
        $this->dbh->query("INSERT INTO products (`productname`,`picture`, `description`,`quantity`,`price`) VALUES(:productname, :picture, :description, :quantity, :price)");
        $this->dbh->bind(':productname', $this->productname);
        $this->dbh->bind(':picture', $this->picture);
        $this->dbh->bind(':description', $this->description);
        $this->dbh->bind(':quantity', $this->quantity);
        $this->dbh->bind(':price', $this->price);
        $this->dbh->execute();
        return $this->dbh->lastInsertId();
    }
}
