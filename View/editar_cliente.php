<?php

require '../App/Entity/Cliente.php';

$id_cli_recebido = $_GET['id_cliente'];

if (!isset($id_cli_recebido) || !is_numeric($id_cli_recebido)) {
    header('location: listar_cliente.php');
    exit;
}

$cliente = Cliente::buscar_by_id($id_cli_recebido);

$nome_cli = $cliente->nome;
$cpf = $cliente->cpf;
$cep = $cliente->cep;
$telefone = $cliente->telefone;
$rua = $cliente->rua;
$bairro = $cliente->bairro;
$num_casa = $cliente->numero_casa;
$complemento = $cliente->complemento;


if (isset($_POST['editar'])){
    $nomeN = $_POST['nomeNew'];
    $cpfN = $_POST['CpfNew'];
    $cepN = $_POST['CepNew'];
    $telefoneN = $_POST['telNew'];
    $ruaN = $_POST['RuaNew'];
    $num_casaN = $_POST['NNew'];
    $bairroN = $_POST['BairroNew'];
    $complementoN = $_POST['complNew'];


    $newCli = new Cliente();

    
    $newCli->id_cliente = $id_cli_recebido;
    $newCli->nome_cliente = $nomeN;
    $newCli->cpf = $cpfN;
    $newCli->cep = $cepN;
    $newCli->telefone = $telefoneN;
    $newCli->rua = $ruaN;
    $newCli->bairro = $bairroN;
    $newCli->numero_casa = $num_casaN;
    $newCli->complemento = $complementoN;

    $result = $newCli->atualizar();

    if ($result) {
        echo '<script>alert("Atualizado com sucesso")</script>';
        echo "<meta http-equiv='refresh' content='0.5;url=listar_cliente.php'>";
        exit;
    } else {
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
                    <a href="../View/listar_consultas.php" class="link" >
                        <i class="fa-solid fa-calendar-days"></i>
                        Consultas
                    </a>
                </li>
                <li>
                    <a href="../View/listar_cliente.php" class="link" id="active">
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
                <a href="../View/listar_cliente.php"><i class="fa-solid fa-chevron-left"></i></a>
                <h6>Editar Cliente</h6>
            </div>

        </div>
        <div class="adm_body ">
            <form method="post" action="" class="editar_con">
                <div class="editar_cli">
                    <div class="name_form cli">
                        <h3>Área Cliente</h3>
                    </div>
                    <div class="item_editar">
                        <label for="">Nome Completo</label>
                        <input name="nomeNew" type="text" value="<?=$nome_cli; ?>">
                    </div>
                    <div class="item_editar">
                        <label for="">CPF</label>
                        <input name="CpfNew" type="text" value="<?=$cpf; ?>">
                    </div>
                    <div class="item_editar">
                        <label for="">Telefone</label>
                        <input name="telNew" type="tel" value="<?=$telefone; ?>">
                    </div> 
                    <div class="item_editar">
                        <label for="">CEP</label>
                        <input name="CepNew" type="text" value="<?=$cep; ?>" >
                    </div>
                    <div class="item_editar">
                        <label for="">Rua</label>
                        <input name="RuaNew" type="text" value="<?=$rua; ?>">
                    </div>
                    <div class="item_editar n_casa">
                        <label for="">N*</label>
                        <input name="NNew" type="text" value="<?=$num_casa; ?>">
                    </div>
                    <div class="item_editar">
                        <label for="">Bairro</label>
                        <input name="BairroNew" type="text" value="<?=$bairro; ?>">
                    </div>
                    <div class="item_editar comple">
                        <label for="">Complemento</label>
                        <input name="complNew" type="text" value="<?=$complemento; ?>">
                    </div>
                    <div class="container_btn_vet">
                    <button name="editar" class="btn_vet">Salvar</button>
                </div>
                    
                </div>

            </form>
           

        </div>
    </main>
    
</body>
</html>