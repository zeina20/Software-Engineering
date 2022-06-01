<?php
/*public $title = 'Products Page' ;
public $data = 'choose from the list';

private $host = "localhost";
private $user = "root";
private $password = "";
private $database = "miublog";
public $conn;

function __construct() {
$this->conn = $this->connectDB();
}

function connectDB() {
$conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
return $conn;
}*/
class ProductsModel extends model
{


    public function getAllProducts()
    {
        $this->dbh->query('select * from products');

        return $this->dbh->resultSet();
    }

    public function getProductById($productId)
    {
        $this->dbh->query('select * from products where product_id = '.$productId);

        return $this->dbh->resultSet();
    }
    

}
?>