<?php

include 'connectvehicle.php';

class vehicle
{
    private $pdo;

    public function __construct()
    {
        $dbconn = new DBConnection;
        $this->pdo = $dbconn->connectDB();
    }

    public function addNew($vid, $status, $num_v, )
    {
        try {
            $sql = "INSERT INTO Vehicle(vid,status,num_v) VALUES (:clt_vid,:clt_status,:clt_num_v)";
        $result = $this->cnx->prepare($sql);
        $result->bindparam(":clt_vid", $vid);
        $result->bindparam(":clt_staus", $status);
        $result->bindparam(":clt_num_v", $num_v);
        $result->execute();
        return $result;
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }


        public function readAllC()
        {
            try {
                $req = 'SELECT * FROM Vehicle';
                $result = $this->cnx->prepare($req);
                $result->execute();
                return $result;
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

    }