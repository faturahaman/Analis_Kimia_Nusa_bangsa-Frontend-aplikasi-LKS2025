
<?php  
require 'db.php';
use Symfony\Component\VarDumper\VarDumper;

if(isset($_POST['btn-login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    header('location: home.html');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="center flex justify-center mt-[20vh]">
    <form action="" method="post" class="bg-orange-200 w-[400px] p-12 rounded-lg outline-2 outline-offset-2 m-12" >
        <div class="text-center m-2" m-2>
            <div class="flex justify-center item-center justify-items-center">
            <h1 class="text-3xl font-bold">Login</h1>
        </div>
            <input type="text" id="txtnama" class="bg-orange-900 rounded-lg outline-1 outline-offset-2 text-orange-200 m-2 px-2 py-1 w-full" placeholder="Nama" name="username">
            <input type="text" id="txtnama" class="bg-orange-900 rounded-lg outline-1 outline-offset-2 m-2 text-orange-200 px-2 py-1 w-full" type="password" placeholder="Password" name="password">
            <button class="bg-orange-100 px-3 outline-1 outline-offset-2 rounded w-fit" type="submit" name="btn-login">Login</button>
        </div>
        <a href="register.php">
            <p>Register</p>
        </a>
    </form>
</body>
</html>