
<?php
require('../conn.php');

$prod_name =$_POST ['prod_name'];
$num_serie = $_POST['num_serie']; 
$categoria = $_POST['categoria'];

if(empty($prod_name) || empty($num_serie)||empty($categoria)){
    print "<script>alert('erro')</script>";
    print "<script>window.location.href='../index.php'</script>";
}else{
    $cad_ferramentas = $pdo->prepare("INSERT INTO ferramentas(nome,num_de_serie,categoria)
    VALUES(:prod_name,:num_serie,:categoria)");
    $cad_ferramentas->execute(array(
        ':prod_name' => $prod_name,
        ':num_serie' => $num_serie,
        ':categoria' => $categoria
    ));
    print "<script>alert('Salvo com sucesso')</script>";
    print "<script>window.location.href='../menu.php'</script>";
	exit();
}
