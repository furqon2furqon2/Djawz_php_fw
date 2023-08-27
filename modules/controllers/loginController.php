<?php
/**
 * @Author  : Djawz Coding<muchammadfurqon.programer@yahoo.co.id>
 * @Date    : 09/19/16 - 7:12 PM
 */

class LoginController extends Controller {

    public function index() {
	       
        
        // echo '<meta http-equiv="refresh" content="60;url=../">';

        $login = isset($_SESSION["login"]) ? $_SESSION["login"] : "";

        if($login) {
		
            // $this->redirect("../administrator"); 
            $this->redirect("../AdministratorRMJ"); 
			 
        }

		$message = array();

        if($_SERVER["REQUEST_METHOD"] == "POST") {

            $message = array(
                'success'   => false,
                'message'   => 'Maaf Username/Password Salah.'
               

            );

           
            $username = isset($_POST["username"]) ? $_POST["username"] : "";
            $password = isset($_POST["password"]) ? $_POST["password"] : "";
			
			$this->model("useradmin");
            $useradmin = $this->useradmin->get();
			
            $this->model('useradmin');
			
            $useradmin = $this->useradmin->getWhere(array(
                'username' => $username,
                'password' => md5($password)
            ));

            if(count($useradmin) > 0) {

                $message    = array(
                    'success'   => true,
                    'message'   => 'Selamat anda berhasil login.'
                );

                $_SESSION["login"] = $useradmin[0];

                echo '<meta http-equiv="refresh" content="1;url=index.php">';

            }


        }
		
        // $this->template('login', array('about' => $about));
        $view = $this->view('login', array())->bind('message' , $message );

    }


    public function logout() {

        unset($_SESSION["login"]);

        // $this->redirect('../administrator');
        $this->redirect('../AdministratorRMJ');

    }




}
?>