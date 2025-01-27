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

        $sql= 'SELECT cliente.nome, animal.nome FROM animal INNER JOIN cliente ON animal.id_cliente cliente.id_cliente';

        $fileds= 'cliente.nome, animal.nome';
        $table = 'animal';
        $Ineer =  'INNER JOIN cliente';
        $on= 'ON animal.id_cliente cliente.id_cliente';

        return (new Database('animal'))->select($fileds,$table,$Ineer,$on);

        // print_r($result);
        // exit();

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

