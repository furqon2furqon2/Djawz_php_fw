<?php

use \modules\controllers\mainController;

class insertdatasiswaController extends mainController {

    public function index() {

        $data = $_SESSION["login"];
  

        $error      = array();
        $success    = null;
        
        $this->model('siswa');
        
        $this->model('kelas');
        $kelas = $this->kelas->get();

        

        if($_SERVER["REQUEST_METHOD"] == "POST") {

            $status       = isset($_GET["status"])     ? $_GET["status"]      : "Active";
            $nama_siswa       = isset($_POST["nama_siswa"])     ? $_POST["nama_siswa"]      : "";
            $telephone_siswa     = isset($_POST["telephone_siswa"])  ? $_POST["telephone_siswa"]   : "";
            $id_kelas     = isset($_POST["id_kelas"])  ? $_POST["id_kelas"]   : "";
            $username     = isset($_POST["username"])  ? $_POST["username"]   : "";
            $password    = isset($_POST["password"])  ? $_POST["password"]   : "";
            $fhoto_profil           = isset($_FILES["fhoto_profil"])      ? $_FILES["fhoto_profil"]       : "";

            if(empty($nama_siswa) || $nama_siswa == "") {
                array_push($error, "Nama calon siswa harus di isi.");
            }
            if(empty($telephone_siswa) || $telephone_siswa == "") {
                array_push($error, "Telephone siswa harus di isi.");
            }
            
            if(empty($id_kelas) || $id_kelas == "") {
                array_push($error, "Kelas harus di pilih.");
            }
            
            
            

            if(!empty($fhoto_profil["name"]) && $fhoto_profil["type"] != 'image/jpg' && $fhoto_profil["type"] != 'image/jpeg' && $fhoto_profil["type"] != 'image/png') {
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
               

                if($fhoto_profil["name"]) {
                    $imageName_fhoto_profil = date("h_i_s_Y_m_d_") . str_replace(" ","_", $username) . '.jpg';
                    move_uploaded_file($fhoto_profil["tmp_name"], 'public/images/fhoto_profil/' . $imageName_fhoto_profil);
                }
                if(empty($imageName_fhoto_profil) || $imageName_fhoto_profil == "") {
                array_push($error, "Fhoto harus di isi.");
                }

                

                if(count($error) == 0) {
                	$cekusername = $this->siswa->getWhere(array(
		                'username' => $username
		            ));
		            if(count($cekusername) > 0) {
		            	array_push($error, " Username $username sudah terdaftar.");
		            }
                    $cekpassword = $this->siswa->getWhere(array(
                        'password' => $password
                    ));
                    if(count($cekpassword) > 0) {
                        array_push($error, "Password ini sudah terdaftar.");
                    }
		            if(count($error) == 0) {
		                $insert = $this->siswa->insert(
		                    array(
		                      //  'nis'      => $nis,
		                        'nama_siswa'  => $nama_siswa,
		                        'telephone_siswa'  => $telephone_siswa,
		                        'id_kelas'  => $id_kelas,
		                        'username'  => $username,
		                        'password'  => $password,
		                        'status'  => $status,
		                        'fhoto_profil' => $imageName_fhoto_profil,
		                        
		                    )
		                );

		                if($insert) {
		                    $success = "Data Berhasil di simpan.";
		                }
		            }
                }
            }


        }

       

        $this->template('insertdatasiswa', array('error' => $error ,'success' => $success,'kelas' => $kelas));


       
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

        $this->template('insertdatasiswa', array('error_upload' => $error_upload, 'success_upload' => $success_upload));
   
    }
}
?>