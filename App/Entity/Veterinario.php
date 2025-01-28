<?php

require_once(__DIR__ . '/../DB/Database.php');




class Veterinario{



    public int $id_vet;
    public string $nome_vet;
    public string $cep;
    public string $cpf;
    public string $telefone;
    public string $crmv;



    public static function buscar($where=null,$order=null,$limit=null){
        //FETCHALL
        return (new Database('veterinario'))->select()->fetchAll(PDO::FETCH_ASSOC);
    }


    public static function buscar_by_id($id){
        //FETCHALL
        return (new Database('veterinario'))->select('id_vet = '.$id)->fetchObject(self::class);
    }

    public function excluir($id){
        return (new Database('veterinario'))->delete('id_vet = '.$id);

    }

    
    public function atualizar(){
        return (new Database('veterinario'))->update('id_vet ='. $this->id_vet,[
                                'nome'=> $this->nome_vet,
                                'cep'=> $this->cep,
                                'cpf'=> $this->cpf,
                                'telefone'=> $this->telefone,
                                'crmv'=> $this->crmv,
        ]);

        

    }

    
    public function insert_vet(){

        $db =  new Database('veterinario');

        $result = $db->insert(
            [
                'nome'=> $this->nome_vet,
                'cep'=> $this->cep,
                'cpf'=> $this->cpf,
                'telefone'=> $this->telefone,
                'crmv'=> $this->crmv,
            ]
            
            );



        if ($result){
            return $result;
        }else{
            return false;
        }




}







}





