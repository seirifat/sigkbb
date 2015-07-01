<div id="page-wrapper" style="margin-top: 50px">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Detail Data User</h1>
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
                            <h3 class="text-left"><strong>PROFIL</strong></h3>
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
                    <div class="col-lg-8">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover table-responsive">
                                <tbody>
                                <?php //foreach($datausaha as $user){?>
                                <tr>
                                    <td>Nama </td>
                                    <td>:</td>
                                    <td><?php echo $user->nama_user;?></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td><?php echo $user->email_user;?></td>
                                </tr>
                                <tr>
                                    <td>Password</td>
                                    <td>:</td>
                                    <td><?php echo $user->password;?></td>
                                </tr>
                                <tr>
                                    <td>Alamat </td>
                                    <td>:</td>
                                    <td><?php echo $user->alamat_user;?></td>
                                </tr>
                                <tr>
                                    <td>Tempat</td>
                                    <td>:</td>
                                    <td><?php echo $user->tempat;?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Lahir</td>
                                    <td>:</td>
                                    <td><?php echo $user->tgl_lahir;?></td>
                                </tr>
                                <tr>
                                    <td>Status</td>
                                    <td>:</td>
                                    <td><?php echo $user->status_user;?></td>
                                </tr>
                                <?php// } ?>
                                </tbody>
                            </table>
                        </div></div>
                </div> <!-- /.Col 6 -->


                <!-- /.panel-body -->
            </div><div class="row" style="margin-bottom: 20px">
                <div class="col-lg-12">
                    <a href="<?=base_url('admin/user')?>" class="btn btn-success"><i class="glyphicon glyphicon-arrow-left"></i></a>
                </div>
            </div>

            <!-- /.panel -->
        </div>

        <!-- /.col-lg-8 -->
    </div>

</div>
<!-- /#page-wrapper -->

