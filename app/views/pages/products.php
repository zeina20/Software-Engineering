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


        <style>
            html {
                background: #bbc3c6;
                font: 62.5%/1.5em "Trebuchet Ms", helvetica;
            }

            * {
                box-sizing: border-box;
                -webkit-font-smoothing: antialiased;
                font-smoothing: antialiased;
            }

            @font-face {
                font-family: 'Shopper';
                src: url('http://www.shopperfont.com/font/Shopper-Std.ttf');
            }

            .shopper {
                text-transform: lowercase;
                font: 2em 'Shopper', sans-serif;
                line-height: 0.5em;
                display: inline-block;
                text-align: center;
            }


            h1 {
                text-transform: uppercase;
                font-weight: bold;
                font-size: 2em;
            }

            p {
                font-size: 1em;
                color: #8a8a8a;
            }

            input {
                border: 0.3em solid #bbc3c6;
                padding: 0.5em 0.3em;
                font-size: 1.4em;
                color: #8a8a8a;
                text-align: center;
            }

            img {
                max-width: 100%;
                overflow: hidden;
                margin-right: 1em;
            }

            a {
                text-decoration: none;
            }

            .container {
                width: 95%;
                margin: 10px auto;
                overflow: hidden;
                position: relative;

                border-radius: 0.6em;
                background: #ecf0f1;
                box-shadow: 0 0.5em 0 rgba(138, 148, 152, 0.2);
            }

            .heading {
                padding: 1em;
                position: relative;
                z-index: 1;
                color: #000000;
                background: #b0edab;
                text-align: center
            }

            .cart {
                margin: 1em;
                overflow: hidden;
            }

            .cart.is-closed {
                height: 0;
                margin-top: -2.5em;
            }

            .table {
                background: #ffffff;
                border-radius: 0.6em;
                overflow: hidden;
                clear: both;
                margin-bottom: 1.8em;
            }


            .layout-inline > * {
                display: inline-block;
            }

            .align-center {
                text-align: center;
            }

            .th {
                background: #b0edab;
                color: #fff;
                text-transform: uppercase;
                font-weight: bold;
                font-size: 1.5em;
            }

            .tf {
                background: #b0edab;
                text-transform: uppercase;
                text-align: right;
                font-size: 1.2em;
            }

            .tf p {
                color: #fff;
                font-weight: bold;
            }

            .col {
                padding: 0.5em;
                width: 12%;
            }

            .col-pro {
                width: 44%;
                font-size: 1.2em;
                font-weight: 700;
            }

            .col-pro > * {
                vertical-align: middle;
            }

            .col-qty {
                text-align: center;
                width: 17%;
            }

            .col-numeric p {
                font: bold 1.2em helvetica;
            }

            .col-total p {
                color: #12c8b1;
            }

            .tf .col {
                width: 20%;
            }

            .row > div {
                vertical-align: middle;
            }

            .row-bg2 {
                background: #f7f7f7;
            }

            .visibility-cart {
                position: absolute;
                color: #fff;
                top: 0.5em;
                right: 0.5em;
                font: bold 2em arial;
                border: 0.16em solid #fff;
                border-radius: 2.5em;
                padding: 0 0.22em 0 0.25em;
            }

            .col-qty > * {
                vertical-align: middle;
            }

            .col-qty > input {
                max-width: 2.6em;
            }


            a.qty {
                width: 1em;
                line-height: 1em;
                border-radius: 2em;
                font-size: 2.5em;
                font-weight: bold;
                text-align: center;
                background: #43ace3;
                color: #fff;
            }

            a.qty:hover {
                background: #3b9ac6;
            }

            .btn {
                padding: 5px 10px;
                border-radius: 0.3em;
                font-size: 1.4em;
                font-weight: bold;
                background: #000000;
                color: #fff;
                /* box-shadow: 0 3px 0 rgba(59,154,198, 1) */
            }

            .btn:hover {
                box-shadow: 0 3px 0 rgba(59, 154, 198, 0)
            }

            .btn-update {
                float: right;
                margin: 0 0 1.5em 0;
            }

            .transition {
                transition: all 0.3s ease-in-out;
            }

            @media screen and ( max-width: 755px) {
                .container {
                    width: 98%;
                }

                .col-pro {
                    width: 35%;
                }

                .col-qty {
                    width: 22%;
                }

                img {
                    max-width: 100%;
                    margin-bottom: 1em;
                }
            }

            @media screen and ( max-width: 591px) {

            }
        </style>


        <div class="container">
        <div class="heading">
            <h1>
                <span class="shopper"></span> Shopping Cart
            </h1>


        </div>

        <div class="cart transition is-open">

        <!-- <a href="#" class="btn btn-update">Update cart</a> -->


        <div class="table">

            <div class="layout-inline row th">
                <div class="col col-pro">Product</div>
                <div class="col col-qty align-center">QTY</div>
                <div class="col col-price align-center "> Price</div>
                <div class="col col-price align-center "> Action</div>
                <?php
                $products = $this->model->getAllProducts();
                $productsList = $products;
                //search for a product
                if(ISSET($_GET['find'])){
                  $productsList = $this->model->searchForProduct($_GET['find']);
                }
                $total = 0;
                foreach ($this->controller->productsQuantity as $key => $value){
                  $product = $this->controller->getProductById($key, $products);
                  $total += $value * $product->price;
                ?>
            </div>

            <div class="layout-inline row">

                <div class="col col-pro layout-inline">

                    <p class="mb-0"><?php echo $product->productname; ?></p>
                </div>

                <div class="col col-qty col-numeric layout-inline">
                    <p><?php echo $value; ?></p>
                </div>

                <div class="col col-price col-numeric align-center ">
                    <p><?php echo $product->price; ?></p>
                </div>

                <div class="col col-price col-numeric align-center ">

                    <form method="post" action="Products?action=removeFromCart">
                        <input type="hidden" name="product_id" value="<?php echo $product->product_id; ?>" />
                        <button type="submit" class="btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                            </svg>
                        </button>
                    </form>

                </div>

                <?php
                }
                ?>
                <div class="layout-inline row row-bg2">
                </div>
                <div class="layout-inline row">
                </div>

                <div class="tf">

                    <div class="row layout-inline">
                        <div class="col">
                            <p>Total <?php echo $total; ?></p>

                        </div>
                        <div class="col">
                            <form method="post" action="http://localhost/Software-Engineering/public/pages/cart?action=goto-checkout">
                                <input type="hidden" name="CartTotal" value="<?php echo $total; ?>" />
                                <button class="btn btn-update mb-0">Checkout</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


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
                font-size: 12px;
            }

            .cards form {
                height: 100%;
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

            .f-16 {
                font-size: 16px;
            }

            body {
                font-size: 16px !important;
            }

            .nav-brand {
                font-size: 20px
            }
        </style>


        <h2 style="text-align:center">Products</h2>
        <div id="product-grid" style="display: flex;flex-wrap: wrap;">

            <?php
            foreach ($productsList as $product) {

          
                ?>

                <div class="product-item cards" width="200px">
                    <form method="post" action="Products">
                        <div class="mt-2 f-16"><strong><?php echo $product->productname; ?></strong></div>
                        <div class="product-image"><img
                                    src="../products/<?php echo $product->product_id."-".$product->picture; ?>"></div>
                        <div class="product-price"><?php echo $product->description; ?></div>
                        <div class="product-price">Qty: <?php echo $product->quantity; ?> Price:
                            $<?php echo $product->price; ?></div>
                        <div>
                            <input type="hidden" name="product_id" value="<?php echo $product->product_id ?>"/>
                            <input type="hidden" name="ProductsQty"
                                   value='<?php echo json_encode($this->controller->productsQuantity); ?>'/>
                            <input type="number" name="quantity" value="1" size="2"/>
                            <input type="submit" value="Add to cart" class="btnAddAction"/>
                        </div>
                    </form>
                </div>


                <?php
                
            }
                  
            ?>
        </div>
        <?php
        require APPROOT . '/views/inc/footer.php';
    }
}

?>