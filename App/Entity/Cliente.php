<?php

require_once(__DIR__ . '/../DB/Database.php');




class Cliente{



    public int $id_cliente;
    public string $nome_cliente;
    public string $cpf;
    public string $cep;
    public string $telefone;
    public string $rua;
    public string $bairro;
    public int $numero_casa;
    public string $complemento;


    public static function buscar($where=null,$order=null,$limit=null){
        //FETCHALL
        return (new Database('cliente'))->select()->fetchAll(PDO::FETCH_ASSOC);
    }


    public function insert_cliente(){

        $db =  new Database('cliente');

        $result = $db->insert(
            [
                'nome'=> $this->nome_cliente,
                'cep'=> $this->cep,
                'cpf'=> $this->cpf,
                'telefone'=> $this->telefone,
                'rua'=> $this->rua,
                'bairro'=> $this->bairro,
                'numero_casa'=> $this->numero_casa,
                'complemento'=> $this->complemento,
            ]
            
            );

        // $lastid= $db->lastInsertId();
    


        if ($result){
            return $result;
        }else{
            return false;
        }






}














}





