<!DOCTYPE html>
<html lang="en">

<?php
$this->load->view('admin/template/head');

?>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
<body>
<?php
$this->load->view('admin/template/nav');
?>
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Maps Pemetaan Babershop
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>

            </ol>
			<hr>
        </section><BR><BR><BR>


		<div id='mapid' style="height: 500px" ></div>	

		</div>
<?php
$this->load->view('admin/template/foot');
?>	

<script type="text/javascript">
var mymap = L.map('mapid').setView([-8.531107, 116.347338], 9);

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1Ijoid2FoeXVsb21ib2siLCJhIjoiY2s1YXNqdjNuMGZwazNmcndtb3F0NXFxMyJ9.9P4irlsdzn1wh7O7qM_NvQ', {
	
	attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
		'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
		'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
	id: 'mapbox/streets-v11',
	
}).addTo(mymap);

<?php foreach($sup as $su):?>
L.marker([<?php echo $su->lattitude?>,<?php echo $su->longitude?>]).addTo(mymap)
		.bindPopup("<b><?= $su->nama_babershop?></b><br /><?= $su->kontak?>").openPopup();


		<?php endforeach;?>							
                                </script>


</body>

</html>
