<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="alta.css">
    <title> Alterar Disciplina </title>
</head>
<body>


 <div class="topo"> Alterar Disciplina </div>
<?php
    require_once('conexao.php');

   $id = $_POST['id'];

   ##sql para selecionar apens um aluno
   $sql = "SELECT * FROM disciplina where id= :id";
   
   # junta o sql a conexao do banco
   $retorno = $conexao->prepare($sql);

   ##diz o paramentro e o tipo  do paramentros
   $retorno->bindParam(':id',$id, PDO::PARAM_INT);

   #executa a estrutura no banco
   $retorno->execute();

  #transforma o retorno em array
   $array_retorno=$retorno->fetch();
   
   ##armazena retorno em variaveis
   $nomedisciplina = $array_retorno['nomedisciplina'];
   $ch = $array_retorno['ch'];
   $semestre = $array_retorno['semestre'];
   $idprofessor = $array_retorno['idprofessor'];
   
  


?>

  <div class="alte">

  <form method="POST" action="crudD.php">

         <div class="linha1"><input type="text" name="nomedisciplina" id="" value=<?php echo $nomedisciplina?> ></div>
                                                
         <div class="linha2"><input type="text" name="ch" id="" value=<?php echo $ch ?> ></div>

         <div class="linha3"><input type="text" name="semestre" id="" value=<?php echo $semestre ?> ></div>

         <div class="linha4"><input type="text" name="idprofessor" id="" value=<?php echo $idprofessor ?> ></div>

         
      
        <input type="hidden" name="id" id="" value=<?php echo $id ?> >
        
        <input type="submit" name="update"  id= "btn" value="Alterar">
  </form>

  </div>

  <div class="rodape">
    Feito por Livia Fernandes Teixeira
  </div>
</body>
</html>