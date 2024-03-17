<?php
    require "../koneksi.php";
    $queryKategori = mysqli_query($con, "SELECT * FROM kategori");

    //get produk by name key
    if(isset($_GET['keyword'])){
        $queryProduk = mysqli_query($con, "SELECT * FROM produk WHERE nama LIKE '%$_GET[keyword]%'");
    }
    //get produk by kategori
    else if(isset($_GET['kategori'])){
        $queryGetKategoriId = mysqli_query($con, "SELECT id FROM kategori WHERE nama='$_GET[kategori]'");
        $kategoriId = mysqli_fetch_array($queryGetKategoriId);

        $queryProduk = mysqli_query($con, "SELECT * FROM produk WHERE kategori_id='$kategoriId[id]'");

    }
    //get produk default
    else{
        $queryProduk = mysqli_query($con, "SELECT * FROM produk ORDER BY id DESC" );
    }

    $countData = mysqli_num_rows($queryProduk);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isma Collection|Produk</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"href="fontawesome/css/fontawesome.min.css">
</head>
<style>
     .banner{
            height: 60vh;
            background: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)), url(./images/banner2.jpeg);
        }
        .bi-search{
            color: #FFFFFF; 
        }

    .list-group a{
        text-decoration: none;
    }
    
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

<!-- banner -->
<div class="container-fluid banner">
    <div class="container">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6 mt-10">
                        <div class="text-center my-5">
                            <h1 class="display-5 fw-bolder text-white mb-2">Produk</h1>
                            <p class="lead text-white-50 mb-4">Kami mengutamakan kenyamanan anda</p>

                            <form method="get" action="produkfn.php">
                            <div class="input-group mt-5">
                                <input type="text" class="form-control" placeholder="cari produk disini.."
                                 aria-label="Recipient's username" aria-describedby="basic-addon2" name="keyword">
                                <button type="submit" class="btn " type="button" style="background-color:  rgb(189, 147, 113);">
                                    <i class="bi bi-search"></i>
                                </button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- body -->

<div class="container py-5">
    <div class="row">
        <div class=" col-lg-3 mb-5 mt-3">
            <h3>Kategori</h3>
        <ul class="list-group">
            <?php while($kategori = mysqli_fetch_array($queryKategori)){?>
                <a class="no-decoration" href="produkfn.php?kategori=<?php echo urlencode($kategori['nama']) ?>">

                <li class="list-group-item"><?php echo $kategori['nama'];?></li>
                </a>
        
<?php  } ?>
        </ul>
        </div>
        <div class=" col-lg-9">
            <h3 class="text-center mb-3">produk</h3>
            <div class="row">
                <?php 
                    if($countData<1){
                        ?>
                        <h4 class="text-center my-5">Produk yang anda cari tidak tersedia</h4>
                        <?php
                    }
                ?>
                <?php while($produk = mysqli_fetch_array($queryProduk)){?>
                <div class="col-md-4 mb-4">
                <div class="card h-100" >
                        <div class="image-box">
                            <img src="./images/<?php echo $produk['foto'];?>" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $produk['nama'];?></h5>
                            <p class="card-text text-truncate"><?php echo $produk['detail'];?></p>
                            <p class="card-text text-harga text-warning"><?php echo $produk['harga'];?></p>
                            <a href="produk-detailfn.php?nama=<?php echo $produk['nama'];?>" class="btn text-white " style="background-color:#A6805D;">Detail</a>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>

    </div>
</div>
 <!-- Footer-->
 <footer class="py-5"  style="background-color:#A6805D;">
            <div class="container px-5"><p class="m-0 text-center text-white">Copyright &copy; Isma Collection 2023</p></div>
        </footer>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="fontawesome/js/all.min.js"></script>    
</body>
</html>

