<?php
class Pages extends Controller
{

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
            print_r($_POST);
            $registerModel->setproductname(trim($_POST['productname']));
            $registerModel->setdescription(trim($_POST['description']));
            $registerModel->setprice(trim($_POST['price']));
            $registerModel->Add();
            redirect('pages/products');
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
