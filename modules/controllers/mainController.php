<?php
/**
 * @Author  : Djawz Coding<muchammadfurqon.programer@yahoo.co.id>
 * @Date    : 09/19/16 - 1:08 AM
 */

namespace modules\controllers;
use \Controller;

class mainController extends Controller {

    protected $login;

    public function __construct() {

        $this->login = isset($_SESSION["login"]) ? $_SESSION["login"] : '';

        if(!$this->login) {

            $this->redirect(SITE_URL . "?page=login");
        
            
       

        }

    }


    protected function template($viewName, $data = array()) {


        // $this->model("lapangan");

        // $lapangan = $this->lapangan->get(
        //     array(
        //         'limit' => '0,5'
        //     )
        // );


        $view = $this->view('template');
        $view->bind('viewName', $viewName);
        // $view->bind('data', array_merge($data, array('login' => $this->login,'lapangan' => $lapangan)));
        $view->bind('data', array_merge($data, array('login' => $this->login)));
       
    }

}

?>