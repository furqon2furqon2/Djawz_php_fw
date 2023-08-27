<?php

use \modules\controllers\mainController;

class siswaController extends mainController {

    public function index() {

        $data = $_SESSION["login"];
        
        $this->model('siswa');
        $this->model('kelas');
        
        $siswa = $this->siswa->getJoin('kelas',
            array(
                'siswa.id_kelas' => 'kelas.id_kelas'
            ),
            'JOIN',
            array(
                'siswa.status' => 'Active'
            )
        );


     

        $this->template('siswa', array('siswa' => $siswa));


       
    }
    
    public function delete() {
        $nis = isset($_GET["nis"]) ? $_GET["nis"] : 0;
        $this->model('siswa');
        $this->model('jawaban_soal');
        
        $delete1 = $this->siswa->delete(array('nis' => $nis));

        if($delete1) {
            $delete2 = $this->jawaban_soal->delete(array('nis' => $nis));
            if($delete2) {
                $this->redirect("../AdministratorRMJ?page=siswa"); 
            } 
        }
        
        
    }

    public function update() {
        
        $error      = array();
        $success    = null;
        
        $nis = isset($_GET["nis"]) ? $_GET["nis"] : 0;
        $this->model('siswa');
        $siswa = $this->siswa->getWHere(array(
        	'nis'	=> $nis
        ));
        
        $password_lama = $siswa[0]->password;
        
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

                array_push($error, "username baru harus di isi.");
            }

            if(empty($password) || $password == "") {

                array_push($error, "password baru harus di isi.");
            }
            
            if($password == $password_lama) {

                array_push($error, "password baru tidak boleh sama dengan password sebelumnya.");
            }

            $imageName_fhoto_profil = $fhoto_profil["name"];
               

            if($fhoto_profil["name"]) {
                $imageName_fhoto_profil = date("h_i_s_Y_m_d_") . str_replace(" ","_", $username) . '.jpg';
                move_uploaded_file($fhoto_profil["tmp_name"], 'public/images/fhoto_profil/' . $imageName_fhoto_profil);
            }
            if(empty($imageName_fhoto_profil) || $imageName_fhoto_profil == "") {
                array_push($error, "Fhoto baru harus di isi.");
            }
                
            if(count($error) == 0) {

                	
                    $cekpassword = $this->siswa->getWhere(array(
                        'password' => $password
                    ));
                    if(count($cekpassword) > 0) {
                        array_push($error, "Password ini sudah terdaftar.");
                    }
		            if(count($error) == 0) {
		                
		                $dataUpdate["fhoto_profil"] = $imageName_fhoto_profil;
		                $dataUpdate["nama_siswa"] = $nama_siswa;
		                $dataUpdate["telephone_siswa"] = $telephone_siswa;
		                $dataUpdate["id_kelas"] = $id_kelas;
		                $dataUpdate["username"] = $username;
		                $dataUpdate["password"] = $password;
		                $dataUpdate["status"] = $status;
		                
		                $update = $this->siswa->update($dataUpdate, array('nis' => $nis));
                        if($update) {
                             $success = "Perubahan data siswa berhasil.";
                        }
                
		            }
                
            }
        }
        $this->template('editSiswa', array('error' => $error ,'success' => $success,'siswa' => $siswa,'kelas' => $kelas));
    }

}
?>