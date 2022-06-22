<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran</title>
</head>

<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php
    // Secret Key ini kita ambil dari halaman Google reCaptcha
    $secret_key = "6LdVP44dAAAAAP5Fsbw4eWhW_RXtMmSmGNouQgNz";
    // Disini kita akan melakukan komunkasi dengan google recpatcha
    // dengan mengirimkan scret key dan hasil dari response recaptcha nya
    $verify = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret_key . '&response=' . $_POST['g-recaptcha-response']);
    $response = json_decode($verify);
    if ($response->success) { // Jika proses validasi captcha berhasil
        include("koneksi.php");

        $table = "pendaftaran";
        $nama_wp = $_POST["nama_wp"];
        $nama_op = $_POST["nama_op"];
        $alamat = $_POST["alamat"];
        $no_telp = $_POST["no_telp"];
        $ktp = $_FILES["ktp"]["name"];
        $sptpd = $_FILES["sptpd"]["name"];
        $spopd = $_FILES["spopd"]["name"];
        $foto_op = $_FILES["foto_op"]["name"];

        $target_ktp = "administrator/modules/pendaftaran/uploads/ktp/";
        $target_file_ktp = $target_ktp . basename($_FILES["ktp"]["name"]);
        $imageFileType_ktp = strtolower(pathinfo($target_file_ktp, PATHINFO_EXTENSION));

        $target_sptpd = "administrator/modules/pendaftaran/uploads/sptpd/";
        $target_file_sptpd = $target_sptpd . basename($_FILES["sptpd"]["name"]);
        $imageFileType_sptpd = strtolower(pathinfo($target_file_sptpd, PATHINFO_EXTENSION));

        $target_spopd = "administrator/modules/pendaftaran/uploads/spopd/";
        $target_file_spopd = $target_spopd . basename($_FILES["spopd"]["name"]);
        $imageFileType_spopd = strtolower(pathinfo($target_file_spopd, PATHINFO_EXTENSION));

        $target_foto_op = "administrator/modules/pendaftaran/uploads/foto_op/";
        $target_file_foto_op = $target_foto_op . basename($_FILES["foto_op"]["name"]);
        $imageFileType_foto_op = strtolower(pathinfo($target_file_foto_op, PATHINFO_EXTENSION));
        function salah() {
        ?>
            <script>
                swal({
                        title: "Error!",
                        text: "Maaf file harus PDF, JPG, atau JPEG",
                        icon: "warning",
                    })
                    .then((yes) => {
                        if (yes) {
                            window.history.go(-1);
                        }
                    });
            </script>
        <?php
        }
        if ($_GET['act'] == 'insert') {
            if ($imageFileType_ktp != "jpeg" && $imageFileType_ktp != "jpg" && $imageFileType_ktp != "pdf") {
                salah();
            } else if ($imageFileType_sptpd != "jpeg" && $imageFileType_sptpd != "jpg" && $imageFileType_sptpd != "pdf") {
                salah();
            } else if ($imageFileType_spopd != "jpeg" && $imageFileType_spopd !="jpg" && $imageFileType_spopd != "pdf") {
                salah();
            } else if ($imageFileType_foto_op != "jpeg" && $imageFileType_foto_op != "jpg" && $imageFileType_foto_op !="pdf") {
                salah();
            } else if ($_FILES["ktp"]["size"] > 1000000) {
            ?>
                <script>
                    swal({
                            title: "Error!",
                            text: "Maaf ukuran File KTP anda terlalu besar, pastikan semua file dibawah 1MB",
                            icon: "warning",
                        })
                        .then((yes) => {
                            if (yes) {
                                window.history.go(-1);
                            }
                        });
                </script>
            <?php
            } else if ($_FILES["sptpd"]["size"] > 1000000) {
            ?>
                <script>
                    swal({
                            title: "Error!",
                            text: "Maaf ukuran File SPTPD anda terlalu besar, pastikan semua file dibawah 1MB",
                            icon: "warning",
                        })
                        .then((yes) => {
                            if (yes) {
                                window.history.go(-1);
                            }
                        });
                </script>
            <?php
            } else if ($_FILES["spopd"]["size"] > 1000000) {
            ?>
                <script>
                    swal({
                            title: "Error!",
                            text: "Maaf ukuran File SPOPD anda terlalu besar, pastikan semua file dibawah 1MB",
                            icon: "warning",
                        })
                        .then((yes) => {
                            if (yes) {
                                window.history.go(-1);
                            }
                        });
                </script>
            <?php
            } else if ($_FILES["foto_op"]["size"] > 1000000) {
            ?>
                <script>
                    swal({
                            title: "Error!",
                            text: "Maaf ukuran File FOTO OP anda terlalu besar, pastikan semua file dibawah 1MB",
                            icon: "warning",
                        })
                        .then((yes) => {
                            if (yes) {
                                window.history.go(-1);
                            }
                        });
                </script>
                <?php
            } else {
                if ((move_uploaded_file($_FILES["ktp"]["tmp_name"], $target_file_ktp))
                    && (move_uploaded_file($_FILES["sptpd"]["tmp_name"], $target_file_sptpd))
                    && (move_uploaded_file($_FILES["spopd"]["tmp_name"], $target_file_spopd))
                    && (move_uploaded_file($_FILES["foto_op"]["tmp_name"], $target_file_foto_op))
                ) {
                    $sql = "INSERT INTO `$table` (`nama_wp`, 
                                    `nama_op`, 
                                    `alamat`, 
                                    `no_telp`, 
                                    `ktp`, 
                                    `sptpd`, 
                                    `spopd`, 
                                    `foto_op`) 
                                                VALUES ('$nama_wp', 
                                    '$nama_op', 
                                    '$alamat', 
                                    '$no_telp', 
                                    '$ktp', 
                                    '$sptpd', 
                                    '$spopd', 
                                    '$foto_op')";
                    if ($conn->query($sql) === TRUE) {
                ?>
                        <script>
                            swal({
                                    title: "Selamat!",
                                    text: "Pendaftaran pajak restoran berhasil, harap menunggu selama 2*24 jam untuk kami verifikasi, kami akan menghubungi nomor telepon anda.",
                                    icon: "success",
                                })
                                .then((yes) => {
                                    if (yes) {
                                        window.history.go(-1);
                                    }
                                });
                        </script>
                    <?php
                    } else {
                    ?>
                        <script>
                            swal({
                                    title: "Error!",
                                    text: "Maaf untuk sekarang sistem sedang dalam gangguan...",
                                    icon: "error",
                                })
                                .then((yes) => {
                                    if (yes) {
                                        window.history.go(-1);
                                    }
                                });
                        </script>
        <?php
                    }
                }
                $conn->close();
            }
        }
    } else {
        ?>
        <script>
            swal({
                    title: "Error!",
                    text: "Pastikan Anda Mencentang Captcha...",
                    icon: "warning",
                })
                .then((yes) => {
                    if (yes) {
                        window.history.go(-1);
                    }
                });
        </script>
    <?php
    }
    ?>
</body>

</html>