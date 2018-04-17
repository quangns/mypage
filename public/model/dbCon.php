<?php
class dbCon {
    public function MyConnect() {
        $servername = "127.0.0.1:3306";
        $username = "root";
        $password = "";
        $dbname = "myCV";
        try {
            $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
            // set the PDO error mode to exeption
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            $conn->exec("set names utf8");
            
            return $conn;
        }
        catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }
}
?>