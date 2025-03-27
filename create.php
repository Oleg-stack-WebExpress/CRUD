<?php 
require_once('templates/header.php');
require_once('services/products.php');
?>

<?php
createTableProducts();
?>

<form action="/create.php" method="POST">
    <input name="name"/>
    <input name="category"/>
    <input name="article"/>
    <input name="price"/>
    <input name="discounted"/>
    <input type="submit" value="Создать"/>
</form>


<?php require_once('templates/footer.php') ?>