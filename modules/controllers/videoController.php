<?php

use \modules\controllers\mainController;

class videoController extends mainController {

    public function index() {

        $data = $_SESSION["login"];

     

        $this->template('video');


       
    }



}
?>