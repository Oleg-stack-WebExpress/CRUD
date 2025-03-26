<?php
session_start();
if (
    !isset($_SESSION["
authorized"])
) {
    header("Location:/");
    exit();
}
$login = $_SESSION["login"];
?>
<?php require_once('templates/header-siqurity.php') ?>
<h1>Добро пожаловать, <?php echo htmlspecialchars($login); ?>!</h1>
<a href="logout.php">
    <button class="btn btn-primary w-20 py-2" type="submit">Выйти</button></a>

<?php require_once('templates/footer-siqurity.php') ?>