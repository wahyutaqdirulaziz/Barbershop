<!-- ecoderr -->
<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.4.2/mapbox-gl-geocoder.min.js"></script>
<link
rel="stylesheet"
href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.4.2/mapbox-gl-geocoder.css"
type="text/css"
/>
<!-- Promise polyfill script required to use Mapbox GL Geocoder in IE 11 -->
<script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.auto.min.js"></script>

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

                               
                            <div id='map' style="height: 500px" ></div>
                               
									</div>
									
								</div>
						</div>
					</div>
				</div>
			</div>
<!--  -->
<script>
                                mapboxgl.accessToken = 'pk.eyJ1Ijoid2FoeXVsb21ib2siLCJhIjoiY2s1YXNqdjNuMGZwazNmcndtb3F0NXFxMyJ9.9P4irlsdzn1wh7O7qM_NvQ';
                                // var lng = document.getElementById('lng');
								// var lat = document.getElementById('lat');
								
							    var map = new mapboxgl.Map({
                                container: 'map',
                                style: 'mapbox://styles/mapbox/streets-v11',
								center :[116.8334831,-8.582711],
								zoom :7,
							
								
                                    });
									<?php foreach($sup as $su):?>
									
									 new mapboxgl.Marker({
										
										})
										.setLngLat([<?php echo $su->longitude?>,<?php echo $su->lattitude?>]).addTo(map);

									 
								<?php endforeach;?>

								
									
									// function onDragEnd() {
									// var lngLat = marker.getLngLat();
									// lng.style.display = 'block';
									// lng.innerHTML =
									// lngLat.lng 

									// lat.style.display = 'block';
									// lat.innerHTML =
									// lngLat.lat;


									// }
									
									// marker.on('dragend', onDragEnd);
									

									// map.addControl(
									// new MapboxGeocoder({
									// accessToken: mapboxgl.accessToken,
									// mapboxgl: mapboxgl,
									// placeholder: "Cari lokasi cth: lombok",
									
									// })
									// );
									// map.addControl(new mapboxgl.NavigationControl());

									// // Add geolocate control to the map.
									// map.addControl(
									// new mapboxgl.GeolocateControl({
									// positionOptions: {
									// enableHighAccuracy: true
									// },
									// trackUserLocation: true
									// })
									// );

									

									
                                </script>

