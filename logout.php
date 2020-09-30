<?php
session_start();
unset($_SESSION["username"]);
unset($_SESSION["valid"]);
unset($_SESSION['timeout']);

header('Refresh: 2; URL = login.php');
?>

<html lang = "en">

<head>
    <title><?php echo $name ?></title>
    <link href = "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel = "stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link href="style/logout.css" rel="stylesheet">

</head>
<body>

Logging out

</body>
</html>
