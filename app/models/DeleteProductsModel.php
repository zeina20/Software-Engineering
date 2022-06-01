<?php
require_once 'ProductsModel.php';
class DeleteProductsModel extends Model
{
   public function Delete($productid){
    $this->dbh->query("DELETE FROM products WHERE productid=$productid");
    $this->dbh->bind(':productid', $this->productid);
    return $this->dbh->execute();
   }
}
