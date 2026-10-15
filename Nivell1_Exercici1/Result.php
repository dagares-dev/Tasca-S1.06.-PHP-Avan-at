<?php
session_start();
$_SESSION['username'] = $_POST['username'] ?? '';
$_SESSION['email'] = $_POST['email'] ??'';
?>

<p>Usuari: <?= htmlspecialchars($_POST['username']) ?? '' ?></p>
<p>email: <?= htmlspecialchars($_POST['email']) ?? '' ?></p>