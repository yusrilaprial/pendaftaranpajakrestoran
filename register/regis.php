
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Penerimaan Siswa Baru</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="assets/css/main.css">

</head>
<body>
	<div class="container">
	    <div class="row">
	        <div class="col-sm-12 col-md-8 col-lg-10 col-lg-offset-1">

				<div class="card" style="margin-top: 50px">
                    <div class="card-header" data-background-color="blue">
                        <h4 class="title">Data Calon Wajib Pajak</h4>
                        <p class="category">Isi Form pendaftaran dengan benar</p>
                    </div>
                    <div class="card-content">
                        <form method="post" action="">

                            <div class="row">
                            	<div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Perhitungan Pajak</label>
                                        <select name="jenis_pajak" class="form-control">
                                        	<option value="" disabled selected>-- Pilih Perhitungan Pajak--</option>
										
                                        	<option value="Pajak Hotel" >penghasilan dibawah 5 juta</option>
                                        	<option value="Pajak Restoran" >penghasilan diatas 5 juta</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Nama Wajib Pajak</label>
                                        <input type="text" class="form-control" name="nama_wajib_pajak" required
                                        value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Nama Panggilan</label>
                                        <input type="text" class="form-control" name="nama_panggilan" required
                                        value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Nama Objek Pajak/Restoran/Catering</label>
                                        <input type="text" class="form-control" name="nama_objek_pajak" required
                                        value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">Alamat Objek Pajak/Perusahaan</label>
                                        <textarea rows="3" class="form-control" name="almt_objek_pajak" required value=""></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group label-floating">
                                        <label class="control-label">No. HP</label>
                                        <input type="number" class="form-control" name="hp" required
                                        value="">
                                    </div>
                                </div>
                            </div>
                            
                            								<button type="submit" name="submit" class="btn btn-primary pull-right">Lanjut <i class="fa fa-arrow-right"></i></button>
                            
                            
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
	    </div>
	</div>
</body>
</html>