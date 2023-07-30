<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="alta.css">
    <title>AltProfessor </title>
</head>


<body>


 <div class="topo"> Alterar Professor </div>
<?php
    require_once('conexao.php');

   $id = $_POST['id'];

   ##sql para selecionar apens um aluno
   $sql = "SELECT * FROM Professor where id= :id";
   
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
   $cpf = $array_retorno['cpf'];
   $endereco = $array_retorno['endereco'];
   $estatus = $array_retorno['estatus'];
  


?>

  <div class="alte">

  <form method="POST" action="crudprof.php">

         <div class="linha1"><input type="text" name="nome" id=""   placeholder="Digite seu nome" value=<?php echo $nome?> > </div>
                                                
         <div class="linha2"> 
         <input type="radio" name="idade" value=""  <?php echo $idade ?>> 18 a 22 <br>
         <input type="radio" name="idade" value="">  23 a 30 <br>
         <input type="radio" name="idade" value=""> acima de 31</div>

         <div class="linha3"><input type="text" name="endereco" id=""  placeholder="Digite seu endereço" value=<?php echo $endereco ?> ></div>

         <div class="linha4"><input type="text" name="estatus" id=""   placeholder="Digite seu status" value=<?php echo $estatus ?> ></div>

         <div class="linha5"><input type="password" name="cpf" id="" placeholder="Digite seu cpf" value=<?php echo $cpf ?> ></div>
      
        <input type="hidden" name="id" id="" value=<?php echo $id ?> >
        
        <input type="submit" name="update"  id= "btn" value="Alterar">
  </form>

  </div>

  <div class="rodape">
    Feito por Livia Fernandes Teixeira
  </div>
</body>
</html>