<?php
require_once APPROOT . '/controllers/Pages.php';

class Products extends view
{

    public function output()
    {

        require APPROOT . '/views/inc/header.php';
        ?>

        <div class="jumbotron jumbotron-fluid">
            <div class="container">

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
                    max-height: 550px;
                    height: 550px;
                    margin-bottom: 1.5rem;

                }

                .cards form {
                    height:100%;
                    display: flex;
                    flex-direction: column;
                    justify-content: space-between;
                }

                .price {
                    color: grey;
                    font-size: 22px;
                }

                .cards button, .cards input[type=submit] {
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

                .cards input[type=number] {
                    width: 30%;
                    margin-bottom: 3px;
                }
                .cards button:hover {
                    opacity: 0.7;

                }

                .product-image img {
                    max-height: 200px;
                    height: 200px;
                }
            </style>
        </head>
    <body>

    <h2 style="text-align:center">Products</h2>


    <?php
    $products=$this->model->getAllProducts();

    ?>
    <div id="product-grid" style="display: flex;flex-wrap: wrap;">

        <?php
        foreach ($products as $product){?>

            <div class="product-item cards" width="200px">
                <form method="post" action="Cart">
                <div><strong><?php echo $product->productname; ?></strong></div>
                <div class="product-image"><img src="data:image/jpeg;base64,<?php echo base64_encode($product->picture); ?>" ></div>
                <div class="product-price"><?php echo $product->description; ?></div>
                <div class="product-price">Qty: <?php echo $product->quantity; ?> Price: $<?php echo $product->price; ?></div>
                <div>
                    <input type="hidden" name="productid" value="<?php echo $product->productid ?>" />
                    <input type="number" name="quantity" value="1" size="2" />
                    <input type="submit" value="Add to cart" class="btnAddAction" />
                </div>
                </form>
            </div>


            <?php
        } ?>
    </div>
        <?php
        require APPROOT . '/views/inc/footer.php';
    }
}
?>