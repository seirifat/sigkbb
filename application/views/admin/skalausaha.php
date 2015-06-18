<div id="page-wrapper">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12 ">
                <h1 class="page-header">
                    Data Skala Usaha KBB
                </h1>
                <div class="row">
                    <div class="col-lg-6">
                        <a href="<?php echo base_url('admin/skalausaha/addview'); ?>" class="btn btn-success"><i class="fa fa-plus"></i></a>
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
                    			<h3 class="panel-title"><i class="fa fa-tasks fa-fw"></i> Skala Usaha</h3>
                    	  </div>
                    	  <div class="panel-body">
                              <table class="table table-striped table-hover table-responsive">
                                  <thead>
                                  <tr>
                                      <th class="text-center" height="10px">No</th>
                                      <th class="text-center">Nama Skala Usaha</th>
                                      <th class="text-center">Aksi</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  <?php $i = 1;?>
                                  <?php foreach($dataskalausaha as $row){?>
                                      <tr>
                                          <td class="text-center"><?php echo $i;?></td>
                                          <td><?php echo $row->nama_skala;?></td>
                                          <td class="text-center"><a href="<?php echo base_url('admin/skalausaha/editview/'.$row->id_skala);?>" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                                              <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" href="<?php echo base_url('admin/skalausaha/delete/'.$row->id_skala); ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                                      </tr>
                                      <?php $i++;?>
                                  <?php }?>
                                  </tbody>
                              </table>
                    	  </div>
                    </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
