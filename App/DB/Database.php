<?php


class Database{

    public $conection;
    public string $local = 'localhost';
    public string $db = 'Dogma';
    public string $user = 'root';
    public string $password = '';
    public $table;



    public function __construct($table = null) {
        $this->table = $table;
        $this->conecta();
    }

    
    // Função conectar com o banco de dados

    public function conecta(){
        try{
            $this->conection = new PDO("mysql:host=".$this->local.";dbname=$this->db",
            $this->user,$this->password); 
            $this->conection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            // $conn = $this->conection->lastInsertId();
            // print_r($conn);
            return true;
        }catch (PDOException $err){
            die("Connection Failed" . $err->getMessage());
            return false;
        }
    }

    // Função para excutar uma função do banco de dados

    public function execute($query,$binds = []){
        //BINDS = parametros
        try{
            $stmt = $this->conection->prepare($query);
            $stmt->execute($binds);
            return $stmt;
        }catch (PDOException $err) {
            //retirar msg em produção
            die("Connection Failed " . $err->getMessage());

        }

    }

    // Função para inserir algo dados no banco de dados

    public function insert($values){
        $fields = array_keys($values);
        $binds = array_pad([],count($fields),'?');

        $query = 'INSERT INTO ' . $this->table .'  (' .implode(',',$fields). ') VALUES (' .implode(',',$binds).')';


        // echo $query ;
        // print_r( array_values($values));
        // die();


        $this->execute($query,array_values($values));

        return $this->conection->lastInsertId();
        
    }


    // Função para listar dados do banco de dados
    
    public function select($where=null, $order=null, $limit=null, $fields = '*'){

        $where = strlen($where) ? 'WHERE '.$where : '';
        $order = strlen($order) ? 'ORDER '.$order : '';
        $limit = strlen($limit) ? 'LIMIT '.$limit : '';

        // COM FIELDS NA FUNÇÃO SELECT COMO PARAMENTRO = "$fields = '*'
        $query = 'SELECT '.$fields.' FROM '. $this->table.' '.$where.' '.$order.' '.$limit;
        // $query = 'SELECT * FROM '. $this->table.' '.$where.' '.$order.' '.$limit.;

        return $this->execute($query);
        
    }

    public function Inner($fields = '*', $where=null, $order=null){

   
        $query = 'SELECT '.$fields.' FROM '. $this->table.' INNER JOIN '.$where.' ON '.$order;

        // print_r($query);
        // exit();

        return $this->execute($query);
        
    }

   
    public function Inner3($fields = '*', $table1 = null, $condition1 = null, $table2 = null, $condition2 = null, $id){

   
      $query = 'SELECT ' . $fields . 
         ' FROM ' . $this->table . 
         ' INNER JOIN ' . $table1 . ' ON ' . $condition1 . 
         ' INNER JOIN ' . $table2 . ' ON ' . $condition2 . 
         ' WHERE cliente.id_cliente = '.$id;

        // print_r($query);
        // exit();

        return $this->execute($query);
        
    }
    public function Inner2($fields = '*', $where=null, $order=null, $where2=null, $order2=null){

   
        $query = 'SELECT '.$fields.' FROM '. $this->table.' INNER JOIN '.$where.' ON '.$order.' INNER JOIN '.$where2.' ON '.$order2;

        // print_r($query);
        // exit();

        return $this->execute($query);
        
    }


    // Função para deletar dados do banco de dados

    public function delete($where){
        $query = ' DELETE FROM '.$this->table.' WHERE '.$where;

        $result = $this->execute($query);

        return true;

    }


    // Função para editar a dados do banco de dados

    public function update($where, $values){
        $fields = array_keys($values);

        $query = ' UPDATE '.$this->table.' SET '.implode('=?,',$fields).'=? WHERE '.$where;

        $this->execute($query,array_values($values));
        return  true;

    }







}



?>




<!-- 

create database Dogma;

show databases;

use Dogma;

show tables;

drop database Dogma;


create table cliente(
	id_cliente INT NOT NULL AUTO_INCREMENT,
    nome varchar(150) not null,
    cep char(9) not null,
    cpf char(11) unique not null,
    telefone char(11) not null,
    rua varchar(150) not null,
    bairro varchar(150) not null,
    numero_casa int(5) not null,
    complemento varchar(200),
     /*chave primaria*/
    constraint primary key(id_cliente)
);


create table administrador(
	id_adm INT NOT NULL AUTO_INCREMENT,
    nome varchar(150) not null,
    cpf char(11) unique not null,
    
     /*chave primaria*/
    constraint primary key(id_adm)
);


create table veterinario(
	id_vet INT NOT NULL AUTO_INCREMENT,
    nome varchar(150) not null,
    cep char(9) not null,
    cpf char(11) unique not null,
    telefone char(11) not null,
	crmv char(20) unique not null,

     /*chave primaria*/
    constraint primary key(id_vet)
);



create table animal(
	id_animal INT NOT NULL AUTO_INCREMENT,
    nome varchar(150) not null,
    tipo varchar(50) not null,
    idade varchar(50) not null,
    descricao_ani TEXT NOT NULL,
	id_cliente int not null,
    constraint primary key(id_animal),
    
	foreign key(id_cliente) references cliente(id_cliente)
);


CREATE TABLE consulta (
    id_consulta INT NOT NULL AUTO_INCREMENT,
    consulta_date DATE NOT NULL,  
    consulta_time TIME DEFAULT CURRENT_TIME NOT NULL,
    id_animal INT NOT NULL,
    PRIMARY KEY (id_consulta),
    FOREIGN KEY (id_animal) REFERENCES animal(id_animal)
);



 -->

