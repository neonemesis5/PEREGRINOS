<?php

/* http://www.forosdelweb.com/f68/dudas-con-poo-getters-setters-con-db-arrays-multidimensionales-859751/ */
//include './contenido.class.php';
//include 'noticia.class.php';

class database {

    private $host;
    private $user;
    private $pass;
    private $dbName;
    private static $instance;
    private $connection;

    private function __construct() {
        
    }

    static function getInstance() {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    function connect() {//$host, $user, $pass, $dbname
        $this->host = "localhost"; //$host;
        $this->user = "root";;//"peregrin_gest";//"root";//"peregrin_pagina"; //$user;
        $this->pass = "";//"Visitante2016";//"J-29437304-6!";//54nto2015"; //$pass;//J-29437304-6!
        $this->dbName = "peregrin_db";//"peregrin";//"peregrin_2015"; //$dbname;
        $this->connection = mysqli_connect($this->host, $this->user, $this->pass, $this->dbName);
        $this->connection->set_charset("utf8");
    }

    public function LoadNoticias() {
        $this->connect();
        $result = mysqli_query($this->connection, "select * from NOTICIAS where STATUS='A' and date_format(FECHA,'%c')-date_format(now(),'%c')>=0 ORDER BY IDNOTICIA DESC");
        
        $noticias = array();
        if ($result) {
            
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $noticias[] = $this->fetch($row);
            }
        }
        return $noticias;
    }

    private function fetch($row) {
        $noticia = new noticia(
                $row['IDNOTICIA'], $row['TITULO'], $row['MENSAJE'], $row['FECHA'], $row['STATUS']
        );
        return $noticia;
    }

}

?>  