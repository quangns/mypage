<?php

include "dbCon.php";
class list_danhmuc {
    private $db;
    private $conn;
    function __construct() {
        $this->db = new dbCon();
        $this->conn = $this->db->MyConnect();
    }

    public function lay_danhmuc() {
        try {
            $qr = " select * from danhmuc";
            $stmt = $this->conn->prepare($qr);
            $stmt->execute();
            // $sql_query = $this->conn->query($qr);
            // $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $result= $stmt->fetchAll(PDO::FETCH_OBJ);
            return $result;
            // foreach($stmt as $row) {
            //     echo $row['tenmuc'];
            // }
            // return $sql_query;
        }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function sothich($iddanhmuc) {
        try {
            $qr = " select * from sothich
                    where id_danhmuc =$iddanhmuc;
            ";
            $stmt = $this->conn->prepare($qr);
            $stmt->execute();
            $result= $stmt->fetchAll(PDO::FETCH_OBJ);
            return $result;
        }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

    }

    public function kinhnghiem() {
        try {
            $qr = " select * from kinhnghiem ";
            $stmt = $this->conn->prepare($qr);
            $stmt->execute();
            $result= $stmt->fetchAll(PDO::FETCH_OBJ);
            return $result;
        }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
?>
