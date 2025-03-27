<?php

require_once('services/products.php');

createTableProducts();

$errors = null;

if (array_key_exists('action', $_GET) && $_GET['action'] == 'remove' && array_key_exists('id', $_GET)) {
  $id = htmlspecialchars($_GET['id']);
  if (!removeProduct($id)) {
    $errors = 'Ошибка во время удаления';
  }

}
$products = getAllProducts();


require_once('templates/header.php');

?>



<div class="container">
  <a href="/create.php">Добавить товар</a>

  <?php
  if ($errors) {
    echo $errors;
  }
  ?>

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
          <td><?= $product['id']; ?></td>
          <td><a href="/create.php?action=edit&id=<?= $product['id'] ?>"><?= $product['name']; ?></a></td>
          <td><?= $product['category']; ?></td>
          <td><?= $product['article']; ?></td>
          <td><?= $product['price']; ?></td>
          <td><?= $product['discounted']; ?></td>
          <td><a href="?action=remove&id=<?= $product['id'] ?>">Удалить</a></td>
        </tr>
        <?php
      }
      ?>
    </tbody>
  </table>
</div>

<?php require_once('templates/footer.php') ?>