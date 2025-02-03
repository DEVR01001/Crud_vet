<?php

require '../App/Entity/Veterinario.php';

$id_vet_recebido = $_GET['id_vet'];


if (!isset($id_vet_recebido) || !is_numeric($id_vet_recebido)){
    header ('location: listar_veterinarios.php');
    exit;
    
}


$vet = Veterinario::buscar_by_id($id_vet_recebido);

$id= $vet->id_vet;
$nome= $vet->nome;
$cep= $vet->cep;
$cpf= $vet->cpf;
$telefone= $vet->telefone;
$crmv= $vet->crmv;



if (isset($_POST['editar'])){

    $nome= $_POST['nomeVet'];
    $cpf= $_POST['cpfVet'];
    $cep= $_POST['cepVet'];
    $telefone= $_POST['telefVet'];
    $crmv= $_POST['crmv'];


    $newVet = new Veterinario();


    $newVet->id_vet = $id_vet_recebido;
    $newVet->nome_vet = $nome;
    $newVet->cpf = $cpf;
    $newVet->cep = $cep;
    $newVet->telefone = $telefone;
    $newVet->crmv = $crmv;

    $result = $newVet->atualizar();

    if($result){
        echo '<script> alert("Atualizado com sucesso")</script>';
        echo "<meta http-equiv='refresh' content='0.5;url=listar_veterinarios.php'>";
        exit;
    }else{
        echo "Erro ao atualizar";
    }




}



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
                    <a href="../View/listar_consultas.php" class="link">
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
                    <a href="../View/listar_veterinarios.php" class="link"  id="active">
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
    <main class="container_vet">
        <div class="adm_header">
            <div class="container_adm_title">
                <a href="../View/listar_veterinarios.php"><i class="fa-solid fa-chevron-left"></i></a>
                <h6>Editar</h6>
            </div>

        </div>
        <div class="adm_body">
            <form method="post" class="form_vet" action="">
                <div class="item_vet">
                    <label for="">Nome Completo</label>
                    <input name="nomeVet" type="text" value="<?=$nome; ?>" >
                </div>
                <div class="item_vet">
                    <label for="">CPF</label>
                    <input  name="cpfVet"  type="text" value="<?=$cpf; ?>">
                </div>
                <div class="item_vet">
                    <label for="">CEP</label>
                    <input  name="cepVet"  type="text" value="<?=$cep; ?>">
                </div>
                <div class="item_vet">
                    <label for="">Telefone</label>
                    <input  name="telefVet"  type="text" value="<?=$telefone; ?>">
                </div>
                <div class="item_vet">
                    <label for="">CRMV</label>
                    <input  name="crmv" type="text" value="<?=$crmv; ?>">
                </div>
                <div class="container_btn_vet">
                    <button name="editar" class="btn_vet">Salvar</button>
                </div>
            </form>

        </div>
    </main>
    
</body>
</html>