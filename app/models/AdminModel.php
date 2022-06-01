<?php

class AdminModel extends model
{
     public $title = 'Admin template';
     public $data = 'add, delete, edit products';
     
     public function getAllProducts()
    {
        $this->dbh->query('select * from products');

        $prodRecord = $this->dbh->resultSet();
        return $prodRecord;
    }
}
