<?php

use \modules\controllers\mainController;

class matapelajaranController extends mainController {

    public function index() {

        $data = $_SESSION["login"];
        $this->model('matapelajaran');
        $matapelajaran = $this->matapelajaran->get();


     

        $this->template('matapelajaran', array('matapelajaran' => $matapelajaran));


       
    }
    
    
    
    public function insert() {
        
        $error      = array();
        $success    = null;
        
        $this->model('matapelajaran');
        $matapelajaran = $this->matapelajaran->get();

        

        if($_SERVER["REQUEST_METHOD"] == "POST") {

            
            $nama_matapelajaran      = isset($_POST["nama_matapelajaran"])     ? $_POST["nama_matapelajaran"]      : "";

            
            if(empty($nama_matapelajaran) || $nama_matapelajaran == "") {
                array_push($error, "Nama mata pelajaran harus dipilih.");
            }
            
            if(count($error) == 0) {
                
                    $cek = $this->matapelajaran->getWhere(array(
		                'nama_matapelajaran' => $nama_matapelajaran
		            ));
		            if(count($cek) > 0) {
		            	array_push($error, "Data mata pelajaran dengan nama $nama_matapelajaran telah terdaftar.");
		            }
                    
		            if(count($error) == 0) {

		                $insert = $this->matapelajaran->insert(
		                    array(
		                        'nama_matapelajaran'      => $nama_matapelajaran
		                    )
		                );

		                if($insert) {
		                    $success = "Data Berhasil di simpan.";
		                }
		            }
		           
            }


        }

        $this->template('matapelajaran', array('error' => $error ,'success' => $success,'matapelajaran' => $matapelajaran));
     
        
    }

    public function edit() {
        
        $error      = array();
        $success    = null;
        
        $this->model('matapelajaran');
        $matapelajaran = $this->matapelajaran->get();


        $id_matapelajaran = isset($_GET["id_matapelajaran"]) ? $_GET["id_matapelajaran"] : '';
           
        if($_SERVER["REQUEST_METHOD"] == "POST") {

            
            $nama_matapelajaran       = isset($_POST["nama_matapelajaran"])     ? $_POST["nama_matapelajaran"]      : "";

            
            if(empty($nama_matapelajaran) || $nama_matapelajaran == "") {
                array_push($error, "Nama Mata Pelajaran harus diisi.");
            }
            
            if(count($error) == 0) {
                
                $dataUpdate["nama_matapelajaran"] = $nama_matapelajaran;
                $update = $this->matapelajaran->update($dataUpdate, array('id_matapelajaran' => $id_matapelajaran));
                if($update) {
                        $this->redirect("../AdministratorRMJ/?page=matapelajaran"); 
                }

            }


        }
        
         $this->template('matapelajaran', array('error' => $error ,'success' => $success,'matapelajaran' => $matapelajaran));
        
    }


}
?>