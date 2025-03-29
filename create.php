<?php
require_once('services/products.php');
createTableProducts();

$errors = null;
$product = null;

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


    if (insertProduct($name, $category, $article, $price, $discounted)) {
        header('Location:/');
    } else {
        $errors = 'Ошибка добавления!';
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
    <input name="name" placeholder="Название" />
    <input name="category" placeholder="Категория" />
    <input name="article" placeholder="Артикул" />
    <input name="price" placeholder="Цена" />
    <input name="discounted" placeholder="Цена со скидкой" />
    <input type="submit" value="Создать">
</form>


<?php require_once('templates/footer.php') ?>