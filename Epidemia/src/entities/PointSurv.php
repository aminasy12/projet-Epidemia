<?php
    class PointSurv{
        protected $idPointS;
        protected $nomPointS;
        
        public function __construct(){

        }
        public function getIdPointS(){
            return $this->idPointS;
        }
        public function setIdPointS($idPointS){
            $this->idPointS = $idPointS;
        }

        public function getNomPointS(){
            return $this->nomPointS;
        }
        public function setNomPointS($nomPointS){
            $this->nomPointS = $nomPointS;
        }

    }