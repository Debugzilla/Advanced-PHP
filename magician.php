<?php

class magical {
        private $ajustes = [];
    
        public function __get($name) {
            return $this->ajustes[$name] ?? null;
        }
    
        public function __set($name, $value) {
            $this->ajustes[$name] = $value;
        }
    }

    ?>