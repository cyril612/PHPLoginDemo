<?php
session_start();

if(!isset($_SESSION['valid'])) header('Location: logout.php');
if($_SESSION['valid'] == false) header('Location: logout.php');

$name = $_SESSION['username'];
?>

<html lang = "en">

<head>
    <title><?php echo $name ?></title>
    <link href = "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel = "stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link href="style/home.css" rel="stylesheet">

</head>
<body>

    Logged in as: <?php print_r($name); ?> <br>
    <a href = "logout.php" title = "Logout">Logout</a>

</body>
</html>