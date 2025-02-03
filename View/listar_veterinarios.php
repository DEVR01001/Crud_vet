

<?php

require '../App/Entity/Veterinario.php';


$dados = new Veterinario();
$dados_vet = $dados->buscar();


?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../Public/css/style.css">

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
                    <a href="../View/listar_animais.php" class="link">
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
    <main class="container_adm">
        <div class="adm_header">
            <div class="container_adm_title">
                <h6>Veterinarios</h6>
            </div>
            <div class="container_btn_cad_vet">
                <a href="../View/cadastro_vet.php" class='btn_vet'>+ Veterinario</a>
            </div>
        </div>
        <div class="adm_body">
            <div class="conatiner_listar_adm">
                <table class="lista_adm">
                    <tr>
                        <th class="adm-1">ID Veterinario</th>
                        <th>Nome</th>
                        <th>CEP</th>
                        <th>CPF</th>
                        <th>Telefone</th>
                        <th>CRMV</th>
                        <th class="adm-1">Editar</th>
                        <th class="adm-1">Ecluir</th>
                    </tr>
                    <?php
                    foreach($dados_vet as $vet){
                        echo'
                        <tr>
                            <td class="adm-1">'.$vet['id_vet'].'</td>
                            <td>'.$vet['nome'].'</td>
                            <td>'.$vet['cep'].'</td>
                            <td>'.$vet['cpf'].'</td>
                            <td>'.$vet['telefone'].'</td>
                            <td>'.$vet['crmv'].'</td>
                            <td> <a class="adm-1" href="editar_vet.php?id_vet='.$vet['id_vet'],'">  <i class="fa-solid fa-eye "></i> </a> </td>
                            <td> <a class="adm-1" href="excluir_vet.php?id_vet='.$vet['id_vet'],'"> <i class="fa-solid fa-trash"></i> </a> </td>
                        </tr>
                        ';
                      }
                ?>
                </table>

            </div>
            

        </div>
    </main>
    
</body>
</html>