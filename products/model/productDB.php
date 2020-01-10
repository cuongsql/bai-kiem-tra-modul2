<?php
class productDB
{
    protected $conn;

    public function __construct($connect) {
        $this->conn = $connect;
    }

    public function getIndex()
    {
        $sql = "SELECT * FROM items";
        $stmt = $this->conn->query($sql);
        $result = $stmt->fetchAll();
        $arr = [];

        foreach ($result as $item){
            $product = new Product($item['name'], 
            $item['sectors'], 
            $item['price'], 
            $item['amount'], 
            $item['created'],
            $item['teaser']);
            array_push($arr, $product);

            $product->setId($item['id']);
        }
        return $arr;
    }

    public function getAdd($product)
    {
        $name = $product->getName();
        $sectors = $product->getSectors();
        $price = $product->getPrice();
        $amount = $product->getAmount();
        $created = $product->getCreated();
        $teaser = $product->getTeaser();
       
        $sql = "INSERT INTO `items` (`id`, `name`, `sectors`, `price`, `amount`, `created`, `teaser`) 
        VALUES (NULL, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$name, $sectors, $price, $amount, $created, $teaser]);
    }

    public function getDelete($id)
    {
        $sql = "DELETE FROM items WHERE id = $id";
        $stmt = $this->conn->query($sql);
        $stmt->fetchAll();
    }

    public function getEdit($product, $id)
    {
        $name = $product->getName();
        $sectors = $product->getSectors();
        $price = $product->getPrice();
        $amount = $product->getAmount();
        $created = $product->getCreated();
        $teaser = $product->getTeaser();

        $sql = "UPDATE `items` 
        SET `name` = ?, sectors = ?,`price` = ?, `amount` = ?, `created` = ?, `teaser` = ? 
        WHERE `items`.`id` = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$name, $sectors, $price, $amount, $created, $teaser, $id]);
    }

    public function getSearch($keyword)
    {
        $sql = "SELECT * FROM `items` WHERE name LIKE '%$keyword%'";
        $stmt = $this->conn->query($sql);
        $stmt->fetchAll();
    }


    public function getValue($id)
    {

        $sql = "SELECT * FROM items WHERE id = $id";
        $stmt = $this->conn->query($sql);
        $result = $stmt->fetchAll();
        $product = new Product($result[0]['name'], $result[0]['sectors'], $result[0]['price'], $result[0]['amount'], $result[0]['created'], $result[0]['teaser']);
        $product->setId($result[0]['id']);
        return $product;
    }
}