<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Quina</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<?php
    include_once "conexao/conexao.php";
?>

<div class="quina">
    <form action="#" method="post" name="quinaForm" class="">
        <!--        <input type="text" class="textBtn">-->
        <input type="submit" name="jogar" value="Jogar" id="resposta123" class="btn btn-lg m_t_10">
    </form>
</div>

<?php
    $resultado = '';
    if (isset($_POST['jogar'])){
        $resultado = 'OK';
    }

?>
</div>

<div class="resposta">
    <h3>Resposta do jogo</h3>
    <div class="resultado">
        <input type="text" disabled value="<?php echo $resultado ?>">
    </div></div>

    <div class="cadastrar">
        <h3>Cadastrar jogo</h3>

            <div class="resultado">
            <form action="#" method="post">
            <input type="text" maxlength="5" placeholder="Insira a resposta do JOGO" required name="numerodojogo" onkeypress='return event.charCode>= 48 && event.charCode<= 57'></input>
            <input type="submit" name="cadjogo" value="Cadastrar" id="cadastrar123" class="btn btn-lg m_t_10">
            </form>
            </div></div>


    <?php
    if (isset($_POST['cadjogo'])) {
    $numerodojogo = $_POST['numerodojogo'];
    $sql = "insert into Jogos(Jogo) values('$numerodojogo')";
    $linha = mysqli_query($conn,$sql);
    $linha = mysqli_affected_rows ($conn);
    if ($linha >=1)  {
      echo  "<script> alert ('Jogo cadastrado!');</script>";
    }else{
      echo "<script> alert ('Este jogo já está cadastrado!');</script>";
    }
  }?>

  <?php
  $a = 1;
  $b = 2;
  $c = 3;
    for ($i = 0; $i < 20; $a,$b,$c)
    {
      echo uniqid() , '<br />';
    }

?>



</body>
</html>
