<?php
session_start();

$username = $_POST['username'] ?? '';
$email = $_POST['email'] ?? '';

$_SESSION['username'] = $username;
$_SESSION['email'] = $email;
?>

<p>Nom d'usuari: <?= htmlspecialchars($username) ?></p>
<p>Correu electrònic: <?= htmlspecialchars($email) ?></p>