<!DOCTYPE html>
<html lang="en">
<!-- ecoderr -->
<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.4.2/mapbox-gl-geocoder.min.js"></script>
<link rel="stylesheet"
    href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.4.2/mapbox-gl-geocoder.css"
    type="text/css" />
<!-- Promise polyfill script required to use Mapbox GL Geocoder in IE 11 -->
<script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.auto.min.js"></script>

<?php
$this->load->view('admin/template/head');

?>

<body>
    <?php
$this->load->view('admin/template/nav');
?>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Form Tambah Data
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>

            </ol>
        </section>
        <hr>
        <div class="container">
            <div class="col-md-9 col-md-offset-1">
                <form action="" method="POST">

                    <div>
                        <label for="">Nama Pemilik</label>
                        <input type="text" class="form-control" name="" id=""
                            placeholder="Masukan Nama Pemilik Babershop">
                    </div>
					<div>
                        <label for="">Nama Babershop</label>
                        <input type="text" class="form-control" name="" id=""
                            placeholder="Masukan Nama Babershop">
                    </div>
					<div>
                        <label for="">Jenis Kelamin</label>
                        <select name="" class="form-control" id="">
						<option value="">Pilih</option>
						<option value="">Laki-Laki</option>
						<option value="">Perempuan</option>
						</select>
                    </div>
                    <div>
                        <label for="">Alamat</label>
                        <textarea type="text" class="form-control" name="" id=""
                            placeholder="Masukan Alamat Pemilik Babershop"></textarea>
                    </div>
                    <div>
                        <label for="">Nomor Telepon</label>
                        <input type="number" class="form-control" name="" id=""
                            placeholder="Masukan Nomor Telepon Pemilik Babershop">
                    </div>
                    <div>
                        <label for="">Poto Babershop</label>
                        <input type="file" class="form-control" name="" id="">
                    </div>
                    <div>
                        <label for="">Keterangan</label>
                        <textarea name="" class="form-control" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group row">
                        <label for="location"
                            class="col-sm-2 col-form-label text-sm-right text-md-right text-lg-right text-xl-right">Pilih
                            Lokasi</label>
                        <div class="col-sm-9">
                            <div id='map' style="height: 300px"></div>

                            <div class="form-group">
                                <label for="">longtitude</label>


                                <textarea id="lng" class="form-control" name="longitude" cols="30" rows="1"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">langtitude</label>


                                <textarea id="lat" class="form-control" name="lattitude" cols="30" rows="1"></textarea>
                            </div>


                        </div>
                    </div>
					<div>
					<button type="submit" class="btn btn-success btn-lg">Simpan</button>
					<button type="reset" class="btn btn-danger btn-lg">Batal</button>
					</div><br>
                </form>
            </div>

        </div>
    </div>
    <?php
$this->load->view('admin/template/foot');
?>


</body>

</html>

<?php $this->load->view('admin/maps/scripts')?>
