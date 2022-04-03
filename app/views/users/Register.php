<?php
class Register extends view
{
  public function output()
  {
    $title = $this->model->title;

    require APPROOT . '/views/inc/header.php';
    $text = <<<EOT
    <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4"> $title</h1>
    </div>
  </div>

  </div>
  </div>
  </div>
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
    @import url( 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
     @import url('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js');
     @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
     @import url('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js');
html,
body {
    height: 100%
}

body {
    background-color: lightgrey;
    display: grid;
    place-items: center
}

.card {
    padding: 0px 15px;
    border-radius: 20px
}

.c1 {
    background-color: #B0EDA9;
    border-radius: 20px
}

a {
    margin: 0px;
    font-size: 13px;
    border-radius: 7px;
    text-decoration: none;
    color: black
}

a:hover {
    color: #e0726c;
    background-color: lightgrey;
}

.nav-link {
    padding: 1rem 1.4rem;
    margin: 0rem 0.7rem
}

.ac {
    font-weight: bold;
    color: #e0726c;
    font-size: 12px
}

input,
button {
    width: 96%;
    background-color: lightgrey;
    border-radius: 20px;
    padding: 8px 17px;
    font-size: 13px;
    border: 1px solid #B0EDA9;
    color: #dccece
}

input: {
    text-decoration: none
}

.bt {
    background-color: #000000;
    border: 1px solid rgb(300, 200, 200)
}

form {
    margin-top: 70px
}

form>* {
    margin: 10px 0px
}

#forgot {
    margin: 0px -60px
}

#register {
    text-align: center
}

img {
    max-width: 200px;  
    background-color: antiquewhite
}

.wlcm {
    font-size: 30px
}

.sp1 {
    font-size: 5px

}

.sp1>span {
    background-color: lightgrey;
}

</style>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-12 col-lg-11 col-xl-10">
            <div class="card d-flex mx-auto my-5">
                <div class="row">
                    <div class="col-md-5 col-sm-12 col-xs-12 c1 p-5">
                        <div class="row mb-5 m-3"> <!-- <img src="https://i.imgur.com/pFfTOwy.jpg" width="70vw" height="55vh" alt=""> --> </div> <img src="egyeurologo.jpg" width="220vw" height="210vh" class="mx-auto d-flex" alt="LOGO">
                        <div class="row justify-content-center">
                            <div class="w-75 mx-md-5 mx-1 mx-sm-2 mb-5 mt-4 px-sm-5 px-md-2 px-xl-1 px-2">
                                <h1 class="wlcm">Welcome to EgyEuro Company</h1> <span class="sp1"> <span class="px-3 bg-danger rounded-pill"></span> <span class="ml-2 px-1 rounded-circle"></span> <span class="ml-2 px-1 rounded-circle"></span> </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12 c2 px-5 pt-5">
                        <div class="row">
                            <!-- <nav class="nav font-weight-500 mb-1 mb-sm-2 mb-lg-5 px-sm-2 px-lg-5"> <a class="nav-link" href="#">Careers</a> <a class="nav-link ac" href="#">Students</a> <a class="nav-link" href="#">Admission</a> </nav> -->
                        <!-- </div> -->

                        <form onsubmit="event.preventDefault()" name="myform" onsubmit="" class="px-5 pb-5">
                            <h1 class="wlcm">Hi Admin</h1>
                            <div class="d-flex"> <img src="https://i.imgur.com/oGcceAH.jpg" height="22px" width="22px" alt="" class="mr-3 mt-2">
                                <h3 class="font-weight-bold">Sign Up</h3>
                            </div> <input type="text" name="userid" placeholder="Email"> <input type="password" name="passw" placeholder="Password"> 
                            <input type="password" name="confirmpassw" placeholder="Confirm Password"><button class="text-white text-weight-bold bt">Continue</button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
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
