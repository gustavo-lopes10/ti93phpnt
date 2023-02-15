<?php 
include "../conn/connect.php";
try {
    $conn->query("delete from tbtipos where id_tipo = ".$_GET['id_tipo']);
    header("location: tipos_lista.php");
}   catch(\Throwable $th) {
    if(str_contains($th, "FOREIGN KEY")){
        $msg_er = "<script>alert('Não foi possível excluir esse tipo por estar associado à um produto')</script>";
        header("location: tipos_lista.php?msg_er=".$msg_er);
    }
}
?>