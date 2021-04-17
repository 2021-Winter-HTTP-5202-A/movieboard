<?php
session_start();

?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/style.css">
    <script src="scripts/script.js"></script>
</head>

<body>
    <?php require_once 'header.php'; ?>
    <main>
        <form action="" method="POST">
        <input type="submit" name="submit" value="Register">
        </form>
    </main>
    <?php require_once 'footer.php'; ?>
</body>

</html>