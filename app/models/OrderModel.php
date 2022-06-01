<?php
class OrderModel extends model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert($buyerId, $total)
    {
        $this->dbh->query("INSERT INTO `orders` (`order_id`, `buyer_id`, `date ordered`, `date received`, `Total price`) VALUES (NULL, :buyerId, CURRENT_TIMESTAMP, '', :total)");
        $this->dbh->bind(':buyerId', $buyerId);
        $this->dbh->bind(':total', $total);

        $this->dbh->execute();
        return $this->dbh->lastInsertId();
    }
}

?>