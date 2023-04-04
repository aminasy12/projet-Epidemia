<?php
    class Pays{
        protected $idPays;
        protected $nomPays;
        protected $populationTotal;
        protected $listeZone;

        public function __construct(){

        }
        public function getIdPays(){
            return $this->idPays;
        }
        public function setIdPays($idPays){
            $this->idPays = $idPays;
        }
        public function getNomPays(){
            return $this->nomPays;
        }
        public function setNomPays($nomPays){
            $this->nomPays = $nomPays;
        }

        public function getPopulationTotal(){
            return $this->populationTotal;
        }
        public function setPopulationTotal($populationTotal){
            $this->populationTotal = $populationTotal;
        }

        public function getListeZone(){
            return $this->listeZone;
        }
        public function setListeZone($listeZone){
            $this->listeZone = $listeZone;
        }

    }