<div id="page-wrapper">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12 ">
                <h1 class="page-header">
                    Data Pemilik Usaha
                </h1>
                <div class="row">
                    <div class="col-lg-6">
                        <a href="<?php echo base_url('admin/user/addview'); ?>" class="btn btn-success"><i class="fa fa-plus"></i></a>
                        <a onclick="location.reload();" href="#" class="btn btn-info">
                            <i class="glyphicon glyphicon-refresh"></i>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-offset-3 text-right">
                        <input type="text" name="cariData" id="cariData" class="form-control" value="" title="" placeholder="Cari data" required="required" >
                    </div>
                </div>
                <br>
                <?php
                ## ALERT MENGGUNAKAN FLASH DATA
                $status = $this->session->flashdata('status');
                $pesan = $this->session->flashdata('pesan');
                if(!empty($pesan)):
                    ?>
                    <div class="alert alert-<?php echo $status == 1 ?"success":"danger"?>">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong><?php echo $status==1?"Berhasil!":"Kesalahan!"?></strong> <?php echo $status==1?$pesan:""?>
                    </div>
                <?php endif;?><div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-tasks fa-fw"></i> Kelurahan</h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped table-hover table-responsive">
                                    <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Nama </th>
                                        <th class="text-center">Email </th>
                                        <th class="text-center">Alamat </th>
                                        <!--<th class="text-center">Password </th>-->
                                        <th class="text-center">Tempat Lahir </th>
                                        <th class="text-center">Tanggal Lahir </th>
                                        <th class="text-center">KTP </th>
                                        <th class="text-center">Status </th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                            </thead>
                            <tbody>
                            <?php $i = 1;?>
                            <?php foreach($datauser as $row){  //dari controlller pada fungsi index?>
                                <tr>
                                    <td class="text-center"><?php echo $i;?></td>
                                    <td><?php echo $row->nama_user;?></td>
                                    <td><?php echo $row->email_user;?></td>
                                    <td><?php echo $row->alamat_user;?></td>
                                    <!--<td><?php echo $row->password;?></td>-->
                                    <td><?php echo $row->tempat;?></td>
                                    <td><?php echo $row->tgl_lahir;?></td>
                                    <td><?php echo $row->file_ktp;?></td>
                                    <td><?php echo $row->status_user;?></td>
                                    <td class="text-center"><a href="<?php echo base_url('admin/user/editview/'.$row->id_user);?>" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                                        <a href="<?php echo base_url('admin/user/delete'); ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                                </tr>
                            <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
