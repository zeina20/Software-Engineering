<?php
class OrderProductsModel extends model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert($orderId, $productId, $quantity)
    {
        $this->dbh->query("INSERT INTO `order_products` (`id`, `order_id`, `product_id`, `quantity`) VALUES (NULL, :orderId, :productId, :quantity)");
        $this->dbh->bind(':orderId', $orderId);
        $this->dbh->bind(':productId', $productId);
        $this->dbh->bind(':quantity', $quantity);

        $this->dbh->execute();
        return $this->dbh->lastInsertId();
    }
}

?>