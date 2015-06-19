<div id="page-wrapper">
<div class="container-fluid">
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Data Usaha KBB
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-bar-chart-o"></i> Usaha
            </li>
        </ol>
        <a href="<?php echo base_url('admin/kecamatan/addview'); ?>" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Data</a>
        	<?php
        		$i = 1;
        	?>
        	<table class="table table-striped table-hover">
        	<thead>
        		<tr>
        			<th>No</th>
        			<th>Nama Usaha</th>
        			<th>Action</th>
        		</tr>
        	</thead>
        	<tbody>
            <?php foreach($datausaha as $row):?>
        		<tr>
        			<td><?php echo $i;?></td>
        			<td><?php echo $row->nama_usaha;?></td>
        			<td><a href="#" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                        <a href="<?php echo base_url('admin/kecamatan/delete'); ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
        		</tr>
            <?php
	            		$i++; 
	            	endforeach;
			?>
        	</tbody>
        </table>
    </div>
</div>
<!-- /.row -->