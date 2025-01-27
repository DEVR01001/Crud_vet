<?php

require_once(__DIR__ . '/../DB/Database.php');



class Animal{


    public int $id_animal;
    public string $nome;
    public string $tipo;
    public string $idade;
    public string $descricao;
    public int $id_cliente;



    public static function buscar($where=null,$order=null,$limit=null){
        //FETCHALL
        return (new Database('animal'))->select()->fetchAll(PDO::FETCH_ASSOC);
    }


    public function getNomeDono(){

        

        $fileds= 'animal.*, cliente.nome as nomeDono ';
        $table = 'cliente';
        $on= 'animal.id_cliente = cliente.id_cliente';

        $result = (new Database('animal'))->Inner($fileds, $table, $on)->fetchAll(PDO::FETCH_ASSOC);
    
       return $result;


    }




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

