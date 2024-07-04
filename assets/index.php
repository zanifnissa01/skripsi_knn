<?php 
if (isset($_GET['aksi'])) {
    if ($_GET['aksi']=='login') {
        session_start();
        include'assets/conn/config.php';
    
        $username = $_POST['username'];
        $password = $_POST['password'];
        $data = mysqli_query($conn,"SELECT * FROM tbl_akun WHERE username= '$username' AND password='$password'");
        $row = mysqli_num_rows($data);

        if ($row > 0){
            $_SESSION['username'] = $username;
            header("location:admin/index.php");
        }else{
            header("location:index.php?pesan=gagal");
        }
    }
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA MINING METODE KNN</title>
    <!-- CDN CSS bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- CDN ICON bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="card col-md-7">
            <div class="card-body">
                <form action="index.php?aksi=login" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="form-label">Username</label>
                        <input class="form-control" type="text" placeholder="Username" aria-label="default input example" name="username">
                    </div>

                    <div class="form-group mt-3">
                        <label class="form-label">Password</label>
                        <input class="form-control" type="password" placeholder="Password" aria-label="default input example" name="password">
                    </div>
                    <hr>
                    <div class="d-grid gap-2">
                        <input type="submit" value="LOGIN" class="btn btn-primary btn-lg">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- </div> -->
    <!-- CDN CSS bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>