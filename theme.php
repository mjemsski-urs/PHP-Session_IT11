<?php
session_start();

if (isset($_POST['theme'])) {
    $_SESSION['theme'] = $_POST['theme'];
}

$theme = $_SESSION['theme'] ?? 'light'; 
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-color: <?= $theme === 'dark' ? '#333' : '#fff' ?>;
            color: <?= $theme === 'dark' ? '#fff' : '#000' ?>;
        }
    </style>
</head>
<body>
    <h1>Welcome to the <?= ucfirst($theme) ?> Theme</h1>
    <form method="post">
        <button name="theme" value="light">Light Mode</button>
        <button name="theme" value="dark">Dark Mode</button>
    </form>
</body>
</html>
