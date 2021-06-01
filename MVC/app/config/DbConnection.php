<?php



class DbConnection{
    static function connect(){
        
        define('HOST','localhost');
        define('USERS','root');
        define('PASS','');
        define('DBNAME','crud');
        $connection = mysqli_connect(HOST,USERS,PASS,DBNAME);
        if (!$connection){
            echo "un
            
                connected";
        }
        return $connection;
    }
}