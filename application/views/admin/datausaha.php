<div id="page-wrapper">
<div class="container-fluid">
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Data Kecamatan KBB
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-table"></i> Kecamatan
            </li>
        </ol>
        <a href="<?php echo base_url('admin/kecamatan/addview'); ?>" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Data</a>
        <table class="table table-striped table-hover">
        	<thead>
        		<tr>
        			<th>No</th>
        			<th>Nama Kecamatan</th>
        			<th>Action</th>
        		</tr>
        	</thead>
        	<tbody>
            <?php foreach($datakecamatan as $row){?>
        		<tr>
        			<td><?php echo $row->id_kecamatan;?></td>
        			<td><?php echo $row->nama_kecamatan;?></td>
        			<td><a href="#" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                        <a href="<?php echo base_url('admin/kecamatan/delete'); ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
        		</tr>
            <?php }?>
        	</tbody>
        </table>
    </div>
</div>
<!-- /.row -->