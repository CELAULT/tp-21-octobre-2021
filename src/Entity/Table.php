<?php
    namespace App\Entity;

    class Table
    {
        private $numero;
        private $calcName;

        public function __construct($numero, $calcName = "multiplication")
        {
            $this -> numero = $numero;
            $this -> calcName = $calcName;
        }

        public function calcMultifly($max = 10) : array
        {
            $result = array();
            $calculation = array();

            for ($i = 0; $i < $max; $i++)
            {
                $calculation['indice'] = $i + 1;
                $calculation['result'] = $this -> numero * ($i + 1);

                $result[] = $calculation;
            }

            return $result;
        }
    }
?>