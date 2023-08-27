<?php

use \modules\controllers\mainController;

class insertdatakaryawanController extends mainController {

    public function index() {

        $data = $_SESSION["login"];

        $this->model('useradmin');
  

        $error      = array();
        $success    = null;

        

        if($_SERVER["REQUEST_METHOD"] == "POST") {

            $tanggal_register = date("Y-m-d");
            
            $nama       = isset($_POST["nama"])     ? $_POST["nama"]      : "";
            $nik     = isset($_POST["nik"])  ? $_POST["nik"]   : "";

            $jenis_kelamin     = isset($_POST["jenis_kelamin"])  ? $_POST["jenis_kelamin"]   : "";
            $tanggal_lahir     = isset($_POST["tanggal_lahir"])  ? $_POST["tanggal_lahir"]   : "";
            $golongan_darah     = isset($_POST["golongan_darah"])  ? $_POST["golongan_darah"]   : "";
            $alamat     = isset($_POST["alamat"])  ? $_POST["alamat"]   : "";
            $tinggi_badan     = isset($_POST["tinggi_badan"])  ? $_POST["tinggi_badan"]   : "";
            $berat_badan     = isset($_POST["berat_badan"])  ? $_POST["berat_badan"]   : "";
            $agama     = isset($_POST["agama"])  ? $_POST["agama"]   : "";
            
            // $foto           = isset($_FILES["images"])      ? $_FILES["images"]       : "";
            $fhoto_profil           = isset($_FILES["fhoto_profil"])      ? $_FILES["fhoto_profil"]       : "";
            $fhoto_dokumen_cv           = isset($_FILES["fhoto_dokumen_cv"])      ? $_FILES["fhoto_dokumen_cv"]       : "";
            $fhoto_dokumen_ijazah           = isset($_FILES["fhoto_dokumen_ijazah"])      ? $_FILES["fhoto_dokumen_ijazah"]       : "";
            $fhoto_id_card           = isset($_FILES["fhoto_id_card"])      ? $_FILES["fhoto_id_card"]       : "";

            $username       = isset($_POST["username"])     ? $_POST["username"]      : "";
            $password       = isset($_POST["password"])     ? $_POST["password"]      : "";

            if(empty($nik) || $nik == "") {

                array_push($error, "Nomor Induk ktp harus di isi.");
            }
            if(empty($nama) || $nama == "") {

                array_push($error, "Nama calon user admin harus di isi.");
            }
            if(empty($jenis_kelamin) || $jenis_kelamin == "") {

                array_push($error, "Jenis kelamin user admin harus di isi.");
            }
            if(empty($tanggal_lahir) || $tanggal_lahir == "") {

                array_push($error, "Tanggal lahir user admin harus di isi.");
            }
            if(empty($golongan_darah) || $golongan_darah == "") {

                array_push($error, "Golongan Darah user admin harus di isi.");
            }
            if(empty($alamat) || $alamat == "") {

                array_push($error, "Alamat user admin harus di isi.");
            }
            if(empty($tinggi_badan) || $tinggi_badan == "") {

                array_push($error, "Tinggi badan user admin harus di isi.");
            }
            if(empty($berat_badan) || $berat_badan == "") {

                array_push($error, "Berat badan user admin harus di isi.");
            }
            if(empty($agama) || $agama == "") {

                array_push($error, "Agama user admin harus di isi.");
            }
            
            

            if(!empty($fhoto_profil["name"]) && $fhoto_profil["type"] != 'image/jpg' && $fhoto_profil["type"] != 'image/jpeg' && $fhoto_profil["type"] != 'image/png') {
                array_push($error, "Gambar hanya boleh .JPG/.PNG");
            }
            if(!empty($fhoto_dokumen_cv["name"]) && $fhoto_dokumen_cv["type"] != 'image/jpg' && $fhoto_dokumen_cv["type"] != 'image/jpeg' && $fhoto_dokumen_cv["type"] != 'image/png') {
                array_push($error, "Gambar hanya boleh .JPG/.PNG");
            }
            if(!empty($fhoto_dokumen_ijazah["name"]) && $fhoto_dokumen_ijazah["type"] != 'image/jpg' && $fhoto_dokumen_ijazah["type"] != 'image/jpeg' && $fhoto_dokumen_ijazah["type"] != 'image/png') {
                array_push($error, "Gambar hanya boleh .JPG/.PNG");
            }
            if(!empty($fhoto_id_card["name"]) && $fhoto_id_card["type"] != 'image/jpg' && $fhoto_id_card["type"] != 'image/jpeg' && $fhoto_id_card["type"] != 'image/png') {
                array_push($error, "Gambar hanya boleh .JPG/.PNG");
            }

            if(empty($username) || $username == "") {

                array_push($error, "username user admin harus di isi.");
            }

            if(empty($password) || $password == "") {

                array_push($error, "password user admin harus di isi.");
            }

            if(count($error) == 0) {

                $imageName_fhoto_profil = $fhoto_profil["name"];
                $imageName_fhoto_dokumen_cv = $fhoto_dokumen_cv["name"];
                $imageName_fhoto_dokumen_ijazah = $fhoto_dokumen_ijazah["name"];
                $imageName_fhoto_id_card = $fhoto_id_card["name"];

                if($fhoto_profil["name"]) {
                    $imageName_fhoto_profil = date("h_i_s_Y_m_d_") . str_replace(" ","_", $nik) . '.jpg';
                    move_uploaded_file($fhoto_profil["tmp_name"], 'public/images/fhoto_profil/' . $imageName_fhoto_profil);
                }
                if(empty($imageName_fhoto_profil) || $imageName_fhoto_profil == "") {
                array_push($error, "Fhoto harus di isi.");
                }

                if($fhoto_dokumen_cv["name"]) {
                    $imageName_fhoto_dokumen_cv = date("h_i_s_Y_m_d_") . str_replace(" ","_", $nik) . '.jpg';
                    move_uploaded_file($fhoto_dokumen_cv["tmp_name"], 'public/images/fhoto_dokumen_cv/' . $imageName_fhoto_dokumen_cv);
                }
                if(empty($imageName_fhoto_dokumen_cv) || $imageName_fhoto_dokumen_cv == "") {
                array_push($error, "Fhoto Dokumen CV harus di isi.");
                }

                if($fhoto_dokumen_ijazah["name"]) {
                    $imageName_fhoto_dokumen_ijazah = date("h_i_s_Y_m_d_") . str_replace(" ","_", $nik) . '.jpg';
                    move_uploaded_file($fhoto_dokumen_ijazah["tmp_name"], 'public/images/fhoto_dokumen_ijazah/' . $imageName_fhoto_dokumen_ijazah);
                }
                if(empty($imageName_fhoto_dokumen_ijazah) || $imageName_fhoto_dokumen_ijazah == "") {
                array_push($error, "Fhoto harus di isi.");
                }

                if($fhoto_id_card["name"]) {
                    $imageName_fhoto_id_card = date("h_i_s_Y_m_d_") . str_replace(" ","_", $nik) . '.jpg';
                    move_uploaded_file($fhoto_id_card["tmp_name"], 'public/images/fhoto_id_card/' . $imageName_fhoto_id_card);
                }
                if(empty($imageName_fhoto_id_card) || $imageName_fhoto_id_card == "") {
                array_push($error, "Fhoto harus di isi.");
                }

                if(count($error) == 0) {
                	$ceknik = $this->useradmin->getWhere(array(
		                'nik' => $nik
		            ));
		            if(count($ceknik) > 0) {
		            	array_push($error, "Data dengan nik $nik sudah terdaftar.");
		            }
                    $cekpassword = $this->useradmin->getWhere(array(
                        'password' => md5($password)
                    ));
                    if(count($cekpassword) > 0) {
                        array_push($error, "Data dengan password ini sudah terdaftar.");
                    }
		            if(count($error) == 0) {
		                $insert = $this->useradmin->insert(
		                    array(
		                        'tanggal_register'      => $tanggal_register,
		                        'nik'      => $nik,
		                        'nama'  => $nama,
		                        'fhoto_profil'        => $imageName_fhoto_profil,
		                        'fhoto_dokumen_cv'        => $imageName_fhoto_dokumen_cv,
		                        'fhoto_dokumen_ijazah'        => $imageName_fhoto_dokumen_ijazah,
		                        'fhoto_id_card'        => $imageName_fhoto_id_card,
		                        
		                        'username'        => $username,
		                        'password'        => md5($password),

		                        'jenis_kelamin'        => $jenis_kelamin,
		                        'tanggal_lahir'        => $tanggal_lahir,
		                        'golongan_darah'        => $golongan_darah,
		                        'alamat'        => $alamat,
		                        'tinggi_badan'        => $tinggi_badan,
		                        'berat_badan'        => $berat_badan,
		                        'agama'        => $agama
		                    )
		                );

		                if($insert) {
		                    $success = "Data Berhasil di simpan.";
		                }
		            }
                }
            }


        }

       

        $this->template('insertdatakaryawan', array('error' => $error ,'success' => $success));


       
    }

    

