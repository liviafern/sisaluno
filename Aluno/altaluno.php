<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="alta.css">
    <title>Altaluno </title>
</head>
<body>


 <div class="topo"> Altarar Aluno </div>
<?php
    require_once('conexao.php');

   $id = $_POST['id'];

   ##sql para selecionar apens um aluno
   $sql = "SELECT * FROM aluno where id= :id";
   
   # junta o sql a conexao do banco
   $retorno = $conexao->prepare($sql);

   ##diz o paramentro e o tipo  do paramentros
   $retorno->bindParam(':id',$id, PDO::PARAM_INT);

   #executa a estrutura no banco
   $retorno->execute();

  #transforma o retorno em array
   $array_retorno=$retorno->fetch();
   
   ##armazena retorno em variaveis
   $nome = $array_retorno['nome'];
   $idade = $array_retorno['idade'];
   $matricula = $array_retorno['matricula'];
   $endereco = $array_retorno['endereco'];
   $estatus = $array_retorno['estatus'];
  


?>

  <div class="alte">

  <form method="POST" action="crudaluno.php">

         <div class="linha1"><input type="text" name="nome" id="" value=<?php echo $nome?> ></div>
                                                
         <div class="linha2"><input type="text" name="idade" id="" value=<?php echo $idade ?> ></div>

         <div class="linha3"><input type="text" name="endereco" id="" value=<?php echo $endereco ?> ></div>

         <div class="linha4"><input type="text" name="estatus" id="" value=<?php echo $estatus ?> ></div>

         <div class="linha5"><input type="text" name="matricula" id="" value=<?php echo $matricula ?> ></div>
      
        <input type="hidden" name="id" id="" value=<?php echo $id ?> >
        
        <input type="submit" name="update"  id= "btn" value="Alterar">
  </form>

  </div>

  <div class="rodape">
    Feito por Livia Fernandes Teixeira
  </div>
</body>
</html>