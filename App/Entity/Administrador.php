<?php

require_once(__DIR__ . '/../DB/Database.php');



class Administrador{


    public int $id_adm;
    public string $nome;
    public string $cpf;


    
    
    public static function getAdmPorCpf($where=null, $order =null, $limit = null){

        return (new Database('administrador'))->select('cpf = "'. $where .'"')->fetchObject(self::class);

 
        

    }





}

