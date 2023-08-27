<?php

use \modules\controllers\mainController;

class linkvideoconferenceController extends mainController {

    public function index() {

        $data = $_SESSION["login"];
        $this->model('linkvideoconference');
        $this->model('useradmin');
        $linkvideoconference = $this->linkvideoconference->getJoin('useradmin',
            array(
                'linkvideoconference.id_karyawan' => 'useradmin.id_karyawan'
            )
        );

        $this->template('linkvideoconference', array('linkvideoconference' => $linkvideoconference));
       
    }
    
    public function update() {
        
        $error      = array();
        $success    = null;
        
        $this->model('linkvideoconference');
        $this->model('useradmin');
        $linkvideoconference = $this->linkvideoconference->getJoin('useradmin',
            array(
                'linkvideoconference.id_karyawan' => 'useradmin.id_karyawan'
            )
        );

        

        if($_SERVER["REQUEST_METHOD"] == "POST") {

            
            $id_karyawan       = isset($_GET["id_karyawan"])     ? $_GET["id_karyawan"]      : "";
            $link     = isset($_POST["link"])  ? $_POST["link"]   : "";
            
            $id_link     = isset($_GET["id_link"])  ? $_GET["id_link"]   : "1";

            
            if(empty($link) || $link == "") {
                array_push($error, "Link kode autentikasi harus diisi.");
            }
            
            
        

            if(count($error) == 0) {

              $dataUpdate["link"] = $link;
		      $update = $this->linkvideoconference->update($dataUpdate, array('id_link' => $id_link));

		      if($update) {
		        $success = "Berhasil mengupdate autektikasi baru.";
		      }
		           
            }


        }

        $this->template('linkvideoconference', array('error' => $error ,'success' => $success,'linkvideoconference' => $linkvideoconference));
     
        
    }
    
    

}
?>