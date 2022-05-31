<?php
class About extends view
{

  public function output()
  {
    $title = $this->model->title;
    $data = $this->model->data;
    require APPROOT . '/views/inc/header.php';
    
    $text = <<<EOT

    Mariam 
    EOT;
    echo $text;
    require APPROOT . '/views/inc/footer.php';
  }
}
