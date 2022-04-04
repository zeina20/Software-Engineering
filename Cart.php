<?php
class Cart extends view
{

  public function output()
  {
    $title = $this->model->title;
    $data = $this->model->data;
    require APPROOT . '/views/inc/header.php';
    
    $text = <<<EOT
    <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4"> $title</h1>
      <h2 class="display-4"> $data</h>
      </div>
      </div>

      <!DOCTYPE html>
      <html>
      <head>
      <style>
      .cards {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 300px;
        margin: auto;
        text-align: center;
        font-family: arial;
      
      }

      
      
      .price {
        color: grey;
        font-size: 22px;
      }
      
      .cards button {
        border: none;
        outline: 0;
        padding: 12px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
        font-size: 18px;
      }
      
      .cards button:hover {
        opacity: 0.7;

      }
      </style>
      </head>
      <body>
      
      <h2 style="text-align:center">Cart</h2>
      
      <div class="cards" >
        <img src="../../public/images/EmptyCart.jpg" alt="Cart" style="width:100%">
        <h1>Empty Cart ?</h1>
       
        <p><button onclick="window.location.href='Products'">Start Shopping</button></p>
      </div><br>
  
     


      </body>
      </html>
      
EOT;
    echo $text;
    require APPROOT . '/views/inc/footer.php';
  }
}
