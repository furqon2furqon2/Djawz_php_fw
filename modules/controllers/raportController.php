<?php

use \modules\controllers\mainController;

class raportController extends mainController {

    public function index() {

        $data = $_SESSION["login"];
        
        $this->model('siswa');
        $this->model('jawaban_soal');
        $this->model('kelas');

        $siswa = $this->siswa->getJoin('kelas',
            array(
                'siswa.id_kelas' => 'kelas.id_kelas'
            )
        );

     

        $this->template('raport', array('siswa' => $siswa));


       
    }

}
?>