<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('user/template/head') ?>

<body>
    <?php $this->load->view('user/template/nav') ?>


    <div class="modal fade" id="point-info-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Place Infor</h4>
                </div>
                <div class="modal-body">
                    <img data-src="holder.js/200x200" class="pull-left margin-right-10" />
                    <p>Place Description</p>
                    <div class="clearfix"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default">More Info</button>
                    <button type="button" class="btn btn-default">View Gallery</button>
                    <button type="button" class="btn btn-default">Show in Map</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <div class="col-xs-12 col-md-3">
        <div class="well">
            <form class="form-inline" role="form">
                <div class="form-group ">
                    <label class="sr-only" for="searchText">Search</label>
                    <input type="text" class="form-control input-sm" id="searchText" placeholder="Search Location">
                </div>
                <button type="submit" class="btn btn-default btn-sm">
                    <i class="glyphicon glyphicon-search"></i>
                </button>

            </form>

            <div class="divider10"></div>

        </div>
    </div>
    <div class="col-xs-12 col-md-9">
        <div class="row point-info">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Nama Babershop</h4>
                </div>
                <div class="panel-body">

                    <p>
                        <h3>Keterangan</h3>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce
                        posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna
                        eros quis urna.
                        Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus.
                        Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                        Proin pharetra nonummy pede. Mauris et orci.
                        Aenean nec lorem. In porttitor. Donec laoreet nonummy augue.
                        Suspendisse dui purus, scelerisque at, vulputate vitae, pretium mattis, nunc. Mauris eget neque
                        at sem venenatis eleifend. Ut nonummy.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce
                        posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna
                        eros quis urna.
                        Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus.
                    </p>
                    <address>
                        <strong>Nama Pemilik</strong>
                        <br>
                        <strong> Alamat Detail</strong>
                        <br>
                        <abbr title="Phone">Kontak:</abbr> (123) 456-7890
                    </address>
                    <style>
                    .responsive img {
                        max-width: 100%;
                        /*width:100%;*/
                        height: auto;
                    }
                    </style>
                    <div class="container">
                        <span class="responsive"> <img src="<?php base_url() ?>assets/gambar/bg.jpg" 
                               alt=""></span>
                    </div>
                </div>

            </div>
            <div class="panel-footer">
                <a href="point_gallery.html" class="btn btn-default">View All Gallery</a>
                <a href="#" class="btn btn-default">Show In Map</a>

            </div>
        </div>
    </div>

    </div>


    <?php $this->load->view('user/template/foot') ?>
</body>

</html>
