<?php
    class Zone{
        protected $idZone;
        protected $nomZone;
        protected $nbrPersSynt;
        protected $nbrPersPositive;

        public function __construct(){

        }

        public function getIdZone(){
            return $this->idZone;
        }
        public function setIdZone($idzone){
            $this->idZone = $idzone;
        }

        public function getNomZone(){
            return $this->nomZone;
        }
        public function setNomZone($nomZone){
            $this->nomZone = $nomZone;
        }

        public function getNbrPersSynt(){
            return $this->nbrPersSynt;
        }
        public function setNbrPersSynt($nbrPersSynt){
            $this->nbrPersSynt = $nbrPersSynt;
        }

        public function getNbrPersPositive(){
            return $this->nbrPersPositive;
        }
        public function setNbrPersPositive($nbrPersPositive){
            $this->nbrPersPositive = $nbrPersPositive;
        }

    }