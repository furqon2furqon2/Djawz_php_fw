<?php

use \modules\controllers\mainController;

class detailkurikulumController extends mainController {

    public function index() {

        $data = $_SESSION["login"];
        
        $id_kurikulum     = isset($_GET["id_kurikulum"])  ? $_GET["id_kurikulum"]   : "";
        $nama_kelas     = isset($_GET["nama_kelas"])  ? $_GET["nama_kelas"]   : "";
        $nama_matapelajaran     = isset($_GET["nama_matapelajaran"])  ? $_GET["nama_matapelajaran"]   : "";
        
        $this->model("pertemuan");
        $pertemuan = $this->pertemuan->getWHere(array(
        	'id_kurikulum'	=> $id_kurikulum
        ));
        
       
     

    $this->template('detailkurikulum', array('nama_kelas' => $nama_kelas,'nama_matapelajaran' => $nama_matapelajaran,'id_kurikulum' => $id_kurikulum,'pertemuan' => $pertemuan));
       
    }
    
    
    
    public function insert() {
        
        $error      = array();
        $success    = null;

        
        $id_kurikulum       = isset($_GET["id_kurikulum"])     ? $_GET["id_kurikulum"]      : "";
        $nama_kelas       = isset($_GET["nama_kelas"])     ? $_GET["nama_kelas"]      : "";
        $nama_matapelajaran       = isset($_GET["nama_matapelajaran"])     ? $_GET["nama_matapelajaran"]      : "";
        
        $this->model("pertemuan");
        $pertemuan = $this->pertemuan->getWHere(array(
        	'id_kurikulum'	=> $id_kurikulum
        ));
        
        

        if($_SERVER["REQUEST_METHOD"] == "POST") {

            
            $nama_pertemuan       = isset($_POST["nama_pertemuan"])     ? $_POST["nama_pertemuan"]      : "";

            
            if(empty($nama_pertemuan) || $nama_pertemuan == "") {
                array_push($error, "Nama pertemuan harus diisi.");
            }

            if(count($error) == 0) {

                	$cek = $this->pertemuan->getWhere(array(
		                'id_kurikulum' => $id_kurikulum,
		                'nama_pertemuan' => $nama_pertemuan
		            ));
		            if(count($cek) > 0) {
		            	array_push($error, "Data pertemuan telah terdaftar.");
		            }
                    
		            if(count($error) == 0) {
		                $insert = $this->pertemuan->insert(
		                    array(
		                        'id_kurikulum'      => $id_kurikulum,
		                        'nama_pertemuan'  => $nama_pertemuan
		                    )
		                );

		                if($insert) {
		                    $success = "Data Berhasil di simpan.";
		                }
		            }
                
            }


        }

        
       
    
        
        $this->template('detailkurikulum', array('error' => $error ,'success' => $success,'nama_kelas' => $nama_kelas,'nama_matapelajaran' => $nama_matapelajaran,'id_kurikulum' => $id_kurikulum,'pertemuan' => $pertemuan));
     
        
    }
    
    public function upload() {
        
        $error      = array();
        $success    = null;

        $id_pertemuan      = isset($_GET["id_pertemuan"])     ? $_GET["id_pertemuan"]      : "";
        
        $id_kurikulum       = isset($_GET["id_kurikulum"])     ? $_GET["id_kurikulum"]      : "";
        $nama_kelas       = isset($_GET["nama_kelas"])     ? $_GET["nama_kelas"]      : "";
        $nama_matapelajaran       = isset($_GET["nama_matapelajaran"])     ? $_GET["nama_matapelajaran"]      : "";
        
        $this->model("pertemuan");
        $pertemuan = $this->pertemuan->getWHere(array(
        	'id_kurikulum'	=> $id_kurikulum
        ));
        
        

        if($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $file_materi  = isset($_FILES["file_materi"])      ? $_FILES["file_materi"]       : "";

           
             // if(!empty($file_materi["name"]) && $file_materi["type"] != 'pdf') {
            //     array_push($error, "file hanya boleh PDF");
            // }
            
            $imageName_file_materi = $file_materi["name"];
               

            if($file_materi["name"]) {
                $imageName_file_materi = date("h_i_s_Y_m_d_") . str_replace(" ","_", $id_pertemuan) . '.pdf';
                move_uploaded_file($file_materi["tmp_name"], 'public/images/fhoto_profil/' . $imageName_file_materi);
            }
            if(empty($imageName_file_materi) || $imageName_file_materi == "") {
                array_push($error, "File harus di isi.");
            }


            if(count($error) == 0) {
                
                $dataUpdate = array(
                    'file_materi'      => $imageName_file_materi
                );
                $update = $this->pertemuan->update($dataUpdate, array('id_pertemuan' => $id_pertemuan));
                if($update) {
                    $success = "Materi Berhasil di upload.";
                }
                
            }
            


        }

        
       
    
        
        $this->template('detailkurikulum', array('error' => $error ,'success' => $success,'nama_kelas' => $nama_kelas,'nama_matapelajaran' => $nama_matapelajaran,'id_kurikulum' => $id_kurikulum,'pertemuan' => $pertemuan));
     
        
    }
    
    

}
?>