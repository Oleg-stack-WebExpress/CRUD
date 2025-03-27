<?php



//Получить все продукты
function getAllProducts()
{
    $db = mysqli_connect('127.0.0.1', 'root', '', 'test');

    $sql = 'SELECT * FROM products';

    $result = mysqli_query($db, $sql);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);

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

function insertProduct()
{

}

function removeProduct()
{

}
function updateCountProduct()
{

}

?>