<?php

require '../App/Entity/Consulta.php';
require '../App/Entity/Animal.php';

$id_cons_recebido = $_GET['id_consulta'];


if (!isset($id_cons_recebido) || !is_numeric($id_cons_recebido)){
    header ('location: user_consulta.php');
    exit;
    
}

$consulta = Consulta::buscar_by_id($id_cons_recebido);



$id_con= $consulta->id_consulta;
$data = $consulta->consulta_date;


// print_r($consulta);
// exit();

$id_animal = $consulta->id_animal;



$animal = Animal::buscar_by_id($id_animal);


$id_ani= $animal->id_animal;
$nome_ani= $animal->nome;
$raça= $animal->tipo;
$idade= $animal->idade;
$descricao_ani= $animal->descricao_ani;



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
                <a href="../View/logado.php"><img src="../Public/img/D-removebg-preview.png" alt=""></a>
            </div>
        </nav>
    </header>
    <main>
        <div class="container_cad">
            <div class="header_cad">
                <div class="container_sair_cad">
                    <a href="../View/user_consulta.php" class="container_seta">
                        <i class="fa-solid fa-arrow-left"></i>
                    </a>
                    <h6>Consulta (<?=$id_con; ?>) </h6>
                </div>
            </div>
            <div class="body_cad">
                <form method="post" class="form_add" action="">
                    <div class="container_ani">
                        <div class="name_form ani">
                            <h3>Área Animal</h3>
                        </div>
                        <div class="ani_header">
                            <div class="item_colunm">
                                <label for="">Nome</label>
                                <input name="nome_ani" type="text"  value="<?=$nome_ani; ?>">
                            </div>
                            <div class="item_colunm">
                                <label for="">Raça</label>
                                <input name="raça" type="text"  value="<?=$raça; ?>">
                            </div>
                            <div class="item_colunm n_casa">
                                <label for="">Idade</label>
                                <input name="idade" type="text"  value="<?=$idade; ?>">
                            </div>
                        </div>
                        <div class="body_ani">
                            <div class="container_text_ani">
                                <h6>Descrição breve com detalhes o que está acontecendo com seu cachorro para que possamos entender melhor seu estado e oferecer o cuidado adequado.</h6>
                            </div>
                            <div class="item_colunm">
                                <label for="">Descrição</label>
                                <textarea name="descricao" id="" cols="30" rows="10" readonly><?=$descricao_ani; ?></textarea>
                            </div>
                        </div>

                    </div>
                    <div class="container_consulta">
                        <div class="container_text_ani">
                            <h6>Dia da sua consulta.</h6>
                        </div>
                        <div class="item_colunm">
                            <label for="">data</label>
                            <input name="date" type="date" value="<?=$data; ?>">
                        </div>
                    </div>
                    <!-- <div class="contanier_btn_cad">
                        <button name="cadastrar" class="btn_salvar">Confirmar</button>
                    </div> -->

                </form>

            </div>
        </div>

    </main>
    
</body>
</html>