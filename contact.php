<?php
class Contact extends view
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

  <style>
*{
    margin: 0;
    padding: 0;
    font-family: "Open Sans",sans-serif;
    box-sizing: border-box;
}
 
body{
    min-height: 20vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #f1f1f1;
}
 
.about-section{
    background: url(egyeurologo.jpg) no-repeat left;
    background-size: 40%;
    background-color: #fdfdfd;
    overflow: hidden;
    height: 100%;
    padding: 100px 0;
}
 
.inner-container{
    width: 55%;
    float: right;
    background-color: #B0EDA9;
    padding: 150px;
box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
 
}
.inner-container h1{
    margin-bottom: 30px;
    font-size: 30px;
    font-weight: 900;
}
 
.text{
    font-size: 13px;
    color: #545454;
    line-height: 30px;
    text-align: justify;
    margin-bottom: 40px;
}
h1{
  color: black;
}
 
.contact{
    display: flex;
    justify-content: space-between;
    font-weight: 700;
    font-size: 13px;
}
 
@media screen and (max-width:1200px){
    .inner-container{
        padding: 80px;
    }
}
 
@media screen and (max-width:1000px){
    .about-section{
        background-size: 100%;
        padding: 100px 40px;
    }
    .inner-container{
        width: 100%;
    }
}
 
@media screen and (max-width:600px){
    .about-section{
        padding: 0;
    }
    .inner-container{
        padding: 60px;
    }
}
span{
  cursor: pointer;
  font-size: 16px;
text-align: center;
padding: 10px;
  width: 500px;
}
span:hover{
background-image: linear-gradient(to right top, lightgrey, lightgrey, lightgrey, lightgrey, lightgrey);
color: #fff;
border-radius: 20px;
transition: 0.5s;
 
}
.active{
  /*background-image: linear-gradient(to right top, black, black, black, black, black);*/
  background-color: #000000;
  color: #FFFFFF;
  border-radius: 20px;
 
 
}
</style>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us Page - EGYEURO</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body>
    <div class="about-section">
        <div class="inner-container">
            <h1>Contact Us</h1>
            <p class="text">
                Hello 
                if you have any questions regarding our products,how can you get any of our products, misusing anything and need help, refunding or exchanging any of our products, or anything else, you're more than welcome! 
                <br>
                dont hesitate to contact us through any of these options: 
                 
                <br>
               <img src="phone3.PNG" height="22px" width="22px" alt="" > +2 02 26376754
                <br>
                 <img src="mail2.PNG" height="22px" width="22px" alt="" >  info@egyeurogroup.com
                 <br>
                 <img src="fb7.PNG" height="22px" width="22px" alt="" >  <a href="https://web.facebook.com/EgyEuro.Official">our facebook page</a>
                 <h2>  or you can chat with us from here:</h2>
            </p>
            <div class="contact" >
              

                <span class="active" >contact us </span>
               
            </div>
        </div>
    </div>
</body>
</html>
EOT;
    echo $text;
    require APPROOT . '/views/inc/footer.php';
  }
}
