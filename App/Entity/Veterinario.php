<?php

require_once(__DIR__ . '/../DB/Database.php');




class Veterinario{



    public int $id_vet;
    public string $nome_vet;
    public string $cep;
    public string $cpf;
    public string $telefone;
    public string $crmv;



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





