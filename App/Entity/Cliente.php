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





    
    public static function getUsuarioPorCpf($where=null, $order =null, $limit = null){

        return (new Database('cliente'))->select('cpf = "'. $where .'"')->fetchObject(self::class);

 
        

    }

    public static function buscar($where=null,$order=null,$limit=null){
        //FETCHALL
        return (new Database('cliente'))->select()->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function buscar_by_id($id){
        //FETCHALL
        return (new Database('cliente'))->select('id_cliente = '.$id)->fetchObject(self::class);
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





