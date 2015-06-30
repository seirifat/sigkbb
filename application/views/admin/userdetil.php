<div id="page-wrapper">
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Detail Data User</h1>
                <div class="row" style="margin-bottom: 20px">
                    <div class="col-lg-12">
                        <a href="<?=base_url('admin/datausaha')?>" class="btn btn-success"><i class="glyphicon glyphicon-arrow-left"></i></a>
                        <a href="<?=base_url('admin/datausaha/print');?>" class="btn btn-info"><i class="fa fa-lg fa-print"></i></a>
                    </div>
                </div>
    <!-- /.row -->
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <div class="panel panel-info">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <p class="text-right">
                                        <img src="<?=base_url('assets/img/logoinvoices.png');?>">
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <address>
                                        <strong>Usaha </strong><br>
                                        Ieu alamat tina data userna<br>
                                        ieu no telpon tina userna
                                    </address>
                                </div>
                            </div>
                    <div class="col-lg-6"
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-responsive">
                            <tbody>
                            <?php foreach($datausaha as $row){?>
                    			<tr>
                    				<td>Nama Usaha</td>
                                    <td><?php echo $row->nama_usaha;?></td>
                                </tr>
                                <tr>
                    				<td>Kecamatan</td>
                    				<td><?php echo $row->id_kecamatan;?></td>
                                </tr>
                                <tr>
                    				<td>Kelurahan</td>
                    				<td><?php echo $row->id_kelurahan;?></td>
                                </tr>
                                <tr>
                    				<td>Sektor Usaha</td>
                    				<td><?php echo $row->id_sektor;?></td>
                                </tr>
                                <tr>
                    				<td>Skala Usaha</td>
                    				<td><?php echo $row->id_skala;?></td>
                                </tr>
                                <tr>
                    				<td>Omzet</td>
                    				<td><?php echo $row->omzet;?></td>
                                </tr>
                                <tr>
                    				<td></td>
                    				<td></td>
                                </tr>
                            <?php } ?>
                    		</tbody>
                    	</table>
                    </div>
                    <div class="col-lg-6">
                        <table class="table table-striped table-hover table-responsive">
                            <tbody>
                            <tr>
                                <td>Nama Pemilik</td>
                                <td><?php echo $row->id_user;?></td>
                            </tr>
                            <tr>
                                <td>Produk</td>
                                <td><?php echo $row->produk;?></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td><?php echo $row->alamat_usaha;?></td>
                            </tr>
                            <tr>
                                <td>Latitude</td>
                                <td><?php echo $row->latitude;?></td>
                            </tr>
                            <tr>
                                <td>Longitude</td>
                                <td><?php echo $row->longitude;?></td>
                            </tr>
                            <tr>
                                <td>No Telepon</td>
                                <td><?php echo $row->no_tlp;?></td>
                            </tr>
                            </tbody>
                        </div>
                </div>

                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-8 -->
    </div>

</div>
<!-- /#page-wrapper -->

