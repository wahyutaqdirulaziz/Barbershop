<!DOCTYPE html>
<html lang="en">

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
                Form Data Pemetaan Babershop
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>

            </ol>
			<hr>
        </section><BR><BR>
		
<div class="container">
	<div class="col-md-12">
		<table class="table table-hover table-resvonship">
			<thead id="thead">
			<th>ID</th>
			<th>Nama Pemilik</th>
			<th>Nama Babershop</th>
			<th>Jenis Kelamin</th>
			<th>Nomor Telepon</th>
			<th>Poto Babershop</th>
			<th>Aksi</th>
			</thead>

			<tbody>
			<td>1</td>
			<td>MOH.FAHRURROZI</td>
			<td>OJIK Cukur</td>
			<td>Laki-Laki</td>
			<td>087863301421</td>
			<td><img src="" alt=""></td>
			<td>
				<a href="" class=" btn btn-warning glyphicon glyphicon-edit"></a> ||
				<a href="" class="btn btn-danger glyphicon glyphicon-trash"></a>
			</td>
			</tbody>
		</table>
	</div>
</div>

		</div>



<?php
$this->load->view('admin/template/foot');
?>
</body>
</html>
