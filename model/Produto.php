<?php
//ESTA CLASSE FOI IMPLEMENTADA PARA PRATICAR POO, MAS NESTE PROJETO ELA
//PRATICAMENTE NÃO TEM USO;

class Produto{
    private $id;
    private $descricao;
    private $valor;
    private $quantidade;
    private $disponivel;

    public function __construct($id,$desc, $val, $qtd, $disp){
        $this->id = $id;
        $this->descricao = $desc;
        $this->valor = $val;
        $this->quantidade = $qtd;
        $this->disponivel = $disp;
    }

    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->$id = $id;
    }
    public function getDescricao(){
        return $this->descricao;
    }
    public function setDescricao($desc){
        $this->descricao = $desc;
    }
    public function getValor(){
        return $this->valor;
    }
    public function setValor($val){
        $this->valor = $val;
    }
    public function getQuantidade(){
        return $this->quantidade;
    }
    public function setQuantidade($qtd){
        $this->quantidade = $qtd;
    }
    public function getDisponibilidade(){
        return $this->disponivel;
    }
    public function setDisponibilidade($disp){
        $this->disponivel = $disp;
    }


}


?>