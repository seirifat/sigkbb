<div id="page-wrapper" style="margin-top: 50px">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Detail Data Usaha</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

    <!-- /.row -->
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="panel panel-info">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="text-left">
                                <img src="<?=base_url('assets/img/logoinvoice.png');?>">
                            <h3 class="text-center"><strong>Usaha <?php echo $usaha->nama_usaha; ?></strong></h3>
                            <h5 class="text-center"><?php echo $usaha->alamat_usaha; echo ", Desa ".$usaha->id_kelurahan; echo ", Kecamatan ".$usaha->id_kecamatan;?></h5>
                            <h5 class="text-center"><?php echo "No Telp". $usaha->no_tlp; ?></h5>
                            </p>
                            <hr>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover table-responsive">
                                INI FOTO PEMILIK USAHA
                            </table>
                        </div></div>
                    <div class="col-lg-4">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-responsive">
                            <tbody>
                            <?php //foreach($datausaha as $usaha){?>
                    			<tr>
                    				<td>Nama Usaha</td>
                    				<td>:</td>
                                    <td><?php echo $usaha->nama_usaha;?></td>
                                </tr>
                                <tr>
                    				<td>Kecamatan</td>
                                    <td>:</td>
                    				<td><?php echo $usaha->id_kecamatan;?></td>
                                </tr>
                                <tr>
                    				<td>Kelurahan</td>
                                    <td>:</td>
                    				<td><?php echo $usaha->id_kelurahan;?></td>
                                </tr>
                                <tr>
                    				<td>Sektor Usaha</td>
                                    <td>:</td>
                    				<td><?php echo $usaha->id_sektor;?></td>
                                </tr>
                                <tr>
                    				<td>Skala Usaha</td>
                                    <td>:</td>
                    				<td><?php echo $usaha->id_skalausaha;?></td>
                                </tr>
                                <tr>
                    				<td>Omzet</td>
                                    <td>:</td>
                    				<td><?php echo $usaha->omzet;?></td>
                                </tr>
                            <?php// } ?>
                    		</tbody>
                    	</table>
                    </div></div>
                    <div class="col-lg-4">
                        <table class="table table-striped table-hover table-responsive">
                            <tbody>
                            <tr>
                                <td>Nama Pemilik</td>
                                <td>:</td>
                                <td><?php echo $usaha->id_user;?></td>
                            </tr>
                            <tr>
                                <td>Produk Utama</td>
                                <td>:</td>
                                <td><?php echo $usaha->produk;?></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td><?php echo $usaha->alamat_usaha;?></td>
                            </tr>
                            <tr>
                                <td>Latitude</td>
                                <td>:</td>
                                <td><?php echo $usaha->latitude;?></td>
                            </tr>
                            <tr>
                                <td>Longitude</td>
                                <td>:</td>
                                <td><?php echo $usaha->longitude;?></td>
                            </tr>
                            <tr>
                                <td>No Telepon</td>
                                <td>:</td>
                                <td><?php echo $usaha->no_tlp;?></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    </div> <!-- /.Col 6 -->


                <!-- /.panel-body -->
            </div><div class="row" style="margin-bottom: 20px">
                <div class="col-lg-12">
                    <a href="<?=base_url('admin/datausaha')?>" class="btn btn-success"><i class="glyphicon glyphicon-arrow-left"></i></a>
                    <a href="<?=base_url('admin/datausaha/print');?>" class="btn btn-info"><i class="fa fa-lg fa-print"></i></a>
                </div>
            </div>

            <!-- /.panel -->
        </div>

        <!-- /.col-lg-8 -->
    </div>

</div>
<!-- /#page-wrapper -->

