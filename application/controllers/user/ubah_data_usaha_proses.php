<?php 
include('conn.php');
//include('includes/lib_func.php');

//cek dahulu, jika tombol tambah di klik
if (isset($_POST['ubah']))
{

    //jika tombol tambah benar di klik maka lanjut prosesnya
	$id_usaha=$_POST['id_usaha'];
	$username=$_POST['username'];
	$n_usaha=$_POST['nama_usaha'];
	$produk=$_POST['produk'];
	$alamat=$_POST['alamat_usaha'];
	$kecamatan=$_POST['kecamatan'];
	$kelurahan=$_POST['kelurahan'];
	$omz=$_POST['omzet'];
	$deskripsi=$_POST['deskripsi'];
	
	$data_arr = geocode($alamat);

	// if able to geocode the address
	if($data_arr){
		
		$latitude = $data_arr[0];
		$longitude = $data_arr[1];
		$formatted_address = $data_arr[2];
		
		$sql = "UPDATE data_usaha SET id_kecamatan=$kecamatan,id_kelurahan=$kelurahan,nama_usaha ='$n_usaha',produk = '$produk',alamat_usaha='$alamat',latitude = $latitude,longitude=$longitude, omzet =$omz,deskripsi = '$deskripsi' WHERE id_usaha = $id_usaha";
		$input = mysql_query($sql) or die(mysql_error().$sql);
		//jika query input sukses
		if ($input)
		{
			//echo 'Berhasil menambahkan data! ';        //Pesan jika proses tambah gagal
			//echo '<a href="daftar_usaha_sukses.php">Kembali</a>';    //membuat Link untuk kembali ke halaman tambah
			redirect("detil_usaha.php?id_usaha=".$id_usaha."&sukses=1");
		}
		else
		{
			redirect("detil_usaha.php?id_usaha=".$id_usaha."&sukses=0");    //membuat Link untuk kembali ke halaman tambah
		}
	}
		
}
else
{    //jika tidak terdeteksi tombol tambah di klik

    //redirect atau dikembalikan ke halaman tambah
    echo '<script>window.history.back()</script>';

}

// function to geocode address, it will return false if unable to geocode address
function geocode($address){

	// url encode the address
	$address = urlencode($address);
	
	// google map geocode api url
	$url = "https://maps.google.com/maps/api/geocode/json?key=AIzaSyDtdkhhV_rtN9Ga2G4ZZwlKaFEMgRIyn5w&sensor=true&address=$address";

	// get the json response
	$resp_json = file_get_contents($url);
	
	// decode the json
	$resp = json_decode($resp_json, true);
	
	// response status will be 'OK', if able to geocode given address 
	if($resp['status']='OK'){

		// get the important data
		$lati = $resp['results'][0]['geometry']['location']['lat'];
		$longi = $resp['results'][0]['geometry']['location']['lng'];
		$formatted_address = $resp['results'][0]['formatted_address'];
		
		// verify if data is complete
		if($lati && $longi && $formatted_address){
		
			// put the data in the array
			$data_arr = array();			
			
			array_push(
				$data_arr, 
					$lati, 
					$longi, 
					$formatted_address
				);
			
			return $data_arr;
			
		}else{
			return false;
		}
		
	}else{
		return false;
	}
}


?>