<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <link rel="icon" href="logo.ico">
    <meta name="author" content="">
    <title>PENDAFTARAN PAJAK RESTORAN BPPD KOTA PALEMBANG</title>
    <link rel="stylesheet" href="form/css/bootstrap.min.css">
    <link rel="stylesheet" href="form/css/dataTables.bootstrap.min.css">
    <link href="form/css/style.css" rel="stylesheet">
    <script src='https://www.google.com/recaptcha/api.js'></script>

</head>

<body style="padding-top:50px;">

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">

        <div class="container">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="form.php"><strong>BPPD KOTA PALEMBANG</strong></a>
            </div>

            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="register.php"><span class="fi-account-logout"></span> KEMBALI</a></li>
                </ul>

            </div>

        </div>

    </nav>
    <div class="container">
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-info">
                    Sebelum melakukan pendaftaran, silakan <a href="SPTPD DAN SPOPD.pdf"><strong><span class="label label-primary">download</span></strong></a> Formulir Pendaftaran terlebih dahulu.
                    Formulir pendaftaran tersebut harus diisi lengkap, ditandatangani ke dalam format <strong>PDF</strong>.
                    Selanjutnya <em>file</em> PDF di-<em>upload</em> melalui form di bawah ini.
                    Permohonan pendaftaran Anda akan kami verifikasi terlebih dahulu.

                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <strong>PENDAFTARAN PAJAK RESTORAN ONLINE</strong>
            </div>
            <div class="panel-body form-lapor">
                <form method="POST" id="simpan" enctype="multipart/form-data">

                    <div class="form-group">
                        <label class="control-label col-md-4">Nama Wajib Pajak/ Pemilik Restoran</label>
                        <div class="col-md-8"><input name="nama_wp" class="form-control" type="text" maxlength="100" required></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Nama Objek Pajak/ Restoran</label>
                        <div class="col-md-8"><input name="nama_op" class="form-control" type="text" maxlength="100" required></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Alamat Restoran</label>
                        <div class="col-md-8"><textarea name="alamat" class="form-control" type="text" maxlength="255" required></textarea></div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Nomor Telepon/Whatsapp</label>
                        <div class="col-md-8"><input name="no_telp" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <=57" type="int" maxlength="100" required></div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-4">Foto asli/fotocopy KTP Pemilik Restoran</label>
                        <div class="col-md-8">
                            <input name="ktp" type="file" class="file_register">
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control input_file_register" disabled placeholder="Upload KTP" required>
                                <span class="input-group-btn">
                                    <button class="browse_register btn btn-primary" type="button" style="margin-top: -2px;"><span class="oi oi-data-transfer-upload"></span> Browse</button>
                                </span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-md-4">Formulir Pendaftaran SPTPD</label>
                        <div class="col-md-8">
                            <input name="sptpd" type="file" class="file_register">
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control input_file_register" disabled placeholder="Upload Formulir SPTPD" required>
                                <span class="input-group-btn">
                                    <button class="browse_register btn btn-primary" type="button" style="margin-top: -2px;"><span class="oi oi-data-transfer-upload"></span>Browse</button>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-4">Formulir Pendaftaran SPOPD</label>
                        <div class="col-md-8">
                            <input name="spopd" type="file" class="file_register">
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control input_file_register" disabled placeholder="Upload Formulir SPOPD" required>
                                <span class="input-group-btn">
                                    <button class="browse_register btn btn-primary" type="button" style="margin-top: -2px;"><span class="oi oi-data-transfer-upload"></span>Browse</button>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-4">Foto objek pajak/Restoran</label>
                        <div class="col-md-8">
                            <input name="foto_op" type="file" class="file_register">
                            <div class="input-group col-xs-12">
                                <input type="text" class="form-control input_file_register" disabled placeholder="Upload Foto restoran" required>
                                <span class="input-group-btn">
                                    <button class="browse_register btn btn-primary" type="button" style="margin-top: -2px;"><span class="oi oi-data-transfer-upload"></span> Browse</button>
                                </span>
                            </div>
                            <small id="emailHelp" class="form-text text-muted">Pastikan File Unggahan berupa PDF, JPG, atau JPEG dengan Ukuran MAX 1MB</small>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">&nbsp;</label>
                        <div class="g-recaptcha col-md-8" data-sitekey="6LdVP44dAAAAAKZlA7R-qtsqGbruMomrLY9o9vhw"></div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label col-md-4">&nbsp;</label>
                        <div class="col-md-8">
                            <input type="submit" style="width: 100px;" class="btn btn-success btn-add">
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>

<!--<script src="form/js/jquery.min.js"></script>
    <script src="form/js/bootstrap.min.js"></script>
    <script src="form/js/jquery.dataTables.min.js"></script>
    <script src="form/js/dataTables.bootstrap.min.js"></script> -->
    <script src="form/js/jquery.min.js"></script>
    <script src="form/js/bootstrap.min.js"></script>
    <script src="form/js/jquery.dataTables.min.js"></script>
    <script src="form/js/dataTables.bootstrap.min.js"></script>
    <script src="form/js/jquery.masknumber.js"></script>
    <script src="form/js/select2.full.min.js"></script>
    <script type="text/javascript">
        
        $(".btn-add").click(function() {
            $("#simpan").attr("action", "simpan.php?act=insert");
        });
        $(document).ready(function() {
            $(document).on('click', '.browse_register', function() {
                var file = $(this).parent().parent().parent().find('.file_register');
                file.trigger('click');
            });
            $(document).on('change', '.file_register', function() {
                $(this).parent().find('.input_file_register').val($(this).val().replace(/C:\\fakepath\\/i, ''));
            });
        });
    </script>
    <footer>
        <div class="container">
            <hr>
            <small><strong>BPPD KOTA PALEMBANG</strong> Developed by 5 ID &copy; 2022</small>
        </div>
    </footer>
</body>

</html>