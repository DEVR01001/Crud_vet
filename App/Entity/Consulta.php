<?php

require_once(__DIR__ . '/../DB/Database.php');



class Consulta{



    public int $id_;
    public string $nome;
    public string $tipo;
    public string $idade;
    public string $descricao;
    public int $id_cliente;

    



    public function insert_animal(){

        $db =  new Database('animal');

        $result = $db->insert(
            [

                'nome'=> $this->nome,
                'tipo'=> $this->tipo,
                'idade'=> $this->idade,
                'descricao_ani'=> $this->descricao,
                'id_cliente'=> $this->id_cliente,


            ]
            
            );

        if ($result){
            return true;
        }else{
            return false;
        }



    }








}

