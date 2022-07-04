<?php 

    
    class Models {

        public static function get_data()
        {
            $pdo = db_connexion();
            $q = 'SELECT * FROM modules';
            return $pdo->query($q)->fetchAll();
        }

        public static function insert() 
        {
            $pdo = db_connexion();

            $query = 'INSERT INTO ......';
            $pdo->query($query);
        }

        public function update()
        {
            $pdo = db_connexion();
        }
    }
?>