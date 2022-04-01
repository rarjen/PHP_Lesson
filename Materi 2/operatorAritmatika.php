<?php
    class Operasi{
        public $opr1;
        public $opr2;
        public $result;


        public function tambah($opr1, $opr2){
            $this->opr1 = $opr1;
            $this->opr2 = $opr2;
            $this->result = $this->opr1 + $this->opr2;
            echo ("Hasil: ".$this->result); 
        }
        public function kurang($opr1, $opr2){
            $this->opr1 = $opr1;
            $this->opr2 = $opr2;
            $this->result = $this->opr1 - $this->opr2;
            echo ("Hasil: ".$this->result); 
        }
        public function kali($opr1, $opr2){
            $this->opr1 = $opr1;
            $this->opr2 = $opr2;
            $this->result = $this->opr1 * $this->opr2;
            echo ("Hasil: ".$this->result."<br>"); 
        }
        public function bagi($opr1, $opr2){
            $this->opr1 = $opr1;
            $this->opr2 = $opr2;
            $this->result = $this->opr1 / $this->opr2;
            echo ("Hasil: ".$this->result."<br>"); 
        }
        public function modulo($opr1, $opr2){
            $this->opr1 = $opr1;
            $this->opr2 = $opr2;
            $this->result = $this->opr1 % $this->opr2;
            echo ("Hasil: ".$this->result."<br>"); 
        }
        public function pangkat($opr1, $opr2){
            $this->opr1 = $opr1;
            $this->opr2 = $opr2;
            $this->result = $this->opr1 ** $this->opr2;
            echo ("Hasil: ".$this->result."<br>"); 
        }

    }
    $opr = new Operasi();
    $opr->tambah(2,5);
    $opr->kurang(5,2);
    $opr->kali(2,5);
    $opr->bagi(10,5);
    $opr->modulo(5,2);
    $opr->pangkat(5,2);