<div id="page-wrapper">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <!--<script>
            jquery datatable
                $(document).result(function(){
                    $('#datausaha').DataTable()
                })
            </script>-->
            <div class="col-lg-12 ">
                <h1 class="page-header">
                    Data Usaha KBB
                </h1>
                <div class="row">
                    <div class="col-lg-6">
                        <a href="<?php echo base_url('admin/datausaha/addview'); ?>" class="btn btn-success"><i class="fa fa-plus"></i></a>
                        <a onclick="location.reload();" href="#" class="btn btn-info">
                            <i class="glyphicon glyphicon-refresh"></i>
                        </a>
                        <a href="<?=base_url('admin/report');?>" class="btn btn-default"><i class="fa fa-lg fa-print"></i></a>
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
                    <div class="alert alert-<?php echo $status==1?"success":"danger"?>">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong><?php echo $status==1?"Berhasil!":"Kesalahan!"?></strong> <?php echo $status==1?$pesan:""?>
                    </div>
                <?php endif;?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-tasks fa-fw"></i> Data Usaha</h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped table-hover table-responsive">
                                    <thead>
                                    <tr>
                                        <th class="text-center" height="10px">No</th>
                                        <th class="text-center">Nama Usaha</th>
                                        <th class="text-center">Pemilik Usaha</th>
                                        <th class="text-center">Sektor Usaha</th>
                                        <th class="text-center">Produk Utama</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i = 1;?>
                                    <?php foreach($datausaha as $row){?>
                                        <tr>
                                            <td class="text-center"><?php echo $i;?></td>
                                            <td class="text-center"><?php echo $row->nama_usaha;?></td>
                                            <td class="text-center"><?php echo $row->nama_user;?></td>
                                            <td class="text-center"><?php echo $row->nama_sektor;?></td>
                                            <td class="text-center"><?php echo $row->produk;?></td>
                                            <td class="text-center">
                                                <a href="<?php echo base_url('admin/datausaha/detilview/'.$row->id_usaha);?>" class="btn btn-info"><i class="fa fa-list"></i></a>
                                                <a href="<?php echo base_url('admin/datausaha/editview/'.$row->id_usaha);?>" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                                                <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" href="<?php echo base_url('admin/datausaha/delete/'.$row->id_usaha); ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                                        </tr>
                                        <?php $i++;?>
                                    <?php }?>
                                    <?php //echo $linkpaging;?>
                                    <?php //echo $this->pagination->create_links();?>
                                    </tbody>
                                </table>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
