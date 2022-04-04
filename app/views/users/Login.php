<?php
class Login extends view
{
  public function output()
  {
    $title = $this->model->title;

    require APPROOT . '/views/inc/header.php';
    flash('register_success');
    $text = <<<EOT
   
EOT;
    echo $text;
    $this->printForm();
    require APPROOT . '/views/inc/footer.php';
  }

  private function printForm()
  {
    $action = URLROOT . 'users/login';
    $registerUrl = URLROOT . 'users/register';

    $text = <<<EOT
    <div class="row">
    <div class="col-md-6 mx-auto">
    <div class="card card-body bg-light mt-5">
    <form action="$action" method="post">
EOT;

    echo $text;
    //$this->printEmail();
    //$this->printPassword();

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
        <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
       <h1 id="heading1"><h2 style="font-weight:bold;"><center>Hello Admin! Login Here</center></h2>
       <img src="http://localhost/Software-Engineering/public/images/egyeurologo.jpg" alt="Login Logo" style="width:200px; height:200px;">
     <div>
         <form action="" class="myForm" name="myForm">
             <div class="input-container">
                 <i class="fa fa-envelope icon"></i>
                 <input type="email" placeholder="Email" name="email" class="input-field" required>
             </div>
             <div class="input-container">
                <i class="fa fa-key icon"></i>
                <input type="password" placeholder="Password" name="password" class="input-field"  required>
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
  }

  private function printEmail()
  {
    $val = $this->model->getEmail();
    $err = $this->model->getEmailErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('email', 'email', $val, $err, $valid);
  }

  private function printPassword()
  {
    $val = $this->model->getPassword();
    $err = $this->model->getPasswordErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('password', 'password', $val, $err, $valid);
  }

  private function printInput($type, $fieldName, $val, $err, $valid)
  {
    $label = str_replace("_", " ", $fieldName);
    $label = ucwords($label);
    $text = <<<EOT
    <div class="form-group">
      <label for="$fieldName"> $label: <sup>*</sup></label>
      <input type="$type" name="$fieldName" class="form-control form-control-lg $valid" id="$fieldName" value="$val" required="">
      <span class="invalid-feedback">$err</span>
    </div>
EOT;
    echo $text;
  }
}
