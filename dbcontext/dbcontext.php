<?php
    function getCnx(){
        $username='root';
        $password='';
        $host='localhost';
        $databasename='stagiaire';
        try{
            $cnx=new PDO("mysql:host=$host;dbname=$databasename",$username,$password);
            return $cnx;
        }
        catch(PDOException $ex){
            echo($ex->getMessage());
        }
    }
    function closeConnection() {
        $cnx = getCnx();
        $cnx=null;
    }
?>