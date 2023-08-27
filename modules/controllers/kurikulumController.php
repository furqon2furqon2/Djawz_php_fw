<?php

use \modules\controllers\mainController;

class kurikulumController extends mainController {

    public function index() {

        $data = $_SESSION["login"];

        
        
        $this->model('kurikulum');
        $this->model('kelas');
        
        $kurikulum = $this->kurikulum->getJoin('kelas',
            array(
                'kurikulum.id_kelas' => 'kelas.id_kelas'
            )
        );

        $this->model('matapelajaran');
        $matapelajaran = $this->matapelajaran->get();
        
        $kelas = $this->kelas->get();
     

    $this->template('kurikulum', array('kurikulum' => $kurikulum,'matapelajaran' => $matapelajaran,'kelas' => $kelas));
       
    }
    
    public function insert() {
        
        $error      = array();
        $success    = null;
        
        $this->model('kurikulum');
        $this->model('kelas');
        
        $kurikulum = $this->kurikulum->getJoin('kelas',
            array(
                'kurikulum.id_kelas' => 'kelas.id_kelas'
            )
        );

        $this->model('matapelajaran');
        $matapelajaran = $this->matapelajaran->get();
        
        $kelas = $this->kelas->get();

        

        if($_SERVER["REQUEST_METHOD"] == "POST") {

            
            $id_kelas       = isset($_POST["id_kelas"])     ? $_POST["id_kelas"]      : "";
            $id_matapelajaran     = isset($_POST["id_matapelajaran"])  ? $_POST["id_matapelajaran"]   : "";

            
            if(empty($id_matapelajaran) || $id_matapelajaran == "") {
                array_push($error, "Mata pelajaran harus dipilih.");
            }
            if(empty($id_kelas) || $id_kelas == "") {
                array_push($error, "Kelas harus dipilih.");
            }
            
            
            
           

            if(count($error) == 0) {

                	$cek = $this->kurikulum->getWhere(array(
		                'id_kelas' => $id_kelas,
		                'id_matapelajaran' => $id_matapelajaran
		            ));
		            if(count($cek) > 0) {
		            	array_push($error, "Data kurikulum telah terdaftar.");
		            }
                    
		            if(count($error) == 0) {
		                $insert = $this->kurikulum->insert(
		                    array(
		                        'id_kelas'      => $id_kelas,
		                        'id_matapelajaran'  => $id_matapelajaran
		                    )
		                );

		                if($insert) {
		                    $success = "Data Berhasil di simpan.";
		                }
		            }
                
            }


        }

        $this->template('kurikulum', array('error' => $error ,'success' => $success,'kurikulum' => $kurikulum,'matapelajaran' => $matapelajaran,'kelas' => $kelas));
     
        
    }




}
?>