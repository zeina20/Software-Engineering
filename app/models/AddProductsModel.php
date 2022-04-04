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
        $this->dbh->query("INSERT INTO products (`product name`, `product id`, `quantity`,`order id`) VALUES(:productname, :productid, :quantity, :orderid)");
        $this->dbh->bind(':product name', $this->productname);
        $this->dbh->bind(':product id', $this->productid);
        $this->dbh->bind(':quantity', $this->quantity);
        $this->dbh->bind(':order id', $this->orderid);
        return $this->dbh->execute();
    }
}
