<?php

require_once(__DIR__ . '/../DB/Database.php');



class Consulta{



    public int $id_consulta;
    public string $consulta_date;
    public string $id_animal;
    public string $id_vet;

    


    public function insert_consulta(){

        $db =  new Database('consulta');

        $result = $db->insert(
            [

                'consulta_date'=> $this->consulta_date,
                'id_animal'=> $this->id_animal,
            ]
            
            );

        if ($result){
            return true;
        }else{
            return false;
        }

    }


    public function select_consulta(){
        
        





    }








}

