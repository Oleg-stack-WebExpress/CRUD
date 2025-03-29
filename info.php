<?php
require_once('services/products.php');
createTableProducts();

$errors = null;
$product = null;
?>



<?php
require_once('templates/header.php');



$product = getProductByID($_GET['id']); ?>

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Название</th>
                <th scope="col">Категория</th>
                <th scope="col">Артикул</th>
                <th scope="col">Цена</th>
                <th scope="col">Цена со скидкой</th>
            </tr>
        </thead>
        <tbody>

            <?php
            foreach ($product as $prod) {
                ?>
                <tr>
                    <td><?= $prod['id']; ?></td>
                    <td><?= $prod['name']; ?></td>
                    <td><?= $prod['category']; ?></td>
                    <td><?= $prod['article']; ?></td>
                    <td><?= $prod['price']; ?></td>
                    <td><?= $prod['discounted']; ?></td>
                    <td><a href="/">Назад</a></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>

<?php
if ($errors) {
    echo $errors;
}
?>


<?php require_once('templates/footer.php') ?>