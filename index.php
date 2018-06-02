<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Quina</title>
    <link rel="stylesheet" href="est.css">
</head>
<body>
<?php
    include_once "classesPhp/Conexao/ConexaoDB.php";
    
    $con = new ConexaoDB();
?>

<div class="quina">
    <form action="#" method="post" name="quinaForm" class="">
        <!--        <input type="text" class="textBtn">-->
        <input type="submit" name="jogar" value="Jogar" class="btn btn-lg m_t_10">
    </form>
</div>

<?php
    $resultado = '';
    if (isset($_POST['jogar'])){
        $resultado = 'OK';
    }

?>
<div class="resposta">
    <h3>Resposta</h3>
    <div class="resultado">
        <input type="text" disabled value="<?php echo $resultado ?>">
    </div>
</div>
</body>
</html>
