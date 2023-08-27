<?php

use \modules\controllers\mainController;

class homeController extends mainController {

    public function index() {

        $data = $_SESSION["login"];

        $this->model('useradmin');
        $data = $this->useradmin->get();
        
        

        
        

        $this->template('home', array('useradmin' => $data));
    }

    public function detail() {

        $nik = isset($_GET["nik"]) ? $_GET["nik"] : '0';
        $this->model('useradmin');
        $data = $this->useradmin->getWhere(
            array(
                'nik'  => $nik
            )
        );


        // $this->template('detailKaryawan',array('useradmin' => $data[0]));
        $this->template('home',array('useradmin' => $data[0]));



       
    }

    public function deleted() {

        $nik = isset($_GET["nik"]) ? $_GET["nik"] : 0;

        $this->model('useradmin');

        $delete = $this->useradmin->delete(array('nik' => $nik));

        if($delete) {
            $this->redirect("../AdministratorRMJ"); 
        }

    }

    public function update() {

        $nik = isset($_GET["nik"]) ? $_GET["nik"] : '0';
        $this->model('useradmin');

        $data = $this->useradmin->getWhere(
            array(
                'nik'  => $nik
            )
        );

        $error      = array();
        $success    = null;

        

        if($_SERVER["REQUEST_METHOD"] == "POST") {


            $fhoto_profil           = isset($_FILES["fhoto_profil"])      ? $_FILES["fhoto_profil"]       : "";
            $fhoto_dokumen_cv           = isset($_FILES["fhoto_dokumen_cv"])      ? $_FILES["fhoto_dokumen_cv"]       : "";
            $fhoto_dokumen_ijazah           = isset($_FILES["fhoto_dokumen_ijazah"])      ? $_FILES["fhoto_dokumen_ijazah"]       : "";
            $fhoto_id_card           = isset($_FILES["fhoto_id_card"])      ? $_FILES["fhoto_id_card"]       : "";

            
            
            

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

            if(count($error) == 0) {

                $imageName_fhoto_profil = $fhoto_profil["name"];
                $imageName_fhoto_dokumen_cv = $fhoto_dokumen_cv["name"];
                $imageName_fhoto_dokumen_ijazah = $fhoto_dokumen_ijazah["name"];
                $imageName_fhoto_id_card = $fhoto_id_card["name"];

                    
                if(!empty($imageName_fhoto_profil) || $imageName_fhoto_profil != "") {
                // array_push($error, "Fhoto harus di isi.");
                    if($fhoto_profil["name"]) {
                        $imageName_fhoto_profil = date("h_i_s_Y_m_d_") . str_replace(" ","_", $nik) . '.jpg';
                        $dataUpdate["fhoto_profil"] = $imageName_fhoto_profil;

                        if(!empty($data[0]->fhoto_profil) || $data[0]->fhoto_profil != "") {
                            unlink('public/images/fhoto_profil/' . $data[0]->fhoto_profil);
                            move_uploaded_file($fhoto_profil["tmp_name"], 'public/images/fhoto_profil/' . $imageName_fhoto_profil);
                        }else{
                            move_uploaded_file($fhoto_profil["tmp_name"], 'public/images/fhoto_profil/' . $imageName_fhoto_profil);
                        }
                    }
                }

                    
                if(!empty($imageName_fhoto_dokumen_cv) || $imageName_fhoto_dokumen_cv != "") {
                // array_push($error, "Fhoto Dokumen CV harus di isi.");
                    if($fhoto_dokumen_cv["name"]) {
                        $imageName_fhoto_dokumen_cv = date("h_i_s_Y_m_d_") . str_replace(" ","_", $nik) . '.jpg';
                        $dataUpdate["fhoto_dokumen_cv"] = $imageName_fhoto_dokumen_cv;

                        if(!empty($data[0]->fhoto_dokumen_cv) || $data[0]->fhoto_dokumen_cv != "") {
                            unlink('public/images/fhoto_dokumen_cv/' . $data[0]->fhoto_dokumen_cv);
                    move_uploaded_file($fhoto_dokumen_cv["tmp_name"], 'public/images/fhoto_dokumen_cv/' . $imageName_fhoto_dokumen_cv);
                        }else{
                    move_uploaded_file($fhoto_dokumen_cv["tmp_name"], 'public/images/fhoto_dokumen_cv/' . $imageName_fhoto_dokumen_cv);
                        }
                    }
                }

                    
                if(!empty($imageName_fhoto_dokumen_ijazah) || $imageName_fhoto_dokumen_ijazah != "") {
                // array_push($error, "Fhoto harus di isi.");
                    if($fhoto_dokumen_ijazah["name"]) {
                        $imageName_fhoto_dokumen_ijazah = date("h_i_s_Y_m_d_") . str_replace(" ","_", $nik) . '.jpg';
                        $dataUpdate["fhoto_dokumen_ijazah"] = $imageName_fhoto_dokumen_ijazah;

                        if(!empty($data[0]->fhoto_dokumen_ijazah) || $data[0]->fhoto_dokumen_ijazah != "") {
                            unlink('public/images/fhoto_dokumen_ijazah/' . $data[0]->fhoto_dokumen_ijazah);
        move_uploaded_file($fhoto_dokumen_ijazah["tmp_name"], 'public/images/fhoto_dokumen_ijazah/' . $imageName_fhoto_dokumen_ijazah);
                        }else{
        move_uploaded_file($fhoto_dokumen_ijazah["tmp_name"], 'public/images/fhoto_dokumen_ijazah/' . $imageName_fhoto_dokumen_ijazah);
                        }
                    }
                }

                
                if(!empty($imageName_fhoto_id_card) || $imageName_fhoto_id_card != "") {
                // array_push($error, "Fhoto harus di isi.");
                    if($fhoto_id_card["name"]) {
                        $imageName_fhoto_id_card = date("h_i_s_Y_m_d_") . str_replace(" ","_", $nik) . '.jpg';
                        $dataUpdate["fhoto_id_card"] = $imageName_fhoto_id_card;
                        
                        if(!empty($data[0]->fhoto_id_card) || $data[0]->fhoto_id_card != "") {
                            unlink('public/images/fhoto_id_card/' . $data[0]->fhoto_id_card);
                            move_uploaded_file($fhoto_id_card["tmp_name"], 'public/images/fhoto_id_card/' . $imageName_fhoto_id_card);
                        }else{
                            move_uploaded_file($fhoto_id_card["tmp_name"], 'public/images/fhoto_id_card/' . $imageName_fhoto_id_card);
                        }
                    } 
                }

                if(count($error) == 0) {
                    ///form edit
                    $update = $this->useradmin->update($dataUpdate, array('nik' => $nik));

                    if($update) {
                        
                        $success = "Data Berhasil di simpan.";

                        
                    }
                }
            }


        }

     
        $this->template('frmEditDataKaryawan',array('useradmin' => $data[0], 'error' => $error, 'success' => $success));

    }

    


}
?>