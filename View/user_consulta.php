
<?php

require '../App/Entity/Consulta.php';

require '../App/Session/Login.php';

Login::requireLogin();

$dados = new Consulta();



if (isset($_SESSION['cliente'])){

    $id = $_SESSION['cliente'];

    $idCli= $id['id_cliente'];



}


$result = $dados->getConsultaUser($idCli);


// print_r($result);
// exit();
    



?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../Public/css/style.css">

    <!-- SCRIPT -->

    <script src="../Public/js/swiper.js" defer></script>

    <!-- SWIPER -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <title>Dogma</title>
</head>
<body>
    <header class="header_user">
        <nav>
            <div class="img_container_logo">
                <a href="../View/logado.php"><img src="../Public/img/D-removebg-preview.png" alt=""></a>
            </div>
            <ul>
                <li>
                    <a href="#serviços"></a>
                </li>
                <li>
                    <a href="#sobre"></a>
                </li>
                <li>
                    <a href="#avaliações"></a>
                </li>
                <li>
                    <a href="#contato"></a>
                </li>
                <li>
                    <a href="../View/user_consulta.html"></a>
                </li>
            </ul>
            <div class="container_btn_consulta">
                <a href="../View/cadastro_logado.php" class="btn_consulta">+ Consulta</a>
            </div>

        </nav>
    </header>
    <main>
        <div class="container_user_consultas">
        <div class="header_cad">
                <div class="container_sair_cad">
                    <a href="../View/logado.php" class="container_seta">
                        <i class="fa-solid fa-arrow-left"></i>
                    </a>
                    <h6>Histórico de Consultas </h6>
                </div>
            </div>
            <table class="table_user">
                <tr>
                    <th class="td-1">Id Consulta</th>
                    <th>Animal</th>
                    <th>Raça</th>
                    <th>Data</th>
                    <th class="td-1">Mais</th>
                </tr>
                <?php
                    foreach($result as $consulta){
                        echo'
                        <tr>
                            <td class="td-1">'.$consulta['id_consulta'].'</td>
                            <td>'.$consulta['nomeAnimal'].'</td>
                            <td>'.$consulta['raçaAnimal'].'</td>
                            <td>'.$consulta['consulta_date'].'</td>
                             <td> <a class="td-2" href="ver_consulta_user.php?id_consulta='.$consulta['id_consulta'],'">  <i class="fa-solid fa-eye "></i> </a> </td>
                        </tr>
                        ';

                      }
                ?>
            </table>
        </div>
    </main>
    
</body>
</html>