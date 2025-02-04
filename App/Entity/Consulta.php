<?php

require_once(__DIR__ . '/../DB/Database.php');



class Consulta{



    public int $id_consulta;
    public string $consulta_date;
    public string $id_animal;




    public function getConsultaUser($id){

        $fileds= 'consulta.*, cliente.nome as nomeDono, animal.nome as nomeAnimal, animal.tipo as raçaAnimal ';
        $table = 'animal';
        $table2 = 'cliente';
        $on= 'consulta.id_animal = animal.id_animal';
        $on2 = 'animal.id_cliente = cliente.id_cliente';
        $result = (new Database('consulta'))->Inner3($fileds, $table, $on,$table2,$on2,$id)->fetchAll(PDO::FETCH_ASSOC);


        // print_r($result);
        // exit();
    
       return $result;


    }

    public function getConsulta(){

        $fileds= 'consulta.*, cliente.nome as nomeDono, animal.nome as nomeAnimal, animal.tipo as raçaAnimal ';
        $table = 'animal';
        $table2 = 'cliente';
        $on= 'consulta.id_animal = animal.id_animal';
        $on2 = 'animal.id_cliente = cliente.id_cliente';

        $result = (new Database('consulta'))->Inner2($fileds, $table, $on,$table2,$on2)->fetchAll(PDO::FETCH_ASSOC);
    
       return $result;


    }

    public static function buscar_by_id($id){
        //FETCHALL
        return (new Database('consulta'))->select('id_consulta = '.$id)->fetchObject(self::class);
    }




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

