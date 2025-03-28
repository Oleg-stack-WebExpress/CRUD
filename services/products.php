<?php



//Получить все продукты
function getAllProducts()
{
    $db = mysqli_connect('127.0.0.1', 'root', '', 'test');

    $sql = 'SELECT * FROM products';

    $result = mysqli_query($db, $sql);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);

}

function getProduct($id)
{
    $db = mysqli_connect('127.0.0.1', 'root', '', 'test');

    $sql = 'SELECT * FROM products WHERE id=' . $id;

    $result = mysqli_query($db, $sql);
    $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
    if (count($products)) {
        return $products[0];
    }
    return null;

}

function createTableProducts()
{
    $db = mysqli_connect('127.0.0.1', 'root', '', 'test');

    $sql = 'CREATE TABLE IF NOT EXISTS products (
	id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(500),
	category VARCHAR(500),
	article VARCHAR (6),
	price  DECIMAL(6,2),
    discounted DECIMAL(6,2)
)';

    return $db->query($sql);
}

function insertProduct($name, $category, $article, $price, $discounted)
{
    $db = mysqli_connect('127.0.0.1', 'root', '', 'test');

    $sql = 'INSERT INTO  products (name, category, article, price, discounted) VALUES 
    ("' . $name . '", "' . $category . '", "' . $article . '" ,"' . $price . '" ,"' . $discounted . '");';

    return $db->query($sql);
}

function removeProduct($id)
{
    $db = mysqli_connect('127.0.0.1', 'root', '', 'test');

    $sql = 'DELETE FROM products WHERE id=' . $id;

    return $db->query($sql);

}
function updateCountProduct($id, $price)
{

    $db = mysqli_connect('127.0.0.1', 'root', '', 'test');

    $sql = 'UPDATE products SET price=' . $price . ' WHERE id=' . $id;

    return $db->query($sql);

}

function getProductByID($id)
{
    $db = mysqli_connect('127.0.0.1', 'root', '', 'test');

    $sql = 'SELECT FROM products WHERE id=' . $id;
    

    return $db->query($sql);
}

?>