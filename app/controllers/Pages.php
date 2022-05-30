<?php
class Pages extends Controller
{

    public $productsQuantity;

    function __construct($model){
        $this->productsQuantity=array();
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


        /*$this->db = new Database;
        $sql = "SELECT * FROM products";
        $this->db->query($sql);*/

        // Bind value
        //$this->db->bind(':ime', $ime);
//        $this->db->bind(':razred', $razred);
//        $this->db->bind(':odelenje', $odelenje);

        /*$results = $this->db->resultSet();
        return $results;*/

        /*$DB= Database::newInstance();
        $ROWS=$DB->read("select * from products");
        $data['ROWS']=$ROWS;
        $this->view("Products",$data);*/
    }

    function getProductById( $productID , $products) {
        foreach ($products as $product){
            if($product->product_id == $productID)
                return $product;
        }
    }

    function addProductToCart($productID,$q){
        if (array_key_exists((string)$productID,$this->productsQuantity))
            $this->productsQuantity[(string)$productID]+= $q;
        else
            $this->productsQuantity[(string)$productID]= $q;
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
            $this->addProductToCart($_POST['product_id'], $_POST['quantity']);
            $this->products();
        }
        else {
            $viewPath = VIEWS_PATH . 'pages/Cart.php';
            require_once $viewPath;
            $CartView = new Cart($this->getModel(), $this);
            $CartView->output();
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
        $registerModel = $this->getModel();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $registerModel->setproductname(trim($_POST['productname']));
            $registerModel->setdescription(trim($_POST['description']));
            $registerModel->setprice(trim($_POST['price']));
            $registerModel->Add();
            redirect('pages/admin');

        }
        $viewPath = VIEWS_PATH . 'pages/AddProducts.php';
        require_once $viewPath;
        $AddProductsView = new AddProducts($this->getModel(), $this);
        $AddProductsView->output();
    }



}
