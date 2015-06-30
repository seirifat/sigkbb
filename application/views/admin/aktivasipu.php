<div id="page-wrapper">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12 ">
                <h1 class="page-header">
                    Aktivasi Pemilik Usaha
                </h1>
                <div class="row">
                    <div class="col-lg-6">
                        <a href="<?php echo base_url('admin/aktivasipu/'); ?>" class="btn btn-success"><i class="fa fa-plus"></i></a>
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
                    <div class="alert alert-<?php echo $status==1?"success":"danger"?>">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong><?php echo $status==1?"Berhasil!":"Kesalahan!"?></strong> <?php echo $status==1?$pesan:""?>
                    </div>
                <?php endif;?>
                <div class="row">
                    <div class="col-lg-12">
                    <div class="panel panel-default">
                    	  <div class="panel-heading">
                    			<h3 class="panel-title"><i class="fa fa-tasks fa-fw"></i>Aktivasi Pemilik Usaha</h3>
                    	  </div>
                    	  <div class="panel-body">
                              <table class="table table-striped table-hover">
                                  <thead>
                                  <tr>
                                      <th>Nama</th>
                                      <th>Email</th>
                                      <th>Alamat</th>
                                      <th>File KTP</th>
                                      <th>Status</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  <?php foreach($dataAktivasipu as $row)
                                  {
                                      ?>
                                      <tr>
                                          <td><?php echo $row->nama_user; ?></td>
                                          <td><?php echo $row->email_user; ?></td>
                                          <td><?php echo $row->alamat_user; ?></td>
                                          <td><?php echo $row->file_ktp; ?></td>
                                          <td><div class="label label-warning">Not Available</div></td>
                                          <td></td>
                                          <?php /*if($this->session->userdata('usergroup')==1):?>
                                              <td>
                                                  <a onclick="window.location='<?=base_url();?>admin/user/updateview?uid=<?=$row->usersid;?>'" href="javascript:void(0)" class="btn btn-warning" ><i class="fa fa-edit"></i></a>
                                                  <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" href="<?php echo base_url('admin/datausaha/delete/'.$row->id_usaha); ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></td></td>
                                          <?php endif;*/?>
                                      </tr>
                                  <?php
                                  }
                                  ?>
                                  </tbody>
                              </table>
                    	  </div>
                    </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
