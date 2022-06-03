<?php
class Contact extends view
{

  public function output()
  {
    $title = $this->model->title;

    require APPROOT . '/views/inc/header.php';
    $text = <<<EOT
   

  <style>
*{   
  
    flex-direction=row;
      justify-content: center;
      align-items: center;
      text-align:center;
      font-family: "Open Sans",sans-serif;
      box-sizing: border-box;
  }
  body{
    display:block;
    align-items: center;
    justify-content: center;
    background-color: #f1f1f1;
}
.about-section{
    display:block;
    background: url(../../public/images/egyeurologo.jpg) no-repeat top left;
    background-size: 10%;
    background-color: #fdfdfd;
    overflow: hidden;
    height: 100%;
    width:100%;
    padding: 100px ;
}
.inner-container{
    width: 100%;
    height:100%;
    float: right;
    background-color: #B0EDA9;
    padding: 100px ;
box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
 
}
.inner-container h1{
    margin-bottom: 30px;
    font-size: 30px;
    font-weight: 900;
}
 
.text{
    font-size: 20px;
    color: #545454;
    line-height: 30px;
    text-align: justify;
    margin-bottom: 40px;
}
h1{
  color: black;
}
 
.contact{
    
    justify-content: space-between;
    font-weight: 700;
    font-size: 13px;
}
 
@media screen and (max-width:1200px){
    .inner-container{
        padding: 100px;
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
        padding: 100;
    }
    .inner-container{
        padding: 100px;
    }
}
span{
  cursor: pointer;
  font-size: 16px;
text-align: center;
padding: 10px;
  width: 500px;
  height: 100px;
}
span:hover{
background-image: linear-gradient(to right top, lightgrey, lightgrey, lightgrey, lightgrey, lightgrey);
color: #fff;
border-radius: 20px;
transition: 0.5s;
 
}
.Active{
  background-image: linear-gradient(to right top, black, black, black, black, black);
  color: #fff;
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
               <img src="http://localhost/Software-Engineering/public/images/phone3.PNG" height="22px" width="22px" alt="" > +2 02 26376754
                <br>
                 <img src="http://localhost/Software-Engineering/public/images/mail2.PNG" height="22px" width="22px" alt="" >  info@egyeurogroup.com
                 <br>
                 <img src="http://localhost/Software-Engineering/public/images/fb7.PNG" height="22px" width="22px" alt="" >  <a href="https://web.facebook.com/EgyEuro.Official">our facebook page</a>
                 <h2>  or you can chat with us from here:</h2>
            </p>
            <div class="contact" >
              

            <a href="chat" class="btn btn-success float-right">Chat</a>
               
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
