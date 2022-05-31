<?php
require_once 'ProductsModel.php';
class AddProductsModel extends ProductsModel
{
    public  $title = 'Add Products Page';
   

    public function __construct()
    {
        parent::__construct();
    }



    public function Add()
    {
        $this->dbh->query("INSERT INTO products (`product_id`, `productname`,`picture, `description`,`quantity`,`price`) VALUES(:product_id, :productname, :picture, :description, :quantity, :price)");
        $this->dbh->bind(':product_id', $this->product_id);
        $this->dbh->bind(':productname', $this->productname);
        $this->dbh->bind(':picture', $this->picture);
        $this->dbh->bind(':description', $this->description);
        $this->dbh->bind(':quantity', $this->price);
        return $this->dbh->execute();
    }
}