    public function transfile() {

        $data_karyawan = isset($_GET["data_karyawan"]) ? $_GET["data_karyawan"] : 0;

        $error_upload     = array();
        $success_upload    = null;

        
        

        if($_SERVER["REQUEST_METHOD"] == "POST") {

            $dokumen  = isset($_FILES["dokumen"])      ? $_FILES["dokumen"]       : "";
            
  
            if(empty($dokumen["name"]))
            {
                array_push($error_upload, "File masih kosong");
            }
            if(count($error_upload) == 0) {
                if(!empty($dokumen["name"]) && $dokumen["type"] != 'application/vnd.ms-excel') {
                    array_push($error_upload, "File hanya boleh ber-tipe excel");
                }
                if(count($error_upload) == 0) {
                    // $success_upload = "Sukses";

                    include "excel_reader2.php";
                    $target = basename($_FILES['dokumen']['name']) ;
                    move_uploaded_file($_FILES['dokumen']['tmp_name'], $target);
                    chmod($_FILES['dokumen']['name'],0777);
                     
                    // mengambil isi file xls
                    $data = new Spreadsheet_Excel_Reader($_FILES['dokumen']['name'],false);
                    $jumlah_baris = $data->rowcount($sheet_index=0);
                     
                    $berhasil = 0;
                    for ($i=2; $i<=$jumlah_baris; $i++){
                     
                        $nik  = $data->val($i, 1);
                        $nama  = $data->val($i, 2);

                        $jenis_kelamin  = $data->val($i, 3);
                        $golongan_darah  = $data->val($i, 4);
                        $alamat  = $data->val($i, 5);
                        $tinggi_badan  = $data->val($i, 6);
                        $berat_badan  = $data->val($i, 7);
                        $agama  = $data->val($i, 8);
                        $umur  = $data->val($i, 9);

                        $tanggal_register  = date("Y-m-d");
                        $total_hari = 365 * $umur;
                        $tanggal_lahir = date('Y-m-d', strtotime('-'.$total_hari.' days', strtotime($tanggal_register)));
                     
                        if($nama != "" && $nik != "" && $jenis_kelamin != "" && $umur != "" && $golongan_darah != "" && $alamat != "" && $tinggi_badan != "" && $berat_badan != "" && $agama != ""){
                            // input data ke database (table data_pegawai)


                            $this->model('useradmin');

                            $cek = $this->useradmin->getWhere(array(
				                'nik' => $nik
				            ));
				            if(!count($cek) > 0) {
	                            $insert = $this->useradmin->insert(
	                                array(
	                                    'tanggal_register'      => $tanggal_register,
	                                    'nik'      => $nik,
	                                    'nama'  => $nama,
	                                    'jenis_kelamin'        => $jenis_kelamin,
	                                    'tanggal_lahir'        => $tanggal_lahir,
				                        'golongan_darah'        => $golongan_darah,
				                        'alamat'        => $alamat,
				                        'tinggi_badan'        => $tinggi_badan,
				                        'berat_badan'        => $berat_badan,
				                        'agama'        => $agama
	                                )
	                            );
	                            if($insert) {
	                                $success_upload = "Transfer data user admin sukses";
	                            }
	                        }
                            
                        }
                    }
                     
                    unlink($_FILES['dokumen']['name']);
                    
 

                }
            }

        }

        $this->template('insertdatakaryawan', array('error_upload' => $error_upload, 'success_upload' => $success_upload));
   
    }
}
?>