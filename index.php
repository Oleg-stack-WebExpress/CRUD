<?php 
require_once('templates/header.php');
require_once('services/products.php');
?>

<?php

createTableProducts();
$products = getAllProducts();


?>

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
        <th scope="col">Действие</th>
      </tr>
    </thead>
    <tbody>

      <?php
      foreach ($products as $product) {
        ?>
        <tr>
          <th scope="row">1</th>
          <td><?= $product['name'] ?></td>
          <td><?= $product['category'] ?></td>
          <td><?= $product['article'] ?></td>
          <td><?= $product['price'] ?></td>
          <td><?= $product['discounted'] ?></td>
          <td><a>Удалить</a></td>
        </tr>
        <?php
      }
      ?>
    </tbody>
  </table>
</div>

<a href="utils/product.php">Страница создания не работает</a>

<?php require_once('templates/footer.php') ?>