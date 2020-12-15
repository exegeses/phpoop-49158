<?php

    class Conexion
    {
        private $link;

        public function conectar()
        {
            $this->link = new PDO(
                'mysql:host=localhost;dbname=agencia',
                'root',
                'root'
            );
            // control de errores
            $this->link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

            return $this->link;
        }
    }