<?php

use \modules\controllers\mainController;

class kelasController extends mainController {

    public function index() {

        $data = $_SESSION["login"];
        $this->model('kelas');
        $kelas = $this->kelas->get();


     

        $this->template('kelas', array('kelas' => $kelas));


       
    }

    public function insert() {
        
        $error      = array();
        $success    = null;
        
        $this->model('kelas');
        $kelas = $this->kelas->get();

        

        if($_SERVER["REQUEST_METHOD"] == "POST") {

            
            $nama_kelas       = isset($_POST["nama_kelas"])     ? $_POST["nama_kelas"]      : "";

            
            if(empty($nama_kelas) || $nama_kelas == "") {
                array_push($error, "Nama kelas harus diisi.");
            }
            
            if(count($error) == 0) {
                
                    $cek = $this->kelas->getWhere(array(
		                'nama_kelas' => $nama_kelas
		            ));
		            if(count($cek) > 0) {
		            	array_push($error, "Data kelas dengan nama $nama_kelas telah terdaftar.");
		            }
                    
		            if(count($error) == 0) {

		                $insert = $this->kelas->insert(
		                    array(
		                        'nama_kelas'      => $nama_kelas
		                    )
		                );

		                if($insert) {
		                    $success = "Data Berhasil di simpan.";
		                }
		            }
		           
            }


        }

        $this->template('kelas', array('error' => $error ,'success' => $success,'kelas' => $kelas));
     
        
    }

    public function edit() {
        
        $error      = array();
        $success    = null;
        
        $this->model('kelas');
        $kelas = $this->kelas->get();


        $id_kelas = isset($_GET["id_kelas"]) ? $_GET["id_kelas"] : '';
           
        if($_SERVER["REQUEST_METHOD"] == "POST") {

            
            $nama_kelas       = isset($_POST["nama_kelas"])     ? $_POST["nama_kelas"]      : "";

            
            if(empty($nama_kelas) || $nama_kelas == "") {
                array_push($error, "Nama kelas harus diisi.");
            }
            
            if(count($error) == 0) {
                
                $dataUpdate["nama_kelas"] = $nama_kelas;
                $update = $this->kelas->update($dataUpdate, array('id_kelas' => $id_kelas));
                if($update) {
                        $this->redirect("../AdministratorRMJ/?page=kelas"); 
                }

            }


        }
        
         $this->template('kelas', array('error' => $error ,'success' => $success,'kelas' => $kelas));
        
    }



}
?>