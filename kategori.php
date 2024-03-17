<?php
    require "../koneksi.php";

    $queryKategori = mysqli_query($con, "SELECT * FROM kategori");
    $jumlahKategori = mysqli_num_rows($queryKategori);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Kategori</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"href="fontawesome/css/fontawesome.min.css">
</head>
<body>
<?php require "navbar.php";?>
    <div class="container">
    <h1>Tambah Kategori</h1>
 
        <form action="" method="post">
                <div>
                    <label for="kategori">Nama Kategori</label>
                    <input type="text" id="kategori" name="kategori" required class="form-control" autocomplete="off" style="width : 50%" >
                </div>
                <div class="mt-3">
                <button class="btn btn-primary" type="submit" name="simpan_kategori">Simpan</button>
            </div>
            </form>

        <?php
            if(isset($_POST['simpan_kategori'])){
                $kategori =htmlspecialchars($_POST['kategori']);

                $queryExist = mysqli_query($con, "SELECT nama FROM kategori WHERE nama='$kategori'");
                $jumlahDataKategoriBaru = mysqli_num_rows($queryExist);

                if($jumlahDataKategoriBaru > 0){
                    ?>
                    <div class="alert alert-warning mt-3" role="alert" style="width : 50%">
                        Kategori sudah ada</div>
                        
                    <?php
                }
                else{
                    $querySimpan = mysqli_query($con, "INSERT INTO kategori (nama) VALUES
                    ('$kategori')");

                    if($querySimpan){
                        ?>
                        <div class="alert alert-primary mt-3" role="alert" style="width : 50%">
                        Kategori berhasil disimpan</div>
                        <meta http-equiv="refresh" content="1; url=kategori.php"/>
                        <?php
                    }
                    else{
                        echo mysqli_error($con);
                    }

                }
            }
        ?>
    <div class="mt-3">
        <h2>List Kategori</h2>
        <div class="table-responsive mt-4">
            <table class = "table">
                <thead>
                    <tr>
                        <th>NO.</th>
                        <th>Nama.</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $number =1;
                        while($data=mysqli_fetch_array($queryKategori)){
                            if($jumlahKategori==0){
                    ?>
                            <tr>
                                <td>Tidak ada kategori</td>
                            </tr>
                    <?php
                            }
                            else{
                    ?>
                            <tr>
                                <td><?php echo $number; ?></td>
                                <td><?php echo $data['nama']; ?></td>
                                <td>
                                    <a href="kategori-detail.php?p=<?php echo $data['id']; ?>"
                                    class="btn btn-info"><i class="fas fa-search"></i></a>
                                </td>
                            </tr>
                    <?php           
                            }
                            $number++;
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
        
    </div>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="fontawesome/js/all.min.js"></script>
</body>
</html>