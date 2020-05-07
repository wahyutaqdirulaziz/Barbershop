<!-- ecoderr -->
<!-- <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.4.2/mapbox-gl-geocoder.min.js"></script>
<link
rel="stylesheet"
href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.4.2/mapbox-gl-geocoder.css"
type="text/css"
/> -->
<!-- Promise polyfill script required to use Mapbox GL Geocoder in IE 11 -->
<!-- <script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.auto.min.js"></script> -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
<!-- coderrr -->

			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Forms</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Forms</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Basic Form</a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Lacak lokasi suppllier</div>
								</div>

                               
                            <div id='mapid' style="height: 500px" ></div>
                               
									</div>
									
								</div>
						</div>
					</div>
				</div>
			</div>

	</div>
<!--  -->
<script>
                   var mymap = L.map('mapid').setView([-8.531107, 116.347338], 9);

L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1Ijoid2FoeXVsb21ib2siLCJhIjoiY2s1YXNqdjNuMGZwazNmcndtb3F0NXFxMyJ9.9P4irlsdzn1wh7O7qM_NvQ', {
	
	attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
		'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
		'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
	id: 'mapbox/streets-v11',
	
}).addTo(mymap);

<?php foreach($sup as $su):?>
L.marker([<?php echo $su->lattitude?>,<?php echo $su->longitude?>]).addTo(mymap)
		.bindPopup("<b><?= $su->nama?></b><br /><?= $su->kontak?>").openPopup();


		<?php endforeach;?>							
                                </script>

