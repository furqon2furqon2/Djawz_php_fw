<?php

use \modules\controllers\mainController;

class detailkurikulumsoalController extends mainController {

    public function index() {

        $data = $_SESSION["login"];
        
        $id_kurikulum     = isset($_GET["id_kurikulum"])  ? $_GET["id_kurikulum"]   : "";
        $nama_kelas     = isset($_GET["nama_kelas"])  ? $_GET["nama_kelas"]   : "";
        $nama_matapelajaran     = isset($_GET["nama_matapelajaran"])  ? $_GET["nama_matapelajaran"]   : "";
        $nama_pertemuan     = isset($_GET["nama_pertemuan"])  ? $_GET["nama_pertemuan"]   : "";
        $id_pertemuan     = isset($_GET["id_pertemuan"])  ? $_GET["id_pertemuan"]   : "";
        
       
       $this->model("soal");
       $soal = $this->soal->getWHere(array(
        'id_pertemuan'	=> $id_pertemuan
       ));
     

    $this->template('detailkurikulumsoal', array('nama_kelas' => $nama_kelas,'nama_matapelajaran' => $nama_matapelajaran,'id_kurikulum' => $id_kurikulum,'nama_pertemuan' => $nama_pertemuan,'id_pertemuan' => $id_pertemuan,'soal' => $soal));
       
    }
    
    
    
    
    
    public function insert() {
        
        $error      = array();
        $success    = null;

        
        $id_pertemuan      = isset($_GET["id_pertemuan"])     ? $_GET["id_pertemuan"]      : "";
        $id_kurikulum       = isset($_GET["id_kurikulum"])     ? $_GET["id_kurikulum"]      : "";
        $nama_kelas       = isset($_GET["nama_kelas"])     ? $_GET["nama_kelas"]      : "";
        $nama_matapelajaran       = isset($_GET["nama_matapelajaran"])     ? $_GET["nama_matapelajaran"]      : "";
        $nama_pertemuan       = isset($_GET["nama_pertemuan"])     ? $_GET["nama_pertemuan"]      : "";
        
        
        
        
        $this->model("soal");
        $soal = $this->soal->getWHere(array(
         'id_pertemuan'	=> $id_pertemuan
        ));
     
        
        

        if($_SERVER["REQUEST_METHOD"] == "POST") {

            $soal_urut       = isset($_POST["soal_urut"])     ? $_POST["soal_urut"]      : "";
            $soal       = isset($_POST["soal"])     ? $_POST["soal"]      : "";
            $pilihan_a       = isset($_POST["pilihan_a"])     ? $_POST["pilihan_a"]      : "";
            $pilihan_b       = isset($_POST["pilihan_b"])     ? $_POST["pilihan_b"]      : "";
            $pilihan_c       = isset($_POST["pilihan_c"])     ? $_POST["pilihan_c"]      : "";
            $jawaban       = isset($_POST["jawaban"])     ? $_POST["jawaban"]      : "";

    
            if(empty($soal_urut) || $soal_urut == "") {
                array_push($error, "Urutan soal harus diisi.");
            }
            if(empty($soal) || $soal == "") {
                array_push($error, "Isi soal harus diisi.");
            }
            if(empty($pilihan_a) || $pilihan_a == "") {
                array_push($error, "Isi pilihan A harus diisi.");
            }
            if(empty($pilihan_b) || $pilihan_b == "") {
                array_push($error, "Isi pilihan B harus diisi.");
            }
            if(empty($pilihan_c) || $pilihan_c == "") {
                array_push($error, "Isi pilihan C harus diisi.");
            }
            if(empty($jawaban) || $jawaban == "") {
                array_push($error, "Jawaban harus diisi.");
            }
            

            if(count($error) == 0) {
                
                $cek = $this->soal->getWhere(array(
		          'id_pertemuan' => $id_pertemuan,
		          'soal_urut' => $soal_urut
		        ));
		        if(count($cek) > 0) {
		            array_push($error, "soal dengan urutan $soal_urut telah terdaftar.");
		        }
                if(count($error) == 0) {
                
		                $insert = $this->soal->insert(
		                    array(
		                        'id_pertemuan'      => $id_pertemuan,
		                        'soal_urut'      => $soal_urut,
		                        'soal'      => $soal,
		                        'pilihan_a'  => $pilihan_a,
		                        'pilihan_b'  => $pilihan_b,
		                        'pilihan_c'  => $pilihan_c,
		                        'jawaban'  => $jawaban
		                    )
		                );

		                if($insert) {
		                    $success = "Data Berhasil di simpan.";
		                }
		                
                }
		            
                
            }


        }

        
       
    $this->model("soal");
       $soal = $this->soal->getWHere(array(
        'id_pertemuan'	=> $id_pertemuan
       ));
     

    $this->template('detailkurikulumsoal', array('error' => $error ,'success' => $success,'nama_kelas' => $nama_kelas,'nama_matapelajaran' => $nama_matapelajaran,'id_kurikulum' => $id_kurikulum,'nama_pertemuan' => $nama_pertemuan,'id_pertemuan' => $id_pertemuan,'soal' => $soal));
      
        
    }
    

}
?>