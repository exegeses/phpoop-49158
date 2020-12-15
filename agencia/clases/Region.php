<?php

    class Region
    {
        private $regID;
        private $regNombre;

        public function listarRegiones()
        {
            $link = Conexion::conectar();
            $sql = "SELECT regID, regNombre
                        FROM regiones";
            $stmt = $link->prepare($sql);
            $stmt->execute();

            $regiones = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $regiones;
        }
        
        
        /**
         * @return mixed
         */
        public function getRegID()
        {
            return $this->regID;
        }

        /**
         * @param mixed $regID
         * @return Region
         */
        public function setRegID($regID)
        {
            $this->regID = $regID;
            return $this;
        }

        /**
         * @return mixed
         */
        public function getRegNombre()
        {
            return $this->regNombre;
        }

        /**
         * @param mixed $regNombre
         * @return Region
         */
        public function setRegNombre($regNombre)
        {
            $this->regNombre = $regNombre;
            return $this;
        }

    }