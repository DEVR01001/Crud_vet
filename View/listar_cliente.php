
<?php

require '../App/Entity/Cliente.php';


$dados = new Cliente();
$dados_cliente = $dados->buscar();


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
                    <a href="" class="link">
                        <i class="fa-solid fa-calendar-days"></i>
                        Consultas
                    </a>
                </li>
                <li>
                    <a href="" class="link" id="active">
                        <i class="fa-solid fa-user"></i>
                        Clientes
                    </a>
                </li>
                <li>
                    <a href="" class="link">
                        <i class="fa-solid fa-user-doctor"></i>
                        Veterinarios
                    </a>
                </li>
                <li>
                    <a href="" class="link">
                        <i class="fa-solid fa-dog"></i>
                        Animais
                    </a>
                </li>
            </ul>
        </nav>

    </header>
    <main class="container_adm">
        <div class="adm_header">
            <div class="container_adm_title">
                <h6>Clientes</h6>
            </div>

        </div>
        <div class="adm_body">
            <div class="conatiner_listar_adm">
                <table class="lista_adm">
                    <tr>
                        <th class="adm-1">ID Cliente</th>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>CEP</th>
                        <th>CPF</th>
                        <th class="adm-1">Editar</th>
                    </tr>
                    <?php
                    foreach($dados_cliente as $cliente){
                        echo'
                        <tr>
                            <td class="adm-1">'.$cliente['id_cliente'].'</td>
                            <td>'.$cliente['nome'].'</td>
                            <td>'.$cliente['telefone'].'</td>
                            <td>'.$cliente['cep'].'</td>
                            <td>'.$cliente['cpf'].'</td>
                            <td <a class="adm-1" href = "editar.php?id_cliente='.$cliente['id_cliente'].'"><i class="fa-solid fa-eye"></i></a></td>
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