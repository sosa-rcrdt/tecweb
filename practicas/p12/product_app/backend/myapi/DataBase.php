<?php
    namespace TECWEB\MYAPI;
    abstract class DataBase {
        protected $conexion;
        protected $data;

        public function __construct($db, $user, $pass) {
            $this->conexion = new \mysqli('localhost', 'root', 'changocome', 'marketzone', 3307);
            $this->data = array();
        }
    }
?>