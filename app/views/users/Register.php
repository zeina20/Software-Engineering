<?php
class Register extends view
{
  public function output()
  {
    $title = $this->model->title;

    require APPROOT . '/views/inc/header.php';
    $text = <<<EOT
 
EOT;
    echo $text;
    $this->printForm();
    require APPROOT . '/views/inc/footer.php';
  }

  private function printForm()
  {
    $action = URLROOT . 'users/register';
    $loginUrl = URLROOT . 'users/login';

    $text = <<<EOT
    <div class="row">
    <div class="col-md-6 mx-auto">
    <div class="card card-body bg-light mt-5">
    <h2>Sign Up</h2>
    <form action="$action" method="post">
EOT;
    echo $text;
    $this->printName();
    $this->printEmail();
    $this->printPassword();
    $this->printConfirmPassword();
    $text = <<<EOT
    <style>

body {
  font: 100% / 1.414 "Open Sans", "Roboto", arial, sans-serif;
  background: #e9e9e9;
}
a,
[type="submit"] {transition: all .25s ease-in;}
.signup__container {
  position: absolute;
  top: 50%;
  right: 50;
  left: 50;
  margin-right: 50;
  margin-left: 50;
  transform: translateY(-50%);
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
  width: remy(800px);
  height: remy(480px);
  border-radius: remy(3px);
  box-shadow: 0px remy(3px) remy(7px) rgba(0,0,0,.25);
}
.signup__overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: #B0EDA9;
}
.container__child {
  width: 50%;
  height: 100%;
  color: #fff;
}
.signup__thumbnail {
  position: relative;
  padding: 2rem;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  background: url(http://ultraimg.com/images/spectre-login.jpg);
  background-repeat: no-repeat;
  background-position: top center;
  background-size: cover;
}
.thumbnail__content,
.thumbnail__links {
  position: relative;
  z-index: 2;  
}
.thumbnail__content {align-self: center;}
h1,
h2 {
  font-weight: 700;
  color:black;  
}
.heading--primary {font-size: 1.999rem;}
.heading--secondary {font-size: 1.414rem;}
.thumbnail__links {
  align-self: flex-end;
  width: 100%;
}
.thumbnail__links a {
  font-size: 1rem;
  color: #fff;
  &:focus,
  &:hover {color: rgba(255,255,255,.5);}
}
.signup__form {
  padding: 2.5rem;
  background: #fafafa;
}
label {
  font-size: .85rem;
  text-transform: uppercase;
  color: black;
}
.form-control {
  background-color: transparent;
  border-top: 0;
  border-right: 0;
  border-left: 0;
  border-radius: 0;
  &:focus {border-color: black;}
}
[type="text"] {color: #111;}
[type="password"] {color: #111;}
.btn--form {
  padding: 10px;
  border-radius:20px;
  font-size: .80rem;
  font-weight: 600;
  color: white;
  background: black;
  border-radius: remy(35px);
    &:focus,
    &:hover {background: lighten(#111, 13%);}
}
</style>
<div class="signup__container">
  <div class="container__child signup__thumbnail">
    <div class="thumbnail__content text-center">     
      <h1 class="heading--primary"><center>Sign Up Here!</center></h1>

    </div>
    
    <div class="thumbnail__links">
    
      <center>
      <img class="0" src="http://localhost/Software-Engineering/public/images/egyeurologo.jpg" height="200px" width="200px" alt="Image">
      </center>
    </div>
    <div class="signup__overlay"></div>
    
  </div>
  <div class="container__child signup__form">
    <form action="#">
      <div class="form-group">
        <label for="username">Username</label>
        <input class="form-control" type="text" name="username" id="username" required />
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input class="form-control" type="text" name="email" id="email"  required />
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input class="form-control" type="password" name="password" id="password"  required />
      </div>
      <div class="form-group">
        <label for="confirmpassword">confirm Password</label>
        <input class="form-control" type="password" name="confirmpassword" id="confirmpassword"  required />
      </div>
      <div class="m-t-lg">
        <ul class="list-inline">
          <li>
            <input class="btn btn--form" type="submit" value="Register" />
          </li> 
        </ul>
      </div>
    </form>  
  </div>
</div>
EOT;
    echo $text;
  }

  private function printName()
  {
    $val = $this->model->getName();
    $err = $this->model->getNameErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('text', 'name', $val, $err, $valid);
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
  private function printConfirmPassword()
  {
    $val = $this->model->getConfirmPassword();
    $err = $this->model->getConfirmPasswordErr();
    $valid = (!empty($err) ? 'is-invalid' : '');

    $this->printInput('password', 'confirm_password', $val, $err, $valid);
  }

  private function printInput($type, $fieldName, $val, $err, $valid)
  {
    $label = str_replace("_", " ", $fieldName);
    $label = ucwords($label);
    $text = <<<EOT
    <div class="form-group">
      <label for="$fieldName"> $label: <sup>*</sup></label>
      <input type="$type" name="$fieldName" class="form-control form-control-lg $valid" id="$fieldName" value="$val">
      <span class="invalid-feedback">$err</span>
    </div>
EOT;
    echo $text;
  }
}
