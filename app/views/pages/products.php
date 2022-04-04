<?php
class Products extends view
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
      
      <h2 style="text-align:center">Products</h2>
      
      <div class="cards" >
        <img src="../../public/images/ADE.jpg" alt="ADE - VIT INJECTION SOLUTION" style="width:100%">
        <h1>ADE - VIT INJECTION SOLUTION</h1>
        <p class="price">EGP 300.00</p>
        <p>
        TYPE OF PREPARATIVE:Vitamins, food supplements <br>
        TARGET SPECIES ANIMALS:	Pig, Cattle, Horse, Dog, Rabbit, Goat, Sheep
        </p>
        <p><button>Add to Cart</button></p>
      </div>
  
      <div class="cards">
        <img src="../../public/images/Alaptid.jpg" alt="Alaptid" style="width:100%">
        <h1>ALAPTID VETERINARY OINTMENT</h1>
        <p class="price">EGP 200.00</p>
        <p>TYPE OF PREPARATIVE:	Dermatologics <br>
        TARGET SPECIES ANIMALS:	Fox, Horse, Cat, Fur-bearing animal, Dog
        </p>
        <p><button>Add to Cart</button></p>
      </div>


      <div class="cards">
        <img src="../../public/images/alfadin.jpg" alt="alfadin" style="width:100%">
        <h1>ALFADIN 10 MG/ML SKIN SOLUTION</h1>
        <p class="price">EGP 250.00</p>
        <p>
        TYPE OF PREPARATIVE:	Antiseptics, disinfections <br>
        TARGET SPECIES ANIMALS:	Sheep, Pig, Dog, Goat, Cat, Cattle, Horse, Poultry
        </p>
        <p><button>Add to Cart</button></p>
      </div>

      <div class="cards">
      <img src="../../public/images/Amoxicillin.jpg" alt="amoxicillin" style="width:100%">
      <h1>AMOXICILLIN BIOVETA 150 MG/ML LA INJECTION SUSPENSION</h1>
      <p class="price">EGP 350.00</p>
      <p>
        TYPE OF PREPARATIVE:	Antimicrobial products <br>
       TARGET SPECIES ANIMALS:	Cattle, Dog, Pig
      </p>
      <p><button>Add to Cart</button></p>
    </div>

    <div class="cards">
    <img src="../../public/images/Atlet.jpg" alt="atlet" style="width:100%">
    <h1>ATLET MSM COMPLETE JOINT NUTRITION</h1>
    <p class="price">EGP 250.00</p>
    <p>
    TYPE OF PREPARATIVE:	Joint nutrition <br>
    TARGET SPECIES ANIMALS:	Horse
    </p>
    <p><button>Add to Cart</button></p>
</div>

<div class="cards">
  <img src="../../public/images/avitubal.jpg" alt="avitubal" style="width:100%">
  <h1>AVITUBAL 28 000 SOLUTION FOR INJECTION</h1>
  <p class="price">EGP 400.00</p>
  <p>
  TYPE OF PREPARATIVE:	Diagnostics <br>
  TARGET SPECIES ANIMALS:	Pig, Poultry, Cattle
  </p>
  <p><button>Add to Cart</button></p>
</div>
   

<div class="cards">
<img src="../../public/images/BioBos.jpg" alt="biobos" style="width:100%">
<h1>BIOBOS L(6), SUSPENSION FOR INJECTION</h1>
<p class="price">EGP 450.00</p>
<p>
TYPE OF PREPARATIVE:	Vaccines <br>
TARGET SPECIES ANIMALS:	Cattle
</p>
<p><button>Add to Cart</button></p>
</div>

<div class="cards">
<img src="../../public/images/Biocan.jpg" alt="biocan" style="width:100%">
<h1>BIOCAN C, SUSPENSION FOR INJECTION</h1>
<p class="price">EGP 360.00</p>
<p>
TYPE OF PREPARATIVE:	Vaccines <br>
TARGET SPECIES ANIMALS:	Dog
</p>
<p><button>Add to Cart</button></p>
</div>
 
<div class="cards">
<img src="../../public/images/BIODEXIN.jpg" alt="biodexin" style="width:100%">
<h1>BIODEXIN EAR LOTION, SOLUTION</h1>
<p class="price">EGP 280.00</p>
<p>
TYPE OF PREPARATIVE:	Dermatologics <br>
TARGET SPECIES ANIMALS:	Dog
</p>
<p><button>Add to Cart</button></p>
</div>

<div class="cards">
<img src="../../public/images/Equimoxin.jpg" alt="equimoxin" style="width:100%">
<h1>EQUIMOXIN 18.92 MG/G ORAL GEL FOR HORSES</h1>
<p class="price">EGP 290.00</p>
<p>
TYPE OF PREPARATIVE:	Antiparasitics <br>
TARGET SPECIES ANIMALS:	Horse
</p>
<p><button>Add to Cart</button></p>
</div>


      </body>
      </html>
      
EOT;
    echo $text;
    require APPROOT . '/views/inc/footer.php';
  }
}
