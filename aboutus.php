<style>
*{
    margin: 0;
    padding: 0;
    font-family: "Open Sans",sans-serif;
    box-sizing: border-box;
}
 
body{
    min-height: 100vh;
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
    background-color: #fdfdfd;
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
background-image: linear-gradient(to right top, #f85370, #f35470, #ee5570, #e8556f, #e3566f);
color: #fff;
border-radius: 20px;
transition: 0.5s;
 
}
.active{
  background-image: linear-gradient(to right top, #f85370, #f35470, #ee5570, #e8556f, #e3566f);
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
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus velit ducimus, enim inventore earum, eligendi nostrum pariatur necessitatibus eius dicta a voluptates sit deleniti autem error eos totam nisi neque voluptates sit deleniti autem error eos totam nisi neque.
                 <h2> For more info you can contact us from here:</h2>
                 <br>
            </p>
            <div class="contact" >
              

                <span class="active" >contact us </span>
               
            </div>
        </div>
    </div>
</body>
</html>