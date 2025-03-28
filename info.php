<?php
require_once('services/products.php');
createTableProducts();

$errors = null;
$product = null;
?>



<?php
require_once('templates/header.php');



$product = getProductByID($_GET['id']);

if ($product) {
    ?>

    Название товара: <?= $product['name'] ?>
    Категория: <?= $product['category'] ?>
    Артикул: <?= $product['article'] ?>
    Цена: <?= $product['price'] ?>
    Цена со скидкой: <?= $product['discounted'] ?>
    <a href="/">Назад</a>

    <?php
}

if ($errors) {
    echo $errors;
}
?>


<?php require_once('templates/footer.php') ?>