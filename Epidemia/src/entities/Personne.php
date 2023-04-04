<?php
    class Personne{
        protected $idPersonne;
        protected $nomP;
        protected $prenomP;
        protected $numTel;
        protected $adresse;
        protected $sexe;
        protected $résultat;

        public function __construct(){

        }

        public function getIdPersonne(){
            return $this->idPersonne;
        }
        public function setIdPersonne($idPersonne){
            $this->idPersonne = $idPersonne;
        }

        public function getNomP(){
            return $this->nomP;
        }
        public function setNomP($nomP){
            $this->nomP = $nomP;
        }
        public function getPrenomP(){
            return $this->prenomP;
        }
        public function setPrenomP($prenomP){
            $this->prenomP = $prenomP;
        }

        public function getNumTel(){
            return $this->numTel;
        }
        public function setNumTel($numTel){
            $this->numTel = $numTel;
        }

        public function getAdresse(){
            return $this->adresse;
        }
        public function setAdresse($adresse){
            $this->adresse = $adresse;
        }

        public function getSexe(){
            return $this->sexe;
        }
        public function setSexe($sexe){
            $this->sexe = $sexe;
        }
        public function getRésultat(){
            return $this->résultat;
        }
        public function setRésultat($résultat){
            $this->résultat = $résultat;
        }


    }