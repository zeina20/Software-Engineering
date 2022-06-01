<?php
require_once APPROOT . '/controllers/Pages.php';
class EditProducts extends View
{
  public function output()
  {

    require APPROOT . '/views/inc/header.php';

    $this->printForm();
    require APPROOT . '/views/inc/footer.php';
  }

  private function printForm()
  {
    $action = URLROOT . 'pages/EditProducts/'.$this->controller->product->product_id;

    $text = <<<EOT
    <div class="row">
    <div class="col-md-6 mx-auto">
    <div class="card card-body bg-light mt-5">
    <h2>Editing {$this->controller->product->productname}</h2>
    <form action="$action" method="post" enctype="multipart/form-data">
EOT;
    echo $text;
    $text = <<<EOT
	<div class="form-group">
      <label for="Product Name"> Product Name </label>
      <input type="text" name="productname" id="productname" value="{$this->controller->product->productname}" >
    </div>


	<div class="form-group">
      <label for="Description"> Description </label>
      <input type="text" name="description" id="description" value="{$this->controller->product->description}">
    </div>

    <div class="form-group">
      <label for="Quantity"> Quantity </label>
      <input type="text" name="quantity" id="quantity" value="{$this->controller->product->quantity}">
    </div>

    <div class="form-group">
      <label for="Price"> Price </label>
      <input type="text" name="price" id="price" value="{$this->controller->product->price}">
    </div>

    <p>
    <label for="picture"> Add Image</label>
    <input type="file" name="picture">
    <img style="max-width:200px" src="../../products/{$this->controller->product->product_id}-{$this->controller->product->picture}" />
    </p>
    <div class="container">
      <div class="row mt-4">
        <div class="col">
          <input type="submit" value="Save" class="form-control btn btn-lg btn-success btn-block">
        </div>
      </div>
      </div>
    </form>
    </div>
    </div>
    </div>
EOT;
    echo $text;
  }

}