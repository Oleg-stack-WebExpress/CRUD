<?php
require_once('services/products.php');
createTableProducts();

$errors = null;
$product = null;
if (array_key_exists('id', $_GET)) {
    $id = htmlspecialchars($_GET['id']);
    $product = getProduct($id);


    if (array_key_exists('price', $_POST)) {
        $price = htmlspecialchars($_POST['price']);
        if (updateCountProduct($id, $price)) {
            header('Location:/');
        } else {
            $errors = 'Ошибка обновления!';
        }

    }


} else {

    if (
        array_key_exists('name', $_POST) && array_key_exists('category', $_POST)
        && array_key_exists('article', $_POST) && array_key_exists('price', $_POST)
        || array_key_exists('discounted', $_POST)
    ) {

        $name = htmlspecialchars($_POST['name']);
        $category = htmlspecialchars($_POST['category']);
        $article = htmlspecialchars($_POST['article']);
        $price = htmlspecialchars($_POST['price']);
        $discounted = htmlspecialchars($_POST['discounted']);

    }

}
?>


<?php
require_once('templates/header.php');

if ($errors) {
    echo $errors;
}
?>

<form action="#" method="POST">
    <input name="name" value="<?= $product ? $product['name'] : '' ?>" placeholder="Название" />
    <input name="category" value="<?= $product ? $product['category'] : '' ?>" placeholder="Категория" />
    <input name="article" value="<?= $product ? $product['article'] : '' ?>" placeholder="Артикул" />
    <input name="price" value="<?= $product ? $product['price'] : '' ?>" placeholder="Цена" />
    <input name="discounted" value="<?= $product ? $product['discounted'] : '' ?>" placeholder="Цена со скидкой" />
    <input type="submit" value="Редактировать" />
</form>


<?php require_once('templates/footer.php') ?>