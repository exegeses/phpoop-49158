<?php

    class Foo
    {
        private static $atrEstatico;

        private function __construct()
        {
            echo 'constructor <br>';
        }

        public function metodoPublico()
        {
            echo 'método público <br>';
        }
        private function metodoPrivado()
        {
            echo 'método privado <br>';
        }
        static function metodoEstatico()
        {
            echo 'método estático <br>';
        }


        public static function getAtrEstatico()
        {
            //return Foo::$atrEstatico;
            return self::$atrEstatico;
        }
        public static function setAtrEstatico($atrEstatico): void
        {
            //Foo::$atrEstatico = $valor;
            self::$atrEstatico = $atrEstatico;
        }


    }

//// en otro archivo
    //$Foo = new Foo; //constructor privado
    //$Foo->metodoPublico();
    //$Foo->metodoPrivado();
    Foo::metodoEstatico();