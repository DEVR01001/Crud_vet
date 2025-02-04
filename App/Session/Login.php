<?php

class Login{

    // Inicia a sessão
    private static function init(){
        if(session_status() !== PHP_SESSION_ACTIVE){
            session_start();
        }

    }


    // Criar a sessão do usuario
    public static function login($obCliente){
        self::init();

        // Sessão de usuario
        $_SESSION['cliente'] =[
            'id_cliente' => $obCliente->id_cliente,
            'nome' => $obCliente->nome,
            'cpf' => $obCliente->cpf,
        ];
        
        header('location: location: ../View/logado.php');
        exit;
    }

    public static function loginADM($obCliente){
        self::init();

        // Sessão de usuario
        $_SESSION['administrador'] =[
            'id_adm' => $obCliente->id_adm,
            'nome' => $obCliente->nome,
            'cpf' => $obCliente->cpf,
        ];
        
        header('location: ../View/listar_consultas.php');
        exit;
    }



    // Verificar se o usuario está logado

    public static function isLogged(){
        self::init();
        return isset($_SESSION['cliente']['id_cliente']);
        
        
    }


    // Obriga o usuario a estar logado para acessar
    public static function requireLogin(){
        if (!self::isLogged()){
            header('location: ../View/login.php');
            exit;
        }

    }




    // Obriga o usuario a estar deslogado para acessar
    public static function requireLogout(){
        if (self::isLogged()){
            header('location: ../View/logado.php');
            exit;
        }
    }

    public static function lougout(){
        session_start();
        session_unset();
        session_destroy();
        header('location: ../View/home.php');
        exit();

    }




}





?>