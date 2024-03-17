<?php
    session_start();
    require "../koneksi.php";
    $validUsername = 'admin';
    $validPassword = 'sukses';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href=" bootstrap/css/bootstrap.min.css">
</head>
<style>
    .main{
        height: 100vh;
    }
    .login-box{
        width: 500px;
        height: 300px;
        box-sizing: border-box;
        border-radius: 10px;
    }
</style>
<body>
    <div class="main d-flex flex-column justify-content-center align-items-center">
        <div class="login-box p-5 shadow">
            <form action="" method="post">
                <div>
                    <label for="username">username</label>
                    <input type="text" class="form-control" name="username"
                    id="username">
                </div>
                <div>
                    <label for="password">password</label>
                    <input type="password" class="form-control" name="password"
                    id="password">
                </div>
                <div>
                    <button class="btn btn-success form-control mt-4" type="submit"
                    name="loginbtn">Login</button>
                </div>
            </form>
        </div>

        <div class="mt-3" style="width: 500px">
            <?php
               if (isset($_POST['username']) && isset($_POST['password'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
            
                // Memeriksa kecocokan username dan password
                if ($username === $validUsername) {
                    if ($password === $validPassword) {
                        // Jika login berhasil, set session dan redirect ke halaman index
                        $_SESSION['username'] = $username;
                        header("Location: index.php");
                        exit();
                    } else {
                        ?>
                        <div class="alert alert-warning" role="alert">
                               password yang anda masukkan salah
                    </div>
                    <?php
                    }
                } else {
                    ?>
                    <div class="alert alert-warning" role="alert">
                               username yang anda masukkan salah
                    </div>
                    <?php                    
                }
            }               
            ?>
        </div>
    </div>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="fontawesome/js/all.min.js"></script>
</body>
</html>