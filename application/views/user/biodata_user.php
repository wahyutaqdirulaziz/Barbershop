<?php
$this->load->view('user/template/head');
$this->load->view('user/template/nav');
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>
    <div class="container">
        <div class="col-md-11">
            <h3>Biodata User</h3>
            <hr>
            <table class="table">
                <thead>
                    <th>Id_user</th>
                    <th>Nama User</th>
                    <th>No Telepon</th>
                </thead>
                <tbody>
                    <?php foreach($user as $s):?>
                    <tr>
					<td><?= $s->id_user?></td>
                        <td><?= $s->nama_user?></td>
						<td><?= $s->no?></td>



                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<?php $this->load->view('user/template/foot')?>
