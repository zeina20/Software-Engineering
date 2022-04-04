<?php

class AdminModel extends model
{
     public $title = 'Admin template';
     public $data = 'add, delete, edit products';
     
     public function getAllProducts (){
          $obj=new ProductsModel();
          $this->model->getAllProducts();
     }
}
