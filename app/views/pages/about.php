<?php
class About extends view
{

  public function output()
  {
    $title = $this->model->title;
    $data = $this->model->data;
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
 
.about{
    
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
        <title>About Us Page - EGYEURO</title>
        <!-- <link rel="stylesheet" href="style.css"> -->
    </head>
    <body>
        <div class="about-section">
            <div class="inner-container">
                <h1>About Us</h1>
                <p class="text">
                In 1999 The Egyptian European was established supplying innovative nutritional and veterinary products to poultry farms. Up to today, we continue to grow and expand our business covering all the animal health industry including poultry, livestock, equine and pet animals.
                     <h2> For more info you can contact us from here:</h2>
                     <br>
                </p>
                <div class="about" >
                
                     <span class="Active"  > <a href="http://localhost/Software-Engineering/public/pages/contact">Contact Us</a> </span>
                     
                   </form>
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
