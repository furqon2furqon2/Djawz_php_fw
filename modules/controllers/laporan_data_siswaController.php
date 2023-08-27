<?php

use \modules\controllers\mainController;

class laporan_data_siswaController extends mainController {

    public function index() {

        $data = $_SESSION["login"];
        
        $this->model('kelas');
        $kelas = $this->kelas->get();

        $this->template('laporan_data_siswa', array('kelas' => $kelas));
       
    }

    


}
?>