<?php
class BuyerModel extends model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert($name, $email, $phone, $address)
    {
        $this->dbh->query("INSERT INTO `buyers` (`BuyerID`, `name`, `email`, `phone number`, `address`) VALUES (NULL, :name, :email, :phone, :address)");
        $this->dbh->bind(':name', $name);
        $this->dbh->bind(':email', $email);
        $this->dbh->bind(':phone', $phone);
        $this->dbh->bind(':address', $address);

        $this->dbh->execute();
        return $this->dbh->lastInsertId();
    }
}

?>