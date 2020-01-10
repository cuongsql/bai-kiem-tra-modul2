<?php
class ProductManager
{
    public $productDB;

    public function __construct() {
        $dbname = "mysql:host=localhost;dbname=products;charset=utf8";
        $user = "root";
        $password = "password";
        $db = new DBConnect($dbname, $user, $password);
        $this->productDB = new productDB($db->connect());
    }

    public function index()
    {
        $product = $this->productDB->getIndex();
        include_once 'view/show.php';
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $name = $_POST["name"];
            $sectors = $_POST["sectors"];
            $price = $_POST["price"];
            $amount = $_POST["amount"];
            $created = date("d/m/y");
            $teaser = $_POST["teaser"];

        $product = new Product($name, $sectors, $price, $amount, $created, $teaser);
        $this->productDB->getAdd($product);
        header('Location: index.php');
    }
        include_once 'view/add.php';
    }
    
    public function edit()
    {
        $id = $_GET['id'];
        $value = $this->productDB->getValue($id);

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $name = $_POST["name"];
            $sectors = $_POST["sectors"];
            $price = $_POST["price"];
            $amount = $_POST["amount"];
            $created = $value->getCreated();
            $teaser = $_POST["teaser"];

        $product = new Product($name, $sectors, $price, $amount, $created, $teaser);
        $this->productDB->getEdit($product, $id);
        header('Location: index.php');
    }
        include_once 'view/edit.php';
    }

    public function delete()
    {
        $id = $_GET['id'];
        $this->productDB->getDelete($id);
        header('Location: index.php');
    }

    public function search()
    {
        $id = $_GET['keyword'];
        // $search = $this->productDB->getSearch($id);
        include_once 'view/search.php';
    }
}