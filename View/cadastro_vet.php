<!-- 

<?php

require '../App/Entity/Veterinario.php';


if(isset($_POST['cadastrarVet'])){


    $nome= $_POST['nomeVet'];
    $cpf= $_POST['cpfVet'];
    $cep= $_POST['cepVet'];
    $telefone= $_POST['telefVet'];
    $crmv= $_POST['crmv'];





    $vet = new Veterinario();

    $vet->nome_vet = $nome;
    $vet->cpf = $cpf;
    $vet->cep = $cep;
    $vet->telefone = $telefone;
    $vet->crmv = $crmv;


    $lastIdVet= $vet->insert_vet();

    if(!$lastIdVet){
        echo "Erro ao cadastrar veterinario!";
        exit();
    }



}





?> -->


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
                <h6>Cadastro Veterinario</h6>
            </div>

        </div>
        <div class="adm_body">
            <form method="post" class="form_vet" action="">
                <div class="item_vet">
                    <label for="">Nome Completo</label>
                    <input name="nomeVet" type="text">
                </div>
                <div class="item_vet">
                    <label for="">CPF</label>
                    <input  name="cpfVet"  type="text">
                </div>
                <div class="item_vet">
                    <label for="">CEP</label>
                    <input  name="cepVet"  type="text">
                </div>
                <div class="item_vet">
                    <label for="">Telefone</label>
                    <input  name="telefVet"  type="text">
                </div>
                <div class="item_vet">
                    <label for="">CRMV</label>
                    <input  name="crmv" type="text">
                </div>
                <div class="container_btn_vet">
                    <button name="cadastrarVet" class="btn_vet">Cadastrar</button>
                </div>
            </form>

        </div>
    </main>
    
</body>
</html>