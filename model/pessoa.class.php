<?php

class Pessoa{
    private $txtNome;
    private $txtEnd;

    public function setNome($txtNome){
        $this->txtNome = $txtNome;
    }

    public function getNome(){
        return $this->txtNome;
    }

    public function setEnd($txtEnd){
        $this->txtEnd = $txtNome;
    }

    public function getEnd(){
        return $this->txtEnd;
    }


}