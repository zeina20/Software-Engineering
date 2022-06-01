<?php
class Cart extends view
{

  public function output()
  {
    $title = $this->model->title;
    $data = $this->model->data;
    require APPROOT . '/views/inc/header.php';
    
    $text = <<<EOT


 <style>
* {
    
  box-sizing: border-box;
  font-family: "Open Sans",sans-serif;
  padding: 1px;
 

}

#heading1{
    
    text-align: center;
    padding: 30px;
}
img{
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 400px;
 
}

.myForm{

    max-width:500px;
   margin: auto;
   margin-top: 10px;
 
  }
  .input-container {
    background-color: #B0EDA9;
    display: flex;
    width: 100%;
    margin-bottom: 15px;
    
  }
  .icon {
    padding: 10px;
    background:  #B0EDA9;
    color: white;
    min-width: 50px;
    text-align: center;
  }
  .input-field {
      
    width: 100%;
    padding: 10px;
    outline: none;
    border: none;
    border-bottom: 3px solid #B0EDA9;;
  }
  .input-field:focus {
    border: 2px solid lightgrey;
  }

  .bttn {
    background-color: black;
    color: white;
    padding: 10px ;
    border: none;
    cursor: pointer;
    text-align: center;
    width: 50%;
    opacity: 0.9;
    border-radius: 20px;

  }
  .bttn:hover {
    opacity: 1;
    background-color: lightgrey;
    transition: 0.5s;
  }  
  a:hover{
    color: #B0EDA9;
}
.icon:hover{
    background-color: #B0EDA9;
}
</style>

<html>
    <head>
        <title>Checkout</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
       <h1 id="heading1"><h2 style="font-weight:bold;"><center>Please fill this form!</center></h2>
       <img src="http://localhost/Software-Engineering/public/images/egyeurologo.jpg" alt="Login Logo" style="width:200px; height:200px;">
     <div>
         <form action="" class="myForm" name="myForm">
          <div class="input-container">
                 <input type="name" placeholder="Name" name="name" class="input-field" required>
             </div>
             <div class="input-container">
                 <input type="email" placeholder="Email" name="email" class="input-field" required>
             </div>
             <div class="input-container">
                <input type="address" placeholder="Address" name="address" class="input-field"  required>
               </div>
              <div class="input-container">
                <input type="phonenumber" placeholder="Phone Number" name="number" class="input-field"  required>
               </div>
               <center>
            <div><input type="submit" class="bttn"></div>
            </center>
         </form>
     </div>
    </body>
</html>

EOT;
    echo $text;
    require APPROOT . '/views/inc/footer.php';
  }
}