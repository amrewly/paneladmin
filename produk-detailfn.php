<?php
    require "../koneksi.php";
    
    $nama = htmlspecialchars($_GET['nama']);
    $queryProduk = mysqli_query($con, "SELECT * FROM produk WHERE nama = '$nama'");
    $produk = mysqli_fetch_array($queryProduk);

    // Mendapatkan kategori produk
    $kategoriProduk = $produk['kategori_id'];

    // Mendapatkan post gambar produk lainnya dalam kategori yang sama
    $queryPostLainnya = mysqli_query($con, "SELECT * FROM produk WHERE kategori_id = '$kategoriProduk' AND nama != '$nama'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isma Collection|detail-produk</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/fontawesome.min.css">
</head>
<style>
    .card {
            width: 300px;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            margin: 10px;
        }

        .image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            margin-bottom: 10px;
        }

        .price {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .description {
            font-size: 16px;
            color: #555;
        }
        .image-box {
            height: 250px;
        }
        .image-box img {
            height: 100%;
            width: 100%;
            object-fit: cover;
            object-position: center;
        }
</style>
<body>
    <?php require "navbarfn.php";?>

    <!--detail produk  -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mt-3">
                    <img src="./images/<?php echo $produk['foto']; ?>" style="width:612px; height:408px;  image-size: cover; display : flex;"  alt="Gambar Produk">
                </div>
                <div class="col-md-6 offset-md-1">
                    <h2><?php echo $produk['nama']; ?></h2>
                    <p class="fs-5">
                        <?php echo nl2br($produk['detail']) ; ?>
                    </p>
                    <p class="text-warning">
                        Rp. <?php echo $produk['harga']; ?>
                    </p>
                    <p>
                        Ketersediaan: <strong>Tersedia</strong>
                    </p>
                    <p style=”text-align:justify;”>Pesan disini :<a href="https://api.whatsapp.com/send?text=Hello&phone=+6282285391626"><img src="./images/whatsapp.jpg" alt="" style="width: 50px; image-position: right; "/></p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <h3>Produk Terkait</h3>
        <div class="row">
            <?php
                while($postLainnya = mysqli_fetch_array($queryPostLainnya)){
            ?>
            <div class="col-md-3">
                <div class="card h-100">
                    <div class="image-box">
                        <a href="produkfn.php?nama=<?php echo $postLainnya['nama']; ?>">
                            <img src="./images/<?php echo $postLainnya['foto']; ?>" class="card-img-top"  alt="Gambar Produk Terkait">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $postLainnya['nama']; ?></h5>
                            <p class="card-text text-truncate"><?php echo $postLainnya['detail'] ; ?></p>
                            <p class="card-text text-warning">Rp. <?php echo $postLainnya['harga']; ?></p>
                            <a href="produk-detailfn.php?nama=<?php echo $postLainnya['nama']; ?>"class="btn text-white " style="background-color:#A6805D;">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="fontawesome/js/all.min.js"></script>    
</body>
</html>
