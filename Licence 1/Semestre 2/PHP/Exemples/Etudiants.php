<?php
    class Etudiants {

        public function index()
        {            
            $modules =  Models::get_data(); 

            require_once('template.php');   
        }
        
        public function add()
        {
            echo setMajuscule("Hello daholo nareo");

            require('formulaire.php');
        }
    }

?>