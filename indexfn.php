<?php
    require "../koneksi.php";
    $queryProduk = mysqli_query($con, "SELECT id, nama, harga, foto, detail FROM produk LIMIT 6");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isma Collection|Home</title>
    <link rel="stylesheet"href="fontawesome/css/fontawesome.min.css">

    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="cssnv/styles.css" rel="stylesheet" />
</head>
<style>
        .banner{
            height: 80vh;
            background: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)), url(./images/banner.jpeg);
        }
        .bi-search{
            color: #FFFFFF; 
        }

        .highlighted-kategori {
            border:solid;
            height: 250px;
        }

        .kategori-baju-pria {
            background: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)), url(./images/pria.png);
            background-size: cover;
            background-position: center;

        }
        .kategori-baju-sweeter {
            background: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)), url(./images/sweeter.jpg);
            background-size: cover;
            background-position: center;

        }
        .kategori-baju-wanita {
            background: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)), url(./images/wanita.jpg);
            background-size: cover;
            background-position: center;

        }
        .no-decoration{
            text-decoration: none;
            color: #4A2D0E;

        }
        .no-decoration:hover{
            color:#D3AA86;
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
                            <h1 class="display-5 fw-bolder text-white mb-2">Present your comfortable fashion</h1>
                            <p class="lead text-white-50 mb-4">Kami mengutamakan kenyamanan anda</p>

                            <form method="get" action="produkfn.php">
                            <div class="input-group mt-5">
                                <input type="text" class="form-control" placeholder="cari disini.."
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
        <!-- kategori -->
         <!-- Features section-->
         <section class="py-5 border-bottom" id="features">
            <div class="container px-5 my-5 text-center">
                <h3>Kategori</h3>
                <div class="row mt-5">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="highlighted-kategori kategori-baju-pria mb-3 rounded-3"></div>
                        <h2 class="h4 fw-bolder">Baju Pria</h2>
                        <p class="text-truncate">Pakaian pria mencakup berbagai jenis dan gaya yang dirancang khusus untuk kebutuhan dan preferensi mereka. Kategori baju pria meliputi pakaian sehari-hari, formal, olahraga, dan kasual. Pakaian sehari-hari meliputi kaos, kemeja, celana pendek, dan celana panjang yang nyaman dan fungsional. Baju formal termasuk setelan jas, kemeja berkerah, dan dasi yang dirancang untuk acara-acara resmi atau profesional. Pakaian olahraga mencakup kaos atletik, celana pendek olahraga, dan jaket olahraga yang cocok untuk kegiatan fisik. Baju kasual seperti kemeja polo, sweater, jaket denim, dan celana jeans 
                            menjadi pilihan populer untuk tampilan santai. Pilihan warna dan gaya dalam kategori baju pria bervariasi dari yang klasik dan netral hingga yang penuh warna dan trendi, memungkinkan pria mengekspresikan kepribadian dan gaya mereka melalui pilihan pakaian mereka.</p>
                        <a class="no-decoration" href="produkfn.php">
                            Detail Kategori
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class=" rounded-3 mb-3 highlighted-kategori kategori-baju-sweeter"></div>
                        <h2 class="h4 fw-bolder">Sweeter</h2>
                        <p class="text-truncate">Sweater/baju dingin adalah pakaian yang dirancang khusus untuk memberikan kenyamanan dan perlindungan ekstra saat suhu turun.
                             Kategori ini mencakup berbagai pilihan pakaian seperti sweater, kardigan, jaket, dan mantel yang dirancang untuk
                              menghangatkan tubuh. Sweater umumnya terbuat dari bahan seperti wol, rajutan, atau kain yang lembut dan nyaman. 
                              Kardigan adalah jenis sweater yang terbuka di bagian depan dan seringkali dilengkapi dengan kancing atau resleting.
                               Jaket dingin, seperti jaket kulit, jaket bulu, atau jaket parka, dirancang dengan lapisan insulasi tambahan untuk 
                               melindungi dari suhu yang lebih rendah. Mantel, seperti mantel wol atau mantel gabardine, memberikan perlindungan yang lebih luas untuk tubuh. 
                               Sweater/baju dingin sering hadir dalam berbagai gaya, warna, dan pola yang dapat disesuaikan dengan preferensi pribadi dan situasi cuaca. </p>                     
                                <a class="no-decoration" href="produkfn.php">
                        Detail Kategori
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <div class="rounded-3 mb-3 highlighted-kategori kategori-baju-wanita "></div>
                        <h2 class="h4 fw-bolder">Baju Wanita</h2>
                        <p class="text-truncate">Kategori baju wanita mencakup berbagai pilihan pakaian yang dirancang 
                            untuk memenuhi kebutuhan gaya hidup dan preferensi wanita. Pakaian sehari-hari termasuk atasan, blus,
                             celana, rok, dan gaun yang nyaman dan cocok untuk berbagai aktivitas. Wanita juga memiliki banyak pilihan untuk pakaian formal seperti gaun pesta, gaun malam, setelan blazer, dan kemeja 
                            berkerah yang diperlukan untuk acara-acara resmi. Sweater/baju dingin seperti sweater, kardigan, ja
                            ket kulit, dan jaket bulu memberikan pilihan yang hangat dan stylish di musim dingin. </p>
                        <a class="no-decoration" href="produkfn.php">
                        Detail Kategori
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- tentang kami -->
        <div class="container-fluid py-5" style="background-color: #D3AA86;">
            <div class="container text-center">
                <h3>Tentang Isma Collection</h3>
                <p class="mt=3" >

Kami adalah toko fashion online yang berkomitmen untuk memberikan pengalaman berbelanja yang menarik dan memuaskan bagi pelanggan kami.<br> Kami menyediakan berbagai macam pilihan baju pria, baju wanita, sepatu, dan jam tangan yang trendy dan berkualitas.

Dengan koleksi pakaian pria yang lengkap, kami menawarkan beragam gaya mulai dari pakaian sehari-hari yang nyaman hingga pilihan formal yang elegan.<br> Untuk baju wanita, kami menghadirkan berbagai pilihan fashion yang sesuai dengan tren terkini, mulai dari gaun cantik hingga pakaian kasual yang stylish. Koleksi sepatu kami mencakup berbagai gaya dan merek terkemuka, memastikan bahwa pelanggan kami dapat menemukan sepatu yang sesuai dengan gaya dan kebutuhan mereka. Kami juga menawarkan berbagai jam tangan yang stylish dan fungsional, dari merek-merek terpercaya.

Kami memahami bahwa setiap pelanggan memiliki preferensi dan gaya unik.<br> Oleh karena itu, kami selalu berusaha untuk menyajikan pilihan-pilihan yang menarik, dengan beragam warna, potongan, dan pola yang mengikuti tren terbaru. Kami juga memberikan informasi yang detail dan akurat mengenai produk kami, termasuk ukuran, bahan, dan petunjuk perawatan, untuk membantu pelanggan membuat keputusan yang tepat.

Selain itu, kami menawarkan layanan pelanggan yang ramah dan responsif.<br> Tim kami siap membantu pelanggan dalam menemukan produk yang diinginkan, memberikan saran gaya, atau menjawab pertanyaan seputar proses pembelian. Kami juga memberikan kebijakan pengembalian yang fleksibel dan aman, agar pelanggan merasa yakin dan puas dengan pembelian mereka.

Kami bertekad untuk menjadi tujuan utama pelanggan dalam mencari fashion yang menarik dan berkualitas. <br>Dengan perpaduan antara kenyamanan berbelanja online, pilihan produk yang beragam, dan layanan pelanggan yang unggul, kami berharap dapat membangun hubungan jangka panjang dengan pelanggan kami dan membuat pengalaman berbelanja mereka menyenangkan dan memuaskan.</p>
<a href="aboutfn.php" class="btn mt-5 text-white" style="background-color:#472619;">See More</a>           
</div>
        </div>
       <!-- produk -->
<div class="container-fluid py-5">
    <div class="container text-center">
        <h3>Produk</h3>

        <div class="row mt-5">
            <?php
                while($data = mysqli_fetch_array($queryProduk)){ 
            ?>
            <div class="col-sm-6 col-md-4 mb-3">
                <div class="card h-100">
                    <div class="image-box">
                    <img src="./images/<?php echo $data['foto']; ?>" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $data['nama']; ?></h5>
                        <p class="card-text text-truncate"><?php echo $data['detail']; ?></p>
                        <p class="card-text text-harga text-warning"><?php echo $data['harga']; ?></p>
                        <a href="produk-detailfn.php?nama=<?php echo $data ['nama']?> " class="btn text-white " style="background-color:#A6805D;">Detail</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        
    </div>
</div>

    </div>

   
        <!-- ke halaman produk -->
        <!-- Footer-->
        <footer class="py-5"  style="background-color:#A6805D;">
            <div class="container px-5"><p class="m-0 text-center text-white">Copyright &copy; Isma Collection 2023</p></div>
        </footer>





    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="jsnv/scripts.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    <script src="fontawesome/js/all.min.js"></script>   
</body>
</html>