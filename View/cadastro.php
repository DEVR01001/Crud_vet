<?php

require '../App/Entity/Animal.php';
require '../App/Entity/Cliente.php';
require '../App/Entity/Consulta.php';


if (isset($_POST['cadastrar'])) {




    $nome_cli = $_POST['nome_cli'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $cep = $_POST['cep'];
    $rua = $_POST['rua'];
    $num_casa = $_POST['num_casa'];
    $bairro = $_POST['bairro'];
    $complemento = $_POST['complemento'];


    $cliente = new Cliente();
    $cliente->nome_cliente = $nome_cli;
    $cliente->cpf = $cpf;
    $cliente->telefone = $telefone;
    $cliente->cep = $cep;
    $cliente->rua = $rua;
    $cliente->numero_casa = $num_casa;
    $cliente->bairro = $bairro;
    $cliente->complemento = $complemento;

    $lastId_cli = $cliente->insert_cliente();

    if (!$lastId_cli) {
        echo "Erro ao cadastrar cliente!";
        exit();
    }





    

    $nome_ani = $_POST['nome_ani'];
    $raca = $_POST['raça'];
    $idade = $_POST['idade'];
    $descricao = $_POST['descricao'];


    $animal = new Animal();
    $animal->nome = $nome_ani;
    $animal->tipo = $raca;
    $animal->idade = $idade;
    $animal->descricao = $descricao;
    $animal->id_cliente = $lastId_cli;

    $lastId_ani = $animal->insert_animal();

    if (!$lastId_ani) {
        echo "Erro ao cadastrar animal!";
        exit();
    }




    $date_consulta = $_POST['date'];

    $consulta = new Consulta();
    $consulta->consulta_date = $date_consulta;
    $consulta->id_animal = $lastId_ani;

    $resultado_consulta = $consulta->insert_consulta();

    if ($resultado_consulta) {
        return true;
    } else {
        echo "Erro ao cadastrar consulta!";
    }
}
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/css/style.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Cadastro</title>
</head>
<body>
    <header>
        <nav class="cad_nav">
            <div class="img_container_logo">
                <a href="../View/home.php"><img src="../Public/img/D-removebg-preview.png" alt=""></a>
            </div>
        </nav>
    </header>
    <main>
        <div class="container_cad">
            <div class="header_cad">
                <div class="container_sair_cad">
                    <a href="../View/home.php" class="container_seta">
                        <i class="fa-solid fa-arrow-left"></i>
                    </a>
                    <h6>Agendamento de Consulta</h6>
                </div>
            </div>
            <div class="body_cad">
                <form method="post" class="form_add" action="">
                    <div class="container_cli">
                        <div class="name_form cli">
                            <h3>Área Cliente</h3>
                        </div>
                        <div class="item_colunm">
                            <label for="">Nome Completo</label>
                            <input name="nome_cli" type="text">
                        </div>
                        <div class="item_colunm">
                            <label for="">CPF</label>
                            <input name="cpf" type="number">
                        </div>
                        <div class="item_colunm">
                            <label for="">Telefone</label>
                            <input name="telefone" type="tel">
                        </div>
                        <div class="item_colunm">
                            <label for="">CEP</label>
                            <input name="cep" type="number">
                        </div>
                        <div class="item_colunm">
                            <label for="">Rua</label>
                            <input name="rua" type="text">
                        </div>
                        <div class="item_colunm n_casa">
                        <label for="">Nº Casa</label>
                        <input name="num_casa" type="number">
                        </div>
                        <div class="item_colunm">
                            <label for="">Bairro</label>
                            <input name="bairro" type="text">
                        </div>
                        <div class="item_colunm comple">
                            <label for="">Complemento</label>
                            <input name="complemento" type="text">
                        </div>
                    </div>
                    <div class="shape"></div>
                    <div class="container_ani">
                        <div class="name_form ani">
                            <h3>Área Animal</h3>
                        </div>
                        <div class="ani_header">
                            <div class="item_colunm">
                                <label for="">Nome</label>
                                <input name="nome_ani" type="text">
                            </div>
                            <div class="item_colunm">
                                <label for="">Raça</label>
                                <input name="raça" type="text">
                            </div>
                            <div class="item_colunm n_casa">
                                <label for="">Idade</label>
                                <input name="idade" type="text">
                            </div>
                        </div>
                        <div class="body_ani">
                            <div class="container_text_ani">
                                <h6>Descreva com detalhes o que está acontecendo com seu cachorro para que possamos entender melhor seu estado e oferecer o cuidado adequado.</h6>
                            </div>
                            <div class="item_colunm">
                                <label for="">Descrição</label>
                                <textarea name="descricao" id="" cols="30" rows="10"></textarea>
                            </div>
                        </div>

                    </div>
                    <div class="container_consulta">
                        <div class="container_text_ani">
                            <h6>Agende o dia da sua consulta (Atedimento por ordem de chegada).</h6>
                        </div>
                        <div class="item_colunm">
                            <label for="">data</label>
                            <input name="date" type="date">
                        </div>
                    </div>
                    <div class="contanier_btn_cad">
                        <button name="cadastrar" class="btn_salvar">Confirmar</button>
                    </div>

                </form>

            </div>
        </div>

    </main>
    
</body>
</html>