<!DOCTYPE html>
<html lang="en">

  	
<?php $this->load->view('user/template/head'); ?>
<body>
	
<?php $this->load->view('user/template/nav'); ?>

<div id="map-canvas" ></div>
        <div class="visible-lg visible-md">
            <div id="search-box">
                <form class="form-inline" role="form">
                    <div class="form-group">
                        <label class="sr-only" for="searchText">Search</label>
                        <input type="text" class="form-control input-sm" id="searchText" placeholder="Search Location">
                    </div>
                    <button type="submit" class="btn btn-default btn-sm">
                        <i class="glyphicon glyphicon-search"></i>
                    </button>
                </form>
            </div>
            <div id="sidemenu" class="well">
                <div class="btn-group btn-group-justified btn-group-sm">
                    <a class="btn btn-default"> <i class="glyphicon glyphicon-fullscreen"></i> Fit in Window </a>
                    <a class="btn btn-default"> <i class="glyphicon glyphicon-filter"></i> Filter </a>
                </div>
                <div class="divider10"></div>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <a>Sort By</a>
                    </div>
                </div>
                <div class="list-group point-list-view">
                    <a href="#"class="list-group-item point-item"> <h4 class="list-group-item-heading" >Location 1</h4>
                    <p class="list-group-item-text">
                        Location Address
                    </p> </a>
                    <a href="#"class="list-group-item point-item active"> <h4 class="list-group-item-heading" >Location 2</h4>
                    <p class="list-group-item-text">
                        Location Address
                    </p> </a>
                    <a href="#"class="list-group-item point-item"> <h4 class="list-group-item-heading" >Location 3</h4>
                    <p class="list-group-item-text">
                        Location Address
                    </p> </a>
                    <a href="#"class="list-group-item point-item"> <h4 class="list-group-item-heading" >Location 1</h4>
                    <p class="list-group-item-text">
                        Location Address
                    </p> </a>
                    <a href="#"class="list-group-item point-item"> <h4 class="list-group-item-heading" >Location 2</h4>
                    <p class="list-group-item-text">
                        Location Address
                    </p> </a>
                    <a href="#"class="list-group-item point-item"> <h4 class="list-group-item-heading" >Location 3</h4>
                    <p class="list-group-item-text">
                        Location Address
                    </p> </a>
                    <a href="#"class="list-group-item point-item"> <h4 class="list-group-item-heading" >Location 1</h4>
                    <p class="list-group-item-text">
                        Location Address
                    </p> </a>
                    <a href="#"class="list-group-item point-item"> <h4 class="list-group-item-heading" >Location 2</h4>
                    <p class="list-group-item-text">
                        Location Address
                    </p> </a>
                    <a href="#"class="list-group-item point-item"> <h4 class="list-group-item-heading" >Location 3</h4>
                    <p class="list-group-item-text">
                        Location Address
                    </p> </a>
                    <a href="#"class="list-group-item point-item"> <h4 class="list-group-item-heading" >Location 1</h4>
                    <p class="list-group-item-text">
                        Location Address
                    </p> </a>
                    <a href="#"class="list-group-item point-item"> <h4 class="list-group-item-heading" >Location 2</h4>
                    <p class="list-group-item-text">
                        Location Address
                    </p> </a>
                   
                </div>

            </div>
        </div>
        
        <script src="<?php base_url()?>assets/user/assets/js/jquery-1.10.2.min.js"></script>
        <script src="<?php base_url()?>assets/user/assets/js/bootstrap.min.js"></script>
        <script src="<?php base_url()?>assets/user/assets/ext/customScroll/js/jquery.mCustomScrollbar.min.js"></script>
        <script src="<?php base_url()?>assets/user/assets/ext/customScroll/js/jquery.mousewheel.min.js"></script>
        <script src="<?php base_url()?>assets/user/assets/js/application.js"></script>

        <script>
			function map_init() {
				var mapOptions = {
					center : new google.maps.LatLng(-8.660741, 116.5007687),
					zoom : 15,
					mapTypeId : google.maps.MapTypeId.ROADMAP,
					mapTypeControlOptions : {
						position : google.maps.ControlPosition.RIGHT_TOP,
						style : google.maps.MapTypeControlStyle.HORIZONTAL_BAR
					},
					zoomControlOptions : {
						position : google.maps.ControlPosition.RIGHT_BOTTOM
					},
					panControlOptions : {
						position : google.maps.ControlPosition.RIGHT_BOTTOM
					}
				};

				EGMap0 = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
				// default map type
				EGMap0.mapTypeControlOptions.mapTypeIds = ['roadmap', 'satellite', 'hybrid', 'terrain'];

			}


			google.maps.event.addDomListener(window, "load", map_init);

			(function($) {

				$(".point-list-view").mCustomScrollbar({
					scrollButtons : {
						enable : true
					},
					theme : 'dark-thick',
					contentTouchScroll : true
				});

			})(jQuery);
        </script></div>

</body>
</html>
