<?php
	include 'conn.php';
	$id_usaha = $_GET['id_usaha'];
?>

<!DOCTYPE html>
<html lang="en">
  <?php include 'includes/head.php'; ?>
  <?php include 'includes/menu.php'; ?>
	<body role="document" style="padding-top: 80px;">
	<div class="container theme-showcase" role="main" style="padding-top:200;">
	<!-- Main jumbotron for a primary marketing essage or call to action -->
    <!-- Main content -->
	<section class="content-header">
		<h1>
			Riwayat Pendaftaran Usaha
			<small>Detil Usaha</small>
			
		</h1>
		<ol class="breadcrumb">
			<li><a href="index.php"><i class="fa fa-dashboard"></i> Beranda</a></li>
			<li><a href="profil.php"><i class="fa fa-dashboard"></i> Profil</a></li>
			<li class="active">Detil Usaha</li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-sm-6">
				
				<div class="box">
					<div class="box-header">
						<h3 class="box-title"><center>Detail Usaha<center></h3>
					</div>
					<hr class="featurette-divider">
					<!-- /.box-header -->
					<div class="box-body table-responsive no-padding">
						<?php
						//query ke database dg SELECT table tempat wisata diurutkan berdasarkan id paling kecil
						$query = mysql_query("SELECT a.id_usaha,a.nama_usaha,a.produk,a.alamat_usaha,a.omzet,a.deskripsi,b.nama_kelurahan,c.nama_kecamatan FROM data_usaha a, kelurahan b, kecamatan c WHERE (a.id_usaha = $id_usaha)&&(a.id_kecamatan = c.id_kecamatan)&& (a.id_kelurahan =b.id_kelurahan)ORDER BY id_usaha ASC") or die(mysql_error());
						$data = mysql_fetch_assoc($query);
						?>
						<table class="table table-bordered table-striped">
							<tr>
								<td class="text-right" width="180px"><strong>Nama Usaha</strong></td>
								<td><?php echo $data['nama_usaha']; ?></td>
							</tr>
							<tr>
								<td class="text-right"><strong>Produk</strong></td>
								<td><?php echo $data['produk']; ?></td>
							</tr>
							<tr>
								<td class="text-right"><strong>Alamat</strong></td>
								<td><?php echo $data['alamat_usaha']; ?></td>
							</tr>
							<tr>
								<td class="text-right"><strong>Kecamatan</strong></td>
								<td><?php echo $data['nama_kecamatan']; ?></td>
							</tr>
							<tr>
								<td class="text-right"><strong>Kelurahan</strong></td>
								<td><?php echo $data['nama_kelurahan']; ?></td>
							</tr>
							<tr>
								<td class="text-right"><strong>Omzet</strong></td>
								<td><?php echo $data['omzet']; ?></td>
							</tr>
							<tr>
								<td class="text-right"><strong>Deskripsi Usaha</strong></td>
								<td><?php echo $data['deskripsi']; ?></td>
							</tr>
							<tr>
							</tr>
						</table>
						<?php echo'<p align="right"><a href="ubah_data_usaha.php?id_usaha='.$data['id_usaha'].'"><button class="btn btn-info">Ubah data</button></a></p>';?>
					</div>
				</div>
			</div>
		
			<div class="col-sm-6">
				<div class="box-header">
					<h3 class="box-title"><center>Foto Usaha<center></h3>
				</div>
				<?php 
					if (isset($_GET['delete']))
					{					
						$del = $_GET ['delete'];
						if ($del == 1)
						{
						?>
							<div class="alert alert-success alert-dismissible fade in" role="alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<strong>Data berhasil dihapus!</strong>.
							</div>
						<?php
						}
						else
						{
						?>
							<div class="alert alert-danger alert-dismissible fade in" role="alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<strong>Data gagal dihapus!</strong>.
							</div>
						<?php
						}
					}
					if (isset($_GET['sukses']))
					{					
						$sukses = $_GET ['sukses'];
						if ($sukses == 1)
						{
						?>
							<div class="alert alert-success alert-dismissible fade in" role="alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<strong>Data berhasil diupload!</strong>.
							</div>
						<?php
						}
						if ($sukses == 0)
						{
						?>
							<div class="alert alert-danger alert-dismissible fade in" role="alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<strong>Data gagal diupload!</strong>.
							</div>
						<?php
						}
					}
				?>
				
				<hr class="featurette-divider">
				<div class="padding" style="padding-bottom:10px;">
					<div class="row">
						<form action="upload_foto.php" method="post" enctype="multipart/form-data">
							<strong class="col-md-3" style="padding-top: 6px">Tambah Foto:</strong>
							<input class="col-md-6" type="file" name="foto" style="padding-top: 6px">
							<input type="hidden" name="id_usaha" value="<?php echo $id_usaha; ?>">
							<input type="submit" name="upload" value="Upload" class="btn btn-primary col-md-2">
						</form>
					</div>
				</div>
				<table class="table table-hover">
					<tr>
						<th width="30px">No.</th>
						<th width="200px"><center>Foto</center></th>
						<th width="100px">Opsi</th>
					</tr>
					<?php
					//query ke database dg SELECT table tempat wisata diurutkan berdasarkan id paling kecil
					$query = mysql_query("SELECT * FROM foto_usaha WHERE id_usaha='$id_usaha'") or die(mysql_error());

					//cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
					if (mysql_num_rows($query) == 0)
					{    //ini artinya jika data hasil query di atas kosong

						//jika data kosong, maka akan menampilkan row kosong
						echo '<tr><td colspan="3">Tidak ada data!</td></tr>';

					}
					else
					{    //else ini artinya jika data hasil query ada (data diu database tidak kosong)

						//jika data tidak kosong, maka akan melakukan perulangan while
						$no = 1;    //membuat variabel $no untuk membuat nomor urut
						while ($data = mysql_fetch_assoc($query))
						{
							$id_foto = $data['id_foto'];
							//perulangan while dg membuat variabel $data yang akan mengambil data di database
							//menampilkan row dengan data di database
							echo '<tr>';
							echo '<td>' . $no . '</td>';    //menampilkan nomor urut
							echo '<td><center><img src="media/img/' . $data['foto'] . '" height="240" ></center></td>';    //menampilkan data nis dari database
							echo '<td><a href="delete_foto.php?id_foto=' . $id_foto . '&id_usaha=' . $id_usaha . '"><button class="btn btn-danger">Delete Foto</button></a></td>';
							echo '</tr>';

							$no++;    //menambah jumlah nomor urut setiap row
						}
					}
					?>
				</table>
			</div>
		</div>
	</section><!-- /.content -->
	</div>
	<hr class="featurette-divider">
	<?php include 'includes/footer.php'; ?>  
	</body>
</html>