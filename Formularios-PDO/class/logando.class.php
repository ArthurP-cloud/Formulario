<?php

class logando extends conexao{

    public function logarCitizen(){

        session_start();

        if(!empty($_POST['email'] && !empty($_POST['senha']))){

        }else{
            header('Location: login.php');
        }

    }

}

?>