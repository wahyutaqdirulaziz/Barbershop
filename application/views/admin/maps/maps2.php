<script>
                                mapboxgl.accessToken = 'pk.eyJ1Ijoid2FoeXVsb21ib2siLCJhIjoiY2s1YXNqdjNuMGZwazNmcndtb3F0NXFxMyJ9.9P4irlsdzn1wh7O7qM_NvQ';
                                var lng = document.getElementById('lng');
								var lat = document.getElementById('lat');
								
							    var map = new mapboxgl.Map({
                                container: 'map',
                                style: 'mapbox://styles/mapbox/streets-v11',
								center :[116.8334831,-8.582711],
								zoom :7,
								draggable: true
								
                                    });
									<?php foreach($sup as $s):?>
									var marker = new mapboxgl.Marker({
									
									})
									.setLngLat([<?= $s->longitude?>,<?= $s->lattitude?>])
									.addTo(map);
								<?php endforeach;?>
									
									function onDragEnd() {
									var lngLat = marker.getLngLat();
									lng.style.display = 'block';
									lng.innerHTML =
									lngLat.lng 

									lat.style.display = 'block';
									lat.innerHTML =
									lngLat.lat;


									}
									
									marker.on('dragend', onDragEnd);
									

									map.addControl(
									new MapboxGeocoder({
									accessToken: mapboxgl.accessToken,
									mapboxgl: mapboxgl,
									placeholder: "Cari lokasi cth: lombok",
									
									})
									);
									map.addControl(new mapboxgl.NavigationControl());

									// Add geolocate control to the map.
									map.addControl(
									new mapboxgl.GeolocateControl({
									positionOptions: {
									enableHighAccuracy: true
									},
									trackUserLocation: true
									})
									);

									

									
                                </script>

