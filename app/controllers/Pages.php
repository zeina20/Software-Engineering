<?php
class Pages extends Controller
{

    public $productsQuantity;

    function __construct($model){
        $this->productsQuantity = $_SESSION['productsQuantity'] ?? array();
        parent::__construct($model);
    }

    public function index()
    {
        $viewPath = VIEWS_PATH . 'pages/Index.php';
        require_once $viewPath;
        $indexView = new Index($this->getModel(), $this);
        $indexView->output();
    }

    public function about()
    {
        $viewPath = VIEWS_PATH . 'pages/About.php';
        require_once $viewPath;
        $aboutView = new About($this->getModel(), $this);
        $aboutView->output();
    }
    public function contact(){
        $viewPath = VIEWS_PATH . 'pages/contact.php';
        require_once $viewPath;
        $contactView = new Contact($this->getModel(), $this);
        $contactView->output();
    }

   
     public function products()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->productsQuantity = json_decode($_POST['ProductsQty'],true);
            $this->addProductToCart($_POST['product_id'], $_POST['quantity']);

        }

        $viewPath = VIEWS_PATH . 'pages/products.php';
        require_once $viewPath;
        $productView = new Products($this->getModel(), $this);
        $productView->output();
    }


    function getProductById( $productID , $products) {
        foreach ($products as $product){
            if($product->product_id == $productID)
                return $product;
        }
    }

    function addProductToCart($productID,$q){
        $this->productsQuantity = $_SESSION['productsQuantity'] ?? array();

        if (array_key_exists((string)$productID,$this->productsQuantity))
            $this->productsQuantity[(string)$productID]+= $q;
        else
            $this->productsQuantity[(string)$productID]= $q;

        $_SESSION['productsQuantity'] = $this->productsQuantity;
    }

    function removeProductFromCart($productID){
        unset($this->productsQuantity[(string)$productID]);
    }

    function emptyCart(){
        unset($this->productsQuantity);
        $this->productsQuantity=array();
    }


    public function admin()
    {
        $viewPath = VIEWS_PATH . 'pages/admin.php';
        require_once $viewPath;
        $adminView = new Admin($this->getModel(), $this);
        $adminView->output();
    }

    public function Cart()
    {
        $registerModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $queryString = array();
            parse_str($_SERVER['QUERY_STRING'], $queryString);
            if($queryString['action'] == 'goto-checkout'){
                $this->total = $_POST['CartTotal'];
                $viewPath = VIEWS_PATH . 'pages/Cart.php';
                require_once $viewPath;
                $CartView = new Cart($this->getModel(), $this);
                $CartView->output();
            }
            else if($queryString['action'] == 'checkout') {
                $buyer = $this->loadModel('BuyerModel');
                $buyerId = $buyer->insert($_POST['name'], $_POST['email'], $_POST['number'], $_POST['address']);

                $productModel = $this->loadModel('ProductsModel');
                $products = $productModel->getAllProducts();
                $total = 0;
                foreach ($_SESSION['productsQuantity'] as $key => $value) {
                    $product = $this->getProductById($key, $products);
                    $total += $value * $product->price;
                }

                $order = $this->loadModel('OrderModel');
                $orderId = $order->insert($buyerId, $total);

                $orderProduct = $this->loadModel('OrderProductsModel');
                foreach ($_SESSION['productsQuantity'] as $key => $value) {
                    $orderProduct->insert($orderId, $key, $value);
                }

                echo 'Done your order ID is '.$orderId;
                session_destroy();
            }
            else {
                $this->addProductToCart($_POST['product_id'], $_POST['quantity']);
                $this->products();
            }
        }
        else {
            echo 'go add something first!';
        }
    }

    public function xx()
    {
        $viewPath = VIEWS_PATH . 'pages/xx.php';
        require_once $viewPath;
        $xxView = new xx($this->getModel(), $this);
        $xxView->output();
    }
    public function AddProducts()
    {
        $addProductsModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            
            $picture=$_FILES['picture']['name'];
            $picture_tmp=$_FILES['picture']['tmp_name'];

            move_uploaded_file($picture_tmp,"C:\xampp\htdocs\Software-Engineering\public\images".$picture);


            $addProductsModel->setProductName(trim($_POST['productname']));
            $addProductsModel->setProductID(trim($_POST['product_id']));
            $addProductsModel->setDescription(trim($_POST['description']));
            $addProductsModel->setQuantity(trim($_POST['quantity']));
            $addProductsModel->setPrice(trim($_POST['price']));
            $addProductsModel->setPicture($_FILES['picture']['name']);
            $addProductsModel->Add();
            redirect('pages/admin');

        }
        $viewPath = VIEWS_PATH . 'pages/AddProducts.php';
        require_once $viewPath;
        $AddProductsView = new AddProducts($this->getModel(), $this);
        $AddProductsView->output();
    }

    public function DeleteProducts($productid){
        $viewPath = VIEWS_PATH . 'pages/DeleteProducts.php';
        require_once $viewPath;
        $DeleteProductsView = new DeleteProducts($this->getModel(), $this);
        $DeleteProductsView->output();
    }

    public function EditProducts($productid){
        $viewPath = VIEWS_PATH . 'pages/EditProducts.php';
        require_once $viewPath;
        $EditProductsView = new EditProducts($this->getModel(), $this);
        $EditProductsView->output();
    }


}
