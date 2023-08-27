<?php

use \modules\controllers\mainController;

class profileController extends mainController {

    public function index() {

        $data = $_SESSION["login"];

        $this->template('profile');
       
    }
    
    public function detail() {

        $nik = isset($_GET["nik"]) ? $_GET["nik"] : '0';
        $this->model('useradmin');
        $useradmin = $this->useradmin->getWhere(
            array(
                'nik'  => $nik
            )
        );

        $this->template('profile',array('useradmin' => $useradmin));
       
    }
    
    public function update_profile() {
        
        $error      = array();
        $success    = null;
        
        $nik = isset($_GET["nik"]) ? $_GET["nik"] : '0';
        $id_karyawan = isset($_GET["id_karyawan"]) ? $_GET["id_karyawan"] : '0';
        
        $this->model('useradmin');
        $useradmin = $this->useradmin->getWhere(
            array(
                'id_karyawan'  => $id_karyawan
            )
        );
        
        if($_SERVER["REQUEST_METHOD"] == "POST") {


            $fhoto_profil           = isset($_FILES["fhoto_profil"])      ? $_FILES["fhoto_profil"]       : "";
            
            
            if(empty($fhoto_profil["name"]) || $fhoto_profil["name"] == "") {
                array_push($error, "Gambar tidak boleh kosong");
            }

            if(!empty($fhoto_profil["name"]) && $fhoto_profil["type"] != 'image/jpg' && $fhoto_profil["type"] != 'image/jpeg' && $fhoto_profil["type"] != 'image/png') {
                array_push($error, "Gambar hanya boleh .JPG/.PNG");
            }
            

            if(count($error) == 0) {

                $imageName_fhoto_profil = $fhoto_profil["name"];

                    
                if(!empty($imageName_fhoto_profil) || $imageName_fhoto_profil != "") {
                // array_push($error, "Fhoto harus di isi.");
                    if($fhoto_profil["name"]) {
                        $imageName_fhoto_profil = date("h_i_s_Y_m_d_") . str_replace(" ","_", $nik) . '.jpg';
                        $dataUpdate["fhoto_profil"] = $imageName_fhoto_profil;

                        if(!empty($useradmin[0]->fhoto_profil) || $useradmin[0]->fhoto_profil != "") {
                            unlink('public/images/fhoto_profil/' . $useradmin[0]->fhoto_profil);
                            move_uploaded_file($fhoto_profil["tmp_name"], 'public/images/fhoto_profil/' . $imageName_fhoto_profil);
                        }else{
                            move_uploaded_file($fhoto_profil["tmp_name"], 'public/images/fhoto_profil/' . $imageName_fhoto_profil);
                        }
                    }
                }
                
                if(count($error) == 0) {
                    ///form edit
                    $update = $this->useradmin->update($dataUpdate, array('id_karyawan' => $id_karyawan));

                    if($update) {
                        
                        $success = "Data Berhasil di simpan.";

                        
                    }
                }
            }


        }
        
        $this->template('profile',array('error' => $error ,'success' => $success,'useradmin' => $useradmin));
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    public function update_cv() {
        
        $error      = array();
        $success    = null;
        
        $nik = isset($_GET["nik"]) ? $_GET["nik"] : '0';
        $id_karyawan = isset($_GET["id_karyawan"]) ? $_GET["id_karyawan"] : '0';
        
        $this->model('useradmin');
        $useradmin = $this->useradmin->getWhere(
            array(
                'id_karyawan'  => $id_karyawan
            )
        );
        
        if($_SERVER["REQUEST_METHOD"] == "POST") {


            $fhoto_dokumen_cv           = isset($_FILES["fhoto_dokumen_cv"])      ? $_FILES["fhoto_dokumen_cv"]       : "";
            
            
            if(empty($fhoto_dokumen_cv["name"]) || $fhoto_dokumen_cv["name"] == "") {
                array_push($error, "Gambar tidak boleh kosong");
            }

            if(!empty($fhoto_dokumen_cv["name"]) && $fhoto_dokumen_cv["type"] != 'image/jpg' && $fhoto_dokumen_cv["type"] != 'image/jpeg' && $fhoto_dokumen_cv["type"] != 'image/png') {
                array_push($error, "Gambar hanya boleh .JPG/.PNG");
            }
            

            if(count($error) == 0) {

                $imageName_fhoto_profil = $fhoto_dokumen_cv["name"];

                    
                if(!empty($imageName_fhoto_profil) || $imageName_fhoto_profil != "") {
                // array_push($error, "Fhoto harus di isi.");
                    if($fhoto_dokumen_cv["name"]) {
                        $imageName_fhoto_profil = date("h_i_s_Y_m_d_") . str_replace(" ","_", $nik) . '.jpg';
                        $dataUpdate["fhoto_dokumen_cv"] = $imageName_fhoto_profil;

                        if(!empty($useradmin[0]->fhoto_dokumen_cv) || $useradmin[0]->fhoto_dokumen_cv != "") {
                            unlink('public/images/fhoto_dokumen_cv/' . $useradmin[0]->fhoto_dokumen_cv);
                            move_uploaded_file($fhoto_dokumen_cv["tmp_name"], 'public/images/fhoto_dokumen_cv/' . $imageName_fhoto_profil);
                        }else{
                            move_uploaded_file($fhoto_dokumen_cv["tmp_name"], 'public/images/fhoto_dokumen_cv/' . $imageName_fhoto_profil);
                        }
                    }
                }
                
                if(count($error) == 0) {
                    ///form edit
                    $update = $this->useradmin->update($dataUpdate, array('id_karyawan' => $id_karyawan));

                    if($update) {
                        
                        $success = "Data Berhasil di simpan.";

                        
                    }
                }
            }


        }
        
        $this->template('profile',array('error' => $error ,'success' => $success,'useradmin' => $useradmin));
    }
    
    
    
    
    
    
    
    
    public function update_ijazah() {
        
        $error      = array();
        $success    = null;
        
        $nik = isset($_GET["nik"]) ? $_GET["nik"] : '0';
        $id_karyawan = isset($_GET["id_karyawan"]) ? $_GET["id_karyawan"] : '0';
        
        $this->model('useradmin');
        $useradmin = $this->useradmin->getWhere(
            array(
                'id_karyawan'  => $id_karyawan
            )
        );
        
        if($_SERVER["REQUEST_METHOD"] == "POST") {


            $fhoto_dokumen_ijazah           = isset($_FILES["fhoto_dokumen_ijazah"])      ? $_FILES["fhoto_dokumen_ijazah"]       : "";
            
            
            if(empty($fhoto_dokumen_ijazah["name"]) || $fhoto_dokumen_ijazah["name"] == "") {
                array_push($error, "Gambar tidak boleh kosong");
            }

            if(!empty($fhoto_dokumen_ijazah["name"]) && $fhoto_dokumen_ijazah["type"] != 'image/jpg' && $fhoto_dokumen_ijazah["type"] != 'image/jpeg' && $fhoto_dokumen_ijazah["type"] != 'image/png') {
                array_push($error, "Gambar hanya boleh .JPG/.PNG");
            }
            

            if(count($error) == 0) {

                $imageName_fhoto_profil = $fhoto_dokumen_ijazah["name"];

                    
                if(!empty($imageName_fhoto_profil) || $imageName_fhoto_profil != "") {
                // array_push($error, "Fhoto harus di isi.");
                    if($fhoto_dokumen_ijazah["name"]) {
                        $imageName_fhoto_profil = date("h_i_s_Y_m_d_") . str_replace(" ","_", $nik) . '.jpg';
                        $dataUpdate["fhoto_dokumen_ijazah"] = $imageName_fhoto_profil;

                        if(!empty($useradmin[0]->fhoto_dokumen_ijazah) || $useradmin[0]->fhoto_dokumen_ijazah != "") {
                            unlink('public/images/fhoto_dokumen_ijazah/' . $useradmin[0]->fhoto_dokumen_ijazah);
                            move_uploaded_file($fhoto_dokumen_ijazah["tmp_name"], 'public/images/fhoto_dokumen_ijazah/' . $imageName_fhoto_profil);
                        }else{
                            move_uploaded_file($fhoto_dokumen_ijazah["tmp_name"], 'public/images/fhoto_dokumen_ijazah/' . $imageName_fhoto_profil);
                        }
                    }
                }
                
                if(count($error) == 0) {
                    ///form edit
                    $update = $this->useradmin->update($dataUpdate, array('id_karyawan' => $id_karyawan));

                    if($update) {
                        
                        $success = "Data Berhasil di simpan.";

                        
                    }
                }
            }


        }
        
        $this->template('profile',array('error' => $error ,'success' => $success,'useradmin' => $useradmin));
    }












    public function update_idcard() {
        
        $error      = array();
        $success    = null;
        
        $nik = isset($_GET["nik"]) ? $_GET["nik"] : '0';
        $id_karyawan = isset($_GET["id_karyawan"]) ? $_GET["id_karyawan"] : '0';
        
        $this->model('useradmin');
        $useradmin = $this->useradmin->getWhere(
            array(
                'id_karyawan'  => $id_karyawan
            )
        );
        
        if($_SERVER["REQUEST_METHOD"] == "POST") {


            $fhoto_id_card           = isset($_FILES["fhoto_id_card"])      ? $_FILES["fhoto_id_card"]       : "";
            
            
            if(empty($fhoto_id_card["name"]) || $fhoto_id_card["name"] == "") {
                array_push($error, "Gambar tidak boleh kosong");
            }

            if(!empty($fhoto_id_card["name"]) && $fhoto_id_card["type"] != 'image/jpg' && $fhoto_id_card["type"] != 'image/jpeg' && $fhoto_id_card["type"] != 'image/png') {
                array_push($error, "Gambar hanya boleh .JPG/.PNG");
            }
            

            if(count($error) == 0) {

                $imageName_fhoto_profil = $fhoto_id_card["name"];

                    
                if(!empty($imageName_fhoto_profil) || $imageName_fhoto_profil != "") {
                // array_push($error, "Fhoto harus di isi.");
                    if($fhoto_id_card["name"]) {
                        $imageName_fhoto_profil = date("h_i_s_Y_m_d_") . str_replace(" ","_", $nik) . '.jpg';
                        $dataUpdate["fhoto_id_card"] = $imageName_fhoto_profil;

                        if(!empty($useradmin[0]->fhoto_id_card) || $useradmin[0]->fhoto_id_card != "") {
                            unlink('public/images/fhoto_id_card/' . $useradmin[0]->fhoto_id_card);
                            move_uploaded_file($fhoto_id_card["tmp_name"], 'public/images/fhoto_id_card/' . $imageName_fhoto_profil);
                        }else{
                            move_uploaded_file($fhoto_id_card["tmp_name"], 'public/images/fhoto_id_card/' . $imageName_fhoto_profil);
                        }
                    }
                }
                
                if(count($error) == 0) {
                    ///form edit
                    $update = $this->useradmin->update($dataUpdate, array('id_karyawan' => $id_karyawan));

                    if($update) {
                        
                        $success = "Data Berhasil di simpan.";

                        
                    }
                }
            }


        }
        
        $this->template('profile',array('error' => $error ,'success' => $success,'useradmin' => $useradmin));
    }
    
    
    
    
    
    public function update_data() {
        
        $error      = array();
        $success    = null;
        
        $nik = isset($_GET["nik"]) ? $_GET["nik"] : '0';
        $id_karyawan = isset($_GET["id_karyawan"]) ? $_GET["id_karyawan"] : '0';
        
        $this->model('useradmin');
        $useradmin = $this->useradmin->getWhere(
            array(
                'id_karyawan'  => $id_karyawan
            )
        );
        
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $username       = isset($_POST["username"])     ? $_POST["username"]      : "";
            $password       = isset($_POST["password"])     ? $_POST["password"]      : "";
            $alamat       = isset($_POST["alamat"])     ? $_POST["alamat"]      : "";
            $nik       = isset($_POST["nik"])     ? $_POST["nik"]      : "";

            if($password != "" || !empty($password))
            {
                $dataUpdate["username"] = $username;
                $dataUpdate["password"] = $password;
                $dataUpdate["alamat"] = $alamat;
                $dataUpdate["nik"] = $nik;
                
                $update = $this->useradmin->update($dataUpdate, array('id_karyawan' => $id_karyawan));
                if($update) {
                        $this->redirect("../AdministratorRMJ/?page=profile&action=detail&nik=$nik"); 
                }
            }
            else if($password == "" || empty($password))
            {
                $dataUpdate["username"] = $username;
                $dataUpdate["alamat"] = $alamat;
                $dataUpdate["nik"] = $nik;
                
                $update = $this->useradmin->update($dataUpdate, array('id_karyawan' => $id_karyawan));
                if($update) {
                        $this->redirect("../AdministratorRMJ/?page=profile&action=detail&nik=$nik"); 
                }
            }


        }
        
        $this->template('profile',array('error' => $error ,'success' => $success,'useradmin' => $useradmin));
    }
    
    
    
    
}
?>