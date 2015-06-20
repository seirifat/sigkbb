<div id="page-wrapper" >

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5">
                <form action="<?php echo !empty($edit)? base_url('admin/datausaha/edit/'.$datausaha->id_usaha): base_url('admin/datausaha/add'); ?>" method="post" role="form">
                    <legend><?php echo !empty($edit)?"Edit Data Usaha":"Add Data Usaha";?></legend>

                    <div class="form-group">
                        <label for="">Nama Pemilik</label>
                        <input type="text" class="form-control" name="nama_pemilik" id="" placeholder="Pemilik Usaha" required
                               value="<?php echo !empty($datausaha)?$datausaha->id_user:''?>">
                    </div>
                    <div class="form-group">
                        <label for="">Kecamatan</label>
                        <select name="id_kecamatan" id="inputID" class="form-control">
                            <?php foreach($kecamatan as $row):?>
                                <option value="<?php echo $row->id_kecamatan;?>"><?php echo $row->nama_kecamatan;?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Kelurahan</label>
                        <select name="id_kelurahan" id="inputID" class="form-control">
                            <?php foreach($kelurahan as $row):?>
                                <option value="<?php echo $row->id_kelurahan;?>"><?php echo $row->nama_kelurahan;?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Sektor Usaha</label>
                        <select name="id_sektor" id="inputID" class="form-control">
                            <?php foreach($sektorusaha as $row):?>
                                <option value="<?php echo $row->id_sektor;?>"><?php echo $row->nama_sektor;?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Skala Usaha</label>
                        <select name="id_skalausahan" id="inputID" class="form-control">
                            <?php foreach($skalausaha as $row):?>
                                <option value="<?php echo $row->id_skalausaha;?>"><?php echo $row->nama_skalausaha;?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Usaha</label>
                        <input type="text" class="form-control" name="nama_usaha" id="" placeholder="Nama Usaha" required
                               value="<?php echo !empty($datausaha)?$datausaha->nama_usaha:''?>">
                    </div>
                    <div class="form-group">
                        <label for="">Produk</label>
                        <input type="text" class="form-control" name="produk" id="" placeholder="Produk" required
                               value="<?php echo !empty($datausaha)?$datausaha->produk:''?>">
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" class="form-control" name="alamat_usaha" id="" placeholder="Alamat" required
                               value="<?php echo !empty($datausaha)?$datausaha->alamat_usaha:''?>">
                    </div>
                    <div class="form-group">
                        <label for="">Latitude</label>
                        <input type="text" class="form-control" name="latitude" id="" placeholder="Latitude" required
                               value="<?php echo !empty($datausaha)?$datausaha->latitude:''?>">
                    </div>
                    <div class="form-group">
                        <label for="">Longitude</label>
                        <input type="text" class="form-control" name="longitude" id="" placeholder="Longitude" required
                               value="<?php echo !empty($datausaha)?$datausaha->longitude:''?>">
                    </div>
                    <div class="form-group">
                        <label for="">Omzet</label>
                        <input type="text" class="form-control" name="omzet" id="" placeholder="Omzet" required
                               value="<?php echo !empty($datausaha)?$datausaha->omzet:''?>">
                    </div>

                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                </form>
            </div>
        </div></div>
</div>

