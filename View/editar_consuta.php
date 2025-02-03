<?php

require '../App/Entity/Consulta.php';
require '../App/Entity/Cliente.php';
require '../App/Entity/Animal.php';


$id_ani_recebido = $_GET['id_animal'];


if (!isset($id_ani_recebido) || !is_numeric($id_ani_recebido)){
    header ('location: listar_consultas.php');
    exit;
    
}


$animal = Animal::buscar_by_id($id_ani_recebido);



$id_ani= $animal->id_animal;


$nome_ani= $animal->nome;
$raça= $animal->tipo;
$idade= $animal->idade;
$descricao_ani= $animal->descricao_ani;
$id_cli = $animal->id_cliente;


$cliente = Cliente::buscar_by_id($id_cli);



$nome_cli= $cliente->nome;
$cpf= $cliente->cpf;
$cep= $cliente->cep;
$telefone= $cliente->telefone;
$rua= $cliente->rua;
$bairro= $cliente->bairro;
$num_casa= $cliente->numero_casa;
$complemento= $cliente->complemento






?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../Public/css/style.css">
    <link rel="stylesheet" href="../Public/css/nav_adm.css">

    <!-- SCRIPT -->




    <!-- SWIPER -->
 

    <title>Dogma ADM</title>
</head>
<body class="adm_body">
    <header class="adm">
        <div class="container_img_adm">
            <img src="../Public/img/D-removebg-preview.png" alt="">
        </div>
        <nav class="nav_adm">
            <ul>
                <li>
                    <a href="../View/listar_consultas.php" class="link" id="active">
                        <i class="fa-solid fa-calendar-days"></i>
                        Consultas
                    </a>
                </li>
                <li>
                    <a href="../View/listar_cliente.php" class="link">
                        <i class="fa-solid fa-user"></i>
                        Clientes
                    </a>
                </li>
                <li>
                    <a href="../View/listar_veterinarios.php" class="link"  >
                        <i class="fa-solid fa-user-doctor"></i>
                        Veterinarios
                    </a>
                </li>
                <li>
                    <a href="../View/listar_animais.php" class="link" >
                        <i class="fa-solid fa-dog"></i>
                        Animais
                    </a>
                </li>
            </ul>
        </nav>
        <div class="container_btn_sair">
            <a href="../View/home.php"><i class="fa-solid fa-arrow-left"></i>Sair</a>
        </div>

    </header>
    <main class="container_con">
        <div class="adm_header">
            <div class="container_adm_title">
                <a href="../View/listar_consultas.php"><i class="fa-solid fa-chevron-left"></i></a>
                <h6>Consulta</h6>
            </div>

        </div>
        <div class="adm_body ">
            <form action="" class="editar_con">
                <div class="editar_cli">
                    <div class="name_form cli">
                        <h3>Área Cliente</h3>
                    </div>
                    <div class="item_editar">
                        <label for="">Nome Completo</label>
                        <input type="text" value="<?=$nome_cli; ?>">
                    </div>
                    <div class="item_editar">
                        <label for="">CPF</label>
                        <input type="text" value="<?=$cpf; ?>">
                    </div>
                    <div class="item_editar">
                        <label for="">Telefone</label>
                        <input type="tel" value="<?=$telefone; ?>">
                    </div> 
                    <div class="item_editar">
                        <label for="">CEP</label>
                        <input type="text" value="<?=$cep; ?>" >
                    </div>
                    <div class="item_editar">
                        <label for="">Rua</label>
                        <input type="text" value="<?=$rua; ?>">
                    </div>
                    <div class="item_editar n_casa">
                        <label for="">N*</label>
                        <input type="text" value="<?=$num_casa; ?>">
                    </div>
                    <div class="item_editar">
                        <label for="">Bairro</label>
                        <input type="text" value="<?=$bairro; ?>">
                    </div>
                    <div class="item_editar comple">
                        <label for="">Complemento</label>
                        <input type="text" value="<?=$complemento; ?>">
                    </div>
                    
                </div>
                <div class="editar_ani">
                    <div class="name_form ani">
                        <h3>Área Animal</h3>
                    </div>
                    <div class="item_editar">
                        <label for="">Nome</label>
                        <input type="text" value="<?=$nome_ani; ?>">
                    </div>
                    <div class="item_editar">
                        <label for="">Raça</label>
                        <input type="text" value="<?=$raça; ?>">
                    </div>
                    <div class="item_editar n_casa">
                        <label for="">Idade</label>
                        <input type="text" value="<?=$idade; ?>">
                    </div>
                    <div class="item_editar">
                        <label for="">Descrição</label>
                        <textarea name="descricao" id="" cols="30" rows="10" placeholder="<?=$descricao_ani; ?>"></textarea>
                    </div>
                </div>

            </form>
           

        </div>
    </main>
    
</body>
</html>