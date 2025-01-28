<?php


require '../App/Entity/Veterinario.php';

$vet = new Veterinario();

$id = $_GET['id_vet'];

$result = $vet->excluir($id);


if($result){
    echo '<script> alert("Veterinario excluido com sucesso!! ")  </script> ';
    echo "<meta http-equiv='refresh' content='0.5;url=listar_veterinarios.php'>";
}
else{
    echo '<script> alert("Erro ao excluir !! ")  </script> ';

}

