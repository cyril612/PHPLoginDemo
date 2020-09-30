<?php
ob_start();
session_start();
?>

<?
// error_reporting(E_ALL);
// ini_set("display_errors", 1);
?>

<html lang = "en">

<head>
    <title>Login Demo</title>
    <link href = "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel = "stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link href="style/login.css" rel="stylesheet">

</head>

<body>

<h2>Enter Username and Password</h2>
<div class = "container form-signin">

    <?php
    $msg = '';
    if (isset($_SESSION['valid'])) if($_SESSION['valid'] == true) header('Location: home.php');

    if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])) {

        if ($_POST['username'] == 'user1' && $_POST['password'] == '12345') {
            $_SESSION['valid'] = true;
            $_SESSION['timeout'] = time();
            $_SESSION['username'] = $_POST['username'];

            header('Location: home.php');
        }else {
            $msg = 'Wrong username or password';
        }
    }
    ?>
</div> <!-- /container -->

<div class = "container">

    <form class = "form-signin" role = "form" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method = "post">
        <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
        <input type = "text" class = "form-control"
               name = "username" placeholder = "username = user1"
               required autofocus></br>
        <input type = "password" class = "form-control"
               name = "password" placeholder = "password = 12345" required>
        <button class = "btn btn-lg btn-primary btn-block" type = "submit"
                name = "login">Login</button>
    </form>
</div>

</body>
</html>