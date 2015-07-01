<?php
include('conn.php');

if (isset($_GET['id_foto']) && isset($_GET['id_usaha']))
{
    $id_foto = $_GET['id_foto'];
    $id_usaha = $_GET['id_usaha'];

    $nama_file = mysql_query("SELECT * FROM foto_usaha WHERE id_foto=$id_foto");
    $nama_file = mysql_fetch_row($nama_file);
    $nama_file = $nama_file[2];

    $del = mysql_query("DELETE FROM foto_usaha WHERE id_foto=$id_foto");
    if ($del)
    {
        unlink('media/img/' . $nama_file);
        //echo 'Foto berhasil diupload! ';		//Pesan jika proses tambah sukses
        //echo '<a href="detail_tempat.php='.$id.'">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
        redirect("riwayat_pendaftaran_usaha.php?id_usaha=" . $id_usaha ."&delete=1");
    }
    else
    {
        //echo 'Foto gagal diupload! ';		//Pesan jika proses tambah sukses
        //echo '<a href="detail_tempat.php?id='.$id.'">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
        redirect("riwayat_pendaftaran_usaha.php?id_usaha=" . $id_usaha ."&delete=0");
    }
}
else
{    //jika tidak terdeteksi tombol tambah di klik

    //redirect atau dikembalikan ke halaman tambah
    //echo '<script>window.history.back()</script>';
    //redirect('tempat_wisata.php');
}