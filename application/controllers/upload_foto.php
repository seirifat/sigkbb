<?php
include('conn.php');

if (isset($_POST['upload']))
{
    $id_usaha = $_POST['id_usaha'];
	
    $nama_file = $id_usaha . '-' . preg_replace('/^-+|-+$/', '', strtolower(preg_replace('/[^a-zA-Z0-9.]+/', '-', $_FILES['foto']['name'])));

    move_uploaded_file($_FILES['foto']['tmp_name'], 'media/img/' . $nama_file);

    $input = mysql_query("INSERT INTO foto_usaha VALUES(NULL, $id_usaha, '$nama_file') ");
    if ($input)
    {
        //echo 'Foto berhasil diupload! ';		//Pesan jika proses tambah sukses
        //echo '<a href="detail_tempat.php='.$id.'">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
        redirect("riwayat_pendaftaran_usaha.php?id_usaha=" . $id_usaha . "&sukses=1");
    }
    else
    {
        //echo 'Foto gagal diupload! ';		//Pesan jika proses tambah sukses
        //echo '<a href="detail_tempat.php?id='.$id.'">Kembali</a>';	//membuat Link untuk kembali ke halaman tambah
       redirect('riwayat_pendaftaran_usaha.php?id_usaha=' . $id_usaha . '&sukses=0');
    }
}
else
{    //jika tidak terdeteksi tombol tambah di klik

    //redirect atau dikembalikan ke halaman tambah
    //echo '<script>window.history.back()</script>';
    redirect('riwata_pendaftaran_usaha.php');

}