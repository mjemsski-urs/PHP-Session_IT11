<?php
session_start();

if (!isset($_SESSION['score'])) {
    $_SESSION['score'] = 0;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $answer = $_POST['answer'];
    if ($answer === 'PHP') {
        $_SESSION['score']++;
    }
    header("Location: result.php");
    exit();
}
?>
<form method="post">
    <p>What language is used for server-side scripting?</p>
    <input type="text" name="answer">
    <button type="submit">Submit</button>
</form>
