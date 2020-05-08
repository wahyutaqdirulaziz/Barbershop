<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('user/template/head') ?>

<body>
<?php $this->load->view('user/template/nav') ?>
<style>

</style>
<div class="col-xs-12 col-md-4">
            <div class="well">
                <form class="form-inline" role="form">
                    <div class="form-group ">
                        <label class="sr-only" for="searchText">Search</label>
                        <input type="text" class="form-control input-sm" id="searchText" placeholder="Search Location">
                    </div>
                    <button type="submit" class="btn btn-default btn-sm">
                        <i class="glyphicon glyphicon-search"></i>
                    </button>
                    <button class="btn btn-default btn-sm">
                        <i class="glyphicon glyphicon-filter"></i> Filter
                    </button>
                </form>

                <div class="divider10"></div>
					 
            </div>
        </div>
        <div class="col-xs-12 col-md-8">
            <div class="row">
                <div class="col-sm-6 col-md-5 col-lg-4 point-item-thumbnail">
                    <div class="thumbnail">
                        <img src="<?php base_url() ?>assets/gambar/bg.jpg" alt="...">
                        <div class="caption">
                            <h3>Babershop 1</h3>
                            <p>
                                Diskripsi Tempat
                            </p>
                            <p>
                                <a href="<?php base_url() ?>detail" class="btn btn-primary">More Info</a>
                                <a href="point_map.html" class="btn btn-default"><i class="glyphicon glyphicon-flag"></i> Find In Map</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-5 col-lg-4 point-item-thumbnail">
                    <div class="thumbnail">
                        <img src="<?php base_url() ?>assets/gambar/bg.jpg" alt="...">
                        <div class="caption">
                            <h3>Babershop 2</h3>
                            <p>
                                Description of place 1
                            </p>
                            <p>
                                 <a href="point_more.html" class="btn btn-primary">More Info</a>
                                <a href="point_map.html" class="btn btn-default"><i class="glyphicon glyphicon-flag"></i> Find In Map</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-5 col-lg-4 point-item-thumbnail">
                    <div class="thumbnail">
                        <img src="<?php base_url() ?>assets/gambar/bg.jpg" alt="...">
                        <div class="caption">
                            <h3>Babershop 3</h3>
                            <p>
                                Description of place 1
                            </p>
                            <p>
                                 <a href="#" class="btn btn-primary">More Info</a>
                                <a href="point_map.html" class="btn btn-default"><i class="glyphicon glyphicon-flag"></i> Find In Map</a>
                            </p>
                        </div>
                    </div>
                </div>

             
        
           
            </div>
            <div class="row">
                <ul class="pagination">
                    <li>
                        <a href="#">&laquo;</a>
                    </li>
                    <li>
                        <a href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>
		</div>
		<?php $this->load->view('user/template/foot') ?>
</body>
</html>
