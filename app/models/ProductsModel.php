<?php
/*public $title = 'Products Page' ;
public $data = 'choose from the list';

private $host = "localhost";
private $user = "root";
private $password = "";
private $database = "miublog";
public $conn;

function __construct() {
$this->conn = $this->connectDB();
}

function connectDB() {
$conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
return $conn;
}*/
class ProductsModel extends model
{


    public function getAllProducts()
    {
        $this->dbh->query('select * from products');

        $prodRecord = $this->dbh->resultSet();

        return $prodRecord;
    }
    /*
        public $id;
        public $name;
        public $quantity;
        public $orderid;
        public $image;
        public $price;
        public $options;
        function __construct($id) {
            $db_handle = new DB();
            $sql="SELECT * FROM products WHERE id=".$id;
            $result = mysqli_query($db_handle->conn,$sql);
            if($row=mysqli_fetch_array($result)) {
                $this->name=$row[0];
                $this->id=$row[1];
                $this->quantity=$row[2];
                $this->orderid=$row[3];
                $this->price=$row[4];

                //$this->options=array();
            }
            /*$sql="SELECT options.Name,product_s_o_v.Value
            from options
            INNER JOIN product_type_s_o on options.ID=product_type_s_o.Options
            INNER Join product_s_o_v on product_type_s_o.ID=product_s_o_v.Product_Type_S_O
            where product_s_o_v.Product_ID=".$id;
            $result = mysqli_query($db_handle->conn,$sql);
            while($row=mysqli_fetch_array($result)) {
                $this->options[$row['Name']]=$row[1];//x['drug strength']=500mg
            }


         function getAllProducts()	{
            $products;$i=0;
            $db_handle = new DB();
            $sql="SELECT * from products";
            $result = mysqli_query($db_handle->conn,$sql);
            while($row=mysqli_fetch_array($result)) {
                $products[$i++]=new Product($row[0]);
            }
            return $products;
        }
    }


     */





    /*protected $productname;
    protected $productid;
    protected $quantity;
    protected $orderid;

    public function __construct()
    {
        parent::__construct();
        $this->productname = '';
        $this->productid    = '';
        $this->quantity = '';
        $this->orderid = '';
    }

    public function getName()
    {
        return $this->productname;
    }
    public function setName($productname)
    {
        $this->productname = $productname;
    }

    public function getProductID()
    {
        return $this->productid;
    }
    public function setProductID($productid)
    {
        $this->productid = $productid;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }
    public function setOrderID($orderid)
    {
        $this->orderid = $orderid;
    }

     public function getAllProducts()
    {
        $this->dbh->query('select * from products');

        $productRecord = $this->dbh->resultSet();
        return $productRecord;
    }*/

}
?>